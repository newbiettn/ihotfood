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
				echo form_open('admin/manage/do_create_user');
			?> 
			<div class="content">
				<div class="field-wrap">
					<label> Username </label>
					<input type="text" name="username" placeholder="Username" required="required"/>
					<?php echo form_error('username', '<small class="error">', '</small>'); ?>	
				</div>
				<div class="field-wrap">
					<label> Fullname </label>
					<input type="text" name="fullname" placeholder="Fullname" required="required"/>
				</div>
				<div class="field-wrap">
					<label> Password </label>
					<input type="password" name="password" placeholder="Password" required="required"/>
					 <?php echo form_error('password', '<small class="error">', '</small>'); ?>
				</div>
				<div class="field-wrap">
					<label> Email </label>
					<input type="email" name="email" placeholder="Email" required="required"/>
					<?php echo form_error('email', '<small class="error">', '</small>'); ?> 
				</div>
				<div class="field-wrap">
					<label> Birthday </label>
					<input type="date" name="birthday"  required="required"/>
				</div>				
				<div class="field-wrap">
					<table id="user_form"> 
						<tr>
							<td>Gender: </td>
							<td>Male</td>
							<td><input id="gender" type="radio" name="gender" placeholder="" value="m" required="required"/></td>
							<td>Female</td>
							<td><input id="gender" type="radio" name="gender" placeholder="" value="f" required="required"/></td>
						</tr>
						<tr>
							<td>Account type: </td>
							<td>User</td>
							<td><input id="account_type" type="radio" name="account_type" placeholder="" value="0" required="required"/></td>
							<td>Superuser</td>
							<td><input id="account_type" type="radio" name="account_type" placeholder="" value="1" required="required"/></td>
						</tr>
					</table>	
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