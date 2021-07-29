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


	@forelse($pedidos as $pedido)
	<p>{{ $pedido->NombreCliente }}</p>
	<p>{{ $pedido->ContactoCliente }}</p>
	<p>{{ $pedido->CaracteristicasPedido }}</p>
	<p>{{ $pedido->Fecha }}</p>
	<p>{{ $pedido->Precio }}</p>



</body>
</html>


	@empty
	<li>No hay pedidos</li>
	@endforelse

