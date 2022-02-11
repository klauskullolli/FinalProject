<?php
require_once "common/header.php";
require_once 'dompdf/autoload.inc.php';
require_once "db/conn.php" ; 
use Dompdf\Dompdf;

use FontLib\Table\Type\head;

//number of bills
$folderPath = "bills/";
$countFile = 0;
$totalFiles = glob($folderPath . "*");
if ($totalFiles){
 $countFile = count($totalFiles);
}
 
$bag = select_all("bag") ;
 

if($bag->rowCount()==0){
    header('Location: alert.php?msg=You have not bought any product!');
}
else {
    $totalPrice = 0 ;
    $data= '<h2>Bill Nr.'.($countFile+1).'</h2>
        <table class="table table-striped">
        <thead>
            <tr>
            <td>#</td>
            <td>Type</td>
            <td>Gender</td>
            <td>Size</td>
            <td>Price</td>
            <td>Amount</td>
            <td>Total Price</td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td colspan="7"><hr></td>
            </tr> 
        ' ; 
        foreach ($bag as $row) {
            $totalPrice = $totalPrice + $row['total_price'] ;
            $line= '<tr>
                    <td scope="row">'. $row['id'] . '</td>
                    <td>' . ucfirst($row['type']) . '</td>
                    <td>' . ucfirst($row['gender']) . '</td>
                    <td>' . ucfirst($row['size']) . '</td>
                    <td>' . $row['price'] . '</td>
                    <td>' . $row['amount'] . '</td>
                    <td>' . $row['total_price'] . '</td></tr>';
            $data = $data.$line ;
    }

    $bottom = '<tr>
                <td><b>Total: </b> </td>
                <td colspan="2">-------------------------------------</td>
                <td colspan="1">-------------------------------------</td>
                <td colspan="2">-------------------------------------</td>
                <td><b>.'.$totalPrice.'</b></td>
                </tr>
            </tbody> 
            </table> ' ;
    $data = $data.$bottom ;
    $dompdf = new Dompdf();
    $dompdf->loadHtml($data);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $path = "bills/Bill".($countFile+1).".pdf" ;
    $success =file_put_contents($path , $dompdf->output()) ; 

    if($success){
        $sql = "DROP TABLE IF EXISTS `bag` ;" ;
        $pdo->exec($sql) ; 

        $sql = "CREATE TABLE IF NOT EXISTS `bag` (
            id INT AUTO_INCREMENT PRIMARY KEY,
            type VARCHAR(255) NOT NULL , 
            gender VARCHAR(255) NOT NUll , 
            size VARCHAR(255) NOT NULL,
            price FLOAT NOT NULL,
            amount int NOT NUll,
            total_price float NOT NULL,
            image VARCHAR(255) NOT NULL 

        )ENGINE=INNODB; " ;

        $pdo->exec($sql) ; 
        header('Location:'.$path);
    }else{
        header('Location: alert.php?msg=Bill printing failed!');
    }
}

?>
