<?php
include '../koneksi.php';

if(isset($_POST['submitADMIN'])){

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $lev = $_POST['levl'];
    $kab_kot = $_POST['kab-kot'];

    $tambah = mysqli_query($koneksi, "INSERT INTO user VALUE ('','$user','$pass','$lev','$kab_kot')");
    if ($tambah) {
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
}

?>