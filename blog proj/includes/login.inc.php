<?php

if (isset($_POST["login"] )) {
    require_once "conn.inc.php";
    require_once "function.inc.php";

    $user = $_POST["user"];
    $psw = $_POST["pass"];

    if(emptysignup($user, $psw, $psw)!==false){
        header("location: ../login.php?error=empty");
        exit;
    }


    loginuser($conn, $user, $psw);
}
else{
    header("location: ../login.php?error=invalid");
    exit;
}