<?php
include "../../Conf/connect.php";
session_start();

// echo ("<script>alert('Email tidak boleh kosong!');window.history.back();</script>");

if (isset($_POST['submit'])) {

    // SELECT Email FROM User WHERE Id = 'id_tertu';
    $getMail = mysqli_query($conn, "SELECT Email FROM User WHERE Id = '{$_SESSION['id']}'");
    $rowMail = mysqli_fetch_assoc($getMail);

    // Get All Var Value From Form
    $Amount = $_POST['Ammount'];
    $Description = $_POST['Description'];
    $id_category = $_POST['Category'];
    $title = $_POST['Title'];
    $cDate = date("Y-m-d", strtotime($_POST['iDate']));

    // Cek apakah user sudah memiliki budget terkait
    $checkBudgetQuery = mysqli_query($conn, "SELECT Email FROM Budget WHERE Email = '{$rowMail['Email']}' AND EXTRACT(MONTH FROM Date) = EXTRACT(MONTH FROM CURRENT_DATE()) AND EXTRACT(YEAR FROM Date) = EXTRACT(YEAR FROM CURRENT_DATE());");
    $id_wallet = mysqli_query($conn, "SELECT Id_Wallet FROM Wallet WHERE Email = '{$rowMail['Email']}'");
    $row_wallet = mysqli_fetch_assoc($id_wallet);
    $Wallet = $row_wallet['Id_Wallet'];

    // Jika sudah ada budget bulan ini maka cukup di edit saja budget tersebut
    if (mysqli_num_rows($checkBudgetQuery) === 1) {

        // Id Budget
        $id_budget = mysqli_query($conn, "SELECT Id_Budget FROM Budget WHERE Email = '{$rowMail['Email']}'");
        $row_budget = mysqli_fetch_assoc($id_budget);
        $Budget = $row_budget['Id_Budget'];

        // Masukkan ke history dan Update isi wallet
        mysqli_query($conn, "INSERT INTO History (Id_Wallet, Id_Budget, Title, Type, Amount, Description, Date) VALUES ('$Wallet', '$Budget', '$title', 'Income', '$Amount', '$Description', '$cDate')");
        mysqli_query($conn, "UPDATE Wallet SET Money = Money + $Amount WHERE Id_Wallet = $Wallet");
        header("Location: ../../index.php");
    }

    // Jika belum ada budget bulan ini, maka akan di buatkan budget bulan ini
    else {

        // Membuat budget
        mysqli_query($conn, "INSERT INTO budget VALUES ('0', '$cDate', '0', '$id_category', '{$rowMail['Email']}')");

        // Id Budget
        $id_budget = mysqli_query($conn, "SELECT Id_Budget FROM Budget WHERE Email = '{$rowMail['Email']}'");
        $row_budget = mysqli_fetch_assoc($id_budget);
        $Budget = $row_budget['Id_Budget'];

        // Masukkan ke history dan Update isi wallet
        mysqli_query($conn, "INSERT INTO History (Id_Wallet, Id_Budget, Title, Type, Amount, Description, Date) VALUES ('$Wallet', '$Budget', '$title', 'Income', '$Amount', '$Description', '$cDate')");
        mysqli_query($conn, "UPDATE Wallet SET Money = Money + $Amount WHERE Id_Wallet = $Wallet");
        header("Location: ../../index.php");
    }
}

if (isset($_POST['cancel'])) {
    echo ("<script>window.history.back();window.history.back();</script>");
}
