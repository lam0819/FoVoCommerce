@props([
    'cartItems' => collect(),
    'title' => 'Doggy Stickers'
])

<header class="border-b border-palette-lighter sticky top-0 z-20 bg-white">
    <div class="flex items-center justify-between mx-auto max-w-6xl px-6 pb-2 pt-4 md:pt-6">
        <a href="/" wire:navigate>
            <h1 class="flex no-underline">
                <img height="32" width="32" alt="logo" class="h-8 w-8 mr-1 object-contain" src="/icon.svg" />
                <span class="text-xl font-primary font-bold tracking-tight pt-1">
                {{ $title }}
                </span>
            </h1>
        </a>
      <div>
        <a href="/cart" wire:navigate>
          <a class=" relative" aria-label="cart">
            <x-fas-shopping-cart class="text-palette-primary w-6 m-auto"/>
            @if(count($cartItems) !== 0)
                <div class="absolute top-0 right-0 text-xs bg-yellow-300 text-gray-900 font-semibold rounded-full py-1 px-2 transform translate-x-10 -translate-y-3">{{ $cartItems }}</div>
            @endif
          </a>
        </a>
      </div>
    </div>
  </header>