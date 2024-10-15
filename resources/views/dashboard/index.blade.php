@extends('layouts.main')

@section('container')
<h1>Dashboard</h1>
@if(Auth::check() && Auth::user()->is_admin)
   <button class="btn btn-warning mb-2">Tambahkan Katalog</button></td>
@endif
<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul Buku</th>
          <th scope="col">Pengarang</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Tahun Terbit</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1,001</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
          <td>
            <button class="btn btn-dark">Pinjam</button>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
