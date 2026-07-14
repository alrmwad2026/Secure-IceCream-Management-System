  <?php
  include('files/header.php');
  ?>
  
  <!----------------------------section-one----------------------------->
  <section class="main-one" id="">
    <div class="main1">
      <h1>ZECOLA <br>ICE CREAM</h1>
      <p>Lorem ipsum dolor sit amet consectetur.<br>
        Consequatur neque repudiandae eos veniam,<br>
        dignissimos dolor ad ratione minima repella .<br></p>
      <input class="botton-one" type="button" value="Buy Now">
      <input class="botton-one" type="button" value="Read More">
    </div>
  </section>
  <!---------------------------end-section-one----------------------------->
  <!------------------------- section-two ------------------------------->
  <section class="main-two" id="ic-cream">
    <div class="main2">
      <img class="ice" src="img/16.jpg">

      <h1><strong>Zecola ic<br><span>Cream</span></strong></h1>
      <p>Lorem ipsum dolor sit amet consectetur.<br>
        Consequatur neque repudiandae eos veniam,<br>
        dignissimos dolor ad ratione minima repella .<br></p>
      <div class="btn">
        <input class="button-one" type="button" value="Buy Now">
        <input class="button-two" type="button" value="Read More">
      </div>
    </div>
  </section>
  <!--------------------------end-section-two ----------------------->

  <!--------------------------section-three---------------------------->
  <section class="main-three" id="our-ic">
    <div class="main-card">
      <div class="main3">
        <h1><strong> Our Ic Cream</strong></h1>
        <p class="ic-paragraph">Lorem ipsum dolor sit amet consectetur.adrationamet consectetur </p>
          
         
            
              <div class="cards">
 <?php
            $query="SELECT *FROM PRODUCTS";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)){
            
            ?> 
            <div class="card-main3">
                <div class="card-image">
                  <img src="uploads/img//<?php echo $row['proimg'];?>">
                  <span calss="unvailable"><?php echo $row['proavailability'];?></span>
                </div>

                <div class="product_name"><a href=""><?php echo $row['proname'];?></a></div>
                <div class="product_price"><a href=""><?php echo $row['proprice'];?></a></div>
                 <div class="product_description"><a href="details.php"><i class="fa-solid fa-eye"></i>For Product details, click here</a></div> 
                
                <div class="qty_input">
                    <button class="qty_count_mins">-</button>
                    <input type="number" id="quantity" name="" value="1" min="0" max="20">
                    <button class="qty_count_add">+</button>
                </div><br>
                <div class="submit"><a href="">
                      <button class="addto_card" type="submit" name="">
                      <i class="fa-solid fa-cart-plus">&nbsp;&nbsp;</i>Add to the basket</button>
                      </a>
                </div>

            </div>
            <?php
                 }
                  ?>
              </div>

         
          
          


      </div>   
    </div>   
    
    
   
</section
><!------------------------------end-section-three------------------------------------>
  <?php
 include('files/footer.php');
  ?> 