<?php
include '../koneksi.php';
session_start();
   if($_SESSION['lvl'] == "I"){
    $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='I'");
    $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='I'");
    $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='I'");
   } else if($_SESSION['lvl'] == "II"){
    $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='II'");
    $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='II'");
    $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='II'");
   } else if($_SESSION['lvl'] == "III"){
    $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='III'");
    $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='III'");
    $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='III'");
   } else if($_SESSION['lvl'] == "IV"){
    $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='IV'");
    $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='IV'");
    $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='IV'");
   } else if($_SESSION['lvl'] == "V"){
    $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='V'");
    $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='V'");
    $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='V'");
   } else if($_SESSION['lvl'] == "VI"){
    $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VI'");
    $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VI'");
    $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VI'");
   } else if($_SESSION['lvl'] == "VII"){
    $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VII'");
    $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VII'");
    $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VII'");
   } else if($_SESSION['lvl'] == "VIII"){
    $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VIII'");
    $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VIII'");
    $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VIII'");
   } else if($_SESSION['lvl'] == "IX"){
    $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='IX'");
    $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='IX'");
    $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='IX'");
   } else if ($_SESSION['lvl'] == "SA"){
    $query1=mysqli_query($koneksi,"SELECT * FROM jasling");
    $query2=mysqli_query($koneksi,"SELECT * FROM hhhr");
    $query3=mysqli_query($koneksi,"SELECT * FROM hhbk");
   } else if($_SESSION['lvl']==""){
    header("location:../../index.php?pesan=null");
   }
   if($_SESSION['username']){
    $idUser = $_SESSION['username'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Cetak Jasling</title>
</head>
<body>
<center>
    <table cellpadding="1" cellspacing="1" border="1">
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
            include "../koneksi.php";
            $no = "0";
            // query
            $jasling = mysqli_query($koneksi,"SELECT * FROM jasling");
            //menampilkan data
            while($row1=mysqli_fetch_array($jasling)){
            $no++
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $row1['cdk'];?></td>
            <td><?php echo $row1['pengelola']; ?></td>
            <td><?php echo $row1['jumblah_anggota_tenaga_kerja'];?></td>
            <td><?php echo $row1['nama_lokasi_wisata_alam']; ?></td>
            <td><?php echo $row1['jenis_jasa_lingkungan']; ?></td>
            <td><?php echo $row1['fungsi_kawasan_hutan']; ?></td>
            <td><?php echo $row1['kph']; ?></td>
            <td><?php echo $row1['bkph']; ?></td>
            <td><?php echo $row1['rph']; ?></td>
            <td><?php echo $row1['kecamatan']; ?></td>
            <td><?php echo $row1['kabupaten']; ?></td>
        </tr>
        <?php
            }
        ?>     
    </table>
</center>
<script>
    window.print();
</script>
</body>
</html>