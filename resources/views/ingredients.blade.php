@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes </title>
</head>

<body>
    <h1>This is the INGREDIENTS page</h1>
    @if (count($ingredients) === 1)
      I have one record!
    @elseif (count($ingredients) > 1)
      I have multiple records!
      @foreach ($ingredients as $ingredient)
      {{ingredient->id}}
      Origin:{{ingredient->origin}}
      Nutriscore:{{ingredient->nutriscore}}
      Picture:{{ingredient->picture}}
      <a href="{{ route('ingredient.edit', ['id' => $ingredient->id]) }}">Edit</a>
      <form action="/ingredients/delete/{{$book->id}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
      </form>
      @endforeach
    @else
      <p>I don't have any records!</p>
    @endif
</body>

</html>
@endsection