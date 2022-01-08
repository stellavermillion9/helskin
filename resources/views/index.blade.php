<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Helskin</title>
    <link rel="icon" href="{{ asset('img/logo.png')}}">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <script src="https://kit.fontawesome.com/d9e92a86f2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        #hero img{
          width: 275px;
        }
      }

      @media (min-width: 400px){
        #hero img{
          width: 275px;
        }
      }

      @media (max-width: 450px){
        /* #myCarousel{
        height: 175px;
        width: 200px;
      } */
      .body img{
        width: 175px;
        height: 175px;
      }
      }

      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset ('img/logo.png')}}" alt="" style="width: 100px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testi">Testimoni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-ride="carousel" id="beranda">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner active">
        @foreach($banner as $key => $banners)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <img src="{{asset('image/banner/'. $banners->image)}}" class="d-block w-100"  alt="..."> 
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</br>

<div class="container" style="text-align: center">
<h2>Kenapa Harus Helskin?</h2>
</div>
</br>
</br>
<div class="row">
  @foreach($iklan as $i)
  <div class="col-lg-4" style="text-align: center; background:none">
      <img src="{{ asset('image/iklan/'.$i->image)}}" alt="" style="width:auto; height: 175px">
      <p>{{ $i->description }}</p>
  </div>
  @endforeach
</div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
</br>
</br>
  <div class="container marketing">
    <div class="container" style="text-align: center">
      <h1 style="color:rgb(235, 147, 162)">Our Product</h1>
      <h5 style="color:rgb(235, 147, 162)">Product dari Kami</h5>
    </div>
  </br>
    <!-- Three columns of text below the carousel -->
    


    <div class="row" id="product">
      @foreach($product as $products)
      <div class="col-lg-3 card" style="text-align: center; background: none;">
        <div class="container-fluid">
        <img src="{{asset('image/product/'.$products->image)}}" alt="" style="width: 275px; height: 275px; ">   
        <h5>{{$products->name}}</h5>     
        <a id="create-comment" type="button" class="btn btn-primary" href="{{url('readmore/'.$products->id)}}">
          Show More 
        </a>
      </div> 
      </div>
      @endforeach
    </br>
    </div>
  </br>
</br>

  
</br>

</br>
</br>
    <div class="row">
      <div class="container" style="text-align: center; color:rgb(235, 147, 162)">
        <h3>Anda Tertarik dengan Produk yang kami tawarkan? Order Sekarang!</h3>
      </div>
    </br>
  </br>
</br>
</br>
      <div class="col-lg-4">
        <a class="btn btn-success" href="https://api.whatsapp.com/send/?phone=6282128849784&text&app_absent=0">Order di Whatsapp</a>
      </div>
    </br>
  </br>
      <div class="col-lg-4">
        <a class="btn btn-secondary" href="https://www.lazada.co.id/shop/helskin-id">Order di Lazada</a>
      </div>
    </br>
  </br>
      <div class="col-lg-4">
        <a class="btn btn-danger" href="https://shopee.co.id/helskin.id">Order di Shopee</a>
      </div>
    </div>
    
  
 
</br>
</br>

  
</br>

</br>
</br>
    <!-- START THE FEATURETTES -->
  </br>
    <div class="container marketing">
      <div class="container mt-5 ">
        <h1 style="text-align: center; color:rgb(235, 147, 162)">Testimoni Pengguna</h1>
        <h4 style="text-align: center">Our Testimonial & Review From Customer</h4>
      </div>
    </br>
      <!-- Three columns of text below the carousel -->
    </br>
  </br>
      <div class="row" id="testi">
        @foreach($testi as $t)
        <div class="col-lg-3 card" style="text-align: center; background: none;">
          <div class="container-fluid"><img src="{{asset('image/testi/'.$t->image)}}" alt="" style="width: 275px"></div>
          <div class="card-body">
          <h2 class="card-title">{{$t->name}}</h2>
            <p class="card-text">{{$t->description}}</p>
          </div>
        </div><!-- /.col-lg-4 -->
        @endforeach
        </div>  
    </div>
  </br>
</br>
  <!-- FOOTER -->
  <footer class="container" id="kontak">
    <H2 style="text-align: center; color: rgb(112, 194, 213)">Hubungi Kami</H2>
    <div class="row">
  <div class="col-lg-6">
    <p>&copy; 2021 Helskin</p>
    <p class="float-start"><img src="{{ asset('img/logo.png')}}" alt="" style="width: 150px"></p>
  </div>
  <div class="col-lg-6">
<a class="float-end" style="color: black" href="https://www.instagram.com/helskin.id/"><i class="fab fa-instagram"> @helskin.id</i></a>
</br>
<a class= "float-end" href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=helskin.id@gmail.com" style="color: red; text-decoration:none"><i class="far fa-envelope"></i> helskin.id@gmail.com</a></br>
<a class= "float-end" href="https://linktr.ee/helskin.id" style="color: orange; text-decoration:none"><i class="fas fa-shopping-cart"></i>  helskin.id</a></br>
<a id="whatsapp" class= "float-end" href="https://api.whatsapp.com/send?phone=6281902229996" style="color: green; text-decoration:none; "><i class="fab fa-whatsapp"></i></a></br>
</div>
</div>
  </footer>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
  </body>
</html>
