<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="./css/styles1.css">
</head>
<body>
  <div class="container">
    <form action="signup_process.php" method="POST">
      <h1>Sign Up</h1>
      <input type="text" name="username" placeholder="Username" required>
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Sign Up">
      <p>Already have an account? <a href="login.php">Log in</a></p>
    </form>
  </div>
</body>
</html>
