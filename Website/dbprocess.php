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

if (isset($_POST['addbtn'])) {
    
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
            header("Location: user.php");
    } else {
        echo "Error $sql" . "<br>" . mysqli_error($conn);
        header("Location: user.php");
        exit("error");
    }

    mysqli_close($conn);
}

// Enroll User
if (isset($_POST['enrolluser'])) {
    $username = $_POST["user"];
    $subject_name = $_POST["subject"];
    $time = time();

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<div class='alert alert-success' role='alert'>Success! User has been Enrolled.</div>";

        $subject_sql = "INSERT INTO subject (name, timecreated, lastupdated) 
                        VALUES ('$subject_name', $time, $time)";

        if (mysqli_query($conn, $subject_sql)) {
            echo "New subject created successfully";
            header("Location: maintenance.php");
        } else {
            header("Location: maintenance.php");
            echo "<div class='alert alert-danger' role='alert'>Error: " . $subject_sql . "<br>" . mysqli_error($conn) . "</div>";
            exit("<div class='alert alert-danger' role='alert'>Error occurred while inserting subject.</div>");
        }
    } else {
        header("Location: maintenance.php");
        echo "<div class='alert alert-danger' role='alert'>Error! Invalid username.</div>";
        exit("<div class='alert alert-danger' role='alert'>Error occurred.</div>");
    }

    mysqli_close($conn);
}

// Assign Role
if (isset($_POST['assignrole'])) {
    $user_id = $_POST['user2'];
    $role_id = $_POST['role'];
    $timecreated = time();

    $sql = "INSERT INTO user_role (userid, roleid, timecreated) 
            VALUES ('$user_id', '$role_id', '$timecreated')";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success' role='alert'>Role assigned successfully.</div>";
        header("Location: maintenance.php");
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
        header("Location: maintenance.php");
    }
}

// Assign Subject
if (isset($_POST['assignsub'])) {
    $user_id = $_POST['user'];
    $subject_id = $_POST['subject2'];
    $timecreated = time(); 

    $sql = "INSERT INTO teaching_load (userid, subject, timecreated) 
            VALUES ('$user_id', '$subject_id', '$timecreated')";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success' role='alert'>Subject assigned successfully.</div>";
        header("Location: maintenance.php");
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
        header("Location: maintenance.php");
    }
}
?>