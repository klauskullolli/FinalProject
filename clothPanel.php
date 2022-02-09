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
        header('Location: alert.php?msg=This cloth does not exist!');

    }
    else{
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        
    }

}

if (isset($_POST['submit'])) {
    $product = array(
        "type"=> $data["type"],
        "gender" => $data["gender"],
        "size" => $data["size"],
        "price" => $data["price"],
        "amount"=>$_POST['amount'],
        "total_price" => $data["price"]*$_POST['amount'],
        "image" => $data["image"]
    );
    $stock = $data["stock"] - $_POST['amount'] ; 
   
    if($stock<=0){
        delete("clothes" ,intval($data["id"])) ;
    }
    else{
        $update = array("stock"=>$stock) ;
        $updated = update_record("clothes" ,$update, intval($data["id"])) ;
    }

    if (insert_record('bag', $data) && $updated ) {
        echo '<div class="alert alert-success" role="alert">
                Product bought successfully!
            </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Product purchase failed!</div>';
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
             min="1" max="<?php echo $data["stock"]?>" value="1">
             <br><br>
             <button name="submit" type="submit" class="btn btn-primary" style="font-size: 36px;">Buy</button>
        </div>
    </div>
</div>

</form>  