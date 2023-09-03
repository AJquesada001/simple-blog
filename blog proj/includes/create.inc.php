<?php 

if (isset($_POST["submit"] )) {
    require_once "conn.inc.php";
    require_once "function.inc.php";
    $id = (int) $_POST["id"];
    $title = $_POST["Title"];
    $place = $_POST["place"];
    $subject = $_POST["subject"];

    
    if(emptysignup($title, $place, $subject)!==false){
        header("location: ../create.php?error=empty");
        exit;
    }

    $smt = $conn->prepare("INSERT INTO blogs(id, blogs_title, blogs_loc, blogs_des) VALUES(?,?,?,?)");
        $smt->bindValue(1,$id, PDO::PARAM_INT);
        $smt->bindValue(2,$title, PDO::PARAM_STR);
        $smt->bindValue(3,$place, PDO::PARAM_STR);
        $smt->bindValue(4,$subject, PDO::PARAM_STR);
        $smt->execute();
        header("location: ../myblogs.php?scss=acc-created");
        exit;

}

else{
    header("location: ../create.php?error=empty");
        exit;
}

?>