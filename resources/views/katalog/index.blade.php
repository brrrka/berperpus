@extends('layouts.main')
@section('container')
@if(session()->has('berhasil'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('berhasil') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

<h1 class="text-center mb-4">Katalog</h1>
@if(Auth::check() && Auth::user()->role == 'admin')
<a href="/addkatalog"><button type="button" class="btn btn-info mb-2">Tambah +</button></a>
@endif
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                @if(Auth::check() && Auth::user()->role == 'admin')
                <th scope="col">Aksi</th>
                @endif
              </tr>
            </thead>
            <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($data as $row)
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->judul }}</td>
                <td>{{ $row->pengarang }}</td>
                <td>{{ $row->penerbit }}</td>
                <td>{{ $row->tahun }}</td>
                
                @if(Auth::check() && Auth::user()->role == 'admin')
                <td>
                    <a href="/showkatalog/{{ $row->id }}" class="btn btn-warning">Edit</a>
                    <a href="/deletekatalog/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                    
                </td>

                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection