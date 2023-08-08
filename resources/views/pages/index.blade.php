<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Stringable;
use function Livewire\Volt\computed;

$products = computed(function() {
    return Http::get('https://dummyjson.com/products')->json()['products'];
});

?>

<x-layout>
    <x-store-heading></x-store-heading>
    @volt
        <section>
            <x-product-listings :products="$this->products"></x-product-listings>
        </section>
    @endvolt
</x-layout>