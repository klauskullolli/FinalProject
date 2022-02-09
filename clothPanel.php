<?php
 require_once "common/header.php" ; 
 require_once "db/conn.php" ; 
 
 if(isset($_GET['cloth_id'])){
    $cloth_id = $_GET['cloth_id'];
    $sql = "select * from clothes where `id` = :id";
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindParam(":id",$cloth_id );
    $stmt -> execute();
    
    if($stmt ->rowCount()<=0){
        echo '<div class="alert alert-danger" role="alert">
                    No clothes with this id!
                </div>';

    }
    else{
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        
    }

}
?>

<form method="POST" action="">  
<div class="mb-3">
    <div class="row" style="margin-top: 50px;">
        <div class="col">
            <img src="<?php echo $data["image"] ?>" width="500" height="500">
        </div>
        <div class="col">

            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type"
            value="<?php echo ucfirst($data["type"])?>" readonly>

            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender"
            value="<?php echo ucfirst($data["gender"])?>" readonly>
            
            <label for="size" class="form-label">Size</label>
            <input type="text" class="form-control" id="size" name="size"
            value="<?php echo ucfirst($data["size"])?>" readonly>
            
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price"
            value="<?php echo ucfirst($data["price"])?>" readonly>

            <label for="amount" class="form-label">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount"
             min="1" max="<?php echo $data["stock"]?>">
             <br><br>
             <button name="submit" type="submit" class="btn btn-primary">Buy</button>
        </div>
    </div>
</div>

</form>  