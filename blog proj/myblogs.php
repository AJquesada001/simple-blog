<?php include "./header.php"; ?>
<?php 
require_once "./includes/conn.inc.php";

$result="";
if(!empty($_SESSION["id"])){

    $id= (int)$_SESSION["id"];
    $smt=$conn->prepare("SELECT * FROM blogs WHERE id=?");
    $smt->bindValue(1,$id,PDO::PARAM_INT);
    $smt->execute();
    $result=$smt->fetchAll(PDO::FETCH_ASSOC);

}





?>

 <a href="./create.php" class="btn btn-primary" style="padding: 10px 60px;  font-size: 29px; margin-bottom: 30px;">
<i class="fas fa-plus"></i>
Create Post
</a> 


<?php  if(empty($result)){ ?> 
    <div class="container" style="margin-bottom: 100px; "> <h1> no post yet  </h1> </div>
<?php  } else{ ?>
    
<div  style=" display: grid; grid-template-columns: repeat(2,500px); gap: 120px 30px; margin-bottom: 200px; padding: 0 auto;  justify-content: space-evenly;">
<?php foreach($result as $i=>$value): ?>
        <div class="col name-scroll" 
       style="max-width: 500px; min-width: 500px; height: 450px; max-height: 450px; border: 7px dashed pink; overflow-x: hidden; 
            box-shadow: 8px 10px 5px rgba(97, 95, 99, 0.952), 4px 4px 2px rgba(97, 95, 99, 0.952);">

            <div class="card-body" >
                <div style="display: flex; justify-content: space-between;">
                    <h5 class="card-title" 
                    style=" padding: 5px 5px 5px 10px; 
                    font-size: 40px; 
                    font-weight: bold; 
                    font-family:georgia,garamond,serif; width: 65%; text-align: center;">
                    <?php echo $value["blogs_title"]; ?>
                    </h5> 
                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;  width: 35%; ">
                    <form action="./update.php" method="post" style="display: inline-block; width: 100px; padding: 6px 12px;" >
                            <input type="hidden" name="blogs_id" value="<?php echo $value['blogs_id']; ?>">
                            <button type="submit" name="submit" class="btn btn-success" style="margin: 5px 0">Update</button>
                        </form> 
                        <form action="./includes/delete.inc.php" method="post" style="display: inline-block; width: 100px; padding: 6px 15px;" >
                            <input type="hidden" name="blogs_id" value="<?php echo $value['blogs_id']; ?>">
                            <button type="submit" name="submit" class="btn btn-danger" style="margin-bottom: 5px">Delete </button>
                        </form>
                    </div>
                </div>
                <p class="card-text float-end" style="text-align: center;"><?php echo $value["blogs_loc"]; ?></p>
                <p class="card-text"style=" padding: 5px 5px 5px 10px; " ><?php echo $value["blogs_des"]; ?></p>
            </div>

            
        </div>
        
        <?php endforeach ?>
    </div>
    

<?php }?>
<?php include "./footer.php"; ?>