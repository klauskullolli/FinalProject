<?php 
//view all users registered till now
$title = "Users";

require_once 'common/header.php';
require_once 'db/conn.php';

// if(!isset($_SESSION["authenticated"])){
//     header('Location: login.php');
// }

$rows = select_all('bag');
$totalPrice = 0 ;

?>

<h2>Bag</h2>

<table class="table table-striped">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Image</th>
    <th scope="col">Type</th>
    <th scope="col">Gender</th>
    <th scope="col">Size</th>
    <th scope="col">Price</th>
    <th scope="col">Amount</th>
    <th scope="col">Total Price</th>

    </tr>
</thead>
<tbody>
<?php 
    foreach ($rows as $row) {
        $totalPrice = $totalPrice + $row['total_price'] ;
        echo '<tr>
            <th scope="row">'. $row['id'] . '</th>
            <td><img src=\''.trim($row['image']).'\' alt="Not Found" width="70" height="70"></td>
            <td>' .ucfirst($row['type']) . '</td>
            <td>' . ucfirst($row['gender']) . '</td>
            <td>' . ucfirst($row['size']) . '</td>
            <td>' . $row['price'] . '</td>
            <td>' . $row['amount'] . '</td>
            <td>' . $row['total_price'] . '</td>
            </td>
        </tr>';
        }
    ?>

    <tr>
    <td><b>Total: </b> </td>
    <td colspan="2">-------------------------------------------</td>
    <td colspan="2">-------------------------------------------</td>
    <td colspan="2">-------------------------------------------</td>
    <td><b><?php echo $totalPrice?></b></td>
    </tr>

</tbody> 
</table> 

<br>
<button name="submit"  class="btn btn-primary">Print Bill</button>


<?php
require_once "common/footer.php" ;
?>