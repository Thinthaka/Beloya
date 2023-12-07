<?php
if (isset($_POST['update'])){

    require 'includes/dbh.inc.php';

    $id = $_POST['mid'];
    $message = $_POST['msg'];
    

    mysqli_query($conn, "UPDATE messages SET message='$message' WHERE id = '$id'") or die('query failed');
    $message[] = 'cart quantity updated!';
    
}