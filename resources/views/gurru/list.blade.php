<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>List Guru</title>
</head>
<body>

@section('tampilandasar')
<div class="space"></div>
    
    <?php
    
        foreach($ddata_gurus as $guru) {
        echo "<li> Nama : {$guru->nama_lengkap} <br>";
        echo " Tanggal Lahir : {$guru->tanggal_lahir} <br>";
        echo " Jenis Kelamin : {$guru->jenis_kelamin} <br>";
        echo " Alamat : {$guru->alamat} <br>";
        echo " Mata Pelajaran : {$guru->mata_pelajaran} <br>";
        echo " Gambar : {$guru->gambar} </li>";
    ?>
    <div class="card-deck">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$guru->nama_lengkap}}</h5>
      <p class="card-text">{{$guru->tanggal_lahir}}</p>
      <span>Jenis Kelamin : </span>{{$guru->jenis_kelamin}} <br>
      <span>Alamat : </span>{{$guru->alamat}} <br>
      <span>Mata Pelajaran : </span>{{$guru->mata_pelajaran}} <br>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  
    <?php
        }
    ?>
    </div>
    
</body>
</html>

@endsection