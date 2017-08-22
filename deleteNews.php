<?php
/**
 * Created by PhpStorm.
 * User: HeJin
 * Date: 2017/8/16 0016
 * Time: 上午 10:16
 */
session_start();
if ((!(isset($_SESSION["username"]))) || (empty($_SESSION["username"])))
    header("Location:login.html");
require ('connect.php');

if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
    echo 0;
}

else{
    $sql = "DELETE FROM newslist where number='" . $_POST["number"] . "'";
    mysqli_query($conn,"set names utf-8");
    if(mysqli_query($conn,$sql)){
        echo 1;
    }
    else{
        echo 0;
    }
    mysqli_close($conn);
}