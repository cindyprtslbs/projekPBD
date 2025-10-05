<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register</p>

      <form action="registrasi.php" method="post">
          <!-- Input Username -->
          <div class="input-group mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username" required>
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                  </div>
              </div>
          </div>

          <!-- Input Password -->
          <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                  </div>
              </div>
          </div>

          <!-- Input Retype Password -->
          <div class="input-group mb-3">
              <input type="password" name="confirm_password" class="form-control" placeholder="Retype password" required>
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                  </div>
              </div>
          </div>

          <!-- Tombol Register -->
          <div class="row">
              <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
          </div>
      </form>


      <a href="login.php" class="text-center">I already have an account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>


<?php
require 'konek.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi input
    if (empty($username) || empty($password) || empty($confirm_password)) {
        echo "<script>alert('Semua field harus diisi!');</script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>alert('Password dan Konfirmasi Password tidak cocok!');</script>";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $idrole = 5;

        // Cek apakah username sudah digunakan
        $query = $db->prepare("SELECT * FROM user WHERE username = ?");
        $query->bind_param('s', $username);
        $query->execute();
        $result = $query->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Username sudah terdaftar!');</script>";
        } else {
            $insert_query = $db->prepare("INSERT INTO user (username, password, idrole) VALUES (?, ?, ?)");
            $insert_query->bind_param('ssi', $username, $hashed_password, $idrole);

            if ($insert_query->execute()) {
                echo "<script>alert('Registrasi berhasil! Silakan login.');</script>";
                header("Location: login.php");
                exit;
            } else {
                echo "<script>alert('Registrasi gagal!');</script>";
            }
        }
    }
}
?>
