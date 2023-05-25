@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Tambah Data Dokter</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/dokter" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name_dokter"  class="form-label">Name Dokter</label>
          <input type="text" name="name_dokter" class="form-control @error('name_dokter') is-invalid @enderror" id="name_dokter" placeholder="Name" required value="{{ old('name_dokter') }}">
          @error('name_dokter')
             <div class="invalid-feedback">
               {{ $message }}
             </div>
          @enderror
      </div>
      <div class="mb-3">
        <label for="spesialis"  class="form-label">Spesialis</label>
        <input type="text" name="spesialis" class="form-control @error('spesialis') is-invalid @enderror" id="spesialis" placeholder="Spesialis" required value="{{ old('spesialis') }}">
        @error('spesialis')
           <div class="invalid-feedback">
             {{ $message }}
           </div>
        @enderror
    </div>
    <div class="mb-3">
      <label for="alamat"  class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" required value="{{ old('alamat') }}">
      @error('alamat')
         <div class="invalid-feedback">
           {{ $message }}
         </div>
      @enderror
  </div>
  <div class="mb-3">
    <label for="no_telp"  class="form-label">No Telp</label>
    <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="Nomor Telepon" required value="{{ old('no_telp') }}">
    @error('no_telp')
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