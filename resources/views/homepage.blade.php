<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP 2</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    
<!-- ----------------------------------------------Nav Bar------------------------------------------------- -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #53211D;" id="rumah">
        <div class="container-fluid tulisannavbar">
            <a class="navbar-brand" href="#">SMP 2 Negeri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Edit Data Pengajar
                </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/guru/tambahguru">Tambahkan Pengajar</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ----------------------------------------------Nav Bar------------------------------------------------- -->

    <!-- ----------------------------------------------Space------------------------------------------------- -->
    <div class="space"></div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row row1">
                <div class="col-12">
                    <h1 class="text-center font">Data Pengajar</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------------------------------------------Space------------------------------------------------- -->
    <div class="space"></div>
    
    <div class="card-deck">
    <?php
        foreach($ddata_gurus as $guru) {
        // echo "<li> Nama : {$guru->nama_lengkap} <br>";
        // echo " Tanggal Lahir : {$guru->tanggal_lahir} <br>";
        // echo " Jenis Kelamin : {$guru->jenis_kelamin} <br>";
        // echo " Alamat : {$guru->alamat} <br>";
        // echo " Mata Pelajaran : {$guru->mata_pelajaran} <br>";
        // echo " Gambar : {$guru->gambar} </li>";
    ?>
    <a href="/guru/{{$guru->id}}/edit">Edit</a>
    <form action="guru/{{$guru->id}}/delete" method="DELETE">
        @csrf   
        <button type="submit">Hapus</button>

    </form>
    <br>

    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-tittle">{{$guru->nama_lengkap}}</h5>
        <p class="card-text">{{$guru->tanggal_lahir}}</p>
        <span>Jenis Kelamin :</span>{{$guru->jenis_kelamin}}
      </div>
      <div class="card-footer">
        <small class="text-muted"> Last Update 3 Mins Ago </small>
      </div>
    </div>
    <?php
        }
    ?>
    </div>
    
    
    <!-- ----------------------------------------------Section 1------------------------------------------------- -->
    
    <!-- ----------------------------------------------Section 1------------------------------------------------- -->

</body>
</html>