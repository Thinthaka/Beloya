<?php

include 'includes/dbh.inc.php';

session_start();

$user_id = $_SESSION['uId'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $type = mysqli_real_escape_string($conn, $_POST['topic']);
   $msg = mysqli_real_escape_string($conn, $_POST['msg']);

   $select_message = mysqli_query($conn, "SELECT * FROM `messages` WHERE uid = '$user_id' AND name = '$name' AND email = '$email' AND message_type = '$type' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
    header("Location: ../view/contact.php?sentalready");
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `messages`(uid, name, email, message_type, message) VALUES('$user_id', '$name', '$email', '$type', '$msg')") or die('query failed');
      header("Location: ../view/contact.php?error=sentsuccessfully");
      $message[] = 'message sent successfully!';
      
   }

}

?>