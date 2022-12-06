<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Editar Cita</title>
	<link rel="stylesheet" href="/css/estilos2.css">
</head>

<body>
	<div>
		<h2>Editar Cita</h2>
		<form action="{{route('paciente.actualizar', $paciente->id)}}" id="formulario" method="POST">
			@csrf
			@method('PUT')
			<label for="nombre">Nombre: </label>
			<input type="text" maxlength="50" name="nombre" placeholder="Nombre" value="{{$paciente->nombre}}" required>
			<br><br>
			<label for="correo">Correo: </label>
			<input type="email" id="correo" name="correo" placeholder="ejemplo@gmail.com" value="{{$paciente->correo}}" required>
			<br><br>
			<label for="contraseña">Contraseña: </label>
			<input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" value="{{$paciente->contraseña}}" required>
			<br><br>
			<!--<label for="genero">Género: </label>
			<input type="radio" id="generof" name="genero" value="{{$paciente->genero}}">Femenino
			<input type="radio" id="generom" name="genero" value="{{$paciente->genero}}">Masculino
			<br><br>-->
			<textarea name="observaciones" rows="5" cols="30" placeholder="Observaciones." value="{{$paciente->observaciones}}"></textarea>
			<br>
			<input type="submit" class="button" value= "Guardar Cambios">
		</form>

	</div>

	<div class="nav">
		<h3><a href="/">Regresar</a></h3>
		<br>
	</div>
</body>
</html>