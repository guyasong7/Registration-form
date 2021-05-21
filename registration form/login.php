<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)) {
        $name_error = "Wrong email";
    }

    if(empty($password)) {
        $name_error = "Your password must have a maximum of 8";
    }

    include('login2');
?>