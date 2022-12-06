<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Citas</title>
	<link rel="stylesheet" href="/css/estilos3.css">
</head>

<body>
	<div>
		<h2>Pacientes</h2>
	</div>

	<div style="position:relative;">
    <table>
		<thead>
		<col span="4" class="firstrow">
		<tr>
			<td style="color:white">ID</td>
			<td style="color:white">Nombre</td>
			<td style="color:white">Correo</td>
			<td style="color:white">Acciones</td>
		</tr>
		</thead>
		
		<tbody>
			@foreach($pacientes as $paciente)
			<col span="4" class="normalrow">
			<tr bgcolor="white">
				<td>{{$paciente->id}}</td>
				<td>{{$paciente->nombre}}</td>
				<td>{{$paciente->correo}}</td>
				<td>
					<form action="{{route('paciente.editar', $paciente->id)}}" method="get">
						@csrf
						<input type="submit" class="button" value="Editar">
					</form>
					<form action="{{route('paciente.eliminar', $paciente->id)}}" method="post">
						@csrf
						@method('DELETE')
						<input type="submit" class="button" onclick="return confirm('¿Esta seguro de cancelar la cita?')" value="Eliminar">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>

	<div class="nav">
		<h3><a href="/">Regresar</a></h3>
		<br>
	</div>
</body>
</html>