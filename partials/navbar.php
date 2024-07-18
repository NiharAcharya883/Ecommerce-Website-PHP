<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar</title>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" -->
        <!-- integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="css/navbar.css">

<body>
    <nav>
        <div class="nihar">
            <div class="logo">
                <img src="img/logo.jpeg" alt="">
            </div>
            <div class="Menuu">
                <div class="Menn"><a href="#">MEN</a>
                    <div class="submenuu">
                        <ul>
                            <li><a href="Display_Tshirts.php?gender=<?php echo "Male"?>">TSHIRTS</a></li>
                            <li><a href="#">JEANS</a></li>
                            <li><a href="Display_shoes.php?gender=<?php echo "Male"?>">SHOES</a></li>
                            <li><a href="#">TRACK</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    MEN
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Tshirts</a>
                    <a class="dropdown-item" href="#">Jeans</a>
                    <a class="dropdown-item" href="#">Shoes</a> -->
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div> -->
            <!-- </div> -->
                <div class="women"><a href="#">WOMEN</a>
                    <div class="submenuu-2">
                        <ul>
                            <li><a href="#">TSHIRTS</a></li>
                            <li><a href="#">JEANS</a></li>
                            <li><a href="Display_shoes.php?gender=<?php echo "Female"?>">SHOES</a></li>
                            <li><a href="#">TRACK</a></li>
                        </ul>
                    </div>
                </div>
                <div class="kids"><a href="#">KIDS</a>
                    <div class="submenuu-3">
                        <ul>
                            <li><a href="Display_Tshirts.php?gender=<?php echo "kids"?>">TSHIRTS</a></li>
                            <li><a href="#">JEANS</a></li>
                            <li><a href="Display_shoes_new.php?gender=<?php echo "Kids"?>">SHOES</a></li>
                            <li><a href="#">TRACK</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="Search">
                <div class="searchbox">
                    <i class="fa fa-regular fa fa-magnifying-glass"></i>
                    <input type="text" name="search" placeholder="Search for products , brands and more">

                </div>
            </div>
            <div class="User">
                <div class="profile">
                    <i class="fa fa-solid fa fa-user"></i>
                    <a href="#">Profile</a>
                    <div class="sub-profile">
                        <?php
                    $log = "false";
                    // session_start();
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                            $log = "true";
                            echo '<ul>
                            <li><a href="#">Welcome '. $_SESSION['username'] .'</a></li><br>
                            <li class="lsg"><a href="Logout.php">Logout</a></li><br>
                            <li><a href="#">Orders</a></li><br>
                            <li><a href="#">About Us</a></li>
                        </ul>';
                    }
                    else{
                        echo '<ul>
                        <li><a href="#">Welcome</a></li><br>
                        <li class="lsg"><a href="Login.php">Login/Signup</a></li><br>
                        <li><a href="#">Orders</a></li><br>
                        <li><a href="#">About Us</a></li>
                    </ul>';
                    }
        
                    ?>
                    </div>

                </div>
                <div class="bag">
                    <i class="fa fa-solid fa fa-briefcase"></i>
                    <a href="Bag.php">Bag</a>

                </div>
            </div>
        </div>
    </nav>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script> -->

</body>

</html>