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
					<h1>User</h1>
					<h2>Create new user</h2>
				</hgroup>
			</header>
			<?php 
				$user = $current_res->result(); 
				echo form_open('admin/manage_restaurant/do_edit_restaurant');
			?> 
			<div class="content">
				<div class="field-wrap">
					<label> ID </label>
					<input type="text" name="id" readonly value="<?php echo $user[0]->id; ?>"/>
				</div>
				<div class="field-wrap">
					<label> Owner ID </label>
					<input type="text" name="owner_id" value="<?php echo $user[0]->owner_id; ?>"/>
				</div>
				<div class="field-wrap">
					<label> Name </label>
					<input type="text" name="name" value="<?php echo $user[0]->name; ?>"/>
					<?php echo form_error('name', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Address Number</label>
					<input type="text" name="address_number" value="<?php echo $user[0]->address_number; ?>"/>	
					<?php echo form_error('address_number', '<small class="error">', '</small>'); ?>				
				</div>
				<div class="field-wrap">
					<label> Address street </label>
					<input type="text" name="address_street" value="<?php echo $user[0]->address_street; ?>"/>
					 <?php echo form_error('address_street', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Address ward </label>
					<input type="text" name="address_ward" value="<?php echo $user[0]->address_ward; ?>"/>
					<?php echo form_error('address_ward', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Address city </label>
					<input type="text" name="address_city" value="<?php echo $user[0]->address_city; ?>"/>
					<?php echo form_error('address_city', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Zip code </label>
					<input type="text" name="zipcode" value="<?php echo $user[0]->zipcode; ?>"/>
					<?php echo form_error('zipcode', '<small class="error">', '</small>'); ?>
				</div>				
				<div class="field-wrap">
					<label> Phone number </label>
					<input type="text" name="phone_number" value="<?php echo $user[0]->phone_number; ?>"/>
					<?php echo form_error('phone_number', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Email </label>
					<input type="email" name="email" value="<?php echo $user[0]->email; ?>"/>
					<?php echo form_error('email', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Website </label>
					<input type="text" name="website" value="<?php echo $user[0]->website; ?>"/>
					<?php echo form_error('website', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Capacity </label>
					<input type="number" name="zipcode" value="<?php echo $user[0]->capacity; ?>"/>
					<?php echo form_error('capacity', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Opening hour </label>
					<input type="number" name="opening_hour" value="<?php echo $user[0]->opening_hour; ?>"/>
					<?php echo form_error('opening_hour', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Closing hour </label>
					<input type="number" name="closing_hour" value="<?php echo $user[0]->closing_hour; ?>"/>
					<?php echo form_error('closing_hour', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Lowest price </label>
					<input type="number" name="lowest_price" value="<?php echo $user[0]->lowest_price; ?>"/>
					<?php echo form_error('lowest_price', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Highest price </label>
					<input type="number" name="highest_price" value="<?php echo $user[0]->highest_price; ?>"/>
					<?php echo form_error('highest_price', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Description </label>
					<input type="text" name="description" value="<?php echo $user[0]->description; ?>"/>
					<?php echo form_error('description', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Album ID </label>
					<input type="text" name="album_id" value="<?php echo $user[0]->album_id; ?>"/>
				</div>
				<div class="field-wrap">
					<label> Restaurantscol </label>
					<input type="text" name="Restaurantscol" value="<?php echo $user[0]->restaurantscol; ?>"/>
				</div>
				<div class="field-wrap">
					<label> Address </label>
					<input type="text" name="address" value="<?php echo $user[0]->address; ?>"/>
				</div>
				<div class="field-wrap">
					<label> Rating </label>
					<input type="text" name="rating" value="<?php echo $user[0]->rating; ?>"/>
				</div>
				<div class="field-wrap">
					<label> Location (lat, lon) </label>
					<input type="text" name="latlong" value="<?php echo $user[0]->latlong; ?>"/>
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