<?php

if (isset($_POST['btn-send'])) {
    $UserName = $_POST['name'];
    $Email = $_POST['email'];


    if (empty($UserName) || empty($Email)) {
        header('location:acooler.php?error');
    } else {
        $to = "info@saaswad.com";
        $Msg = $UserName . " " . $Email;
        $from = "kaushiv@saaswad.com";
        $headers = "From:" . $from;
        if (mail($to, "I am interested in After Coolers", $Msg, $headers)) {
            header('location:acooler.php?success');
        }
    }
} else {
    header("location:acooler.php");
}
