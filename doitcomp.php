<?php
include 'doitheader.php';
include 'doitserver.php';

$title = $_POST['ttitle'];

$query = "UPDATE doit_task SET status=1 WHERE title='$title'";
$result = mysqli_query($dbc,$query);

if( $result!=FALSE ) {
	echo "<br><br><br><br><br><div class='center'><div class='row'><i class='mdi mdi-checkbox-marked-circle-outline prefix'></i>";
	echo "<h6>done</h6></div></div>";
}

mysqli_close($dbc);
?>