<div>
    {{-- breadcrumb --}}
    <div class="mt-4">
        @livewire('components.breadcrumb', ['backLink' => '/'])
    </div>

    {{-- list products --}}
    <div class="mt-12 px-4">
        <h1>This is product for {{ $product->name }}</h1>
    </div>
</div>
