<?php

session_start();
$serverName = "(local)";
$connectionInfo = array("Database"=>"mydatabase","UID"=>"myusername", "PWD"=>"mypassword");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false){
    echo "Error in connection.\n";
    die( print_r( sqlsrv_errors(), true));
}
$username = $_REQUEST['uNm'];
$password  = $_REQUEST['uPw'];
$tsql = "SELECT * FROM li WHERE uNm='$username' AND uPw='$password'";
$stmt = sqlsrv_query( $conn, $tsql, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
if($stmt == true){
    $_SESSION['valid_user'] = true;
    $_SESSION['uNm'] = $username;
    header('Location: index.php');
    die();
}
?>