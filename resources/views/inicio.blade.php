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
	<!--Card 1-->
	<div class="card-inicio mb-3">
  		<div class="carousel slide" id="mainSlider" data-ride="carousel">
  			<!--Imagenes-->
		  <div class="carousel-inner">
		    <div class="carousel-item active" data-bs-interval="500">
		      <img src="media/Guillermo.png"  alt="" style="margin: 0 auto;" class="d-block w-25 img-responsive">
		    </div>
		    <div class="carousel-item" data-bs-interval="500">
		      <img src="media/Smoke.png"  alt="" style="margin: 0 auto;" class="d-block w-25 img-responsive">
		    </div>
		    <div class="carousel-item" data-bs-interval="500">
		      <img src="media/Lulu.png"  alt="" style="margin: 0 auto;" class="d-block w-25 img-responsive">
		    </div>
		  </div>
		</div>
			<!---->
  		<div class="card-body">
		   <h5 class="card-title text-center text-white">¿Qué es la Ilustración Digital?</h5>
		   <p class="card-text text-justify text-white">La ilustración digital es la realización de imágenes artísticas por medio de herramientas tecnológicas, principalmente el ordenador. De esta manera el artista puede crear una amplia gama de imágenes a partir del uso de programas que simulan técnicas tradicionales en un ambiente digital.</p><br>
		   <p class="card-text text-justify text-white">Una buena ilustración no es solamente un buen dibujo. Una ilustración siempre tiene una función, siempre hace algo: contar una historia, vender un producto, describir un entorno, enseñar el funcionamiento de algo, etc.</p>
		</div>
	</div>
	<!---->
	<!--Card 2-->
	<div class="card-inicio mb-3">
	  <div class="card-body">
	    <h5 class="card-title text-center text-white">¿Qué son los Emotes?</h5>
		   <p class="card-text text-justify text-white">Es un soporte de texto o imágenes impresas o serigrafiadas sobre una lámina de vinilo o papel en cuya parte posterior se ha dispuesto de una fina capa de adhesivo. Actualmente un Sticker no solamente es una estampa o pegatina, sino que tambien es utlizado en aplicaciones de mensajes de texto o streamings.</p><br>
	  </div>
	  <!--Imagenes-->
	  <div class="carousel slide" id="mainSlider" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active" data-bs-interval="500">
		      <img src="media/GG.png"  alt="" style="margin: 0 auto;" class="d-block w-25 img-responsive">
		    </div>
		    <div class="carousel-item" data-bs-interval="500">
		      <img src="media/ON.png"  alt="" style="margin: 0 auto;" class="d-block w-25 img-responsive">
		    </div>
		    <div class="carousel-item" data-bs-interval="500">
		      <img src="media/MM.png"  alt="" style="margin: 0 auto;" class="d-block w-25 img-responsive">
		    </div>
		  </div>
		</div>
		<!---->
	</div>
	<!---->
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