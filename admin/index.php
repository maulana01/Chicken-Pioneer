<?php
require_once '../PHP/php.login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <title>Admin Login</title>
  <link rel="stylesheet" href="../assets/css/admin.css">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="rectangle">
    <div class="rectangle2"></div>
    <div class="triangle">
      <img src="../img/header.png" alt="" class="header">
    </div>
    <h2 class="chicken">Chicken Pioneer</h2>
    <h2 class="admin">Admin Dashboard</h2>
    <?php
        if(isset($error))
      {
    ?>
    <div class="alert alert-danger">
      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
    </div>
    <?php
      }
    ?>
  </div>
  <div class="form">
    <h1>Admin</h1>
    <form method="post">
      <label for="email">Email</label><br>
      <input type="email" name="email" class="form-input"><br>
      <label for="password">Password</label><br>
      <input type="password" name="password" id="password" class="form-input"><br>
      <input type="submit" name="submit" class="btn-login">
    </form>
  </div>
</body>
</html>