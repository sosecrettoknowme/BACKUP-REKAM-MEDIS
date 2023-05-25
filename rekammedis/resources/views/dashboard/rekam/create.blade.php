@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Tambah Data Rekam Medis</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/rekam" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="kd_rm"  class="form-label">KD RM</label>
          <input type="text" name="kd_rm" class="form-control @error('kd_rm') is-invalid @enderror" id="kd_rm" placeholder="kd_rm" required value="{{ old('kd_rm') }}">
          @error('kd_rm')
             <div class="invalid-feedback">
               {{ $message }}
             </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="tgl_periksa"  class="form-label">Tanggal Perikasa</label>
          <input type="date" name="tgl_periksa" class="form-control @error('tgl_periksa') is-invalid @enderror" id="tanggal periksa" placeholder="Tanggal periksa">
          @error('tgl_periksa')
             <div class="invalid-feedback">
               {{ $message }}
             </div>
          @enderror
      </div>
      <div class="mb-3">
        <label for="pasien_id" class="form-label">Nama Pasien</label>
        <select class="form-select" name="pasien_id">
          <option value="" selected>Pilih Pasien</option>
          @foreach ($pasiens as $pasien)
               <option value="{{ $pasien->id }}">{{ $pasien->name_pasien }}</option>
          @endforeach
        </select>
      </div>
    <div class="mb-3">
      <label for="keluhan"  class="form-label">Keluhan</label>
      <input type="text" name="keluhan" class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" placeholder="keluhan" required value="{{ old('keluhan') }}">
      @error('keluhan')
         <div class="invalid-feedback">
           {{ $message }}
         </div>
      @enderror
  </div>
  <div class="mb-3">
    <label for="pasien_id" class="form-label">Nama Dokter</label>
    <select class="form-select" name="dokter_id">
      <option value="" selected>Pilih Dokter</option>
      @foreach ($dokters as $dokter)       
           <option value="{{ $dokter->id }}">{{ $dokter->name_dokter }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="diagnosa"  class="form-label">Diagnosa</label>
    <input type="text" name="diagnosa" class="form-control @error('diagnosa') is-invalid @enderror" id="diagnosa" placeholder="diagnosa" required value="{{ old('diagnosa') }}">
    @error('diagnosa')
       <div class="invalid-feedback">
         {{ $message }}
       </div>
    @enderror
</div>
<div class="mb-3">
  <label for="obat_id" class="form-label">Nama Obat</label>
  <select class="form-select" name="obat_id">
    <option value="" selected>Pilih Obat</option>
    @foreach ($obats as $obat)
         <option value="{{ $obat->id }}">{{ $obat->name_obat }}</option>
    @endforeach
  </select>
</div>
<div class="mb-3">
  <label for="ruang_id" class="form-label">Ruang</label>
  <select class="form-select" name="ruang_id">
    <option value="" selected>Pilih Ruang</option>
    @foreach ($ruangs as $ruang)
         <option value="{{ $ruang->id }}">{{ $ruang->ket_ruang }}</option>
    @endforeach
  </select>
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