<?php
include ('config.php');
/*
example account
username: myadmin
password: password
*/

session_start(); 
//session_start();    // session starts with the help of this function 

if (isset($_POST['loginbtn'])) {

    

    if(isset($_SESSION['use'])) {
        header("Location:home.php"); 
    }

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
        $_SESSION['use']=$username;
        header("Location: home.php");
        echo '<script type="text/javascript"> window.open("home.php","_self");</script>';
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