<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "连接失败" . mysqli_connect_errno();
}
else {
    $sql = "SELECT password FROM admin WHERE username='" . $_POST["username"] . "'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = $result->fetch_assoc();
        $password = $row["password"];
        if ($password == $_POST["password"]) {
            //echo 1 ;
            session_start();
            $_SESSION["username"] = $_POST["username"];
            echo "window.location.href='homepage'";
        }
        else {
            echo "alert ('登录失败！')";
        }
    }
    else {
        echo "alert ('登录失败！')";
    }
}

?>