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
  		<h4 class="display-4">12.- Idiomas</h4>
	</div>
	
	<div class="container">
		<section class="preguntas">
			<form action="p12_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Soy bastante bueno para los idiomas, me gusta hablar e intercambiar opiniones. A veces no dejo que los demás expresen su opinión. Por escrito soy menos bueno.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) Conozco las reglas gramaticales y soy bueno cuando escribo; tengo menos facilidad en lo oral.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) Aprendo de memoria el vocabulario; sin embargo mis resultados son medianos; me cuesta trabajo construir frases y no tengo buen acento.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) Retengo con facilidad las expresiones típicas y tengo buen acento. Cuando no encuentro la palabra exacta me las arreglo para salir del paso.</label>
				</div>
			  	
			  	<button type="submit" class="btn btn-success mt-4">Guardar</button>
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
				<li class="page-item "><a href="P09.view.php" class="page-link">9</a></li>
				<li class="page-item "><a href="P10.view.php" class="page-link">10</a></li>
				<li class="page-item "><a href="P11.view.php" class="page-link">11</a></li>
				<li class="page-item active"><a href="P12.view.php" class="page-link">12</a></li>
			</ul>
		</section>
	</div>
</body>
</html>