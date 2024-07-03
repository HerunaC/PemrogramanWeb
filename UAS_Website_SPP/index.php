<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
