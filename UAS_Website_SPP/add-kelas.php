<?php
include('koneksi.php'); 
include('auth.php');

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract POST data
    $nama_kelas = $_POST['nama_kelas'];
    $jurusan = $_POST['jurusan'];

    // Insert into database
    $sql = "INSERT INTO kelas (nama_kelas, jurusan) VALUES ('$nama_kelas', '$jurusan')";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: kelas.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
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
    <title>Add Kelas</title>
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
                    <h1>Add Kelas</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="kelas.php">Data Kelas</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Add Kelas</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form-container">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <!-- Form fields -->
                    <div class="form-group">
                        <label for="nama_kelas">Nama Kelas:</label>
                        <input type="text" id="nama_kelas" name="nama_kelas" required>
                    </div>
            
                    <div class="form-group">
                        <label for="jurusan">Jurusan:</label>
                        <input type="text" id="jurusan" name="jurusan" required>
                    </div>
            
                    <div class="form-group">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </main>
    </section>

    <script src="js/script.js"></script>
</body>
</html>
