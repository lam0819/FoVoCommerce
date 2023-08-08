<div class="py-12 max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-8">
@foreach($products as $index => $product)
    <x-product-card :product="$product" :key="$index" />
@endforeach
</div>