<?php

require ("news.php");
$servername = "localhost";
$username = "root";
$password = "xuanyiadmin-1234";
//$password = "";
$dbname = "news";

$conn = new \mysqli($servername,$username,$password,$dbname);

function check_input($con,$value){
    if (get_magic_quotes_gpc()){
        $value = stripslashes($value);
    }//去掉斜杠

    if (!is_numeric($value)){
        $value = "'" . mysqli_real_escape_string($con,$value) . "'";
    }
    return $value;
}
?>