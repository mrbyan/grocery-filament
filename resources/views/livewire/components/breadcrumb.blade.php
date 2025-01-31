<div class="flex items-center justify-between p-4 bg-white sticky top-0 z-10">
    <a href="{{ $backLink }}" wire:navigate>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
        </svg>
    </a>
    <p class="flex-1 text-center font-semibold">{{ $label }}</p>
</div>
