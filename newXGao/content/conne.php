<?php
header('Content-type: text/html; charset=UTF8');
$url='127.0.0.1';
$root='root';
$poss='123456';
$db='test';
//$conne=mysql_connect($url,$root,$poss,$db);
//mysql_query("set names utf8"); //**设置字符集***
$conne= mysqli_connect($url, $root, $poss, $db);
//mysqli_set_charset($conne, 'utf-8');
//mysql_query("set names utf8"); //**设置字符集***
//php7 
mysqli_query($conne, "set character set 'utf8'");//读库  
mysqli_query($conne,"set names 'utf8'");//写库 
//php5
//mysql_query("set character set 'utf8'");//读库 
//mysql_query("set names 'utf8'");//写库

//if($conne){
//echo "string";
//}
//try{
//	$conne==null;
//}
//catch{
//	echo "string5";
//}

?>