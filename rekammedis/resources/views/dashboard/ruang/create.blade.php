@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Tambah Data Ruangan</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/ruang" class="mb-5" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="name_ruang"  class="form-label">Nama Ruang</label>
        <input type="text" name="name_ruang" class="form-control @error('name_ruang') is-invalid @enderror" id="name_ruang" placeholder="Nama Raung" required value="{{ old('name_ruang') }}">
        @error('name_ruang')
           <div class="invalid-feedback">
             {{ $message }}
           </div>
        @enderror
    </div>
    <div class="mb-3">
      <label for="ket_ruang"  class="form-label">Keterangan</label>
      <input type="text" name="ket_ruang" class="form-control @error('ket_ruang') is-invalid @enderror" id="ket_ruang" placeholder="Keterangan Ruang" required value="{{ old('ket_ruang') }}">
      @error('ket_ruang')
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