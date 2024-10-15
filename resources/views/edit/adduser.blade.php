@extends('layouts.main')
@section('container')
@if(session()->has('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <div class="container">
    <h1 class="text-center mb-4">Tambah data User</h1>
    <form action="/insertuser" method="POST">
        @csrf
        <div class="form-floating">
            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Nama Lengkap" value={{ old('name') }}>
            <label for="floatingInput">Nama Lengkap</label>
            @error('name')
                <div class="invalid-feedback d-block">Nama yang dimasukkan tidak valid</div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                placeholder="name@example.com" value={{ old('email') }}>
            <label for="floatingInput">Email address</label>
            @error('email')
                <div class="invalid-feedback d-block">Email yang dimasukkan tidak valid</div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error('password')
                <div class="invalid-feedback d-block">Password yang dimasukkan tidak valid</div>
            @enderror
        </div>
        <select class="form-role form-select" name="role">
            <option selected>Pilih Role</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
            
        </select>
        <button class="btn btn-primary mt-3">Tambahkan User</button>
        </div>
    </form>
    <a class="container" href="/edit"><button class="btn btn-danger mt-3">Batal</button></a>
</div>
</div>
@endsection
