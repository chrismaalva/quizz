<?php require __DIR__ . '/auth.php';?>
<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <?php include 'partials/styles.php'; ?>
    </head>
    <body>
    <?php include 'partials/navigation.php'; ?>
      <div class="container">
        <form action="reportes.php" method="POST">
          <h3 class="display-3 center" >Reportes</h3>
          <table>
            <thead>
              <th>Excel</th>
              <th>Word</th>
              <th>PDF</th>
              <th>Ver</th>
            </thead>
            <tbody>
              <tr>
                <td><a href="reporte_excel.php"><i class="fas fa-file-excel"></i></a></td>
                <td><a href="reporte_word.php"><i class="fas fa-file-word"></i></a></td>
                <td><a href="reporte_pdf.php"><i class="fas fa-file-pdf"></i></a></td>
                <td><a href="#"><input type="submit" value="Ver Más" name="btnver" class="btn"></a></td>
              </tr>
            </tbody>
          </table>
        </form>
        <?php
        $ID = $_SESSION['id'];
          try { 
            error_reporting(0);
          $conexion = new PDO('mysql:host=localhost;dbname=test_upslp','root','');
          $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $btnver=$_POST['btnver'];
            if (isset($btnver)) {
               $stmt = $conexion -> prepare('SELECT * FROM respuesta WHERE ID_USUARIO = :ID');
               $stmt->execute(array(':ID' => $ID));
               echo "<br><br><h3 class='center'>Intentos en el test </h3><br>
                    <table>
                      <thead>
                        <th>ID</th>
                        <th>FOLIO</th>
                        <th>FECHA</th>
                        <th>TIEMPO</th>
                        <th>INTENTO</th>
                      </thead>
                    <tbody>";
            }
            while ($resultado = $stmt->fetch(PDO::FETCH_NUM)) {
              echo "<tr>
                    <td>$resultado[0]</td>
                    <td>$resultado[1]</td>
                    <td>$resultado[2]</td>
                    <td>$resultado[3]</td>
                    <td>$resultado[4]</td>
                    </tr>
              ";
            }
            echo "</tbody>
            </table>";
          } catch (PDOException $e) {
            echo'<br>Error: '. $e->getMessage();
          }
        ?>
      </div>
    </body>
  </html>