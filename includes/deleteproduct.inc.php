<?php


if(isset($_POST['delete-btn'])){
   include 'dbh.inc.php';

   $delete_id = $_POST['delete-id'];

   $delete_image_query = mysqli_query($conn, "SELECT image FROM products WHERE pid = '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   unlink('uploaded_img/'.$fetch_delete_image['image']);
   unlink('uploaded_img/'.$fetch_delete_image['image1']);
   unlink('uploaded_img/'.$fetch_delete_image['image2']);

   mysqli_query($conn, "DELETE FROM products WHERE pid = '$delete_id'") or die('query failed');

   header('Location: ../manageproduct.php?deleted');


}

?>




