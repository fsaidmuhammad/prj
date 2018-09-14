<?php
include 'include/session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Successful Registration</title>
</head>
<body>
	<h1>Your Account has been Created</h1>
	Thank you <strong><?php echo $login_session; ?></b></strong> </strong>
	<a href="user_details.php"><button type="submit">Proceed</button></a>
</body>
</html>