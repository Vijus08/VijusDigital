<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vijus Digital</title>
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">  
</head>
<body>

	<div class="container-fluid">
	<!--Menu-->
  <nav class="navbar navbar-expand-sm navbar-dark" style= "background-color: #0c3866;">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="img/logoVijus.png" alt="" width="50">
      </a>

      <button class="navbar-toggler" 
      type="button" 
      data-toggle="collapse" 
      data-target="#menu"
      aria-controls="menu"
      aria-expanded="false"
      aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="/conocenos">Conocenos</a></li>
          <li class="nav-item"><a class="nav-link" href="/servicios">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="/contactanos">Contactanos</a></li>
          <li class="nav-item"><a class="nav-link" target="_blank" href="https://www.pinterest.com.mx/vicvijus">Portafolio</a></li>
        </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      </div>
    </div>
  </nav>


  <script type="text/javascript" src="js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script src="js/scrollPosStyler.min.js"></script>



  @yield('contenido_especifico')
</body>
</html>