<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="form";


$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

if ($conn->connect_error){
    echo "connection error" .$conn->error;
}




?>