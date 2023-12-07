<?php
    require "headerHome.php"
?>

<div class="reg-content">
	<div class="reg-container">
		<img class="bg-img" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/bg.jpg" alt="">
			<div class="menu">
				<h2>SIGN IN</h2>
			</div>
			<div class="connexion">
				<div class="contact-form">
				<form action="includes/signup.inc.php" method="post">
				
				<label>FIRST NAME</label>
				<input type="text" name="fname" placeholder="Enter your name" >
						
          		<label>USERNAME</label>
          		<input type="text" name="uname" placeholder="Enter your username" >
 				
        		<label>E-MAIL</label>
				<input type="text" name="mail" placeholder="Enter your email" >

          		<label>MOBILE NUMBER</label>
				<input type="text" name="tno" placeholder="Enter your email">

				<label>PASSWORD</label>
				<input type="text" name="pwd" placeholder="Enter your password" >

        		<label>CONFIRM PASSWORD</label>
				<input type="text"  name="cpwd" placeholder="Confirm your password" >

          		<br>
				
				<input type="submit" name="reg-submit" value="Register" class="submit">
          		</form>
				</div>
			</div>
	</div>
			

<br><br>


  <?php
    require "footer.php"
  ?>