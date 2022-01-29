<header class="text-primary">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
             <img src="{{ asset('/images/joker.png') }}" alt="" style="width: 150px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav flex-grow-1 justify-content-end me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('jokes.index') }}">Jokes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('jokes.create') }}">Make Joke</a>
              </li>
            </ul>
          </div>
        </div>
    <nav>
</header>