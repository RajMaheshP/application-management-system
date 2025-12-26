<?php
include("../config/db.php");
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $res = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($res);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        header("Location: ../" . ($user['role']=="admin" ? "admin" : "user") . "/dashboard.php");
    } else {
        echo "Invalid login";
    }
}
?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>Login</h2>

<form method="post">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="login">Login</button>
</form>
</div>
