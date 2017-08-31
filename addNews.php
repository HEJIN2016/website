<?php
session_start();
if ((!(isset($_SESSION["username"]))) || (empty($_SESSION["username"])))
    header("Location:login.html");

require ('connect.php');

if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
    echo 0;
}
else{
    $sql = "INSERT INTO newslist (title,author,time,content,firstline,img) VALUES (" . "'" .$_POST["title"] . "','" . $_POST["author"]  . "','" . $_POST["time"] . "','"  . $_POST["content"] . "','" . $_POST["firstline"]. "','"  . $_POST["img"]  . "')";
    //echo $sql;
    mysqli_query($conn , "set names utf8");
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo 1;
}

?>