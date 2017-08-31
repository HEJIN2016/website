<?php
session_start();
if ((!(isset($_SESSION["username"]))) || (empty($_SESSION["username"])))
    header("Location:login.html");
require ("connect.php");
if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
}
else{
    $sql = "UPDATE download SET times = times + 1 ";
	$ip = $_SERVER["REMOTE_ADDR"];
	$sql2 = "INSERT INTO downloadIp (ip) VALUES ('" . $ip. "')";
    $conn->query("set names 'utf8'");
    if (mysqli_query($conn,$sql)&&mysqli_query($conn,$sql2)){
        echo 1;
    }
    else echo 0;
}
$conn->close();
?>
