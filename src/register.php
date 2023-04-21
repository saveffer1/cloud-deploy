<?php
    session_start();
    include('connect.php');

    $name = $_POST['m_name'];
    $email = $_POST['m_email'];
    $password = $_POST['m_pwd'];

    $sql = "INSERT INTO member (uname , email , passwd) VALUES ('".$name."','".$email."','".$password."')";
    $query = mysqli_query($conn,$sql);

    if(!$query){
        header("location:fail.html");
    }
    else{
        session_write_close();
        header("location:main/home.php");
    }
?>