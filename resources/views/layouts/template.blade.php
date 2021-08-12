<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Page | @yield('title')</title>
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
          <a class="navbar-brand mb-0 h1" href="inicio">Inicio</a>
          <a class="navbar-brand mb-0 h1" href="acerca-de">Acerca de</a>
          <a class="navbar-brand mb-0 h1" href="contactanos">Contactos</a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
</nav>
    <!-- end navbar-->
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
             <br>
             <div class="d-grid gap-2 col-11 mx-auto">
              <button class="btn btn-dark" type="button">Opcion 1</button>
              <button class="btn btn-info" type="button">Opcion 2</button>
              <button class="btn btn-dark" type="button">Opcion 3</button>
              <button class="btn btn-info" type="button">Opcion 4</button>
              <button class="btn btn-dark" type="button">Opcion 5</button>
            </div>
            <br>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
 
    <!-- footer -->
  
    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
  </footer>
  
</body>
</html>