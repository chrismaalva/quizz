<?php require __DIR__ . '/auth.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cuestionario</title>
	<meta charset="utf-8">
	<?php include 'partials/styles.php'; ?>
</head>
<body>
	<?php include 'partials/navigation.php'; ?>
	<div class="jumbotron">
  		<h4 class="display-4">10.- Actitud en clase</h4>
	</div>
	
	<div class="container">
		<section class="preguntas">
			<form action="PD10_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Mi objetivo es lograr de mis alumnos una toma rápida de apuntes. Escribo poco en el pizarrón. Insisto en la asimilación de la parte teórica de la clase.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) A pesar de mis buenas intenciones, me cuesta trabajo mantenerme dentro de los límites de la lección. Hago disgresiones y a veces cometo errores por distracción.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) Mi plan está escrito en el pizarrón y mi material preparado antes de que entren los alumnos, no dejo nada al azar. La clase se desarrolla siguiendo las normas establecidas con anterioridad, y los alumnos las conocen.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) Para mí lo importante es establecer contacto con la clase y trabajar en un ambiente relajado.</label>
				</div>
			  	
			  	<button type="submit" class="btn btn-success mt-4">Enviar</button>
			</form>			
		</section>
		<section class="paginacion mt-8">
			<ul class="pagination justify-content-center">
				<li class="page-item "><a href="PD01.view.php" class="page-link">1</a></li>
				<li class="page-item "><a href="PD02.view.php" class="page-link">2</a></li>
				<li class="page-item "><a href="PD03.view.php" class="page-link">3</a></li>
				<li class="page-item "><a href="PD04.view.php" class="page-link">4</a></li>
				<li class="page-item "><a href="PD05.view.php" class="page-link">5</a></li>
				<li class="page-item "><a href="PD06.view.php" class="page-link">6</a></li>
				<li class="page-item "><a href="PD07.view.php" class="page-link">7</a></li>
				<li class="page-item "><a href="PD08.view.php" class="page-link">8</a></li>
				<li class="page-item "><a href="PD09.view.php" class="page-link">9</a></li>
				<li class="page-item active"><a href="PD10.view.php" class="page-link">10</a></li>
			</ul>
		</section>
	</div>
</body>
</html>