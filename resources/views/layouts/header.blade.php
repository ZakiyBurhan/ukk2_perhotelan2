<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Order Tickets</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('room') ? 'active' : '' }}" href="/room">Room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('facility') ? 'active' : '' }}" href="/pilihankamar">Kamar</a>
          </li>
        </ul>
        <form class="d-flex col-8" role="search" method>
          <input class="form-control mx-3" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
        </form>

        <ul class="navbar-nav ">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/"><i
                                        class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @if(auth()->user()->role == 'admin')
                            <li><a class="dropdown-item" href="/kamar"><i
                                        class="bi bi-layout-text-sidebar-reverse"></i>admin</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @endif
                          
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>
                                    Logout</button>
                            </form>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}"><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  {{-- @endif --}}