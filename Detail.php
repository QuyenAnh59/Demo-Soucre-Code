<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widt,initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

	<title>Chi tiết bài hát</title>
	<style type="text/css">
		.images-detail img {
			margin-left: 5%;
			margin-bottom: 30%;
			width: 100%;
			align-items: center;
			border-radius: 100%;
			margin-bottom: 30px;
			animation: app-logo-spin infinite 20s linear
		}

		@keyframes app-logo-spin {
			from {
				transform: rotate(0deg);
			}
			to {
				transform: rotate(360deg);
			}
		}

	</style>
</head>
<body style="background-image: url(img/register.png);">
<style type=""></style>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="">TSW.VN</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="">Home</a></li>
				<li><a href="">Album</a></li>
				<li><a href="">Music Video</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://localhost/PBIT1702/rg.php"></span>Sign up</a></li>
				<li><a href="http://localhost/PBIT1702/demoform.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
			</ul>
		</div>
	</div>
</nav>






		<div class="container">
			<div class="row">
				<?php
				$connect = mysqli_connect('localhost','root','','tunesourcewebsite');
	if(!$connect){
		echo "Kết nối thất bại";
	}
				$id = $_GET["id"];
				$sql = "SELECT * FROM song where song_id = {$id}";
				$result = mysqli_query($connect,$sql);
				while($row= mysqli_fetch_array($result)){

					?>
					<div class="col-md-6 col-sm-6 col-xs-12" style="text-align: left;">
						<div class="images-detail">
							<img src="img/<?php echo $row['song_img'];?>" style = "width: 300px;height: 300px;">
						</div>
						<h2> Name of Music: <?php echo $row['song_name'];?> </h2>
						<p>Price: <?php echo $row['song_price'];?> </p>
						<audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="width: 250px;">
							<source src="Audio/<?php echo $row['song_audio'];?>" type="audio/mpeg">
							</audio>
							<script type="text/javascript">
								function MyAudio(event){
									if(event.currentTime>10){
										event.currentTime=0;
										event.pause();
										alert("You have to pay to listen to the whole song")
									}
								}
							</script>
							<h5> Singer:Son Tung MTP<?php echo $row["singer_id"] ;?></h5>
							</div>  
							<div class="col-md-4 col-sm-6 col-xs-12" >
							<textarea cols="80" rows="30" disabled><?php echo $row["song_description"];?></textarea>
							<a href="add_cart.php?id=<?php echo $id ;?>">  <button type="submit" name ="buy" class='btn btn-primary'><i class="fas fa-cart-plus"></i> Add to cart</button> </a>
						 </div>
						<!-- cho ảnh quay tròn-->
						
						<?php
					}

					?>
			</div>
		</div>
		</body>
		</html>