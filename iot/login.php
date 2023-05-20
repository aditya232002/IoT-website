<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="./css/styles1.css">
</head>
<body>
  <div class="container">
    <form action="login_process.php" method="POST">
      <h1>Login</h1>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Log in">
      <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
  </div>
</body>
</html>
