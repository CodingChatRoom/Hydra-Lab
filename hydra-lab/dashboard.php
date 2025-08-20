<?php
session_start();
if(!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}
$user = htmlspecialchars($_SESSION['user']);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
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
    .dashboard {
      background: #fff;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.25);
      width: 100%;
      max-width: 480px;
      text-align: center;
      animation: fadeIn 0.8s ease-in-out;
    }
    .dashboard img {
      width: 100px;
      border-radius: 50%;
      margin-bottom: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }
    .dashboard h2 {
      margin: 10px 0;
      font-size: 24px;
      color: #2a5298;
    }
    .dashboard p {
      color: #555;
      font-size: 15px;
      margin: 10px 0 20px;
    }
    .username {
      font-weight: bold;
      color: #1e3c72;
    }
    .logout-btn {
      display: inline-block;
      padding: 12px 25px;
      background: #d9534f;
      color: #fff;
      text-decoration: none;
      border-radius: 12px;
      font-size: 15px;
      transition: background 0.3s, transform 0.2s;
    }
    .logout-btn:hover {
      background: #c9302c;
      transform: translateY(-2px);
    }
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-20px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <img src="https://yt3.googleusercontent.com/lBO76cnFZAtUWyCvYcW1yzLR9BgvPqXvzTsRUhQRvDVlxjWHJUTmyo0W4h34zRTRzVtFM3LP=s160-c-k-c0x00ffffff-no-rj" alt="Logo">
    <h2>Welcome 🎉</h2>
    <p>You are logged in as <span class="username"><?php echo $user; ?></span></p>
    <a class="logout-btn" href="logout.php">Logout</a>
  </div>
</body>
</html>
