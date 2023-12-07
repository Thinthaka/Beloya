<?php
    require "headerHome.php"
?>


<div class="reg-content">
	<div class="reg-container">
		<img class="bg-img" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/bg.jpg" alt="">
			<div class="menu">
				<a class="btn-connexion"><h2>SIGN IN</h2></a>
			</div>
			<div class="connexion">
				<div class="contact-form">
        		<form action="includes/login.inc.php" method="post">
					<label>USERNAME</label>
					<input type="text"  name="uname" placeholder="Enter your name">
					
					<label>PASSWORD</label>
					<input type="text" name="password" placeholder="Enter your password">
					
					<div class="check">
						<label>				
							<input id="check" type="checkbox" class="checkbox">
								<svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
									<path class="path-back"  d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
									<path class="path-moving" d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
								</svg>
						</label>
						<h3>Keep me signed in</h3>
					</div>
					
					<input type="submit" name="login-Submit" value="Sign In" class="submit">
          
				</div>
			</form>
				
				<hr>
				<a href="" target="_blank"><h4>Forgot password?</h4></a>
			</div>
</div>
<br>
<br>

  <?php
    require "footer.php";
  ?>