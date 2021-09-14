<?php

// Database Details


$server='localhost';
$username='root';
$pass="";
$dbname="pms";
$connection = mysqli_connect( $server, $username, $pass, $dbname );
if ( !$connection ) {
    echo mysqli_error( $connection );
    throw new Exception( "Database cannot Connect" );
}
?>
