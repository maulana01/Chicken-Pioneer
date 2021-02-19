<?php
include_once './CRUD/dbconfig.php';

$data = new ADMIN($DB_con);
$data_produk = $data->get_produk();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chicken Pioneer</title>
    <link rel="stylesheet" href="assets/css/landingPage.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav>
        <div id="navbar">
          <div class="navbar-logo">
            <a href="#" id="logo">ChiPio</a>
          </div>
          <div class="navbar-link active">
            <ul id="sidebar">
              <a href="#"><li>Beranda</li></a>
              <a href="#tentang"><li>Tentang</li></a>
              <a href="#produk"><li>Produk</li></a>
              <a href="#tim"><li>Team</li></a>
              <a href="#kontak"><li>Kontak</li></a>
              <a href="javascript:void(0)" onclick="closeNav()"><li class="closebtn">&times;</li></a>
            </ul>
            <button class="openbtn" onclick="openNav()">&#9776</button>
          </div>
        </div>
      </nav>
      <div class="header-page">
        <img class="header-img" src="./img/header.png" alt="" />
        <div class="container">
          <h1>Platform jual ayam potong termurah di Kota Bandung</h1>
          <h3>Berkualitas Segar, Murah, Siap Antar</h3>
          <a href="#" class="btn-shopping">Belanja Sekarang!</a>
        </div>
      </div>
    </header>

    <main>
      <section class="about-chipio active" id="tentang">
        <div class="about-chipio-title">
          <span><h1>TENTANG</h1></span>
          <hr />
          <br />
        </div>
        <div class="about-chipio-containers">
          <div class="card-layout">
            <img src="./img/dada.png" alt="" class="card-img" />
          </div>
          <div class="card-layout">
            <p>
              Chicken pioneer yang bertujuan membantu
Penjual untuk menjual daging segar atau Konsumen yang ingin mengkonsumsi daging ayam yang berkualitas segar dan lebih murah
            </p>
            <p>
