<?php
require_once './CRUD/dbconfig.php';
$user = new ADMIN($DB_con);
$data_produk = $user->get_produk();
if(isset($_POST['payment']))
{
    
   
    $data_produk_id = $user->get_by_id_produk($_POST['produk']);
    
    $konsumen  = $_POST['konsumen'];
    $alamat  = $_POST['alamat'];
    $jumlah  = $_POST['jumlah'];
    $total  = $_POST['jumlah'] * $data_produk_id['harga_produk'];

    $user->input_pembayaran($data_produk_id['nama_produk'], $konsumen, $alamat, $jumlah, $total, 'Pending');

    $user->redirect('../thanks.php');
}


?>