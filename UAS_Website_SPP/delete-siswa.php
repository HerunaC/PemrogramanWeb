<?php
include('koneksi.php');

$response = array(); // Initialize response array

if (isset($_GET['nisn'])) {
    $nisn = $_GET['nisn'];

    // First, delete all pembayaran records associated with the nisn
    $sql_delete_pembayaran = "DELETE FROM pembayaran WHERE nisn = '$nisn'";
    $result_delete_pembayaran = mysqli_query($koneksi, $sql_delete_pembayaran);

    if ($result_delete_pembayaran) {
        // Now delete the siswa record
        $sql_delete_siswa = "DELETE FROM siswa WHERE nisn = '$nisn'";
        $result_delete_siswa = mysqli_query($koneksi, $sql_delete_siswa);

        if ($result_delete_siswa) {
            $response['success'] = true;
            $response['message'] = "Siswa data and associated pembayaran records deleted successfully.";
        } else {
            $response['success'] = false;
            $response['message'] = "Error deleting siswa record: " . mysqli_error($koneksi);
        }
    } else {
        $response['success'] = false;
        $response['message'] = "Error deleting pembayaran records: " . mysqli_error($koneksi);
    }
} else {
    $response['success'] = false;
    $response['message'] = "nisn parameter not set";
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
