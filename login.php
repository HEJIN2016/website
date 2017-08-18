<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";

//$con = mysqli_connect($servername, $username, $password, $dbname);
$con = new \mysqli($servername,$username,$password,$dbname);
//防止sql注入
function check_input($con,$value){
    if (get_magic_quotes_gpc()){
        $value = stripslashes($value);
    }//去掉斜杠

    if (!is_numeric($value)){
        $value = "'" . mysqli_real_escape_string($con,$value) . "'";
    }
    return $value;
}

if (mysqli_connect_errno()) {
    echo "连接失败" . mysqli_connect_errno();
}
else {
    mysqli_query($con , "set names utf8");
    $username = check_input($con,$_POST["username"]);
    $password = check_input($con,$_POST["password"]);
    $sql = "SELECT password FROM admin WHERE username=" . $username . " AND password = " .$password ;
    //echo $sql;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION["username"] = $_POST["username"];
        echo "window.location.href='homepage'";
    }
    else {
        echo "alert ('用户名或密码错误！')";
    }
}

?>