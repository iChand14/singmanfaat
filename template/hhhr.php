<?php
include '../koneksi.php';
session_start();
if($_SESSION['lvl'] == "I"){
 $hhhr=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='I'");
} else if($_SESSION['lvl'] == "II"){
 $hhhr=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='II'");
} else if($_SESSION['lvl'] == "III"){
 $hhhr=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='III'");
} else if($_SESSION['lvl'] == "IV"){
 $hhhr=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='IV'");
} else if($_SESSION['lvl'] == "V"){
 $hhhr=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='V'");
} else if($_SESSION['lvl'] == "VI"){
 $hhhr=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VI'");
} else if($_SESSION['lvl'] == "VII"){
 $hhhr=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VII'");
} else if($_SESSION['lvl'] == "VIII"){
 $hhhr=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VIII'");
} else if($_SESSION['lvl'] == "IX"){
 $hhhr=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='IX'");
} else if ($_SESSION['lvl'] == "SA"){
 $hhhr=mysqli_query($koneksi,"SELECT * FROM hhhr");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include '../koneksi.php';

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data hhhr.xls");
?>
<body>
    <table>
<table class="table table-striped table-sm">
                <tr>
                  <th scope="col">CDK</th>
                  <th scope="col">NAMA  KELOMPOK TANI</th>
                  <th scope="col">JUMLAH ANGGOTA (orang)</th>
                  <th scope="col">ALAMAT</th>
                  <th scope="col">DESA</th>
                  <th scope="col">KECAMATAN</th>
                  <th scope="col">KABUPATEN</th>
                  <th scope="col">LUAS</th>
                  <th scope="col">TANAMAN</th>
                  <th scope="col">JENIS DARI TANAMAN</th>
                  <th scope="col">LINK MAP</th>
                </tr>
                  <?php
                      include "../koneksi.php";
                      //menampilkan data
                      while($row2=mysqli_fetch_array($hhhr)){
                  ?>
                  <tr>
                      <td><?php echo $row2['cdk'];?></td>
                      <td><?php echo $row2['nama_kelompok_tani']; ?></td>
                      <td><?php echo $row2['jumlah_anggota'];?></td>
                      <td><?php echo $row2['alamat']; ?></td>
                      <td><?php echo $row2['desa']; ?></td>
                      <td><?php echo $row2['kecamatan']; ?></td>
                      <td><?php echo $row2['kabupaten']; ?></td>
                      <td><?php echo $row2['luas']; ?></td>
                      <td><?php echo $row2['tanaman']; ?></td>
                      <td><?php echo $row2['jenis_dari_tanaman']; ?></td>
                      <td><?php echo $row2['link_map']; ?></td>
                  </tr>
                  <?php
                      }
                  ?>     
              </table>  
    </table>
</body>
</html>