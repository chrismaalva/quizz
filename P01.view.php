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
  		<h4 class="display-4">1.- ¿Para qué sirve la escuela?</h4>
	</div>
	
	<div class="container">

		<section class="preguntas">		
			<?php if(!empty($msgError)):?> 
			<div class="alert alert-danger" role="alert">
				<?php echo $msgError ?>
			</div>
			<?php endif; ?>
			<form action="P01_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansOne">
  					<label class="custom-control-label" for="ansOne">a) La escuela es indispensable para triunfar y adquirir conocimientos esenciales para ejercer una profesión.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo">b) La escuela es necesaria; en ella se aprenden métodos y reglas que después son útiles para organizarse en la vida. </label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansThree">
  					<label class="custom-control-label" for="ansThree">c) La escuela nos enseña a vivir en sociedad, a comunicarnos y a trabajar en grupo. Es útil para adaptarse a la vida.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansFour">
  					<label class="custom-control-label" for="ansFour">d) En la escuela se encuentran ideas y pistas para soñar e imaginar. Esto da ganas de saber más, de leer e investigar, de viajar… pero no de trabajar para tener una profesión.</label>
				</div>
			  	
			  	<button type="submit" class="btn btn-primary mt-4">Guardar</button>
			</form>			
		</section>

		<section class="paginacion mt-8">
			<ul class="pagination justify-content-center">
				<li class="page-item active"><a href="P01.view.php" class="page-link">1</a></li>
				<li class="page-item disabled"><a href="P02.view.php" class="page-link">2</a></li>
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