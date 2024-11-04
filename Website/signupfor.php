<?php
include ('config.php');

if (isset($_POST['signupbtn'])) {
    
    //encode text
    // echo base64_encode($str);
    //decode text
    // echo base64_decode(base64_encode($str));

    $username = $_POST["username"];
    $password = base64_encode($_POST["password"]);
    $email = $_POST["email"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $middlename = $_POST["middlename"];
    $birthday = $_POST["birthday"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $time = time(); //epoch

    //echo username
    $sql = "INSERT INTO users (username, password, email, firstname, lastname, middlename, birthday, address, mobile, lastlogin, datecreated) 
    VALUES ('$username', '$password', '$email', '$firstname', '$lastname', '$middlename', '$birthday', '$address', '$mobile', '$time', '$time')";

    //echo sql
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location: login.php");
    } else {
        echo "Error $sql" . "<br>" . mysqli_error($conn);
        header("Location: signup.php");
        exit("error");
    }

    mysqli_close($conn);
}

?>