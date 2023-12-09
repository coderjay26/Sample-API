<?php

if(isset($_POST['username']) && isset($_POST['password'])){
    require_once('conn.php');
    require_once('validated.php');
$fullname = $conn->real_escape_string(validated($_POST['fullname']));
    $username = $conn->real_escape_string(validated($_POST['username']));
    $phone = $conn->real_escape_string(validated($_POST['phone']));
    $password = validated($_POST['password']);
$sql = "INSERT INTO user (fullName, email, phone, password) VALUES('$fullname', '$username', '$phone', '$password')";
if(!$conn->query($sql)){
    header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

    echo "failed";
}else{
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

    echo "success";
}
}
else{
    echo "Not set";
}
?>