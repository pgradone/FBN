@extends('layouts.simple-template')
@section('title', 'UPDATE an ingredient')

@section('content')
<form method="POST">
  @csrf
  @method('PUT')
  <figure>
    <img src="{{$ingredient->picture}}" alt="{{$ingredient->picture}}" style="width:10%">
    <figcaption>{{$ingredient->picture}}</figcaption>
  </figure>
  <label for="picture">Picture</label>
  <input type="text" name="picture" id="picture" value="{{$ingredient->picture}}">
  <label for="foodgroup_id">Foodgroup_id</label>
  <input type="text" name="foodgroup_id" id="foodgroup_id" value="{{$ingredient->foodgroup_id}}">
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