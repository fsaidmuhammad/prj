<?php
require_once 'connection.php';
include 'include/session.php';
include 'include/header.php';
if (isset($_SESSION['reg_no'])) {
	$reg_no = $_SESSION['reg_no'];
	$sql = "SELECT * FROM user_details WHERE reg_no='$reg_no'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

	<div id="dashboard">
	<ul>
		<li><a href="view_details.php">View Details</a></li>
		<li><a href="editprofile.php">Edit Details</a></li>
		<li><a href="">My Account</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>
	    ID: <?=$row['id']?><br>
		First Name: <?=$row['fname']?><br>
		Middle Name: <?=$row['middle_name']?><br>
		Last Name: <?=$row['last_name']?><br>
		Nationality: <?=$row['nationality']?><br>
		Gender: <?=$row['gender']?><br>
		State: <?=$row['state']?><br>
		LGA: <?=$row['lga']?><br>
		Institute Name: <?=$row['institute_name']?><br>
		Department: <?=$row['department']?><br>
		Faculty: <?=$row['faculty']?><br>
		Course: <?=$row['course']?><br>
		Level: <?=$row['level']?><br>
		Reg No: <?=$row['reg_no']?><br>
		IT Duration: <?=$row['it_duration']?><br>
		Start: <?=$row['start']?><br>
		End: <?=$row['end']?><br>
		<a href="editprofile.php?id=<?= $row['id'];?>"><input type="submit" name="submit" value="Edit"></a>
<?php
include 'include/footer.php';
?>