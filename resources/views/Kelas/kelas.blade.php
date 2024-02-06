@extends('layout.main')

@section('content')

<button type="button" class="btn btn-dark" onclick="window.location.href='/Kelas/create'">Add Data</button>

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
            <th scope="col">team</th>
        </tr>
    </thead>

    <?php $id = 1; ?>

    <tbody>
        @foreach ($kelas as $team)
        <tr>
            <th scope="row">{{ $id++ }}</th>
            <td>{{ $team['nama'] }}</td>
            
            <td> 
                <a href="/Kelas/edit/{{ $team->id }}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-circle-info"></i> Edit</button></a>
    
                <form method="POST" action="/Kelas/{{ $team->id }}" style="display: inline;">
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
