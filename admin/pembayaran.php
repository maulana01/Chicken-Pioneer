<?php
require_once '../PHP/php.pembayaran.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pembayaran</title>
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
    <h2 class="text-center">History Pembayaran</h2>
    <table class="table">
      <thead class="text-center">
        <tr>
          <th scope="col"><h5>Id</h5></th>
          <th scope="col"><h5>Nama Produk</h5></th>
          <th scope="col"><h5>Nama Konsumen</h5></th>
          <th scope="col"><h5>Alamat</h5></th>
          <th scope="col"><h5>Jumlah Beli</h5></th>
          <th scope="col"><h5>Total Bayar</h5></th>
          <th scope="col"><h5>Status</h5></th>
          <th scope="col"><h5>Action</h5></th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <?php foreach ($data_konsumen as $i => $konsumen): ?>
          <td width="100px"><?php echo $i + 1 ?></td>
          <td width="150px"><?php echo $konsumen['nama_produk']; ?></td>
          <td width="150px"><?php echo $konsumen['nama_konsumen']; ?></td>
          <td width="150px"><?php echo $konsumen['alamat_konsumen']; ?></td>
          <td width="150px"><?php echo $konsumen['jumlah_beli']; ?></td>
          <td width="150px">Rp. <?php echo number_format($konsumen['total_bayar']); ?></td>
          <td width="150px"><?php echo $konsumen['status']; ?></td>
          <td width="100px">
            <a style="width: 120px;" href="updatePembayaran.php?id=<?php echo $konsumen['id_pembayaran'] ?>" class="btn btn-sm btn-outline-primary">Update Status</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      </table>
    </div>
  </body>
</html>
