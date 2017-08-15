<?php

require ("connect.php");

if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
    echo 0;
}
else{
    $sql = "UPDATE newslist SET title='" . $_POST["title"]."',author='" . $_POST["author"] . "',content='" . $_POST["content"] . "'WHERE number='" . $_POST["number"] . "'";
    mysqli_query($conn , "set names utf8");
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo 1;
}

?>