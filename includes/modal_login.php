<?php
session_start();
include("includes/config.php");
if(isset($_POST['btnlogin']))
{
  $admin = $db->prepare('SELECT * FROM akun WHERE username = :username and password = :password');
  $admin->execute(array(
                ':username' => $_POST['pengguna'],
                ':password' => md5($_POST['sandi'])
                ));
  $row = $admin->fetch(PDO::FETCH_ASSOC);

  if(empty($row['username'])){
    echo "<script>alert('Akun Tidak Ada');</script>";
  }elseif ($row['level']==1) {
    $_SESSION['login_user'] = $_POST['pengguna'];
    header("location:admin.php");
  } elseif ($row['level']>1) {
    $_SESSION['login_user'] = $_POST['pengguna'];
	header("location:user.php");
  }
}
?>

		  <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog modal-sm">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title text-center">Masuk</h4>
       </div>
       <div class="modal-body">
         <form action="" method="POST">
           <table id="daftar">
             <tr>
               <td>Username</td>
               <td><input type="text" name="pengguna"></td>
             </tr>
             <tr>
               <td>Password</td>
               <td><input type="password" name="sandi"></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td><button class="btn btn-info" type="submit" name="btnlogin">Masuk</button><td>
             </tr>
           </table>
         </form>
       </div>
       <p class="text-center">Belum punya akun? Daftar <a href="daftar.php"><b>disini</b></a>!</p>
       
       </div> -->
     </div>
   </div>
 </div>

  
