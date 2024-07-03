<?php
include('koneksi.php'); // Include this line to establish database connection
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Data Pembayaran</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
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
			<li class="active">
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
			<li>
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
				    <h1>Data Pembayaran</h1>
				    <ul class="breadcrumb">
				        <li>
				            <a href="dashboard.php">Home</a>
				        </li>
				        <li><i class='bx bx-chevron-right'></i></li>
				        <li>
				            <a class="active" href="#">Data Pembayaran</a>
				        </li>
				    </ul>				
				</div>
			</div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>List Pembayaran</h3>
                        <a href="add-pembayaran.php" class="btn-add"><i class="bx bx-plus"></i></a>
                    </div>
                    <table id="paymentTable" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Pembayaran</th>
                                <th>ID Petugas</th>
                                <th>NISN</th>
                                <th>Tanggal Bayar</th>
                                <th>Bulan Dibayar</th>
                                <th>Tahun Dibayar</th>
                                <th>ID SPP</th>
                                <th>Jumlah Bayar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM pembayaran ORDER BY id_pembayaran DESC";
                            $result = mysqli_query($koneksi, $sql);
                            $counter = 1;

                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $counter . "</td>";
                                    echo "<td>" . $row["id_pembayaran"] . "</td>";
                                    echo "<td>" . $row["id_petugas"] . "</td>";
                                    echo "<td>" . $row["nisn"] . "</td>";
                                    echo "<td>" . $row["tgl_bayar"] . "</td>";
                                    echo "<td>" . $row["bulan_dibayar"] . "</td>";
                                    echo "<td>" . $row["tahun_dibayar"] . "</td>";
                                    echo "<td>" . $row["id_spp"] . "</td>";
                                    echo "<td>" . $row["jumlah_bayar"] . "</td>";
                                    echo "<td>";
                                    echo "<a href='edit-pembayaran.php?id_pembayaran=" . $row["id_pembayaran"] . "' class='btn-edit'><i class='bx bx-edit'></i></a>";
                                    echo "<a href='#' class='btn-delete' data-id='" . $row["id_pembayaran"] . "'><i class='bx bx-trash'></i></a>";
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
    
    <!-- Initialize DataTables -->
    <script>
		$(document).ready(function() {
			$('#paymentTable').DataTable({
				"lengthMenu": [10, 20, 50, 100]
			});
		});

			$(document).on('click', '.btn-delete', function(e) {
			    e.preventDefault();
			    var id_pembayaran = $(this).data('id');

			    if (confirm("Are you sure you want to delete this data?")) {
			        $.ajax({
			            url: 'delete-pembayaran.php',
			            type: 'GET',
			            data: { id_pembayaran: id_pembayaran },
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
			                console.error('Error deleting pembayaran:', error); // Log error to console
			                alert('Error deleting pembayaran. Please try again later.'); // Generic error notification
			            }
			        });
			    }
			});
        
    </script>
    <script src="js/script.js"></script>
</body>
</html>
