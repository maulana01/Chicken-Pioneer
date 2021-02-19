<?php
require_once '../CRUD/dbconfig.php';
if(!$user->is_loggedin())
{
    $user->redirect('../admin/index.php');
}

if(isset($_GET['logout']))
{
    $user->admin_logout();
    $user->redirect('../admin/index.php');
}

$data = new ADMIN($DB_con);
$data_produk = $data->get_produk();
?>