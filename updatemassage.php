<?php
    require "headerHome.php";
    require 'includes/dbh.inc.php';
?>


<div class="contact-content">

	<div class="contact-container">
			<div class="menu">
            <h2>Upate your Message</h2>
			</div>
			<div class="connexion">
				<div class="contact-form">
				<form action="updatemassage.inc.php" method="post">
                    
                    <label class="product-label">Message :</label>
                    <input type="text" name="msg" placeholder="Message"> <br><br><br>
                    <input type="text" name="mid" id="<?php echo $fetch_message['id']; ?>">
                    <input type="submit" name="update" value="Update" class="product-submit">

                    </form>
				</div>
			</div>
	</div>

    <br><br>
	

<?php
    require "footer.php"
?>