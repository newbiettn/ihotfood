<?php ?>
<nav>
	<ul>
		<li class="section"><a href="<?php echo base_url()?>index.php/admin/manage"><span class="icon">&#128711;</span> Dashboard</a></li>
		<li>
			<a href="<?php echo base_url()?>index.php/admin/manage/get_all_user"><span class="icon">&#128196;</span> Users</a>
			<ul class="submenu">
				<li><a href="<?php echo base_url()?>index.php/admin/manage/show_create_user">Create user</a></li>
				<li><a href="<?php echo base_url()?>index.php/admin/manage/get_all_user">View all users</a></li>
			</ul>	
		</li>
		<li>
			<a href=""><span class="icon">&#127748;</span> Restaurants </a>
			<ul class="submenu">
				<li><a href="">Create restaurant</a></li>
				<li><a href="">View  all restaurants</a></li>
			</ul>
		</li>
		<li>
			<a href=""><span class="icon">&#59160;</span> Comments</a>
			<ul class="submenu">
				<li><a href="manage_dashboard/create_new_post">View all comments</a></li>
			</ul>
		</li>
	</ul>
</nav>