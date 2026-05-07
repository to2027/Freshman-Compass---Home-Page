<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="login.css">
</head>

<body>

<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="login-box text-center">

    <img src="images/image.jpg" alt="logo">

   
    <form action="login.php" method="POST">

      <input type="text"
             name="email"
             class="form-control mb-3"
             placeholder="Email or username">

      <input type="password"
             name="password"
             class="form-control mb-3"
             placeholder="Password">

      <button type="submit"
              class="btn btn-login w-100 mb-3">
        LOGIN
      </button>

    </form>

    <p>Or login with</p>

    <div>
      <button class="social-btn">Outlook</button>
      <button class="social-btn">Gmail</button>
    </div>

    <div class="links mt-3">
      <a href="index.php">Create account</a>
    </div>

  </div>
</div>

</body>
</html>