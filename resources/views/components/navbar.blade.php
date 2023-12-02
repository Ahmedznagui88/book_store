<nav class="navbar navbar-expand-lg bg-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MedBooks</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('book.create') }}">Add Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('book.index') }}">Book List</a>
          </li>
        </ul>
      </div>

      <ul class="navbar-nav justify-content-end">
        @auth

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
          <form action="{{route('logout')}}" method="POST" id="form-logout">
            @csrf
          </form>
          
        </li>
          @else
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Sign in</a>
          </li>
        @endauth
        
      </ul>
    </div>
</nav>