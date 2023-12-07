<?php 
    require 'headerHome.php'; 
?> 


<div class="reg-content">
	<div class="reg-container">
		<img class="bg-img" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/bg.jpg" alt="">
			<div class="menu">
				<a class="btn-connexion"><h2>ADMIN LOGING</h2></a>
			</div>
			<div class="connexion">
				<div class="contact-form">
        		<form action="includes/adminlogin.inc.php" method="post">
					<label>USERNAME</label>
					<input type="text"  name="uname" placeholder="Enter your name">
					
					<label>PASSWORD</label>
					<input type="text" name="pwd" placeholder="Enter your password">
                    <br>
					
				
					
					<input type="submit" name="admin-login-Submit" value="Sign In" class="submit">
          
				</div>
			</form>
	
			</div>
</div>