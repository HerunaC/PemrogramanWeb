<?php
require_once "app.php";
session_start();

$n = updateData($conn, $_GET['id'], $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['notification'] = "Gagal Mengupdate Data";
} else {
    $_SESSION['notification'] = "Berhasil Mengupdate data type: {$_POST['type']}, judul: {$_POST['title']}, episodes: {$_POST['episodes']}, studio: {$_POST['studio']}";
}

header("Location: /animelist.php");
die();
?>
