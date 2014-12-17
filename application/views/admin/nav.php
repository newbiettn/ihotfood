<?php ?>
<nav>
	<ul>
		<li >
			<a href="<?php echo base_url()?>index.php/admin/manage"><span class="icon">&#128711;</span> Dashboard</a>
		</li>
		<li>
			<a href="<?php echo base_url()?>index.php/admin/manage/get_all_user"><span class="icon">&#128196;</span> Users</a>
			<ul class="submenu">
				<li><a href="<?php echo base_url()?>index.php/admin/manage/show_create_user">Create user</a></li>
				<li><a href="<?php echo base_url()?>index.php/admin/manage/get_all_user">View all users</a></li>
			</ul>	
		</li>
		<li>
			<a href="<?php echo base_url()?>index.php/admin/manage_restaurant/get_all_restaurant"><span class="icon">&#127748;</span> Restaurants </a>
			<ul class="submenu">
				<li><a href="<?php echo base_url()?>index.php/admin/manage_restaurant/show_create_restaurant">Create restaurant</a></li>
				<li><a href="<?php echo base_url()?>index.php/admin/manage_restaurant/get_all_restaurant">View  all restaurants</a></li>
			</ul>
		</li>
	</ul>
</nav>