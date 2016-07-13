<h1 style="margin-bottom: 20px; font-family: 'Roboto'; font-weight: 200;">Produtos</h1>

<ul style="font-family: 'Roboto'; font-weight: 200;">
    @foreach($products as $product)
        <li style="margin-bottom: 10px;">{{ $product->name }} <br> &nbsp;&nbsp;&nbsp;&nbsp; {{ $product->description }} <br> &nbsp;&nbsp;&nbsp;&nbsp; R$ {{ $product->price }}</li>
    @endforeach
</ul>