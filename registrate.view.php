<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/estilos.css">
		<title>Crea una cuenta</title>
	</head>
	<?php include 'partials/styles.php'; ?>
	<body>
		<div class="contenedor">
			<h1 class="titulo">Registrate</h1>
			<form action="registrate.php" method="POST">
			<?php if(!empty($errores)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $errores ?>
				</div>
				<?php endif; ?>
				
				<?php if(!empty($success)): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $success ?>
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
			    <label for="inputPassword3" class="col-sm-2 col-form-label">Repetir Contraseña</label>
			    <div class="col-sm-10">
			     <input type="password" class="form-control" name="password2" placeholder="Repite la contraseña">
			    </div>
			  </div>
			  <fieldset class="form-group">
			    <div class="row">
			      <legend class="col-form-label col-sm-2 pt-0">Rol</legend>
			      <div class="col-sm-10">
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="tipo_de_usuario" id="gridRadios1" value="Alumno" checked>
			          <label class="form-check-label" for="gridRadios1">
			            Alumno
			          </label>
			        </div>
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="tipo_de_usuario" id="gridRadios2" value="Docente">
			          <label class="form-check-label" for="gridRadios2">
			            Docente
			          </label>
			        </div>
			      </div>
			    </div>
			  </fieldset>
			  <div class="form-group row">
			    <div class="col-sm-10 offset-sm-2">
			      <button type="submit" class="btn btn-primary">Registrarse</button>
			    </div>
			  </div>
			  <p class="text-center">
			    ¿Ya tienes cuenta?
			    <a href="login.view.php">Iniciar Sesión</a>
			  </p>
			</form>
		</div>
	</body>
</html>