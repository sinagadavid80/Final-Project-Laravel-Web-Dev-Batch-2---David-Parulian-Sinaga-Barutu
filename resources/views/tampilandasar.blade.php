<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body>
<!-- ---------------------------------------------Nav Bar-------------------------------------------------------- -->
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
<!-- ---------------------------------------------Nav Bar-------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<div class="space"></div>

@yield('content')
<!-- ------------------------------------------------------------------------------------------------------------------------ -->


</body>
</html>