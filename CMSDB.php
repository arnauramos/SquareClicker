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
    $missatge2 = "<span style='color:#4CAF50;'>Status Dbase</span>&nbsp;&xrarr; La Base de dades s'ha creat.";}
  else{
    $missatge2 = "<span style='color:#4CAF50;'>Status Dbase</span>&nbsp;&xrarr; ". $conn->error;
  }
?>
<div class="post">
  <p><?php echo $missatge1 ?></p>
  <p><?php echo $missatge2 ?></p>
  <p><?php echo $missatge3 ?></p>
</div>
