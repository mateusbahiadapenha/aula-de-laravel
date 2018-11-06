<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<h1>sistema de gerenciamento de produto</h1>
	<a href="/produtos/criar"></a>
<table>
	<thead>
		<th>#</th>
		<th>nome do  produto</th>
		<th>marca</th>
		<th>preço</th>
	</thead>
	<tbody>
		<?php
		foreach ($produtos as $produto) {
			?>
			<tr>
			<td><?php echo $produto[0]; ?></td>
			<td><?php echo $produto[1]; ?></td>
			<td><?php echo $produto[2]; ?></td>
			<td><?php echo $produto[3]; ?></td>
			</tr>
			<?php
		} 
		?>
		
	</tbody>
</table>
</body>
</html>