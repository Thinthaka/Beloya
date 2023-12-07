<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beloya</title>
    
    <link rel="icon" href="logo.png" type="image/icon type">

    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="footer.css">
    <link rel="stylesheet"  href="home.css">
    <link rel="stylesheet"  href="about.css">
    <link rel="stylesheet"  href="form.css">
    <link rel="stylesheet"  href="manage.css"> 
    <link rel="stylesheet"  href="service.css">
    <link rel="stylesheet"  href="contact.css">
    <link rel="stylesheet"  href="cart.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    
</head>
<body>

    <div>    
        <div class= "navbar">
            <img src= "logo.png" class="logo">
            <?php
                if(isset($_SESSION['uId'])){
                  echo '
                  <ul>
                  <li><a href="index.php"> Home </a> </li>
                  <li><a href="product.php"> Product </a> </li>
                  <li><a href="service.php"> Service </a> </li>
                  <li><a href="about.php"> About Us </a> </li>
                  <li><a href="contact.php"> Contact Us </a> </li>
                  <li><a href="messageview.php"> Update </a></li>
                  
                  </ul> ';
                }
                else{
                  
                  echo '<ul>
                  <li><a href="index.php"> Home </a> </li>
                  <li><a href="product.php"> Product </a> </li>
                  <li><a href="service.php"> Service </a> </li>
                  <li><a href="about.php"> About Us </a> </li>
                  <li><a target="_self" href="registaion.php"> Register </a> </li>
              </ul> ';
                  
                }
                ?>

            <ol>
              <?php
                if(isset($_SESSION['uId'])){
                  echo '
                <li><a href="cart.php"><img src= "shopping-cart.png" class="icon" ></a></li>
                <li><a><div class="dropdown">';
                }
                ?>

                <img src= "circle-user.png" onclick="myFunction()" class="dropbtn">
                <div id="myDropdown" class="dropdown-content">
                <?php
                if(isset($_SESSION['uId'])){
                  echo '<form action="includes/logout.inc.php" method="post">
                  <button style="background: none!important;border: none;padding: 0!important;cursor: pointer;">Logout</button>
                  </form>';
                }
                else{
                  
                  echo '<a href="login.php">User Login</a>';
                  echo '<a href="adminlogin.php">Admin Login</a>';
                }
                ?>
                    
                    
                </div>
            </div></a></li>
            </ol>
        </div>
    </div>

<script>
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    }

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
