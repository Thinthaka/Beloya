<?php
include 'includes/dbh.inc.php';
?>

<section class="product-view_container">

<?php

$select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 3") or die('query failed');
if(mysqli_num_rows($select_products) > 0){
  while($fetch_products = mysqli_fetch_assoc($select_products)){
?>

<div class="table-view">
<div class="box-container"></div>
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
      <span class="product-caption"></span>
    </div>
    <form action="addtocart.inc.php" method="post">
    <div class="product-properties">
      <span class="product-size">
      <div>  
        <h4>Size</h4>
        <!-- <?php
          print_r($fetch_products['pid']);
        ?> -->
        
        <select name="size" id="<?php echo 'size' . $fetch_products['pid']; ?>" onchange="onChangeSize(<?php echo $fetch_products['pid']; ?>)">
          <option value="50">50</option>
          <option value="100" selected >100</option>
          <option value="250" >250</option>
          <option value="500" >500</option>
      </select>
     </span>
    </div>

    <div >
      <h4>Quantity</h4>
      <div class="counter">
        <span class="down" onClick='decreaseCount(event, this)'>-</span>
        <input type="text" name="quantity" value="1">
        <span class="up" onClick='increaseCount(event, this)'>+</span>
      </div>

      <span class="product-price">
      <input type="hidden" id="<?php echo "grm_price" . $fetch_products['pid']; ?>" name="grm_price" value="<?php echo $fetch_products['price']; ?>">
        Rs.<b><p id="<?php echo $fetch_products['pid']; ?>" ><?php echo $fetch_products['price']; ?></p></b>
        <input type="hidden" id="<?php echo $fetch_products['pid'] . "price"; ?>" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      </span> 
    </div>

      <span class="product-color">
        <h4></h4>
        <ul class="ul-color"></ul>
      </span>

      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
        
        <span class="product-add-cart">
          <button name="add_to_cart" value="submit"><b>Add to Cart<button></b>
        </span>
      </form>
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

<?php echo '
        <script>
          
          function onChangeSize(id) {
            const psize = document.getElementById("size" + id).value;
            const totalAmt = document.getElementById("grm_price" + id).value;

            document.getElementById(id).innerHTML = (totalAmt/100) * psize;
            document.getElementById(id + "price").value = (totalAmt/100) * psize;
          }
          

        </script> ' ?>

  </section>