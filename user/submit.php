<?php
include("../config/db.php");
session_start();

if (isset($_POST['submit'])) {
    mysqli_query($conn,
        "INSERT INTO applications (user_id,subject,message)
         VALUES ('{$_SESSION['user_id']}','{$_POST['subject']}','{$_POST['message']}')"
    );
    echo "Application submitted";
}
?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>Submit Application</h2>

<form method="post">
    <input name="subject" placeholder="Subject" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <button name="submit">Submit</button>
</form>

<a href="dashboard.php">Back</a>
</div>
