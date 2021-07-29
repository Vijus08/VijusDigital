@extends('cabecera')
@section('contenido_especifico')

<!DOCTYPE html>
<html>
<head>
	<title>Contactanos</title>
</head>
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

	<form class="row-form g-3" method="POST" action="{{ route('Contactanos') }}">
		@csrf

  |		<div class="contact-form row">
  			<div class="form-field col-lg-6">
  				<input id="nombre" name="nombre" class="input-text" placeholder="María Antonieta" type="text" value="{{ old('nombre')}}" require>
	  					{!! $errors->first('nombre', '<small class="alert">:message</small>')!!}
  				<label for="nombre" class="label">Nombre(s)</label>	
  			</div>
  			<div class="form-field col-lg-6">
  				<input id="apellidos" name="apellidos" class="input-text" placeholder="Gonzáles Gonzáles" type="text" value="{{ old('apellidos')}}">
  				{!! $errors->first('apellidos', '<small class="alert">:message</small>')!!}
  				<label for="apellidos" class="label">Apellidos</label>
  			</div>
  			<div class="form-field col-lg-6">
  				<input id="edad" name="edad" class="input-text" placeholder="25" type="number" value="{{ old('edad')}}">
  				{!! $errors->first('edad', '<small class="alert">:message</small>')!!}
  				<label for="edad" class="label">Edad</label>
  			</div>
  			<div class="form-field col-lg-6">
  				<input id="email" name="email" class="input-text" placeholder="maria@maria.com" type="email" value="{{ old('email')}}">
  				{!! $errors->first('email', '<small class="alert">:message</small>')!!}
  				<label for="email" class="label">E-Mail</label>
  			</div>
  			<div class="form-field col-lg-6">
  				<input id="telefono" name="telefono" class="input-text" placeholder="5514130804" type="tel" value="{{ old('telefono')}}">
  				{!! $errors->first('telefono', '<small class="alert">:message</small>')!!}
  				<label for="telefono" class="label">Teléfono Celular</label>
  			</div>
  			<div class="form-field col-lg-12">
  				<input id="mensaje" name="mensaje" class="input-text" placeholder="¿En qué te podemos ayudar?" type="text" value="{{ old('mensaje')}}">
  				{!! $errors->first('mensaje', '<small class="alert">:message</small>')!!}
  				<label for="mensaje" class="label">Mensaje</label>
  			</div>
  			<div class="form-field col-lg-12">
  				<input class="submit-btn" type="submit" value="Enviar" name="">
  			</div>

  		</div>
    
	</form>

</body>
</html>

@endsection