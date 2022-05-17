<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
</head>
<body>
 <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in</p>

                <form class="mx-1 mx-md-4" method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="username" class="form-control" name="username" />
                      <label class="form-label" for="username">User name</label>
                      <input type="text" id="password" class="form-control" name="password" />
                      <label class="form-label" for="password">Password</label>
                      <p></p>
                      <tr>
        <td> </td>
        <td> <input type="submit" name="login" value="login"> </td>
      </tr>
                    </div>
                  </div>
<?php
$connect = mysqli_connect('localhost','root','','tunesourcewebsite');

if(isset($_POST["login"])){

$username= $_POST['username'];
$password= $_POST['password'];

$sql = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";

//Thuc thi truy van
$result =mysqli_query($connect, $sql);

$row = mysqli_num_rows($result);
if($row>0){
	echo "<script> alert('Login successfully')</script>";
	echo "<script>window.open('Demo trang chu.php', '_self')</script>";
}
else{
	echo "Login Failed";
 }
}




?>
</body>
</html>