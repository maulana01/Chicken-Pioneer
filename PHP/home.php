<?php
include_once 'dbconfig.php';

if(!$user->is_loggedin())
{
    $user->redirect('index.php');
}

if(isset($_GET['logout']))
{
    $user->logout();
    $user->redirect('index.php');
}

$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_email=:user_email");
$stmt->execute(array(":user_email"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>welcome - <?php echo $userRow['user_email'];?></title>
</head>

<body>

<div class="header">
 <div class="left">
    </div>
    <div class="right">
     <label>
         <a href="home.php?logout=true"> <i class="glyphicon glyphicon-log-out"></i> logout</a>
     </label>    
    </div>
</div>
<div class="content">
welcome gan
</div>
</body>
</html>