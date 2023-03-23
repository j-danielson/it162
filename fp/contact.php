<?php include 'fpincludes/fp-header.php';?>

<div class="container form-div">
  <h3>REACH ME</h3>
  <div>
  <?php

        include 'fp-includes/fp-contact-include.php'; #site keys & code here
    
        $toAddress = "jdanielson04@gmail.com";  //place your/your client's email address here
        $toName = "Josh Danielson"; //place your client's name here
        $website = "joshuadanielson.me";  //place NAME of your client's website

	?>
  <p class="center-font">
    For more information about my servicecs or pricing, please reach out to me with some extra information <br /> and I will follow up within a few days. 
  </p>
  	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<div>	
		<label>
			Extra:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Let me know what you're looking for" tabindex="30"></textarea>
		</label>
	</div>	
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
  </div>
</div>

<?php include 'fpincludes/fp-footer.php';?>