<?php
include_once("includes/connection.php");
$msg='';
$sum=0;
if(!empty($_POST))
{
	foreach($_POST['question'] as $key => $value)
	{
		if(!empty($_POST['answer_'.$value])){
		//echo 'SELECT * from `options` where question_id = "'.$value.'" AND id = "'.$_POST['answer_'.$value].'" AND default_answer="1"';die;
		$res=$conn->query('SELECT * from `options` where question_id = "'.$value.'" AND id = "'.$_POST['answer_'.$value].'" AND default_answer="1"');
		if($res->num_rows!=0)	
			$sum=$sum+1;
		}
	}
	$msg = 'You answered '.$sum.' correctly';
}
?>
<html>
	<head>
		<title>Result</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body>
	<h1><?=$msg?></h1>
	</body>
</html>