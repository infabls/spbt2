<?php  
function clean_data ($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (!empty($_POST)) {
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
}
	