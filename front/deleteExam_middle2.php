<?php
	$response = file_get_contents('php://input');
	$send = json_decode($response,true);
	
	
	
	$out=json_encode($send,true);
	$curl = curl_init();

	 $url="https://web.njit.edu/~mmp39/CS490/master/middle/removeExam/removeExam.php";
	  
	  curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_POST => 1,
		CURLOPT_FOLLOWLOCATION => 1,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_POSTFIELDS => $out
	  ));
	$resp = curl_exec($curl);
	
	$in=json_encode($resp,true);
	$resp=json_decode($in,true);
	echo $resp;

?>