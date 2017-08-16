<?php
/**
 * Created by PhpStorm.
 * User: Hejin
 * Date: 2017/8/16 0016
 * Time: 下午 17:31
 */

session_start();
session_destroy();
header('Location:login.html');
?>