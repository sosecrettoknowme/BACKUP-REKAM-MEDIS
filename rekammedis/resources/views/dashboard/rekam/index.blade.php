@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Halaman Rekam Medis</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success col-lg-10" role="alert">
      {{ session('success') }}
  </div>
@endif

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/rekam/search">
        @if (request('pasien'))
            <input type="hidden" name="pasien" value="{{ request('pasien') }}">
        @endif
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Kode Rekam Medis.." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Search</button>
        </div>
    </form>
  </div>
</div>

<a href="{{ url('/cetakpdfrekam') }}" target="_blank"  class="badge bg-danger text-light mb-2 p-2">Cetak PDF</a>

<div class="table-responsive col">
  <a href="/dashboard/rekam/create" class="btn btn-primary mb-3">Tambah Data Rekam Medis</a>

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">KD RM</th>
          <th scope="col">Tanggal Periksa</th>
          <th scope="col">Nama Pasien</th>
          <th scope="col">Keluhan</th>
          <th scope="col">Nama Dokter</th>
          <th scope="col">Diagnosa</th>
          <th scope="col">Nama Obat</th>
          <th scope="col">Ruang</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rekams as $rekam)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $rekam->kd_rm  }}</td>
          <td>{{ $rekam->tgl_periksa }}</td>
          <td>{{ $rekam->pasien->name_pasien }}</td>
          <td>{{ $rekam->keluhan }}</td>
          <td>{{ $rekam->dokter->name_dokter }}</td>
          <td>{{ $rekam->diagnosa }}</td>
          <td>{{ $rekam->obat->name_obat }}</td>
          <td>{{ $rekam->ruang->name_ruang }}</td>
          <td>
            <a href="/dashboard/rekam/{{ $rekam->id }}" class="badge bg-info text-dark"><span data-feather="eye">Detail</span></a>
            <a href="/dashboard/rekam/{{ $rekam->id }}/edit" class="badge bg-warning text-dark"><span data-feather="edit">Edit</span></a>
            <form action="/dashboard/rekam/{{ $rekam->id }}" method="post" class="d-inline">
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