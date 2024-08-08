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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/my-style.css">
    <style>
		.line {
            width: 100%;
            border-bottom: 10px solid yellow;
        }
        .tiny-box {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 10px 20px;
            width: 230px;
        }
		.cont {
			margin-top: -45px;
		}
		.y-box {
			border-top-right-radius: 26px;
			width: 150px;
		}
		.misi {
			margin-top: -30px;
		}
        .drop-box {
            border: none;
            border-top-right-radius: 40px;
        }
        .box-2 {
            margin-top: -15px;
        }
        .box-3 {
            margin-top: -15px;
        }
        .box-4 {
            margin-top: -15px;
        }
        .isian {
            border-radius: 50px;
            display: none;
        }
	</style>
    <title>Kel. Hasil Tani | Singmanfaat</title>
</head>
<body>
    <!-- Header Navbar -->
    <?php include 'template/header.php'; ?>
    <!-- Map -->
        <div class="latar">
            <div class="bg-light bg-opacity-25">
                <div style="padding: 150px;"></div>
            </div>
        </div>

        <!-- Content -->
    <div class="cont">
    <div class="tiny-box bg-success mx-auto fw-bold text-light text-center">Kel. Hasil Tani</div>
    <div class="line"></div>
    <div class="bg-light py-4 px-5">
        <div class="p-3" id="table-1">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cdk</th>
                            <th scope="col">Nama Kelompok Tani</th>
                            <th scope="col">alamat</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                        <?php
                        include 'koneksi.php';
                        $no ="0";
                        $hhhr = mysqli_query($koneksi,"SELECT * FROM hhhr");
                        while($hasil = mysqli_fetch_array($hhhr)){
                            $no++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no ?></th>
                            <td><?php echo $hasil['cdk'] ?></td>
                            <td><?php echo $hasil['nama_kelompok_tani'] ?></td>
                            <td><?php echo $hasil['alamat'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tr>
                        <tr>
                        <?php
                        include 'koneksi.php';
                        $hhbk = mysqli_query($koneksi,"SELECT * FROM hhbk");
                        while($hasil = mysqli_fetch_array($hhbk)){
                            $no++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no ?></th>
                            <td><?php echo $hasil['cdk'] ?></td>
                            <td><?php echo $hasil['nama_kelompok_tani_instasi'] ?></td>
                            <td><?php echo $hasil['blok_alamat'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer -->
    <?php include 'template/footer.php'; ?>
</body>
</html>