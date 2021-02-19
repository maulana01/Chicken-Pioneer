<?php
require_once '../PHP/php.dashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
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
      <h2 class="text-center">Data Produk</h2>
      <p>
        <a href="create.php" class="btn btn-success">Tambah Produk</a>
    </p>
      <table class="table">
      <thead>
        <tr>
          <th scope="col"><h2>Id</h2></th>
          <th scope="col"><h2>Foto</h2></th>
          <th scope="col"><h2>Nama Produk</h2></th>
          <th scope="col"><h2>Harga</h2></th>
          <th scope="col"><h2>Action</h2></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php foreach ($data_produk as $i => $product): ?>
          <td width="100px"><?php echo $i + 1 ?></td>
          <td width="150px"><img src="../<?php echo $product['foto'] ?>" alt="produk"></td>
          <td width="150px"><?php echo $product['nama_produk']; ?></td>
          <td width="150px"><?php echo $product['harga_produk']; ?></td>
          <td width="100px">
            <a href="updateProduk.php?id=<?php echo $product['id_produk'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
            <form style="display: inline-block;" action="../PHP/php.delete.php" method="post">
              <input type="hidden" name="id" value="<?php echo $product['id_produk'] ?>">
              <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      </table>
    </div>
  </body>
</html>
