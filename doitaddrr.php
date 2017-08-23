<?php
include 'doitheader.php';
include "doitserver.php";
$name = $_POST['rname'];
$hour = $_POST['rhour'];

$query = "INSERT INTO rem VALUES('$name','$hour')";
$result = mysqli_query($dbc,$query);;
//if($result) {
	echo "<div class='row'><div class='col s5 offset-s4 card-panel teal lighten-2'>";
	echo "<i class='mdi mdi-checkbox-marked-circle-outline prefix'></i><h6>added</h6></div></div>";
//}
//else
	echo "<div class='row'><div class='col s5 offset-s4 card-panel red lighten-2'>";
	echo "<i class='mdi mdi-close-circle-outline prefix'></i><h6>No</h6></div></div>";
mysqli_close($dbc);
?>