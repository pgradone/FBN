@extends('layouts.app')
@section('content')

<h4>This is the INGREDIENTS page</h4>
<table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Origin</th>
            <th>Nutriscore</th>
            <th>Parent ID</th>
            <th>Image</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($ingredients as $ingredient)

    <tr>
        <td>{{ $ingredient->id }}</td>
        <td>{{ $ingredient->names[0]->name }}</td>
        <td>{{$ingredient->origin}}</td>
        <td>{{$ingredient->nutriscore}}</td>
        <td><a href="https://wikipedia.org/wiki/{{ $ingredient->names[0]->name }}"></td>
        <td><img src="{{$ingredient->picture}}" alt="{{$ingredient->picture}}" style="width:10%"></a>
        </td>
        <td><a href="{{ route('ingredients.edit', ['id' => $ingredient->id]) }}" class="btn btn-primary">Edit</a>
        </td>
        <td><a href="{{ route('ingredients.delete', ['id' => $ingredient->id]) }}" class="btn btn-primary">Delete</a>
        </td>

    </tr>
    @endforeach
    @if (count($ingredients) === 1)
    @elseif (count($ingredients) > 1)
    @else
    <p>No records to display !</p>
    @endif
    @endsection