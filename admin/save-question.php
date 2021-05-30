<?php
include_once("../includes/connection.php");
	if(!empty($_POST) && !empty($_POST['question']) && !empty($_POST['option']) && !empty($_POST['correct'])){
	$query="INSERT INTO `question` (`name`, `status`) VALUES ('".$_POST['question']."', '1')";
	$conn->query($query);
	$inserted_id=$conn->insert_id;
	if($inserted_id>0){
		foreach($_POST['option'] as $key => $val){
			if(!empty($_POST['correct'][$key])) $correct = 1; else $correct = 0;
			$que="INSERT INTO `options` (`question_id`, `answer`, `default_answer`) VALUES ('".$inserted_id."', '".$val."', '".$correct."')";
			$conn->query($que);
			header("location: ".$base_url."admin/add_question.php?success=Added success");
		}
	}else{
		header("location: ".$base_url."admin/add_question.php?success=Added failed");
	}
	$conn->close();
}
?>