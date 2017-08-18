<?php

require ('connect.php');

if ($conn->connect_error){
    echo 0;
}

else{

    $sql = "DELETE FROM leaveword WHERE number in (" . $_POST["number"] . ")";
    $conn->query("set names 'utf8'");


    if (mysqli_query($conn,$sql)){
        echo 1;
    }
    else echo 0;
    mysqli_close($conn);
}

?>