<?php 
include 'classes/student.php';
$student = new Student();

if(isset($_POST['start'])){
    if($_POST['evaluator'] === 'kredo1234@s'){
        $_SESSION['user_id'] = 'Admin';
        header('location: admin.php');
    }else{
    $_SESSION['user_id'] = $_POST['student_name'];
    header('location:index.php');
    }

}elseif(isset($_POST['survey_start'])){
   
    $name = $_POST['current_user'];
    $teacherName = $_POST['teacher_name'];
    $subject = $_POST['subject'];
    $sched = $_POST['sched'];
    $month = $_POST['month_taken'];

    $student->user_info($name,$teacherName,$subject,$sched,$month);

    
    

    


}elseif(isset($_POST['submit_survey'])){
    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    $fourth = $_POST['fourth'];
    $fifth = $_POST['fifth'];
    $sixth = $_POST['sixth'];
    $seventh = $_POST['seventh'];
    $eighth = $_POST['eighth'];
    $ninth = $_POST['ninth'];
    $tenth = $_POST['tenth'];

    $studentID = $_POST['student_id'];
    $teacher_name = $_POST['teacher_name'];
    $subject = $_POST['subject'];

    $surveyTotal = $student->calculateResult($first,$second,$third,$fourth,$fifth,$sixth,$seventh,$eighth,$ninth,$tenth);

    $student->addSurvey($studentID,$teacher_name,$subject,$surveyTotal);




   


}










?>