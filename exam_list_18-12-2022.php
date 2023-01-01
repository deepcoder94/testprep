<?php
 ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

include"sqlconfig.php";


$qid = $_POST['qid'];
$exam_id = $_POST['exam_id'];
$question ="";

$sql = "select * from questions where exam_id = ".$exam_id;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
      while($row = $result->fetch_assoc()) {
      	$question = $row['question_text'];
      }
}


$sql2 = "select * from answers where question_id = ".$qid;
$result2 = mysqli_query($conn, $sql2);
$answers = [];

if (mysqli_num_rows($result2)>0) {
      while($row = $result2->fetch_assoc()) {
      	array_push($answers, $row['answer']);
      }
}

$arr = array('question' => $question, 'answers' => $answers);

// print_r($arr);
// echo json_encode($question_data);
array_seer