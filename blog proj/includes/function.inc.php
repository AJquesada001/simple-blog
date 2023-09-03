<?php
function emptysignup($user, $psw, $psw_repeat){
    if (empty($user) || empty($psw) || empty($psw_repeat)) {
        return true;
    } else {
        return false;
    }

}
function userexist($conn, $user){
    $smt=$conn->prepare("SELECT * FROM user_accounts WHERE user_name=?");
    $smt->bindValue(1,$user, PDO::PARAM_STR);
    $smt->execute();
    $result=$smt->fetch(PDO::FETCH_ASSOC);
  
    if($result){
        return true;
    }
    else{
        return false;
    }

}

function loginuser($conn, $user, $psw){
    $smt=$conn->prepare("SELECT * FROM user_accounts WHERE user_name=? AND userpass=?");
    $smt->bindValue(1,$user, PDO::PARAM_STR);
    $smt->bindValue(2,$psw, PDO::PARAM_STR);
    $smt->execute();
    $result=$smt->fetch(PDO::FETCH_ASSOC);


    if($result){
        session_start();
        $_SESSION["id"]=$result["id"];
        $_SESSION["user"]=$result["user_name"];
        header("location: ../index.php?success=welcome");
        exit;
    }

    else{
        header("location: ../login.php?error=wronglogin");
    exit;
    }

}


