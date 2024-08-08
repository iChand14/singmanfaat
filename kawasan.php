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

    <title>Kawasan Hutan | Singmanfaat</title>
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
            
        </div>
	</div>
	</div>
<?php include 'template/footer.php'; ?>
</body>
</html>