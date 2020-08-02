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

		.content table {
			margin: 6px auto;
			text-align: left;
		}

	</style>
</head>

<body>
	<div class="header">
		<h1>Tutorial CRUD CodeIgniter - SUSANTOKUN</h1>
		<h3>Detail Data #<?=$person->id?></h3>
	</div>
	<div class="content">
		<?php echo anchor('person','Back'); ?>
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?=$person->name?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><?=$person->address?></td>
			</tr>
		</table>
	</div>
</body>

</html>
