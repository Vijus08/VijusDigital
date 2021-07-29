<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>
	Mensaje Recibido

	<p>Recibiste un mensaje de: {{ $envio['nombre'] }} {{ $envio['apellidos']}}</p>
	<p>Tiene una edad de: {{ $envio['edad']}} años</p>
	<p>Su E-Mail es: {{ $envio['email']}}</p>
	<p>Su teléfono de contacto es: {{ $envio['telefono']}}</p>
	<p>El menenviosaje que redacto es el siguiente:</p>
	<p>{{ $envio['mensaje']}}</p>
</body>
</html>