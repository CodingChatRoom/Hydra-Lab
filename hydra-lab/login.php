<?php
session_start();

$users = [
  "admin" => "admin123",
  "test"  => "test",
  "wolf"  => "1234"
];

$msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $u = $_POST['uname'] ?? "";
  $p = $_POST['pass'] ?? "";
  if (isset($users[$u]) && $users[$u] === $p) {
    $_SESSION['user'] = $u;
    header("Location: dashboard.php");
    exit;
  } else {
    $msg = "Invalid login";
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hydra Lab Login</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-box {
      background: #fff;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.25);
      width: 100%;
      max-width: 380px;
      text-align: center;
      animation: fadeIn 0.8s ease-in-out;
    }
    .login-box img {
      width: 90px;
      border-radius: 50%;
      margin-bottom: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }
    .login-box h2 {
      font-size: 22px;
      margin-bottom: 20px;
      color: #2a5298;
    }
    .login-box label {
      display: block;
      text-align: left;
      font-size: 14px;
      margin: 10px 0 5px;
      color: #444;
    }
    .login-box input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 10px;
      font-size: 14px;
      outline: none;
      transition: 0.3s;
    }
    .login-box input:focus {
      border-color: #2a5298;
      box-shadow: 0 0 5px rgba(42,82,152,0.4);
    }
    .login-box button {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      background: #2a5298;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: 0.3s;
    }
    .login-box button:hover {
      background: #1e3c72;
      transform: translateY(-2px);
    }
    .login-box p {
      margin-top: 15px;
      font-size: 13px;
      color: #777;
    }
    .error {
      color: #d9534f;
      margin-bottom: 10px;
      font-weight: bold;
    }
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-20px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</head>
<body>
  <div class="login-box">
    <img src="https://yt3.googleusercontent.com/lBO76cnFZAtUWyCvYcW1yzLR9BgvPqXvzTsRUhQRvDVlxjWHJUTmyo0W4h34zRTRzVtFM3LP=s160-c-k-c0x00ffffff-no-rj" alt="Logo">
    <h2>Hydra Lab Login</h2>

    <?php if($msg): ?>
      <div class="error"><?php echo $msg; ?></div>
    <?php endif; ?>

    <form method="post" action="login.php">
      <label>Username</label>
      <input type="text" name="uname" required>
      <label>Password</label>
      <input type="password" name="pass" required>
      <button type="submit">Login</button>
    </form>

    <p>Demo users: <b>admin</b> / <b>test</b> / <b>wolf</b></p>
    <a href="https://www.youtube.com/@CodingChatRoom" target="_blank" style="font-size:12px; color:#999; text-decoration:none;">
       Made by <strong>CodingChatRoom</strong>
    </a>
  </div>
</body>
</html>
