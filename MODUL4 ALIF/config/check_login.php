<?php
require("../config/connector.php");
$email = $_POST['email'];
$password = $_POST['password'];
session_start();
$sql = "SELECT * FROM users_alif WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $user = $row;    
  }
  // var_dump($user["password"]); die;
  if(md5($password) == $user["password"]) {
      $_SESSION['login'] = true;
      $_SESSION['user_id'] = $user["id"];
      $_SESSION['email'] = $user["email"];
      $_SESSION['nama'] = $user["nama"];
      $_SESSION['no_hp'] = $user["no_hp"];
      if(isset($_POST['remember'])) {
        if($_POST['remember'] == "checked") {
          setcookie("login", true, time() + (86400 * 300), "/"); // 86400 = 1 day
          setcookie("user_id", $user["id"], time() + (86400 * 300), "/"); // 86400 = 1 day
        }
      }
      header("location: ../Home-Alif.php", true, 301);
    exit();
  } else {
    $_SESSION['error'] = "Password Anda salah!";
    header("Location: ../Login-Alif.php", true, 301);
    exit();
  }
} else {
    // var_dump("gagal"); die;
    $_SESSION['error'] = "Email Anda salah!";
    header("Location: ../Login-Alif.php", true, 301);
    exit();
}
$conn->close();