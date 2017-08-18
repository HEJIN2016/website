<?php

require ("connect.php");
if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
}

else{
    $name = check_input($conn,$_POST["name"]);
    $ip = check_input($conn,$_POST["ip"]);
    $phone = check_input($conn,$_POST["phone"]);
    $word = check_input($conn,$_POST["word"]);
    $time = check_input($conn,$_POST["time"]);
    $sql = "INSERT INTO leaveword (ip,name,phone,word,time) VALUES (" .$ip . "," .$name . "," . $phone . "," . $word . "," . $time . ")";
    //echo $sql;
    mysqli_query($conn , "set names utf8");
    if(mysqli_query($conn,$sql)){
        echo 1;
    }
    else echo 0;
    mysqli_close($conn);
}

?>