<?php
require_once '../PHP/php.updateProduk.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>
<body>
<div class="sidebar">
      <header>Chicken Pioneer<br />Admin Dashboard</header>
      <ul class="ul-sidebar">
        <li><span class="iconify" data-inline="false" data-icon="mdi:database-plus-outline" style="color: #FFF;"></span><a href="dashboard.php">Dashboard</a></li>
        <li><span class="iconify" data-inline="false" data-icon="cil:cart" style="color: #FFF;"></span><a href="pembayaran.php">Pembayaran</a></li>
        <li><span class="iconify" data-inline="false" data-icon="mdi:logout-variant" style="color: #FFF;"></span><a href="dashboard.php?logout=true">Logout</a></li>
      </ul>
    </div>
    <div class="main">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Gambar Produk</label>
                <br>
                <img src="../<?php echo $data_produk['foto'] ?>" alt="" class="update-image">
                <br>
                <br>
                <input type="file" name="file">
            </div>
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="type" name="produk" class="form-control" value="<?php echo $data_produk['nama_produk'] ?>">
            </div>
            <div class="form-group">
                <label>Harga Produk</label>
                <input type="number" step=".01" name="harga" class="form-control" value="<?php echo $data_produk['harga_produk'] ?>">
            </div>
<button type="submit" class="btn btn-primary" name="update">Submit</button>
</form>
    </div>
</body>
</html>