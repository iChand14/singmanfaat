<?php

include '../koneksi.php';

$id = @$_GET['id'];
$cdk = $_POST["cdk"];
$kelompok = $_POST["kelompok"];
$jumlah = $_POST["jumlah"];
$alamat = $_POST["alamat"];
$desa = $_POST["desa"];
$kecamatan = $_POST["kecamatan"];
$kabupaten = $_POST["kabupaten"];
$luas = $_POST["luas"];
$tanaman = $_POST["tanaman"];
$jenis = $_POST["jenis"];
$link_map = $_POST["link-map"];

$edit = mysqli_query($koneksi,"UPDATE hhhr
SET
cdk = '$cdk',
nama_kelompok_tani = '$kelompok',
jumlah_anggota = '$jumlah',
alamat = '$alamat',
desa  = '$desa',
kecamatan = '$kecamatan',
kabupaten = '$kabupaten',
luas = '$luas',
tanaman = '$tanaman',
jenis_dari_tanaman = '$jenis',
link_map = '$link_map'
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