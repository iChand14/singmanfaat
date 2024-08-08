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
        .autocomplete-suggestions {
            border-radius:.375rem;
            margin-top: 10px;
            border-left: 1px solid #ced4da;
            border-right: 1px solid #ced4da;
            border-bottom: 1px solid #ced4da;
            background: #FFF;
            overflow: auto;
        }
        .autocomplete-suggestion {
            padding: .375rem .75rem;
            white-space: nowrap;
            overflow: hidden;
        }
        .autocomplete-selected {
            background: #F0F0F0;
        }
        .autocomplete-suggestions strong {
            font-weight: normal;
            color: #3399FF;
        }
        .autocomplete-group {
            padding: .375rem .75rem;
        }
        .autocomplete-group strong {
            display: block;
            border-bottom: 1px solid #000;
        }
    </style>
    <title>List Berita | Singmanfaat</title>
</head>
<body>
    <?php include 'template/header.php' ?>
    <div class="bg-light">
        <div class="container p-5">
            <div class="row mb-3"> 
                <div class="col-4 text-start">
                    <form action="list-artikel.php" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="cari" id="judul_artikel" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <input type="submit" class="btn btn-primary" id="button-addon2" value="Cari"/>
                        <!-- <input class="l" type="text" name="cari" placeholder="Search">
                        <input class="btn btn-primary" type="submit" value="Cari"> -->
                    </div>
                    <?php 
                        if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];
                            // echo "<b>Hasil pencarian : ".$cari."</b>";
                            if($cari){
                                echo "<div class='mb-3 text-dark'>Hasil Pencarian : <cite class='fw-bold'> ".$cari." </cite></div>";
                            } 
                        }
                    ?>
                    </form>
                </div>
                <div class="col-8 text-end">
                    <a class="btn btn-danger" href="index.php">Kembali</a>
                </div>
            </div>
            <div class="my-2 px-4 row text-center">
                <table width="100%">
                    <?php
                    include 'koneksi.php';
                    $kolom = 3;
                    $i = 1;
                    if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        if($cari){
                            $qry = mysqli_query($koneksi , "SELECT * FROM artikel WHERE judul = '$cari'");
                          } else {
                            $qry = mysqli_query($koneksi,"SELECT * FROM artikel");
                          }
                    } else {
                        $qry = mysqli_query($koneksi , "SELECT * FROM artikel ORDER BY id DESC");
                    }
                        $no = 0;
                    while ($artikel = mysqli_fetch_array($qry)){
                        if (($i) % $kolom == 1 ){
                    ?>
                    <tr>
                    <?php
                    }
                    ?>
                        <td style="max-width: 300px; max-height: 200px;">
                            <a href="artikel.php?id=<?php echo $artikel['id']?>" class="text-decoration-none">
                                <div class="card text-start">
                                    <img src="img/foto-artikel/<?php echo $artikel['gambar']?>" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold fs-3"><?php echo $artikel['judul']?></h5>
                                        <p class="card-text text-dark">By <cite class="card-text fw-bold"><?php echo $artikel['penerbit']?></cite></p>
                                        <p class="card-text text-dark text-truncate fs-6 mt-4" style="max-width: 250px;" ><?php echo $artikel['isi'] ?> </p>
                                    </div>
                                </div>
                            </a>
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
    </div>
    <?php include 'template/footer.php' ?>
</body>
<!-- Memanggil jQuery.js -->
<script src="jQuery/jquery-3.6.1.min.js"></script>
<!-- Memanggil Autocomplete.js -->
<script src="jQuery/jquery.autocomplete.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Selector input yang akan menampilkan autocomplete.
        $( "#judul_artikel" ).autocomplete({
            serviceUrl: "source/source.php",   // Kode php untuk prosesing data
            dataType: "JSON",           // Tipe data JSON
            onSelect: function (suggestion) {
                $( "#judul_artikel" ).val("" + suggestion.judul);
            }
        });
    })
</script>
</html>