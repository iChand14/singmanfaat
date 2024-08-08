 <?php
// if( !isset($_SESSION[""]) ) {
  //      header("Location: ");
  //      exit;
  // }
  require '../../../proses/simpanHHHR.php';

  // cek apakah tombol submit sudah ditekan atau belum
  if( isset($_GET["submitHHHR"]) ) {

    
      // cek apakah data berhasil di tambahkan atau tidak
      if( tambahHHHR($_GET) > 0 ) {
          echo "
                <script>
                    alert('data berhasil di tambahkan');
                    document.location.href = 'index.php';
                </script>
          ";
      } else {
          echo "
                <script>
                    alert('data gagal di tambahkan');
                    document.location.href = 'index.php';
                </script>
          ";
      }
  }
  require '../../../proses/simpanJASLING.php';

  // cek apakah tombol submit sudah ditekan atau belum
  if( isset($_GET["submitJASLING"]) ) {

    
      // cek apakah data berhasil di tambahkan atau tidak
      if( tambahJASLING($_GET) > 0 ) {
          echo "
                <script>
                    alert('data berhasil di tambahkan');
                    document.location.href = 'index.php';
                </script>
          ";
      } else {
          echo "
                <script>
                    alert('data gagal di tambahkan');
                    document.location.href = 'index.php';
                </script>
          ";
      }
  }
  require '../../../proses/simpanHHBK.php';

  // cek apakah tombol submit sudah ditekan atau belum
  if( isset($_GET["submitHHBK"]) ) {

    
      // cek apakah data berhasil di tambahkan atau tidak
      if( tambahHHBK($_GET) > 0 ) {
          echo "
                <script>
                    alert('data berhasil di tambahkan');
                    document.location.href = 'index.php';
                </script>
          ";
      } else {
          echo "
                <script>
                    alert('data gagal di tambahkan');
                    document.location.href = 'index.php';
                </script>
          ";
      }
  }
  
