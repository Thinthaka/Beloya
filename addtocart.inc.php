<?php
session_start();

include 'includes/dbh.inc.php';

$user_id = $_SESSION['uId'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_size = $_POST['size'];
   $product_quantity = $_POST['quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE product_name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
      header('location:product.php?already_added');
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, product_name, size, quantity, price, image) VALUES('$user_id', '$product_name', '$product_size', '$product_quantity', '$product_price', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
      header('location:product.php?product_added_to_cart');
   }

}

?>