<?php 
require 'config.php';
if (isset($_POST['add_mail_id'])) {
	$email = $_POST['email'];
	$ip_address = ip_address();
	$date_time = date("d/m/Y h:i:s A");
	$system_name = php_uname('n');

	$check_exiting_mail = "SELECT * from subscriber_mails where email='$email'";
	$query = mysqli_query($con, $check_exiting_mail);
	$fetch_existing_mail = mysqli_fetch_assoc($query);

	if ($fetch_existing_mail == true) {
		header("location: ../resume.gauravsinghigc.tech/index.php?msg_value=mail_exists");
	} else {
	$sql = "INSERT into subscriber_mails (mail_id, email, status, ip_address, date_time, system_name) Values ('', '$email', 'unsaved', '$ip_address', '$date_time', '$system_name')";
	$query = mysqli_query($con, $sql);

	if ($query == true ) {
		header("location: index.php");
	} else {
		header("location: error.php?err_type=subsribe_fail");
	}
 }
}
?>