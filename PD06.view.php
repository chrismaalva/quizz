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
  		<h4 class="display-4">6.- Control de la enseñanza</h4>
	</div>
	
	<div class="container">

		<section class="preguntas">
			<form action="PD06_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Cuando hago un control, tengo tendencia a multiplicar las indicaciones y las precisiones sobre las preguntas para dar pistas a los alumnos.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) Pregunto solamente cuestiones globales y me doy cuenta de que son demasiado vagas para mis alumnos.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) Todo control lleva consigo cuestiones precisas y claras para redactarlas en un tiempo limitado, idéntico para todos; impongo un modelo de presentación que debe ser respetado.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) En los controles, procuro equilibrar la teoría y la práctica. Insisto en la adquisición de los conocimientos.</label>
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
				<li class="page-item active"><a href="PD06.view.php" class="page-link">6</a></li>
				<li class="page-item disabled"><a href="PD07.view.php" class="page-link">7</a></li>
				<li class="page-item disabled"><a href="PD08.view.php" class="page-link">8</a></li>
				<li class="page-item disabled"><a href="PD09.view.php" class="page-link">9</a></li>
				<li class="page-item disabled"><a href="PD10.view.php" class="page-link">10</a></li>
			</ul>
		</section>
	</div>
</body>
</html>