<?php
    session_start();
    require "connect.php";

    $login = $_POST["login"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE login = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();

    if($res){
        $userCount = $res->num_rows;
        if($userCount > 0){
            $_SESSION['logged-in'] = true;
            $_SESSION['id'] = $row['id'];
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