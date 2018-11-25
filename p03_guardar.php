<?php 
	error_reporting(0);
	ini_set('display_errors', 0);
    session_start(); 
	require __DIR__ . '/auth.php'; 	error_reporting(0);  $ID = $_SESSION['id'];
	if($_SERVER['REQUEST_METHOD']=='POST') { 
		if (isset($_POST["pregunta"])) {
			$pregunta = $_POST['pregunta'];
			$answer = 'NC';
			$answerTwo = 'NC';			

			if(count($pregunta)==1) {
				$answer = $pregunta[0];
			} else {
				$answer = $pregunta[0];
				$answerTwo = $pregunta[1];
			}

			if (count($pregunta) > 2 or count($pregunta) == 0) {
				$msgError =  "Por favor selecciona solamente 1 o 2 opciones.";
			}

			try {
				$conexion = new PDO('mysql:host=localhost;dbname=test_upslp','root','');
				$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$stmt = $conexion -> prepare(
					'UPDATE respuesta SET P3=:answer, P3B=:answerTwo WHERE ID_USUARIO = :ID'
				);

				$stmt->bindParam(':answer', $answer);
				$stmt->bindParam(':answerTwo', $answerTwo);
				$stmt->bindParam(':ID', $ID);

				$stmt->execute();


				header('Location: P04.view.php');
				die();

			} catch (PDOException $e) {
				echo'<br>Error: '. $e->getMessage();
			}
		}
	}	
	require 'P03.view.php'
?>