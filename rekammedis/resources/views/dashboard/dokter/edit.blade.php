@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Edit Dokter</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/dokter/{{ $dokter->id }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name_dokter" class="form-label">Name</label>
          <input type="text" class="form-control @error('name_dokter') is-invalid @enderror" id="name_dokter" name="name_dokter" required value="{{ old('name_dokter', $dokter->name_dokter) }}">
          @error('name_dokter')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="spesialis" class="form-label">Spesialis</label>
          <input type="text" class="form-control  @error('spesialis') is-invalid @enderror" id="spesialis" name="spesialis" required value="{{ old('spesialis', $dokter->spesialis) }}">
          @error('spesialis')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control  @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat', $dokter->alamat) }}">
          @error('alamat')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="no_telp" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control  @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" required value="{{ old('no_telp', $dokter->no_telp) }}">
          @error('no_telp')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
   </div>
@endsection