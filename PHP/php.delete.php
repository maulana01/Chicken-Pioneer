<?php 
require_once '../CRUD/dbconfig.php';

$user = new ADMIN($DB_con);
$user->delete();

$user->redirect('../admin/dashboard.php');

?>