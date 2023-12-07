<?php
require 'slidebar.php';

require 'includes/dbh.inc.php';
?>

<section class="product-view_container">

<?php

  $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
  if(mysqli_num_rows($select_products) > 0){
     while($fetch_products = mysqli_fetch_assoc($select_products)){
?>
<div class="table-view">
<div class="box-container">
</div>
<div class="card-container">
  <div class="card">
    <div class="card-head">
      <img src="logo.png" alt="logo" class="card-logo">
      <img src="includes/uploaded_img/<?php echo $fetch_products['image']; ?>" alt="Shoe" class="product-img">
      <div class="product-detail">
        <h2><?php echo $fetch_products['name']; ?></h2> <?php echo $fetch_products['description']; ?>
      </div>
      
    </div>
    <div class="card-body">
      <div class="product-desc">
        <span class="product-title">
                <b><?php echo $fetch_products['name']; ?></b>
                <span class="badge">
                  New
                </span>
        </span>
        <span class="product-caption">
                
              </span>
     
      </div>
      <div class="product-properties">
        <span class="product-size">
                <h4>Size</h4>
                <ul class="ul-size">
                  <li><a href="#">50g</a></li>
                  <li><a href="#">100g</a></li>
                  <li><a href="#">250g</a></li>
                  <li><a href="#">500kg</a></li>
                  <li><a href="#">1kg</a></li>
                </ul>
              </span>
        
        <span class="product-price">
          Rs.<b><?php echo $fetch_products['price']; ?></b>
        </span>

        <span class="product-color">
          <h4></h4>
          <ul class="ul-color">
                 
          </ul>
        </span>
      </div>
      <div>
      
      
      <span class="product-edit">
        <a href="editproduct.php?id=<?php echo $fetch_products['pid']; ?>"><b>Update</b></a>
      </span>

      <span class="product-delete">
        <form action="includes/deleteproduct.inc.php" method="post">
          <input type="hidden" name="delete-id" value="<?php echo $fetch_products['pid']; ?>">
          <button  type="submit" name="delete-btn" style="background: none!important;border: none;padding: 0!important;cursor: pointer;"><b>Delete</b></button>
        </form>
      </span>
      
     </div>

    </div>
  </div>
</div>

</div>

<?php
}
    }
    else
    {
        echo '<p class="empty">no products added yet!</p>';
    }
  
?>

  </section>

