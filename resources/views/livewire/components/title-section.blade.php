<div class="flex justify-between items-center">
    <h1 class="text-lg font-semibold">{{ $label }}</h1>
    @if ($route)
        <a href="{{ route($route) }}" wire:navigate>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </a>
    @endif
</div>
