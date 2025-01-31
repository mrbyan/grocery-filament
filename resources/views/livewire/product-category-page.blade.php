<div>
    {{-- breadcrumb --}}
    <div class="mt-4">
        @livewire('components.breadcrumb', ['label' => $category->name, 'backLink' => '/'])
    </div>

    {{-- list products --}}
    <div class="mt-12 px-4">
        <div class="grid grid-cols-2 gap-6 mt-4">
            @foreach ($products as $product)
                <div class="flex flex-col items-center rounded relative bg-white" wire:key="product-{{ $product->id }}">
                    {{-- new badge --}}
                    <div
                        class="absolute
                    top-0 right-0 bg-primary/10 text-primary text-xs font-medium px-2 py-1 rounded">
                        Unggulan
                    </div>

                    {{-- product image and detail --}}
                    <a href="{{ '/products/' . $product->slug }}" wire:navigate>
                        <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/apple.png') }}"
                            class="px-7 pt-6" alt="" />
                        <div class="flex flex-col items-center mt-2">
                            <p class="text-xs mt-2 text-primary">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </p>
                            <p class="text-sm font-semibold truncate w-28 text-center">
                                {{ $product->name }}
                            </p>
                        </div>
                    </a>

                    {{-- cart button --}}
                    <div
                        class="flex justify-center items-center w-full mt-3 gap-2 border-t-2 border-slate-50 p-4 hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="text-primary size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        <p class="text-sm font-medium">Tambahkan</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
