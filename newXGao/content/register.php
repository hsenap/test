<?php 
header("Content-type: text/html; charset=utf-8");
$username=$_POST['name'];
$password=$_POST['pw'];
//$realname=$_POST['realname'];
//$phonenumber=$_POST['phonenumber'];
//$link = mysqli_connect('localhost','root','123456','test');
//echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
require_once('conne.php');
//echo $username;
//mysqli_set_charset($conne, 'utf-8');
//mysqli_query("set names 'utf8' "); 
//mysqli_query("set character_set_client=utf8"); 
//mysqli_query("set character_set_results=utf8");

//php7 
$name=$_POST['name'];
$pw=$_POST['pw'];
mysqli_query($conne, "set character set 'utf8'");//读库  
mysqli_query($conne,"set names 'utf8'");//写库 
$lj=mysqli_query($conne, "select name,pw from user where name='$name'");
$row=mysqli_fetch_array($lj);
if($row['name']!=$name)
{
	$text=mysqli_query($conne,"insert into user (name,pw) values('$username','$password')");
	

}
else {
	$text='';
}
//$text=mysqli_query($conne,"insert into user (name,pw) values('$username','$password')");
//php5
   mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库


if($_POST['submit']){
//  if(mysqli_query($link,"insert into info (username,password,realname,phonenumber) values('$username','$password','$realname','$phonenumber')"))
	//if(mysqli_query($conne,"insert into user (name,pw) values('$username','$password')"))
	if($text!='')
    {
//  	mysqli_query('set names utf-8');
//  	mysqli_set_charset($conne, 'utf-8');
		
//      setcookie("uname",$username,time()+7200);
//echo "<script>alert('注册成功')</script>";
echo "<script>window.location= '../index.html';</script>";

    }
    else {
        echo "<script>alert('用户已被注册')</script>";
    }
}
//include('register.html');
?>