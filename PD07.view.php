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
  		<h4 class="display-4">7.- Evaluación del aprendizaje</h4>
	</div>
	
	<div class="container">
		<section class="preguntas">
			<form action="PD07_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Doy mucha importancia al contenido. No aprecio el estilo difuso ni la extrema concisión que oculta las lagunas.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) La presentación, la letra y el respeto a las instrucciones son de suma importancia para mí.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) Doy preferencia a las ideas originales, me gustan los desarrollos poco habituales y, en general, todo lo que se sale de lo corriente.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) Tengo tendencia a buscar todo lo que demuestra un progreso del alumno, observo sus esfuerzos y les animo.</label>
				</div>
			  	
			  	<button type="submit" class="btn btn-primary mt-4">Guardar</button>
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
				<li class="page-item active"><a href="PD07.view.php" class="page-link">7</a></li>
				<li class="page-item disabled"><a href="PD08.view.php" class="page-link">8</a></li>
				<li class="page-item disabled"><a href="PD09.view.php" class="page-link">9</a></li>
				<li class="page-item disabled"><a href="PD10.view.php" class="page-link">10</a></li>
			</ul>
		</section>
	</div>
</body>
</html>