<?php include 'connection.php';
extract($_GET);
 ?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="admin_manageplace.php">manage place</a>
	<a href="admin_managetrafficrules.php">manage traffic</a>
	<a href="admin_manageduties.php">manage duties</a>
	<a href="admin_managepolice.php">manage police</a>
	<a href="admin_viewfines.php">view fines</a>
	<a href="admin_viewcomplaint.php">view complaint</a>
	<a href="traffic_login.php">logout</a>
 -->
 	<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>traffic</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https:cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https:fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,500&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <!-- header section strats -->
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#">
          <div class="logo_box">
            <img src="images/logo.png" alt="" />
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item active">
              <a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_manageplace.php">manage place </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_managetrafficrules.php">manage trafficrules</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="admin_manageduties.php">manage duties</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="admin_managepolice.php">manage police</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="admin_viewfines.php">view fines</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="admin_viewcomplaint.php">view complaint</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="traffic_login.php">logout</a>
            </li>
           
          </ul>
          
        </div>
      </nav>
    </div>
  </header>

