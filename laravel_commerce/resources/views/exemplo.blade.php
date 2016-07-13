<h1 style="margin-bottom: 20px; font-family: 'Roboto'; font-weight: 200;">Trabalhando com views e controllers</h1>

{{--<i style="font-family: 'Roboto'; font-weight: 200;">Criado por: {{ $nome }} {{ $sobrenome }}</i>--}}

{{--<h2 style="margin-bottom: 15px; font-family: 'Roboto'; font-weight: 200; font-size: 20px;">Categorias</h2>--}}

{{--<ul style="font-family: 'Roboto'; font-weight: 200;">--}}
    {{--@foreach($categories as $category)--}}
        {{--<li style="margin-bottom: 10px;">{{ $category->name }} <br> &nbsp;&nbsp;&nbsp;&nbsp; {{ $category->description }} </li>--}}
    {{--@endforeach--}}
{{--</ul>--}}

<h2 style="margin-bottom: 15px; font-family: 'Roboto'; font-weight: 200; font-size: 20px;">Produtos</h2>

<ul style="font-family: 'Roboto'; font-weight: 200;">
    @foreach($products as $product)
        <li style="margin-bottom: 10px;">{{ $product->name }} <br> &nbsp;&nbsp;&nbsp;&nbsp; {{ $product->description }} </li>
    @endforeach
</ul>