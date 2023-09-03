<?php include "./header.php"; ?>
<?php

if (empty($_SESSION["id"])) {
    header("Location: ./login.php");
}
?>


<center><h3>Create a Post</h3>


<div class="container2">
  <form action="./includes/create.inc.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_SESSION["id"]; ?>">

    <label for="lname">Title</label>
    <input type="text" id="Title" name="Title" placeholder="Title">

  

    <label for="subject">Tourist place</label>
    <textarea id="subject" name="place" placeholder="Travel location...." ></textarea>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <button class="button create" type="submit" name="submit">Create</button>
    <a href="./myblogs.php" class="button button1">Cancel</a>
  </form>
  </center>

</div>

<?php include "./footer.php"; ?>