@extends('layout.main')

@section('content')

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
<div class="input-group mb-3 mx-auto mt-2" style="max-width: 300px;">
    <form action="/Pemain/pemain" method="GET">
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
               <td>
                @if ($esport->kelas)
                            {{ $esport->kelas->nama }}
                            @else
                            No Class Assigned
                            @endif
               </td>
                <td>{{ $esport->tanggal }}</td>
                
                <td> 
                    <a type="button" class="btn btn-primary btn-sm" href="/Pemain/detailpemain/{{ $esport->id }}">Detail</a>
                </td>
            </tr>
            @endforeach

           
            
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {!! $pemain->links() !!}
    </div>
</div>

</div>

@endsection

{{-- 
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
@endsection --}}
