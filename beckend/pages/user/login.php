<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../../templates-admin/templates/src/assets/css/styles.min.css">
  <link rel="shortcut icon" href="../../templates-admin/templates/src/assets/images/profile/user-1.jpg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

  <style>
    body {
      background: linear-gradient(135deg, #17a2b8, #0d6efd);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-container {
      max-width: 420px;
      width: 100%;
    }

    .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
    }

    .card-body {
      padding: 2rem;
    }

    .card-title {
      font-weight: 600;
      font-size: 1.3rem;
      color: #0d6efd;
    }

    .input-icon-wrapper {
      position: relative;
    }

    .input-icon {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      z-index: 5;
      pointer-events: none;
      color: #6c757d;
    }

    .form-control {
      padding-left: 40px;
      border-radius: 10px;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #0d6efd;
    }

    .btn-custom {
      background: #0d6efd;
      border: none;
      border-radius: 10px;
      padding: 10px;
      font-weight: 500;
      transition: all 0.3s ease;
      color: white;
    }

    .btn-custom:hover {
      background: #0b5ed7;
      transform: translateY(-2px);
      color: white;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .text-center a {
      text-decoration: none;
      color: #0d6efd;
      font-weight: 500;
    }

    .text-center a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <div class="card shadow-lg">
      <div class="card-body">
        <div class="text-center mb-4">
          <h5 class="card-title">
            <i class="bi bi-person-lock me-2"></i>Admin Login
          </h5>
        </div>

        <!-- form PHP tetap sama -->
        <form action="../../action/auth/login_proses.php" method="POST">
          <div class="mb-3">
            <label for="emailInput" class="form-label">Email</label>
            <div class="input-icon-wrapper">
              <i class="bi bi-envelope-fill input-icon"></i>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="passwordInput" class="form-label">Password</label>
            <div class="input-icon-wrapper">
              <i class="bi bi-lock-fill input-icon"></i>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
          </div>

          <button type="submit" class="btn btn-custom w-100 mt-3">
            <i class="bi bi-box-arrow-in-right me-2"></i>Login
          </button>
        </form>

        <p class="text-center mt-3 text-muted">
          Belum ada akun? <a href="./register..php"><u>Buat di sini</u></a>
        </p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
