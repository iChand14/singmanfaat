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
    <link rel="stylesheet" href="css/style.css">
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
    <title>SDM Kehutanan | Singmanfaat </title>
</head>
<body>
    <!-- navbar -->
    <?php include 'template/header.php'; ?>

    <div class="latar">
        <div class="bg-light bg-opacity-25">
            <div style="padding: 150px;"></div>
        </div>
	</div>

    <div class="cont">
        <div class="tiny-box bg-success mx-auto fw-bold text-light text-center">SDM Kehutanan</div>
        <div class="line"></div>
        <div class="bg-light p-5">
            <!-- Dinas Kehutanan -->
            <div class="px-3 py-2 mb-2">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <!-- Field -->
                        <thead>
                            <tr>
                                <th scope="col" width="50px">No.</th>
                                <th scope="col">Satuan Kerja</th>
                                <th scope="col">Gol. IV</th>
                                <th scope="col">Gol. III</th>
                                <th scope="col">Gol. II</th>
                                <th scope="col">Gol. I</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <!-- Record -->
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Dinas Kehutanan</td>
                                <td>21</td>
                                <td>63</td>
                                <td>4</td>
                                <td>1</td>
                                <td>89</td>

                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>CDK Wilayaha I - IX</td>
                                <td>136</td>
                                <td>353</td>
                                <td>34</td>
                                <td>-</td>
                                <td>523</td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td>UPTD Sertifikat dan Pembenihan Tanaman Hutan</td>
                                <td>3</td>
                                <td>21</td>
                                <td>2</td>
                                <td>-</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td scope="row">4</td>
                                <td>UPTD Tahura Ir. H. Djuanda</td>
                                <td>3</td>
                                <td>14</td>
                                <td>10</td>
                                <td>1</td>
                                <td>28</td>
                            </tr>
                            <tr>
                                <td scope="row">5</td>
                                <td>UPTD Pelayanan Pengelolaan Hasil hutan</td>
                                <td>4</td>
                                <td>11</td>
                                <td>2</td>
                                <td>-</td>
                                <td>22</td>
                            </tr>
                            <tr class="fw-bold">
                                <td colspan="2">Jumlah</td>
                                <td>167</td>
                                <td>462</td>
                                <td>174</td>
                                <td>2</td>
                                <td>683</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Statistik Dinas -->
            <div class="px-3 py-2 mb-2">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <!-- Field -->
                        <thead>
                            <tr>
                                <th scope="col" width="50px">No.</th>
                                <th scope="col">Kabupaten/Kota</th>
                                <th scope="col" width="200px">Total Penyuluh</th>
                            </tr>
                        </thead>
                        <!-- Record -->
                        <!-- cdk I -->
                        <tbody>
                            <tr>
                                <td scope="row"></td>
                                <td scope="row">Dinas Kehutanan</td>
                                <td scope="row">3</td>
                            </tr>
                            <tr class="fw-bold">
                                <td scope="row">I</td>
                                <td scope="row">CDK WILAYAH I</td>
                                <td scope="row"></td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td scope="row">Kab. Bogor</td>
                                <td scope="row">8</td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td scope="row">Kota Bogor</td>
                                <td scope="row">-</td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td scope="row">Kota Depok</td>
                                <td scope="row">-</td>
                            </tr>
                            <tr>
                                <td scope="row">4</td>
                                <td scope="row">Kab. Bekasi</td>
                                <td scope="row">2</td>
                            </tr>
                            <tr>
                                <td scope="row">5</td>
                                <td scope="row">Kota Bekasi</td>
                                <td scope="row">-</td>
                            </tr>
                            <!-- cdk II -->
                            <tr class="fw-bold">
                                <td scope="row">II</td>
                                <td scope="row">CDK WILAYAH II</td>
                                <td scope="row"></td>
                            </tr>
                            <tr>
                                <td scope="row">6</td>
                                <td scope="row">Kab. Karawang</td>
                                <td scope="row">6</td>
                            </tr>
                            <tr>
                                <td scope="row">7</td>
                                <td scope="row">Kab. Purwakarta</td>
                                <td scope="row">11</td>
                            </tr>
                            <tr>
                                <td scope="row">8</td>
                                <td scope="row">Kab. Subang</td>
                                <td scope="row">11</td>
                            </tr>
                            <!-- cdk III -->
                            <tr class="fw-bold">
                                <td scope="row">III</td>
                                <td scope="row">CDK WILAYAH III</td>
                                <td scope="row"></td>
                            </tr>
                            <tr>
                                <td scope="row">9</td>
                                <td scope="row">Kab. Sukabumi</td>
                                <td scope="row">9</td>
                            </tr>
                            <tr>
                                <td scope="row">10</td>
                                <td scope="row">Kota Sukabumi</td>
                                <td scope="row">-</td>
                            </tr>
                            <!-- cdk IV -->
                            <tr class="fw-bold">
                                <td scope="row">IV</td>
                                <td scope="row">CDK WILAYAH IV</td>
                                <td scope="row"></td>
                            </tr>
                            <tr>
                                <td scope="row">11</td>
                                <td scope="row">Kab. Cianjur</td>
                                <td scope="row">19</td>
                            </tr>
                            <tr>
                                <td scope="row">12</td>
                                <td scope="row">Kab. Bandung Barat</td>
                                <td scope="row">9</td>
                            </tr>
                            <tr>
                                <td scope="row">13</td>
                                <td scope="row">Kota Cimahi</td>
                                <td scope="row">-</td>
                            </tr>
                            <!-- cdk V -->
                            <tr class="fw-bold">
                                <td scope="row">V</td>
                                <td scope="row">CDK Wilayah V</td>
                                <td scope="row"></td>
                            </tr>
                            <tr>
                                <td scope="row">14</td>
                                <td scope="row">Kab. Garut</td>
                                <td scope="row">29</td>
                            </tr>
                            <tr>
                                <td scope="row">15</td>
                                <td scope="row">Kob. Bandung</td>
                                <td scope="row">8</td>
                            </tr>
                            <tr>
                                <td scope="row">16</td>
                                <td scope="row">Kota Bandung</td>
                                <td scope="row">-</td>
                            </tr>
                            <!-- cdk VI -->
                            <tr class="fw-bold">
                                <td scope="row">VI</td>
                                <td scope="row">Wilayah CDK VI</td>
                                <td scope="row"></td>
                            </tr>
                            <tr>
                                <td scope="row">17</td>
                                <td scope="row">Kab. Tasikmalaya</td>
                                <td scope="row">31</td>
                            </tr>
                            <tr>
                                <td scope="row">18</td>
                                <td scope="row">Kota Tasikmalaya</td>
                                <td scope="row">2</td>
                            </tr>
                            <!-- cdk VII -->
                            <tr class="fw-bold">
                                <td scope="row">VII</td>
                                <td scope="row">Wilayah CDK VII</td>
                                <td scope="row"></td>
                            </tr>
                            <tr>
                                <td scope="row">19</td>
                                <td scope="row">Kab. Ciamis</td>
                                <td scope="row">23</td>
                            </tr>
                            <tr>
                                <td scope="row">20</td>
                                <td scope="row">Kota Banjar</td>
                                <td scope="row">2</td>
                            </tr>
                            <tr>
                                <td scope="row">21</td>
                                <td scope="row">Kab. Pangandaran</td>
                                <td scope="row">9</td>
                            </tr>
                            <!-- cdk VIII -->
                            <tr class="fw-bold">
                                <td scope="row">VIII</td>
                                <td scope="row">Wilayah CDK VIII</td>
                                <td scope="row"></td>
                            </tr>
                            <tr>
                                <td scope="row">22</td>
                                <td scope="row">Kab. Kuningan</td>
                                <td scope="row">21</td>
                            </tr>
                            <tr>
                                <td scope="row">23</td>
                                <td scope="row">Kab. Cirebon</td>
                                <td scope="row">7</td>
                            </tr>
                            <tr>
                                <td scope="row">24</td>
                                <td scope="row">Kota Cirebon</td>
                                <td scope="row">-</td>
                            </tr>
                            <tr>
                                <td scope="row">25</td>
                                <td scope="row">Kab. Majalengka</td>
                                <td scope="row">13</td>
                            </tr>
                            <!-- cdk IX -->
                            <tr class="fw-bold">
                                <td scope="row">IX</td>
                                <td scope="row">Wilayah CDK IX</td>
                                <td scope="row"></td>
                            </tr>
                            <tr>
                                <td scope="row">26</td>
                                <td scope="row">Kab. Sumedang</td>
                                <td scope="row">16</td>
                            </tr>
                            <tr>
                                <td scope="row">27</td>
                                <td scope="row">Kab, Indramayu</td>
                                <td scope="row">4</td>
                            </tr>
                            <!-- total -->
                            <tr class="fw-bold">
                                <td colspan="2">Total</td>
                                <td>243</td>
                            </tr>
                            <!-- Persentase -->
                            <tr class="fw-bold">
                                <td colspan="2">Persentase (%)</td>
                                <td>100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>