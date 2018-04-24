<?php
header('Content-type: text/html; charset=UTF8');
$url='127.0.0.1';
$root='root';
$poss='123456';
$db='sg';
$conne= mysqli_connect($url, $root, $poss, $db);

//php7 
mysqli_query($conne, "set character set 'utf8'");//读库  
mysqli_query($conne,"set names 'utf8'");//写库 
//php5
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库

if($conne){
//echo "string";
}
//echo "string5";
//}

?>