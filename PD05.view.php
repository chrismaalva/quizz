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
  		<h4 class="display-4">5.- Programa</h4>
	</div>
	
	<div class="container">

		<section class="preguntas">
			<form action="PD05_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Para mí, el programa constituye un fastidio. Trato las grandes líneas y los puntos esenciales.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) La forma de avanzar en mi programa depende sobre todo de la reacción de los alumnos; si es necesario para ellos voy más lento.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) A la vuelta de las vacaciones elaboro mi plan para el curso; en caso de que surjan imprevistos, trato rápidamente algunos puntos pero termino siempre mi programa.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) Cada año me construyo un esquema preciso para tocar todos lo puntos del programa.</label>
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
				<li class="page-item active"><a href="PD05.view.php" class="page-link">5</a></li>
				<li class="page-item disabled"><a href="PD06.view.php" class="page-link">6</a></li>
				<li class="page-item disabled"><a href="PD07.view.php" class="page-link">7</a></li>
				<li class="page-item disabled"><a href="PD08.view.php" class="page-link">8</a></li>
				<li class="page-item disabled"><a href="PD09.view.php" class="page-link">9</a></li>
				<li class="page-item disabled"><a href="PD10.view.php" class="page-link">10</a></li>
			</ul>
		</section>
	</div>
</body>
</html>