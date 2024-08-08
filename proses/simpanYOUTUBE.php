<?php
 
include '../koneksi.php';

if(isset($_POST['submitYOUTUBE'])){
    $link = $_POST['yt-link'];

    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $link, $match);
    $youtube_id = $match[1];

    $query = mysqli_query($koneksi, "INSERT INTO youtube_video VALUE ('','$youtube_id')");
     
    if ($query) {
        echo "
                <script>
                    alert('data berhasil di tambahkan');
                    document.location.href = '../login/home/admin/index.php';
                </script>
          ";
    } else {
        echo "
                <script>
                    alert('data gagal di tambahkan');
                    document.location.href = '../login/home/admin/index.php';
                </script>
          ";
    }
} else {
    echo "
    <script>
        alert('error');
        document.location.href = '../login/home/admin/index.php';
    </script>
";
}
?>