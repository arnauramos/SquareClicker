
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "squareclickerdb";
 

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die($missatge1 = "<span style='color:#4CAF50;'>Status Servidor</span>&nbsp;&xrarr; " . $conn->connect_error);
}
$missatge1 = "<span style='color:#4CAF50;'>Status Servidor</span>&nbsp;&xrarr; Connexió establerta amb el servidor";

$sql = "CREATE DATABASE squareclickerdb";
if ($conn->query($sql) === TRUE) {
    $missatge2 = "<span style='color:#4CAF50;'>Status Dbase</span>&nbsp;&xrarr; La Base de dades s'ha creat.";
  }  else{

    $missatge2 = "<span style='color:#4CAF50;'>Status Dbase</span>&nbsp;&xrarr; ". $conn->error;
}
      $conn = new mysqli($servername, $username, $password, $dbname);

      $sql = "CREATE TABLE squareclickerdb (
      id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      usuari VARCHAR(100) NOT NULL,
      puntuacio VARCHAR(200)
      )";

      if ($conn->query($sql) === TRUE) {
          $missatge3 = "<span style='color:#4CAF50;'>Status Taula</span>&nbsp;&xrarr; La Taula s'ha creat satisfactòriament.";
      } else {
          $missatge3 = "<span style='color:#4CAF50;'>Status Taula</span>&nbsp;&xrarr; ". $conn->error;
    }


  $sql = "SELECT * from squareclickerdb";
  $result = mysqli_query($conn, $sql);

?>

<html lang="ca">
  <head>
    <meta charset="utf-8">
    <title>SQUARE CLICKER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <script type="text/javascript" src="functions.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body id="body">
  <div id="rango">
  <div id="quadrat" onclick="clickquadrat()"></div>
</div>


  <div id="x2" onclick="clickx2()"></div>
  <button id="ranquing">RANQUING</button>
  <form action="formaction.php" method="post">
      <div name="puntuacio" id="punts">0</div>
    <input name="usuari" id="nom" type="text" maxlength="30" />
    <input id="enviar" type="submit" value="enviar" />
  </form>
  <div class="post">
    <p><?php echo $missatge1 ?></p>
    <p><?php echo $missatge2 ?></p>
    <p><?php echo $missatge3 ?></p>
    <p><?php echo $missatge4 ?></p>

  </div>
</body>
</html>
