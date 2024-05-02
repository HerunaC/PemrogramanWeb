<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to bottom right, #FFD54F, #FFA000); 
            color: black; 
        }
        
        
        .heading {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .work-experience, .education, .skills, .biodata, .hobbies {
            margin-bottom: 20px;
            padding-left: 20px; 
        }
        
        .work-experience h2, .education h2, .skills h2, .biodata h2, .hobbies h2 {
            margin-bottom: 10px;
        }
        
        .work-experience ul, .education ul, .skills ul, .biodata ul, .hobbies ul {
            padding: 0;
        }
        
        .work-experience li, .education li, .skills li, .biodata li, .hobbies li {
            margin-bottom: 5px;
        }
        
        .container {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
            <h1>Kadek Dito Mitabhaheruna</h1>
            <p>Email: herunatokisaki@gmail.com</p>
        </div>

        <div class="biodata">
            <h2>Biodata</h2>
            <ul>
                <?php
                    foreach ($biodata as $key => $value) {
                        echo "<li><strong>{$key}:</strong> {$value}</li>";
                    }
                ?>
            </ul>
        </div>

        <div class="work-experience">
            <h2>Work Experience</h2>
            <ul>
                <?php
                    foreach ($work_experience as $job) {
                        echo "<li><strong>{$job['Position']}</strong> at {$job['Company']} ({$job['Timeframe']})</li>";
                    }
                ?>
            </ul>
        </div>

        <div class="education">
            <h2>Education</h2>
            <ul>
                <?php
                    foreach ($education as $edu) {
                        echo "<li>";
                        if (isset($edu['University'])) {
                            echo "{$edu['Major']} at {$edu['University']}";
                        } else {
                            echo "{$edu['Level']}: {$edu['School']}";
                        }
                        echo " ({$edu['Dates']})</li>";
                    }
                ?>
            </ul>
        </div>

        <div class="skills">
            <h2>Skills</h2>
            <ul>
                <?php
                    foreach ($skills as $skill) {
                        echo "<li>{$skill}</li>";
                    }
                ?>
            </ul>
        </div>

        <div class="hobbies">
            <h2>Hobbies</h2>
            <ul>
                <?php
                    foreach ($hobby as $h) {
                        echo "<li>{$h}</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
