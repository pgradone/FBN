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
  <br>
  <label for="foodgroup_id">Foodgroup_id</label>
  <input type="text" name="foodgroup_id" id="foodgroup_id" value="{{$ingredient->foodgroup_id}}">
  <br>
  <label for="origin">Origin</label>
  <select id="origin" name="origin">
    <option value="P" @if($ingredient->origin == 'P') selected @endif>P - Plant based</option>
    <option value="A" @if($ingredient->origin == 'A') selected @endif>A - Animal based</option>
    <option value="C" @if($ingredient->origin == 'C') selected @endif>C - Composed</option>
    <option value="M" @if($ingredient->origin == 'M') selected @endif>M - Mineral</option>
    <option value="X" @if($ingredient->origin == 'X') selected @endif>X - Chemical</option>
  </select>
  <br>
  <label for="nutriscore">Nutriscore</label>
  <select id="nutriscore" name="nutriscore" value="{{$ingredient->nutriscore}}">
    <option value="A" 
    <?php if($ingredient->nutriscore == 'A'): ?> selected="selected"<?php endif; ?>
    >A</option>
    <option value="B" <?php if($ingredient->nutriscore == 'B'): ?> selected="selected"<?php endif; ?>>B</option>
    <option value="C" <?php if($ingredient->nutriscore == 'C'): ?> selected="selected"<?php endif; ?>>C</option>
    <option value="D" <?php if($ingredient->nutriscore == 'D'): ?> selected="selected"<?php endif; ?>>D</option>
    <option value="E" <?php if($ingredient->nutriscore == 'E'): ?> selected="selected"<?php endif; ?>>E</option>
    <option value="F" <?php if($ingredient->nutriscore == 'F'): ?> selected="selected"<?php endif; ?>>F</option>
  </select>
  <br>
  <input type="submit" name="submit" value="Update">
</form>
@endsection