<?php include 'metadata.php'?>
<body>
	<div class="testing">
	<?php include 'header.php'?>
	<?php include 'user.php'?>
	</div>
	<?php include 'nav.php'?>
	<section class="content">
		<section class="widget" style="min-height:300px">
			<header>
				<span class="icon">&#59160;</span>
				<hgroup>
					<h1>Restaurant</h1>
					<h2>Create new restaurant</h2>
				</hgroup>
			</header>
			<?php 
				echo form_open('admin/manage_restaurant/do_create_restaurant');
			?> 
			<div class="content">
				<div class="field-wrap">
					<label> Owner ID </label>
					<input type="text" name="owner_id" required="required"/>
					<?php echo form_error('owner_id', '<small class="error">', '</small>'); ?>	
				</div>
				<div class="field-wrap">
						<label>Restaurant name </label>
						<input type="text" name="name"  />
				        <?php echo form_error('name', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label>Address number</label>
					<input type="number" name="address_number"  />
				       <?php echo form_error('address_number', '<small class="error">', '</small>'); ?>
				 </div>
				<div class="field-wrap">
					<label>Address street</label>
					<input type="text" name="address_street" />
				       <?php echo form_error('address_street', '<small class="error">', '</small>'); ?>
				 </div>
				<div class="field-wrap">
					<label>Address ward</label>
					<input type="text" name="address_ward"  />
				    <?php echo form_error('address_ward', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label>City</label>
					<input type="text" name="address_city"  />
				    <?php echo form_error('address_city', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label>Zipcode</label>
					<input type="text" name="zipcode"  />
				    <?php echo form_error('zipcode', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label>Phone number</label>
					<input type="text" name="phone_number"  />
				    <?php echo form_error('phone_number', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label>Email</label>
					<input type="text" name="email"  />
				    <?php echo form_error('email', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label>Website</label>
					<input type="text" name="website"  />
				    <?php echo form_error('website', '<small class="error">', '</small>'); ?>
				</div>
			    <div class="field-wrap">
					<label>Capacity</label>
					<input type="number" name="capacity"  />
			        <?php echo form_error('capacity', '<small class="error">', '</small>'); ?>
				</div>
		    	<div class="field-wrap">
					<label>Opening hour</label>
					<input type="number" name="opening_hour" />
				    <?php echo form_error('opening_hour', '<small class="error">', '</small>'); ?>
			    </div>
				<div class="field-wrap">
					<label>Closing hour</label>
					<input type="number" name="closing_hour" />
			        <?php echo form_error('closing_hour', '<small class="error">', '</small>'); ?>
			    </div>
				<div class="field-wrap">
					<label>Lowest price</label>
					<input type="number" name="lowest_price"  />
			        <?php echo form_error('lowest_price', '<small class="error">', '</small>'); ?>
			    </div>
				<div class="field-wrap">
					<label>Highest price</label>
					<input type="number" name="highest_price"  />
			        <?php echo form_error('highest_price', '<small class="error">', '</small>'); ?>
			    </div>
			    <div class="field-wrap">
					<label>Description</label>
					<input type="text" name="description" placeholder="" />
					<?php echo form_error('description', '<small class="error">', '</small>'); ?>
			    </div>
			    <div class="field-wrap">
					<label>Album ID</label>
						<input type="number" name="album_id" placeholder="" />
			    </div>
			    <div class="field-wrap">
					<label>Restaurantscol</label>
					<input type="text" name="restaurantscol" placeholder="" />
			    </div>
			    <div class="field-wrap">
					<label>Address</label>
					<input type="text" name="address" placeholder="" />
			    </div>
			    <div class="field-wrap">
					<label>Rating</label>
					<input type="text" name="rating" placeholder="" />
			    </div>
			    <div class="field-wrap">
					<label>Location</label>
					<input type="text" name="latlong" placeholder="" />
					<?php echo form_error('latlong', '<small class="error">', '</small>'); ?>
			    </div>
				<div style="padding-left: 160px; padding-top: 10px;" class="field-wrap">				
					<button type="submit" class="green">Submit</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</section>		
	</section>
	<?php include 'footer.php'?>
</body>
</html>