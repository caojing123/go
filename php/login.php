<?php
	//php请求参数（用户名，密码）
header("Content-type:text/html;charset=utf-8");
/*$tel=$_POST['tel'];
$email=$_POST['email'];*/
$userName=$_POST['userName'];
$password=$_POST['password'];
//php连接MySQL

$con=mysqli_connect("localhost","root","123456","mugu");
if($userName !="1"){
	$sql="select * from user where userName='$userName'";
  }else if($tel !="1"){
	$sql="select * from user where tel='$tel'";
  }else{
	$sql="select * from user where email='$email'";
  }
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);

if($rows>0){
	$rows=mysqli_fetch_array($result);
	$name=$rows['userName'];
	$pw= $rows['password'];
	if($pw != $password){
		echo "1";
	}else{
		echo $name.$pw;
	}
}
mysqli_close($con);
?>