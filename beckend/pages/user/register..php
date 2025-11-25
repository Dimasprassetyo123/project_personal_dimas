<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Register</title>
  <link rel="stylesheet" href="../../templates-admin/templates/src/assets/css/styles.min.css">
  <link rel="shortcut icon" href="../../templates-admin/templates/src/assets/images/profile/user-1.jpg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

  <style>
    body {
      background: linear-gradient(135deg, #1fa2ff, #12d8fa, #a6ffcb);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-container {
      max-width: 400px;
      width: 100%;
    }

    .card {
      border-radius: 15px;
      box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
      border: none;
    }

    .card-title {
      font-weight: 600;
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
      color: #6c757d;
      pointer-events: none;
    }

    .form-control {
      padding-left: 40px;
      border-radius: 10px;
    }

    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: none;
    }

    .btn-custom {
      background-color: #0d6efd;
      color: white;
      border-radius: 10px;
      font-weight: 500;
    }

    .btn-custom:hover {
      background-color: #0b5ed7;
      color: white;
    }

    .text-muted a {
      text-decoration: none;
      color: #0d6efd;
      font-weight: 500;
    }

    .text-muted a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <div class="card p-4">
      <div class="text-center mb-4">
        <h5 class="card-title">
          <i class="bi bi-person-plus me-2"></i>Admin Register
        </h5>
      </div>

      <form action="../../action/auth/register.php" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <div class="input-icon-wrapper">
            <i class="bi bi-person input-icon"></i>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <div class="input-icon-wrapper">
            <i class="bi bi-envelope-fill input-icon"></i>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-icon-wrapper">
            <i class="bi bi-lock-fill input-icon"></i>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password" required>
          </div>
        </div>

        <button type="submit" class="btn btn-custom w-100 mt-3">
          <i class="bi bi-box-arrow-in-right me-2"></i> Register
        </button>
      </form>

      <p class="text-center text-muted mt-3">
        Sudah punya akun? <a href="./login.php">Login di sini</a>
      </p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
