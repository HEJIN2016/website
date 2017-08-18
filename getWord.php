<?php

require ("connect.php");

class word{
    public $name = "";
    public $phone = "";
    public $word = "";
    public $ip = "";
    public $time = "";
    public $number="";
    function setName($name){
        $this->name = $name;
    }
    function setPhone($phone){
        $this->phone = $phone;
    }
    function setTime($time){
        $this->time = $time;
    }
    function setIp($ip){
        $this->ip = $ip;
    }
    function setWord($word){
        $this->word = $word;
    }
    function setNumber($number){
        $this->number= $number;
    }
}
if ($conn->connect_error){
    die("连接失败:" . $conn->connect_error);
}
else{
    $sql = "SELECT * FROM leaveword ORDER BY time DESC";
    $conn->query("set names 'utf8'");
    $result = $conn->query($sql);
    $wordslist = new ArrayObject();
    $index = 0;
    $json = '[';
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $wordslist[$index] = new word();
            $wordslist[$index]->setName($row["name"]);
            $wordslist[$index]->setPhone($row["phone"]);
            $wordslist[$index]->setTime($row["time"]);
            $wordslist[$index]->setIp($row["ip"]);
            $wordslist[$index]->setWord($row["word"]);
            $wordslist[$index]->setNumber($row["number"]);
            $json = $json . json_encode($wordslist[$index],JSON_UNESCAPED_UNICODE) . ',' ;
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
