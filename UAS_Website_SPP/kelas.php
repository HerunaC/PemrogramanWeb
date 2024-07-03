<?php
include('koneksi.php'); 
include('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <title>Data Kelas</title>
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
			<li class="active">
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
					<h1>Data Kelas</h1>
					<ul class="breadcrumb">
						<li>
							<a href="dashboard.php">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Data Kelas</a>
						</li>
					</ul>
				</di>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>List Kelas</h3>
                        <a href="add-kelas.php" class="btn-add"><i class="bx bx-plus"></i></a>
                    </div>
                    <table id="paymentTable" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Jurusan</th>
                                <th>ID Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM kelas";
                            $result = mysqli_query($koneksi, $sql);
                            $counter = 1;

                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $counter . "</td>";
                                    echo "<td>" . $row["nama_kelas"] . "</td>";
                                    echo "<td>" . $row["jurusan"] . "</td>";
                                    echo "<td>" . $row["id_kelas"] . "</td>";
                                    echo "<td>";
                                    echo "<a href='edit-kelas.php?id_kelas=" . $row["id_kelas"] . "' class='btn-edit'><i class='bx bx-edit'></i></a>";
                                    echo "<a href='#' class='btn-delete' data-id='" . $row["id_kelas"] . "'><i class='bx bx-trash'></i></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $counter++;
                                }
                            } else {
                                echo "<tr><td colspan='5'>No records found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </section>

    <script>
        $(document).ready(function() {
            $('#paymentTable').DataTable({
                "lengthMenu": [10, 20, 50, 100]
            });

            $(document).on('click', '.btn-delete', function(e) {
                e.preventDefault();
                var id_kelas = $(this).data('id');

                if (confirm("Are you sure you want to delete this data?")) {
                    $.ajax({
                        url: 'delete-kelas.php',
                        type: 'GET',
                        data: { id_kelas: id_kelas },
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
                            console.error('Error deleting kelas:', error); // Log error to console
                            alert('Error deleting kelas. Please try again later.'); // Generic error notification
                        }
                    });
                }
            });
        });
    </script>

    <script src="js/script.js"></script>
</body>
</html>
