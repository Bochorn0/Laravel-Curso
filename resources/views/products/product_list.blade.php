{{-- List View --}}
@foreach($products as $product)
    <div class="product-list-item">
        {{ $product->name }} - ${{ $product->price }}
    </div>
@endforeach 