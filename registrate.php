<?php session_start();
	$errores = '';
	$success = '';
	//Checar que este loggeado el usuario
	if(isset($_SESSION['usuario'])) {
		header('Location: index.php');
		die();
	}

	if($_SERVER['REQUEST_METHOD']=='POST') {
		$usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$tipoDeUsuario = $_POST['tipo_de_usuario'];
	}

	if(empty($usuario) or empty($password) or empty($password2) or empty($tipoDeUsuario)) {
		$errores = 'Por favor rellena todos los campos';
	} else {
		try {
		$conexion = new PDO('mysql:host=localhost;dbname=test_upslp','root','');

		} catch(PDOException $e) {
			echo "Error" . $e->getMessage();
		}
		$statement = $conexion->prepare('SELECT * FROM usuario WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();

		if($resultado) {
			$errores .= 'El nombre de usuario ya existe';
		}
		//encriptar
		$password= hash('sha512',$password);
		$password2= hash('sha512',$password2);

		//validar si las contraseñas son iguales
		if($password != $password2) {
			$errores .= 'Las contraseñas no son iguales';
		}
		//agregar registros a base de datos
		if ($errores == '') {
			$statement = $conexion->prepare('INSERT INTO usuario(usuario,password,rol) VALUES (:usuario, :password, :rol)'); 
			$statement->execute(array(':usuario' => $usuario, ':password' => $password, ':rol' => $tipoDeUsuario))  or die(mysql_error()."<br />".$insert);
			$success = 'Te has registrado correctamente';
		}
	}
	require 'registrate.view.php'
?>