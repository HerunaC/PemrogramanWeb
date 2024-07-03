<?php
include('koneksi.php');

$response = array(); // Initialize response array

if (isset($_GET['id_pembayaran'])) {
    $id_pembayaran = $_GET['id_pembayaran'];

    // First, retrieve the associated NISN from pembayaran table
    $sql_select = "SELECT nisn FROM pembayaran WHERE id_pembayaran = $id_pembayaran";
    $result_select = mysqli_query($koneksi, $sql_select);
    
    if ($result_select && mysqli_num_rows($result_select) > 0) {
        $row = mysqli_fetch_assoc($result_select);
        $nisn = $row['nisn'];

        // Delete the pembayaran record
        $sql_delete = "DELETE FROM pembayaran WHERE id_pembayaran = $id_pembayaran";
        $result_delete = mysqli_query($koneksi, $sql_delete);

        if ($result_delete) {
            // Update the status_pembayaran in siswa table to 'belum lunas'
            $sql_update_siswa = "UPDATE siswa SET status_pembayaran = 'belum lunas' WHERE nisn = '$nisn'";
            $result_update_siswa = mysqli_query($koneksi, $sql_update_siswa);

            if ($result_update_siswa) {
                $response['success'] = true;
                $response['message'] = "Pembayaran record deleted successfully. Status pembayaran updated for NISN: $nisn";
            } else {
                $response['success'] = false;
                $response['message'] = "Error updating siswa status after deleting pembayaran: " . mysqli_error($koneksi);
            }
        } else {
            $response['success'] = false;
            $response['message'] = "Error deleting pembayaran record: " . mysqli_error($koneksi);
        }
    } else {
        $response['success'] = false;
        $response['message'] = "No rows found in pembayaran for id_pembayaran: $id_pembayaran";
    }
} else {
    $response['success'] = false;
    $response['message'] = "id_pembayaran parameter not set";
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
