<?php
session_start();
if ((!(isset($_SESSION["username"]))) || (empty($_SESSION["username"])))
    header("Location:login.html");
require ("connect.php");
if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
}
else{
    $sql = "SELECT * FROM newslist ORDER BY time DESC";
    $conn->query("set names 'utf8'");
    $result = $conn->query($sql);
    $newslist = new ArrayObject();
    $index = 0;
    $json = '[';
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            //echo "title:" . $row["title"] . "- author:" .$row["title"] ."-time:" . $row["time"] . "-content" . $row["content"] . "<br>";
            $newslist[$index] = new news();
            $newslist[$index]->setTitle($row["title"]);
            $newslist[$index]->setAuthor($row["author"]);
            $newslist[$index]->setTime($row["time"]);
            $newslist[$index]->setContent($row["content"]);
            $newslist[$index]->setNumber($row["number"]);
            $newslist[$index]->setFirstLine(mb_substr(htmlentities($row["firstline"]),0,25) . "...");
            $json = $json . json_encode($newslist[$index],JSON_UNESCAPED_UNICODE) . ',' ;
            $index++;
        }
        $json = $json;
        $json = rtrim($json,',');
        $json = $json . ']';
        echo $json;
    }
    else{
        echo "none result";
    }
}
$conn->close();
?>
