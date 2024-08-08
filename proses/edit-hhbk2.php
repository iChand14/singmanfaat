<?php

include '../koneksi.php';

$id = @$_GET['id'];
$cdk = $_POST["cdk"];
$kelompok = $_POST["nama_kelompok_tani_instasi"];
$jumlah = $_POST["jumblah_anggota_tenaga_kerja"];
$alamat = $_POST["blok_alamat"];
$desa = $_POST["desa"];
$kecamatan = $_POST["kecamatan"];
$kabupaten = $_POST["kabupaten"];
$hhbk = $_POST["hhbk"];
$satuan = $_POST["satuan"];
$link_map = $_POST["link_map"];

$edit = mysqli_query($koneksi,"UPDATE hhbk
SET
cdk = '$cdk',
nama_kelompok_tani_instasi = '$kelompok',
jumblah_anggota_tenaga_kerja = '$jumlah',
blok_alamat = '$alamat',
desa  = '$desa',
kecamatan = '$kecamatan',
kabupaten = '$kabupaten',
hhbk = '$hhbk',
satuan = '$satuan',
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