{{-- Grid View --}}
<div class="product-grid">
    @foreach($products as $product)
        <div class="product-grid-item">
            {{ $product->name }}
            <div>${{ $product->price }}</div>
        </div>
    @endforeach
</div> 