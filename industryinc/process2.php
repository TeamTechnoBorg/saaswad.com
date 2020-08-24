<?php

if (isset($_POST['btn-send'])) {
    $UserName = $_POST['name'];
    $Email = $_POST['email'];


    if (empty($UserName) || empty($Email)) {
        header('location:radiator.php?error');
    } else {
        $to = "info@saaswad.com";
        $Msg = $UserName . " " . $Email;
        $from = "info@saaswad.com";
        $headers = "From:" . $from;
        if (mail($to, "I am interested in Radiators", $Msg, $headers)) {
            header('location:radiator.php?success');
        }
    }
} else {
    header("location:radiator.php");
}
