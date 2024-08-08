<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <!-- Java Script -->
    <script src="../../../js/bootstrap.bundle.min.js"></script>
    <!-- Own CSS -->
    <link rel="stylesheet" href="../../../css/tambah.css">
    <link rel="stylesheet" href="../../../css/edit.css">
    <link rel="stylesheet" href="../../../css/my-style.css">
    <title>Tambah Berita</title>
</head>
<body>
<div class="navbar">
  <?php echo "<h5 class='text-light px-4 py-1'>Selamat Datang, <cite class='font-weight-bold'>" . $_SESSION['username'] ."!". "</cite></h5>"; ?>
</div>
<div class="menu px-4">
    <div class="sidebar">
        <ul class="navbar-nav">
            <li>
                <a class="disable">Jasa Lingkungan</a>
            </li>
            <li>
                <a class="active">Hutan Rakyat</a>
            </li>
            <li>
                <a class="disable">Hasil Hutan Bukan Kayu</a>
            </li>
            <li>
                <a class="disable">Video</a>
            </li>
            <li>
                <a class="disable">Berita</a>
            </li>
            <li>
                <a class="disable">Tambah Admin</a>
            </li>
            <li>
                <a class="disable">Logout</a>
            </li>
        </ul>
    </div>
    <?php
    include("../../../koneksi.php"); 

    $id=@$_GET['id'];
    
    $sql=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE id='$id'");
    while ($hasil = mysqli_fetch_array($sql)){

    ?>
    <div class="content bg-light">
        <div class="container">
            <div class="mb-4 d-flex justify-content align-items-center">
                <label>Edit Data "Hasil Hutan Bukan Kayu"</label>
                <a class="btn btn-danger ms-auto" href="index.php">Kembali</a>
            </div>
            <form action="../../../proses/edit-hhbk.php?id=<?=$hasil['id'];?>" method="post">
                <table class="tbl" cellpadding="5px">
                    <tr>
                        <tr>
                            <td><input type="text" name="cdk" id="cdk" required placeholder="CDK" value="<?=$hasil['cdk'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="nama_kelompok_tani_instasi" id="nama_kelompok_tani_instasi" required placeholder="PENGELOLA" value="<?=$hasil['nama_kelompok_tani_instasi'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="jumblah_anggota_tenaga_kerja" id="jumblah_anggota_tenaga_kerja" required placeholder="JUMLAH ANGGOTA TENAGA KERJA" value="<?=$hasil['jumblah_anggota_tenaga_kerja'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="blok_alamat" id="blok_alamat" required placeholder="BLOK ALAMAT" value="<?=$hasil['blok_alamat'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="desa" id="desa" required placeholder="DESA" value="<?=$hasil['desa'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="kecamatan" id="kecamatan" required placeholder="KECAMATAN" value="<?=$hasil['kecamatan'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="kabupaten" id="kabupaten" required placeholder="KABUPATEN" value="<?=$hasil['kabupaten'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="hhbk" id="hhbk" required placeholder="HHBK" value="<?=$hasil['hhbk'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="satuan" id="satuan" required placeholder="SATUAN" value="<?=$hasil['satuan'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="link_map" id="link_map" required placeholder="LINK MAP" value="<?=$hasil['link_map'];?>"></td>
                        </tr>
                    </tr>
                </table>
                <div align="right">
                    <button type="submit" class="simpan btn btn-primary mb-3" name="editBER">Edit</button>
                </div>
            </form>
        </div>
    </div>
    <?php
    }
    ?>
</div>
</body>
</html>

