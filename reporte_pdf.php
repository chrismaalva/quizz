<?php require __DIR__ . '/auth.php';?>
<?php
$ID = $_SESSION['id'];
  try { 
      $conexion = new PDO('mysql:host=localhost;dbname=test_upslp','root','');
      $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } 
  catch (PDOException $e) {
      echo'<br>Error: '. $e->getMessage();
   }
   require_once 'dompdf/lib/html5lib/Parser.php';
   require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
   require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
   require_once 'dompdf/src/Autoloader.php';
   Dompdf\Autoloader::register();
   $codigohtml='
  <!DOCTYPE html>
    <html>
      <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style_table.css"  
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      </head>
      <body>
        <div class="container">
        <h3>USUARIOS REGISTRADOS </h3>
          <table class="table1">
              <tr style="background color="yellow";>
                  <th>ID</th>
                  <th>FOLIO</th>
                  <th>FECHA</th>
                  <th>TIEMPO</th>
                  <th>INTENTO</th>
              </tr>';
    $stmt = $conexion -> prepare('SELECT * FROM respuesta WHERE ID_USUARIO = :ID');
    $stmt->execute(array(':ID' => $ID));
    while ($resultado = $stmt->fetch(PDO::FETCH_NUM)) {
        $codigohtml .= '<tr>
            <td>' . $resultado[0] . '</td>
            <td>' . $resultado[1] . '</td>
            <td>' . $resultado[2] . '</td>
            <td>' . $resultado[3] . '</td>
            <td>' . $resultado[4] . '</td>
        </tr>';
    }
    $codigohtml .= "
       </table>
      </div>
    </body>
  </html>";        

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$codigohtml = utf8_encode($codigohtml);
$dompdf = new Dompdf();
$dompdf->loadHtml($codigohtml);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Reporte_usuario.pdf');
?>