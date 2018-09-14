<?php
session_start();
require_once 'connection.php';
include 'include/header.php';
include 'include/nav.php';
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND user_type_id=2";
    $result = mysqli_query($link, $sql);
    //$count = mysqli_num_rows($result);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login_user'] = $username;
        header("Location:user_details.php");
        
    }else {
         $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND user_type_id=1";
         $result = mysqli_query($link, $sql);
         //$count = mysqli_num_rows($result);
         if ($result) {
             $row = mysqli_fetch_assoc($result);
              $_SESSION['login_user'] = $username;
             header("Location:Admin/admin_dashboard.php");
      }
    }
}  
?>
<P id="left">WELCOME T0 PROF IYA ABUBAKAR CRC BAUCHI <br>INDUSTRIAL TRAINING STUDENTS PORTAL.<br> please fill in your login details to have <br>access to your account!!!</P>
    <form action="" method="post">
        <fieldset id="login">
            <h1>LOGIN</h1>
    	<label>Username:</label>
    	<input type="text" name="username" id="username" required>
    	<label>Password:</label>
    	<input type="password" name="password" id="password" required>
    	<input type="submit" name="submit" value="login" class="login_submit">
        <a href="register.php"><input type="submit" name="submit" value="Register" class="login_submit">
        </fieldset>
    </form>
<?php
include 'include/footer.php';
?>