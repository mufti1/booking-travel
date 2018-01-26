<table border="1">
	<caption>Lihat Data Customer</caption>
	<thead>
		<tr>
			<th>ID CUSTOMER</th>
			<th>Nama</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Gender</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($customer as $data) {
		 ?>
		<tr>
			<td><?php echo $data->id_customer ?></td>
			<td><?php echo $data->name ?></td>
			<td><?php echo $data->phone ?></td>
			<td><?php echo $data->address ?></td>
			<td><?php echo $data->gender ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>