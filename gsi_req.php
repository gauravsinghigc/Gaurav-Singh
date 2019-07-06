<?php
if (isset($_GET['req_id'])) {
	$req_id = $_GET['req_id'];
	if ($req_id == "footer_admin_req") {
		header("location: admin/index.php");
	} elseif ($req_id == "download_resume_gsi") {
    header("location: http://www.google.com");
	} else {
		header("location: admin/error.php?err_type=wrng_req");
	}
} else {
	header("location: admin/error.php?err_type=wrng_req");
}
?>
