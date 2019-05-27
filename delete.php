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
<?php
$sql = "DROP TABLE squareclickerdb";
if(mysqli_query($conn, $sql)){
    echo "Record was deleted successfully.";
}
else{
    echo "ERROR: Could not able to execute $sql. "
                                   . mysqli_error($conn);
}
header("Location: ranquing.php");
?>

<html lang="ca">
  <head>
    <meta charset="utf-8">
    <title>SQUARE CLICKER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <script type="text/javascript" src="functions.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
</body>
