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

$sql = "CREATE DATABASE squareclickerbd";
if ($conn->query($sql) === TRUE) {
    $missatge2 = "<span style='color:#4CAF50;'>Status Dbase</span>&nbsp;&xrarr; La Base de dades s'ha creat.";
  }  else{

    $missatge2 = "<span style='color:#4CAF50;'>Status Dbase</span>&nbsp;&xrarr; ". $conn->error;

      $conn = new mysqli($servername, $username, $password, $dbname);

      $sql = "CREATE TABLE squareclickertb (
      id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      usuari VARCHAR(100) NOT NULL,
      puntuació VARCHAR(200)
      )";

      if ($conn->query($sql) === TRUE) {
          $missatge3 = "<span style='color:#4CAF50;'>Status Taula</span>&nbsp;&xrarr; La Taula s'ha creat satisfactòriament.";
      } else {
          $missatge3 = "<span style='color:#4CAF50;'>Status Taula</span>&nbsp;&xrarr; ". $conn->error;
    }
  }

  $sql = "SELECT * from squareclickertb";
  $result = mysqli_query($conn, $sql);

?>
<div class="post">
  <p><?php echo $missatge1 ?></p>
  <p><?php echo $missatge2 ?></p>
  <p><?php echo $missatge3 ?></p>
  <p><?php echo $missatge4 ?></p>

</div>
<div class="form">
  <form action="formaction.php" method="post">
    <label for="squareclickertb">nom</label>
    <input name="squareclickertb" id="squareclickertb" type="text" maxlength="30" />
    <label for="puntuacio">puntuacio</label>
    <input name="puntuacio" id="puntuacio" type="text" maxlenght="50" />

    <input type="submit" value="NOVA PARTIDA" />
  </form>
  <table>
    <?php while($mostrar =mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['nom'] ?></td>
        <td><?php echo $mostrar['puntuacio'] ?></td>

  </tr>
  <?php
}
?>

</table>
</div>
