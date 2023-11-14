@extends('layout.main')

@section('content')

 <h2>Game detail</h2>

 <div class="form">
    <div class="form-group my-1">
        <label for="">game</label>
        <input type="text" class="form-control" name="game" id="game" value="{{ $game->game }}" disabled>
    </div>

    <div class="form-group my-1p">
        <label for="">genre</label>
        <input type="text" class="form-control" name="genre" id="genre" value="{{ $game->genre }}" disabled>
    </div>

    <div class="form-group my-1">
        <label for="">rating</label>
        <input type="text" class="form-control" name="rating" id="rating" value="{{ $game->rating}}" disabled>
    </div>x

 </div>
@endsection