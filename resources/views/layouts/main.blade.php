<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berperpus | {{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="body">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <img src="img/icon.png" alt="Logo" width="40" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="/home">
                <strong>Ber</strong>perpus
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Katalog") ? 'active' : '' }}" href="/katalog">Katalog</a>
              </li>
              @if(Auth::check() && Auth::user()->role == 'admin')
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Data User") ? 'active' : '' }}" href="/edit">Data User</a>
              </li>
              @endif
            </ul>

            @auth
            <div class="navbar-nav ms-auto">
              <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-list-ul"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
              </ul>
            </div>
          </div>

            @else    
            <li class="navbar-nav ms-auto">
                <a href="/login" class="nav-link {{ ($title == "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            @endauth
              
          </div>
        </div>
      </nav>

      <div class="container mt-4">
        @yield('container')
    </div>

  <footer class="footer text-dark p-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="" class="text-decoration-none">
                    <img src="img/icon.png" style="width: 30px;">
                </a>
                <span>Copyright @2023 | Created and Developed by <strong>Berka Aldizar</strong></span>
            </div>
        </div>
    </div>
</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>