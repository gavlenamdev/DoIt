<?php
include 'doitheader.php';
include 'doitserver.php';
$title = $_POST['ttitle'];
$cat = $_POST['cat'];
$des = $_POST['tdes'];
$remain = $_POST['tdate'];


$query = "INSERT into doit_task(title,category,description,remain) values('$title','$cat','$des','$remain')";
$result = mysqli_query($dbc,$query) or die("Please change the title");

if( $result!=FALSE ) {
	echo "<br><br><br><br><br><div class='center'><div class='row'><i class='mdi mdi-checkbox-marked-circle-outline prefix'></i>";
	echo "<h6>added</h6></div></div>";
}
else { 
	echo "<br><br><br><br><br><div class='center'><div class='row'><i class='mdi mdi-checkbox-marked-circle-outline prefix'></i>";
	echo "<h6>not added</h6></div></div>";
}
mysqli_close($dbc);

?>