<?php
require_once 'dbconfig.php';

if($user->is_loggedin())
{
 $user->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
 $uname = $_POST['user_name'];
 $umail = $_POST['user_email'];
 $upass = $_POST['user_password'];
  if($user->login($uname,$umail,$upass))
 {
  $user->redirect('home.php');
 }
 else
 {
  $error = "Wrong Details !";
 }
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login : PBO AING</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>
<div class="container">
     <div class="form-container">
        <form method="post">
            <h2>Sign in.</h2><hr />
            <?php
            if(isset($error))
            {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                  </div>
                  <?php
            }
            ?>
            <div class="form-group">
             <input type="text" class="form-control" name="user_email" placeholder="Username or E mail ID" required />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="user_password" placeholder="Your Password" required />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" name="btn-login" class="btn btn-block btn-primary">
                 <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
                </button>
            </div>
            <br />
            <label>Don't have account yet ! <a href="sign-up.php">Sign Up</a></label>
        </form>
       </div>
</div>

</body>
</html>