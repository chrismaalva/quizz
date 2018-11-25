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
  		<h4 class="display-4">7.- Actitud durante un examen</h4>
	</div>
	
	<div class="container">

		<section class="preguntas">
			<form action="p07_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Estudio los temas seriamente para cualquier examen. Analizo en primer lugar el enunciado y hago un plan claro y lógico.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) Cuando sé que va a haber un examen preparo bien mi material, hojas, estuche, etc. Me preocupo principalmente de presentar bien mi trabajo, pues sé que los profesores le dan mucha importancia.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) A veces tengo malas notas en los exámenes porque leo muy deprisa el enunciado, me salgo del tema o no aplico el método adecuado. Soy distraído e independiente.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) No me gusta encontrarme solo ante mi hoja. Me cuesta trabajo concentrarme, hago cualquier cosa para atraer al profesor, le pregunto cosas, miro a mis compañeros y les pido que me soplen.</label>
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
				<li class="page-item active"><a href="P07.view.php" class="page-link">7</a></li>
				<li class="page-item disabled"><a href="P08.view.php" class="page-link">8</a></li>
				<li class="page-item disabled"><a href="P09.view.php" class="page-link">9</a></li>
				<li class="page-item disabled"><a href="P10.view.php" class="page-link">10</a></li>
				<li class="page-item disabled"><a href="P11.view.php" class="page-link">11</a></li>
				<li class="page-item disabled"><a href="P12.view.php" class="page-link">12</a></li>
			</ul>
		</section>
	</div>
</body>
</html>