<?php 

require 'database.php';

class Student extends database{

    public function user_info($name,$teacher,$subject,$schedule,$monthTaken){
        $conn = $this->conn;

        $insertIntoStudentTable = "INSERT INTO student(user_fullname,teacher_name,subject_taken,schedule,month_taken)VALUES('$name','$teacher','$subject','$schedule','$monthTaken')";

            $firstInsertion = $conn->query($insertIntoStudentTable);

            if($firstInsertion == true){
                header('location:survey.php');
            }else{
                "<div class = alert alert-warning>Error Survey!</div>";
            }

    }
    
    public function calculateResult($first,$second,$third,$fourth,$fifth,$sixth,$seventh,$eight,$ninth,$tenth){

        $survey = ($first+$second+$third+$fourth+$fifth+$sixth+$seventh+$eight+$ninth+$tenth)/10;

        return $survey;


    }
    public function getUserDetails($name){
        $conn = $this->conn;
        $sql = "SELECT * FROM student WHERE user_fullname = '$name'";

        $result = $conn->query($sql);

        if($result == false){
            die('error retrieving user data');
        }else{
            return $result->fetch_assoc();
        }
    }

    public function addSurvey($studentID,$teacherName,$subject,$result){
        $conn = $this->conn;
        $insertIntoSurveyTable = "INSERT INTO survey(student_id,teacher_name,result)VALUES('$studentID','$teacherName','$result')";
        $surveyResult = $conn->query($insertIntoSurveyTable);

        if($surveyResult == true){
            $surveyID = $this->conn->insert_id;
            $insertIntoTeacherTable = "INSERT INTO teachers (teacher_name,subject,survey_id)VALUES('$teacherName','$subject','$surveyID')";

            $teacherResult = $conn->query($insertIntoTeacherTable);

            if($teacherResult == false){
                echo "error adding survey";
            }else{
                header('location: done_survey.php');
            }


        }else{
            echo "error adding into survey table";
        }

    }
    public function getTeacherList(){
        $sql = "SELECT * FROM teacher_list";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }return $row;
        }else{
            return "error retrieving teacher list";
        }
    }
    public function getStudentList(){
        $sql = "SELECT * FROM student_list";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }return $row;
        }else{
            return "error retrieving student list";
        }
    }
    




}
