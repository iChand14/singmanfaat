<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
		.cont {
			margin-top: -45px;
		}
        .tiny-box {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 10px 20px;
            width: 200px;
        }
		.y-box {
			border-top-right-radius: 26px;
			width: 150px;
		}
		.misi {
			margin-top: -30px;
		}
		.baarr {
          	margin-top: -50px;
        }
	</style>

    <title>Jasa Lingkungan | Singmanfaat</title>
</head>
<body>
	<!-- Navbar -->
	<?php include 'template/header.php'; ?>
	<!-- Map -->
	<div class="latar">
        <div class="bg-light bg-opacity-25">
            <div style="padding: 150px;"></div>
        </div>
	</div>

	<!-- Content -->
	<div class="cont">
    <div class="tiny-box bg-success mx-auto fw-bold text-light text-center">Hasil Hutan</div>
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
                            <th scope="col">Jumlah Anggota</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Desa</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kabupaten</th>
                            <th scope="col">HHK</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">Map</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                        <?php
                            include 'koneksi.php';
                            $no ="0";
                            $hhbk = mysqli_query($koneksi,"SELECT * FROM hhbk WHERE hhbk='Kayu'");
                            while($hasil = mysqli_fetch_array($hhbk)){
                            $no++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no ?></th>
                            <td><?php echo $hasil['cdk'] ?></td>
                            <td><?php echo $hasil['nama_kelompok_tani_instasi'] ?></td>
                            <td><?php echo $hasil['jumblah_anggota_tenaga_kerja'] ?></td>
                            <td><?php echo $hasil['blok_alamat'] ?></td>
                            <td><?php echo $hasil['desa'] ?></td>
                            <td><?php echo $hasil['kecamatan'] ?></td>
                            <td><?php echo $hasil['kabupaten'] ?></td>
                            <td><?php echo $hasil['hhbk'] ?></td>
                            <td><?php echo $hasil['satuan']?></td>
                            <td><a href="<?php echo $hasil['link_map']?>" class="btn btn-primary">Map</a></td>
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
<?php include 'template/footer.php'; ?>
</body>
</html>