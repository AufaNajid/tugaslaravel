@extends('layout.main')

@section('content')
    <h1>New Data</h1>
    <form action="/Pemain/create" method="POST">
        @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">pemain</label>
        <input type="text" class="form-control" id="pemain" name="pemain" placeholder="pemain" value="{{old('pemain')}}">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">umur</label>
        <input type="text" class="form-control" id="umur" name="umur" placeholder="umur" value="{{old('umur')}}">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">role</label>
        <input type="text" class="form-control" id="role" name="role" placeholder="role" value="{{old('role')}}">
    </div>
    <div class="mb-3">
        <label for="team_id" class="form-label">Team:</label>
        <select class="form-select" id="team_id" name="team_id"  required>
            @foreach ($kelas as $class)
                <option value="{{ $class->id }}">{{$class->nama}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  

@endsection
