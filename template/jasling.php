<?php
include '../koneksi.php';
session_start();
if($_SESSION['lvl'] == "I"){
 $jasling=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='I'");
} else if($_SESSION['lvl'] == "II"){
 $jasling=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='II'");
} else if($_SESSION['lvl'] == "III"){
 $jasling=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='III'");
} else if($_SESSION['lvl'] == "IV"){
 $jasling=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='IV'");
} else if($_SESSION['lvl'] == "V"){
 $jasling=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='V'");
} else if($_SESSION['lvl'] == "VI"){
 $jasling=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VI'");
} else if($_SESSION['lvl'] == "VII"){
 $jasling=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VII'");
} else if($_SESSION['lvl'] == "VIII"){
 $jasling=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VIII'");
} else if($_SESSION['lvl'] == "IX"){
 $jasling=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='IX'");
} else if ($_SESSION['lvl'] == "SA"){
 $jasling=mysqli_query($koneksi,"SELECT * FROM jasling");
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
header("Content-Disposition: attachment; filename=Data Jasling.xls");
?>
<body>
    <table>
        <tr>
            <th scope="col">CDK</th>
            <th scope="col">PENGELOLA</th>
            <th scope="col">JUMLAH ANGGOTA/ TENAGA KERJA (Orang)</th>
            <th scope="col">NAMA LOKASI WISATA ALAM (dalam Kawasan Hutan)</th>
            <th scope="col">JENIS JASA LINGKUNGAN</th>
            <th scope="col">FUNGSI KAWASAN HUTAN</th>
            <th scope="col">KPH</th>
            <th scope="col">BKPH</th>
            <th scope="col">RPH</th>
            <th scope="col">DESA</th>
            <th scope="col">KECAMATAN</th>
            <th scope="col">KABUPATEN</th>
            <th scope="col">LINK MAP</th>
        </tr>
        <?php
            include "../koneksi.php";
            //menampilkan data
            while($row1=mysqli_fetch_array($jasling)){
        ?>
        <tr>
            <td><?php echo $row1['cdk'];?></td>
            <td><?php echo $row1['pengelola']; ?></td>
            <td><?php echo $row1['jumblah_anggota_tenaga_kerja'];?></td>
            <td><?php echo $row1['nama_lokasi_wisata_alam']; ?></td>
            <td><?php echo $row1['jenis_jasa_lingkungan']; ?></td>
            <td><?php echo $row1['fungsi_kawasan_hutan']; ?></td>
            <td><?php echo $row1['kph']; ?></td>
            <td><?php echo $row1['bkph']; ?></td>
            <td><?php echo $row1['rph']; ?></td>
            <td><?php echo $row1['desa']; ?></td>
            <td><?php echo $row1['kecamatan']; ?></td>
            <td><?php echo $row1['kabupaten']; ?></td>
            <td><?php echo $row1['link_map']; ?></td>
            <td></td>
        </tr>
        <?php
            }
        ?>     
    </table>
</body>
</html>