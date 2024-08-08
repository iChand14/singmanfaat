<?php
include "../koneksi.php";

$id=@$_GET['id'];

$sql=mysqli_query($koneksi,"SELECT * FROM artikel WHERE id='$id'");
$cari=mysqli_fetch_array($sql);
$foto=$cari['gambar'];
unlink("../img/foto-artikel/".$foto);   

$hapus=mysqli_query($koneksi,"DELETE FROM artikel WHERE id='$id'");
if ($hapus) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = '../login/home/super-admin/index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data Gagal dihapus');
            document.location.href = '../login/home/super-admin/index.php';
        </script>
    ";
}
?>