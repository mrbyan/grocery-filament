<div>
    {{-- breadcrumb --}}
    <div class="mt-4">
        @livewire('components.breadcrumb', ['label' => 'Categories', 'backLink' => '/'])
    </div>

    {{-- list category --}}
    <div class="mt-12 px-4">
        <div class="grid grid-cols-3 gap-9 mt-2">
            @foreach ($categories as $category)
                <a href="{{ '/products-category/' . $category->slug }}" wire:navigate
                    wire:key="category-{{ $category->id }}" class="flex flex-col items-center gap-3">
                    <div>
                        <img class="rounded-full bg-primary/10 p-2 w-16 h-16"
                            src="{{ $category->image ? asset('storage/' . $category->image) : asset('images/apple.png') }}"
                            alt="" />
                    </div>
                    <p class="text-center text-xs">{{ $category->name }}</p>
                </a>
            @endforeach
        </div>
    </div>
</div>
