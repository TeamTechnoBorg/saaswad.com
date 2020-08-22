<?php

if (isset($_POST['btn-send'])) {
    $UserName = $_POST['name'];
    $Email = $_POST['email'];


    if (empty($UserName) || empty($Email)) {
        header('location:solutions.php?error');
    } else {
        $to = "info@saaswad.com";
        $Msg = $UserName . " " . $Email;
        $from = "info@saaswad.com";
        $headers = "From:" . $from;
        if (mail($to, "I want to have business with you", $Msg, $headers)) {
            header('location:solutions.php?success');
        }
    }
} else {
    header("location:solutions.php");
}
