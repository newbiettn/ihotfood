<?php include 'metadata.php'?>
<body>
	<div class="testing">
	<?php include 'header.php'?>
	<?php include 'user.php'?>
	</div>
	<?php include 'nav.php'?>
	<section class="content">
		<h2> Create user </h2>
		<?php 
			echo form_open('admin/manage/do_create_user');
		?> 
		<div >
			<label>Username</label>
			<input type="text" name="username" value="" required="required"/>
			<?php echo form_error('username', '<small class="error">', '</small>'); ?>	
		</div>
		<div >
			<label>Full name</label>
			<input type="text" name="fullname" placeholder="" value="" required="required"/>
		</div>
		<div >
			<label>Password</label>
			<input type="password" name="password" placeholder="" value="" required="required"/>
		</div>
		<div >
			<label>Birthday</label>
			<input id="dob" type="date" name="dob" placeholder="" value="" required="required"/>
		</div>
		<div>
			<label>Email</label>
			<input id="email" type="text" name="email" placeholder="" value="" required="required"/>
		</div>
		<div>
			<label>Account type: (0 for user, 1 for superuser)</label>
			<p align="center">User</p>
			<input id="account_type" type="radio" name="account_type" placeholder="" value="0" required="required"/>
			<p align="center">Superuser</p>
			<input id="account_type" type="radio" name="account_type" placeholder="" value="1" required="required"/>
		</div>
		<div>
			<label>Gender: (M for male, F for female)</label>
			<p align="center">Male</p>
			<input id="gender" type="radio" name="gender" placeholder="" value="m" required="required"/>
			<p align="center">Female</p>
			<input id="gender" type="radio" name="gender" placeholder="" value="f" required="required"/>
		</div>					
		<div >
			<input class="button small" type="submit" name="confirm" value="Create"/>
		</div>
		<?php echo form_close(); ?>
	</section>
	<?php include 'footer.php'?>
</body>
</html>