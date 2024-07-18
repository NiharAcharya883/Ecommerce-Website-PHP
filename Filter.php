<?php 
    

    // $selected_gender = $gender;
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        border: 2px solid black;
        height: 100%;
        width: 100%;
        display: grid;
        grid-template-columns: 0.8fr 3fr;
        margin-top: 20px;
    }

    .filter {
        border-right: 2px solid black;
        /* height:400px; */
        /* border-bottom:2px solid black; */
        /* position:sticky; */
    }

    .items {
        display: grid;
        grid-template-columns: repeat(3, auto);
        z-index: -1;
    }

    .filter form h3{
        margin-left: 65px;
        margin-top: 25px;
    }
    .filter form input{
        margin-left: 65px;
    }
    .first{
        margin-left: 65px;
        margin-top: 25px;
        
    }
    .submit{
        margin-left: 35px;
        margin-top:15px;

        padding:10px;
        font-size:1.1rem;
        color:white;
        background-color:red;
        border-radius:10px;
    }

    </style>
</head>

<body>
   
    <div class="container">
        <div class="filter">
            <form action="Display_shoes.php" method="POST">
                <h3 class = "first">Gender</h3>
                <input type="radio" class="gender" name="gender" value="male"> Male<br>
                <input type="radio" class="gender" name="gender" value="female"> Female<br>
                <input type="radio" class="gender" name="gender" value="kids"> Kids<br>
                
                <h3>Brand</h3>
                <input type="radio" class="Brand" name="brand" value="Puma"> Puma<br>
                <input type="radio" class="Brand" name="brand" value="Nike"> Nike<br>
                <input type="radio" class="Brand" name="brand" value="Adidas"> Adidas<br>
    
                <!-- <br><br> -->
                <h3>Color</h3>
                <input type="radio" class="c1" name="color" value = "Black"> Black<br>
                <input type="radio" class="c2" name="color" value = "Blue"> Blue<br>
                <input type="radio" class="c3" name="color" value = "Grey"> Grey<br>
                <input type="radio" class="c4" name="color" value = "White"> White<br>
           
                <input type="submit" value="apply changes" class="submit">
            </form>
        </div>
        <div class="items">
            <?php
            include 'partials/navbar.php';
            include 'partials/db_connect.php';
            function display_items($result,$gender){
                while($row = mysqli_fetch_assoc($result)){
                $Shoes_id = $row['Shoes_id'];
                $Shoes_brand = $row['Shoes_brand'];
                $Shoes_price = $row['Shoes_price'];
                echo '<div class="view_items" style="border:2px solid white;margin:25px; width:250px;height:400px;display:grid; grid-template-rows:3fr 1fr;position:relative;">
                <div class="image" >
                <img src="img/Shoes/'. $gender.'_Shoes-' .$Shoes_id.'.png" alt="no image" style="width:250px;height:300px;cursor:pointer;">
                </div>
                <div class="price">
                <p style="font-size:20px"><b>'.$Shoes_brand.'</b><i class="fa fa-regular fa fa-heart"style="float:right;width:25px;height:25px"></i></p><br>
                <p>Sports Shoes <br>
                <b>Rs '. $Shoes_price.'</b> </p>
                </div>
                </div>';
                }
            }
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    // $selected_gender = $gender;
                    // $gender = "male";
                    $selected_brand = $_POST['brand'];
                    // $selected_gender = $_GET['gender'];
                    $selected_color = $_POST['color'];
                    $sql = "Select * from `shoes` where `shoes_brand` = '$selected_brand' and `shoes_color` = '$selected_color'";
                    $result = mysqli_query($conn,$sql);
                    display_items($result,$selected_gender);
                }                  
             catch(exception $a){
                echo "Not through post method";
             }
            ?>
        </div>
    </div>

</body>

</html>