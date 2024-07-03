<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username']) || $_SESSION['level'] !== "admin") {
    header("Location: index.php"); // Redirect to login page if not logged in or not admin
    exit();
}
?>
