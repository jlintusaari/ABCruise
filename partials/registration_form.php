
<div class="content">
  <h2 class="content-head is-center">Registration</h2>

          <?php if (isset($verror))
     echo "<div class=\"l-box verror\">$verror</div>";
     ?>

     <p class="l-pad">The registration will be open until 8th of April 2016.</p>
     
     <p class="l-pad"><strong>We kindly ask you to purchase a registration ticket from <a href="https://shop.aalto.fi" target="_blank">Aalto University web shop</a> before registering</strong>. The language can be changed from the top right corner. Please choose "Pickup" as the delivery method for no additional delivery charges. We have been notified that in the credit card payment some of the button texts are not being translated properly, namely "Maksa" means pay, and "Peruuta" means cancel. After the purchase you will receive a confirmation email including your order number. The number is found right after the phrase "Webshop has received a new order...". Please include this number to the provided field below so that we can confirm your payment.</p>

     <ul class="price">
     <li><a href="https://shop.aalto.fi/p/870-abcruise-yhden-hengen-hytti/" target="_blank">Private cabin registration ticket, 250 €</a></li>
     <li><a href="https://shop.aalto.fi/p/871-abcruise-jaettu-hytti/" target="_blank">Shared cabin registration ticket, 200 €</a></li>
     </ul>
     
  <form class="pure-form pure-form-stacked" method="post" action="https://www.hiit.fi/ABCruise/register_post.php">
    <div class="pure-g">
      
      <div class="l-box pure-u-1 pure-u-md-2-5">

        <fieldset>

	  <label for="firstname">First name *</label>
	  <input name="firstname" type="text" placeholder="First name" value="<?php echo $_POST['firstname']?>" maxlength="50">

	  <label for="lastname">Last name *</label>
	  <input name="lastname" type="text" placeholder="Last name" value="<?php echo $_POST['lastname']?>" maxlength="50">
	  
	  <label for="affiliation">Affiliation *</label>
	  <input name="affiliation" type="text" placeholder="Affiliation" value="<?php echo $_POST['affiliation']?>" maxlength="100">

	  <label for="email">Email *</label>
	  <input name="email" type="email" placeholder="Email" value="<?php echo $_POST['email']?>" maxlength="100">

     	  <label for="order_number">Order number *</label>
	  <input name="order_number" type="text" placeholder="Order number" value="<?php echo $_POST['order_number']?>" maxlength="30">	  
	  
        </fieldset>
        
      </div>
      
      <div class="l-box pure-u-1 pure-u-md-2-5">

	<fieldset class="connect">

	  
	  <label for="cabin_type">Cabin type *</label>
	  <select name="cabin_type">
	    <option value="private">Private</option>
	    <option value="shared"<?php if ($_POST['cabin_type'] == 'shared') echo " selected";?>>Shared (2 persons)</option>
	  </select>
	  
	  <label for="share_with">Share the cabin with (if in shared cabin)</label>
	  <input name="share_with" type="text" placeholder="Name" value="<?php echo $_POST['share_with']?>" maxlength="255">

	  <label for="dob">Date of birth (ddmmyy) **</label>
	  <input name="dob" type="text" placeholder="ddmmyy" value="<?php echo $_POST['dob'];?>" maxlength="6">

	  <label for="country">Nationality **</label>
	  <select name="country">
	    <?php include('partials/country_select.php');?>
	  </select>

	  <label>Gender **</label>
	  <label class="pure-radio multi"><input name="gender" type="radio" value="male"<?php if ($_POST['gender'] == 'male') echo " checked";?>> Male</label>
	  <label class="pure-radio multi"><input name="gender" type="radio" value="female"<?php if ($_POST['gender'] == 'female') echo " checked";?>> Female</label>
	  
	  <div></div>
	  <button id="register" type="submit" class="pure-button">Register</button>
	  
        </fieldset>
      </div>
    </div>
    <span class="l-box">* required field</span><br>
    <span class="l-box">** required for the cruise reservation</span>
  </form>
     
</div>


<?php
/*
<fieldset class="connect">
	  
    <label>Would you like to present a poster? *</label>
    <label class="pure-radio multi"><input name="poster_choice" type="radio" value="1"<?php if ($_POST['poster_choice'] == '1') echo " checked";?>> Yes</label>
    <label class="pure-radio multi"><input name="poster_choice" type="radio" value="0"<?php if ($_POST['poster_choice'] == '0') echo " checked";?>> No</label>
    
    <label for="presentation_title">Presentation title</label>
    <input name="presentation_title" type="text" placeholder="" value="<?php echo $_POST['presentation_title']?>">
	  
    <label for="presentation_text">Presentation abstract</label>
    <textarea name="presentation_text"><?php echo $_POST['presentation_text']?></textarea>

    <button id="register" type="submit" class="pure-button">Register</button>
	  
</fieldset>
*/
?>
