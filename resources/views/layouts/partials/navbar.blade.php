<nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/images/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
    </a>
    <a class="navbar-brand" href="/">Laradogs</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/token">Token</a>
        </li>
      </ul>
      @auth
        <div class="me-3 text-light">Helló, {{auth()->user()->name}}!</div>
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Kijelentkezés</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Bejelentkezés</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Regisztráció</a>
        </div>
      @endguest
    </div>
  </div>
</nav>