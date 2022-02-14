
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container-fluid">
    <a class="navbar-brand " href="/">Amazing E-Book</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

      <!-- admin Navbar -->

      @if( session()->has('auth') && session()->get('auth')['role_id'] === 1)
        <ul class="navbar-nav ms-auto">
          <div class="btn-group">
              <li class="nav-item">
                  <a class="nav-link active" href="/home">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="/cart">Cart</a>
              </li>
            <li class="nav-item">
              <a class="nav-link active" href="/account_maintenance">
                Account Maintenance
              </a>
            </li>
          </div>
          <div class="btn-group">
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownAccount" role="button"
                 data-bs-toggle="dropdown" aria-expanded="false">
                Hello,
                  {{ session()->get('auth')['first_name'] }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAccount">
                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit">Log out</button>
                  </form>
                </li>
              </ul>
            </li>
          </div>
        </ul>
      @endif

    <!-- User Navbar -->
        @if( session()->has('auth') && session()->get('auth')['role_id'] === 2)

        <ul class="navbar-nav ms-auto">
          <div class="btn-group">
              <li class="nav-item">
                  <a class="nav-link active" href="/home">Home</a>
              </li>

            <li class="nav-item">
              <a class="nav-link active" href="/cart">Cart</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownAccount" role="button"
                 data-bs-toggle="dropdown" aria-expanded="false">
                Hello, {{ session()->get('auth')['first_name'] }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAccount">
                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit">Log out</button>
                  </form>
                </li>
              </ul>
            </li>
          </div>
        </ul>
    @endif

    <!-- Guest Navbar -->
        @if( !session()->has('auth'))
        <ul class="navbar-nav ms-auto">
          <div class="btn-group">
            <li class="nav-item">
              <a class="btn btn-warning m-2" href="/register">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-warning m-2" href="/login">Login</a>
            </li>
          </div>
        </ul>
    @endif

    </div>
  </div>
</nav>




