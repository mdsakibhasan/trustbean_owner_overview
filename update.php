<?php
include('config.php');


if(isset($_REQUEST['id'])){
	$id=$_REQUEST['id'];
}else{
	header('location: view.php');
}



if(isset($_POST['form1'])){
	try{
		
		if(empty($_POST['st_name'])){
			throw new Exception('Name cant be empty');
		}
		if(empty($_POST['st_roll'])){
			throw new Exception('roll cant be empty');
		}
		if(empty($_POST['st_age'])){
			throw new Exception('age cant be empty');
		}
		if(empty($_POST['st_email'])){
			throw new Exception('email cant be empty');
		}
		if(empty($_POST['st_email'])){
			throw new Exception('email cant be empty');
		}
		if(empty($_POST['st_status'])){
			throw new Exception('status cant be empty');
		}

		//$result = mysql_query("insert into tbl_staff (st_name,st_roll,st_age,st_email,st_status) value ('$_POST[st_name]','$_POST[st_roll]','$_POST[st_age]','$_POST[st_email]','$_POST[st_status]')");

		$result = mysql_query("update tbl_staff set st_name='$_POST[st_name]', st_roll='$_POST[st_roll]', st_age='$_POST[st_age]', st_email='$_POST[st_email]', st_status='$_POST[st_status]' where st_id='$id' ");

		$success_message = "Congratulation Sir Data updated successfully";
		

	}
	catch(Exception $e){
		$error_message = $e->getMessage();
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trustbean update page</title>
</head>
<body>
	<h2>please update Owner Information</h2>
	<?php 
		if(isset($error_message)){
			echo $error_message;
		}
		if(isset($success_message)){
			echo $success_message;
		}
	?>

	<?php 	
		$result =mysql_query(" select * from tbl_staff where st_id='$id' ");
		while($row = mysql_fetch_array($result)){
			$st_name_old = $row['st_name'];
			$st_roll_old = $row['st_roll'];
			$st_age_old =  $row['st_age'];
			$st_email_old =  $row['st_email'];
			$st_status_old = $row['st_status'];
		}

	 ?>



	<form action="" method="POST">
		<table>
			<tr>
				<td>Owner Name:</td>
				<td><input type="text" placeholder="Owner Name" name="st_name" value="<?php echo $st_name_old ?>"></td>
			</tr>
			<tr>
				<td>Owner Roll:</td>
				<td><input type="text" placeholder="Owner Roll" name="st_roll" value="<?php echo $st_roll_old ?>"></td>
			</tr>
			<tr>
				<td>Owner Age:</td>
				<td><input type="text" placeholder="Owner Age" name="st_age" value="<?php echo $st_age_old ?>" ></td>
			</tr>
			<tr>
				<td>Owner Email:</td>
				<td><input type="text" placeholder="Owner Email" name="st_email" value="<?php echo $st_email_old ?>"></td>
			</tr>
			<tr>
				<td>Owner Status:</td>
				<td><input type="text" placeholder="Owner Status" name="st_status" value="<?php echo $st_status_old ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Click To Insert" name="form1"></td>
			</tr>
		</table>
		<input type="hidden" name="id" value="<?php echo $id ?>">
	</form>
	<br>	
	<a href="view.php">Return to view page</a>
	<br>	
	<a href="index.php">Return to Back</a>

</body>
</html>