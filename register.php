
<?php
	require('connection.php');
	include 'include/header.php';
	include 'include/nav.php';
    if ($_POST){
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$user_type_id = $_POST['user_type_id'];
		$query = "insert into users(first_name, middle_name, last_name, username, email, password, user_type_id) values ('$first_name', '$middle_name', '$last_name', '$username', '$email', '$password', '$user_type_id')";
		$result = mysqli_query($link, $query);
		if ($result) {
			header("Location:login.php");
		} else {
			echo "<h1>Data is not inserted</h1>";
		}
	}
?>
	<form action="register.php" method="post">
		<fieldset id="register">
			<legend>Create Your Account</legend>
		<label>First Name:</label>
		<input type="text" name="first_name" id="first_name" required>
		<label>Middle Name:</label>
		<input type="text" name="middle_name" id="middle_name" required>
		<label>Last Name:</label>
		<input type="text" name="last_name" id="last_name" required>
		<label>Username:</label>
		<input type="text" name="username" id="username" required>
		<label>Email:</label>
		<input type="email" name="email" id="email" required>
		<label>Password:</label>
		<input type="password" name="password" id="password" required><br><br>
		<label>User:</label>
		<select name="user_type_id">
			<option>Select</option>
			<?php
               $sql = 'select * from user_type';
               $result = mysqli_query($link, $sql) or die(mysqli_error($link));
               $data = [];
               while ($row=mysqli_fetch_assoc($result)) {
                $data[] = $row;
                echo "<option value=".$row['id'].">".$row['title']."</option>";
              }
			?>
		</select><br><br>
		<center><input type="submit" name="submit" value="Create Account" id="submit_register"></center>
		</fieldset>
	</form>
<?php
include 'include/footer.php';
?>