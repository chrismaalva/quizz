<?php require __DIR__ . '/auth.php';?>
<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <div class="container">
        <?php
        $ID = $_SESSION['id'];
          try { 
            $conexion = new PDO('mysql:host=localhost;dbname=test_upslp','root','');
            $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                  echo'<br>Error: '. $e->getMessage();
                }
                header("Content-type: application/vnd.ms-excel");
                header("Content-Disposition: attachment;filename=Reporte_usuarios.xls");
                $stmt = $conexion -> prepare('SELECT * FROM respuesta WHERE ID_USUARIO = :ID');
                $stmt->execute(array(':ID' => $ID));
               echo "<h3>Intentos en el test</h3>
                    <table border='1'>
                      <thead>
                        <th>ID</th>
                        <th>FOLIO</th>
                        <th>FECHA</th>
                        <th>TIEMPO</th>
                        <th>INTENTO</th>
                      </thead>
                    <tbody>";
           while ($resultado = $stmt->fetch(PDO::FETCH_NUM)) {
              echo "<tr>
                      <td>$resultado[0]</td>
                      <td>$resultado[1]</td>
                      <td>$resultado[2]</td>
                      <td>$resultado[3]</td>
                      <td>$resultado[4]</td>
                    </tr><br>
              ";
            }
            echo "</tbody>
            </table>";        
            ?>       
     </div>
  </body>
</html>