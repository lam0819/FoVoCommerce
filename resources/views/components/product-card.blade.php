<a href="/products/{{ $product['id'] }}" 
    wire:key="{{ $product['id'] }}"
    wire:navigate
    class="h-120 w-72 rounded shadow-lg mx-auto border border-palette-lighter">
        <div class="h-72 border-b-2 border-palette-lighter relative overflow-hidden">
            <img src={{ $product['thumbnail'] ?? '' }} alt={{ $product['description'] ?? '' }} class="transform duration-500 ease-in-out hover:scale-110">
        </div>
        <div class="h-48 relative">
            <div class="font-primary text-palette-primary text-2xl pt-4 px-4 font-semibold">
                {{ $product['title'] ?? '' }}
            </div>
            <div class="text-lg text-gray-600 p-4 font-primary font-light">
                {{ $product['description'] ?? '' }}
            </div>
            <div class="text-palette-dark font-primary font-medium text-base absolute bottom-0 right-0 mb-4 pl-8 pr-4 pb-1 pt-2 bg-palette-lighter 
            rounded-tl-sm triangle"
            >
            <x-price class="text-lg">
                <x-slot name="currency">$</x-slot>
                {{ $product['price'] ?? '' }}
            </x-price>
            </div>
        </div>
    </a>