<?php 
//view all users registered till now
$title = "Users";

require_once 'common/header.php';
require_once 'db/conn.php';

// if(!isset($_SESSION["authenticated"])){
//     header('Location: login.php');
// }

$rows = select_all('user');
?>

<h2>All Users</h2>
<a class="btn btn-success" href="registration.php">Create User</a>
<table class="table table-striped">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Username</th>
    <th scope="col">Password</th>
    <th scope="col">Role</th>
    </tr>
</thead>
<tbody>
<?php 
    foreach ($rows as $row) {
        echo '<tr>
            <th scope="row">'. $row['id'] . '</th>
            <td>' . $row['username'] . '</td>
            <td>' . $row['password'] . '</td>
            <td>' . $row['role'] . '</td>
            <td>
                <a class="btn btn-primary" href="updateUser.php?user_id=' . $row['id'] .'">Update</a>
                <a class="btn btn-danger" href="#?user_id=' . $row['id'] .'">Delete</a>
            </td>
        </tr>';
        }
    ?>
</tbody>
</table>

<?php
require_once "common/footer.php" ;
?>