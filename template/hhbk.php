<?php
include '../koneksi.php';
session_start();
if($_SESSION['lvl'] == "I"){
 $hhbk=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='I'");
} else if($_SESSION['lvl'] == "II"){
 $hhbk=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='II'");
} else if($_SESSION['lvl'] == "III"){
 $hhbk=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='III'");
} else if($_SESSION['lvl'] == "IV"){
 $hhbk=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='IV'");
} else if($_SESSION['lvl'] == "V"){
 $hhbk=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='V'");
} else if($_SESSION['lvl'] == "VI"){
 $hhbk=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VI'");
} else if($_SESSION['lvl'] == "VII"){
 $hhbk=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VII'");
} else if($_SESSION['lvl'] == "VIII"){
 $hhbk=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VIII'");
} else if($_SESSION['lvl'] == "IX"){
 $hhbk=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='IX'");
} else if ($_SESSION['lvl'] == "SA"){
 $hhbk=mysqli_query($koneksi,"SELECT * FROM hhbk");
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
header("Content-Disposition: attachment; filename=Data hhbk.xls");
?>
<body>
    <table>
        <tr>
            <th scope="col">CDK</th>
            <th scope="col">NAMA/   KELOMPOK TANI/INSTANSI</th>
            <th scope="col">JUMLAH ANGGOTA/ TENAGA KERJA (Orang)</th>
            <th scope="col">BLOK/ALAMAT</th>
            <th scope="col">DESA</th>
            <th scope="col">KECAMATAN</th>
            <th scope="col">KABUPATEN</th>
            <th scope="col">HHBK</th>
            <th scope="col">SATUAN</th>
            <th scope="col">LINK MAP</th>
        </tr>
        <?php
            include "../koneksi.php";
            //menampilkan data
            while($row3=mysqli_fetch_array($hhbk)){
        ?>
        <tr>
            <td><?php echo $row3['cdk'];?></td>
            <td><?php echo $row3['nama_kelompok_tani_instasi']; ?></td>
            <td><?php echo $row3['jumblah_anggota_tenaga_kerja'];?></td>
            <td><?php echo $row3['blok_alamat']; ?></td>
            <td><?php echo $row3['desa']; ?></td>
            <td><?php echo $row3['kecamatan']; ?></td>
            <td><?php echo $row3['kabupaten']; ?></td>
            <td><?php echo $row3['hhbk']; ?></td>
            <td><?php echo $row3['satuan']; ?></td>
            <td><?php echo $row3['link_map']; ?></td>
        </tr>
        <?php
            }
        ?>     
    </table>
</body>
</html>