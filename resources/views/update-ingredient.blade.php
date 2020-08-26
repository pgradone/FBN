@extends('layouts.simple-template')
@section('title', 'UPDATE an ingredient')

@section('content')
<form method="post">
  @csrf
  @method('put')
  <label for="picture">Picture</label>
  <input type="text" name="picture" id="picture" value="{{$ingredient->picture}}">
  <label for="origin">Origin</label>
  <select id="origin">
    <option value="P" selected=true>P - Plant based</option>
    <option value="A">A - Animal based</option>
    <option value="C">C - Composed</option>
    <option value="M">M - Mineral</option>
    <option value="X">X - Chemical</option>
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
  <input type="submit" name="submit" value="Update">
</form>
@endsection