<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">
  <!-- Java Script -->
  <script src="../../../js/bootstrap.bundle.min.js"></script>
  <!-- Own CSS -->
  <link rel="stylesheet" href="../../../css/tambah.css">
  <link rel="stylesheet" href="../../../css/edit.css">
  <link rel="stylesheet" href="../../../css/my-style.css">

  <title>Super Admin | Singmanfaat</title>
</head>
<body>


<div class="menu px-4">
  <!-- Sidebar -->
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
        <a class="disable">Berita</a>
      </li>
      <li>
        <a class="active">Tambah Admin</a>
      </li>
      <li>
        <a class="disable">Logout</a>
      </li>
    </ul>
  </div>
  <!-- Page content -->
<?php
include("../../../koneksi.php"); 

$id=@$_GET['id'];

$sql=mysqli_query($koneksi,"SELECT * FROM user WHERE id='$id'");
while ($hasil = mysqli_fetch_array($sql)){

?> 
  <div class="content bg-light">
    <div class="container">
      <div class="mb-4">
        <a class="btn btn-danger" href="index.php">Kembali</a>
      </div>
      <!-- tambah admin -->
      <div class="tab p-4" id="admin">
        <label class="tambah mb-4">Tambah Admin</label>
        <form action="../../../proses/edit-admin.php?id=<?=$hasil['id'];?>" method="post">
        <table class="tbl" cellpadding="5px">
        <tr>
          <tr>
            <td><input type="text" name="user" value="<?=$hasil['username'];?>"></td>
          </tr>
          <tr>
            <td><input type="text" name="passw" value="<?=$hasil['pass'];?>"></td>
          </tr>
          <tr>
            <td>
              <?php $lvl = $hasil['lvl']; ?>
              <select value="<?=$hasil['lvl'];?>" name="levl">
                <option <?php echo ($lvl == 'I') ? "selected":"" ?>  value="I">I</option>
                <option <?php echo ($lvl == 'II') ? "selected":"" ?> value="II">II</option>
                <option <?php echo ($lvl == 'III') ? "selected":"" ?> value="III">III</option>
                <option <?php echo ($lvl == 'IV') ? "selected":"" ?> value="IV">IV</option>
                <option <?php echo ($lvl == 'V') ? "selected":"" ?> value="V">V</option>
                <option <?php echo ($lvl == 'VI') ? "selected":"" ?> value="VI">VI</option>
                <option <?php echo ($lvl == 'VII') ? "selected":"" ?> value="VII">VII</option>
                <option <?php echo ($lvl == 'VIII') ? "selected":"" ?> value="VIII">VIII</option>
                <option <?php echo ($lvl == 'IX') ? "selected":"" ?> value="IX">IX</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <?php $kabk = $hasil['kabupaten_kota']; ?>
              <select name="kab-kot">
                <option <?php echo ($kabk == 'Kab-Bogor') ? "selected":"" ?> value="Kab-Bogor">Kab. Bogor</option>
                <option <?php echo ($kabk == 'Kota-Bogor') ? "selected":"" ?> value="Kota-Bogor">Kota Bogor</option>
                <option <?php echo ($kabk == 'Kota-Depok') ? "selected":"" ?> value="Kota-Depok">Kota Depok</option>
                <option <?php echo ($kabk == 'Kab-Bekasi') ? "selected":"" ?> value="Kab-Bekasi">Kab. Bekasi</option>
                <option <?php echo ($kabk == 'Kota-Bekasi') ? "selected":"" ?> value="Kota-Bekasi">Kota Bekasi</option>
                <option <?php echo ($kabk == 'Kab-Karawang') ? "selected":"" ?> value="Kab-Karawang">Kab. Karawang</option>
                <option <?php echo ($kabk == 'Kab-Purwakarta') ? "selected":"" ?> value="Kab-Purwakarta">Kab. Purwakarta</option>
                <option <?php echo ($kabk == 'Kab-Subang') ? "selected":"" ?> value="Kab-Subang">Kab. Subang</option>
                <option <?php echo ($kabk == 'Kab-Sukabumi') ? "selected":"" ?> value="Kab-Sukabumi">Kab. Sukabumi</option>
                <option <?php echo ($kabk == 'Kota-Sukabumi') ? "selected":"" ?> value="Kota-Sukabumi">Kota Sukabumi</option>
                <option <?php echo ($kabk == 'Kab-Cianjur') ? "selected":"" ?> value="Kab-Cianjur">Kab. Cianjur</option>
                <option <?php echo ($kabk == 'Kab-BandungBarat') ? "selected":"" ?> value="Kab-BandungBarat">Kab. Bandung Barat</option>
                <option <?php echo ($kabk == 'Kota-Cimahi') ? "selected":"" ?> value="Kota-Cimahi">Kota Cimahi</option>
                <option <?php echo ($kabk == 'Kab-Garut') ? "selected":"" ?> value="Kab-Garut">Kab. Garut</option>
                <option <?php echo ($kabk == 'Kab-Bandung') ? "selected":"" ?> value="Kab-Bandung">Kab. Bandung</option>
                <option <?php echo ($kabk == 'Kota-Bandung') ? "selected":"" ?> value="Kota-Bandung">Kota Bandung</option>
                <option <?php echo ($kabk == 'Kab-Tasikmalaya') ? "selected":"" ?> value="Kab-Tasikmalaya">Kab. Tasikmalaya</option>
                <option <?php echo ($kabk == 'Kota-Tasikmalaya') ? "selected":"" ?> value="Kota-Tasikmalaya">Kota Tasikmalaya</option>
                <option <?php echo ($kabk == 'Kab-Ciamis') ? "selected":"" ?> value="Kab-Ciamis">Kab. Ciamis</option>
                <option <?php echo ($kabk == 'Kota-Banjar') ? "selected":"" ?> value="Kota-Banjar">Kota Banjar</option>
                <option <?php echo ($kabk == 'Kab-Pangandaran') ? "selected":"" ?> value="Kab-Pangandaran">Kab. Pangandaran</option>
                <option <?php echo ($kabk == 'Kab-Kuningan') ? "selected":"" ?> value="Kab-Kuningan">Kab. Kuningan</option>
                <option <?php echo ($kabk == 'Kab-Cirebon') ? "selected":"" ?> value="Kab-Cirebon">Kab. Cirebon</option>
                <option <?php echo ($kabk == 'Kota-Majalengka') ? "selected":"" ?> value="Kota-Majalengka">Kota Majalengka</option>
                <option <?php echo ($kabk == 'Kab-Sumedang') ? "selected":"" ?> value="Kab-Sumedang">Kab. Sumedang</option>
                <option <?php echo ($kabk == 'Kab-Indramayu') ? "selected":"" ?> value="Kab-Indramayu">Kab. Indramayu</option>
              </select>
            </td>
          </tr>
        <?php
        }
        ?>
        </tr>
        </table>
        <div align="right">
          <button class="simpan btn btn-primary mb-3" type="submit" name="editADMIN">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>