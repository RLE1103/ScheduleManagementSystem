<?php
    session_start();

    if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
    {
        header("Location:login.php");  
    }

    //echo $_SESSION['use'];
    //echo "Login Success";
?>