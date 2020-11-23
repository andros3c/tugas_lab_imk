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

 


  h2, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 30px;
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
<div id="kontak" class="container">
  <h2 class="text-center">KONTAK</h2>
  <p class="text-center">Silahkan Beri Saran dan Kritik</p>
<br>
  <div class="row">
    <div class="col-md-4">
      <p><span class="glyphicon glyphicon-map-marker"></span> &nbsp; Medan, Indonesia</p>
    <h5>Kontak Kami :</h5> 
      <table><tr><td><span class="glyphicon glyphicon-envelope"></span>  QUniversity@gmail.com</td></tr>
  
    </table>
    </div>
    <div class="col-md-8">
      <div class="row">
<form action="komen.php" method="post">
    <div class="col-sm-6 form-group">
          <input class="form-control" name="nama" placeholder="Nama" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" name="komen" placeholder="Komentar" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" name="submit" type="submit">Kirim</button>
        </div>
      </div></form>
    </div>
  </div>
      <div class="row">
    <div class="col-md-12">

		
      </ul>
    </div>
  </div>
</nav>



	<div class="modal-footer">
	<a style="font-size: 10px; color: grey;"><center>Copyright © 2020 Yesaya Alehandro Silalahi</center></a>
	</div>
</body>
</html>
