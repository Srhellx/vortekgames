<!DOCTYPE html>
<html>
<head>
    <title>Tienda de Juegos</title>
</head>
<body>

<h1>Catálogo de Juegos</h1>

<!-- Buscador -->
<form method="GET" action="{{ route('games.index') }}" style="margin-bottom:20px;">
    <input type="text" name="search" placeholder="Buscar juego..." value="{{ request('search') }}">
    <button type="submit">Buscar</button>
</form>

<!-- Menú de categorías -->
<div style="margin-bottom:20px;">
    <strong>Filtrar por categoría:</strong>
    @foreach ($categories as $category)
        <a href="{{ route('games.index', ['category_id' => $category->id]) }}"
           style="margin-right:10px;">
           {{ $category->name }}
        </a>
    @endforeach
    <a href="{{ route('games.index') }}">Todos</a>
</div>

<!-- Lista de juegos -->
@foreach ($games as $game)
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <h2>{{ $game->title }}</h2>
        <p>{{ $game->description }}</p>
        <p><strong>Género:</strong> {{ $game->category->name }}</p>
        <p><strong>Precio:</strong> ${{ number_format($game->price) }} COP</p>

        <a href="{{ route('games.show', $game) }}">Ver detalles</a>
    </div>
@endforeach

</body>
</html>
