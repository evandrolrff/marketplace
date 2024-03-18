<?php
    include 'UserController.php';

    $email = $_POST["email"];
    $password = $_POST["password"];
    $userController = new UserController();
    $flag = $userController->SelectUser($email, $password);

    if($flag == true)
    {
        header("Location: ../index.php?page=index.php");
        exit();
    } 
    else
    {
        header("Location: ../index.php?page=index.php&content=login&error=1");
        exit();
    }
?>