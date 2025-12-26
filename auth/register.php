<?php
include("../config/db.php");

$message = "";

if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");

    if (mysqli_num_rows($check) > 0) {
        $message = "❌ Email already registered. Please login.";
    } else {
        $insert = mysqli_query($conn,
            "INSERT INTO users (name, email, password)
             VALUES ('$name', '$email', '$password')"
        );

        if ($insert) {
            $message = "✅ Registration successful. You can login now.";
        } else {
            $message = "❌ Something went wrong. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="container">
    <h2>User Registration</h2>

    <?php if ($message != "") { ?>
        <p><strong><?php echo $message; ?></strong></p>
    <?php } ?>

    <form method="post">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register">Register</button>
    </form>

    <br>
    <a href="login.php">Already have an account? Login</a>
</div>

</body>
</html>
