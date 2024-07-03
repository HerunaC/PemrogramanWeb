<?php
include('koneksi.php');
include('auth.php'); // Authentication check
// Process form submission
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

    // Insert new record into database
    $sql_insert = "INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp, status_pembayaran) 
                   VALUES ('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp', '$status_pembayaran')";

    if (mysqli_query($koneksi, $sql_insert)) {
        header("Location: siswa.php");
        exit();
    } else {
        echo "Error inserting record: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Siswa</title>
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
                <h1>Add Siswa</h1>
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
                        <a class="active" href="#">Add Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="form-container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" id="nisn" name="nisn" required>
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" id="nis" name="nis">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="id_kelas">ID Kelas</label>
                    <input type="text" id="id_kelas" name="id_kelas" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" id="no_telp" name="no_telp">
                </div>
                <div class="form-group">
                    <label for="id_spp">ID SPP</label>
                    <input type="text" id="id_spp" name="id_spp">
                </div>
                <div class="form-group">
                    <label for="status_pembayaran">Status Pembayaran</label>
                    <select id="status_pembayaran" name="status_pembayaran">
                        <option value="lunas">Lunas</option>
                        <option value="belum lunas">Belum Lunas</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </main>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="js/script.js"></script>
</body>
</html>
