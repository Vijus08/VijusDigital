@extends('cabecera')
@section('contenido_especifico')

<!DOCTYPE html>
<html>
<body>

<!--Carrusel-->
<div class="carousel slide" id="mainSlider" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="500">
      <img src="media/Illustrator.png"  alt="" class="d-block w-100">
    </div>
    <div class="carousel-item" data-bs-interval="500">
      <img src="media/Ilustracion.png"  alt="" class="d-block w-100">
    </div>
    <div class="carousel-item" data-bs-interval="500">
      <img src="media/Ilustracion2.png"  alt="" class="d-block w-100">
    </div>
  </div>
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


<!--Pestañas de Info-->

<div id="Gotas">
<div class="container-md p-5">
<div class="row pt-5">
	<div class="row">
		<div class="col-sm">
			<div class="card w-100 card-border mb-5">
				<img src="media/Emote2.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title text-center text-white">¿Quiénes somos?</h5>
					<p class="card-text text-justify text-white">Somos un grupo de estudiantes que dedican parte de su tiempo a los dibujos e ilustraciones y generar ingresos. De esta forma podemos seguir costeando nuestros estudios y necesidades día a día.</p><br>
					<p class="text-justify text-white">Contamos con una experiencia de 5 años dedicandonos al dibujo e ilustraciones digitales. De las cuales hemos diseñado una gran variedad de logos, banners, stickers e ilustraciones de personas o animales.</p>
				</div>
			</div>
		</div>

    <div class="col-sm">
      <div class="card w-100 card-border mb-5">
        <img src="media/Pamaj.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center text-white">¿Cómo Trabajamos?</h5>
          <p class="card-text text-justify text-white">Trabajamos con un software especializado en ilustracion por vectores llamado Adobe Illustrator.</p><br>
          <p class="text-justify text-white">El trabajo que se realiza se hace con las especificaciones de nuestros clientes, ellos nos entregan una visión y nosotros la hacemos realidad, si hay la posibilidad intentamos mejorarla. los avances del trabajo se le van pasando al cliente para saber si este esta de acuerdo o es necesario hacer alguna corrección.</p>
        </div>
      </div>
    </div>

    <div class="col-sm">
      <div class="card w-100 card-border mb-5">
        <img src="media/FexLogo.png" class="card-img-top" alt="...">
        <div class="card-body text-center text-white">
          <h5 class="card-title">Procedimiento de Trabajo</h5>
          <p class="card-text text-justify text-white">Nos encantan los retos y conocemos lo difícil que es crear un nuevo proyecto. Por eso siempre nuestros trabajos estan realizados con la visión de nuestros clientes.</p><br>
          <p class="card-text text-justify text-white">Para ser lo más fieles a dichas visiones cada avance de trabajo se realizan observaciones del cliente.</p>
        </div>
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
