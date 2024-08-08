<?php
session_start();

include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and pass='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
  // if(isset($_POST['remember'])){
  //   $time = time();
  //   setcookie('user',$username, $time > 3600);
  // }
  $data = mysqli_fetch_assoc($login);

  if($data['lvl']=="I"){
    $_SESSION['username'] = $username;
    $_SESSION['lvl'] = "I";
    if($data['kabupaten_kota'] == "Kab-Bogor"){
      $_SESSION['kabupaten_kota'] = "Kab-Bogor";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kota-Bogor"){
      $_SESSION['kabupaten_kota'] = "Kota-Bogor";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kota-Depok"){
      $_SESSION['kabupaten_kota'] = "Kota-Depok";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kab-Bekasi"){
      $_SESSION['kabupaten_kota'] = "Kab-Bekasi";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kota-Bekasi"){
      $_SESSION['kabupaten_kota'] = "Kota-Bekasi";
      header("location:../login/home/admin/index.php");
    } else {
      header("location:../login/index.php?pesan=null");
    }

  }else if($data['lvl']=="II"){
    $_SESSION['username'] = $username;
    $_SESSION['lvl'] = "II";
    if($data['kabupaten_kota'] == "Kab-Karawang"){
      $_SESSION['kabupaten_kota'] = "Kab-Karawang";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kab-Purwakarta"){
      $_SESSION['kabupaten_kota'] = "Kab-Purwakarta";
      header("location:../login/home/admin/index.php");
    } else if ($data['kabupaten_kota'] == "Kab-Subang"){
      $_SESSION['kabupaten_kota'] = "Kab-Subang";
      header("location:../login/home/admin/index.php");
    } else {
      header("location:../login/index.php?pesan=null");
    }

  }else if($data['lvl']=="III"){
    $_SESSION['username'] = $username;
    $_SESSION['lvl'] = "III";
    if($data['kabupaten_kota'] == "Kab-Sukabumi"){
      $_SESSION['kabupaten_kota'] = "Kab-Sukabumi";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kota-Sukabumi"){
      $_SESSION['kabupaten_kota'] = "Kota-Sukabumi";
      header("location:../login/home/admin/index.php");
    } else {
      header("location:../login/index.php?pesan=null");
    }

  }else if($data['lvl']=="IV"){
    $_SESSION['username'] = $username;
    $_SESSION['lvl'] = "IV";
    if($data['kabupaten_kota'] == "Kab-Cianjur"){
      $_SESSION['kabupaten_kota'] = "Kab-Cianjur";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kab-BandungBarat"){
      $_SESSION['kabupaten_kota'] = "Kab-BandungBarat";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kota-Cimahi"){
      $_SESSION['kabupaten_kota'] = "Kota-Cimahi";
      header("location:../login/home/admin/index.php");
    } else {
      header("location:../login/index.php?pesan=null");
    }

  }else if($data['lvl']=="V"){
    $_SESSION['username'] = $username;
    $_SESSION['lvl'] = "V";
    if($data['kabupaten_kota'] == "Kab-Garut"){
      $_SESSION['kabupaten_kota'] = "Kab-Garut";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kab-Bandung"){
      $_SESSION['kabupaten_kota'] = "Kab-Bandung";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kota-Bandung"){
      $_SESSION['kabupaten_kota'] = "Kota-Bandung";
      header("location:../login/home/admin/index.php");
    } else {
      header("location:../login/index.php?pesan=null");
    }

  }else if($data['lvl']=="VI"){
    $_SESSION['username'] = $username;
    $_SESSION['lvl'] = "VI";
    if($data['kabupaten_kota'] == "Kab-Tasikmalaya"){
      $_SESSION['kabupaten_kota'] = "Kab-Tasikmalaya";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kota-Tasikmalaya"){
      $_SESSION['kabupaten_kota'] = "Kota-Tasikmalaya";
      header("location:../login/home/admin/index.php");
    } else {
      header("location:../login/index.php?pesan=null");
    }

  }else if($data['lvl']=="VII"){
    $_SESSION['username'] = $username;
    $_SESSION['lvl'] = "VII";
    if($data['kabupaten_kota'] == "Kab-Ciamis"){
      $_SESSION['kabupaten_kota'] = "Kab-Ciamis";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kota-Banjar"){
      $_SESSION['kabupaten_kota'] = "Kota-Banjar";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kab-Pangandaran"){
      $_SESSION['kabupaten_kota'] = "Kab-Pangandaran";
      header("location:../login/home/admin/index.php");
    } else {
      header("location:../login/index.php?pesan=null");
    }

  }else if($data['lvl']=="VIII"){
    $_SESSION['username'] = $username;
    $_SESSION['lvl'] = "VIII";
    if($data['kabupaten_kota'] == "Kab-Kuningan"){
      $_SESSION['kabupaten_kota'] = "Kab-Kuningan";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kab-Cirebon"){
      $_SESSION['kabupaten_kota'] = "Kab-Cirebon";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kota-cirebon"){
      $_SESSION['kabupaten_kota'] = "Kota-cirebon";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kab-Majalengka"){
      $_SESSION['kabupaten_kota'] = "Kab-Majalengka";
      header("location:../login/home/admin/index.php");
    } else {
      header("location:../login/index.php?pesan=null");
    }

  }else if($data['lvl']=="IX"){
    $_SESSION['username'] = $username;
    $_SESSION['lvl'] = "IX";
    if($data['kabupaten_kota'] == "Kab-Sumedang"){
      $_SESSION['kabupaten_kota'] = "Kab-Sumedang";
      header("location:../login/home/admin/index.php");
    } else if($data['kabupaten_kota'] == "Kab-Indramayu"){
      $_SESSION['kabupaten_kota'] = "Kab-Indramayu";
      header("location:../login/home/admin/index.php");
    } else {
      header("location:../login/home/admin/index.php=null");
    }

  }else if($data['lvl']=="SA"){
    $_SESSION['username'] = $username;
    $_SESSION['lvl'] = "SA";
    header("location:../login/home/super-admin/index.php");

  }else if ($data['lvl']==""){

    header("location:../login/index.php?pesan=null");

  }else{

    header("location:../login/index.php?pesan=gagal");

  }

 }else{
   header("location:../login/index.php?pesan=error");
 }

?>