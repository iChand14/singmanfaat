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
<div class="menu px-4">
    <div class="sidebar">
        <ul class="navbar-nav">
            <li>
                <a class="disable">Jasa Lingkungan</a>
            </li>
            <li>
                <a class="disable">Hutan Rakyat</a>
            </li>
            <li>
                <a class="disable">Hasil Hutan Bukan Kayu</a>
            </li>
            <li>
                <a class="disable">Video</a>
            </li>
            <li>
                <a class="active">Berita</a>
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
    
    $sql=mysqli_query($koneksi,"SELECT * FROM artikel WHERE id='$id'");
    while ($hasil = mysqli_fetch_array($sql)){

    ?>
    <div class="content bg-light">
        <div class="container">
            <div class="mb-4">
                <a class="btn btn-danger" href="index.php">Kembali</a>
            </div>
            <form action="../../../proses/edit-berita2.php?id=<?=$hasil['id'];?>" method="post">
                <table class="tbl" cellpadding="5px">
                    <tr>  
                        <tr>
                            <td>
                                <input type="file" name="gambar" id="gambar" value="<?=$hasil['gambar'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="judul" id="" value="<?=$hasil['judul'];?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="penerbit" id="" value="<?=$hasil['penerbit'];?>"></td>
                        </tr>
                        <tr>
                            <td><textarea name="isi" id=""><?=$hasil['isi'];?></textarea></td>
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

