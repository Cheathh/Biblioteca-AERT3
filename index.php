<?php

session_start();
$serverName = "(local)";
$mysqli = new mysqli( "localhost", "root", "", "formulario");
if( $mysqli === false){
    echo "Error in connection.\n";
    die( print_r( $mysqli->error(), true));
}
@$username = $_REQUEST['username'];
@$password  = $_REQUEST['password'];
$tsql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
echo $tsql;
$stmt = $mysqli -> query($tsql);
if($stmt == true){
    $_SESSION['valid_user'] = true;
    $_SESSION['uNm'] = $username;
    header('Location: login.php');
    die();
}
?>