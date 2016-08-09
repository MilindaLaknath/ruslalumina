<?php

// 1. Create a database connection
$conn = mysqli_connect("127.0.0.1", "root", "123", "alumna");
// Test if connection succeeded
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
    );
}
?>
