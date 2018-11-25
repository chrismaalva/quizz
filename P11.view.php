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
  		<h4 class="display-4">11.- Lecturas</h4>
	</div>
	
	<div class="container">

		<section class="preguntas">
			<form action="p11_guardar.php" method="POST" class="p-4" style="font-size: 18px;">
				<?php if(!empty($msgError)):?> 
				<div class="alert alert-danger" role="alert">
					<?php echo $msgError ?>
				</div>
				<?php endif; ?>
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LI" id="ansOne">
  					<label class="custom-control-label" for="ansOne"> a) Leo con mucha atención, no dejo pasar nada; leo incluso las introducciones y las notas al pie de página. No me gusta dejar un libro cuando he comenzado a leerlo y lo termino siempre, incluso cuando me parece aburrido</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CI" id="ansTwo">
  					<label class="custom-control-label" for="ansTwo"> b) No leo jamás o casi nunca, salvo los libros que me aconsejan o imponen los profesores.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="LD" id="ansThree">
  					<label class="custom-control-label" for="ansThree"> c) Me gusta mucho que me aconsejen libros, los busco y los prefiero a los otros. Leo muchas novelas, me gustan las historias emocionantes, me hacen soñar.</label>
				</div>
				
				<div class="custom-control custom-checkbox mb-3">
  					<input type="checkbox" class="custom-control-input" name="pregunta[]" value="CD" id="ansFour">
  					<label class="custom-control-label" for="ansFour"> d) Leo muchos relatos de aventuras o de ficción; cuanto más extraordinarias son las historias, más me gustan; me hacen soñar.</label>
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
				<li class="page-item "><a href="P10.view.php" class="page-link">10</a></li>
				<li class="page-item active"><a href="P11.view.php" class="page-link">11</a></li>
				<li class="page-item disabled"><a href="P12.view.php" class="page-link">12</a></li>
			</ul>
		</section>
	</div>
</body>
</html>