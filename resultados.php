<?php
	define('SCRIPTPATH','/phpChart/');
	require __DIR__ . '/auth.php'; 	error_reporting(0);  $ID = $_SESSION['id'];
	$respuestasArreglo;
	$errores= '';
	$NC=0;
	$CI=0;
	$LI=0;
	$CD=0;
	$LD=0;
	//Comienza la conexión con la Base de Datos
		try {
		$conexion = new PDO('mysql:host=localhost;dbname=test_upslp','root','');
	} catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
		$statement = $conexion->prepare('SELECT P1, P2, P3, P4, P5, P6, P7, P8, P9, P10, P11, P12 , P1B, P2B, P3B, P4B, P5B, P6B, P7B, P8B, P9B, P10B, P11B, P12B FROM respuesta WHERE ID_USUARIO = :ID'); 
		$statement->execute(array(':ID' => $ID));
		while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
	    $respuestasArreglo = array($row['P1'], $row['P2'], $row['P3'], $row['P4'], $row['P5'], $row['P6'], $row['P7'], $row['P8'], $row['P9'], $row['P10'], $row['P11'], $row['P12'],$row['P1B'], $row['P2B'], $row['P3B'], $row['P4B'], $row['P5B'], $row['P6B'], $row['P7B'], $row['P8B'], $row['P9B'], $row['P10B'], $row['P11B'], $row['P12B']);
		}

		foreach ($respuestasArreglo as $key => $value) {
			switch ($value) {
   				case 'CI':
        			$CI++;
     				break;
    			case 'LI':
				    $LI++;
				    break;
    			case 'CD':
				    $CD++;
				    break;
    			case 'LD':
				    $LD++;
				    break;
				default:
					$NC++;
					break;
			}
		}

       
        $CI=$CI*20;
        $LI=$LI*20;
        $CD=$CD*20;
        $LD=$LD*20;

		$statement->execute();
		//Cerrar conexión con la Base de Datos
		$statement=null;
		$conexion = null;
	?>
<?php require __DIR__ . '/auth.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
	<?php include 'partials/styles.php'; ?>
</head>
<body>
	<?php include 'partials/navigation.php'; ?>
	<div class="jumbotron">
  		<h4 class="display-4">Resultados</h4>
	</div>
	
    <div class="container">
		<?php 
			if($CI > $LI AND $CI > $LD AND $CI > $CD) {
				$Cuadrante = 'Cortical Izquierdo';
				$descripcion = 'Comportamientos: Frío, distante; pocos gestos; voz elaborada; intelectualmente
								brillante; evalúa, critica; irónico; le gustan las citas; competitivo; individualista.
								Procesos: Análisis; razonamiento; lógica;
								Rigor, claridad; le gustan los modelos y las teorías; colecciona hechos; procede
								por hipótesis; le gusta la palabra precisa.
								Competencias: Abstracción; matemático; cuantitativo; finanzas; técnico; resolución
								de problemas.';
							}
			else if($CD > $CI AND $CD > $LI AND $CD > $LD) {
				$Cuadrante = 'Cortical Derecho';
				$descripcion = 'Comportamientos: Original; humor; gusto por el riesgo; espacial; simultáneo; le
								gustan las discusiones; futurista; salta de un tema a otro; discurso brillante;
								independiente.
								Procesos: Conceptualización; síntesis; globalización; imaginación; intuición;
								visualización; actúa por asociaciones; integra por medio de imágenes y metáforas.
								Competencia: Creación; innovación; espíritu de empresa; artista; investigación;
								visión de futuro. 
								';
			}
			else if($LI > $CI AND $LI > $LD AND $LI > $CD) {
				$Cuadrante = 'Límbico Izquierdo';
				$descripcion = 'Comportamientos: Introvertido; emotivo, controlado; minucioso, maniático;
								monologa; le gustan las fórmulas; conservador, fiel; defiende su territorio; ligado a
								la experiencia, ama el poder.
								Procesos: Planifica; formaliza; estructura; define los procedimientos; secuencial;
								verificador; ritualista; metódico.
								Competencias: Administración; organización; realización, puesta en marcha;
								conductor de hombres; orador; trabajador consagrado. ';
			}
			else if($LD > $CI AND $LD > $LI AND $LD > $CD) {
				$Cuadrante = 'Límbico Derecho';
				$descripcion = 'Comportamientos: Extravertido; emotivo; espontáneo; gesticulador; lúdico;
								hablador; idealista, espiritual; busca aquiescencia; reacciona mal a las críticas.
								Procesos: Integra por la experiencia; se mueve por el principio de placer; fuerte
								implicación afectiva; trabaja con sentimientos; escucha; pregunta; necesidad de
								compartir; necesidad de armonía; evalúa los comportamientos.
								Competencias: Relacional; contactos humanos; diálogo; enseñanza; trabajo en
								equipo; expresión oral y escrita. ';
						
			}
		?>
		<h3><?php echo $Cuadrante ?></h3>
		<p><?php echo $descripcion?></p>
		<canvas id="myChart"></canvas>
		<button class="btn btn mt-4">
			<a href="reportes.php">Ver mis otros intentos</a>
		</button>	
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: ["Límbico Derecho", "Límbico Izquierdo", "Cortical Derecho", "Cortical Izquierdo"],
		        datasets: [{
		            label: 'Puntuación',
		            data: [<?php echo $LD ?>, <?php echo $LI ?>, <?php echo $CD ?>, <?php echo $CI ?>],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
	</script>		
</body>
</html>