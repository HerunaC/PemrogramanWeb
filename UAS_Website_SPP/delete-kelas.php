<?php
include('koneksi.php');

if (isset($_GET['id_kelas'])) {
    $id_kelas = $_GET['id_kelas'];

    // Perform SQL query to delete the kelas record
    $query = "DELETE FROM kelas WHERE id_kelas = '$id_kelas'";

    if (mysqli_query($koneksi, $query)) {
        $response = [
            'success' => true,
            'message' => 'Data kelas berhasil dihapus.'
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Gagal menghapus data kelas: ' . mysqli_error($koneksi)
        ];
    }
} else {
    $response = [
        'success' => false,
        'message' => 'ID kelas tidak ditemukan.'
    ];
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
