<?php

$ip = $_SERVER["REMOTE_ADDR"];
$f=fopen("text.txt","a")or die();
fwrite($f,"$ip\n");
fclose($f);

?>