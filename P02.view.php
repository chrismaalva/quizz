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
  		<h4 class="display-4">2.- La vida escolar</h4>
	</div>
	
	<div class="container">

		<section class="preguntas">
			<form action="p02_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansOne">
  					<label class="custom-control-label" for="ansOne">a) En la escuela detesto los reglamentos, hay que obedecer a los timbres o a la campana, y llegar a una hora… si me pongo a pensar en otra cosa… me castigan.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo">b) La escuela estaría bien si no hubiera profesores porque en ella se encuentra uno con sus compañeros; desgraciadamente hay que estar callado y trabajar</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansThree">
  					<label class="custom-control-label" for="ansThree">c) Me gusta la escuela y creo que es útil para llegar a ser algo en la vida. Lamento que no todos los profesores sean capaces de hacernos progresar con suficiente rapidez.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansFour">
  					<label class="custom-control-label" for="ansFour">d) La escuela es importante, por eso no me gusta que los profesores se ausenten o que sean incapaces de hacer callar a los que nos impiden trabajar.</label>
				</div>
			  	
			  	<button type="submit" class="btn btn-primary mt-4">Guardar</button>
			</form>			
		</section>

		<section class="paginacion mt-8">
			<ul class="pagination justify-content-center">
				<li class="page-item"><a href="P01.view.php" class="page-link">1</a></li>
				<li class="page-item active"><a href="P02.view.php" class="page-link">2</a></li>
				<li class="page-item disabled"><a href="P03.view.php" class="page-link">3</a></li>
				<li class="page-item disabled"><a href="P04.view.php" class="page-link">4</a></li>
				<li class="page-item disabled"><a href="P05.view.php" class="page-link">5</a></li>
				<li class="page-item disabled"><a href="P06.view.php" class="page-link">6</a></li>
				<li class="page-item disabled"><a href="P07.view.php" class="page-link">7</a></li>
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