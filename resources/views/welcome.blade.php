<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rents Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/yunka.png')}}" alt="Rents Book" width="35" height="30"> 
                Rents Book
              </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Fantasy</a></li>
                  <li><a class="dropdown-item" href="#">Romance</a></li>
                  <li><a class="dropdown-item" href="#">Comedy</a></li>
                  <li><a class="dropdown-item" href="#">Adventure</a></li>
                  <li><a class="dropdown-item" href="#">Anime</a></li>
                  <li><a class="dropdown-item" href="#">Cartoon</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Horor</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-warning " href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 
      {{-- akhir navbar --}}
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2800">
            <img src="https://s0.2mdn.net/simgad/17747577618995729445" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2800">
            <img src="https://s0.2mdn.net/simgad/17747577618995729445" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2800">
            <img src="https://s0.2mdn.net/simgad/17747577618995729445" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      {{-- jumbroton --}}
      <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <h1>Rents Book</h1>
                <a href="/register" class="btn btn-outline-warning">Daftar Sekarang</a>
            </div>
            <div class="col-md-8">
                <P>Perpustakaan adalah sebuah koleksi buku dan majalah. 
                    Walaupun dapat diartikan sebagai koleksi pribadi perseorangan,
                     namun perpustakaan lebih umum dikenal sebagai sebuah koleksi besar yang dibiayai dan dioperasikan oleh sebuah kota atau institusi,
                      dan dimanfaatkan oleh masyarakat yang rata-rata tidak mampu membeli sekian banyak buku atas biaya sendiri.
                </P>

        </div>
      </div>
      </div>
      {{-- akhir jumbroton --}}
      {{-- card populer book --}}
      <div class="container mt-4">
        <div class="row text-center">
            <h4>Top 3 Dalam Minggu Ini</h4>
            <hr class="solid"></hr>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://pict.sindonews.net/dyn/600/pena/sindo-article/original/2021/08/19/Nanda_Amazing%20Fantasy.jpg" class="card-img-top" alt="..." style="max-height: 400px">
                    <div class="card-body">
                      <h5 class="card-title">Amazing Fantasy</h5>
                      <p class="card-text">The First Appearance of the Amazing Spider-Man! When young Peter Parker gains remarkable abilities from a radioactive spider, he must step up and try to become a hero — while also dealing with the fantastic pressures of an everyday teenager! For with great power, there must also come great responsibility!</p>
                      <a href="#" class="btn btn-outline-success w-100">Buy</a>
                    </div>
                  </div>
            </div>
                  <div class="col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.idntimes.com/content-images/community/2020/04/675191-7e3e4663679ac60f41139e5c44489b87.jpg" class="card-img-top" alt="..." style="max-height: 400px">
                        <div class="card-body">
                          <h5 class="card-title">The X-Men</h5>
                          <p class="card-text">The X-Men are a team of superheroes appearing in American comic books published by the Marvel Comics. The X-Men first appeared in the self-titled X-Men comic, cover dated September 1963. Due to the X-Men's immense popularity, Marvel has launched dozens of spin-off series, called "X-Legs" throughout the years.</p>
                          <a href="#" class="btn btn-outline-success w-100">Buy</a>
                        </div>
                      </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.tamanpendidikan.com/storage/yWeLG5HtKjdVtCqUhRBrO9yVoBwqJAM1QwRnOuRS.jpeg" class="card-img-top" alt="..." style="max-height: 400px">
                    <div class="card-body">
                      <h5 class="card-title">Action Comics</h5>
                      <p class="card-text">Action Comics is an American comic book/magazine series that introduced Superman, one of the first major superhero characters. The publisher was originally known as National Allied Publications, and later as National Comics Publications and as National Periodical Publications, before taking on its current.</p>
                      <a href="#" class="btn btn-outline-success w-100">Buy</a>
                    </div>
                  </div>
              </div>
        <hr class="solid"><hr>
        {{-- pesan --}}
        <div class="container">
            <div class="row text-center">
                <h2>Messege</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form action="{{route('messege')}}" method="POST">
                      @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="name" name="nama">
                        </div>
                        <div class="mb-3">
                          <label for="messege" class="form-label">Messege</label>
                          <textarea type="messege" name="messege" class="form-control" id="messege"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      </form>
                      {{-- akhir pesan --}}
                      {{-- footer --}}
                      <footer class="text-center" style="height: 30px;">
                        <p>Created by <a href="#" style="text-decoration: none; color:gray" target="_blank">Wildan Oktavian .M</a></p>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>