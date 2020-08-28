@extends('layouts.app')
@section('title', 'UPDATE an ingredient')

@section('content')
<main class="container">
  <section class="row">
    <div class="card" style="width: 18rem;">
      <img src="{{$ingredient->picture}}" alt="{{$ingredient->picture}}">
      <div class="card-body">
        <h5 class="card-title">Edit {{$ingredient->picture}}</h5>
        <div class="form-group">
          <form method="POST" class="card-text">
            @csrf
            @method('PUT')
            <label for="picture">Picture</label>
            <input class="form-control" type="text" name="picture" id="picture" value="{{$ingredient->picture}}">
            <br>
            <label for="foodgroup_id">Foodgroup_id</label>
            <!-- <input class="form-control" type="text" name="foodgroup_id" id="foodgroup_id" value="{{$ingredient->foodgroup_id}}"> -->
            <select class="form-control" id="foodgroup_id" name="foodgroup_id">
              <option value="P" @if($ingredient->origin == 'P') selected @endif>P - Plant based</option>
              <option value="A" @if($ingredient->origin == 'A') selected @endif>A - Animal based</option>
              <option value="C" @if($ingredient->origin == 'C') selected @endif>C - Composed</option>
            </select>
            <br>
            <label for="origin">Origin</label>
            <select class="form-control" id="origin" name="origin">
              <option value="P" @if($ingredient->origin == 'P') selected @endif>P - Plant based</option>
              <option value="A" @if($ingredient->origin == 'A') selected @endif>A - Animal based</option>
              <option value="C" @if($ingredient->origin == 'C') selected @endif>C - Composed</option>
              <option value="M" @if($ingredient->origin == 'M') selected @endif>M - Mineral</option>
              <option value="X" @if($ingredient->origin == 'X') selected @endif>X - Chemical</option>
            </select>
            <br>
            <label for="nutriscore">Nutriscore</label>
            <select class="form-control" id="nutriscore" name="nutriscore" value="{{$ingredient->nutriscore}}">
              <option value="A" <?php if ($ingredient->nutriscore == 'A') : ?> selected="selected" <?php endif; ?>>A</option>
              <option value="B" <?php if ($ingredient->nutriscore == 'B') : ?> selected="selected" <?php endif; ?>>B</option>
              <option value="C" <?php if ($ingredient->nutriscore == 'C') : ?> selected="selected" <?php endif; ?>>C</option>
              <option value="D" <?php if ($ingredient->nutriscore == 'D') : ?> selected="selected" <?php endif; ?>>D</option>
              <option value="E" <?php if ($ingredient->nutriscore == 'E') : ?> selected="selected" <?php endif; ?>>E</option>
              <option value="F" <?php if ($ingredient->nutriscore == 'F') : ?> selected="selected" <?php endif; ?>>F</option>
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