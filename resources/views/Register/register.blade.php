@extends('layout.main')

@section('content')
<main class="form-signin w-50 m-auto">
  <form action="/Register/store" method="POST">
    @csrf
    <br>
    <h1>Register</h1>
    <br>
    <div class="form-floating">
      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
      <label for="name">Name</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      <label for="email">Email</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <label for="password">Password</label>
    </div>
    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="remember">
      <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
