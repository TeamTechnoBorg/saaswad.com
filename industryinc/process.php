<?php

if (isset($_POST['btn-send'])) {
    $UserName = $_POST['UName'];
    $Email = $_POST['Email'];
    $No = $_POST['no'];
    $Address = $_POST['address'];
    $Subject = $_POST['Subject'];
    $Msg = $_POST['msg'];

    if (empty($UserName) || empty($Email) || empty($Subject) || empty($Msg) || empty($No) || empty($Address)) {
        header('location:contact.html?error');
    } else {
        $to = "info@saaswad.com";
        $Msg = $Msg . " " . strval($No) . " " . $Address;
        if (mail($to, $Subject, $Msg, $Email)) {
            header('location:contact.html?success');
        }
    }
} else {
    header("location:contact.html");
}
