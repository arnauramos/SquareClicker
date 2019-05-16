<?php
$servername = "localhost";
$username = "root";
$password = "root"; 
$dbname = "squareclickerdb";

// Tronem a crear la connexió
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprovem la connexió
if ($conn->connect_error) {
   die("Connexio fallida: " . $conn->connect_error);
}

$formus = htmlspecialchars($_POST['usuari']);
$formpu = htmlspecialchars($_POST['puntuacio']);



$sql = "INSERT INTO squareclickerdb (usuari, puntuacio)
VALUES ('$formus', '$formpu')";

if ($conn->query($sql) === TRUE) {
   $missatge04 = "Has enviat la teva puntuació";
} else {
   $missatge04 = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html lang="ca">
<head>
  <meta charset="utf-8" />
  <title>squareclickerbd</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div id="page-wrap">
    <?php echo $missatge04 ?>
    <input id="button2" type="button" value="NOVA PARTIDA" onclick="window.open('index.php','_self')"/>
  </div>
</body>
</html>
