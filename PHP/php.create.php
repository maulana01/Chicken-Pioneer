<?php
require_once '../CRUD/dbconfig.php';

if(isset($_POST['create']))
{
    $produk = $_POST['produk'];
    $harga  = $_POST['harga'];

    // file handler
    if($_FILES!=NULL){
        $file     = $_FILES['file']['name'];
        $file_temp= $_FILES['file']['tmp_name'];
    }else{
        $file=NULL;
        $file_temp=NULL;
    }

    move_uploaded_file($file_temp, 'img/'.$file); //upload file

    $user = new ADMIN($DB_con);
    $user->tambah_produk($produk, $harga, $file);

    $user->redirect('../admin/dashboard.php');
}

?>