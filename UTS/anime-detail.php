<?php
require_once "app.php";

$id = $_GET['id'];

$d = findAnimeByID($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anime</title>
    <style>
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

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: white; 
            color: black; 
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Detail Anime</h1>
        <a href="/animelist.php">Back to list</a>
        <br>
        <p>Title : <?= $d['title'] ?></p>
        <p>Type : <?= $d['type'] ?></p>
        <p>Episodes : <?= $d['episodes'] ?></p>
        <p>Studio : <?= $d['studio'] ?></p>
        <p>Created At : <?= $d['created_at'] ?></p>
        <p>Updated At : <?= $d['updated_at'] ?></p>
    </div>
</body>

</html>

<?php
mysqli_close($conn);
?>