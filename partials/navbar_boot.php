<?php 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <style>
    * {
        margin: 0 !important;
        padding: 0 !important;
        box-sizing: border-box !important;
        /* position: absolute; */
    }
    .navbar{
        /* position: sticky; */
    }


    .dropdown-menu {
        margin-top: 15px !important;
        height: 100px !important;
        width: 50px !important;
        background-color: white !important;
        margin-left: -35px !important;
        z-index: 9999 !important;
        position: absolute !important;
    }
    .dropdown-menu a {
        padding: 5px !important;
    }

    .dropdown-menu a:hover {
        color: red !important;
        font-size: 1.05rem !important;
    }

    .dropdown-item {
        text-align: center !important;
    }
    .nav-link{
        font-weight:bold;
        color:black;
    }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light my-1">
        <a class="navbar-brand mx-3" href="#">Myntra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-3" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Men
                    </a>
                    <div class="dropdown-menu .text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Display_Tshirts.php?gender=<?php echo "Male"?>">Tshirts</a>
                        <a class="dropdown-item" href="Display_Jeans.php?gender=<?php echo "Male"?>">Jeans</a>
                        <a class="dropdown-item" href="Display_Shoes_new.php?gender=<?php echo "Male"?>">Shoes</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-3" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Women
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Display_Tshirts.php?gender=<?php echo "Female"?>">Tshirts</a>
                        <a class="dropdown-item" href="Display_Jeans.php?gender=<?php echo "Female"?>">Jeans</a>
                        <a class="dropdown-item" href="Display_Shoes_new.php?gender=<?php echo "Female"?>">Shoes</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-3" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kids
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Display_Tshirts.php?gender=<?php echo "Kids"?>">Tshirts</a>
                        <a class="dropdown-item" href="#">Jeans</a>
                        <a class="dropdown-item" href="Display_Shoes_new.php?gender=<?php echo "Kids"?>">Shoes</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2  ml-30">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <ul class="navbar-nav mr-6 ml-4">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle mx-3" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <?php
                    if(isset($_SESSION['login']) && $_SESSION['login']=="1"){
                        echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="position:absolute;">
                        <a class="dropdown-item" href="#">Welcome '.$_SESSION['username'].'</a>
                        <a class="dropdown-item" href="order.php">Orders</a>
                        <a class="dropdown-item" href="logout2.php">Logout</a>
                        </div>';
                    }
                    else{
                        echo '<div class="dropdown-menu  aria-labelledby="navbarDropdown" style="position:absolute;">
                        <a class="dropdown-item style="position:relative;"" href="#">Welcome</a>
                        <button class="btn btn-outline-success ml-3 p-1 style="position:relative;"" data-toggle="modal" data-target="#loginModal">Login</button>
                        <button class="btn btn-outline-success ml-3 p-1 style="position:relative;"" data-toggle="modal" data-target="#signupModal">Signup</button>
                        <a class="dropdown-item style="position:relative;"" href="#">Orders</a>
                        </div>';
                    }
                    ?>
                </li>
                <li class="nav-item mr-5 ml-4">
                    <a class="nav-link mr-0" href="Bag.php">Bag</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php 
    include '_loginmodal.php';
    include '_signupmodal.php';

    ?>

</body>

</html>