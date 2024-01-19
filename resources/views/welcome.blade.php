<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PPDB</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    .bg-yellow {
      background-color: #ffb71c;
    }
  </style>
</head>

<nav class="navbar py-3 px-5" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://methodist2.sch.id/assets/umum/images/favicon.png" alt="Logo" width="50" height="35" class="d-inline-block align-text-top">
      Methodist-2 Palembang
    </a>

    <a href="{{ route('login') }}" class="btn btn-warning">Login</a>
  </div>
</nav>

<body class="">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner">
      <div class="carousel-item active p-5">
        <img src="https://meth2.methodist2.sch.id/assets/umum/images/why/foto_gedung.JPG" class="d-block w-100 rounded" alt="..." style="max-height: 750px;">
        <div class=" carousel-caption">
          <h5 class="btn btn-dark">Sekolah Methodist 2 Palembang</h5>
          <a href="#" class="btn btn-dark d-block d-block mb-5 w-50 mx-auto">DAFTAR SEKARANG</a>
        </div>
      </div>
    </div>
  </div>

  <figure class="text-center">
    <blockquote class="blockquote">
      <p>Daftar sekarang juga!</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      Promo gratis biaya pendaftaran sd Mei 2024
    </figcaption>
  </figure>

  <div class="p-5">
    <div class="card-group">
      <div class="card">
        <img src="https://meth2.methodist2.sch.id/assets/umum/images/why/foto_gedung.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">GRATIS BIAYA PENDAFTARAN</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img src="https://meth2.methodist2.sch.id/assets/umum/images/why/foto_gedung.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">KURIKULUM TERBARU</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img src="https://meth2.methodist2.sch.id/assets/umum/images/why/foto_gedung.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">LULUS LANGSUNG KERJA</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <p class="m-1">Sekolah Methodist-2 Palembang</p>
      <p class="m-0" style="letter-spacing: 10px;">巨港卫理二校</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>