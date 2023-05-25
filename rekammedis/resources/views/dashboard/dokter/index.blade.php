@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Halaman Dokter</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success col-lg-10" role="alert">
      {{ session('success') }}
  </div>
@endif

<a href="{{ url('/cetakpdfdokter') }}" target="_blank"  class="badge bg-danger text-light mb-2 p-2">Cetak PDF</a>

<div class="table-responsive col-lg-10">
  <a href="/dashboard/dokter/create" class="btn btn-primary mb-3">Tambah Data Dokter</a>
    <table class="table table-striped table-sm">
      <thead class="table-info">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Spesialis</th>
          <th scope="col">Alamat</th>
          <th scope="col">Nomor Telepon</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dokters as $dokter)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $dokter->name_dokter }}</td>
          <td>{{ $dokter->spesialis }}</td>
          <td>{{ $dokter->alamat }}</td>
          <td>{{ $dokter->no_telp }}</td>
          <td>
            <a href="/dashboard/dokter/{{ $dokter->id }}" class="badge bg-info text-dark"><span data-feather="eye">Detail</span></a>
            <a href="/dashboard/dokter/{{ $dokter->id }}/edit" class="badge bg-warning text-dark"><span data-feather="edit">Edit</span></a>
            <form action="/dashboard/dokter/{{ $dokter->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" ></span>Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
            
      </tbody>
    </table>
  </div>
@endsection