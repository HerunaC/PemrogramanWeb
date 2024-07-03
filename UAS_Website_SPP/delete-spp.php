<?php
include('koneksi.php'); // Include this line to establish database connection

if (isset($_GET['id_spp'])) {
    $id_spp = $_GET['id_spp'];
    
    $query = "DELETE FROM spp WHERE id_spp = $id_spp";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo json_encode(array('success' => true, 'message' => 'Data deleted successfully.'));
    } else {
        echo json_encode(array('success' => false, 'message' => 'Failed to delete data.'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid request.'));
}
?>
