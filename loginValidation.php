<?php
    session_start();
    require "connect.php";

    $login = $_POST["login"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";

    if($res = $conn -> query($sql)){
        $userCount = $res->num_rows;
        if($userCount > 0){
            $_SESSION['logged-in'] = true;
            header("Location: index.php");
            exit();
        }
        else{
            header("Location: login.php");
            exit();
        }
    }
    else{
        header("Location: login.php");
        exit();
    }
?>