<?php
include "../koneksi.php";

$id = @$_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM youtube_video WHERE id='$id'");
if ($sql) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = '../login/home/admin/index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data Gagal dihapus');
            document.location.href = '../login/home/admin/index.php';
        </script>
    ";
}
?>