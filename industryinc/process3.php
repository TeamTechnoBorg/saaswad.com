<?php

if (isset($_POST['btn-send'])) {
    $UserName = $_POST['name'];
    $Email = $_POST['email'];


    if (empty($UserName) || empty($Email)) {
        header('location:mradiator.php?error');
    } else {
        $to = "kaushiv1@gmail.com";
        $Msg = $UserName . " " . $Email;
        $from = "kaushiv@saaswad.com";
        $headers = "From:" . $from;
        if (mail($to, "I am interested in Custom designed heat exchangers", $Msg, $headers, $Email)) {
            header('location:mradiator.php?success');
        }
    }
} else {
    header("location:mradiator.php");
}
