<?php
$server = "localhost";
$user = "id20052902_ccs";
$password = "J@yfuego26";
$db = "id20052902_ccs_db";

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connection Failed");
}
?>