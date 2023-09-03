<?php 

if (isset($_POST["submit"] )) {
    require_once "conn.inc.php";
 

    $blogs_id =(int) $_POST["blogs_id"];
    $smt=$conn->prepare('DELETE FROM blogs WHERE blogs_id=?');
    $smt->bindValue(1,$blogs_id, PDO::PARAM_INT);
        $smt->execute();
        header("location: ../myblogs.php?scss=del-post");
        exit;
}

else{
    header("location: ../myblogs.php?err=no-id");
    exit;
}

?>