<?php
header('Content-type: text/html; charset=UTF8');
$name = $_POST['name'];
$pw = $_POST['pw'];
//$link = mysqli_connect('localhost','root','123456','test');
require_once ('conne.php');
$query = mysqli_query($conne, "SELECT name,pw FROM user WHERE name = '$name'");
//找到与输入用户名相同的信息，注意要取出的信息有两项
$row = mysqli_fetch_array($query);
//if($_POST['submit']){

if ($row['name'] == $name && $row['pw'] == $pw) {

	//echo "<script>alert('successfully')</script>";
	$json_arr = array("name" => $row['name'], "pw" => $row['pw']);
	$json_obj = json_encode($json_arr);
	echo $json_obj;
	//  echo "<script>alert('successfully');window.location= '../index.html';</script>";
	//  echo "<script>alert('successfully')</script>";
} 
else {//账号密码不匹配或不存在次用户
	$json_arr = array("hu_error" => '444');
	$json_obj = json_encode($json_arr);
	echo $json_obj;

}

//}
?>