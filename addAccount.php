<?php
session_start();
if ((!(isset($_SESSION["username"]))) || (empty($_SESSION["username"])))
    header("Location:login.html");

require ("connect.php");

if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
}

else{
  $sql = "INSERT INTO admin (username,password) VALUES ('" . $_POST["username"] . "','" . $_POST["password"] . "')";
  $findsql = "SELECT * FROM admin WHERE username='" . $_POST["username"] . "'";
  mysqli_query($conn , "set names utf8");
  $result = mysqli_query($conn,$findsql);
  if(mysqli_num_rows($result) > 0){
      echo '该账号已存在';
  }
  else {
      mysqli_query($conn,$sql);
      echo '添加账号成功';
  }

  mysqli_close($conn);
}

?>