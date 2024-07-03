<?php
    include('koneksi.php'); 
    include('auth.php'); // Authentication check
    // Check if ID is provided via GET
    if (!isset($_GET['id_pembayaran'])) {
        header("Location: pembayaran.php");
        exit();
    }

    $id_pembayaran = $_GET['id_pembayaran'];

    // Fetch data from database
    $sql = "SELECT * FROM pembayaran WHERE id_pembayaran = '$id_pembayaran'";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "Pembayaran not found!";
        exit();
    }

    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Extract POST data
        $id_petugas = $_POST['id_petugas'];
        $nisn = $_POST['nisn'];
        $tgl_bayar = $_POST['tgl_bayar'];
        $bulan_dibayar = $_POST['bulan_dibayar'];
        $tahun_dibayar = $_POST['tahun_dibayar'];
        $id_spp = $_POST['id_spp'];
        $jumlah_bayar = $_POST['jumlah_bayar'];

        // Update record in database
        $sql_update = "UPDATE pembayaran SET id_petugas = '$id_petugas', nisn = '$nisn', 
                       tgl_bayar = '$tgl_bayar', bulan_dibayar = '$bulan_dibayar', 
                       tahun_dibayar = '$tahun_dibayar', id_spp = '$id_spp', 
                       jumlah_bayar = '$jumlah_bayar' WHERE id_pembayaran = '$id_pembayaran'";

        if (mysqli_query($koneksi, $sql_update)) {
            header("Location: pembayaran.php");
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
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Pembayaran</title>
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
                    <h1>Edit Pembayaran</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="pembayaran.php">Data Pembayaran</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Edit Pembayaran</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form-container">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id_pembayaran=' . $id_pembayaran; ?>">
                    <!-- Form fields pre-populated with existing data -->
                    <div class="form-group">
                        <label for="id_petugas">ID Petugas:</label>
                        <input type="text" id="id_petugas" name="id_petugas" value="<?php echo $row['id_petugas']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nisn">NISN:</label>
                        <input type="text" id="nisn" name="nisn" value="<?php echo $row['nisn']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="tgl_bayar">Tanggal Bayar:</label>
                        <input type="date" id="tgl_bayar" name="tgl_bayar" value="<?php echo $row['tgl_bayar']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="bulan_dibayar">Bulan Dibayar:</label>
                        <input type="text" id="bulan_dibayar" name="bulan_dibayar" value="<?php echo $row['bulan_dibayar']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="tahun_dibayar">Tahun Dibayar:</label>
                        <input type="text" id="tahun_dibayar" name="tahun_dibayar" value="<?php echo $row['tahun_dibayar']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="id_spp">ID SPP:</label>
                        <input type="text" id="id_spp" name="id_spp" value="<?php echo $row['id_spp']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_bayar">Jumlah Bayar:</label>
                        <input type="text" id="jumlah_bayar" name="jumlah_bayar" value="<?php echo $row['jumlah_bayar']; ?>" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Update">
                    </div>
                </form>
            </div>
        </main>
    </section>

    <script src="js/script.js"></script>
</body>
</html>
