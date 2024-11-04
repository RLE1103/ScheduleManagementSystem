<?php
include ('config.php');
/*
example account
username: myadmin
password: password
*/

if (isset($_POST['loginbtn'])) {
    
    //encode text
    // echo base64_encode($str);
    //decode text
    // echo base64_decode(base64_encode($str));

    $username = $_POST["username"];
    $password = base64_encode($_POST["password"]);

    //echo username
    $sql = "SELECT *FROM users WHERE username='$username' AND password='$password'";
    
    //Execute  query
    $result = mysqli_query($conn, $sql);

    //echo sql
    // Check if a row was returned
    if ($result && mysqli_num_rows($result) > 0) {
        // Successful login
        header("Location: home.php");
        exit();
    } else {
        // Invalid input
        echo "Error! Invalid username or password.";
        header("Location: login.php");
        exit("error");
    }

    mysqli_close($conn);
}

?>