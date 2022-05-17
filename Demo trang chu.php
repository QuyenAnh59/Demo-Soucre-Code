<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widt,initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<title></title>
</head>
<style>
	.carousel-inner .item img {
		margin: auto;
	}


..........................

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
<body>
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
				<li><a href="rg3.php"></span>Sign up</a></li>
				<li><a href="demoform3.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="search-container">
    <form action="search.php" method="GET">
      <input type="text" placeholder="Search.." name="user_query">
      <button type="submit" name="search"><span class="glyphicon glyphicon-search"></span></button>
    </form>
  </div>
</div>
<div style="padding-left:6px;">
</div>
<p style="font-size: 30px;text-align: center;text-decoration: ">PlayList Today</p>


 

<div id="MyCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#MyCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#MyCarousel" data-slide-to="1" ></li>
    <li data-target="#MyCarousel" data-slide-to="2" ></li>
    <li data-target="#MyCarousel" data-slide-to="3" ></li>
    <li data-target="#MyCarousel" data-slide-to="4" ></li>
    <li data-target="#MyCarousel" data-slide-to="5" ></li>
    <li data-target="#MyCarousel" data-slide-to="6" ></li>
    <li data-target="#MyCarousel" data-slide-to="7" ></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="item_midle" src="img/st 5.jpg" alt="Los Angeless" style="width: 60%;height: auto;">
    </div>

    <div class="item">
      <img class="item_midle" src="img/sobin.jpg" alt="Chicagos" style="width: 60%;height: auto;" >
    </div>

    <div class="item">
      <img class="item_midle" src="img/jack.jpg" alt="New Yorks" style="width: 60%;height: auto;">
    </div>
    <div class="item">
      <img class="item_midle" src="img/jack 2.jpg" alt="New Yorks" style="width: 60%;height: auto;">
    </div>
    <div class="item">
      <img class="item_midle" src="img/jack 4.jpg" alt="New Yorks" style="width: 60%;height: auto;">
    </div>
    <div class="item">
      <img class="item_midle" src="img/erik.jpg" alt="New Yorks" style="width: 60%;height: auto;">
    </div>
    <div class="item">
      <img class="item_midle" src="img/erik 2.jpg" alt="New Yorks" style="width: 60%;height: auto;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#MyCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>  
  <a class="right carousel-control" href="#MyCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<p></p><p></p><p></p>
<div class="product-group">
            <div class="row">            
            <?php
            $sql = "SELECT * FROM song";
            $connect = mysqli_connect('localhost','root','','tunesourcewebsite');
            //session_start();
            $result = mysqli_query($connect, $sql);
            // Trả về kết quả dạng 1 mảng
            while ($row_song = mysqli_fetch_array($result)){
                $song_id = $row_song['song_id'];
                $song_name = $row_song['song_name'];
                $song_price = $row_song['song_price'];
                $song_audio = $row_song['song_audio'];
                $song_img = $row_song['song_img'];
                ?>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                      <img style="width: 300px;height: 170px;" class="card-img-top" src="img/<?php echo"$song_img"?>">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo"$song_name"?></h5>
                         <h5 class="card-title"><?php echo"$song_id"?></h5>
                       <audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="width: 250px;height:50px; ">
                           <source src="Audio/<?php echo $song_audio?>" type="audio/mpeg">
                       </audio>
                       <script type="text/javascript">
                           function myAudio(event){
                               if(event.currentTime>10){
                                   event.currentTime=0;
                                   event.pause();
                                   alert("You have to pay to listen to the whole song")
                               }
                           }
                       </script>
                       <?php
                       echo"
                        <a href='Detail.php?id=$song_id' class='btn btn-primary'>Details</a> "?>
 </div> 
                </div>
              </div>
                <?php
            }
                ?>
        </div>
</body>
</html>