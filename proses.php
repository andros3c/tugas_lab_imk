<?php
	session_start();
	include'includes/koneksi.php';


          $user = $_POST['pengguna'];
          $pass = md5($_POST['sandi']);
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $level = 2;
		  
		  
		  $prosescek = mysqli_query($koneksi,"SELECT * FROM akun WHERE username='$user'");
		  $cek = mysqli_num_rows($prosescek);
		  
		  $cekemail = mysqli_query($koneksi,"SELECT * FROM akun WHERE email='$email'");
		  $ceklagi = mysqli_num_rows($cekemail);
		   
            if($cek > 0)
			{
			  echo "<script>
			  alert('Username Anda sudah terdaftar! Silahkan mendaftar dengan Username yang berbeda.');
			  history.go(-1)
			  </script>";
			}
			else if($ceklagi > 0)
			{
			  echo "<script>
			  alert('Email Anda sudah terdaftar! Silahkan mendaftar dengan Email yang berbeda.');
			  history.go(-1)
			  </script>";
			}
			else
			{
			$akun = mysqli_query($koneksi,"INSERT INTO akun (username,password,nama,email,level) VALUES ('$user','$pass','$nama','$email','$level')");
		    $out = mysqli_fetch_array($akun);
			
			echo "<script language='javascript'>
			alert('Registrasi Berhasil! Silahkan masuk dengan akun yang telah Anda daftar.');
			window.location.replace('index.php');
			</script>";
			}
		  

          ?>