<?php session_start();
	$errores = '';
	//Comprobamos si inicio sesion
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	//filtrar el tipo de variable, quitar espacios
		$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$password = hash('sha512', $password);
		$id;
	}
	//Conexion 
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=test_upslp','root','');
	} catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

	$statement = $conexion->prepare('SELECT * FROM usuario WHERE usuario =:usuario AND password= :password'); 
	$statement->execute(array(':usuario' => $usuario, ':password' => $password));
	$resultado = $statement->fetch();


	if ($resultado) {
		$FECHA = date("Y/m/d");
		$TIEMPO = date('H:i');

		$queryUserID = $conexion->prepare('SELECT ID_USUARIO FROM usuario WHERE usuario = :usuario'); 
		$queryUserID->execute(array(':usuario' => $usuario));

		while ($row = $queryUserID->fetch(PDO::FETCH_ASSOC)) {
		    $id = $row['ID_USUARIO'];
		}

		$_SESSION['usuario'] = $usuario;
		$_SESSION['id'] = $id;


		$checkTries = $conexion->prepare('SELECT INTENTO FROM respuesta WHERE ID_USUARIO = :id');
		$checkTries->execute(array(':id' => $id));
		$rowResult = $checkTries->fetch(PDO::FETCH_ASSOC);

		if(!$rowResult) {
			$INTENTOS = 0;
			$insertFirstValue = $conexion -> prepare('
			INSERT INTO respuesta (ID_USUARIO, FECHA, TIEMPO, INTENTO) 
			VALUES (:ID_USUARIO, :FECHA, :TIEMPO, :INTENTO)');

			$insertFirstValue->bindParam(':ID_USUARIO', $id);
			$insertFirstValue->bindParam(':FECHA', $FECHA);
			$insertFirstValue->bindParam(':TIEMPO', $TIEMPO);
			$insertFirstValue->bindParam(':INTENTO', $INTENTOS);
			$insertFirstValue->execute();

		}  else {
			$queryIntentos = $conexion->prepare('SELECT INTENTO FROM respuesta WHERE ID_USUARIO = :id');
			$queryIntentos->execute(array(':id' => $id));
			
			while ($row = $queryIntentos->fetch(PDO::FETCH_ASSOC)) {
			    $INTENTOS = $row['INTENTO'];
			}

			if ($INTENTOS > 9) {
				$errores = 'Excediste el numero maximo de intentos.';
			} else {
				$INTENTOS++;

				$intentosConexion = $conexion->prepare(
					'UPDATE respuesta SET INTENTO=:INTENTOS WHERE ID_USUARIO = :ID_USUARIO'
				);

				$intentosConexion -> bindParam(':INTENTOS', $INTENTOS);
				$intentosConexion -> bindParam(':ID_USUARIO', $id);
				$intentosConexion -> execute();		
			}

		}

		$checkForRol = $conexion->prepare('SELECT ROL FROM usuario WHERE ID_USUARIO = :id'); 
		$checkForRol -> execute(array(':id' => $id));
		
		$role = "";

		while ($row = $checkForRol->fetch(PDO::FETCH_ASSOC)) {
		    $role = $row['ROL'];
		}
		
		if ($role == "ALUMNO") {
			header('location: contenido.view.php');
		} else if ($role == "DOCENTE") {
			header('location: contenidoD.view.php');
		} else {
			$errores = 'No tienes un rol definido, consulta al admin para que te asigne uno.';
		}
	
	} else {
		$errores = 'Datos incorrectos';
	}
	require 'login.view.php';
?>