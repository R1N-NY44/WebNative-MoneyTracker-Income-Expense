<?php
    include "../../Conf/connect.php";
    session_start();

    // Mendapatkan data input pengguna dan membersihkannya
    $username = mysqli_real_escape_string($conn, $_POST['VUse']);
    $password = mysqli_real_escape_string($conn, $_POST['VPass']);

    // Validasi apakah email yang dimasukkan adalah alamat email yang valid
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    // Jika email tidak valid, kembali ke halaman login dengan pesan kesalahan
        echo ("<script>alert('Email tidak valid!');</script>");
    }

    $query = "SELECT * FROM user WHERE Email='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $data = mysqli_fetch_assoc($result);

        // Memeriksa apakah password benar dengan password_verify()
        if (password_verify($password, $data['Password'])) {
            // Menyimpan data pengguna dalam session
            $_SESSION['id'] = $data['Id'];
            $_SESSION['Username'] = $data['Username'];
            // $_SESSION['cMail'] = $data['Email'];

            
            // Mengambil data uang dari tabel Wallet berdasarkan email
            // $email = mysqli_real_escape_string($conn, $data['Email']);
            // $result_money = mysqli_query($conn, "SELECT Money FROM Wallet WHERE Email = '$email'");
            // $row = mysqli_fetch_assoc($result_money);
            // $_SESSION['Money'] = $row["Money"];

            header("Location: ../../index.php");
            exit();
        }
    }

    // Jika username atau password tidak sesuai, kembali ke halaman login dengan pesan kesalahan
    header("Location: ../register.html");
    exit();
