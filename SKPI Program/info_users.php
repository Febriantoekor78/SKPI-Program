<?php

session_start();
if(!isset($_SESSION["valid"])) 
header("Location:./login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>APLIKASI SKPI UNBOR</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="img/icons/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
  <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">


</head>

<body class="page-index has-hero">
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

      <div class="container">
        <div class="navbar navbar-default">

          <!--mobile collapse menu button-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

          <div class="navbar-text user pull-right">
		  <ul>
			<li><a href="login.php">Sign In</a></li>
			<li><a href="logout.php">Sign Out</a></li>
		  </ul>
          </div>
          <!--everything within this div is collapsed on mobile-->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
              <li class="icon-link">
                <a href="index.php"><i class="fa fa-home"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Menu Users</li>
                  <li><a href="login.php" tabindex="-1" class="menu-item">Login</a></li>
                  <li><a href="register.php" tabindex="-1" class="menu-item">Sign-Up</a></li>
				  <li><a href="info_users.php" tabindex="-1" class="menu-item">Info Users</a></li>
                </ul>
              </li>
			  <li><a href="tambah.php">ADD KEGIATAN</a></li>
              <li><a href="kegiatan.php">JURNAL KEGIATAN</a></li>
             
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!--/.navbar-collapse -->
        </div>
      </div>
    </div>
    <div class="hero" id="highlighted">
      <div class="inner">
         <div id="highlighted-slider" class="container">
          <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
            <!--Slideshow content-->
            <!--Slide 1-->
   
           <div class="item">
              <div class="row">
                <div class="col-md-6 col-md-push-6 item-caption">
                  <h2 class="h1 text-weight-light">
                   <span class="text-primary">
				   <?php echo $_SESSION["name"] ?>
				   </span>
                    </h2>
                  </div>
                <div class="col-md-6 col-md-pull-6 hidden-xs">
                  <img src="img/slides/slide1.png" alt="Slide 1" class="center-block img-responsive">
                </div>
              </div>
            </div>

            </div>
          </div>


  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <!-- Mission Statement -->
		 <!-- Mission Statement -->
    <div class="mission text-center block block-pd-sm block-bg-noise">
      <div class="container">
        <h2 class="text-shadow-white">
            @081331015 SISTEM INFORMASI FAKULTAS ILMU KOMPUTER UNIVERSITAS BOROBUDUR
          </h2>
      </div>
    </div>

</body>

</html>
