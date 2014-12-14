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
				$user = $current_user->result(); 
				echo form_open('admin/manage/do_edit_user');
			?> 
			<div class="content">
				<div class="field-wrap">
					<label> ID </label>
					<input type="text" name="id" readonly value="<?php echo $user[0]->id; ?>"/>
				</div>
				<div class="field-wrap">
					<label> Username </label>
					<input type="text" name="username" placeholder="Username" required="required" value="<?php echo $user[0]->username; ?>"/>
					<?php echo form_error('username', '<small class="error">', '</small>'); ?>	
				</div>
				<div class="field-wrap">
					<label> Fullname </label>
					<input type="text" name="fullname" placeholder="Fullname" required="required" value="<?php echo  $user[0]->fullname;?>" required="required"/>
				</div>
				<div class="field-wrap">
					<label> Password </label>
					<input readonly type="password" name="password" placeholder="Password" required="required" value="<?php echo  $user[0]->fullname;?>"/>
					 <?php echo form_error('password', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Email </label>
					<input type="email" name="email" placeholder="Email" required="required" value="<?php echo $user[0]->email; ?>"/>
					<?php echo form_error('email', '<small class="error">', '</small>'); ?> 
				</div>
				<div class="field-wrap">
					<label> Birthday </label>
					<input type="date" name="birthday" required="required"/>
				</div>				
				<div class="field-wrap">
					<table id="user_form"> 
						<tr>
							<td>Gender: </td>
							<td align="right" style="padding-right: 10px;">Male</td>
							<td><input id="gender" type="radio" name="gender" placeholder="" value="m" required="required" <?php echo ($user[0]->gender=='m')?'checked':'' ?>/></td>
							<td align="right" style="padding-right: 10px;">Female</td>
							<td><input id="gender" type="radio" name="gender" placeholder="" value="f" required="required" <?php echo ($user[0]->gender=='f')?'checked':'' ?>/></td>
						</tr>
						<tr>
							<td>Account type: </td>
							<td align="right" style="padding-right: 10px;">User</td>
							<td ><input id="account_type" type="radio" name="account_type" placeholder="" value="0" required="required" <?php echo ($user[0]->account_type=='0')?'checked':'' ?>/></td>
							<td align="right" style="padding-right: 10px;">Superuser</td>
							<td><input id="account_type" type="radio" name="account_type" placeholder="" value="1" required="required" <?php echo ($user[0]->account_type=='1')?'checked':'' ?>/></td>
						</tr>
					</table>	
				</div>
				<div style="padding-left: 160px; padding-top: 10px;" class="field-wrap">				
					<button type="submit" class="green">Submit</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</section>







		<!-- <div >
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
		</div> -->
		
	</section>
	<?php include 'footer.php'?>
</body>
</html>