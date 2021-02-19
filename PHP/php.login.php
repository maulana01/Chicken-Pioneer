<?php
require_once '../CRUD/dbconfig.php';

if($user->is_loggedin())
{
 $user->redirect('../admin/dashboard.php');
}

if(isset($_POST['submit']))
{
 $umail = $_POST['email'];
 $upass = $_POST['password'];
  if($user->login_admin($umail,$upass))
 {
  $user->redirect('../admin/dashboard.php');
 }
 else
 {
  $error = "Wrong Details !";
 }
}
?>