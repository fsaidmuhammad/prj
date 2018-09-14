<?php
require_once 'connection.php';
include 'include/session.php';
include 'include/header.php';
if (isset($_SESSION['id']) && ($_SESSION['reg_no']) && ($_SESSION['fname']) && ($_SESSION['middle_name']) && ($_SESSION['last_name'])){

}else{
	
}
$sql = 'select * from user_details';
$result = mysqli_query ($link, $sql) or die (mysqli_error($link));
$data = [];
while ($row = mysqli_fetch_assoc($result)) { 
	$data[] = $row;
 }
?>
	<div id="dashboard">
		<ul>
			<li><a href="index1.php">Dashboard</a></li>
			<li><a href="view_details.php">View Details</a></li>
		    <li><a href="#">My Account</a></li>
		    <li><a href="logout.php">Logout</a></li>
			<li><h1 id="h1"><?php echo $_SESSION['reg_no']; ?></h1></li>
		</ul>
	</div>
	<center><h1 style="color:#ffce14">SUCCESSFULLY REGISTERED</h1></center>
    <div id="table_float">
<table border="1px" id="table">
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Nationality</th>
		<th>Gender</th>
		<th>State</th>
		<th>LGA</th>
		<th>Institute Name</th>
		<th>Department</th>
		<th>Faculty</th>
		<th>Course</th>
		<th>Level</th>
		<th>Reg_No</th>
		<th>IT_Duration</th>
		<th>Start</th>
		<th>End</th>
	</tr>
	<?php foreach ($data as $students):?> 
	<tr>
		<td><?=$students[ 'id' ]?></td> 
		<td><?=$students[ 'fname' ]?></td> 
		<td><?=$students[ 'middle_name' ]?></td>
		<td><?=$students[ 'last_name' ]?></td>  
		<td><?=$students[ 'nationality' ]?></td> 
		<td><?=$students[ 'gender' ]?></td> 
		<td><?=$students[ 'state' ]?></td> 
		<td><?=$students[ 'lga' ]?></td>
		<td><?=$students[ 'institute_name' ]?></td> 
		<td><?=$students[ 'department' ]?></td> 
		<td><?=$students[ 'faculty' ]?></td> 
		<td><?=$students[ 'course' ]?></td> 
		<td><?=$students[ 'level' ]?></td> 
		<td><?=$students[ 'reg_no' ]?></td> 
		<td><?=$students[ 'it_duration' ]?></td> 
		<td><?=$students[ 'start' ]?></td> 
		<td><?=$students[ 'end' ]?></td> 
	</tr>
	<?php endforeach ;?>
</table>
</div>