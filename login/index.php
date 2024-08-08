<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Java Script -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="fw-bold fs-1">Admin</div>
        <form class="login-form" method="POST" action="../proses/cek-login.php">
          <div class="mt-4">
            <input type="text" name="username" placeholder="username" required />
            <input type="password" name="password" placeholder="password" required />
            <!-- PHP -->
            <?php
              if(isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal"){
                  echo "<div class='alert alert-danger' ><b>username / password salah</b></div>";
                } else if ($_GET['pesan'] == "error"){
                  echo "<div class='alert alert-danger' ><b>username tidak tersedia</b></div>";
                } else if ($_GET['pesan'] == "null") {
                  echo "<div class='alert alert-danger' ><b>anda bukan admin</b></div>";
                }
              }
            ?>
            <!-- PHP -->
            <button>login</button>
          </div>
        </form>
      </div>
    </div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </body>
</html>
