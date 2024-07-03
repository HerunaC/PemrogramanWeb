<?php
    include('koneksi.php'); 
	include('auth.php');
    // Query to get total number of students
    $query_total_siswa = "SELECT COUNT(*) AS total_siswa FROM siswa";
    $result_total_siswa = mysqli_query($koneksi, $query_total_siswa);
    $row_total_siswa = mysqli_fetch_assoc($result_total_siswa);
    $total_siswa = $row_total_siswa['total_siswa'];

    // Query to get number of students with status 'lunas'
    $query_lunas = "SELECT COUNT(*) AS jumlah_lunas FROM siswa WHERE status_pembayaran = 'lunas'";
    $result_lunas = mysqli_query($koneksi, $query_lunas);
    $row_lunas = mysqli_fetch_assoc($result_lunas);
    $jumlah_lunas = $row_lunas['jumlah_lunas'];

    // Query to get number of students with status 'belum lunas'
    $query_belum_lunas = "SELECT COUNT(*) AS jumlah_belum_lunas FROM siswa WHERE status_pembayaran = 'belum lunas'";
    $result_belum_lunas = mysqli_query($koneksi, $query_belum_lunas);
    $row_belum_lunas = mysqli_fetch_assoc($result_belum_lunas);
    $jumlah_belum_lunas = $row_belum_lunas['jumlah_belum_lunas'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>

<section id="sidebar">
		<a href="dashboard.php" class="brand">
			<i class='bx bxs-collection'></i>
			<span class="text">Website SPP</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
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
			<li>
				<a href="siswa.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Data Siswa</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
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
                    <h1>Dashboard</h1>
					<ul class="breadcrumb">
        				<li>
        				    <a class="active" href="#">Home</a>
        				</li>
   					</ul>               
				 </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-group' ></i>
                    <span class="text">
                        <h3><?php echo $total_siswa; ?></h3>
                        <p>Jumlah Siswa</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-calendar-check' ></i>
                    <span class="text">
                        <h3><?php echo $jumlah_lunas; ?></h3>
                        <p>Lunas</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-message-square-x'></i>
                    <span class="text">
                        <h3><?php echo $jumlah_belum_lunas; ?></h3>
                        <p>Belum Lunas</p>
                    </span>
                </li>
            </ul>

        </main>
    </section>
    
    <script src="js/script.js"></script>
</body>
</html>
