<?php
require '../FP/backend/login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css"
    integrity="sha384-nEnU7Ae+3lD52AK+RGNzgieBWMnEfgTbRHIwEvp1XXPdqdO6uLTd/NwXbzboqjc2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #eef2f7;
      background-size: cover;
      background-repeat: no-repeat;
      color: #4B569F;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: Arial, sans-serif;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 2000;
      background-color: #4B569F;
    }

    .navbar-brand,
    .navbar-nav .nav-link {
      color: #ffffff !important;
      font-weight: bold;
    }

    .nav-link:hover {
      color: black !important;
    }
    .navbar-brand:hover {
      color: black !important;
    }

    .login-container {
      margin-top: 200px;
      border-radius: 10px;
      background-color: #f7f7f7;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      padding: 20px;
      max-width: 500px;
    }

    .title {
      text-align: center;
      font-size: 36px;
      font-weight: 800;
      color: #4B569F;
    }

    .card {
      background-color: #ffffff;
      border: 1px solid #4B569F;
    }

    .form-control{
      background-color: #ffffff;
      border: 2px solid #4B569F;
    }

    .card-header {
      background-color: #4B569F;
      color: #ffffff;
    }

    .form-group label {
      color: #4B569F;
    }

    .btn-primary {
      background-color: #4B569F;
      border: none;
    }

    .btn-primary:hover {
      background-color: #3E4687;
    }

    .btn-warning {
      color: #ffffff;
      background-color: #4B569F;
      border: none;
    }

    .btn-warning:hover {
      background-color: #3E4687;
    }
    .container p {
      color: #4B569F;
    }
    .social-icons a {
      color: #4B569F;
      font-size: 18px;
    }

    .social-icons a:hover {
      color: #3E4687;
    }

  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-bus"></i> BUROQ TRANSPORT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php"><i class="fas fa-concierge-bell"></i> Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
      </li>
    </ul>
  </div>
</nav>



  <div class="login-container">
    <div class="card">
      <div class="card-header text-center">
        <h4>Login</h4>
      </div>

      <!-- Tampilkan pesan error jika ada -->
      <div class="text-center">
        <?php
        if (!empty($error)) {
          echo "<div class='alert alert-danger'>$error</div>";
        }
        ?>
      </div>

      <div class="card-body">
        <form action="backend/login.php" method="POST">
          <div class="form-group">
            <label for="username_or_email">Username or Email</label>
            <input type="text" name="username_or_email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center mt-3">
          <p>Belum memiliki akun? <b><a href="register.php" class="btn btn-warning">Daftar di sini</a></b></p>
        </div>
        <div class="text-center mt-3">
          <p>Lupa password? <b><a href="forgot_password.php" class="btn btn-warning">Ganti Password</a></b></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center py-5 mt-5">
    <p class="mb-0">&copy; 2024 Buroq Transport. All Rights Reserved.</p>
    <div class="social-icons mt-3">
      <a href="https://web.facebook.com/syandila.syandila.56/" class="mx-2"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="mx-2"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/trafargar__/" class="mx-2"><i class="fab fa-instagram"></i></a>
      <a href="https://www.tiktok.com/@albedo1128?lang=id-ID" class="mx-2"><i class="fab fa-tiktok"></i></a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>