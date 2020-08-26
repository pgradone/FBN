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
    @else
      I don't have any records!
    @endif
</body>

</html>
@endsection