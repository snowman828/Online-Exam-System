
<?php
  session_start();
  $exam_id = $_GET["id"];
	$curl = curl_init();
	curl_setopt_array($curl,
   array(CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_URL => "https://web.njit.edu/~mds39/CS490/master/back/studentExam/takeExam_allExams.php?user=".$_SESSION["username"]."&id=".$exam_id));

  $result = curl_exec($curl);
	echo $result;
?>
