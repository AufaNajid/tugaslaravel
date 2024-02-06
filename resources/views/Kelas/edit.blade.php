@extends('layout.main')

@section('content')
    <form method="post" action="/Kelas/update/{{$kelas->id}}">
        @csrf
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Team</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama',$kelas->nama)}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
@endsection