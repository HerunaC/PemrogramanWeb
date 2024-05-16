<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyAnimeList</title>
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

        .navbar {
            background-color: #007bff; 
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px; 
        }
        
        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }
        
        .button-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            margin-top: -100px; 
        }

        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            position: relative;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .arrow {
            position: absolute;
            top: 48%;
            font-size: 60px; 
            color: white;
            transform: translateY(-50%);
            cursor: pointer;
            display: inline-block; 
        }

        .left {
            left: calc(50% + 80px); 
        }

        .right {
            right: calc(50% + 80px); 
        }

        .black-text {
            color: black;
        }
        
        .white-text {
            color: white;
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

        @keyframes arrowBounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-4px);
            }
            60% {
                transform: translateY(-2px);
            }
        }

    </style>
</head>

<body>
    <div class="navbar">
        <h1><span class="black-text">MyAnime</span><span class="white-text">List</span></h1>
    </div>
    
    <div class="center-content">
        <div class="button-container">
            <a href="animelist.php" class="button">Show List</a>
            <span class="arrow left">&larr;</span>
            <span class="arrow right">&rarr;</span>
        </div>
    </div>

    <footer>
        <p>&copy; MyAnimeList 2024</p>
    </footer>
</body>

</html>
