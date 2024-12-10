<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <div class="wrapper signup">
        <form action="dbprocess.php" method="post">
            <h1><b>SignUp</b></h1>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input id="user" type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input id="middlename" type="text" class="form-control" name="middlename" placeholder="Middle Name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Last Name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-cake"></i></span>
                <input id="birthday" type="date" class="form-control" name="birthday" placeholder="Birthday" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-house"></i></span>
                <input id="address" type="text" class="form-control" name="address" placeholder="Address" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input id="mobile" type="number" class="form-control" name="mobile" placeholder="Mobile Number" required>
            </div>
            <br>
            <button type="submit" class="btn" name="signupbtn">SignUp</button>
            
            <div class="register-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>