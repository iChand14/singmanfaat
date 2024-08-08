<?php
include "../koneksi.php";

$id=@$_GET['id'];
$sql=mysqli_query($koneksi,"DELETE FROM hhbk WHERE id='$id'");
if ($sql) {
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