<?php
include "../../Conf/connect.php";
session_start();


    $username = $_POST['VUse'];
    $email = $_POST['VEml'];
    $password = $_POST['VPas'];
    $password2 = $_POST['VPassc'];
    $birthday = date("Y-m-d", strtotime($_POST['VDat']));



    $result = mysqli_query($conn, "SELECT Email FROM user WHERE Email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Email sudah di gunakan');window.history.back();</script>";
    }

    else if ($password !== $password2) {
        echo ("<script>alert('Password tidak sama!');window.history.back();</script>");
    } 
    
    else if (!$username) {
        echo ("<script>alert('Username tidak boleh kosong!');window.history.back();</script>");
    }

    else if (!$email) {
        echo ("<script>alert('Email tidak boleh kosong!');window.history.back();</script>");
    }

    else if (!$birthday) {
        echo ("<script>alert('Email tidak boleh kosong!');window.history.back();</script>");
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("<script>alert('Email tidak valid!');window.history.back();</script>");
    }

    else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO user VALUES ('0', '$email', '$username', '$password', '$birthday')");
        mysqli_query($conn, "INSERT INTO wallet VALUES ('0', '$email', '0', 'Wallet')");

        echo ("<script>alert('Register Berhasil');window.location='../login.html';</script>");
        // header("location:../login.html");
    }

    
    
?>