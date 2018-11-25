<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/estilos.css">
		<title>Inicia sesión</title>
	</head>
	<?php include 'partials/styles.php'; ?>
	<body>
		<div class="contenedor">
			<h1 class="titulo">Iniciar sesión</h1>
			<form action="login.php" method = "POST">
			<?php if(!empty($errores)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $errores ?>
				</div>
			<?php endif; ?>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" name="usuario"  placeholder="usuario@ejemplo.com">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" name="password" placeholder="Contraseña">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10 offset-sm-2">
			      <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
			    </div>
			  </div>
			  <p class="mt-5 text-center">
			    ¿No tienes cuenta?
			    <a href="registrate.view.php">Regístrate</a>
			  </p>
			</form>
		</div>
	</body>
</html>