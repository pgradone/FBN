@extends('layouts.simple-template')
@section('title', 'CREATE a new Ingredient')

@section('content')
<form method="post">
  @csrf
  <label for="origin">Origin</label>
  <select id="origin">
    <option value="P">Plant based</option>
    <option value="A">Animal based</option>
    <option value="C">Composed</option>
    <option value="M">Mineral</option>
    <option value="X">Chemical</option>
  </select>
  <label for="nutriscore">Nutriscore</label>
  <select id="nutriscore">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
    <option value="F">F</option>
  </select>
  <label for="picture">Picture</label>
  <input type="text" name="picture" id="picture">
  <input type="submit" name="submit" value="Create Ingredient">
</form>
@endsection