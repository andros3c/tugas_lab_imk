  <?php include ("session2.php"); ?>
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
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v12/NX1NravqaXESu9fFv7KuqiEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v12/SKK6Nusyv8QPNMtI4j9J2yEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v12/gFXtEMCp1m_YzxsBpKl68iEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v12/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215;
}
  /* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/UyBMtLsHKBKXelqf4x7VRQ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/1YwB1sO8YE1Lyjf12WNiUA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215;
}
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  
  </style>
</head>
<body id="utama" data-spy="scroll" data-target=".navbar" data-offset="50">
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

<br><br><br>
      <div class="col-md-4 col-md-offset-4">
        <div class="row">

          <!-- Mengambil Data dari database yang id-nya sama dengan id (hidden) yang dipilih di form sebelumnya -->

          <?php
          $id=$_POST['id'];
          $query = $db->prepare("SELECT * FROM akun WHERE id=$id");
          $query->execute();
          $result = $query;

          //Mengambil record dan diinisialisasikan ke dalam variabel $data, menjadi value untuk setiap isian form
          foreach ($result as $data) {
            ?>

        <form action="updateuser.php" method="post">
        <h3>
        <table id="daftar" width="100%">
          <tr>
            <th colspan="2" style="text-align: center"><h2>Update Akun</h2></th>
          </tr>
		  <tr><td>&nbsp;&nbsp;</td></tr>
          <tr>
            <input type="text" name="id" hidden value="<?php echo $data['id']; ?>">
            <td>Username</td><td><input type="text" name="pengguna" value="<?php echo $data['username']; ?>"></td>
          </tr>
		  <tr><td>&nbsp;&nbsp;</td></tr>
          <tr>
            <td>Password</td><td><input type="password" name="sandi" value="<?php echo $data['password']; ?>"></td>
          </tr>
		  <tr><td>&nbsp;&nbsp;</td></tr>
          <tr>
            <td>Nama</td><td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
          </tr>
		  <tr><td>&nbsp;&nbsp;</td></tr>
          <tr>
            <td>Email</td><td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
          </tr>
		  <tr><td>&nbsp;&nbsp;</td></tr>
          
          <?php
          }
          ?>
          <tr>
            <td>&nbsp;</td><td><button class="btn btn-primary btn-lg" type="submit" name="btnUbah">Simpan Perubahan</button></td>
          </tr>
        </table>
        </h3>
      </form><br>
	  <a href="user.php"><button class="btn btn-primary btn-lg">Kembali</button></a>
        </table>
      </div>
      </div>

</body>
</html>
