<?php

require ("connect.php");
if ($conn->connect_error){
	echo 0;
    die("连接失败:" . $conn->connect_error);
}

else{
    $name = check_input($conn,$_POST["name"]);
    $ip = $_SERVER["REMOTE_ADDR"];
    $phone = check_input($conn,$_POST["phone"]);
    $word = check_input($conn,$_POST["word"]);
    $time = check_input($conn,$_POST["time"]);
    $sql = "INSERT INTO leaveword (ip,name,phone,word,time) VALUES ('" . $ip . "'" . "," .$name . "," . $phone . "," . $word . "," . $time . ")";
    //echo $sql;
	mysqli_query($conn , "set names utf8");
    mysqli_query($conn,$sql);
    echo 1;
    mysqli_close($conn);
}

?>