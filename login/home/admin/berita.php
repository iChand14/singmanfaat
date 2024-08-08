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
    <link rel="stylesheet" href="../../../css/my-style.css">
    <title>Tambah Berita</title>
</head>
<body>
<div class="menu px-4">
    <div class="sidebar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="disabled" href="#">Kel. Hasil Tani</a>
        </li>
        <li>
            <a class="disabled" href="#">Luas Hutan</a>
        </li>
        <li>
            <a class="disabled" href="#">Jasa Lingkungan</a>
        </li>
        <li>
            <a class="disabled" href="#">Hutan Rakyat</a>
        </li>
        <li>
            <a class="disabled" href="#">Hasil Hutan Bukan Kayu</a>
        </li>
        <li class="nav-item dropdown disabled">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hasil Hutan
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kayu</a></li>
            <li><a class="dropdown-item" href="#">Jamur Kayu</a></li>
            <li><a class="dropdown-item" href="#">Madu</a></li>
            <li><a class="dropdown-item" href="#">Bambu</a></li>
            <li><a class="dropdown-item" href="#">Kopi</a></li>
            </ul>
        </li>
        <li>
            <a class="active" href="#">Berita</a>
        </li>
        <li>
            <a class="disabled" href="#">Logout</a>
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
            <form action="../../../proses/edit-berita.php?id=<?=$hasil['id'];?>" method="post">
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

