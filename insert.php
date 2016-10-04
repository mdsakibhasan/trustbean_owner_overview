<?php
include('config.php');
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

		$result = mysql_query("insert into tbl_staff (st_name,st_roll,st_age,st_email,st_status) value ('$_POST[st_name]','$_POST[st_roll]','$_POST[st_age]','$_POST[st_email]','$_POST[st_status]')");

		$success_message = "Congratulation Sir Data Insert successfully";

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
	<title>Trustbean Insert page</title>
</head>
<body>
	<h2>please Insert Owner Information</h2>
	<?php 
		if(isset($error_message)){
			echo $error_message;
		}
		if(isset($success_message)){
			echo $success_message;
		}
	?>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Owner Name:</td>
				<td><input type="text" placeholder="Owner Name" name="st_name"></td>
			</tr>
			<tr>
				<td>Owner Roll:</td>
				<td><input type="text" placeholder="Owner Roll" name="st_roll"></td>
			</tr>
			<tr>
				<td>Owner Age:</td>
				<td><input type="text" placeholder="Owner Age" name="st_age"></td>
			</tr>
			<tr>
				<td>Owner Email:</td>
				<td><input type="text" placeholder="Owner Email" name="st_email"></td>
			</tr>
			<tr>
				<td>Owner Status:</td>
				<td><input type="text" placeholder="Owner Status" name="st_status"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Click To Insert" name="form1"></td>
			</tr>
		</table>
	</form>
	<br>
    <a href="view.php">Return to view page</a>
	<br>	
	<a href="index.php">Return to Back</a>	
</body>
</html>