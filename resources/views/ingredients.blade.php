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
    <table class="table ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Origin</th>
                <th>Nutriscore</th>
                <th>Image</th>
                <th>Parent ID</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        @foreach ($ingredients as $ingredient)
        <tbody>
            <tr>
                <td>{{ $ingredient->id }}</td>
                <td>{{ $ingredient->names[0]->name }}</td>
                <td>{{$ingredient->origin}}</td>
                <td>{{$ingredient->nutriscore}}</td>
                <td><a href="https://wikipedia.org/wiki/{{ $ingredient->names[0]->name }}"></td>
                <td><img src="{{$ingredient->picture}}" alt="{{$ingredient->picture}}" style="width:3%"></a>
                </td>
                <td><a href="{{ route('ingredients.edit', ['id' => $ingredient->id]) }}"
                        class="btn btn-primary">Edit</a>
                </td>
                <td><a href="{{ route('ingredients.delete', ['id' => $ingredient->id]) }}"
                        class="btn btn-primary">Delete</a></td>
                <br>

            </tr>
        </tbody>
        @endforeach

        @else
        <p>No records to display !</p>

        @endif
</body>

</html>
@endsection