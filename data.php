<?php
require("connect.php");
if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
}
else {
    $sql = "SELECT * FROM newslist ORDER BY time DESC";
    $conn->query("set names 'utf8'");
    $result = $conn->query($sql);
    $newslist = new ArrayObject();
    $index = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //echo "title:" . $row["title"] . "- author:" .$row["title"] ."-time:" . $row["time"] . "-content" . $row["content"] . "<br>";
            $newslist[$index] = new news();
            $newslist[$index]->setTitle($row["title"]);
            $newslist[$index]->setAuthor($row["author"]);
            $newslist[$index]->setTime($row["time"]);
            $newslist[$index]->setContent($row["content"]);
            $newslist[$index]->setNumber($row["number"]);
            $newslist[$index]->setFirstLine($row["firstline"]);
            $index++;
        }
        echo json_encode($newslist);
    } else {
        echo "none result";
    }
}
$conn->close();
?>
