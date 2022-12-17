<?php
//  ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

include"sqlconfig.php";

$response = [
      'data'=>[],
      'success'=>false
];

if(isset($_POST['qid'])){
      $qid = $_POST['qid'];
      $exam_id = $_POST['exam_id'];      
}
else if(isset($_GET['qid'])){
      $qid = $_GET['qid'];
      $exam_id = $_GET['exam_id'];      
}
else{
      echo json_encode($response);
      exit();
}


$sql = "SELECT a.answer1,a.answer2,a.answer3,a.answer4,q.question_text,q.nt_id FROM answers as a inner join questions as q on a.question_id=q.nt_id where q.exam_id= ".$exam_id." and q.nt_id = ".$qid;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
      while($row = $result->fetch_assoc()) {
            $response['data'] = $row;
            $response['success'] = true;
      }
      echo json_encode($response);      
}
else{
      echo json_encode($response);
      exit();
}
