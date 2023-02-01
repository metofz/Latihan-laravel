{{-- Start Navbar --}}
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/img/logo.png" alt="Bootstrap" width="50" class="rounded">
    </a>
    <a class="navbar-brand" href="/">Meto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav me-3">
        <a class="nav-link {{ ($active === "home") ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{ ($active === "about") ? 'active' : ''}}" href="/about">About</a>
        <a class="nav-link {{ ($active === "posts") ? 'active' : ''}}" href="/posts">Blog</a>
        <a class="nav-link {{ ($active === "categories") ? 'active' : ''}}" href="/categories">Categories</a>
      </div>

      <div class="navbar-nav me-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</a></button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <a class="nav-link {{ ($active === "login") ? 'active' : ''}}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
        @endauth
      </div>
    </div>
  </div>
</nav>
{{-- End Navbar --}}