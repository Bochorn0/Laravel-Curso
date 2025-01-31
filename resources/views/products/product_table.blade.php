{{-- Table View --}}
<table>
    <thead>
        <tr>
            <th>
                <a href="{{ request()->fullUrlWithQuery(['sort_by' => 'name', 'sort' => request('sort_by') === 'name' && request('sort') === 'asc' ? 'desc' : 'asc']) }}">
                    Name 
                    @if(request('sort_by') === 'name')
                        {!! request('sort') === 'asc' ? '↑' : '↓' !!}
                    @endif
                </a>
            </th>
            <th>
                <a href="{{ request()->fullUrlWithQuery(['sort_by' => 'price', 'sort' => request('sort_by') === 'price' && request('sort') === 'asc' ? 'desc' : 'asc']) }}">
                    Price
                    @if(request('sort_by') === 'price')
                        {!! request('sort') === 'asc' ? '↑' : '↓' !!}
                    @endif
                </a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table> 