<?php
require_once './PHP/php.formPembayaran.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>
<body style="padding: 50px;">
  <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
          <?php foreach ($errors as $error) { ?>
            <div><?php echo $error ?></div>
          <?php } ?>
        </div>
      <?php endif; ?>
  
      <h1>Form Pembayaran</h1>
      <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Produk</label>
                <br>
                <select name="produk" id="produk" class="form-control">
                  <option selected disabled>Pilih Produk</option>
                  <?php
                    foreach ($data_produk as $i => $product):
                    echo "<option value='".$product['id_produk']."'>".$product['nama_produk']." - Rp. ".number_format($product['harga_produk'])."</option>";
                    endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label>Nama Konsumen</label>
                <input type="text" step=".01" name="konsumen" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="number" step=".01" name="jumlah" class="form-control">
            </div>
<button type="submit" class="btn btn-primary" name="payment">Submit</button>
</form>
</body>
</html>
