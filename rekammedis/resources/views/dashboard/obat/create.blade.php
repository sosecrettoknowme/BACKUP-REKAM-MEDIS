@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Tambah Data Obat</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/obat" class="mb-5" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="name_obat"  class="form-label">Nama Obat</label>
        <input type="text" name="name_obat" class="form-control @error('name_obat') is-invalid @enderror" id="name_obat" placeholder="Nama Obat" required value="{{ old('name_obat') }}">
        @error('name_obat')
           <div class="invalid-feedback">
             {{ $message }}
           </div>
        @enderror
    </div>
    <div class="mb-3">
      <label for="ket_obat"  class="form-label">Keterangan</label>
      <input type="text" name="ket_obat" class="form-control @error('ket_obat') is-invalid @enderror" id="ket_obat" placeholder="Keterangan Obat" required value="{{ old('ket_obat') }}">
      @error('ket_obat')
         <div class="invalid-feedback">
           {{ $message }}
         </div>
      @enderror
  </div>
        {{-- <div class="mb-3">
          <label for="image" class="form-label">Foto</label>
          <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>         --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
@endsection