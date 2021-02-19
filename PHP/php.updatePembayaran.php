<?php
require_once '../CRUD/dbconfig.php';

$user = new ADMIN($DB_con);
if(isset($_GET['id'])){
    $id_pembayaran = $_GET['id']; 
    $data_pembayaran = $user->get_by_id_pembayaran($id_pembayaran);
}
else
{
    header('Location: ../admin/pembayaran.php');
}

if(isset($_POST['update']))
{
    $status  = $_POST['status'];

    $user = new ADMIN($DB_con);
    $user->edit_status_pembayaran($status);
    $user->redirect('../admin/pembayaran.php');
}


?>