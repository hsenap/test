<?php
header("Content-type:text/html;charset=utf-8");
$username = $_POST['username'];
$age = $_POST['age'];
$job = $_POST['job'];
$json_arr = array("username" => $username, "age" => $age, "job" => $job);
//$json_arr2 = array("username" => '你好', "age" => '55', "job" => '44');
//$json_obj = json_encode($json_arr2);
$json_obj = json_encode($json_arr);
//$json_obj = json_encode($json_arr2);
echo $json_obj;
?>