<?php
include "sqlconfig.php";

$response = [
      'data'=>[],
      'total_count'=>0,
      'success'=>false
];

if(isset($_POST['qid'])){
      $qid = $_POST['qid'];
      $exam_id = $_POST['exam_id'];      
      $qid = ((int)$qid) - 1;
}
else if(isset($_GET['qid'])){
      $qid = $_GET['qid'];
      $exam_id = $_GET['exam_id'];
      $qid = ((int)$qid) - 1;
}
else{
      echo json_encode($response);
      exit();
}

$sqlc = "SELECT count(*) as count from questions where exam_id= ".$exam_id;
$resultc = mysqli_query($conn, $sqlc);

if (mysqli_num_rows($resultc)>0) {
      while($rowc = $resultc->fetch_assoc()) {
            $response['total_count'] = $rowc['count'];
      }
}

$sql = "SELECT a.answer1,a.answer2,a.answer3,a.answer4,q.question_text,q.image_path,q.nt_id FROM answers as a inner join questions as q on a.question_id=q.nt_id where q.exam_id= ".$exam_id." limit ".$qid.",1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
      while($row = $result->fetch_assoc()) {
            $response['data'] = $row;
            $response['success'] = true;
      }

      $quest_id = $response['data']['nt_id'];
      $sqlfind = "select answer_serial from test_sheet where exam_id = $exam_id and user_id = 1 and question_id = $quest_id";
      $resultfind = mysqli_query($conn, $sqlfind);

      if (mysqli_num_rows($resultfind)>0) {
            while($row = $resultfind->fetch_assoc()) {
                  $response['attempt_answer'] = $row['answer_serial'];
            }
      }

      echo json_encode($response);      
}
else{
      echo json_encode($response);
      exit();
}
