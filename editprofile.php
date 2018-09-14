<?php
include 'connection.php';
include 'include/session.php';
include 'include/header.php';
include 'include/nav.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	 $sql = "SELECT * FROM user_details WHERE id=$id";
	$query = mysqli_query($link,$sql);
	$count = mysqli_num_rows($query);
	if($count){
		$result = mysqli_fetch_assoc($query);
		print_r($result);
	}
}
if (isset($_POST['fname']) && isset($_POST['id'])) {
	$name =$_POST['name'];
	$id =$_POST['id'];
	$sql = "UPDATE user_details SET fname='$fname',middle_name='$middle_name',last_name='$last_name',nationality='$nationality',gender='$gender',state='$state',lga='$lga',institute_name='$institute_name',department='$department',faculty='$faculty',course='$course',level='$level',reg_no='$reg_no',it_duration='$it_duration',start='$start',end='$end' WHERE id='$id'";
	$rslt = mysqli_query($link,$sql);
	if ($rslt) {
		header("Location:view_details.php");
	}
	}
?>

	<?php echo $_SESSION['reg_no']; ?>
	<?php echo $_SESSION['fname']; ?>
	<form action="editprofile.php" method="post">
	<label>ID: <?=$result['id']?></label>
	<input type="hidden" name="id" value=""><br>
	<label>First Name:</label>
	<input type="text" name="fname" value="<?=$result['fname']?>"><br>
	<label>Middle Name:</label>
	<input type="text" name="middle_name" value="<?=$result['middle_name']?>"><br>
	<label>Last Name:</label>
	<input type="text" name="last_name" value="<?=$result['last_name']?>"><br>
	<label>Nationality</label>
	<input type="text" name="nationality" value="<?=$result['nationality']?>"><br>
	<label>Gender:</label>
	<input type="radio" name="gender" value="<?=$result['gender']?>">Male<br>
	<input type="radio" name="gender" value="<?=$result['gender']?>">Female<br>
	<label>State:</label>
	<input type="text" name="state" value="<?=$result['state']?>"><br>
	<label>LGA:</label>
	<input type="text" name="lga" value="<?=$result['lga']?>"><br>
	<label>Institute Name:</label>
	<input type="text" name="institute_name" value="<?=$result['institute_name']?>"><br>
	<label>Department:</label>
	<input type="text" name="department" value="<?=$result['department']?>"><br>
	<label>Faculty:</label>
	<input type="text" name="faculty" value="<?=$result['faculty']?>"><br>
	<label>Course:</label>
	<input type="text" name="course" value="<?=$result['course']?>"><br>
	<label>Level:</label>
	<input type="text" name="level" value="<?=$result['level']?>"><br>
	<label>Reg No:</label>
	<input type="text" name="reg_no" value="<?=$result['reg_no']?>"><br>
	<label>IT Duration:</label>
	<input type="text" name="it_duration" value="<?=$result['it_duration']?>"><br>
	<label>Start:</label>
	<input type="text" name="start" value="<?=$result['start']?>"><br>
	<label>End:</label>
	<input type="text" name="end" value="<?=$result['end']?>"><br>
	<input type="submit" name="submit" value="Save Changes">
	</form>    
<?php
include 'include/footer.php';
?>