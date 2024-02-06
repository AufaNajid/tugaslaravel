@extends('layout.main')

@section('content')
    <h1>New Data</h1>
    <form action="/Kelas/create" method="POST">
        @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">nama</label>
        <input type="text" class="form-control" id="pemain" name="nama" placeholder="nama" value="{{old('pemain')}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  

@endsection
