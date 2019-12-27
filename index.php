<?php
include 'classes/student.php';


if(empty($_SESSION['user_id'])){
    header('location: login.php');
}else{

$current_user = $_SESSION['user_id'];
$student = new Student();

$month = array('january','febuary','march','april','may','june','july','august','september','october','november','december');
$teacherList = $student->getTeacherList();
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class=" lead text-center text-capitalize">
                    Hello <?php echo $current_user ?> !
                </h2>
            </div>
        </div>
        <form action="action.php" method="post">
            <div class="row mt-5 text-center">
                <div class="col-md-3">
                    <input type="hidden" value="<?php echo $current_user?>" name='current_user'>
                    <label for="" class="lead">Teacher's Name</label>
                    
                    <select name="teacher_name" id="" class="form-control" required>
                        <?php 
                        foreach($teacherList as $key => $row){
                            echo "<option value = '".$row['teacher_fname']." ".$row['teacher_lname']."'>".$row['teacher_fname']." ".$row['teacher_lname']."</option>";
                        
                        }
                        ?>
                        
                    </select>

                </div>
                <div class="col-md-3">
                    <label for="" class="lead">Subject Taken</label>
                    <select name="subject" id="" class="form-control" required>
                        <option value="Web Development Standard">Web Development Standard</option>
                        <option value="Web Development Advanced">Web Development Advanced</option>
                        <option value="Web Design Standard">Web Design Standard</option>
                        <option value="Web Basic">Web Basic</option>
                    </select>
                    

                </div>
                <div class="col-md-3">
                    <label for="" class="lead">Class Schedule</label>
                    <select name="sched" id="" class="form-control" required>
                        <option value="AM">9:50 AM - 12:50 PM</option>
                        <option value="PM">1:50 PM - 5:50 PM</option>
                       
                    </select>

                </div>
                <div class="col-md-3">
                    <label for="month_taken" class="lead">Month Taken</label>
                    <select name="month_taken" id="" class="form-control text-capitalize" required>
                        <?php 
                            foreach($month as $key => $value){
                                echo "<option value = '".$value."'>".$value."</option>";
                            }                
                        
                        ?>
                       
                       
                    </select>

                </div>
            </div>
                <br>
            <button type="submit" name="survey_start" class="btn btn-outline-primary w-25 d-block mx-auto">Start Survey</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


   
</body>

</html>