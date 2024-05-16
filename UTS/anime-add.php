<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Data</title>
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
        <h1>Add New Data</h1>
        <a href="/animelist.php">Back to list</a>
        <div class="content">

            <form action="anime-store.php" method="post">
                <div>
                    <label>Type</label>
                    <select name="type">
                        <option value="TV">TV</option>
                        <option value="OVA">OVA</option>
                        <option value="MOVIE">MOVIE</option>
                    </select>
                </div>
                <div>
                    <label>Title</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label>Episodes</label>
                    <input type="text" name="episodes">
                </div>
                <div>
                    <label>Studio</label>
                    <input type="text" name="studio">
                </div>
                <div style="margin-top: 20px;">
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</body>

</html>