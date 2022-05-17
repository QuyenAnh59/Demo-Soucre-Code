<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>UserID  :  </td>
			<td><input type="text" name="userid"></td>
		</tr>
		<tr>
			<td>UserName  :  </td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><input type="password" name="password"></td>
		</tr>
		
		<tr>
			<td> </td>
			<td><input type="submit" name="login" value="Login"></td>
		</tr>
	</table>
</form>
<?php
$connect = mysqli_connect('localhost','root','','tunesourcewebsite');
if ($connect) {
	echo "Ket noi thanh cong";	
}
else{
	echo "Ket noi that bai";
}
if(isset($_POST['login'])){
$username= $_POST['username'];
$password= $_POST['password'];
$userid= $_POST['userid'];

$sql = "SELECT * FROM users WHERE username ='$username' AND password ='password' AND userid='userid'";

//Thuc thi truy van
$result =mysqli_query($connect, $sql);

$row = mysqli_num_rows($result);
if($row>0){
	echo "<script> alert('Dang Nhap Thanh Cong')</script>";
}
else{
	echo "Dang Nhap That Bai";
 }
}




?>
</body>
</html>