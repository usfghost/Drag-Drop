<?php

$status = 0;
if(!empty($_FILES)) {
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);

	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
		$status = 1;
	}
}

echo $status;
