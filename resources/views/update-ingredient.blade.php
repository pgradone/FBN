@extends('layouts.app')
@section('title', 'UPDATE an ingredient')

@section('content')
<main class="container">
  <section class="row">
    <div class="card" style="width: 36rem;">
      <img src="{{$ingredient->picture}}" alt="{{$ingredient->picture}}">
      <div class="card-body">
        <h5 class="card-title">Edit :</h5>
        <div class="form-group">
          <form method="POST" class="card-text">
            @csrf
            @method('PUT')
            <ul>
              @foreach($ingredientNames as $ingredientName)
              <li><a href="https://wikipedia.org/wiki/{{$ingredientName->name}}"> {{$ingredientName->language->iso}} : </a>
                <input id="lang_{{$ingredientName->language_id}}" type="text" value="{{$ingredientName->name}}" name="toto">
                <!-- <a href="/ingredientNames/update/{{$ingredientName->ingredient_id}}/{{$ingredientName->language_id}}" class="btn btn-primary">Update</a> -->
                <button id="lang_{{$ingredientName->language_id}}" value='/ingredientNames/update/{{$ingredientName->ingredient_id}}/{{$ingredientName->language_id}}'>Update</button>
              </li>
              @endforeach
            </ul>
            <label for="picture">Picture :</label>
            <input class="form-control" type="text" name="picture" id="picture" value="{{$ingredient->picture}}">
            <br>
            <label for="foodgroup_id">Food group :</label>
            <select id="foodgroup_id" name="foodgroup_id">
              <!-- https://stackoverflow.com/questions/35976321/find-last-iteration-of-foreach-loop-in-laravel-blade -->
              @foreach($foodgroupnames as $foodgroup)
              <option class="form-control" value="{{$foodgroup->foodgroup_id}}" @if($ingredient->foodgroup_id == $foodgroup->foodgroup_id) selected @endif > {{$foodgroup->name}} {{$foodgroup->foodgroup_id}} </option>
              @endforeach
            </select>
            <br>
            <label for="origin">Origin :</label>
            <select id="origin" name="origin">
              <option class="form-control" value="P" @if($ingredient->origin == 'P') selected @endif>P - Plant based</option>
              <option class="form-control" value="A" @if($ingredient->origin == 'A') selected @endif>A - Animal based</option>
              <option class="form-control" value="C" @if($ingredient->origin == 'C') selected @endif>C - Composed</option>
              <option class="form-control" value="M" @if($ingredient->origin == 'M') selected @endif>M - Mineral</option>
              <option class="form-control" value="X" @if($ingredient->origin == 'X') selected @endif>X - Chemical</option>
            </select>
            <br>
            <label for="nutriscore">Nutriscore</label>
            <select id="nutriscore" name="nutriscore" value="{{$ingredient->nutriscore}}">
              <option class="form-control" value="A" <?php if ($ingredient->nutriscore == 'A') : ?> selected="selected" <?php endif; ?>>A</option>
              <option class="form-control" value="B" <?php if ($ingredient->nutriscore == 'B') : ?> selected="selected" <?php endif; ?>>B</option>
              <option class="form-control" value="C" <?php if ($ingredient->nutriscore == 'C') : ?> selected="selected" <?php endif; ?>>C</option>
              <option class="form-control" value="D" <?php if ($ingredient->nutriscore == 'D') : ?> selected="selected" <?php endif; ?>>D</option>
              <option class="form-control" value="E" <?php if ($ingredient->nutriscore == 'E') : ?> selected="selected" <?php endif; ?>>E</option>
              <option class="form-control" value="F" <?php if ($ingredient->nutriscore == 'F') : ?> selected="selected" <?php endif; ?>>F</option>
            </select>
            <br>
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection