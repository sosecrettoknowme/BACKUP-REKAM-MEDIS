@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Edit Ruang</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/obat/{{ $obat->id }}" class="mb-5">
        @method('put')
        @csrf
        
        <div class="mb-3">
          <label for="name_obat" class="form-label">Name Obat</label>
          <input type="text" class="form-control @error('name_obat') is-invalid @enderror" id="name_obat" name="name_obat"  autofocus value="{{ old('name_obat', $obat->name_obat) }}">
          @error('name_obat')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="ket_obat" class="form-label">Keterangan</label>
          <input type="text" class="form-control @error('ket_obat') is-invalid @enderror" id="ket_obat" name="ket_obat"  autofocus value="{{ old('ket_obat', $obat->ket_obat) }}">
          @error('ket_obat')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update Obat</button>
      </form>
   </div>
@endsection