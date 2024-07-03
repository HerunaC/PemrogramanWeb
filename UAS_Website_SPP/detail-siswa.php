<?php
include('koneksi.php'); // Database connection
include('auth.php'); // Authentication check
// Check if NISN is provided via GET
if (!isset($_GET['nisn'])) {
    header("Location: siswa.php");
    exit();
}

$nisn = $_GET['nisn'];

// Fetch student data from database
$sql_select = "SELECT * FROM siswa WHERE nisn = '$nisn'";
$result = mysqli_query($koneksi, $sql_select);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo "Student not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
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
                    <h1>Detail Siswa</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="siswa.php">Data Siswa</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Detail Siswa</a>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="detail-siswa">
            <div class="detail-item">
                <label>NISN:</label> <span><?php echo $row['nisn']; ?></span>
            </div>
            <div class="detail-item">
                <label>NIS:</label> <span><?php echo $row['nis']; ?></span>
            </div>
            <div class="detail-item">
                <label>Nama:</label> <span><?php echo $row['nama']; ?></span>
            </div>
            <div class="detail-item">
                <label>ID Kelas:</label> <span><?php echo $row['id_kelas']; ?></span>
            </div>
            <div class="detail-item">
                <label>Alamat:</label> <span><?php echo $row['alamat']; ?></span>
            </div>
            <div class="detail-item">
                <label>No Telp:</label> <span><?php echo $row['no_telp']; ?></span>
            </div>
            <div class="detail-item">
                <label>ID SPP:</label> <span><?php echo $row['id_spp']; ?></span>
            </div>
            <div class="detail-item">
                <label>Status Pembayaran:</label>
                <span class="status <?php echo ($row['status_pembayaran'] == 'lunas') ? 'completed' : 'pending'; ?>"><?php echo $row['status_pembayaran']; ?></span>
            </div>
        </div>
    </main>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="js/script.js"></script>
</body>
</html>