session_start();
   if($_SESSION['lvl'] == "I"){
    if ($_SESSION['kabupaten_kota'] == "Kab-Bogor") {
      $kabkot = "Bogor";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='I' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='I' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='I' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kota-Bogor") {
      $kabkot = "Bogor";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='I' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='I' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='I' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kota-Depok") {
      $kabkot = "Depok";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='I' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='I' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='I' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kab-Bekasi") {
      $kabkot = "Bekasi";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='I' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='I' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='I' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kota-Bekasi"){
      $kabkot = "Bekasi";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='I' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='I' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='I' AND kabupaten='$kabkot'");
    }
    $query4=mysqli_query($koneksi,"SELECT * FROM artikel");
   } else if($_SESSION['lvl'] == "II"){
    if ($_SESSION['kabupaten_kota'] == "Kab-Karawang") {
      $kabkot = "Karawang";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='II' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='II' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='II' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kab-Purwakarta") {
      $kabkot = "Purwakarta";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='II' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='II' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='II' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kab-Subang"){
      $kabkot = "Subang";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='II' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='II' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='II' AND kabupaten='$kabkot'");
    }
    $query4=mysqli_query($koneksi,"SELECT * FROM artikel");
   } else if($_SESSION['lvl'] == "III"){
    if ($_SESSION['kabupaten_kota'] == "Kab-Sukabumi") {
      $kabkot = "Sukabumi";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='III' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='III' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='III' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kota-Sukabumi") {
      $kabkot = "Sukabumi";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='III' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='III' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='III' AND kabupaten='$kabkot'");
    }
    $query4=mysqli_query($koneksi,"SELECT * FROM artikel");
   } else if($_SESSION['lvl'] == "IV"){
    if ($_SESSION['kabupaten_kota'] == "Kab-Cianjur") {
      $kabkot = "Cianjur";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='IV' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='IV' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='IV' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kab-BandungBarat") {
      $kabkot = "Bandung Barat";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='IV' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='IV' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='IV' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kota-Cimahi"){
      $kabkot = "Cimahi";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='IV' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='IV' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='IV' AND kabupaten='$kabkot'");
    }
    $query4=mysqli_query($koneksi,"SELECT * FROM artikel");
   } else if($_SESSION['lvl'] == "V"){
    if ($_SESSION['kabupaten_kota'] == "Kab-Garut") {
      $kabkot = "Garut";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='V' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='V' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='V' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kab-Bandung") {
      $kabkot = "Bandung";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='V' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='V' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='V' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kota-Bandung"){
      $kabkot = "Bandung";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='V' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='V' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='V' AND kabupaten='$kabkot'");
    }
    $query4=mysqli_query($koneksi,"SELECT * FROM artikel");
   } else if($_SESSION['lvl'] == "VI"){
    if ($_SESSION['kabupaten_kota'] == "Kab-Tasikmalaya") {
      $kabkot = "Tasikmalaya";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VI' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VI' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VI' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kota-Tasikmalaya") {
      $kabkot = "Tasikmalaya";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VI' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VI' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VI' AND kabupaten='$kabkot'");
    }
   } else if($_SESSION['lvl'] == "VII"){
    if ($_SESSION['kabupaten_kota'] == "Kab-Ciamis") {
      $kabkot = "Ciamis";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VII' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VII' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VII' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kota-Banjar") {
      $kabkot = "Banjar";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VII' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VII' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VII' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kab-Pangandaran"){
      $kabkot = "Pangandaran";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VII' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VII' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VII' AND kabupaten='$kabkot'");
    }
    $query4=mysqli_query($koneksi,"SELECT * FROM artikel");
   } else if($_SESSION['lvl'] == "VIII"){
    if ($_SESSION['kabupaten_kota'] == "Kab-Kuningan") {
      $kabkot = "Kuningan";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VIII' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VIII' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VIII' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kab-Cirebon") {
      $kabkot = "Cirebon";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VIII' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VIII' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VIII' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kota-Cirebon") {
      $kabkot = "Cirebon";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VIII' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VIII' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VIII' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kab-Majalengka") {
      $kabkot = "Majalengka";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='VIII' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='VIII' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='VIII' AND kabupaten='$kabkot'");
    }
    $query4=mysqli_query($koneksi,"SELECT * FROM artikel");
   } else if($_SESSION['lvl'] == "IX"){
    if ($_SESSION['kabupaten_kota'] == "Kab-Sumedang") {
      $kabkot = "Sumedang";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='IX' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='IX' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='IX' AND kabupaten='$kabkot'");
    } else if ($_SESSION['kabupaten_kota'] == "Kab-Indramayu") {
      $kabkot = "Indramayu";
      $query1=mysqli_query($koneksi,"SELECT * FROM jasling WHERE cdk='IX' AND kabupaten='$kabkot'");
      $query2=mysqli_query($koneksi,"SELECT * FROM hhhr WHERE cdk='IX' AND kabupaten='$kabkot'");
      $query3=mysqli_query($koneksi,"SELECT * FROM hhbk WHERE cdk='IX' AND kabupaten='$kabkot'");
    }
    $query4=mysqli_query($koneksi,"SELECT * FROM artikel");
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
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">
  <!-- Java Script -->
  <script src="../../../js/bootstrap.bundle.min.js"></script>
  <!-- Own CSS -->
  <link rel="stylesheet" href="../../../css/tambah.css">
  <link rel="stylesheet" href="../../../css/my-style.css">

  <link rel="stylesheet" href="../../../css/icofont/icofont.min.css">
  <style>
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
  <script>
      function showJASLING() {
        if(document.getElementById('jasling').style.display=='none') {
            document.getElementById('sb-1').style.backgroundColor='#555';
            document.getElementById('sb-1').style.color='#ffffff';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';
      
            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='block';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='none';
        } else {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';
      
            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='block';
        }
    }
      function showHHHR() {
        if(document.getElementById('hhhr').style.display=='none') {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='#555';
            document.getElementById('sb-2').style.color='#ffffff';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';
      
            document.getElementById('hhhr').style.display='block';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='none';
        } else {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';
      
            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='block';
        }
    }
    function showHHBK() {
        if(document.getElementById('hhbk').style.display=='none') {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='#555';
            document.getElementById('sb-3').style.color='#ffffff';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';
      
            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='block';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='none';
        } else {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';
      
            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='block';
        }
    }
    function showVIDEO() {
        if(document.getElementById('video').style.display=='none') {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='#555';
            document.getElementById('sb-4').style.color='#ffffff';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';
      
            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='block';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='none';
        } else {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';
      
            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='block';
        }
    }
    function showBERITA() {
        if(document.getElementById('berita').style.display=='none') {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='#555';
            document.getElementById('sb-5').style.color='#ffffff';
      
            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='block';
            document.getElementById('dis').style.display='none';
        } else {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';
      
            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='block';
        }
    }
    function showADMIN() {
        if(document.getElementById('admin').style.display=='none') {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';

            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='none';
        } else {
            document.getElementById('sb-1').style.backgroundColor='';
            document.getElementById('sb-1').style.color='';
            document.getElementById('sb-2').style.backgroundColor='';
            document.getElementById('sb-2').style.color='';
            document.getElementById('sb-3').style.backgroundColor='';
            document.getElementById('sb-3').style.color='';
            document.getElementById('sb-4').style.backgroundColor='';
            document.getElementById('sb-4').style.color='';
            document.getElementById('sb-5').style.backgroundColor='';
            document.getElementById('sb-5').style.color='';
      
            document.getElementById('hhhr').style.display='none';
            document.getElementById('jasling').style.display='none';
            document.getElementById('hhbk').style.display='none';
            document.getElementById('video').style.display='none';
            document.getElementById('berita').style.display='none';
            document.getElementById('dis').style.display='block';
        }
    }
  </script>

  <title>Admin CDK | Singmanfaat</title>
</head>
<body>
<!-- Navbar -->
<div class="navbar">
  <?php echo "<h5 class='text-light px-4 py-1'>Selamat Datang, <cite class='font-weight-bold'>" . $_SESSION['username'] ."!". "</cite></h5>"; ?>
</div>
<div class="menu px-4">
  
  <!-- Sidebar -->
  <div class="sidebar">
    <ul class="navbar-nav">
      <li>
        <a id="sb-1" class="side-b" href="#" onclick="return showJASLING();">Jasa Lingkungan</a>
      </li>
      <li>
        <a id="sb-2" class="side-b" href="#" onclick="return showHHHR();">Hutan Rakyat</a>
      </li>
      <li>
        <a id="sb-3" class="side-b" href="#" onclick="return showHHBK();">Hasil Hutan Bukan Kayu</a>
      </li>
      <li>
        <a id="sb-4" class="side-b" href="#" onclick="return showVIDEO()">Video</a>
      </li>
      <li>
        <a id="sb-5" class="side-b" href="#" onclick="return showBERITA()">Berita</a>
      </li>
      <li>
        <a class="side-b" href="../../logout.php">Logout</a>
      </li>
    </ul>
  </div>
  <!-- Page content -->
  <div class="content bg-light">
    <div class="container">
      <div class="tab p-4" id="dis">
        <label class="tambah mb-4">Tambah</label>
          <table class="tbl" cellpadding="5px" width="100%">
            <tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
              <tr>
                <td><input type="text" id="disab" disabled></td>
              </tr>
            </tr>
          </table>
        <div align="right">
        <button type="submit" name="submit" class="simpan btn btn-primary" disabled>Simpan</button>
        </div>
      </div>
      <!-- JASLING -->
      <div class="tab p-4" id="jasling" style="display: none;">
        <label class="tambah mb-4">Tambah Data "Jasa Lingkungan"</label><br />
        <div class="row">
          <label class="mt-2 fw-bold text-center">Choose you file. (.xls) <a class="text-decoration-none" href="../../../template/template_jasling.xls" download>Download Template</a></label>
            <div class="col-12 text-center">
              <form action="insert/jasling.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3" width="100%">
                  <label class="input-group-text" for="inputGroupFile01">Upload</label>
                  <input type="file" class="form-control" id="inputGroupFile01" name="namafile-1">
                  <button class="btn btn-success" type="submit" id="inputGroupFileAddon04" name="upload" value="upload">Import</button>
                </div>
              </form>
            </div>
          </div>
        <form action="" method="get">
        <table class="tbl" cellpadding="5px">
        <tr>
          <tr>
            <td><input type="text" name="cdk" id="cdk" required placeholder="CDK"></td>
          </tr>
          <tr>
            <td><input type="text" name="pengelola" id="pengelola" required placeholder="PENGELOLA"></td>
          </tr>
          <tr>
            <td><input type="text" name="anggota" id="anggota" required placeholder="JUMLAH ANGGOTA/TENAGA KERJA"></td>
          </tr>
          <tr>
            <td><input type="text" name="namalokasi" id="namalokasi" required placeholder="NAMA LOKASI WISATA"></td>
          </tr>
          <tr>
            <td><input type="text" name="jenisjasling" id="jenisjasling" required placeholder="JENIS JASA LINGKUNGAN"></td>
          </tr>
          <tr>
            <td><input type="text" name="fungsi" id="fungsi" required placeholder="FUNGSI KAWASAN HUTAN"></td>
          </tr>
          <tr>
            <td><input type="text" name="kph" id="kph" required placeholder="KPH"></td>
          </tr>
          <tr>
            <td><input type="text" name="bkph" id="bkph" required placeholder="BKPH"></td>
          </tr>
          <tr>
            <td><input type="text" name="rph" id="rph" required placeholder="RPH"></td>
          </tr>
          <tr>
            <td><input type="text" name="desa" id="desa" required placeholder="DESA"></td>
          </tr>
          <tr>
            <td><input type="text" name="kecamatan" id="kecamatan" required placeholder="KECAMATAN"></td>
          </tr>
          <tr>
            <td><input type="text" name="kabupaten" id="kabupaten" required placeholder="KABUPATEN"></td>
          </tr>
          <tr>
            <td><input type="text" name="link_map" id="link_map" required placeholder="LINK MAP"></td>
          </tr>
        </tr>
        </table>
        <div align="right">
          <button type="submit" class="simpan btn btn-primary mb-3" name="submitJASLING">Simpan</button>
        </div>
        <div align="right">
          <a class="simpan btn btn-primary mb-3" href="../../../template/jasling.php">Excel</a>
          <a class="print simpan btn btn-primary mb-3" href="../../../proses/cetak-jasling.php">Cetak</a>
        </div>
        </form>
        <div class="bg-light mt-5">
          <div class="row">
            <div class="col-12">
              <table class="table table-striped table-sm">
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
                  <th scope="col" class="text-center" width="50px">...</th>
                </tr>
                  <?php
                      include "../../../koneksi.php";
                      $no=0;    
                      //menampilkan data
                      while($row1=mysqli_fetch_array($query1)){
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
                      <td><a href="jasling.php?id=<?php echo $row1['id']; ?>" class="btn btn-warning"><i class="icofont-edit"></i></a><a a href="../../../proses/hapusJASLING.php?id=<?php echo $row1['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="icofont-bin"></i></a></td>
                  </tr>
                  <?php
                      }
                  ?>     
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- HHHR -->
      <div class="tab p-4" id="hhhr" style="display: none;">
        <label class="tambah mb-4">Tambah Data "Hutan Rakyat"</label>
        <div class="row">
          <label class="mt-2 fw-bold text-center">Choose you file. (.xls) <a class="text-decoration-none" href="../../../template/template_hhhr.xls" download>Download Template</a></label>
            <div class="col-12 text-center">
              <form action="insert/hhhr.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3" width="100%">
                  <label class="input-group-text" for="inputGroupFile01">Upload</label>
                  <input type="file" class="form-control" id="inputGroupFile01" name="namafile-1">
                  <button class="btn btn-success" type="submit" id="inputGroupFileAddon04" name="upload" value="upload">Import</button>
                </div>
              </form>
            </div>
          </div>
        <form action="" method="get">
          <table class="tbl" cellpadding="5px">
            <tr>
              <tr>
                <td><input type="text" name="cdk" required placeholder="CDK"></td>
              </tr>
              <tr>
                <td><input type="text" name="kelompok" required placeholder="NAMA KELOMPOK TANI"></td>
              </tr>
              <tr>
                <td><input type="text" name="jumlah" required placeholder="JUMLAH ANGGOTA"></td>
              </tr>
              <tr>
                <td><input type="text" name="alamat" required placeholder="BLOK / ALAMAT"></td>
              </tr>
              <tr>
                <td><input type="text" name="desa" required placeholder="DESA"></td>
              </tr>
              <tr>
                <td><input type="text" name="kecamatan" required placeholder="KECAMATAN"></td>
              </tr>
              <tr>
                <td><input type="text" name="kabupaten" required placeholder="KABUPATEN"></td>
              </tr>
              <tr>
                <td><input type="text" name="luas" required placeholder="LUAS"></td>
              </tr>
              <tr>
                <td><input type="text" name="tanaman" required placeholder="TANAMAN"></td>
              </tr>
              <tr>
                <td><input type="text" name="jenis" required placeholder="JENIS DARI TANAMAN"></td>
              </tr>
              <tr>
                <td><input type="text" name="link-map" required placeholder="LINK MAP"></td>
              </tr>
            </tr>
          </table>
          <div align="right">
            <button type="submit" name="submitHHHR" class="simpan btn btn-primary mb-3">Simpan</button>
          </div>
          <div align="right">
            <a class="simpan btn btn-primary mb-3" href="../../../template/hhhr.php">Excel</a>
            <a class="print simpan btn btn-primary mb-3" href="../../../proses/cetak-hhr.php">Cetak</a>
         </div>
        </form>
        <div class="bg-light mt-5">
          <div class="row">
            <div class="col-12">
              <table class="table table-striped table-sm">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Cdk</th>
                  <th scope="col">Nama Kelompok Tani</th>
                  <th scope="col">Jumlah Anggota</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Desa</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Kabupaten</th>
                  <th scope="col">Luas</th>
                  <th scope="col">Tanaman</th>
                  <th scope="col">Jenis dari Tanaman</th>
                  <th scope="col" class="text-center" width="50px">...</th>
                </tr>
                  <?php
                      include "../../../koneksi.php";
                      $no=0;    
                      //menampilkan data
                      while($row2=mysqli_fetch_array($query2)){
                      $no++
                  ?>
                  <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $row2['cdk'];?></td>
                      <td><?php echo $row2['nama_kelompok_tani']; ?></td>
                      <td><?php echo $row2['jumlah_anggota'];?></td>
                      <td><?php echo $row2['alamat'] ?></td>
                      <td><?php echo $row2['desa'] ?></td>
                      <td><?php echo $row2['kecamatan'] ?></td>
                      <td><?php echo $row2['kabupaten'] ?></td>
                      <td><?php echo $row2['luas'] ?></td>
                      <td><?php echo $row2['tanaman'] ?></td>
                      <td><?php echo $row2['jenis_dari_tanaman'] ?></td>
                      <td><a href="hhhr.php?id=<?php echo $row2['id']; ?>" class="btn btn-warning"><i class="icofont-edit"></i></a><a a href="../../../proses/hapusHHHR.php?id=<?php echo $row2['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="icofont-bin"></i></a></td>
                  </tr>
                  <?php
                      }
                  ?>     
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- HHBK -->
      <div class="tab p-4" id="hhbk" style="display: none;">
        <label class="tambah mb-4">Tambah Data "Hasil Hutan Bukan Kayu"</label>
        <div class="row">
          <label class="mt-2 fw-bold text-center">Choose you file. (.xls) <a class="text-decoration-none" href="../../../template/template_hhbk.xls" download>Download Template</a></label>
            <div class="col-12 text-center">
              <form action="insert/hhbk.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3" width="100%">
                  <label class="input-group-text" for="inputGroupFile01">Upload</label>
                  <input type="file" class="form-control" id="inputGroupFile01" name="namafile-1">
                  <button class="btn btn-success" type="submit" id="inputGroupFileAddon04" name="upload" value="upload">Import</button>
                </div>
              </form>
            </div>
          </div>
        <form action="" method="get">
        <table class="tbl" cellpadding="5px">
        <tr>  
          <tr>
            <td><input type="text" name="cdk" id="cdk" required placeholder="CDK"></td>
          </tr>
          <tr>
            <td><input type="text" name="nama_kelompok_tani_instasi" id="nama_kelompok_tani_instasi" required placeholder="PENGELOLA"></td>
          </tr>
          <tr>
            <td><input type="text" name="jumblah_anggota_tenaga_kerja" id="jumblah_anggota_tenaga_kerja" required placeholder="JUMLAH ANGGOTA TENAGA KERJA"></td>
          </tr>
          <tr>
            <td><input type="text" name="blok_alamat" id="blok_alamat" required placeholder="BLOK ALAMAT"></td>
          </tr>
          <tr>
            <td><input type="text" name="desa" id="desa" required placeholder="DESA"></td>
          </tr>
          <tr>
            <td><input type="text" name="kecamatan" id="kecamatan" required placeholder="KECAMATAN"></td>
          </tr>
          <tr>
            <td><input type="text" name="kabupaten" id="kabupaten" required placeholder="KABUPATEN"></td>
          </tr>
          <tr>
            <td><input type="text" name="hhbk" id="hhbk" required placeholder="HHBK"></td>
          </tr>
          <tr>
            <td><input type="text" name="satuan" id="satuan" required placeholder="SATUAN"></td>
          </tr>
          <tr>
            <td><input type="text" name="link_map" id="link_map" required placeholder="LINK MAP"></td>
          </tr>
        </tr>
        </table>
        <div align="right">
          <button class="simpan btn btn-primary mb-3" type="submit" name="submitHHBK">Simpan</button>
        </div>
        <div align="right">
            <a class="simpan btn btn-primary mb-3" href="../../../template/hhbk.php">Excel</a>
            <a class="print simpan btn btn-primary mb-3" href="../../../proses/cetak-hhbk.php">Cetak</a>
        </div>
        </form>
        <div class="bg-light mt-5">
          <div class="row">
            <div class="col-12">
              <table class="table table-striped table-sm">
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
                      include "../../../koneksi.php";
                      $no=0;    
                      //menampilkan data
                      while($row3=mysqli_fetch_array($query3)){
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
                      <td><a href="hhbk.php?id=<?php echo $row3['id']; ?>" class="btn btn-warning"><i class="icofont-edit"></i></a><a a href="../../../proses/hapusHHBK.php?id=<?php echo $row3['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="icofont-bin"></i></a></td>
                  </tr>
                  <?php
                      }
                  ?>     
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="tab p-4" id="video" style="display: none;">
        <label class="tambah mb-4">Tambah Video</label>
        <div class="row">
          <form action="../../../proses/simpanYOUTUBE.php" method="post" enctype="multipart/form-data">
            <table class="tbl" cellpadding="5px">
              <tr>
                <td>
                  <input type="text" name="yt-link" id="" required placeholder="URL">
                </td>
              </tr>
            </table>
            <div align="right">
              <button class="simpan btn btn-primary mb-3" type="submit" name="submitYOUTUBE">Simpan</button>
            </div>
          </form>
          <div class="bg-light mt-5">
            <div class="container p-5">
              <table class="table table-striped table-sm">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Video</th>
                  <th scope="col">Id Youtube</th>
                  <th scope="col" class="text-center" width="50px">...</th>
                </tr>
                <?php
                $qry = mysqli_query($koneksi , "SELECT * FROM youtube_video ORDER BY id");
                $no = 0;
                while ($yt = mysqli_fetch_array($qry)){
                  $no++
                ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td>
                    <div class="col-12">
                      <iframe width="200" height="115" src="https://www.youtube.com/embed/<?php echo $yt['youtube_id']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </td>
                  <td>
                    <?php echo $yt['youtube_id']; ?>
                  </td>
                  <td>
                    <a a href="../../../proses/hapus-video.php?id=<?php echo $yt['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="icofont-bin"></i></a>
                  </td>
                </tr>
                <?php
                }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div> 
      <div class="tab p-4" id="berita" style="display: none;">
        <label class="tambah mb-4">Tambah Berita</label>
        <div class="row">
          <form action="../../../proses/simpanBERITA.php" method="post" enctype="multipart/form-data">
              <table class="tbl" cellpadding="5px">
                  <tr>
                      <td><input type="file" name="gambar" id="gambar" accept="image/png, image/jpg, image/jpeg"  required></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="judul" id="" required placeholder="Judul"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="penerbit" id="" required value="<?php echo $idUser ?>"></td>
                  </tr>
                  <tr>
                      <td><textarea style="height: 200px;" name="isi" id="" required placeholder="isi"></textarea></td>
                  </tr>
              </table>
              <div align="right">
                  <button class="simpan btn btn-primary mb-3" type="submit" name="submitBERITA">Simpan</button>
              </div>
          </form>
        </div>
        <div class="row text-start">
          <div class="col-4"> 
            <form action="index.php" method="get">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="cari" id="judul_artikel" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2"/>
              <input type="submit" class="btn btn-primary" id="button-addon2" value="Cari"/>
            </div>
            </form>
            <?php 
                if(isset($_GET['cari'])){
                  $cari = $_GET['cari'];
                  // echo "<b>Hasil pencarian : ".$cari."</b>";
                  if($cari){
                    echo "<div class='mb-3 text-dark'>Hasil Pencarian : <cite class='fw-bold'> ".$cari." </cite></div>";
                  } 
                }
            ?>
          </div>
          <!-- Memanggil jQuery.js -->
          <script src="../../../jQuery/jquery-3.6.1.min.js"></script>
          <!-- Memanggil Autocomplete.js -->
          <script src="../../../jQuery/jquery.autocomplete.js"></script>
          <script type="text/javascript">
              $(document).ready(function() {
                  // Selector input yang akan menampilkan autocomplete.
                  $( "#judul_artikel" ).autocomplete({
                      serviceUrl: "../../../source/source.php",   // Kode php untuk prosesing data
                      dataType: "JSON",           // Tipe data JSON
                      onSelect: function (suggestion) {
                          $( "#judul_artikel" ).val("" + suggestion.judul);
                      }
                  });
              })
          </script>
        </div>
        <div class="bg-light">
          <div class="row">
            <div class="col-12">
              <table class="table table-striped table-sm">
                <tr>
                  <th scope="col" width="50px">#</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Penerbit</th>
                  <th scope="col">Isi</th>
                  <th scope="col" class="text-center" width="100px">...</th>
                </tr>
                <?php
                      include "../../../koneksi.php";
                      $no=0;
                      //menampilkan data
                      while($row4=mysqli_fetch_array($query4)){
                        $sub_isi = substr($row4['isi'], 0,400);
                        $no++;
                  ?>
                  <tr>
                      <td><?php echo $no ?></td>
                      <td class="text-center"><img src="../../../img/foto-artikel/<?php echo $row4['gambar'];?>" width="150px"/></td>
                      <td><?php echo $row4['judul']; ?></td>
                      <td><?php echo $row4['penerbit'];?></td>
                      <td><?php echo $sub_isi ?></td>
                      <td><a href="berita.php?id=<?php echo $row4['id']; ?>" class="btn btn-warning"><i class="icofont-edit"></i></a> <a href="../../../proses/hapus-artikel.php?id=<?php echo $row4['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');"><i class="icofont-bin"></i></a></td>
                  </tr>
                  <?php 
                      }
                  ?>     
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>