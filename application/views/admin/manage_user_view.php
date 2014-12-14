<?php include 'metadata.php'?>
<head>
	<style>

	thead {color:green;}
	tbody {color:black;}
	tfoot {color:red;}
	//table,th,td {border:2px solid black;}
	//th, td {padding:10px}
	</style>

</head>
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
					<h2>Manage all users</h2>
				</hgroup>
			</header>
			<table id="myTable">
				<thead>
					<tr>
						<th>Edit</th>
						<th>Delete</th>
						<th>ID</th>
						<th>Username</th>	
						<th>Email</th>
						<th>Account type</th>
						<th>Fullname</th>
						<th>Gender</th>
						<th>Birthday</th>
					 </tr>
				</thead>
				<tbody>
					<?php
						
						foreach($all_users->result() as $row){
							$account = ""; 
							if ($row->account_type == "1"){
								$account = "admin";
							} 
							if ($row->account_type == "0"){
								$account = "user";
							}
							$gender = "";
							if ($row->gender == "m"){
								$gender = "male";
							}
							if ($row->gender == "f") {
								$gender = "female";
							}
							echo "<tr>";
							echo "<td><a href=",base_url(),"index.php/admin/manage/show_edit_user/$row->id> Edit </td>";
							echo "<td><a href=",base_url(),"index.php/admin/manage/do_delete_user/$row->id> Delete </td>";
							echo "<td>$row->id</td>";
							echo "<td>$row->username</td>";
							echo "<td>$row->email</td>";
							echo "<td>$account</td>";
							echo "<td>$row->fullname</td>";
							echo "<td>$gender</td>";
							echo "<td>$row->dob</td>";							
							echo "</tr>";
						}				
					 ?>
				</tbody>
			</table>
		</section>
	</section>
	<?php include 'footer.php'?>
</body>
</html>