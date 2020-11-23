<?php include('session.php'); ?>
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
  <h2 align="center">Selamat Datang <?php echo $login_session ?> di Area Admin</h2>
  </div>
  
  
  <!-- Modal tombol search -->
<div  id="cari" class="modal" role="dialog">
<div class="modal-dialog modal-sm">
   <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cari</h4>
        </div>
        <div class="modal-body">
		<form action="#" method="post">
		<div class="input-group">
		<input type="text" class="form-control" style="height:40px;">
		<div class="input-group-btn">
		<button class="btn btn-default" style="height:40px;">
		<i class="glyphicon glyphicon-search"></b></i></button></div></div>	
		</div></div></div></div>

	
	
    
              <center>  <button type="submit" name="daftarakun" class="btn btn-primary">Daftar Akun</button></center>
              
<br>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div id="post">

        <!-- Ketika tombol Daftar Akun diklik maka akan ditampilkan data Akun dan Tindakan terhadap data tersebut   -->
        <?php
        if(isset($_POST['daftarakun'])){
          $query = $db->prepare("SELECT * FROM akun");
          $query->execute();
          $result = $query;

          echo "<table class='table table-bordered table-hover'>";
          echo "<tr><th>Username</th><th>Password</th><th>Nama</th><th>Email</th><th colspan='2' class='text-center'>Tindakan</th>";
          foreach($result as $data)
          {
            echo "<tr><td>".$data['username']."</td><td>".$data['password']."</td><td>".$data['nama']."</td><td>".$data['email']."</td>";
            echo "<td><form method='POST' action='ubah.php'><input hidden type='text' name='id' value=".$data['id']."><button type='submit' name='btnUpdate' class='btn btn-info'>Update</button></form></td>";
            echo "<td><form onsubmit=\"return confirm ('Anda Yakin Mau Menghapus Data?');\" method='POST'><input hidden name='id' type='text' value=$data[id]><button type='submit' name='btnHapus' class='btn btn-danger'>Delete</button></form></td>";
            echo "</tr>";
          }
          echo "</table>";
        }
         ?>

         <!-- Tindakan setelah meng-klik tombol Hapus -->
         <?php
         if(isset($_POST['btnHapus'])){
           include ('includes/config.php');

           //inisiasi variabel untuk menampung isian id
           $id=$_POST['id'];

           // sql untuk menghapus record
           $sql = "DELETE FROM akun WHERE id=$id";

           $db->exec($sql);
           echo "<p class='text-center alert alert-success'><b>Telah Berhasil dihapus</b></p>";
         }
         ?>

         
	
</body>
</html>
