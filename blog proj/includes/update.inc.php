<?php 

if (isset($_POST["submit"] )) {
    require_once "function.inc.php";
    require_once "conn.inc.php";
    
     $blogs_id =(int) $_POST["blogs_id"];
     $title = $_POST["Title"];
     $place = $_POST["place"];
     $subject = $_POST["subject"];

    if(emptysignup($title, $place, $subject)!==false){
        header("location: ../myblogs.php?error=emptyfields");

        exit;
    }
    
    else{
        $smt=$conn->prepare('UPDATE blogs SET blogs_title =?, blogs_loc =?, blogs_des =? WHERE blogs_id=?');
    $smt->bindValue(1,$title, PDO::PARAM_STR);
    $smt->bindValue(2,$place, PDO::PARAM_STR);
    $smt->bindValue(3,$subject, PDO::PARAM_STR);
    $smt->bindValue(4,$blogs_id, PDO::PARAM_INT);
        $smt->execute();

        header("location: ../myblogs.php?scss=updatepost");
        exit;
    }

    
       

}

else{
    header("location: ../myblogs.php?err=invalid");
    exit;
}


?>