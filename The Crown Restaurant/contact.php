<?php
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];

mysql_connect("localhost","root","root");
mysql_select_db("crown_restaurant");
$select="insert into contact(first_name,last_name,subject,email,message) values ('".$first_name."','".$last_name."','".$subject."','".$email."','".$message."')";
$sql=mysql_query($select);

print '<script type="text/javascript">';
print 'alert("The data is saved.")';
print '</script>';

mysql_close();
header("location:index.php?note=success");

?>