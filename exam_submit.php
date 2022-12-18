<?php
include "sqlconfig.php";

$response = [
    'success' => false,
];

if (isset($_POST['resetAttempt'])) {
    $sql = "SELECT * from test_sheet where user_id = 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sql2 = "delete from test_sheet where user_id =1";
        $iquery = mysqli_query($conn, $sql2);
        if($iquery === true){
            $response['success'] = true;
        }
    }
}

if (isset($_POST['selected_answer']) && isset($_POST['exam_id']) && isset($_POST['question_id'])) {
    $selected_answer = $_POST['selected_answer'];
    $question_id = $_POST['question_id'];

    $sql = "SELECT * from test_sheet where user_id = 1 and exam_id=1 and question_id = $question_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $sql3 = "UPDATE `test_sheet` SET `answer_serial` = '$selected_answer' WHERE 
                `test_sheet`.`question_id` = $question_id and `test_sheet`.`user_id` = 1 and `test_sheet`.`exam_id`=1";        
        $iquery = mysqli_query($conn, $sql3);
        if ($iquery === TRUE) {
            $response['success'] = true;
        }
    } else {
        $sql2 = "insert into test_sheet
        (exam_id,question_id,answer_serial,user_id)
        values(1,$question_id,$selected_answer,1)";
        $iquery = mysqli_query($conn, $sql2);
        if ($iquery === TRUE) {
            $response['success'] = true;
        }
    }
}
echo json_encode($response);