@extends('layout.main')

@section('content')
    <form method="post" action="/Pemain/update/{{$pemain->id}}">
        @csrf
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Pemain</label>
            <input type="text" class="form-control" id="pemain" name="pemain" value="{{old('pemain',$pemain->pemain)}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur" value="{{old('umur',$pemain->umur)}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Role</label>
            <input type="text" class="form-control" id="role" name="role" value="{{old('role',$pemain->role)}}">
        </div>
        <div class="mb-3">
            <label for="team_id" class="form-label">Team:</label>
            <select class="form-select" id="team_id" name="team_id"  required>
                @foreach ($kelas as $class)
                    <option value="{{ $class->id }}" {{$pemain->team_id == $class->id ? 'selected' : ''}}>{{$class->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_llahir" name="tanggal" value="{{old('tanggal',$pemain->tanggal)}}">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
@endsection