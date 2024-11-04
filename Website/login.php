<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="wrapper">
        <form action="loginfor.php" method="post">
            <h1><b>Login</b></h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class="bi bi-person-circle"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class="bi bi-lock"></i>
            </div>
            <button type="submit" class="btn" name="loginbtn">Login</button>
            <div class="register-link">
                <a href="signup.php">Are you new user?</a>
            </div>
        </form>
    </div>
</body>
</html>