<?php
//   session_start() ;
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Shop - <?php echo $title ?></title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
    <a class="navbar-brand">Shop</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="registration.php">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="user.php">Users</a>
        </li>
        <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clothes
          </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Dresses</a></li>
            <li><a class="dropdown-item" href="#">T-shirts</a></li>
            <li><a class="dropdown-item" href="#">Pants</a></li>
        </ul>
        </div>

        <!-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Dresses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">T-shirts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Pants</a>
        </li> -->
        <!-- <li class="nav-item"><a class="nav-link" aria-current="page" href="logout.php">Logut</a></li> -->
         
        <li class="nav-item">
          <div class="position-absolute top-50 start-100 translate-middle">
             <?php 
              //if(isset($_SESSION["username"]))
                echo '<a class="btn btn-danger"  aria-current="page" href="logout.php" >LogOut</a>' ;   
              
             ?>
          </div>
        </li>

        <?php
        // session_start();
        // if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true)
        //   echo '<li class="nav-item"><a class="nav-link" aria-current="page" href="logout.php">Logut</a></li>';
        ?>
    </ul>
    </div>
</div>
</nav>