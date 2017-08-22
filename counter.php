<?php 
header('Content-type: text/html; charset=utf-8');
$datei = fopen("counter.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;
echo "$count" ;
$datei = fopen("counter.txt","w");
fwrite($datei, $count);
fclose($datei);
?>
