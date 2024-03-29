
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:8vh">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route('parentheses.index') }}">Parentheses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('shape.index') }}">Inheritance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Interface</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('employees.index') }}">Encapsulation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('polymorphism.index') }}">Polymorphism</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tasks.index') }}">To-Do</a>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
