<?php include"includes/modal_login.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>PUSTA-Q</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>  
  <style>
  /* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v12/rBHvpRWBkgyW99dXT88n7yEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 5px;      
      font-size: 20px;
      color: #111;
  }
  h1{
    color: red;
  }
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
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
<br><br><br>
    <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <div id="post">
	  <h1>ERROR !!! </h1>
    <br>
    <h5>Session Not Found !</h5>

	  </div>
	  </div>
	  </div>
	  
<br>
<br>


  <!-- Membuat Postingan -->
    <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <div id="post">
        <div><strong><h3>Untuk mengakses, Silahkan login terlebih dahulu.<br><br><a href="index.php">Klik Di sini</a> untuk Masuk/Daftar ke Akses Area</h3></strong></div>

    </div>
  </div>
</body>
</html>

