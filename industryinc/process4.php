<?php

if (isset($_POST['btn-send'])) {
    $UserName = $_POST['name'];
    $Email = $_POST['email'];


    if (empty($UserName) || empty($Email)) {
        header('location:oil-coolers.php?error');
    } else {
        $to = "kaushiv1@gmail.com";
        $Msg = $UserName . " " . $Email;
        $from = "kaushiv@saaswad.com";
        $headers = "From:" . $from;
        if (mail($to, "I am interested in After Coolers", $Msg, $headers, $Email)) {
            header('location:oil-coolers.php?success');
        }
    }
} else {
    header("location:oil-coolers.php");
}
