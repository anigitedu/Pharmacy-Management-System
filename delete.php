<?php

include_once('config.php');
$id=$_GET['id'];
$sql="DELETE FROM salesman WHERE id='$id'";
mysqli_query( $connection, $sql );
header('location:index.php');

mysqli_close($connection);
?>