<?php
if (isset($_POST["submit"] )) {
    require_once "conn.inc.php";
    require_once "function.inc.php";

    $user = $_POST["user"];
    $psw = $_POST["psw"];
    $psw_repeat = $_POST["psw-repeat"];

    
    if(emptysignup($user, $psw, $psw_repeat)!==false){
        header("location: ../signup.php?error=empty");
        exit;
    }
   if(userexist($conn, $user)=== true){

    header("location: ../signup.php?error=userexist");
    exit;

   }

   else{
       if($psw===$psw_repeat){
       
        $smt = $conn->prepare("INSERT INTO user_accounts(user_name, userpass) VALUES(?,?)");
        $smt->bindValue(1,$user, PDO::PARAM_STR);
        $smt->bindValue(2,$psw, PDO::PARAM_STR);
        $smt->execute();
        header("location: ../login.php?scss=acc-created");
        exit;
       }

       else{
          
        header("location: ../signup.php?error=diffpass");
        exit;
        
       }
   }
}
else{
    header("location: ../signup.php?error=invalid");
    exit;
}