@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Edit Ruang</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/ruang/{{ $ruang->id }}" class="mb-5">
        @method('put')
        @csrf
        
        <div class="mb-3">
          <label for="name_ruang" class="form-label">Name</label>
          <input type="text" class="form-control @error('name_ruang') is-invalid @enderror" id="name_ruang" name="name_ruang"  autofocus value="{{ old('name_ruang', $ruang->name_ruang) }}">
          @error('name_ruang')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="ket_ruang" class="form-label">Keterangan</label>
          <input type="text" class="form-control @error('ket_ruang') is-invalid @enderror" id="ket_ruang" name="ket_ruang"  autofocus value="{{ old('ket_ruang', $ruang->ket_ruang) }}">
          @error('ket_ruang')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update Pasien</button>
      </form>
   </div>
@endsection