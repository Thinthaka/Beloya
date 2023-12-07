<?php
require 'slidebar.php';
?>

<div class="add-prodcut-content">
  <h1>Update Product</h1>
  <div class="add-prodcut-container">
    <form action="includes/editproduct.inc.php" method="post" enctype="multipart/form-data">
 
      <?php $var_value = $_GET['id']; ?>
      <input type="text" name="edit-id" value="<?php echo $var_value ?>">

      <label class="product-label">Product Name :</label>
      <input type="text" name="update_name" placeholder="Product Name"> <br>

      <label class="product-label">Product Description :</label>
      <input type="text" name="update_description" placeholder="Product Description"> <br>

      <label class="product-label">Product Price :</label>
      <input type="text" name="update_price" placeholder="Product Price per Gram"> <br>

      <label class="product-label">Add Images :</label>
      <input type="file" id="myFile" accept="image/jpg, image/jpeg, image/png" name="update_image"> 
      <input type="file" id="myFile" accept="image/jpg, image/jpeg, image/png" name="update_image1"> 
      <input type="file" id="myFile" accept="image/jpg, image/jpeg, image/png" name="update_image2"> <br><br>
      
      <input type="submit" name="edit-product" value="Update Product" class="product-submit">

</form>


</div>
</div>