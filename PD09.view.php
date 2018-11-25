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
  		<h4 class="display-4">9.- Reuniones docentes</h4>
	</div>
	
	<div class="container">
		<section class="preguntas">
			<form action="PD09_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Tengo tendencia a intervenir mucho para defender a mis alumno; incluso intento que mis colegas tomen posiciones a su pesar.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) Espero que me lo pidan e intervengo. A veces se ha recurrido a mí para ciertas informaciones porque tengo mi programa y mis fichas en orden.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) Cuando hay que intervenir en un caso difícil, presento hechos y cifras. A veces pido aclaraciones a mis colegas para analizarlas detalladamente y tomar una decisión objetiva.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) Con frecuencia me distraigo, a veces me llaman al orden, pero tengo buena intuición con mis alumnos; a veces tienen en cuenta mi opinión.</label>
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
				<li class="page-item "><a href="PD07.view.php" class="page-link">7</a></li>
				<li class="page-item "><a href="PD08.view.php" class="page-link">8</a></li>
				<li class="page-item active"><a href="PD09.view.php" class="page-link">9</a></li>
				<li class="page-item disabled"><a href="PD10.view.php" class="page-link">10</a></li>
			</ul>
		</section>
	</div>
</body>
</html>