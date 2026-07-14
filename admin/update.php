<?php

include('../include/connected.php')

?>
<?php

  $id =$_GET['id'];
    if(isset($_GET['id'])){
        $query="SELECT * FROM products WHERE id='$id'";
        $result=mysqli_query($conn,$query);
        if($result){
            // $row =mysqli_fetch_assoc($result) ;
            print_r(@$row);
              } 
    }
    if(isset($_POST['update_pro'])){
      if(isset($_GET['id_new'])){

@$proname = $_POST['proname'];
@$proprice = $_POST['proprice'];
@$prodetails = $_POST['prodetails'];
@$proavailability= $_POST['proavailability'];
@$proadd = $_POST['proadd'];
//img start 
 @$imageName=$_FILES['proimg']['name'];
 @$imageTmp=$_FILES['proimg']['tmp_name'];
@$id_new=$_GET['id_new'];
//img end 
if(empty($prodetails)){
      echo'<script>alert("the details field is Empty Please fill it");</script>';

}
  
    else{
      $proimg= rand(0,5000). "_".$imageName;
      move_uploaded_file($imageTmp,"../uploads/img//".@$proimg);//move_uploaded_file()وظيفتها نقل الصور الى المجلد
    
      $query="UPDATE products SET 
      proname='$proname',
      proimg='$proimg',
      proprice='$proprice',
      prodetails='$prodetails',
      proavailability='$proavailability'
      WHERE id='id_new'";

      $result=mysqli_query($conn,$query);
      if(isset($result)){
      echo'<script>alert("product modify seccusfully");</script>';
      header("LOCATION:../index.php");
    }
     
      else{
      echo'<script>alert("product modify unseccusfully");</script>';

      }
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

    <title>update</title>
</head>
<body>
  


<!--section-start-->
      <main>
        <div class="form_product">
        <h1>Add Products</h1>
      <form action="update.php?id_new=<?php echo @$row['id'];?>" method="post" enctype="multipart/form-data"><!--enctype="multipart/form-data"(امر يسمح بتمرير الصور داخل الform)-->
        <label for="name">Product Name</label>
        <input type="text" name="proname" id="name" value="<?php echo @$row['proname'];?>" placeholder="Add product Name">
        <br>
        <label for="file">Product img</label>
        <input type="file" name="proimg" id="file" value="<?php echo @$row['proimg'];?>">
        <br>
        <label for="price">Product Price</label>
        <input type="text" name="proprice" id="price" value="<?php echo @$row['proprice'];?>" placeholder="Add product Price">
        <br>
        <label for="details">Product details</label>
        <input type="text" name="prodetails" id="details" value="<?php echo @$row['prodetails'];?>" placeholder="Add product details">
        <br>
        <label for="Availability">Product Availability</label>
        <input type="text" name="proavailability" id="Availability" value="<?php echo @$row['proavailability'];?>" placeholder="Add product Availability">
        <br>
        <button class="button" type="submit" name="update_pro" value="UPDATE">Add Product</button>
      </form>
      <br>
      </div>
      
        </main>

 <!--selection end-->

 
</body>
</html>