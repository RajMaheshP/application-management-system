<?php
include("../config/db.php");
session_start();

mysqli_query($conn,
    "UPDATE applications SET status='{$_GET['s']}' WHERE id='{$_GET['id']}'"
);

header("Location: dashboard.php");
