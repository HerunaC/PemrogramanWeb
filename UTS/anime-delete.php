<?php
require_once "app.php";
session_start();

$id = $_GET['id']; 
$deletedData = ""; 

$record = findAnimeByID($conn, $id);

if ($record) {
    $deletedData = "Data type: {$record['type']}, judul: {$record['title']}, episodes: {$record['episodes']}, studio: {$record['studio']}";
}

if (deleteData($conn, $id)) { 
    $_SESSION['notification'] = "Data berhasil dihapus: " . $deletedData; 
} else {
    $_SESSION['notification'] = "Gagal menghapus data"; 
}

header("Location: /animelist.php"); 
exit();
?>
