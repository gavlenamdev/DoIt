<?php
include 'doitserver.php';
$query = "SELECT * FROM doit_task WHERE title='num'";
$result = mysqli_query($dbc,$query) or die("invalid");
$row = mysqli_fetch_array($result);

$addedDate = $row['date'];
$deadline = $row['remain'];
$adate = strtotime($addedDate);
$ddate = strtotime($deadline);
$secs = $ddate-$adate;
$days = $secs/86400;
$indays = ceil($days);
echo "$addedDate : $deadline";
echo "<br> $days <br> $indays";
?>