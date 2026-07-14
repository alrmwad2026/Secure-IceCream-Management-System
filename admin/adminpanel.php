<?php
session_start();
include('../include/connected.php')

?>
<?php
@$proname = $_POST['proname'];
@$proprice = $_POST['proprice'];
@$prodetails = $_POST['prodetails'];
// @$proavailability= $_POST['proavailability'];
@$proadd = $_POST['proadd'];
//img start 
 @$imageName=$_FILES['proimg']['name'];
 @$imageTmp=$_FILES['proimg']['tmp_name'];

//img end 

  if(isset($proadd)){
    if(empty($proname) || empty($proprice) || empty($prodetails) ){
    echo'<script>alert("Please fill in all fields");</script>';
  }
    else{
      $proimg= rand(0,5000). "_".$imageName;
      move_uploaded_file($imageTmp,"../uploads/img//".@$proimg);//move_uploaded_file()وظيفتها نقل الصور الى المجلد
    
    $query="INSERT INTO products(proname,proimg,proprice,prodetails,proavailability) 
    VALUES('$proname','$proimg','$proprice','$prodetails','$proavailability')";
    $result=mysqli_query($conn,$query);
    if(isset($result)){
    echo'<script>alert("Post added seccusfully");</script>';
    }
    else{
    echo'<script>alert("Failed to Add Post");</script>';
  }

    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <title>Dashboard</title>
</head>
<body>
  <?php
   if(!isset( $_SESSION['EMAIL'])){
   header('location:../index.php');
  }
  else{
    ?>
    
<!--sidebar start-->
    <div class="sidebar_container">
      <div class="sidebar">
        <h1>Management Dashboard</h1>
        <ul>
          <li><a href="../index.php" target="_blank"><i class="fa-solid fa-house"></i>Home</a></li>
          <li><a href="product.php" target="_blank"><i class="fa-brands fa-product-hunt"></i>Product</a></li>
          <li><a href="adminpanel.php" target="_blank"><i class="fa-solid fa-folder-plus"></i>Add Product</a></li>
          <li><a href="../index.php" target="_blank"><i class="fa-solid fa-user"></i>Person Info</a></li>
          <li><a href="../index.php" target="_blank"><i class="fa-solid fa-folder-open"></i>Customer Product</a></li>
          <li><a href="logout.php"target="_blank"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
        </ul>
      </div></div>
<!--sidebar end-->

<!--section-start-->
      <main>
        <div class="form_product">
        <h1>Add Products</h1>
      <form action="adminpanel.php" method="post" enctype="multipart/form-data"><!--enctype="multipart/form-data"(امر يسمح بتمرير الصور داخل الform)-->
        <label for="name">Product Name</label>
        <input type="text" name="proname" id="name" placeholder="Add product Name">
        <br>
        <label for="file">Product img</label>
        <input type="file" name="proimg" id="file">
        <br>
        <label for="price">Product Price</label>
        <input type="text" name="proprice" id="price" placeholder="Add product Price">
        <br>
        <label for="details">Product details</label>
        <input type="text" name="prodetails" id="details" placeholder="Add product details">
        <br>
        
        <button class="button" type="submit" name="proadd">Add Product</button>
      </form>
      <br>
      </div>
      
        </main>
  
 <!--selection end-->

 
<?php

  }

?>


 
</body>
</html>