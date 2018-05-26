<?php  
function clean_data ($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (!empty($_POST)) {
	clean_data($_POST['name']);
	clean_data($_POST['email']);
	clean_data($_POST['phone']);
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
}
	