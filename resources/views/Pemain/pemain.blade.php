@extends('layout.main')

@section('content')
    
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
            <th scope="row">{{ $id++ }}</th>
            <td>{{ $esport ['pemain'] }}</td>
            <td>{{ $esport['umur'] }}</td>
            <td>{{ $esport['role'] }}</td>
            <td>{{ $esport['team'] }}</td>
            <td>{{ $esport['tanggal'] }}</td>
            
            <td>
              <a type="button" class="btn btn-primary" href="/Pemain/detailpemain/{{ $esport->id }}">Detail</a>
              <button type="button" class="btn btn-secondary">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection