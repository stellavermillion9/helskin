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
            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main>
</br>
</br>
</br>
</br>
    {{-- <div class="row" id="product" >
      @foreach($product as $products)
      <div class="col-lg-6" style="text-align: center; background: none;">
        <div class="container-fluid">
        <img src="{{ asset ('image/product/'.$products->image) }}" alt="{{ $products->name }}" style="width: 275px; height: 275px; ">
        </div>
        <div class="col-lg-6" style="text-align: center; background: none;">   
        <h5>{{$products->name}}</h5>     
        </div>
    </div>
        <div class="container">
            <p>{{$products->details}}</p>
        </div>
      </div>  --}}

      <div class="row" id="product">
          @foreach($product as $products)
          <div class="col-lg-4 " style="text-align: center">
              <div class="container border" id="image-product">
                  <img src="{{ asset('image/product/'.$products->image)}}" alt="{{ $products->name }}" style="width: 275px">
              </div>
            </div>
              <div class="col-lg-8" style="text-align:start">
                  <div class="container" style="color:rgb(235, 147, 162)">
                      <h3>{{ $products->name }}</h3>
                      <h5>{{ $products->price }}</h5>
                  </div>
                </br>
                  <div class="container" style="text-align: start">
                    <h5>DESKRIPSI PRODUK :</h5>
                    <p style="font-size: 18px">{{ $products->detail }}</p>
                </div>
              </div>
      </div>
    </br>
</br>
</br>
    </br>
    @endforeach

    <div class="row">
      <div class="container" style="text-align: center; color:rgb(235, 147, 162)">
        <h3>Anda Tertarik dengan Produk yang kami tawarkan? Order Sekarang!</h3>
      </div>
    </br>
  </br>
</br>
</br>
      <div class="col-lg-4" style="text-align: center">
        <a class="btn btn-success" href="https://api.whatsapp.com/send/?phone=6282128849784&text&app_absent=0">Order di Whatsapp</a>
      </div>
    </br>
  </br>
      <div class="col-lg-4" style="text-align: center">
        <a class="btn btn-secondary" href="https://www.lazada.co.id/shop/helskin-id">Order di Lazada</a>
      </div>
    </br>
  </br>
      <div class="col-lg-4" style="text-align: center">
        <a class="btn btn-danger" href="https://shopee.co.id/helskin.id">Order di Shopee</a>
      </div>
    </div>
</br>
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
<a class="float-end" style="color: black" href="https://www.instagram.com/helskin.id/"><i class="fab fa-instagram">@helskin.id</i></a>
</br>
<a class= "float-end" href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=helskin.id@gmail.com" style="color: red; text-decoration:none"><i class="far fa-envelope"></i>helskin.id@gmail.com</a></br>
<a class= "float-end" href="https://api.whatsapp.com/send?phone=6281902229996" style="color: green; text-decoration:none"><i class="fab fa-whatsapp"></i>+6281902229996</a></br>
<a class= "float-end" href="https://linktr.ee/helskin.id" style="color: orange; text-decoration:none"><i class="fas fa-shopping-cart"></i>helskin.id</a></br>
</div>
</div>
  </footer>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
  </body>
</html>
