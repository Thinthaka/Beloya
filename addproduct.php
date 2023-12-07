<?php
require 'slidebar.php';
?>

<div class="add-prodcut-content">
  <h1>Add Product</h1>
  <div class="add-prodcut-container">
    <form action="includes/addproduct.inc.php" method="post" enctype="multipart/form-data">

      <label class="product-label">Product Name :</label>
      <input type="text" name="productname" placeholder="Product Name"> <br>

      <label class="product-label">Product Description :</label>
      <input type="text" name="description" placeholder="Product Description"> <br>

      <label class="product-label">Product Price :</label>
      <input type="text" name="price" placeholder="Product Price per Gram"> <br>

      <label class="product-label">Add Images :</label>
      <input type="file" id="myFile" accept="image/jpg, image/jpeg, image/png" name="image"> 
      <input type="file" id="myFile" accept="image/jpg, image/jpeg, image/png" name="image1"> 
      <input type="file" id="myFile" accept="image/jpg, image/jpeg, image/png" name="image2"> <br><br>
      
      <input type="submit" name="add-product" value="Add Product" class="product-submit">

</form>


</div>
</div>