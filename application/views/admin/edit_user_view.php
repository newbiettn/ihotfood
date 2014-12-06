<?php include 'metadata.php'?>
<body>
	<div class="testing">
	<?php include 'header.php'?>
	<?php include 'user.php'?>
	</div>
	<?php include 'nav.php'?>
	<section class="content">
		<h2> Edit user </h2>
		<?php 
			$user = $current_user->result(); 
			echo form_open('admin/manage/do_edit_user');
		?> 
		<div >
			<label>ID</label>
			<input readonly type="text" name="id" value="<?php echo $user[0]->id; ?>" />
		</div>
		<div >
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $user[0]->username; ?>" />
		</div>
			<div >
			<label>Full name</label>
			<input type="text" name="fullname" placeholder="" value="<?php echo  $user[0]->fullname;?>"/>
		</div>
		<div >
			<label>Birthday</label>
			<input id="dob" type="date" name="dob" placeholder="" value="<?php echo $user[0]->dob; ?>"/>
		</div>
		<div>
			<label>Email</label>
			<input id="email" type="text" name="email" placeholder="" value="<?php echo $user[0]->email; ?>"/>
		</div>
		<div>
			<label>Account type: (0 for user, 1 for superuser)</label>
			<p align="center">User</p>
			<input id="account_type" type="radio" name="account_type" placeholder="" value="0" required="required" <?php echo ($user[0]->account_type=='0')?'checked':'' ?>/>
			<p align="center">Superuser</p>
			<input id="account_type" type="radio" name="account_type" placeholder="" value="1" required="required" <?php echo ($user[0]->account_type=='1')?'checked':'' ?> />
		</div>
		<div>
			<label>Gender: (M for male, F for female)</label>
			<p align="center">Male</p>
			<input id="gender" type="radio" name="gender" placeholder="" value="m" required="required" <?php echo ($user[0]->gender=='m')?'checked':'' ?>/>
			<p align="center">Female</p>
			<input id="gender" type="radio" name="gender" placeholder="" value="f" required="required" <?php echo ($user[0]->gender=='f')?'checked':'' ?>/>
		</div>					
		<div >
			<input class="button small" type="submit" name="confirm" value="Update"/>
		</div>
		<?php echo form_close(); ?>
	</section>
	<?php include 'footer.php'?>
</body>
</html>