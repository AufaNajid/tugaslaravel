@extends('layout.dashboardmain')

@section('content')

 <h2>Music detail</h2>

 <div class="form">
    <div class="form-group my-1">
        <label for="">pemain</label>
        <input type="text" class="form-control" name="pemain" id="pemain" value="{{ $pemain->pemain }}" disabled>
    </div>

    <div class="form-group my-1p">
        <label for="">umur</label>
        <input type="text" class="form-control" name="umur" id="umur" value="{{ $pemain->umur }}" disabled>
    </div>

    <div class="form-group my-1">
        <label for="">role</label>
        <input type="text" class="form-control" name="role" id="role" value="{{ $pemain->role}}" disabled>
    </div>

    <div class="form-group my-1">
        <label for="">team</label>
        <input type="text" class="form-control" name="team" id="team" value="{{ $pemain->kelas->nama}}" disabled>
    </div>

    <div class="form-group my-1">
        <label for="">Tanggal</label>
        <input type="text" class="form-control" name="tanggal" id="tanggal" value="{{ $pemain->tanggal}}" disabled>
    </div>

 </div>
@endsection   