@extends('layouts.main')
@section('container')
@if(session()->has('berhasil'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('berhasil') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
<h1 class="text-center mb-4">Data User</h1>
<a href="/adduser"><button type="button" class="btn btn-info mb-2">Tambah +</button></a>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($data as $row)
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->role }}</td>
                <td>
                    <a href="/showdata/{{ $row->id }}" class="btn btn-warning">Edit</a>
                    <a href="/deleteuser/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection