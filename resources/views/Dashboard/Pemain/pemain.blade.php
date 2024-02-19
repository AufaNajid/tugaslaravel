@extends('layout.dashboardmain')

@section('content')

<button type="button" class="btn btn-dark mb-3" onclick="window.location.href='/Dashboard/Pemain/create'">Add Data</button>

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

<!-- Search Bar -->
<div class="input-group mb-3 mx-auto" style="max-width: 300px;">
    <form action="/Dashboard/Pemain/pemain" method="GET">
    <input type="search" name="search" class="form-control form-control-sm" placeholder="Search..." aria-label="Search" id="search-input">
    </form>
</div>




<!-- Table -->
<div class="table-responsive mx-auto" style="max-width: 2000px;">
    <table class="table table-bordered table-sm" id="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Player</th>
                <th scope="col">Age</th>
                <th scope="col">Role</th>
                <th scope="col">Team</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pemain as $esport)
            <tr>
                <th scope="row">{{ ($pemain->currentPage() - 1) * $pemain->perPage() + $loop->iteration }}</th>
                <td>{{ $esport->pemain }}</td>
                <td>{{ $esport->umur }}</td>
                <td>{{ $esport->role }}</td>
                <td>{{ $esport->kelas->nama }}</td>
                <td>{{ $esport->tanggal }}</td>
                
                <td> 
                    <a type="button" class="btn btn-primary btn-sm" href="/Dashboard/Pemain/detailpemain/{{ $esport->id }}">Detail</a>
                    @auth
                    <a href="/Dashboard/Pemain/edit/{{ $esport->id }}" class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info"></i> Edit</a>

                    <form method="POST" action="/Dashboard/Pemain/{{ $esport->id }}" style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this player?')">Delete</button>
                    </form>
                    @endauth
                </td>
            </tr>
            @endforeach

            <div class="dropdown ms-4 mb-4">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Filter by Team
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/Pemain/pemain">Show All</a></li>
                    @foreach ($kelas as $item)
                    <li><a class="dropdown-item" href="{{ route('filter_pemain_auth', $item->id) }}">{{ $item->nama }}</a></li>
                    @endforeach
                </ul>
            </div>

        </tbody>
    </table>

    
    <div class="d-flex justify-content-center">
        {!! $pemain->links() !!}
    </div>
            
</div>

</div>


@endsection



@section('scripts')
<script>
    $(document).ready(function() {
        $('#search-input').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#table tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection
