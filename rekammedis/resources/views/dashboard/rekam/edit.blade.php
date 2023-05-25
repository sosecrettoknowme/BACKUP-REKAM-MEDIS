{{-- @extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Edit Rekam Medis</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/rekam/{{ $rekam->id }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="tgl_periksa" class="form-label">Tanggal Periksa</label>
          <input type="text" class="form-control @error('tgl_periksa') is-invalid @enderror" id="tgl_periksa" name="tgl_periksa" required autofocus value="{{ old('tgl_periksa', $rekam->tgl_periksa) }}">
          @error('tgl_periksa')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="pasien_id" class="form-label">Nama Pasien</label>
          <input type="text" class="form-control  @error('pasien_id') is-invalid @enderror" id="pasien_id" name="pasien_id" value="{{ old('pasien_id', $rekam->pasien->name_pasien) }}">
          @error('pasien_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="keluhan" class="form-label">Keluhan</label>
          <input type="text" class="form-control  @error('keluhan') is-invalid @enderror" id="keluhan" name="keluhan"value="{{ old('keluhan', $rekam->keluhan) }}">
          @error('keluhan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="dokter_id" class="form-label">Nama dokter</label>
          <input type="text" class="form-control  @error('dokter_id') is-invalid @enderror" id="dokter_id" name="dokter_id"value="{{ old('dokter_id', $rekam->dokter->name_dokter) }}">
          @error('dokter_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="diagnosa" class="form-label">Diagnosa</label>
          <input type="text" class="form-control  @error('diagnosa') is-invalid @enderror" id="diagnosa" name="diagnosa"  value="{{ old('diagnosa', $rekam->diagnosa) }}">
          @error('diagnosa')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="obat_id" class="form-label">Nama Obat</label>
          <input type="text" class="form-control  @error('obat_id') is-invalid @enderror" id="obat_id" name="obat_id" value="{{ old('obat_id', $rekam->obat->name_obat) }}">
          @error('name_obat')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="ruang_id" class="form-label">Nama Ruang</label>
          <input type="text" class="form-control  @error('ruang_id') is-invalid @enderror" id="ruang_id" name="ruang_id" value="{{ old('ruang_id', $rekam->ruang->name_ruang) }}">
          @error('ruang_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        
        
        <button type="submit" class="btn btn-primary">Update Rekam Medis</button>
      </form>
   </div>
@endsection --}}



@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Edit Post</h1>
   </div>

   <div class="col-lg-8">
       <form method="post" action="/dashboard/rekam/{{ $rekam->id }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="kd_rm" class="form-label">KD RM</label>
          <input type="text" class="form-control @error('kd_rm') is-invalid @enderror" id="kd_rm" name="kd_rm" required autofocus value="{{ old('kd_rm', $rekam->kd_rm) }}">
          @error('kd_rm')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="tgl_periksa" class="form-label">Tanggal Periksa</label>
          <input type="date" class="form-control @error('tgl_periksa') is-invalid @enderror" id="tgl_periksa" name="tgl_periksa" required autofocus value="{{ old('tgl_periksa', $rekam->tgl_periksa) }}">
          @error('tgl_periksa')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="obat" class="form-label">Nama Pasien</label>
          <select class="form-select" name="pasien_id">
            @foreach ($pasiens as $pasien)
              @if(old('pasien_id', $rekam->pasien_id) == $pasien->id)
                 <option value="{{ $pasien->id }}" selected>{{ $pasien->name_pasien }}</option>
              @else
              <option value="{{ $pasien->id }}">{{ $pasien->name_pasien }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="keluhan" class="form-label">Keluhan</label>
          <input type="text" class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" name="keluhan" required autofocus value="{{ old('keluhan', $rekam->keluhan) }}">
          @error('keluhan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="dokter" class="form-label">Nama Dokter</label>
          <select class="form-select" name="dokter_id">
            @foreach ($dokters as $dokter)
              @if(old('dokter_id', $rekam->dokter_id) == $dokter->id)
                 <option value="{{ $dokter->id }}" selected>{{ $dokter->name_dokter }}</option>
              @else
              <option value="{{ $dokter->id }}">{{ $dokter->name_dokter }}</option>
              @endif
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="diagnosa" class="form-label">Diagnosa</label>
          <input type="text" class="form-control @error('diagnosa') is-invalid @enderror" id="diagnosa" name="diagnosa" required autofocus value="{{ old('diagnosa', $rekam->diagnosa) }}">
          @error('diagnosa')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="obat" class="form-label">Nama Obat</label>
          <select class="form-select" name="obat_id">
            @foreach ($obats as $obat)
              @if(old('obat_id', $rekam->obat_id) == $obat->id)
                 <option value="{{ $obat->id }}" selected>{{ $obat->name_obat }}</option>
              @else
              <option value="{{ $obat->id }}">{{ $obat->name_obat }}</option>
              @endif
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="ruang" class="form-label">Ruang</label>
          <select class="form-select" name="ruang_id">
            @foreach ($ruangs as $ruang)
              @if(old('ruang_id', $rekam->ruang_id) == $ruang->id)
                 <option value="{{ $ruang->id }}" selected>{{ $ruang->name_ruang }}</option>
              @else
              <option value="{{ $ruang->id }}">{{ $ruang->name_ruang }}</option>
              @endif
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="ruang" class="form-label">ruang</label>
          <select class="form-select" name="ruang_id">
            @foreach ($ruangs as $ruang)
              @if(old('ruang_id', $rekam->ruang_id) == $ruang->id)
                 <option value="{{ $ruang->id }}" selected>{{ $ruang->name_ruang }}</option>
              @else
              <option value="{{ $ruang->id }}">{{ $ruang->name_ruang }}</option>
              @endif
            @endforeach
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
   </div>

@endsection 