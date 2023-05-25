@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Tambah Data Pasien</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/pasien" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name"  class="form-label">Name</label>
          <input type="text" name="name_pasien" class="form-control @error('name_pasien') is-invalid @enderror" id="name_pasien" placeholder="Name" required value="{{ old('name_pasien') }}">
          @error('name_pasien')
             <div class="invalid-feedback">
               {{ $message }}
             </div>
          @enderror
      </div>
      <div class="mb-3">
        <label for="alamat_pasien"  class="form-label">Alamat</label>
        <input type="text" name="alamat_pasien" class="form-control @error('alamat_pasien') is-invalid @enderror" id="alamat_pasien" placeholder="Alamat" required value="{{ old('alamat_pasien') }}">
        @error('alamat_pasien')
           <div class="invalid-feedback">
             {{ $message }}
           </div>
        @enderror
    </div>
    <div class="mb-3">
      <label for="no_telp_pasien"  class="form-label">Nomor Telepon</label>
      <input type="text" name="no_telp_pasien" class="form-control @error('no_telp_pasien') is-invalid @enderror" id="no_telp_pasien" placeholder="Nomor Telepon" required value="{{ old('no_telp_pasien') }}">
      @error('no_telp_pasien')
         <div class="invalid-feedback">
           {{ $message }}
         </div>
      @enderror
  </div>
  <div class="mb-3">
    <label for="jenis_kelamin_pasien"  class="form-label">Jenis Kelamin</label>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="jenis_kelamin_pasien" id="jenis_kelamin_pasien">
      <option selected>Pilih Jenis Kelamin</option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
    @error('jenis_kelamin_pasien')
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