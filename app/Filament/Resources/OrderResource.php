<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Components\Tab;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('address_id', null)),

                Forms\Components\Repeater::make('items')
                    // ->hiddenLabel()
                    ->label('Order Items')
                    ->relationship('orderItems')
                    ->collapsed()
                    ->schema([
                        Forms\Components\Select::make('product_id')
                            ->label('Product')
                            ->options(function () {
                                return Product::all()
                                    ->mapWithKeys(function ($product) {
                                        return [$product->id => $product->name];
                                    });
                            })
                            ->required()
                            ->searchable()
                            ->preload()
                            ->distinct()
                            ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                            ->reactive()
                            ->afterStateUpdated(fn ($state, Set $set) => $set('unit_amount', Product::find($state)?->price ?? 0))
                            ->afterStateUpdated(fn ($state, Set $set) => $set('total_amount', Product::find($state)?->price ?? 0)),

                        Forms\Components\TextInput::make('quantity')
                            ->label('Quantity')
                            ->numeric()
                            ->required()
                            ->default(1)
                            ->minValue(1)
                            ->reactive()
                            ->afterStateUpdated(fn ($state, Set $set, Get $get) => $set('total_amount', $state * $get('unit_amount'))),

                        Forms\Components\TextInput::make('unit_amount')
                            ->label('Unit Amount')
                            ->numeric()
                            ->required()
                            ->disabled()
                            ->dehydrated(),

                        Forms\Components\TextInput::make('total_amount')
                            ->label('Total Amount')
                            ->numeric()
                            ->required()
                            ->dehydrated(),
                    ])
                    ->itemLabel(fn (array $state): ?string => isset($state['product_id'])
                        ? Product::find($state['product_id'])?->name . ' (' . $state['quantity'] . ')'
                        : null
                ),

                Forms\Components\Placeholder::make('grand_total_placeholder')
                    ->label('Grand Total')
                    ->content(function (Get $get, Set $set) {
                        $total = 0;
                        if ($repeaters = $get('items')) {
                            foreach ($repeaters as $key => $repeater) {
                                $total += $get('items.' . $key . '.total_amount');
                            }
                        }
                        $set('grand_total', $total);
                        return 'Rp ' . number_format($total, 2, ',', '.');
                    }),

                Forms\Components\Hidden::make('grand_total')
                        ->default(0),

                Forms\Components\Radio::make('address_id')
                    ->label('Address')
                    ->options(function (callable $get) {
                        $userId = $get('user_id');
                        return \App\Models\Address::where('user_id', $userId)
                            ->get()
                            ->pluck('label', 'id');
                    })
                    ->descriptions(function (callable $get) {
                        $userId = $get('user_id');
                        return \App\Models\Address::where('user_id', $userId)
                            ->get()
                            ->pluck('address', 'id');
                    })
                    ->required()
                    ->inline(),

                Forms\Components\ToggleButtons::make('status')
                    ->options([
                        'process' => 'Process',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->colors([
                        'process' => 'warning',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                    ])
                    ->icons([
                        'process' => 'heroicon-m-truck',
                        'completed' => 'heroicon-m-check-badge',
                        'cancelled' => 'heroicon-m-x-circle',
                    ])
                    ->required()
                    ->default('process')
                    ->inline(),

                Forms\Components\Radio::make('payment_method')
                    ->options([
                        'transfer' => 'Transfer',
                        'cash_on_delivery' => 'Cash on Delivery',
                    ])
                    ->required()
                    ->default('cash_on_delivery')
                    ->inline(),

                Forms\Components\TextInput::make('notes')
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('payment_proof')
                    ->image()
                    ->directory('images/payments'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Customer')
                    ->searchable(),

                Tables\Columns\TextColumn::make('address.address')
                    ->sortable(),

                Tables\Columns\TextColumn::make('grand_total')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 2, ',', '.'))
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (Order $record) => match ($record->status) {
                        'process' => 'warning',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                    }),

                Tables\Columns\TextColumn::make('payment_method'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
