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
  		<h4 class="display-4">10.- Materias preferidas</h4>
	</div>
	
	<div class="container">

		<section class="preguntas">
			<form action="p10_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Soy sobre todo un “literato”, me gustan las clases de lengua o de idiomas.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) Me gustan las clases de matemáticas, de física o de informática.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) Realmente no tengo materias preferidas, me gusta todo lo que permite imaginar o crear. Pienso con frecuencia en otra cosa y me intereso por la lección cuando trata de algo nuevo o poco habitual.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) La historia es una de mis materias preferidas; me gusta también la biología.</label>
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
				<li class="page-item "><a href="P09.view.php" class="page-link">9</a></li>
				<li class="page-item active"><a href="P10.view.php" class="page-link">10</a></li>
				<li class="page-item disabled"><a href="P11.view.php" class="page-link">11</a></li>
				<li class="page-item disabled"><a href="P12.view.php" class="page-link">12</a></li>
			</ul>
		</section>
	</div>
</body>
</html>