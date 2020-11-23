<?php
include ("includes/config.php");
session_start();
$user_check=$_SESSION['login_user'];
$admin = $db->prepare("SELECT * FROM akun WHERE username = :username AND level='2'");
$admin->execute(array(
                  ':username' => $user_check
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);

$login_session=$row['nama'];
if(!isset($login_session))
{
header("Location:error.php");
}
?>