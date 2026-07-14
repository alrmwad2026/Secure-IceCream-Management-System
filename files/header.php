<?php
$host ="localhost";
$username="root";
$password="";
$dbname="ice_cream";

$conn = mysqli_connect($host ,$username,$password,$dbname);
// if(isset($conn)){
//     echo"successfull connect";
// }
// else{
//     echo"unsuccessfull connect";

// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ice cream</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
 
</head>

<body>
  
  <header>
    <div class="search">
      <a class="logo" href="#">ZECOLA ICE CREAM</a>
      <div class="search_bar">
        <form action="" method="get">
          <input type="text" class="search_input" name="" placeholder="search">
          <button class="button_search" name="btn_search">search</botton>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
			  <label for="switch-mode" class="switch-mode"></label>
      </div>
    </div>

    <nav class="nav">
      <!-- <a class="logo" href="#">ZECOLA ICE CREAM</a>-->
      <div class="icons">

        <div class="icon1">
          <div class="icon3">
            <a href="#" target_blank><i class="fab fa-facebook-f"></i></a>
          </div>
          <span>Facebook</span>
        </div>


        <div class="icon1">
          <div class="icon3">
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
          <span>Instagram</span>

        </div>


        <div class="icon1">
          <div class="icon3">
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
          <span>Youtube</span>

        </div>

        <div class="icon1">
          <div class="icon3">
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
          <span>Twitter</span>

        </div>
        <div  class="dark">
      <input type="checkbox" id="switch-mode" hidden>
			  <label for="switch-mode" class="switch-mode"></label>
      </div>
      </div>

      </div>
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">SHOPE</a></li>
        <li><a href="#">IC CREAM</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">CONTACT US</a></li>
      </ul>
    </nav>
    <!--user_icon-->
    <div class="cart">
      <ul>
        <li><a href="signup.php"><i class="fa-solid fa-user"></i></a></li>
        <li class="cart-icon"><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
        <span class="cart-count">1</span>
      </ul>

    </div>
    <!--end-user_icon-->

    <div class="animation">
      <img src="img/23.gif">
      <span class="shadow"></span>
    </div>
	<script src="script.js"></script>

  </header>