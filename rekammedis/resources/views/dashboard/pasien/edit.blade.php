@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Edit Pasien</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/pasien/{{ $pasien->id }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name_pasien" class="form-label">Name</label>
          <input type="text" class="form-control @error('name_pasien') is-invalid @enderror" id="name_pasien" name="name_pasien" required autofocus value="{{ old('name_pasien', $pasien->name_pasien) }}">
          @error('name_pasien')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="alamat_pasien" class="form-label">Alamat</label>
          <input type="text" class="form-control  @error('alamat_pasien') is-invalid @enderror" id="alamat_pasien" name="alamat_pasien" required value="{{ old('alamat_pasien', $pasien->alamat_pasien) }}">
          @error('alamat_pasien')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="no_telp_pasien" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control  @error('no_telp_pasien') is-invalid @enderror" id="no_telp_pasien" name="no_telp_pasien" required value="{{ old('no_telp_pasien', $pasien->no_telp_pasien) }}">
          @error('no_telp_pasien')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin_pasien"  class="form-label">Jenis Kelamin</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="jenis_kelamin_pasien" id="jenis_kelamin_pasien" required value="{{ old('jenis_kelamin_pasien', $pasien->jenis_kelamin_pasien) }}">
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin_pasien')
               <div class="invalid-feedback">
                 {{ $message }}
               </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update Pasien</button>
      </form>
   </div>
@endsection