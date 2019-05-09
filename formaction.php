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

$formes = htmlspecialchars($_POST[]);
$formli = $_POST[];
$formda = $_POST[];

$sql = "INSERT INTO squareclickerbd ()
VALUES ('$formes', '$formli', '$formda')";

if ($conn->query($sql) === TRUE) {
   $missatge04 = "Has enviat la teva puntuació";
} else {
   $missatge04 = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="utf-8" />
  <title>squareclickerbd</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div id="page-wrap">
    <?php echo $missatge04 ?>
    <input type="button" value="NOVA PARTIDA" onclick="window.open('index.html','_self')"/>
  </div>
</body>
</html>
