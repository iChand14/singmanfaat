<?php

include '../koneksi.php';

$id = @$_GET['id'];
$username = $_POST['user'];
$password = $_POST['passw'];
$level = $_POST['levl'];
$kabkot = $_POST['kab-kot'];

$edit = mysqli_query($koneksi,"UPDATE user
SET
username = '$username',
pass = '$password',
lvl = '$level',
kabupaten_kota = '$kabkot'
WHERE id='$id'");

if ($edit) {
    echo "
    <script>
        alert('Data berhasil diubah');
        document.location.href = '../login/home/super-admin/index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal diubah');
        document.location.href = '../login/home/super-admin/index.php';
    </script>
    ";
}
?>