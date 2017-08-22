<?php
session_start();
if ((!(isset($_SESSION["username"]))) || (empty($_SESSION["username"])))
    header("Location:login.html");

require ("connect.php");
if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
}

else{
    $compare = "SELECT password from admin WHERE username='" . $_POST["username"] . "' AND password='" . $_POST["old_password"] ."'";
    $sql = "UPDATE admin SET password = '" . $_POST["new_password"] . "'WHERE username = '" . $_POST["username"] . "'";

    mysqli_query($conn , "set names utf8");
    $result = mysqli_query($conn,$compare);
    if (mysqli_num_rows($result) > 0){
        mysqli_query($conn,$sql);
        echo '密码修改成功';
    }
    else echo '原密码输入有误';
    mysqli_close($conn);
}

?>