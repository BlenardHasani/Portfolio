<?php

   include_once('config.php');

   $sql="SELECT * FROM costumers";

   $datas=$conn->prepare($sql);

   $datas->execute();

   $costumers=$datas->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<table>
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Password</th>
			<th>Confirmpassword</th>
			<th>Delete</th>
		</thead>
		<tbody>
			<?php
			    foreach ($costumers as $costumer) {
			    
			?>
			    <tr>
			    	<td><?=$costumer['ID'] ?></td>
			    	<td><?=$costumer['name'] ?></td>
			    	<td><?=$costumer['lastname'] ?></td>
			    	<td><?=$costumer['email'] ?></td>
			    	<td><?=$costumer['password'] ?></td>
			    	<td><?=$costumer['confirmpassword'] ?></td>
			    	<td><a href="delete.php?id=<?= $costumer['ID'];?>">Delete</a>
			    	<td><a href="editform.php?id=<?= $costumer['ID'];?>">Edit</a></td>
			    </tr>

			    <?php
			}
			    ?>
	</table>
</body>
</html>
