
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
     <h1 class="text-center fs-5">LAPORAN RUANG</h1>
<table class="table table_bordered">
    <thead  class="table-info">
      <tr>
        <th scope="col">No</th>
          <th scope="col">Nama Ruang</th>
          <th scope="col">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ruangs as $ruang)
      <tr class="table_bordered">
      
        <td>{{ $loop->iteration }}</td>
          <td>{{ $ruang->name_ruang }}</td>
          <td>{{ $ruang->ket_ruang }}</td>
  
      </tr>
      @endforeach
    </tbody>
  </table>
  
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    
    </body>
  </html>

 