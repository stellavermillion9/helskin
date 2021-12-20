<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">HELskin</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
       
      <!-- Authentication -->
      <button class="button-logout border-0 bg-dark">
      <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-jet-dropdown-link href="{{ route('logout') }}" style="text-decoration:none; color:rgba(255, 255, 255, 0.694);"
                   onclick="event.preventDefault();
                          this.closest('form').submit();">
              Log Out
          </x-jet-dropdown-link>
      </form>
    </button>
    </div>
  </header>