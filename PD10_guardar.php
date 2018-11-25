<?php
	require __DIR__ . '/auth.php'; 	error_reporting(0);  $ID = $_SESSION['id'];
	$answer = 'NC';
	$answerTwo = 'NC';

	if($_SERVER['REQUEST_METHOD']=='POST') { 
		if (isset($_POST["pregunta"])) {
			$pregunta = $_POST['pregunta'];

			if (!empty($pregunta)) {
				if (count($pregunta) == 1) {
					$answer = $pregunta[0];
				} else if (count($pregunta) == 2) {
					$answer = $pregunta[0];
					$answerTwo = $pregunta[1];
				} else if (count($pregunta) > 2) {
					$msgError = 'Por favor selecciona solamente 1 o 2 opciones.';
				}
			}

			if ($msgError == '') {				
				try {
					$conexion = new PDO('mysql:host=localhost;dbname=test_upslp','root','');
					$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$stmt = $conexion -> prepare(
						'UPDATE respuesta SET P10=:answer,P10B=:answerTwo WHERE ID_USUARIO = :ID'
					);
	
					$stmt->bindParam(':answer', $answer);
					$stmt->bindParam(':answerTwo', $answerTwo);
					$stmt->bindParam(':ID', $ID);
	
					$stmt->execute();
	
					header('Location: resultados.php');
	
				} catch (PDOException $e) {
					echo'<br>Error: '. $e->getMessage();
				}
			}
			
		} else {
			$msgError = 'Por favor selecciona al menos una opcion.';	
		}
	}	
	require 'PD10.view.php'
?>