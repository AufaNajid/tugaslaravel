@extends('layout.main')

@section('content')

<button type="button" class="btn btn-dark" onclick="window.location.href='/Pemain/create'">Add Data</button>

@if (session()->has('success'))
    <div class="alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger col-lg-12" role="alert">
        {{ session('error') }}
    </div>
@endif


<!-- Table -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Pemain</th>
            <th scope="col">Umur</th>
            <th scope="col">Role</th>
            <th scope="col">Team</th>
            <th scope="col">Date</th>
            <th scope="col">action</th>
        </tr>
    </thead>

    <?php $id = 1; ?>

    <tbody>
        @foreach ($pemain as $esport)
        <tr>
            <th scope="row">{{ $loop->iteration}}</th>
            <td>{{ $esport -> pemain }}</td>
            <td>{{ $esport -> umur }}</td>
            <td>{{ $esport -> role}}</td>
            <td>{{ $esport -> kelas ->nama }}</td>
            <td>{{ $esport -> tanggal}}</td>
            
            <td> 
                <a type="button" class="btn btn-primary" href="/Pemain/detailpemain/{{ $esport->id }}">Detail</a>
                <a href="/Pemain/edit/{{ $esport->id }}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-circle-info"></i> Edit</button></a>
    
                <form method="POST" action="/Pemain/{{ $esport->id }}" style="display: inline;">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this player?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
