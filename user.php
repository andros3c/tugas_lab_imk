<?php include('session2.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Utama</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</head>
  
<style>
*{margin:0px auto;}  /*untuk reset css*/
#container{
    position:relative;
}
#header{
  background-color:#A7C585; 
}
h3,h2 {color: white;}
#footer{
    height:50px;
    line-height:50px;
    background:#a9a9a9; /*warna darkgrey*/
    color:#fff;
 
    position:fix-bottom;
    bottom:0px;
 
    width:100%; /*biar memenuhi layar*/
}
.col-sm-3{
  font-family:Gisha;
}
#header{
  font-family:Gisha;
}
.bt-introtext{
  font-family:Gisha;
  color:white;
}

</style>

<body>

  <!--Navigasi-->
<nav class="navbar navbar-default  ">
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
    
        


          

<li><a href="logout.php">LOGOUT</a></li>

    
      </ul>
    </div>
  </div>
</nav>


<div id="header">
  <h3 align="center">Hello there!</h3>
  <h2 align="center">Selamat Datang <?php echo $login_session ?> di Area Anggota Perpustakaan</h2>
  </div>
  
  
      
<br>
<div>
  <?php
        $username=$_SESSION['login_user'];
        
          $query = $db->prepare("SELECT * FROM akun WHERE username='$username'");
          $query->execute();
          $result = $query;
          echo "<table class='table table-bordered table-hover' width='100%'>";

          while($row=$result->fetch(PDO::FETCH_ASSOC)){
              echo "<tr>";
             
              echo "<td>Username</td>";
              echo "<td>".$row['username']."</td></tr>";

              echo "<tr>";
              echo "<td>Nama</td>";
              echo "<td>".$row['nama']."</td></tr>";

              echo "<tr>";
              echo "<td>Email</td>";
              echo "<td>".$row['email']."</td></tr>";

              echo "<tr>";
              echo "<td></td>";
              echo "<td><form method='POST' action='ubahuser.php'><input hidden type='text' name='id' value=".$row['id']."><button type='submit' name='btnUpdate' class='btn btn-info'>Update</button></form></tr>";


          }
          echo "</table>";
          
          echo "</table>";


        
         ?>

</div>
  

</body>
</html>
