<?php
$title = 'Delete User';

require_once 'header.php';
require_once 'db/conn.php';

// if(!isset($_SESSION["authenticated"])){
//     header('Location: login.php');
// }

// if(strcmp($_SESSION['role'],"admin")!==0){
//     header('Location: alert.php');
// }  
// else{
    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
        $pdo = "delete from `user` where id=$user_id";
        $result = mysqli_query($connection, $sql);
        if ($result)
            echo '<div class="alert alert-success" role="alert">
                    User deleted successfully!
                </div>';
        else
            echo '<div class="alert alert-danger" role="alert">
                    User deletion failed!
                </div>';
    }
?>