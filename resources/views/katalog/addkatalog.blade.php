@extends('layouts.main')
@section('container')
@if(session()->has('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <div class="container">
    <h1 class="text-center mb-4">Tambah katalog</h1>
    <form action="/insertkatalog" method="POST">
        @csrf
        <div class="form-floating">
            <input type="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                placeholder="Judul Buku" value={{ old('judul') }}>
            <label for="floatingInput">Judul Buku</label>
            @error('name')
                <div class="invalid-feedback d-block">Nama yang dimasukkan tidak valid</div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="pengarang" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang" name="pengarang"
                placeholder="Nama Pengarang" value={{ old('pengarang') }}>
            <label for="floatingInput">Pengarang</label>
            @error('pengarang')
                <div class="invalid-feedback d-block">Pengarang yang dimasukkan tidak valid</div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="penerbit" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" name="penerbit"
                placeholder="Nama Penerbit" value={{ old('penerbit') }}>
            <label for="floatingInput">Penerbit</label>
            @error('penerbit')
                <div class="invalid-feedback d-block">Penerbit yang dimasukkan tidak valid</div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="tahun" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun"
                placeholder="Tahun terbit" value={{ old('tahun') }}>
            <label for="floatingInput">Tahun Terbit</label>
            @error('tahun')
                <div class="invalid-feedback d-block">Tahun yang dimasukkan tidak valid</div>
            @enderror
        </div>
        

        <button class="btn btn-primary mt-3">Tambahkan Buku</button>
        </div>
    </form>
    <a class="container" href="/katalog"><button class="btn btn-danger mt-3">Batal</button></a>

@endsection
