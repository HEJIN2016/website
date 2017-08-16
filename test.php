<?php
session_start();

//echo $_SESSION["username"];
if ((!(isset($_SESSION["username"])))||(empty($_SESSION["username"])))
{header("Location:https://www.baidu.com");
echo !isset($_SESSION["username"]);}
?>