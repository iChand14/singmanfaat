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
    <!-- Iconfont -->
    <link rel="stylesheet" href="css/icofont/icofont.min.css">
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
    <!-- JS Dropdown -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#1").click(function(){
            $("#ol1").slideToggle("slow");
        });
        });
        $(document).ready(function(){
        $("#2").click(function(){
            $("#ol2").slideToggle("slow");
        });
        });
        $(document).ready(function(){
        $("#3").click(function(){
            $("#ol3").slideToggle("slow");
        });
        });
        $(document).ready(function(){
        $("#4").click(function(){
            $("#ol4").slideToggle("slow");
        });
        });
    </script>

    <title>Tupoksi | Singmanfaat</title>
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
    <div class="tiny-box bg-success mx-auto fw-bold text-light text-center">Tugas Pokok dan Fungsi</div>
    <div class="line"></div>
    <div class="bg-light py-4">
        <div class="py-4">
            <div class="box-1">
                <button id="1" class="drop-box bg-primary fw-bold text-light text-left px-4 py-3">Sub Bidang Penggelolaan Hutan <i class="icofont-simple-down"></i></button>
                <div class="bg-secondary bg-opacity-25 py-3 px-4">
                    <div id="ol1" class="bg-light fw-bold text-dark text-left p-4 mx-5 isian">
                        <ol>
                        <li>Pelaksanaan tata hutan kesatuan pengelolaan hutan kecuali pada kesatuan pengelolaan hutan
                            konservasi (KPHK).</li>
                        <li>Pelaksanaan rencana pengelolaan kesatuan pengelolaan hutan kecuali pada kesatuan pengelolaan
                            hutan konservasi (KPHK).</li>
                        <li>Pelaksanaan pemanfaatan hutan di kawasan hutan produksi dan hutan lindung, meliputi:</li>
                                <ol>
                                    <li>Pemanfaatan kawasan hutan</li>
                                    <li>Pemanfaatan hasil hutan bukan kayu</li>
                                    <li>Pemungutan hasil hutan, dan Pemanfaatan jasa lingkungan kecuali pemanfaatan penyimpanan
                                        dan atau penyerapan karbon</li>
                                </ol>
                        <li>Pelaksanaan rehabilitasi di luar kawasan hutan negara</li>
                        <li>Pelaksanaan perlindungan hutan di hutan lindung dan hutan produksi</li>
                        <li>Pelaksanaan pengolahan hasil hutan bukan kayu</li>
                        <li>Pelaksanaan pengolahan hasil hutan kayu dengan kapasitas produksi < 6.000 m3/tahun</li>
                        <li>Pelaksanaan pengelolaan KHDTK untuk kepentingan religi.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="box-2">
                <button id="2" class="drop-box bg-primary fw-bold text-light text-left px-4 py-3">Sub Bidang Konversi SDA <i class="icofont-simple-down"></i></button>
                <div class="bg-secondary bg-opacity-25 py-3 px-4">
                    <div id="ol2" class="bg-light fw-bold text-dark text-left p-4 mx-5 isian">
                        <ol>
                            <li>Pelaksanaan perlindungan, pengawetan dan pemanfaatan secara
                                lestari taman hutan raya (TAHURA) lintas Daerah
                                Kabupaten/Kota.</li>
                            <li>Pelaksanaan perlindungan tumbuhan dan satwa liar yang tidak
                                dilindungi dan/atau tidak masuk dalam lampiran (Appendix)
                                CITES.</li>
                            <li>Pelaksanaan pengelolaan kawasan bernilai ekosistem penting dan
                                daerah penyangga kawasan suaka alam dan kawasan pelestarian
                                alam.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="box-3">
                <button id="3" class="drop-box bg-primary fw-bold text-light text-left px-4 py-3">Sub Bidang Pendidikan dan Pelatihan <i class="icofont-simple-down"></i></button>
                <div class="bg-secondary bg-opacity-25 py-3 px-4">
                    <div id="ol3" class="bg-light fw-bold text-dark text-left p-4 mx-5 isian">
                        <ol>
                            <li>Pelaksanaan penyuluhan kehutanan Provinsi. </li>
                            <li>Pemberdayaan masyarakat di bidang kehutanan. </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="box-4">
                <button id="4" class="drop-box bg-primary fw-bold text-light text-left px-4 py-3">Sub Bidang Pengelolaan DAS <i class="icofont-simple-down"></i></button>
                <div class="bg-secondary bg-opacity-25 py-3 px-4">
                    <div id="ol4" class="bg-light fw-bold text-dark text-left p-4 mx-5 isian">
                        <ol>
                            <li>Pelaksanaan pengelolaan DAS lintas Daerah Kabupaten/Kota dan
                                dalam Daerah Kabupaten/Kota dalam 1 (satu) Daerah Provinsi. </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>


<?php include 'template/footer.php'; ?>
</body>
</html>