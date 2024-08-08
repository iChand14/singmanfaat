<?php

include '../koneksi.php';

$id = @$_GET['id'];
$cdk = $_POST["cdk"];
$pengelola = $_POST["pengelola"];
$anggota = $_POST["anggota"];
$namalokasi = $_POST["namalokasi"];
$jenisjasling = $_POST["jenisjasling"];
$fungsi = $_POST["fungsi"];
$kph = $_POST["kph"];
$bkph = $_POST["bkph"];
$rph = $_POST["rph"];
$desa = $_POST["desa"];
$kecamatan = $_POST["kecamatan"];
$kabupaten = $_POST["kabupaten"];
$link_map = $_POST["link_map"];

$edit = mysqli_query($koneksi,"UPDATE jasling
SET
cdk = '$cdk',
pengelola = '$pengelola',
jumblah_anggota_tenaga_kerja = '$anggota',
nama_lokasi_wisata_alam = '$namalokasi',
jenis_jasa_lingkungan  = '$jenisjasling',
fungsi_kawasan_hutan = '$fungsi',
kph = '$kph',
bkph = '$bkph',
rph = '$rph',
desa = '$desa',
kecamatan = '$kecamatan',
kabupaten = '$kabupaten',
link_map = '$link_map'
WHERE id='$id'");

if ($edit) {
    echo "
    <script>
        alert('Data berhasil diubah');
        document.location.href = '../login/home/admin/index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal diubah');
        document.location.href = '../login/home/admin/index.php';
    </script>
    ";
}
?>