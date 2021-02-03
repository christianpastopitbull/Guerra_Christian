<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="{{ url('/')}}"><h5>LIBRERIA</h5></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="{{url( '/')}}">INICIO<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/lista/libros')}}">LIBROS</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('editoriales')}}">EDITORIAL<span class="sr-only">(current)</span></a>
      </li>
      
      
      
    </ul>
  </div>
</nav>