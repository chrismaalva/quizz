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
  		<h4 class="display-4">9.- Sensibilidad a las calificaciones</h4>
	</div>
	
	<div class="container">

		<section class="preguntas">
			<form action="p09_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Doy mucha importancia a las notas, pregunto por el criterio que se va a aplicar antes de comenzar mis exámenes. Apunto todas mis notas y trazo mis gráficas de cada asignatura para verificar mi marcha a lo largo del curso.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) No apunto mis notas, conozco más o menos mi nivel y cuando lo necesito pido mis notas a los profesores para sacar el promedio.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) Guardo todos mis exámenes calificados, sumo los puntos cuidadosamente porque he observado que muchos profesores se olvidan de los medios puntos y los cuartos de punto.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) Cuando he realizado un examen trato de saber mi nota lo antes posible; si encuentro al profesor, le pregunto si lo he hecho bien y qué nota he tenido; no dudo en pedirle que me ponga un poco más.</label>
				</div>
			  	
			  	<button type="submit" class="btn btn-primary mt-4">Guardar</button>
			</form>			
		</section>

		<section class="paginacion mt-8">
			<ul class="pagination justify-content-center">
				<li class="page-item "><a href="P01.view.php" class="page-link">1</a></li>
				<li class="page-item "><a href="P02.view.php" class="page-link">2</a></li>
				<li class="page-item "><a href="P03.view.php" class="page-link">3</a></li>
				<li class="page-item "><a href="P04.view.php" class="page-link">4</a></li>
				<li class="page-item "><a href="P05.view.php" class="page-link">5</a></li>
				<li class="page-item "><a href="P06.view.php" class="page-link">6</a></li>
				<li class="page-item "><a href="P07.view.php" class="page-link">7</a></li>
				<li class="page-item "><a href="P08.view.php" class="page-link">8</a></li>
				<li class="page-item active"><a href="P09.view.php" class="page-link">9</a></li>
				<li class="page-item disabled"><a href="P10.view.php" class="page-link">10</a></li>
				<li class="page-item disabled"><a href="P11.view.php" class="page-link">11</a></li>
				<li class="page-item disabled"><a href="P12.view.php" class="page-link">12</a></li>
			</ul>
		</section>
	</div>
</body>
</html>