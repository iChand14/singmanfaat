<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Java Script -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/my-style.css">
    <style>
        .line {
          width: 100%;
          border-bottom: 10px solid yellow;
        }
    </style>
    <title>List Youtube | Singmanfaat</title>
</head>
<body>
    <?php include 'template/header.php' ?>
    <div class="bg-light">
        <div class="container text- p-4">
            <div class="mb-3 text-end">
                <a class="btn btn-danger" href="index.php">Kembali</a>
            </div>
            <table class="mt-4">
                <?php
                include 'koneksi.php';
                $kolom = 3;
                $i = 1;
                $qry = mysqli_query($koneksi , "SELECT * FROM youtube_video ORDER BY id DESC");
                $no = 0;
                while ($yt = mysqli_fetch_array($qry)){
                    if (($i) % $kolom == 1 ){
                ?>
                <tr>
                <?php
                }
                ?>
                    <td>
                        <div class="col">
                            <iframe width="360" height="200" src="https://www.youtube.com/embed/<?php echo $yt['youtube_id']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </td>
                <?php
                    if (($i) % $kolom == 0) {
                ?>
                </tr>
                <?php
                    }
                    $i++;
                }
                ?>
            </table>
        </div>
    </div>
    <?php include 'template/footer.php' ?>
</body>
</html>