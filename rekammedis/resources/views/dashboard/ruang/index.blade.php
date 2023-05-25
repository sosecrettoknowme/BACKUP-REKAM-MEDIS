@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Halaman Ruangan</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success col-lg-10" role="alert">
      {{ session('success') }}
  </div>
@endif
<a href="{{ url('/cetakpdfruang') }}" target="_blank"  class="badge bg-danger text-light mb-2 p-2">Cetak PDF</a>
<div class="table-responsive col-lg-10">
  <a href="/dashboard/ruang/create" class="btn btn-primary mb-3">Tambah Data Ruang</a>
    <table class="table table-striped table-sm">
      <thead class="table-info">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Ruang</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ruangs as $ruang)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $ruang->name_ruang }}</td>
          <td>{{ $ruang->ket_ruang }}</td>
          <td>
            <a href="/dashboard/ruang/{{ $ruang->id }}" class="badge bg-info text-dark"><span data-feather="eye">Detail</span></a>
            <a href="/dashboard/ruang/{{ $ruang->id }}/edit" class="badge bg-warning text-dark"><span data-feather="edit">Edit</span></a>
            <form action="/dashboard/ruang/{{ $ruang->id }}" method="post" class="d-inline">
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