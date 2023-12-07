<?php
require 'headerHome.php';

require 'includes/dbh.inc.php';

$user_id = $_SESSION['uId'];
?>

<main class="cart-main"  >
    
    <div class="basket">

    
      
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>

      <?php
        $grand_total = 0;
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){   
    ?>

      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="includes/uploaded_img/<?php echo $fetch_cart['image']; ?>" alt="Placholder Image" class="product-frame">
          </div>
          <div class="product-details">
            
            <p><strong><?php echo $fetch_cart['product_name']; ?></strong></p>
            <h1></h1>
            <p>Size <?php echo $fetch_cart['size']; ?></p>
          </div>
        </div>
        <div class="price"><?php echo $fetch_cart['price']; ?></div>
        <div class="quantity">
          <form action="managecart.inc.php" method="post">
          <input type="hidden" name="delete_id" value="<?php echo $fetch_cart['id']; ?>">
          <input type="number" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>" min="1" class="quantity-field">
        </div>
        <div class="update">
          
          <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
          <button type="submit" name="update_cart">Update</button>
          </form>
        </div>
        <div class="subtotal"><p>Rs.<?php echo $sub_tot = $fetch_cart['price'] * $fetch_cart['quantity']?></p></div>
        <div class="remove">
          <form action="managecart.inc.php" method="post">
          <input type="hidden" name="delete_id" value="<?php echo $fetch_cart['id']; ?>">
          <button type="submit" name="delete">Remove</button>
          </form>
        </div>
      </div>
      <?php
        $grand_total = $grand_total + $sub_tot;
        
        }
      }
      else{
        echo '<p class="empty">your cart is empty</p>';
      }
      ?>
      </div>
    </div>

    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal"><?php echo $grand_total ?></div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
       
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total"><?php echo $grand_total ?></div>
        </div>
        <div class="summary-checkout">
          <button class="checkout-cta"><a href="cheakout.php">Go to Secure Checkout</a></button>
        </div>
      </div>
    </aside>

  </main>



<?php 
require 'footer.php';
?>


