<?php

include('MoceanSMS.php');

$sms = new MoceanSMS();

if(isset($_POST['submit'])) { 

	$from = $_POST['pengirim'];
	$to = $_POST['nomor'];
	$message = $_POST['isi'];

	$rest_response = $sms->sendSMS($from, $to, $message);

	
	echo $rest_response;
	
}   
?>