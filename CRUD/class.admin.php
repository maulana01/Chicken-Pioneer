<?php
class ADMIN
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
 
    public function login_admin($umail,$upass)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM admin WHERE email=:umail LIMIT 1");
          $stmt->execute(array(':umail'=>$umail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if($userRow['password'] == $_POST['password'])
             {
                $_SESSION['admin_session'] = $userRow['email'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['admin_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function admin_logout()
   {
        //session_destroy();
        unset($_SESSION['admin_session']);
        return true;
   }

   public function get_produk()
   {
      try
         {
            $query = $this->db->prepare("SELECT * FROM produk");
            $query->execute();
            $data = $query->fetchAll();
            return $data;
         }
         catch(PDOException $e)
         {
             echo $e->getMessage();
         }
   }

   public function get_konsumen()
   {
      try
         {
            $query = $this->db->prepare("SELECT * FROM pembayaran");
            $query->execute();
            $data = $query->fetchAll();
            return $data;
         }
         catch(PDOException $e)
         {
             echo $e->getMessage();
         }
   }

   public function get_by_id_produk($id_produk){
      $query = $this->db->prepare("SELECT * FROM produk where id_produk=:id_produk");
      $query->bindValue(":id_produk", $id_produk);
      $query->execute();
      return $query->fetch();
  }

   public function get_by_id_pembayaran($id_pembayaran){
      $query = $this->db->prepare("SELECT * FROM pembayaran where id_pembayaran=:id_pembayaran");
      $query->bindValue(":id_pembayaran", $id_pembayaran);
      $query->execute();
      return $query->fetch();
  }

   public function tambah_produk($nama, $produk, $file)
   {
      try
      {
          $query = $this->db->prepare("INSERT INTO produk (nama_produk, harga_produk, foto) VALUES ('$nama', '$produk','img/".$file."')");
          $query->execute();
          return $query;
      }
      catch(PDOException $e)
      {
          echo $e->getMessage();
      }
   }

   public function input_pembayaran($produk, $konsumen, $alamat, $jumlah, $total, $status)
   {
      try
      {
          $query = $this->db->prepare("INSERT INTO pembayaran (nama_produk, nama_konsumen, alamat_konsumen, jumlah_beli, total_bayar, status) VALUES ('$produk', '$konsumen', '$alamat', '$jumlah', '$total', '$status')");
          $query->execute();
          return $query;
      }
      catch(PDOException $e)
      {
          echo $e->getMessage();
      }
   }

   public function edit_produk($nama, $produk, $file)
   {
      try
      {

         $id = $_GET['id'] ?? null;

         if (!$id) {
             header('Location: dashboard.php');
             exit;
         }
         if($_FILES["file"]["name"]) {
          $query = $this->db->prepare("UPDATE produk SET nama_produk='".$nama."', 
                                                         harga_produk='".$produk."',
                                                         foto='img/".$file."'  
                                                         WHERE id_produk=:id_produk");
         } else {
            $query = $this->db->prepare("UPDATE produk SET nama_produk='".$nama."', 
            harga_produk='".$produk."'  
            WHERE id_produk=:id_produk");  
         }
          $query->bindValue(':id_produk', $id);
          $query->execute();
          return $query;
         }
         catch(PDOException $e)
         {
          echo $e->getMessage();
      }
   }

   public function edit_status_pembayaran($status)
   {
      try
      {

         $id = $_GET['id'] ?? null;

         if (!$id) {
             header('Location: pembayaran.php');
             exit;
         }
          $query = $this->db->prepare("UPDATE pembayaran SET status='".$status."'
                                                         WHERE id_pembayaran=:id_pembayaran");
          $query->bindValue(':id_pembayaran', $id);
          $query->execute();
          return $query;
         }
         catch(PDOException $e)
         {
          echo $e->getMessage();
      }
   }

   public function delete()
    {
      try
         {
            $id = $_POST['id'] ?? null;

            if (!$id) {
               header('Location: index.php');
               exit;
               }
            $query = $this->db->prepare("DELETE FROM produk WHERE id_produk=:id_produk");
            $query->bindValue(':id_produk', $id);
            $query->execute();
            return $query;
          }
        catch(PDOException $e)
         {
            echo $e->getMessage();
         }
    }
   }
?>