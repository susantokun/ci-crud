<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutorial CRUD CodeIgniter | SUSANTOKUN</title>
	<style>
		.header {
			text-align: center;
		}

		.content {
			text-align: center
		}

		.content table,
		th,
		td {
			border: 1px solid black;
			margin: 6px auto;
		}

	</style>
</head>

<body>
	<div class="header">
		<h1>Tutorial CRUD CodeIgniter - SUSANTOKUN</h1>
		<h3>List Data</h3>
	</div>
	<div class="content">
		<?php echo anchor('person/add/','Create'); ?>
		<table>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
			<?php
      $no=1;
      foreach($persons as $person) { ?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$person->name?></td>
				<td><?=$person->address?></td>
				<td>
					<?php echo anchor('person/detail/'.$person->id,'Detail'); ?> |
					<?php echo anchor('person/edit/'.$person->id,'Update'); ?> |
					<?php echo anchor('person/delete/'.$person->id,'Delete'); ?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>

</html>
