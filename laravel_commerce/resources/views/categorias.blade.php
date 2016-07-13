<h1 style="margin-bottom: 20px; font-family: 'Roboto'; font-weight: 200;">Categorias</h1>

<ul style="font-family: 'Roboto'; font-weight: 200;">
    @foreach($categories as $category)
        <li style="margin-bottom: 10px;">{{ $category->name }} <br> &nbsp;&nbsp;&nbsp;&nbsp; {{ $category->description }} </li>
    @endforeach
</ul>