<?php 
	session_start();

	if(isset($_SESSION['usuario'])) {
		header('location: contenido.view.php');
		die();
	} else {
		header('location: index.php');
		die();
	}
?>