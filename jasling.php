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
    <div class="tiny-box bg-success mx-auto fw-bold text-light text-center">Luas Wilayah</div>
	<div class="line"></div>
	<div class="bg-light py-4 px-5">
        <div class="p-3" id="table-1">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cdk</th>
                    <th scope="col">Pengelola</th>
                    <th scope="col">Jumlah Anggota</th>
                    <th scope="col">Nama Lokasi Wisata Alam</th>
                    <th scope="col">Jenis Jasa Lingkungan</th>
                    <th scope="col">Fungsi Kawasan Hutan</th>
                    <th scope="col">kph</th>
                    <th scope="col">bkph</th>
                    <th scope="col">rph</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Kabupaten</th>
                    </tr>
                    <?php
                        include "koneksi.php";
                        $no=0;    
                        //menampilkan data
                        $jasling = mysqli_query($koneksi,"SELECT * FROM jasling");
                        while($hasil = mysqli_fetch_array($jasling)){
                            $no++;
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $hasil['cdk'];?></td>
                        <td><?php echo $hasil['pengelola']; ?></td>
                        <td><?php echo $hasil['jumblah_anggota_tenaga_kerja'];?></td>
                        <td><?php echo $hasil['nama_lokasi_wisata_alam']; ?></td>
                        <td><?php echo $hasil['jenis_jasa_lingkungan']; ?></td>
                        <td><?php echo $hasil['fungsi_kawasan_hutan']; ?></td>
                        <td><?php echo $hasil['kph']; ?></td>
                        <td><?php echo $hasil['bkph']; ?></td>
                        <td><?php echo $hasil['rph']; ?></td>
                        <td><?php echo $hasil['kecamatan']; ?></td>
                        <td><?php echo $hasil['kabupaten']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>     
                </table>
            </div>
        </div>
	</div>
	</div>
<?php include 'template/footer.php'; ?>
</body>
</html>