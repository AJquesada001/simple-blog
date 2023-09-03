<?php include "./header.php"; ?>
<?php 
$blogs_id="";
$result="";

if(empty($_POST["blogs_id"])){

  header("location:./login.php");
  exit;

}

else{
  $blogs_id=(int)$_POST["blogs_id"];
  require_once "./includes/conn.inc.php";

  $smt=$conn->prepare('SELECT * FROM blogs WHERE blogs_id=?');
    $smt->bindValue(1,$blogs_id, PDO::PARAM_INT);
   $smt->execute();
   $result=$smt->fetch(PDO::FETCH_ASSOC);

  
}

?>



<center>
<h3>Update post</h3>

<div class="container2">
  <form action="./includes/update.inc.php" method="post">
 
    <input type="hidden" name="blogs_id" value="<?php echo $result["blogs_id"]; ?>">
    <label for="lname">Title</label>
    <input type="text" id="Title" name="Title" placeholder="Title" value="<?php echo $result["blogs_title"]; ?>">

    <label for="subject">Tourist place</label>
    <textarea id="subject" name="place" placeholder="Travel location...."> <?php echo $result["blogs_loc"]; ?> </textarea>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"> <?php echo $result["blogs_des"]; ?> </textarea>

    <button class="button btn-update" name="submit" type="submit">Update</button>
    <a href="./myblogs.php" class="button button1">Cancel</a>
  </form>
</div>
</center>
<?php include "./footer.php"; ?>