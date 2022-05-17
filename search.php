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
				<li><a href="http://localhost/PBIT1702/rg.php"></span>Sign up</a></li>
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


 


  <!-- Left and right controls -->
 
<p></p><p></p><p></p>
<div class="product-group">
            <div class="row">            
           <?php
           // session_start();
            $connect = mysqli_connect("localhost","root","","tunesourcewebsite");
            if (isset($_GET['search']))
            {
                $search= $_GET['user_query'];
            }
            $sql="Select * from song where song_name like '%{$search}%'";
            $result= mysqli_query($connect, $sql);
            while($row= mysqli_fetch_array($result))
            {
                $song_id= $row['song_id'];
            ?>
            <div class="col-md-3">
                <div class="card card-product mb-3">
                    <img style="width: 300px;height: 170px;" class="card-img-top" src="img/<?php echo $row['song_img']; ?>" alt="Card image cap">
                    <h6 class="card-title">Song name: <?php echo $row['song_name']; ?></h6>
                   
                    <div class="card-body">
                        <audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="max-width: 400px; width: 100%;">
                            <source src="Audio/<?php echo $row['song_audio']; ?>" type="audio/mpeg">
                        </audio>
                        <script type="text/javascript">
                            function myAudio(event) {
                                if (event.currentTime > 30) {
                                    event.currentTime = 0;
                                    event.pause();
                                    alert("You have to pay to continue listening");
                                }
                            }
                        </script>
                        <?php
                        echo"<a href='Detail.php?id=$song_id' class='btn btn-primary' target='_blank'>Details</a>"
                        ?>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
        </div>
</body>
</html>