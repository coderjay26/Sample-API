<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    require_once('conn.php');
    require_once('validated.php');

    $username = validated($_POST['username']);
    $password = validated($_POST['password']);

    $sql = "SELECT * FROM user Where email='$username' and password='$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "success";
    }else{
        echo "failed";
    }
}
?>