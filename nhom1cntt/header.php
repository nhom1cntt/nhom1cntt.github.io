<?php
require("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bài Tập PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 100%}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: yellow;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Trang chủ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <?php
	  if(isset($_SESSION["username"]))
	  {?>
		<li><a href="logout.php"><?php echo " Xin chào:".$_SESSION["username"]?> <span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a></li>
	
		<?php 
	  } else {
		  ?>
		 <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Đăng ký</a></li>
        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
		  <?php
	  }
	  ?>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav" style="background-color:#deedde;">
	<p>Menu<p>
	<p><a href="user.php">Thành Viên </a></p>
    </div>
    <div class="col-sm-10 text-left"> 