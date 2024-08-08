<?php 
include "../koneksi.php";

if(isset($_POST['submitBERITA']) && isset($_FILES['gambar'])){

   $img_name = $_FILES['gambar']['name'];
   $tmp_name = $_FILES['gambar']['tmp_name'];
   $error = $_FILES['gambar']['error'];
   $judul = $_POST["judul"];
   $penerbit = $_POST["penerbit"];
   $isi = $_POST["isi"];
   $tanggal = date("Y-m-d");

   if ($error === 0) {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png");

      if (in_array($img_ex_lc, $allowed_exs)){
         $new_image_name = uniqid("IMG-", true).'.'.$img_ex_lc;
         $img_upl_path = '../img/foto-artikel/'.$new_image_name;
         move_uploaded_file($tmp_name, $img_upl_path);

         $query = mysqli_query($koneksi, "INSERT INTO artikel VALUES ('','$judul', '$penerbit', '$isi', '$new_image_name','$tanggal')");
         
         echo "
                <script>
                    alert('data berhasil di tambahkan');
                    document.location.href = '../login/home/super-admin/index.php';
                </script>
          ";

      } else {
         echo "
                <script>
                    alert('data gagal di tambahkan');
                    document.location.href = '../login/home/super-admin/index.php';
                </script>
          ";
      }
   } else {
      echo "
                <script>
                    alert('error');
                    document.location.href = '../login/home/super-admin/index.php';
                </script>
          ";
   }
}
?>