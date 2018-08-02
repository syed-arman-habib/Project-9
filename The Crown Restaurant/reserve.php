<?php
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $guest_number = $_POST['guest_number'];
  $reservation_date = $_POST['reservation_date'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];

mysql_connect("localhost","root","root");
mysql_select_db("crown_restaurant");
$select="insert into reservations(first_name,last_name,guest_number,reservation_date,phone,email,message) values ('".$first_name."','".$last_name."','".$guest_number."','".$reservation_date."','".$phone."','".$email."','".$message."')";
$sql=mysql_query($select);

print '<script type="text/javascript">';
print 'alert("The data is saved.")';
print '</script>';

mysql_close();
header("location:index.php?note=success");

?>