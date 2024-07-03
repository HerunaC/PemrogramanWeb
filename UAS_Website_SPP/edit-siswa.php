<?php
include('koneksi.php'); // Database connection
include('auth.php'); // Authentication check
// Check if NISN is provided via GET
if (!isset($_GET['nisn'])) {
    header("Location: siswa.php");
    exit();
}

$nisn = $_GET['nisn'];

// Fetch data from database
$sql = "SELECT * FROM siswa WHERE nisn = '$nisn'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo "Siswa not found!";
    exit();
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract POST data
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $id_spp = $_POST['id_spp'];
    $status_pembayaran = $_POST['status_pembayaran'];

    // Update record in database
    $sql_update = "UPDATE siswa SET nis = '$nis', nama = '$nama', id_kelas = '$id_kelas', 
                   alamat = '$alamat', no_telp = '$no_telp', id_spp = '$id_spp', 
                   status_pembayaran = '$status_pembayaran' WHERE nisn = '$nisn'";

    if (mysqli_query($koneksi, $sql_update)) {
        header("Location: siswa.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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
                <i class='bx bxs-dashboard'></i>
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
                <i class='bx bxs-doughnut-chart'></i>
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
                <i class='bx bxs-group'></i>
                <span class="text">Data Siswa</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="index.php" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>

<section id="content">
    <nav>
        <i class='bx bx-menu'></i>
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
            <i class='bx bxs-bell'></i>
            <span class="num">1</span>
        </a>
        <a href="#" class="profile">
            <img src="img/user.png">
        </a>
    </nav>
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Edit Siswa</h1>
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
                        <a class="active" href="#">Edit Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="form-container">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nis">NIS:</label>
                    <input type="text" id="nis" name="nis" value="<?php echo $row['nis']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="id_kelas">ID Kelas:</label>
                    <input type="text" id="id_kelas" name="id_kelas" value="<?php echo $row['id_kelas']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea id="alamat" name="alamat" rows="4" required><?php echo $row['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp:</label>
                    <input type="text" id="no_telp" name="no_telp" value="<?php echo $row['no_telp']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="id_spp">ID SPP:</label>
                    <input type="text" id="id_spp" name="id_spp" value="<?php echo $row['id_spp']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="status_pembayaran">Status Pembayaran:</label>
                    <select id="status_pembayaran" name="status_pembayaran" required>
                        <option value="lunas" <?php if ($row['status_pembayaran'] == 'lunas') echo 'selected'; ?>>Lunas</option>
                        <option value="belum lunas" <?php if ($row['status_pembayaran'] == 'belum lunas') echo 'selected'; ?>>Belum Lunas</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="edit" class="btn-submit" value="Update">
                </div>
            </form>
        </div>
    </main>
</section>

<script src="js/script.js"></script>
</body>
</html>
