<?php include "./header.php"; ?>

<?php 
require_once "./includes/conn.inc.php";

    $smt=$conn->prepare("SELECT P.blogs_id, P.id, P.blogs_title, P.blogs_loc, P.blogs_des, U.id, U.user_name FROM blogs AS P, user_accounts AS U WHERE P.id=U.id GROUP BY P.blogs_id");
    $smt->execute();
    $result=$smt->fetchAll(PDO::FETCH_ASSOC);





?>

<div  style=" display: grid; grid-template-columns: repeat(2,500px); gap: 120px 30px; margin-bottom: 200px; padding: 0 auto;  justify-content: space-evenly;">
<?php foreach($result as $i=>$value): ?> 
        <div class="col name-scroll" 
       style="max-width: 500px; min-width: 500px; height: 450px; max-height: 450px; border: 7px dashed pink; overflow-x: hidden; 
            box-shadow: 8px 10px 5px rgba(97, 95, 99, 0.952), 4px 4px 2px rgba(97, 95, 99, 0.952);">

            <div class="card-body" > <h6 class="float-end" style=" text-transform: uppercase; padding-left: 20px;" > Posted by: <?php echo $value["user_name"]; ?> </h6>
                <div style="display: flex; justify-content: space-between;">
                    <h5 class="card-title" 
                    style=" padding: 5px 5px 5px 10px; 
                    font-size: 40px; 
                    font-weight: bold; 
                    font-family:georgia,garamond,serif; width: 100%; text-align: center;">
                    <?php echo $value["blogs_title"]; ?>
                    </h5> 
                </div>
                <p class="card-text float-end" style="text-align: center;"><?php echo $value["blogs_loc"]; ?></p>
                <p class="card-text"style=" padding: 5px 5px 5px 10px; " ><?php echo $value["blogs_des"]; ?></p>
            </div>

            
        </div>
        
        <?php endforeach ?>
    </div>

    


<?php include "./footer.php"; ?>