Dari ayam broiler pilihan, daging segar di potong langsung dan halal. Siap di kirim ke tempat anda.
            </p>
            <p>
              Segera pesan produk ayam potong kami!
            </p>
          </div>
        </div>
      </section>
      <section class="about-products">
        <div class="about-title">
          <span><h1>KEUNGGULAN</h1></span>
          <hr />
          <br />
        </div>
        <div class="about-products-containers">
          <div class="card-layout">
            <img src="./img/halal.png" alt="" class="about-icon" />
            <h3>100% Halal</h3>
            <h4>
              Sama sekali tidak menggunakan bahan pengawet ataupun obat-obatan
              yang dapat mengganggu kesehatan.
            </h4>
          </div>
          <div class="card-layout">
            <img src="./img/mudah-dimasak.png" alt="" class="about-icon" />
            <h3>Mudah dimasak</h3>
            <h4>
              Tekstur daging lembut, dapat dimasak sesuai selera. Rebus, goreng,
              maupun dibakar.
            </h4>
          </div>
          <div class="card-layout">
            <img src="./img/higenis.png" alt="" class="about-icon" />
            <h3>Higenis</h3>
            <h4>
              Daging ayam bersih berkualitas, dapat dikonsumsi oleh berbagai
              kalangan konsumen.
            </h4>
          </div>
          <div class="card-layout">
            <img src="./img/pengantaran-cepat.png" alt="" class="about-icon" />
            <h3>Pengantaran cepat</h3>
            <h4>
              Pengiriman sesuai standar packaging daging dan cepat sampai
              dikonsumen.
            </h4>
          </div>
        </div>
      </section>
      <section class="featured-products active" id="produk">
        <div class="featured-containers">
          <span><h2>PRODUK KAMI</h2></span>
          <hr />
        </div>
        <div class="featured-card-containers">
        <?php foreach ($data_produk as $i => $product): ?>
          <div class="card-layout">
            <img src="<?php echo $product['foto'] ?>" alt="" class="card-img" />
            <h4 class="card-title"><?php echo $product['nama_produk']; ?></h4>
            <p class="card-price">Rp. <?php echo $product['harga_produk']; ?>/kg</p>
            <div class="order-layout">
              <a href="https://wa.me/6287720285080?text=Saya%20ingin%20memesan%20produk%20ayam%20ini%20segera.">Beli</a>
            </div>
          </div>
          <?php endforeach; ?>
          <!-- <div class="card-layout">
            <img src="/img/Filet Paha.jpeg" alt="" class="card-img" />
            <h4 class="card-title">Filet Paha</h4>
            <p class="card-price">Rp. 80.000 / kg</p>
            <div class="order-layout">
              <a href="#">Beli</a>
            </div>
          </div>
          <div class="card-layout">
            <img src="/img/Paha.jpeg" alt="" class="card-img" />
            <h4 class="card-title">Paha</h4>
            <p class="card-price">Rp. 80.000 / kg</p>
            <div class="order-layout">
              <a href="#">Beli</a>
            </div>
          </div>
          <div class="card-layout">
            <img src="/img/Sayap.jpeg" alt="" class="card-img" />
            <h4 class="card-title">Sayap</h4>
            <p class="card-price">Rp. 80.000 / kg</p>
            <div class="order-layout">
              <a href="#">Beli</a>
            </div>
          </div>
          <div class="card-layout">
            <img src="/img/Kepala.jpeg" alt="" class="card-img" />
            <h4 class="card-title">Kepala</h4>
            <p class="card-price">Rp. 80.000 / kg</p>
            <div class="order-layout">
              <a href="#">Beli</a>
            </div>
          </div>
          <div class="card-layout">
            <img src="/img/Kulit.jpeg" alt="" class="card-img" />
            <h4 class="card-title">Kulit</h4>
            <p class="card-price">Rp. 80.000 / kg</p>
            <div class="order-layout">
              <a href="#">Beli</a>
            </div>
          </div>
          <div class="card-layout">
            <img src="/img/Usus.jpeg" alt="" class="card-img" />
            <h4 class="card-title">Usus</h4>
            <p class="card-price">Rp. 80.000 / kg</p>
            <div class="order-layout">
              <a href="#">Beli</a>
            </div>
          </div>
          <div class="card-layout">
            <img src="/img/Ati & Ampela.jpeg" alt="" class="card-img" />
            <h4 class="card-title">Ati Ampela</h4>
            <p class="card-price">Rp. 80.000 / kg</p>
            <div class="order-layout">
              <a href="#">Beli</a>
            </div>
          </div> -->
        </div>
      </section>
      <!-- Ini nanti mau di kasih efek parallax, buat pemisah aja -->
      <!-- <section class="break-section">
            <div class="break-img">
                <h1>GAMBAR BUAT EFEK PARALLAX NANTI</h1>
                <img src="" alt="">
            </div>
        </section> -->
      <!-- ======================================================== -->
      <section class="team active" id="tim">
        <div class="team-title-containers">
          <span>
            <h2>TEAM</h2>
            <hr />
          </span>
        </div>
        <div class="team-card-containers">
          <div class="card-layout">
            <img src="./img/Imam.png" alt="" class="card-img" />
            <h4 class="card-name">Imam</h4>
            <p class="card-position">Founder</p>
            <div class="icon-contact">
              <a href="https://web.facebook.com/akmal.ramli.58"
                ><i><img class="fb" src="./img/facebook.png" alt="" /></i
              ></a>
              <span></span>
              <a href="https://www.instagram.com/maul.mam/"
                ><i><img class="ig" src="./img/instagram.png" alt="" /></i
              ></a>
            </div>
          </div>
          <div class="card-layout">
            <img src="./img/Rizal.png" alt="" class="card-img" />
            <h4 class="card-name">Rizal</h4>
            <p class="card-position">Co-Founder</p>
            <div class="icon-contact">
              <a href="https://web.facebook.com/rizalshmbg/"
                ><i><img class="fb" src="./img/facebook.png" alt="" /></i
              ></a>
              <span></span>
              <a href="https://www.instagram.com/rizal.shmbg/"
                ><i><img class="ig" src="./img/instagram.png" alt="" /></i
              ></a>
            </div>
          </div>
          <div class="card-layout">
            <img src="./img/Adrian.png" alt="" class="card-img" />
            <h4 class="card-name">Adrian</h4>
            <p class="card-position">Co-Founder</p>
            <div class="icon-contact">
              <a href="https://web.facebook.com/SVCAdrian"
                ><i><img class="fb" src="./img/facebook.png" alt="" /></i
              ></a>
              <span></span>
              <a href="https://www.instagram.com/maidiyangsa/"
                ><i><img class="ig" src="./img/instagram.png" alt="" /></i
              ></a>
            </div>
          </div>
        </div>
      </section>
      <section class="contact-containers active" id="kontak">
        <div class="contact-title-containers">
          <span>
            <h2>KONTAK</h2>
            <hr />
          </span>
        </div>
        <div class="contact-card-containers">
          <div class="card-layout">
            <img src="./img/phone.png" alt="" class="card-img" />
            <h4>Telp : +62 821 2735 8712</h4>
            <h4>Whatsapp : +62 877 2028 5080</h4>
            <h4>Senin - Minggu (8.00 - 22.00)</h4>
          </div>
          <div class="card-layout">
            <img src="./img/envelope.png" alt="" class="card-img" />
            <h4>Email : chicken_pioneer@gmail.com</h4>
            <h4>Web : www.chickenpioneer.com</h4>
          </div>
          <div class="card-layout">
            <img src="./img/placeholder.png" alt="" class="card-img" />
            <h4>Alamat : Jl. Dipatiukur no 86 A3 Bandung, Jawa Barat</h4>
          </div>
        </div>
      </section>
      <footer>
        <div class="footer-contact-containers">
          <div class="logo-icon">
            <span>
              <h5>Chicken</h5>
            </span>
            <span>
              <h5>Pioneer</h5>
            </span>
            <div class="address">
              <p>chickenpioneer@gmail.com</p>
              <br />
              <p>Jl. Dipatiukur 86 A3 40132</p>
              <br />
              <p>Bandung, Jawa Barat</p>
            </div>
          </div>
          <div class="social-media">
            <a href=""><span>Facebook</span></a>
            <a href="https://www.instagram.com/chickenpionner/?hl=id"
              ><span>Instagram</span></a
            >
          </div>
        </div>
        <div class="copyright">
          <span>&copy; Chicken </span>
          <span>Pioneer</span>
          <span>2020. All Rights Reserved | Powered by Chicken </span>
          <span>Pioneer</span>
        </div>
      </footer>
    </main>

    <script src="./assets/js/script.js"></script>
  </body>
</html>
