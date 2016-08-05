<?php

// 1. Create a database connection
$conn = mysqli_connect("127.0.0.1", "root", "IronMan@123", "aluma");
// Test if connection succeeded
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
    );
}
?>
