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

    <title>Struktur | Singmanfaat</title>
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
	<div class="tiny-box bg-success mx-auto fw-bold text-light text-center">Struktur Organisasi</div>
	<div class="line"></div>
	<div class="bg-light py-4">
		<div class="p-2">
			<div class="text text-center fw-bold fs-3 my-2 obj">Struktur Organisasi</div>
			<div class="text-center my-4"><img class="container2" src="img/struktur.png"></div>
		</div>
		<div class="py-2">
			<div class="visi">
				<div class="y-box kun p-2 text-center float-left text-dark fw-bold fs-4">Visi</div>
				<div class="ijo p-5 float-left">
					<div class="text-light fw-bold fs-3 mx-5">"Terwujudnya Jawa Barat Juara Lahir Batin dengan Inovasi dan<br/> Kolaborasi"</div>
					<div class="text-light text-opacity-75 mx-5 fst-italic">Jawa Barat Tahun 2018- 2023</div>
				</div>
			</div>
			<div class="misi">
				<div class="y-box kun p-2 text-center float-left text-dark fw-bold fs-4">Misi</div>
				<div class="p-5 float-left bg-secondary bg-opacity-25">
					<ol class="mx-3 fs-5 text-dark fw-bold">
						<li>Membentuk Manusia Pancasila Yang Bertaqwa Melalui Peran Masjid dan Tempat Ibadah Sebagai Pusat Peradaban.</li>
						<li>Melahirkan Manusia Yang Berbudaya, Berkualitas, Bahagia dan Produktif Melalui Peningkatan Pelayanan Publik Yang Inovatif.</li>
						<li>Mempercepat Pertumbuhan dan Pemerataan Pembangunan Berbasis Lingkungan dan Tata Ruang Yang Berkelanjutan Melalui Peningkatan Koneksivitas Wilayah dan Penataan Daerah.</li>
						<li>Meningkatkan Produktivitas dab Daya Saing Usaha Ekonomi Umat yang Sejahtera dan Adil Melalui Pemanfaatan Teknologi Digital dan Kolaborasi Dengan Pusat Pusat Inovasi Serta Pelaku Pembangunan.</li>
						<li>Mewujudkan Tata Kelola Pemerintahan yang Inovatif dan Kepemimpinan yang Kolaboratif Antara Pemerintah Pusat, Provinsi dan Kabupaten/Kota</li>
					</ol>
					<div class="text-dark text-opacity-75 mx-5 fst-italic">Jawa Barat Tahun 2018- 2023</div>
				</div>
			</div>
		</div>
	</div>
	</div>
<?php include 'template/footer.php'; ?>
</body>
</html>