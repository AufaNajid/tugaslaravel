<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="/Dashboard/Pemain/pemain">Pemain</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="/Dashboard/Kelas/kelas">Team</a>
              </li>
          
        </div>
        @auth
                      <div class="dropdown ml-auto flex">
                          <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Welcome, {{ auth()->user()->name }}
                          </button>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                              <li><a class="dropdown-item" href="/home">Home</a></li>
                              <li>
                                  <form method="post" action="/Login/logout">
                                      @csrf
                                      <button type="submit" class="dropdown-item">Logout</button>
                                  </form>
                              </li>
                          </ul>
                      </div>
                  @else<form class="d-flex gap-2" role="search">
                      <a class="btn btn-success fw-semibold" href="/register">Register</a>
                      <a class="btn btn-success fw-semibold" href="/login">Login</a>
                  </form>
                  @endauth
      </div>
  </nav>
