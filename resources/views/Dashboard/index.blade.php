<!-- resources/views/dashboard.blade.php -->

@extends('layout.dashboardmain')

@section('content')
<h1 class="mb-4">Welcome, {{ auth()->user()->name }}</h1>
@endsection
