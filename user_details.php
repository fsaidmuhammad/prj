<?php
require_once 'connection.php';
include 'include/session.php';
include 'include/header.php';
include 'include/nav.php';
if ($_SERVER['REQUEST_METHOD']== 'POST') {
	    $fname = mysqli_real_escape_string($link, $_POST['fname']);
      $middle_name = mysqli_real_escape_string($link, $_POST['middle_name']);
      $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
      $nationality = mysqli_real_escape_string($link, $_POST['nationality']);
      $gender = mysqli_real_escape_string($link, $_POST['gender']);
      $state = mysqli_real_escape_string($link, $_POST['state']);
      $lga = mysqli_real_escape_string($link, $_POST['lga']);
      $institute_name = mysqli_real_escape_string($link, $_POST['institute_name']);
      $department = mysqli_real_escape_string($link, $_POST['department']);
      $faculty = mysqli_real_escape_string($link, $_POST['faculty']);
      $course = mysqli_real_escape_string($link, $_POST['course']);
      $level = mysqli_real_escape_string($link, $_POST['level']);
      $reg_no = mysqli_real_escape_string($link, $_POST['reg_no']);
      $it_duration = mysqli_real_escape_string($link, $_POST['it_duration']);
      $start = mysqli_real_escape_string($link, $_POST['start']);
      $end = mysqli_real_escape_string($link, $_POST['end']);
      $sql = "INSERT INTO user_details (fname,middle_name,last_name,nationality,gender,state,lga,institute_name,department,faculty,course,level,reg_no,it_duration,start,end) VALUES ('$fname','$middle_name','$last_name','$nationality','$gender','$state','$lga','$institute_name','$department','$faculty','$course','$level','$reg_no','$it_duration','$start','$end')";
      $result=mysqli_query($link,$sql);
      if($result) {
        $_SESSION['id'] = $id;
        $_SESSION['fname'] = $fname;
        $_SESSION['middle_name'] = $middle_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['reg_no'] = $reg_no;
        header("Location:index1.php");
      }else{
        echo "not inserted";
      }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
	    <div id="body">
	    	<center>Welcome <strong><?php echo $login_session; ?></b></strong>  Please fill in the required details.</center>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset id="float_left">
        <legend class="head">Personal Details:</legend>
          <label>First Name:</label>
          <input type="text" value="" name="fname" placeholder="" required>
          <label>Middle Name:</label>
          <input type="text" value="" name="middle_name" placeholder="" required>
          <label>Last Name:</label>
          <input type="text" value="" name="last_name" placeholder="" required>
          <label>Nationality:</label>
          <input type="text" value="" name="nationality" placeholder="" required>
          <label>Gender:</label>
          <input type="radio" value="male" name="gender" placeholder="" required class="gender">Male
          <input type="radio" value="female" name="gender" placeholder="" required class="gender">Female<br>
          <label>State:</label>
          <input type="text" name="state" value="" required>
          <label>L.G.A:</label>
          <input type="text" name="lga" value="" required>
          </fieldset>
          <fieldset id="float_right">
          <legend id="head">School Details:</legend>
          <label>Institute Name:</label>
          <input type="text" value="" name="institute_name" placeholder="" required>
          <label>Department:</label>
          <input type="text" value="" name="department" placeholder="" required>
          <label>Faculty:</label>
          <input type="text" value="" name="faculty" placeholder="" required>
          <label>Course Of Study:</label>
          <input type="text" value="" name="course" placeholder="" required>
          <label>Level:</label>
          <input type="text" value="" name="level" placeholder="" required>
          <label>Reg No:</label>
          <input type="text" value="" name="reg_no" placeholder="" required>
          <label>IT Duration:</label>
          <input type="text" value="" name="it_duration" placeholder="" required>
          <label>Start:</label>
          <input type="text" value="" name="start" placeholder="dd-mm-yyyy" required>
          <label>End:</label>      
          <input type="text" value="" name="end" placeholder="dd-mm-yyyy" required> 
          </fieldset>
          <center><input type="submit" value="Save" name="submit" id="submit_user"></center>
        </form>
    </div>
<?php
include 'include/footer.php';
?>