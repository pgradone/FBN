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


    @elseif (count($ingredients) > 1)
    <?php echo $ingredients->links(); ?>
    @foreach ($ingredients as $ingredient)
    ID : {{ $ingredient->id }}
    Name : {{ $ingredient->names[0]->name }}
    Origin : {{$ingredient->origin}}
    Nutriscore : {{$ingredient->nutriscore}}
    <a href="https://wikipedia.org/wiki/{{ $ingredient->names[0]->name }}"> <img src="{{$ingredient->picture}}"
            alt="{{$ingredient->picture}}" style="width:3%"></a>
    <a href="{{ route('ingredients.edit', ['id' => $ingredient->id]) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('ingredients.delete', ['id' => $ingredient->id]) }}" class="btn btn-primary">Delete</a> <br>

    @endforeach
    <?php echo $ingredients->links(); ?>
    @else
    <p>No records to display !</p>

    @endif
</body>

</html>
@endsection