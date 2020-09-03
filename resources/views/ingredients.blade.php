@extends('layouts.app')
@section('content')
<h4>This is the INGREDIENTS page</h4>
<div class="limiter">
    <div class="container-table100">
        <table class="table table-striped custab">
            <thead>
                <tr>
                    <th class="column1">#ID</th>
                    <th class="column2">Name</th>
                    <th class="column3">Origin</th>
                    <th class="column4">Nutriscore</th>
                    <th class="column5">Parent ID</th>
                    <th class="column6">Image</th>
                    <th class="column7">Edit</th>
                    <th class="column8">Remove</th>
                </tr>
            </thead>
            @foreach ($ingredients as $ingredient)
            <tr>
                <tbody>
                    <td class="column1">{{ $ingredient->id }}</td>
                    <td class="column2">{{ $ingredient->names[0]->name }}</td>
                    <td class="column3">{{$ingredient->origin}}</td>
                    <td class="column4">{{$ingredient->nutriscore}}</td>
                    <td class="column5"><a href="https://wikipedia.org/wiki/{{ $ingredient->names[0]->name }}"></td>
                    <td class="column6"><img src="{{$ingredient->picture}}" alt="{{$ingredient->picture}}"
                            style="width:10%"></a>
                    </td>
                    <td class="text-center column7">
                        <a href="{{ route('ingredients.edit', ['id' => $ingredient->id]) }}"
                            class="btn btn-primary">Edit</a>
                    </td>
                    <td class="text-center column8">
                        <a href="{{ route('ingredients.delete', ['id' => $ingredient->id]) }}"
                            class="btn btn-primary">Delete</a>
                    </td>
                </tbody>
            </tr>
    </div>
</div>
@endforeach
@endsection