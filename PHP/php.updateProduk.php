<?php
require_once '../CRUD/dbconfig.php';

$user = new ADMIN($DB_con);
if(isset($_GET['id'])){
    $id_produk = $_GET['id']; 
    $data_produk = $user->get_by_id_produk($id_produk);
}
else
{
    header('Location: ../admin/dashboard.php');
}

if(isset($_POST['update']))
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
    $user->edit_produk($produk, $harga, $file);
    
    $user->redirect('../admin/dashboard.php');
}


?>