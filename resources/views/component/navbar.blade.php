<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{ asset('/img/logo.png') }}" class="w-25" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('category', ['category' => 'Data Science']) }}">Data Science</a></li>
              <li><a class="dropdown-item" href="{{ route('category', ['category' => 'Network Security']) }}">Network Security</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('writers') }}">Writes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Popular</a>
          </li>
        </ul>
      </div>
    </div>
</nav>