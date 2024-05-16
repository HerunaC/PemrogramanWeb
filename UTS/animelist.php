<?php
session_start();
require_once "app.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Page</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            padding: 10px;
        }

        .container {
            padding: 0 20px; 
            max-width: 1200px; 
            margin: 0 auto; 
        }

        table {
            width: 100%;
            margin-top: 20px; 
        }

        th, td {
            padding: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
            text-align: center;
        }

        body {
            background-image: url('theme.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            color: white; 
            margin: 0; 
            font-family: Arial, sans-serif; 
        }
        .navbar {
            background-color: #007bff; 
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px; 
        }
        
        .navbar h1 {
            margin: 0;
            font-size: 20px;
        }
        
        .h1 {
            font-size: 12px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        }

        .definition {
            font-size: 14px; 
            margin-bottom: 20px; 
            color: white; 
        }

        .black-text {
            color: black;
        }
        
        .white-text {
            color: white;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; 
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 30px;
        }

        footer {
            background-color: #007bff; 
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }

    </style>
</head>

<body>
    <div class="navbar">
            <h1><span class="black-text">MyAnime</span><span class="white-text">List</span></h1>
    </div>

    <div class="container">
        <h1><span class="black-text">Anime</span><span class="white-text">List</span></h1>
        <p class="definition">Anime (Japanese: アニメ) is hand-drawn and computer-generated animation originating from Japan. Outside Japan and in English, anime refers specifically to animation produced in Japan.</p>
        <a href="/">Back to home</a>
        <br>
        <a href="/anime-add.php" class="button">Add List</a>
        <br>
        <div id="notification" style="display: none;"><?php if(isset($_SESSION['notification'])) echo $_SESSION['notification']; ?></div>
        <br>
        <table>
            <thead>
                <tr>
                    <th>No</th> 
                    <th>Title</th>
                    <th>Type</th>
                    <th>Episodes</th>
                    <th>Studio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($p as $k => $v) : ?>
                    <tr>
                        <td><?= $k + 1 ?></td> 
                        <td><?= $v['title'] ?></td>
                        <td><?= $v['type'] ?></td>
                        <td><?= $v['episodes'] ?></td>
                        <td><?= $v['studio'] ?></td>
                        <td>
                            <a href="<?= "/anime-detail.php?id={$v['id']}" ?>">Detail</a>
                            <a href="<?= "/anime-edit.php?id={$v['id']}" ?>">Edit</a>
                            <a href="<?= "/anime-delete.php?id={$v['id']}" ?>">Delete</a>
                        </td>                    
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <footer>
            <p>&copy; MyAnimeList 2024</p>
    </footer>
    <script>
        function displayNotification() {
            var notificationElement = document.getElementById('notification');
            var notificationMessage = notificationElement.textContent.trim();

            if (notificationMessage) {
                alert(notificationMessage);
                notificationElement.textContent = '';
            }
        }

        window.addEventListener('load', function() {
            displayNotification();
        });
    </script>
</body>

</html>

<?php
mysqli_close($conn);
?>

