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
  		<h4 class="display-4">8.- Preguntas orales en matemáticas</h4>
	</div>
	
	<div class="container">

		<section class="preguntas">
			<form action="p08_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Me da miedo pasar al pizarrón, no consigo escribir derecho y me cuesta trabajo concentrar mis ideas cuando me mira todo el mundo.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) Estoy a gusto en el pizarrón, pero no me gustan los profesores que califican las preguntas orales, porque los que más saben “soplan” a los que saben menos y así todo resulta falso.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) Cuando paso al pizarrón me las arreglo para que los demás se rían, y provocar así la benevolencia del profesor. Esto no resulta siempre y no consigo disimular durante mucho tiempo mis dificultades.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) Me gusta que me pregunten cuando puedo elegir el momento levantando la mano; a veces soy capaz de encontrar fácilmente la solución de problemas complicados y no veo la solución de otros más sencillos.</label>
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
				<li class="page-item active"><a href="P08.view.php" class="page-link">8</a></li>
				<li class="page-item disabled"><a href="P09.view.php" class="page-link">9</a></li>
				<li class="page-item disabled"><a href="P10.view.php" class="page-link">10</a></li>
				<li class="page-item disabled"><a href="P11.view.php" class="page-link">11</a></li>
				<li class="page-item disabled"><a href="P12.view.php" class="page-link">12</a></li>
			</ul>
		</section>
	</div>
</body>
</html>