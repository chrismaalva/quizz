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
  		<h4 class="display-4">1.- Personalidad.</h4>
	</div>
	
	<div class="container">
		<section class="preguntas">
			<form action="PD01_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Me encuentro a mí mismo preferentemente cerebral, y es cierto que me gusta encontrar una explicación lógica a todas las cosas.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) Soy muy imaginativo. ¡Lleno de ideas!</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) No hago amistades con facilidad, pero en cambio soy fiel a los amigos.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) Tengo facilidad de contacto, me gusta la gente y me dirijo a ellas con soltura.</label>
				</div>
			  	
			  	<button type="submit" class="btn btn-primary mt-4">Guardar</button>
			</form>			
		</section>

		<section class="paginacion mt-8">
			<ul class="pagination justify-content-center">
				<li class="page-item active"><a href="PD01.view.php" class="page-link">1</a></li>
				<li class="page-item disabled"><a href="PD02.view.php" class="page-link">2</a></li>
				<li class="page-item disabled"><a href="PD03.view.php" class="page-link">3</a></li>
				<li class="page-item disabled"><a href="PD04.view.php" class="page-link">4</a></li>
				<li class="page-item disabled"><a href="PD05.view.php" class="page-link">5</a></li>
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