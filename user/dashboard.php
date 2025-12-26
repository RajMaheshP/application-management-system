<?php
session_start();
if (!isset($_SESSION['user_id'])) header("Location: ../auth/login.php");
?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>User Dashboard</h2>

<a href="submit.php">Submit Application</a><br><br>
<a href="my_applications.php">My Applications</a><br><br>
<a href="../auth/logout.php">Logout</a>
</div>
