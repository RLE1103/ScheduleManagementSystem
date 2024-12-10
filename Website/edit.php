<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <?php
        include ('config.php');

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }

        $query = "SELECT *FROM users WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        if (isset($_POST["update"])) {
            $username = $_POST['username'];
            $password = base64_encode($_POST['password']);
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $middlename = $_POST['middlename'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
                
            $sql = "UPDATE users SET 
                username='$username', 
                password='$password', 
                email='$email', 
                firstname='$firstname', 
                lastname='$lastname', 
                middlename='$middlename', 
                birthday='$birthday', 
                address='$address', 
                mobile='$mobile' 
                WHERE id='$id'";
                
            $result = mysqli_query($conn, $sql);
                
            if ($result) {
                header("Location: user.php?<div class='alert alert-success'>Record updated successfully!</div>");
            } else {
                echo "<div class='alert alert-danger'>Error updating record: " . mysqli_error($conn) . "</div>";
            }
            mysqli_close($conn);
        }
    ?>
    <div class="wrapper signup">
        <form action="" method="post">
            <a href="user.php" class="btn-close closebtn" aria-label="Close"></a>
            <h1><b>Edit User</b></h1>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input id="user" type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row["username"]?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $row["password"]?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input id="email" type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row["email"]?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php echo $row["firstname"]?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input id="middlename" type="text" class="form-control" name="middlename" placeholder="Middle Name" value="<?php echo $row["middlename"]?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php echo $row["lastname"]?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-cake"></i></span>
                <input id="birthday" type="date" class="form-control" name="birthday" placeholder="Birthday" value="<?php echo $row["birthday"]?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-house"></i></span>
                <input id="address" type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $row["address"]?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input id="mobile" type="number" class="form-control" name="mobile" placeholder="Mobile Number" value="<?php echo $row["mobile"]?>">
            </div>
            <br>
            <button type="submit" class="btn" name="update">Update</button>
        </form>
    </div>
</body>
</html>
