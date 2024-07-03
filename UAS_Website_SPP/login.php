<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Use prepared statements to prevent SQL injection
$stmt = $koneksi->prepare("SELECT * FROM petugas WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    if ($data['level'] == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location: dashboard.php");
    } else {
        header("location: index.php?pesan=gagal");
    }
} else {
    header("location: index.php?pesan=gagal");
}

$stmt->close();
?>
