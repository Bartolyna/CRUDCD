<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>CRUD</title>
</head>
<body>
<div class="container">
			

	<div class="row">
		<h1>CRUD </h1>
	</div>

	<div class="mb-5">
		<?php echo form_open('welcome/agregar'); ?>
			<div class="row">
				<div class="form-group col-sm-3">
					<label for="">Nombre</label>
					<input type="text" name="nombre"  class="form-control" placeholder="Nombre" required>
				</div>
				<div class="form-group col-sm-3">
					<label for="">Apellido</label>
					<input type="text" name="apellido"  class="form-control" placeholder="Apellido" required>
				</div>
				<div class="form-group col-sm-2">
					<label for="">Fecha</label>
					<input type="date" name="fecha"  class="form-control"  required>
				</div>
				<div class="form-group col-sm-2">
					<label for="">Edad</label>
					<input type="number" name="edad"  class="form-control" placeholder="Edad" required>
				</div>
				<div class="form-group col-sm-2">
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		<?php  echo form_close();?>
	</div>


		<div class="card col-12">
			<div class="card-header">
				<h1>Tabla de personas</h1>
			</div>

			<div class="card-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nombre</th>
							<th scope="col">Apellido</th>
							<th scope="col">Fecha de Nacimiento</th>
							<th scope="col">Edad</th>
							<th scope="col">Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							foreach($personas as $persona){
								echo '
								<tr>
									<th>'.$persona->id.'</th>
									<th>'.$persona->nombre.'</th>
									<th>'.$persona->apellido.'</th>
									<th>'.$persona->fecha.'</th>
									<th>'.$persona->edad.'</th>
									<th></th>							
								</tr>
								';
							}
						?>
					</tbody>
				</table>
			</div>	
		</div>
	</div>
</body>
</html>