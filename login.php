<?php 
	$Email = stripslashes(trim($_POST['email']));
	$Password = stripslashes(trim($_POST['password']));
	if ($Email ==="" || $Password ==="") {
		echo "empty";
	}
	else if($Email ==="ainimal@123"  && $Password === "123123"){
		echo "success";
	}
	else{
		echo "fail";
	}
?>
	