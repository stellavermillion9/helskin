<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Helskin </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset ('css/guest.css')}}" rel="stylesheet">
    <link href="guest.css" rel="stylesheet">
  </head>

  <body>
  <!-- header 1 -->
    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
          <ul class="nav me-auto">
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page"> Beranda </a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Kontak</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Tentang</a></li>
          </ul>
          <ul class="nav">
            <li class="nav-item"><a href="login" class="nav-link link-dark px-2">Masuk</a></li>
          </ul>
        </div>
    </nav>
  <!-- header2 -->
  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
        <img src="{{asset('css/logohelskin.png')}}" style="width:150px;height:40px;">
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0">
        <input type="search" class="form-control" placeholder="Cari..." aria-label="Search">
      </form>
    </div>
  </header>

  <main>
    @foreach ($banner as $banners)
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <img src={{ $banners->image }} alt="">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Solution Your Healthy Skin </h1>
        <p class="lead text-muted">
          Kulit sehat dengan skincare yang aman, halal dan berizin BPOM? Yuk cek produk unggulan kami!
        </p>
        <p>
          <a href="#" class="btn btn-secondary my-2"> selengkapnya </a>
        </p>
      </div>   
    </div>
  </section>
  @endforeach
</main>

<div class="container px-4 py-5" id="custom-cards">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
        <img src=""style="width:350px;height:650px;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">dasa</h2>
            <h3>sdasdas</h3>
            <h4>dasdsadas</h4>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
        <img src="{{asset('css/produk.jpeg')}}" style="width:350px;height:650px;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"> Brightening Serum </h2>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
        <img src="{{asset('css/produk.jpeg')}}" style="width:350px;height:650px;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"> Brightening Serum </h2>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom"> Testimoni </h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg> 
          <img src="{{asset('css/logohelskin.png')}}" style="width:150px;height:40px;">
        </div>
        <h2> Andika </h2>
        <p> Aman buat kulit berjerawat, cepet cerahan jugaaa... recommended deh pokoknya</p>
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon">
           <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg> 
          <img src="{{asset('css/logohelskin.png')}}" style="width:150px;height:40px;">
        </div>
        <h2> Andika </h2>
        <p> Aman buat kulit berjerawat, cepet cerahan jugaaa... recommended deh pokoknya</p>
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon">
           <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg> 
          <img src="{{asset('css/logohelskin.png')}}" style="width:150px;height:40px;">
        </div>
        <h2> Andika </h2>
        <p> Aman buat kulit berjerawat, cepet cerahan jugaaa... recommended deh pokoknya</p>
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>

    </div>
  </div>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="whatsapp" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="instagram" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="shopee" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="lazada" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="tiktok" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="gmail" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
  </footer>
</div>


  </body>
</html>