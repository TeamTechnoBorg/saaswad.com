<?php

if (isset($_POST['btn-send'])) {
    $UserName = $_POST['name'];
    $Email = $_POST['email'];


    if (empty($UserName) || empty($Email)) {
        header('location:mbradiator.php?error');
    } else {
        $to = "kaushiv1@gmail.com";
        $Msg = $UserName . " " . $Email;
        $from = "kaushiv@saaswad.com";
        $headers = "From:" . $from;
        if (mail($to, "I am interested in Mechanically Bonded Radiators", $Msg, $headers, $Email)) {
            header('location:mbradiator.php?success');
        }
    }
} else {
    header("location:mbradiator.php");
}
