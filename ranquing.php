<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "squareclickerdb";

//creem connexió
$conn = new mysqli($servername, $username, $password);
//comprovem connexió
if ($conn->connect_error){
die($missatge01 = "connexió fallida: ".$conn->connect_error);
}
$missatge01 = "connexió establerta";
  //connectar amb la base de dades
  $conn = new mysqli($servername, $username, $password, $dbname);
?>

<table id="Taula">
<tr id="titols">
  <td class="id">id</td>
  <td class="usuari">usuari</td>
  <td class="puntuacio">puntuació</td>
</tr>
<?php
$sql="SELECT * from squareclickerdb";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
 ?>

<tr>
  <td class="id"><?php echo $row['id']?></td>
  <td class="usuari"><?php echo $row['usuari']?></td>
  <td class="puntuacio"><?php echo $row['puntuacio']?></td>
</tr>
<?php
}
mysqli_close($conn); ?>

</table>
</div>
