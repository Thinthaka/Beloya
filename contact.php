<?php
    require "headerHome.php"
?>


<div class="contact-content">

	<div class="contact-container">
			<div class="menu">
            <h2>Enter your Message</h2>
			</div>
			<div class="connexion">
				<div class="contact-form">
				<form action="message.inc.php" method="post">

                    <label class="product-label">Name :</label>
                    <input type="text" name="name" placeholder="Enter your Name"> <br><br>

                    <label class="product-label">E-mail :</label>
                    <input type="text" name="email" placeholder="Enter your E-mail Address"> <br><br>

                    <label class="product-label" >Message Type :</label>
                    <select class="input-dropdown" name="topic">
                        <option value="Complain">Complain</option>
                        <option value="expiriance">Buying expiriance</option>
                        <option value="problem">Problems</option>
                    </select>
                    
                    <label class="product-label">Message :</label>
                    <input type="text" name="msg" placeholder="Message"> <br><br><br>

                    <input type="submit" name="send" value="Send" class="product-submit">

                    </form>
				</div>
			</div>
	</div>

    <br><br>
	

<?php
    require "footer.php"
?>