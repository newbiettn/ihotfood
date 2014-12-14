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
					<h1>Restaurant</h1>
					<h2>Manage all restaurants</h2>
				</hgroup>
			</header>
			<table id="myTable">
				<thead>
					<tr>
						<th>Edit</th>
						<th>Delete</th>
						<th>ID</th>
						<th>Owner ID</th>	
						<th>Name</th>
						<th>Address</th>
						<th>Phone number</th>
						<th>Email</th>
						<th>Website</th>
						<th>Capacity</th>
						<th>Openning hour</th>
						<th>Price</th>
						<th>Description</th>
						<th>Album ID</th>
						<th>Restaurant col</th>
						<th>Address</th>
						<th>Rating</th>
						<th>Location: lat, lon</th>
					 </tr>
				</thead>
				<tbody>
					<?php
						
						foreach($all_res->result() as $row){
							echo "<tr>";
							echo "<td><a href=",base_url(),"index.php/admin/manage_restaurant/show_edit_restaurant/$row->id> Edit </td>";
							echo "<td><a href=",base_url(),"index.php/admin/manage_restaurant/do_delete_restaurant/$row->id> Delete </td>";
							echo "<td>$row->id</td>";
							echo "<td>$row->owner_id</td>";
							echo "<td>$row->name</td>";
							echo "<td>$row->address_street $row->address_number, $row->address_ward, $row->zipcode, $row->address_city</td>";
							echo "<td>$row->phone_number</td>";
							echo "<td>$row->email</td>";
							echo "<td>$row->website</td>";
							echo "<td>$row->capacity</td>";
							echo "<td>$row->opening_hour (h) - $row->closing_hour (h)</td>";
							echo "<td>€ $row->lowest_price - € $row->highest_price</td>";
							echo "<td>$row->description</td>";
							echo "<td>$row->album_id</td>";
							echo "<td>$row->restaurantscol</td>";
							echo "<td>$row->address</td>";
							echo "<td>$row->rating</td>";
							echo "<td>$row->latlong</td>";
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