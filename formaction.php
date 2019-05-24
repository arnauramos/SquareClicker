
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

// Agafa el nom i la puntuació dels usuaris
$formus = htmlspecialchars($_POST['usuari']);
$formpu = htmlspecialchars($_POST['puntuacio']);

// Les inserta en la taula de la base de dades
$sql = "INSERT INTO squareclickerdb (usuari, puntuacio)
VALUES ('$formus', '$formpu')";

// Comprova que ha enviat la puntuació correctament
if ($conn->query($sql) === TRUE) {
   $missatge04 = "Has enviat la teva puntuació";
} else {
   $missatge04 = "Error: " . $sql . "<br>" . $conn->error;
}

// Tanca connexió
$conn->close();
?>

<!--// Document html per començar una nova partida -->
<html lang="ca">
<head>
  <meta charset="utf-8" />
  <title>squareclickerbd</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div id="page-wrap">
    <!--Et comunica que la teva puntuació s'ha enviat correctament -->
    <?php echo $missatge04 ?>
    <!-- Comença una nova partida-->
    <button id="button2" onclick="window.open('index.php','_self')";>NOVA PARTIDA</button>
    <button id="ranquing2" onclick="window.open('ranquing.php','_self')">RANQUING</button>
  </div>
</body>
</html>
