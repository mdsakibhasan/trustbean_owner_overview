<?php 
	include ('config.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trustbean Owner View</title>
	<script type="text/javascript">
		function confirm_delete(){
			return confirm('Are you Want to delete any Owner data');
		}
	</script>
</head>
<body>
	<h2>Trustbean Owner View </h2>
	<table border="3" cellspacing="1" cellpadding="10">
		<tr>
			<th>STAFF ID</th>
			<th>STAFF NAME</th>
			<th>STAFF ROLL</th>
			<th>STAFF AGE</th>
			<th>STAFF EMAIL</th>
			<th>STAFF STATUS</th>
			<th>ACTION</th>
			<th>DELETE</th>
		</tr>



		<?php 
			$i=0;
			$result = mysql_query("select * from tbl_staff");
			while($row = mysql_fetch_array($result)){
			$i++;
		?>

			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $row['st_name'] ?></td>
				<td><?php echo $row['st_roll'] ?></td>
				<td><?php echo $row['st_age'] ?></td>
				<td><?php echo $row['st_email'] ?></td>
				<td><?php echo $row['st_status'] ?></td>
				<td><a href="update.php?id=<?php echo $row['st_id'] ?>">Edit</a></td>
				<td><a onclick="return confirm_delete()" href="delete.php?id=<?php echo $row['st_id'] ?>">Delete</a></td>
			</tr>


		<?php
			}

		 ?>


	</table>
	<br>
	<a href="insert.php">Return to insertt page</a>	
	<br>
	<a href="index.php">Return to Back</a>
</body>
</html>