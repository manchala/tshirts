<?php echo form_open('shirt/buy');?>

<fieldset>
    <legend>Your Info</legend>
    <label>Name</label>
    <input type="text" name="custname" placeholder="Your name">
    <label>Email</label>
    <input type="text" placeholder="Email address">
    <label>Phone Number</label>
    <input type="text" placeholder="Phone Number">
    <label>Size</label>
    <select name="myselect">
	  <option>Choose Size</option>
	  <option value="XS">XS</option>
	  <option value="S">S</option>
	  <option value="M">M</option>
	  <option value="L">L</option>
	  <option value="XL">XL</option>
	</select>

    <legend>Shirt Type</legend>
    <label>What type of shirt do you want?</label>
    <label class="radio">
		<input type="radio" name="optionsRadios" id="optionsRadios1" value="Regular" checked>
	  	Regular
	</label>
	<label class="radio">
	  	<input type="radio" name="optionsRadios" id="optionsRadios2" value="Tank">
	  	Tank
	</label>
	<label class="radio">
	  	<input type="radio" name="optionsRadios" id="optionsRadios2" value="V-Neck">
	  	V-Neck
	</label>

	<legend>Extras</legend>
	<p>
		<div class="form-inline">
			<label class="checkbox">
			  <input type="checkbox" name="number" value="Yes">
			  I want a number on my back
			</label>
			<input type="text" class="input-small" placeholder="Number">
		</div>
	</p>

	<p>
		<div class="form-inline">
			<label class="checkbox">
			  <input type="checkbox" name="nickname" value="Yes">
			  I want my nickname on the back
			</label>
			<input type="text" class="input-small" placeholder="Nickname">
		</div>
	</p>

      <div class="form-actions">
      	<div class="row">
      		<div class="span3">
			<h3>Total Price:<?php foreach ($result as $res): ?>
			<?php echo $res['price']."<br />";?>
			<?php endforeach; ?>  </h3>
      			
      		</div>
	    	
	    		<button type="submit" class="btn btn-primary">Continue to Paypal</button>
	    	</div>
		

	    </div>
	  </div>
</fieldset>


<?php echo form_close(); ?>