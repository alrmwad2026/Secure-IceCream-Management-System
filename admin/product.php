<?php
include('../include/connected.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <title>Products Page</title>
</head>
<body>
    <?php
    $id=$_GET['id'];
    if(isset($id)){
        $query="DELETE FROM products WHERE id='$id'";
        $delete=mysqli_query($conn,$query);
        if(isset($delete)){
    echo'<script>alert("delete successfully");</script>';
        }
        else{
    echo'<script>alert("Failed to Delete Product");</script>';


        }
    }
    
    
    
    ?>
<div class="sidebar_container">

    <table >

          <tr>
            <th>Product ID</th>
            <th>Product Picture</th>
            <th>product Name</th>
            <th>product Price</th>
            <th>product Details</th>
            <th>product Availability</th>
            <th>Delete Porduct</th>
            <th>Update Porduct</th>
          </tr>
          <?php
          $query="SELECT * FROM products";
          $result=mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($result)){

          ?>
          <tr>
            <td><?php echo $row['id'];?></td>
            <!--img-->
            <td><img src="../uploads/img//<?php echo $row['proimg'];?>"></td>
            <!--img-->

            <td><?php echo $row['proname'];?></td>
            <td><?php echo $row['proprice'];?></td>
            <td><?php echo $row['prodetails'];?></td>
            <td><?php echo $row['proavailability'];?></td>

            <td><a href="product.php?id=<?php echo $row['id'];?>"><button type="submit" class="delete">Delete Porduct</button></a></td>
            <td><a href="update.php?id=<?php echo $row['id'];?>"><button type="submit" class="update">Update Porduct</button></a></td>
          </tr>
          
    <?php
    }

    ?>
          </table>
</div>
</body>
</html>
