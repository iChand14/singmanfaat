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
    <title>Cetak Hasil Hutan Bukan Kayu</title>
</head>
<body>
<center>
    <table cellpadding="1" cellspacing="1" border="1">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cdk</th>
            <th scope="col">Nama Kelompok Tani Instasi</th>
            <th scope="col">Jumlah Anggota</th>
            <th scope="col">Blok Alamat</th>
            <th scope="col">Desa</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Kabupaten</th>
            <th scope="col">hhbk</th>
            <th scope="col" class="text-center" width="50px">...</th>
        </tr>
            <?php
                include "../koneksi.php";
                $no= "0";
                // query
                $hhbk = mysqli_query($koneksi,"SELECT * FROM hhbk");    
                //menampilkan data
                while($row3 = mysqli_fetch_array($hhbk)){
                $no++
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $row3['cdk'];?></td>
                <td><?php echo $row3['nama_kelompok_tani_instasi']; ?></td>
                <td><?php echo $row3['jumblah_anggota_tenaga_kerja'];?></td>
                <td><?php echo $row3['blok_alamat'] ?></td>
                <td><?php echo $row3['desa'] ?></td>
                <td><?php echo $row3['kecamatan'] ?></td>
                <td><?php echo $row3['kabupaten'] ?></td>
                <td><?php echo $row3['hhbk'] ?></td>
                <td><a a href="../../../proses/hapusHHBK2.php?id=<?php echo $row3['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="icofont-bin"></i></a></td>
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