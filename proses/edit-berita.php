<?php

include '../koneksi.php';

$id = @$_GET['id'];
$gambar = $_POST['gambar'];
$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$isi = $_POST['isi'];

if ($gambar) {

    $edit = mysqli_query($koneksi,"UPDATE artikel
    SET
    judul = '$judul',
    penerbit = '$penerbit',
    isi = '$isi',
    gambar = '$gambar'
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
} else {
    $edit = mysqli_query($koneksi,"UPDATE artikel
    SET
    judul = '$judul',
    penerbit = '$penerbit',
    isi = '$isi'
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
}
?>