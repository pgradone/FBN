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

      <h2>I have one record</h2>
    @elseif (count($ingredients) > 1)
      <h2>I have multiple records</h2>
      <?php echo $ingredients->links(); ?>
      @foreach ($ingredients as $ingredient)
      {{ $ingredient->id }}
      Origin:{{$ingredient->origin}}
      Nutriscore:{{$ingredient->nutriscore}}
      Picture:{{$ingredient->picture}}
      <img src="{{$ingredient->picture}}" alt="{{$ingredient->picture}}" style="width:3%">
      <a href="{{ route('ingredients.edit', ['id' => $ingredient->id]) }}">Edit</a>
      <form action="/ingredients/delete/{{$ingredient->id}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
      </form>
      @endforeach
      <?php echo $ingredients->links(); ?>
    @else
      <p>I don't have any records!</p>

    @endif
</body>

</html>
@endsection