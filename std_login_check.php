<?php
ob_start(); 
include ('db.php');
// username and password sent from form
//$username=$_POST['username2'];
//$password=$_POST['password2'];
//$code=$_POST['code'];
//$code_hidden=$_POST['code_hidden'];
if(isset($_POST['username'])){
       $username = $_POST['username'];
  }else{
       $username = '';
  }
// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($_POST['username']);
$password = stripslashes($_POST['password']);
$username = mysqli_real_escape_string($conn,$_POST['username2']);
$password = mysqli_real_escape_string($conn,$_POST['password2']);
//$code = stripslashes($code);
//$code = mysql_real_escape_string($code);

//$sql="SELECT * FROM $n WHERE user='$username' and pass='$password'";
//$result=mysql_query($sql);
$sql="SELECT * FROM student WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1/*&&strcmp($code,$code_hidden)==0*/)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("username");
session_register("password");
//session_register("sessioncode");
header("location:std_profile.php");
}
else
 {
//$error='Wrong Username or Password';
$std_error='<span style="color:red">ชื่ิอเข้าระบบและรหัสผ่านผิด กรุณาลองใหม่</span>';
include ('register.php');
//header("location:register.php");
//echo "Wrong username and password";
} 
ob_end_flush();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta http-equiv="refresh" content="1; url=register.php">
<title>student login check</title>
</head>

<body>
</body>
</html>