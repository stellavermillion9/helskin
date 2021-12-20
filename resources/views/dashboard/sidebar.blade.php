<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active btn btn-success" aria-current="page" href="dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
      </br>
        <li class="nav-item">
          <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.index') }}"> Product</a>
        </div>
        </li>
      </br>
        <li class="nav-item">
          <div class="pull-right">
            <a class="btn btn-success" href="{{ route('banners.index')}}"> Banner</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>