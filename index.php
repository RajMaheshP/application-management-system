<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Application Management System</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h2>Application Management System</h2>

    <?php if (!isset($_SESSION['user_id'])) { ?>
        <a href="auth/register.php">Register</a><br><br>
        <a href="auth/login.php">Login</a>
    <?php } else { ?>
        <a href="user/dashboard.php">Dashboard</a><br><br>
        <a href="auth/logout.php">Logout</a>
    <?php } ?>
</div>

</body>
</html>
