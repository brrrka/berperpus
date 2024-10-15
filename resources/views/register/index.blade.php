@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
    <main class="form-registration text-center">
      <form  action="register" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal mt-5">Form Registrasi</h1>
    
        <div class="form-floating ">
          <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Lengkap" value={{ old('name') }}>
          <label for="floatingInput">Nama Lengkap</label>
          @error('name') <div class="invalid-feedback d-block">Nama yang dimasukkan tidak valid</div> @enderror
        </div>
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value={{ old('email') }}>
          <label for="floatingInput">Email address</label>
          @error('email') <div class="invalid-feedback d-block">Email yang dimasukkan tidak valid</div> @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
          <label for="floatingPassword">Password</label>
          @error('password') <div class="invalid-feedback d-block">Password yang dimasukkan tidak valid</div> @enderror
        </div>
    
        <button class="btn btn-dark w-100 py-2" type="submit">Sign in</button>
      </form>
      <small class="mt-3">Sudah Punya akun? <a class="text-light"href="/login">Login Disini!</a></small>
    </main>
    </div>
    </div>
    
@endsection