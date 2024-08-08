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

    <?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM artikel WHERE id = '$id'";
    $res = mysqli_query($koneksi, $sql);

    while ($data = mysqli_fetch_array($res)){
    ?>

    <title><?php echo $data['judul']; ?> | Singmanfaat</title>

    <?php
    }
    ?>

</head>
<body>
    <?php include 'template/header.php' ?>
    <div class="bg-light p-5 artikel">
        <div class="container">
            <div class="mb-4 text-end">
                <a class="btn btn-danger" href="list-artikel.php">Kembali</a>
                <a class="btn btn-warning" href="index.php">Home</a>
            </div>
            <div class ="text-start">
                <?php
                    $id = $_GET["id"];
                    $sql = "SELECT * FROM artikel WHERE id = '$id'";
                    $res = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($res)){
                ?>
                <div class="artikel">
                    <h2 class="h4 pb-2 mb-2 fs-2 fw-bold text-dark border-bottom border-dark"><?php echo $data['judul']; ?></h2>
                    <div class="row mb-5 fs-5">
                        <div class="col-6" > by <cite class="card-text fw-bold"><?php echo $data['penerbit']; ?></cite></div>
                        <div class="col-6" > <h5 class="text-end"><?php echo $data ['tanggal'] ?></h5></div>
                    </div>
                    <div class="text-center mb-3">
                        <img class="img-thumbnail rounded" src="img/foto-artikel/<?php echo $data['gambar'] ?>" width=60%>
                    </div>
                    <div class="caption">
                        <p class="isi"><?php echo nl2br($data['isi']) ?></p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <?php include 'template/footer.php' ?>
</body>
</html>