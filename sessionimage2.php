<?php
session_start();
if(isset($_POST['value']))
{
	$value = $_POST['value'];
	$data = $value;
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $data) != 0){  
		//$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.	
			$msg = "false";
	}
	else
	{// Captcha verification is Correct. Final Code Execute here!		
		$msg="<span style='color:green'>The Validation code has been matched.</span>";	
		$msg = "true";		
	}
	
	echo json_encode($msg);
}

?>