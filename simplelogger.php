<?php

$ip = $_SERVER["REMOTE_ADDR"];
$time=date("Y-m-d (H:i:s)");
$browser=$_SERVER["HTTP_USER_AGENT"];

$out="{\n\t$time\n\t$ip\n\t$browser\n}";
$f=fopen(".secret/text.txt","a")or die();
fwrite($f,"$out\n");

fclose($f);

?>
