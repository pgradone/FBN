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
    <h1 class="text-center">This is the RECIPES page</h1>
    <div id="recep-header">
        <div id="sorting">
            <ul>
                <li>
                    Latest
                </li>
                <li>
                    Most Viewed
                </li>
                <li>
                    Votes
                </li>
                <li>
                    Value
                </li>
            </ul>
        </div>
        <div id="filters">
            <!--Filter symbol and card with checkable ingredients-->
        </div>
    </div>
</body>

</html>
@endsection