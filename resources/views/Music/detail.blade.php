@extends('layout.main')

@section('content')

 <h2>Music detail</h2>

 <div class="form">
    <div class="form-group my-1">
        <label for="">penyanyi</label>
        <input type="text" class="form-control" name="penyanyi" id="penyanyi" value="{{ $music->penyanyi }}" disabled>
    </div>

    <div class="form-group my-1p">
        <label for="">umur</label>
        <input type="text" class="form-control" name="umur" id="umur" value="{{ $music->umur }}" disabled>
    </div>

    <div class="form-group my-1">
        <label for="">rating</label>
        <input type="text" class="form-control" name="rating" id="rating" value="{{ $music->lagu}}" disabled>
    </div>

    <div class="form-group my-1">
        <label for="">genre</label>
        <input type="text" class="form-control" name="genre" id="genre" value="{{ $music->genre}}" disabled>
    </div>

 </div>
@endsection