<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'flower_shop');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>