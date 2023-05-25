{{-- 
  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
     <h1 class="text-center fs-5">LAPORAN REKAM MEDIS</h1>
<table class="table table_bordered">
    <thead  class="table-info">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal Periksa</th>
        <th scope="col">Nama Pasien</th>
        <th scope="col">Keluhan</th>
        <th scope="col">Nama Dokter</th>
        <th scope="col">Diagnosa</th>
        <th scope="col">Nama Obat</th>
        <th scope="col">Ruang</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rekams as $rekam)
      <tr class="table_bordered">
      
        <td>{{ $loop->iteration }}</td>
        <td>{{ $rekam->tgl_periksa }}</td>
        <td>{{ $rekam->pasien->name_pasien }}</td>
        <td>{{ $rekam->keluhan }}</td>
        <td>{{ $rekam->dokter->name_dokter }}</td>
        <td>{{ $rekam->diagnosa }}</td>
        <td>{{ $rekam->obat->name_obat }}</td>
        <td>{{ $rekam->ruang->name_ruang }}</td>
  
      </tr>
      @endforeach
    </tbody>
  </table>
  
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    
    </body>
  </html> --}}


  {{-- adadads --}}
  {{-- 
{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head> --}}
  {{-- <body>
   <h1 class="text-center fs-5">LAPORAN DATA PENGEMBALIAN DRM</h1>
<table class="table table-sm">
  <thead  class="table-info ">
    <tr>
        <th scope="col">No</th>
        <th scope="col">No RM</th>
        <th scope="col">Nama Pasien</th>
        <th scope="col">Tgl KRS</th>
        <th scope="col">Tgl Peminjaman</th>
        <th scope="col">Tgl Harus Kembali</th>
        <th scope="col">Ruanagn</th>
        <th scope="col">Tanggal Dikembalikan</th>
        <th scope="col">Status</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($pengembaliandrms as $pengembaliandrm)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pengembaliandrm->norm }}</td>
          <td>{{ $pengembaliandrm->name_pasien }}</td>
          <td>{{ $pengembaliandrm->tgl_krs }}</td>
          <td>{{ $pengembaliandrm->tgl_peminjaman }}</td>
          <td>{{ $pengembaliandrm->tgl_harus_kembali }}</td>
          <td>{{ $pengembaliandrm->ruangan->name_ruangan }}</td>
          <td>{{ $pengembaliandrm->tanggal_dikembalikan }}</td>
          <td>{{ $pengembaliandrm->status }}</td>
        </tr>
        @endforeach
  </tbody>
</table> --}} 

   
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

{{--   
  </body>
</html> --}}

<!DOCTYPE html>
<html>
 <head>
  <title>Laporan</title>
 </head>
<body>
  <h1 style="text-align: center">LAPORAN DATA REKAM MEDIS</h1>
  <h1 style="text-align: center">PUSKESMAS BUNGUS TELUK KABUNG</h1>
  <table border="1">
    <thead  class="table-info ">
      <tr>
        <th scope="col">No</th>
        <th scope="col">KD RM</th>
        <th scope="col">Tanggal Periksa</th>
        <th scope="col">Nama Pasien</th>
        <th scope="col">Keluhan</th>
        <th scope="col">Nama Dokter</th>
        <th scope="col">Diagnosa</th>
        <th scope="col">Nama Obat</th>
        <th scope="col">Ruang</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($rekams as $rekam)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $rekam->kd_rm }}</td>
            <td>{{ $rekam->tgl_periksa }}</td>
            <td>{{ $rekam->pasien->name_pasien }}</td>
            <td>{{ $rekam->keluhan }}</td>
            <td>{{ $rekam->dokter->name_dokter }}</td>
            <td>{{ $rekam->diagnosa }}</td>
            <td>{{ $rekam->obat->name_obat }}</td>
            <td>{{ $rekam->ruang->name_ruang }}</td>
          </tr>
          @endforeach
    </tbody>
  </table>
</body>
</html>

 