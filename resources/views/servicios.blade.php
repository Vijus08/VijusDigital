@extends('cabecera')
@section('contenido_especifico')

<!DOCTYPE html>
<html>
<body>

	<div class="Banner">
		<img src="img/Banner.png" alt="" class="d-block w-100">
	</div>


<!--Logo-->
<div id="ribbon" class="container-fluid">
  <div id="Logo" class="container w-50 rounded-lg">
    <div class="row align-items-center">
      <div class="col-sm p-3">
        <img src="img/logoVijus.png" class="w-50 mx-auto d-block" alt="">
      </div>
    </div>
  </div>
</div>

<!--Separador-->
<div id="separator-ribbon">
  <div class="content" style="background-color: #080424"></div>
</div>

<!--Info-->
<div id="Gotas">
<div class="container-xxl p-5">
<div class="row pt-5">

<div class="card-group">
  <div class="card" style="background: #080424">
    <img class="card-img-top" src="media/Tani.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center text-white">Retratos Animados</h5>
      <p class="card-text text-justify text-white">¿Tienes una foto y te gustaria convertirla en una ilustración? Nosotros podemos hacerlo.</p><br>
      <p class="card-text text-justify text-white">Tan solo con una foto como referencia podemos crear una ilustración de ese gran recuerdo tuyo. Realizarlo en las medidas que desees y se mandará la ilustración en PNG y PDF a tu correo electrónico.</p>
    </div>
  </div>
  <div class="card" style="background: #080424">
    <img class="card-img-top" src="media/FexLogo.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center text-white">Diseño de Logos</h5>
      <p class="card-text text-justify text-white">¿Tienes un negocio, empresa o solamente necesitas un logo para tus redes sociales, streams o YouTube?</p><br>
      <p class="card-text text-justify text-white">Podemos ayudarte, con comunicación llevaremos tu visión a lo digital, tus especificaciones, tus colores y el mensaje que quieras transmitir con tu logo.</p>
    </div>
  </div>
  <div class="card" style="background: #080424">
    <img class="card-img-top" src="media/Skyshock.png" alt="Card image cap">
	<div class="card-body">
      <h5 class="card-title text-center text-white">Ilustraciones Personalizadas</h5>
      <p class="card-text text-justify text-white">En ocasiones un retrato animado no es suficiente</p><br>
      <p class="card-text text-justify text-white">Se puede agragar un buen, imaginate recordar a todas tus mascotas en una sola ilustración, o tal vez pequeñas referencias de tu programa, pelicula, anime o canción favorita en tu ilustración personalizada.</p>
    </div>
  </div>
 </div>
</div>
</div>
</div>

<footer class="text-white py-5" style="background-color: #080424">
    <div class="container-fluid">
      <nav class="row">
        <!--Logo-->
        <a href="" class="col-3 text-reset text-uppercase d-flex align-items-center">
          <img src="img/logoVijus.png" alt="Logo weston" class="Logo w-50">
        </a>
        <!--Redes Sociales-->
        <ul class="col-3 list-unstyled">
          <li class="font-weight-bold text-uppercase">REDES SOCIALES</li><br>
          <li class="d-flex justify-content-between">
            <!--Twitter-->
            <div class="Twitter-logo">
              <a target="_blank" href="https://twitter.com/VicRumbo" class="text-reset">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
            <!--Instagram-->
            <div class="Instagram-logo">
              <a target="_blank" href="https://www.instagram.com/vijus_/" class="text-reset">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
            <!--Pinteres-->
            <div class="Pinteres-logo">
              <a target="_blank" href="https://www.pinterest.com.mx/vicvijus/" class="text-reset">
                <i class="fab fa-pinterest"></i>
              </a>
            </div>
          </li>
        </ul>
        <div class="col-3">
          <p class="text-right">By:</p>
          <h4 class="text-right">Rumbo Rumbo Victor Justino</h4>
          <h5 class="text-right">Estudiante de Ingeniería en Sistemas Computacionales</h5>
          <h5 class="text-right">Tutor: Ing. Tenorio Galván Juan Fernando</h5>
        </div>
    </div>
      </nav>
  </footer>
    	
</body>
</html>
@endsection