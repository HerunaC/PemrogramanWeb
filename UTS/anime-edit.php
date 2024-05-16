<?php
require_once "app.php";
$id = $_GET['id'];

$p = findAnimeByID($conn, $id);

function selectType($v, $d)
{
    if ($v == $d) {
        return 'selected';
    }

    return '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
    <style>
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }

        .content {
            padding: 20px;
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
        <h1>Edit Details</h1>
        <a href="/animelist.php">Back to listt</a>
        <div class="content">
            <form action="anime-update.php?id=<?= $p['id'] ?>" method="post">
                <div>
                    <label>Type</label>
                    <select name="type">
                        <option <?= selectType("TV", $p['type']) ?> value="TV">TV</option>
                        <option <?= selectType("OVA", $p['type']) ?> value="OVA">OVA</option>
                        <option <?= selectType("MOVIE", $p['type']) ?> value="MOVIE">MOVIE</option>
                    </select>
                </div>
                <div>
                    <label>Title</label>
                    <input type="text" name="title" value="<?= $p['title'] ?>">
                </div>
                <div>
                    <label>Episodes</label>
                    <input type="text" name="episodes" value="<?= $p['episodes'] ?>">
                </div>
                <div>
                    <label>Studio</label>
                    <input type="text" name="studio" value="<?= $p['studio'] ?>">
                </div>
                <div style="margin-top: 20px;">
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>

</body>

</html>