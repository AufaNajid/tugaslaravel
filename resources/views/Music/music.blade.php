@extends('layout.main')

@section('content')



<!-- Table -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Penyanyi</th>
            <th scope="col">Umur</th>
            <th scope="col">Lagu</th>
            <th scope="col">Genre</th>
            <th scope="col">action</th>
        </tr>
    </thead>

    <?php $id = 1; ?>

    <tbody>
        @foreach ($music as $musics)
        <tr>
            <th scope="row">{{ $id++ }}</th>
            <td>{{ $musics->penyanyi }}</td>
            <td>{{ $musics['umur'] }}</td>
            <td>{{ $musics['lagu'] }}</td>
            <td>
                <a type="button" class="btn btn-primary" href="/Music/detail/{{ $musics->id }}">Detail</a>
              <button type="button" class="btn btn-secondary">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
