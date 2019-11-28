<?php 
include 'database.php';

class Admin extends Database{

    public function getSpecificSurvey($name,$subject,$month){
        $conn = $this->conn;
        $sql = "SELECT * from student INNER JOIN survey ON student.student_id = survey.student_id WHERE student.teacher_name = '$name' AND student.subject_taken = '$subject' AND student.month_taken = '$month'";

        $result = $conn->query($sql);

        if($result->num_rows>0){
            $row = array();

            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }else{
            echo false;
        }
    }

    public function getAllTeacherSurvey(){
        $conn = $this->conn;
        $sql = "SELECT * FROM student INNER JOIN survey ON student.student_id = survey.survey_id ORDER BY student.subject_taken ASC";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }return $row;

        }else{
           echo "<div class ='alert alert-danger'>No available survey</div>";
        }
    }

    public function monthlySearch($month){
        $conn = $this->conn;
        $sql = "SELECT * FROM student INNER JOIN survey ON student.student_id = survey.student_id WHERE month_taken = '$month'";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            $row = array();
            while ($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }return $row;
        }else{
            echo "No survey on that month";
        }

    }
    public function getStudentList(){
        $sql = "SELECT * FROM student_list";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;

        }else{
            return $msg = "no available students";
        }
    }
    public function addNewStudents($studentFname,$studentLname){
        $sql = "INSERT INTO student_list(student_fname,student_lname)VALUES('$studentFname','$studentLname')";
        $result = $this->conn->query($sql);

        if($result == false){
            die('error adding student'.$this->conn->connect_error);
        }else{
            echo "<div class = 'alert alert-primary'>Student added successfully</div>";
        }

    }
    public function addNewTeacher($teacherFname,$teacherLname){
        $sql = "INSERT INTO teacher_list(teacher_fname,teacher_lname)VALUES('$teacherFname','$teacherLname')";
        $result = $this->conn->query($sql);

        if($result == false){
            die('error adding new teacher'.$this->conn->connect_error);
        }else{
            echo "<div class = 'alert alert-success'>Teacher Added Successfully</div>";
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
public function addTeacher($teacherNFname,$teacherLname){
    $sql = "INSERT INTO teacher_list(teacher_fname,teacher_lname)VALUES('$teacherNFname','$teacherLname')";
    $result = $this->conn->query($sql);

    if($result == false){
        echo "<div class = 'alert alert-warning'>Error adding new teacher</div>";
    }else{
        echo "<div class  = 'alert alert-success'>Teacher Added Successfully!</div>";
    }
}



// for students tomorow
// DELETE login,user FROM login INNER JOIN user ON login.login_id = user.login_id WHERE login.login_id = 2

}










?>