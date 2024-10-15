@extends('layouts.main')

@section('container')
  
<div class="row justify-content-center">
<div class="col-md-4">

  @if(session()->has('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

<main class="form-signin text-center">
  <form action="/login" method="post">
    @csrf
    <img class="mb-0" src="img/icon.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Selamat datang di Berperpus!</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" @error('email') is-invalid @enderror autofocus required>
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-dark w-100 py-2" type="submit">Sign in</button>
  </form>
  <small class="mt-3">Belum mendaftar? <a class="text-light"href="/register">Daftar Disini!</a></small>
</main>
</div>
</div>

@endsection