<?php include"includes/modal_login.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>MEDKUY!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style>
  /* cyrillic-ext */

  main{
      font: 400 15px/1.8 Lato, sans-serif;
      background-color: #A7C585;
  }


  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  #tentang{
    color: #FFFFFF;
  }
  
  .carousel-inner img {
      
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .
  footer {
      background-color: #FFFFFF;
      color: #f5f5f5;
	  margin-bottom: 0px;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }

}
 
  </style>
</head>
<body id="utama" data-spy="scroll" data-target=".navbar" data-offset="50">
<main>
<nav class="navbar navbar-default  navbar-fixed-top bg-danger">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="images/11.png" width="180" height="45">
     
 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        
        <li><a href="kontak.php">KONTAK</a></li>
		
        


          <li><a class="btn btn-link" data-toggle="modal" data-target="#myModal">MASUK</a></li>


		
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/8.png" width="1200" height="700">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="images/9.png" width="1200" height="700">
        <div class="carousel-caption">

        </div>      
      </div>
    
      <div class="item">
        <img src="images/10.png" width="1200" height="700">
        <div class="carousel-caption">

        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The News Section) -->
<div id="tentang" class="container text-center">
  <h1 style="font-size: 60px">PUSTA-Q</h1>
    <p style="font-size: 20px">PUSTA-Q adalah website-nya perpustakaan Q-University</p>
      </div>

</main>

	
</body>
</html>
