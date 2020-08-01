<?php

if (isset($_POST['btn-send'])) {
    $UserName = $_POST['name'];
    $Email = $_POST['email'];


    if (empty($UserName) || empty($Email)) {
        header('location:solutions.html?error');
    } else {
        $to = "info@saaswad.com";
        $Msg = $UserName . " " . $Email;
        if (mail($to, "I want to have business with you", $Msg, $Email)) {
            header('location:solutions.html?success');
        }
    }
} else {
    header("location:solutions.html");
}
