<!DOCTYPE html>
<html>
<head>
    <title>{{ $game->title }}</title>
</head>
<body>

<h1>{{ $game->title }}</h1>

<p>{{ $game->description }}</p>
<p><strong>Género:</strong> {{ $game->category->name }}</p>
<p><strong>Precio:</strong> ${{ number_format($game->price) }} COP</p>
<p><strong>Fecha de lanzamiento:</strong> {{ $game->release_date }}</p>

<a href="{{ route('games.index') }}">⬅ Volver al catálogo</a>

</body>
</html>
