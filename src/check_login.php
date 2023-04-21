<?php
    session_start();
    include('connect.php');
 
    $email = $_POST['m_email'];
    $passwd = $_POST['m_pwd'];

    $sql = "SELECT * FROM member WHERE '".$email."' = email AND '".$passwd."' = passwd";

    $query = mysqli_query($conn,$sql);
    $resault = mysqli_fetch_array($query,MYSQLI_ASSOC);
 
    if(!$resault){
       header("location:fail.html"); 
    }
    else{
        session_write_close();
        header("location:main/home.php");
    }
    mysqli_close($conn);


?>