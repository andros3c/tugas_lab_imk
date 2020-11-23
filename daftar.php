<?php include"includes/modal_login.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>MEDKUY!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


<script type="text/javascript" src="js/jquery.validate.js"></script>  <!-- Script Jquery untuk Validasi Form -->
  <script type="text/javascript">
  $(document).ready(function(){
      $('#frmDaftar').validate({
        rules: {
          pengguna: {
            minlength:8,
            maxlength:20
          },
          sandi: {
            minlength:8,
            maxlength:20
          },
          nama: {
            minlength:3,
            maxlength:20
          },
          email: {
			minlength:11,
            email: true
          }
        },
        messages: {
          pengguna: {
            required: "Username harus diisi",
            minlength: "Username minimal 8 karakter",
            maxlength: "Username maximal 20 karakter"
          },
		  sandi: {
            required: "Sandi harus diisi",
            minlength: "Sandi minimal 8 karakter",
            maxlength: "Sandi maximal 20 karakter"
          },
		  nama: {
            required: "Nama harus diisi",
            minlength: "Nama minimal 3 karakter",
            maxlength: "Nama maximal 20 karakter"
          },
          email: {
            required: "Email harus diisi",
			minlength: "Format Email tidak sesuai",
            email: "Format Email tidak sesuai"
          }
        }
      });
  });

  </script>
  
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
  
  footer {
	  width:100%;
      padding: 15px;
	  border-top: 1px solid #e5e5e5;
      position: fixed;
      bottom: 0;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
 
  </style>
</head>
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
<br><br><br>
      <div class="col-md-4 col-md-offset-4">
        <div class="row ">


        <form action="proses.php" method="post" id="frmDaftar">
        <h3>
        <table id="daftar" width="100%">
          <tr>
            <h2 align="center"><h2>Registrasi Akun</h2></th>
          </tr>
		  <tr><td>&nbsp;&nbsp;</td></tr>
          <tr>
            <td>Username</td><td><input type="text" name="pengguna" maxlength="20" required></td>
          </tr>
		  <tr><td>&nbsp;&nbsp;</td></tr>
          <tr>
            <td>Password</td><td><input type="password" name="sandi" maxlength="32" required></td>
          </tr>
		  <tr><td>&nbsp;&nbsp;</td></tr>
          <tr>
            <td>Nama</td><td><input type="text" name="nama" maxlength="30" required></td>
          </tr>
		  <tr><td>&nbsp;&nbsp;</td></tr>
          <tr>
            <td>Email</td><td><input type="text" name="email" maxlength="30" required></td>
          </tr>
		  <tr><td>&nbsp;&nbsp;</td></tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;</td></tr><tr><td><button class="btn btn-primary btn-lg" type="submit" name="submit">Daftar</button></td>
          </tr>
        </table>
        </h3>
      </form>

      <!-- Rules Jquery untuk Validasi Form -->

	  
	  
	  
	  
      </div>
      </div>
	  <br>
	<footer>
	<a style="font-size: 10px; color: grey;"><center>Copyright © 2020 Yesaya Alehandro Silalahi</center></a>
	</footer>
</body>
</html>
