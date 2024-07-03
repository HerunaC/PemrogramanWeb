<?php
include('koneksi.php'); // Database connection
include('auth.php'); // Authentication check

// Process form submission for adding/editing student
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract POST data
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $id_spp = $_POST['id_spp'];
    $status_pembayaran = $_POST['status_pembayaran'];

    // Determine if adding or editing
    if (isset($_POST['edit'])) {
        // Update record in database
        $sql_update = "UPDATE siswa SET nis = '$nis', nama = '$nama', id_kelas = '$id_kelas', alamat = '$alamat', no_telp = '$no_telp', id_spp = '$id_spp', status_pembayaran = '$status_pembayaran' WHERE nisn = '$nisn'";

        if (mysqli_query($koneksi, $sql_update)) {
            header("Location: siswa.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($koneksi);
        }
    } else {
        // Insert new record into database
        $sql_insert = "INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp, status_pembayaran) VALUES ('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp', '$status_pembayaran')";

        if (mysqli_query($koneksi, $sql_insert)) {
            header("Location: siswa.php");
            exit();
        } else {
            echo "Error inserting record: " . mysqli_error($koneksi);
        }
    }
}

// Process deletion if requested
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['nisn'])) {
    $nisn = $_GET['nisn'];

    // Delete record from database
    $sql_delete = "DELETE FROM siswa WHERE nisn = '$nisn'";

    if (mysqli_query($koneksi, $sql_delete)) {
        echo json_encode(['success' => true, 'message' => 'Siswa data deleted successfully.']);
        exit();
    } else {
        echo json_encode(['success' => false, 'message' => 'Error deleting siswa data: ' . mysqli_error($koneksi)]);
        exit();
    }
}

// Fetch all students data for displaying in DataTable
$sql_select = "SELECT * FROM siswa";
$result = mysqli_query($koneksi, $sql_select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section id="sidebar">
    <a href="dashboard.php" class="brand">
        <i class='bx bxs-collection'></i>
        <span class="text">Website SPP</span>
    </a>
    <ul class="side-menu top">
        <li>
            <a href="dashboard.php">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="pembayaran.php">
                <i class='bx bxs-report'></i>
                <span class="text">Data Pembayaran</span>
            </a>
        </li>
        <li>
            <a href="spp.php">
                <i class='bx bxs-doughnut-chart' ></i>
                <span class="text">Data SPP</span>
            </a>
        </li>
        <li>
            <a href="kelas.php">
                <i class='bx bx-table'></i>
                <span class="text">Data Kelas</span>
            </a>
        </li>
        <li class="active">
            <a href="siswa.php">
                <i class='bx bxs-group' ></i>
                <span class="text">Data Siswa</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="index.php" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>

<section id="content">
    <nav>
        <i class='bx bx-menu' ></i>
		<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>

        <a href="#" class="notification">
            <i class='bx bxs-bell' ></i>
			<span class="num">1</span>
        </a>
        <a href="#" class="profile">
            <img src="img/user.png">
        </a>
    </nav>
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Data Siswa</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="dashboard.php">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Data Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>List Siswa</h3>
                    <a href="add-siswa.php" class="btn-add"><i class="bx bx-plus"></i></a>
                </div>
                <?php
                // Display success or error messages if any
                if (isset($delete_message)) {
                    echo '<div class="alert success">' . $delete_message . '</div>';
                }
                if (isset($delete_error)) {
                    echo '<div class="alert error">' . $delete_error . '</div>';
                }
                ?>
                <table id="paymentTable" class="display">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>ID Kelas</th>
                        <th>No Telp</th>
                        <th>ID SPP</th>
                        <th>Status Pembayaran</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $counter = 1;
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $counter . "</td>";
                            echo "<td>" . $row["nisn"] . "</td>";
                            echo "<td>" . $row["nis"] . "</td>";
                            echo "<td>" . $row["nama"] . "</td>";
                            echo "<td>" . $row["id_kelas"] . "</td>";
                            echo "<td>" . $row["no_telp"] . "</td>";
                            echo "<td>" . $row["id_spp"] . "</td>";
                            
                            // Check status_pembayaran and add appropriate styling
                            if ($row["status_pembayaran"] == 'lunas') {
                                echo "<td><span class='status completed'>" . $row["status_pembayaran"] . "</span></td>";
                            } else {
                                echo "<td><span class='status pending'>" . $row["status_pembayaran"] . "</span></td>";
                            }
                            
							echo "<td>";
							echo "<a href='edit-siswa.php?nisn=" . $row["nisn"] . "' class='btn-edit'><i class='bx bx-edit'></i></a>";
							echo "<a href='#' class='btn-delete' data-nisn='" . $row["nisn"] . "'><i class='bx bx-trash'></i></a>";
							echo "<a href='detail-siswa.php?nisn=" . $row["nisn"] . "' class='btn-detail'><i class='bx bx-info-circle'></i></a>";
							echo "</td>";
							echo "</tr>";
                            $counter++;
                        }
                    } else {
                        echo "<tr><td colspan='10'>No records found</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#paymentTable').DataTable({
            "lengthMenu": [10, 20, 50, 100]
        });

		$(document).on('click', '.btn-delete', function(e) {
		    e.preventDefault();
		    var nisn = $(this).data('nisn');

		    if (confirm("Are you sure you want to delete this data?")) {
		        $.ajax({
		            url: 'delete-siswa.php',
		            type: 'GET',
		            data: { action: 'delete', nisn: nisn }, // Ensure correct parameter names
		            dataType: 'json',
		            success: function(response) {
		                if (response.success) {
		                    alert(response.message); // Pop-up notification
		                    window.location.reload(); // Reload the page after deletion
		                } else {
		                    alert('Error: ' + response.message); // Error notification
		                }
		            },
		            error: function(xhr, status, error) {
		                console.error('Error deleting siswa:', error); // Log error to console
		                alert('Error deleting siswa. Please try again later.'); // Generic error notification
		            }
		        });
		    }
		});

    });
</script>
<script src="js/script.js"></script>
</body>
</html>
