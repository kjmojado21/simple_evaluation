<?php
include 'classes/admin.php';
// if(empty($_SESSION['user_id'])){
//     header('location: login.php');
// }else{

$admin = new Admin();

$allResult = $admin->getAllTeacherSurvey();

$month = array('january', 'febuary', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december');
// }
$teacherList = $admin->getTeacherList();




?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        td {
            text-transform: capitalize;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-5">
        <form action="" method="post">
            <div class="alert alert-secondary">
                 <h2 class="lead d-inline">
                     HELLO KREDO ADMIN!
                 </h2>
                 <a href="logout.php" class="lead text-right d-block">Logout</a>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    
                    <button type="submit" name='all_survey' class="btn btn-outline-warning btn-block">Show All Survey</button> <br>
                    <hr>

                    <label for="" class="lead">Search Specific Teacher</label>
                    <Select name="teacher" class="form-control">
                       <?php 
                       foreach($teacherList as $key => $row){
                           echo "<option value = '".$row['teacher_fname']." ".$row['teacher_lname']."'>".$row['teacher_fname']." ".$row['teacher_lname']."</option>";
                       }
                       
                       ?>

                        </option>
                    </Select>
                    <br>
                    <Select name="month" class="form-control text-capitalize">
                        <?php
                        foreach ($month as $key) {
                            echo "<option value = '$key'>" . $key . "</option>";
                        }


                        ?>
                    </Select>
                    <br>
                    <Select name="subject" class="form-control">
                        <option value="Web Development Standard">
                            Web Development Standard
                        </option>
                        <option value="Web Development Advanced">
                            Web Development Advanced
                        </option>
                        <option value="Web Basic">
                            Web Basic

                        </option>
                    </Select>
                    <button type="submit" name="search_specific" class="btn btn-outline-primary float-right mt-3">Submit</button>

                    <br>
                    <br>
                    <hr>
                    <label for="" class="lead">Montly Survey: </label>
                    <Select name="monthly_search" class="form-control text-capitalize">
                        <?php
                        foreach ($month as $key) {
                            echo "<option value = '$key'>" . $key . "</option>";
                        }


                        ?>
                    </Select>
                    <br>
                    <button type="submit" name="monthly_submit" class="btn btn-outline-secondary w-50">Submit</button>
                </div>
        </form>
        <div class="col-md-9">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Survey List</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Add Subject</a>
                                    <a class="dropdown-item" href="addTeacher.php">Add Teacher</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="addStudent.php">Add Student</a>
                                </div>
                            </li>
                           
                        </ul>
                        <br>
            <table class="table table-striped w-100 mx-auto">
                <thead>
                    <th class="lead">Teacher Name</th>
                    <th class="lead">Subject</th>
                    <th class="lead">Month</th>
                    <th class="lead">Subject</th>
                    <th class="lead">Grade</th>

                </thead>
                <tbody>
                    <?php
                    if (isset($_POST['all_survey'])) {
                        echo "<div class = 'alert alert-success'>Results Given: " . count($allResult) . "</div>";
                        foreach ($allResult as $key => $row) {
                            echo "<tr>";
                            echo "<td>" . $row['teacher_name'] . "</td>";
                            echo "<td>" . $row['subject_taken'] . "</td>";
                            echo "<td>" . $row['month_taken'] . "</td>";
                            echo "<td>" . $row['subject_taken'] . "</td>";
                            echo "<td>" . $row['result'] . "</td>";






                            echo "</tr>";
                        }
                    } elseif (isset($_POST['search_specific'])) {
                        $teacher = $_POST['teacher'];
                        $month = $_POST['month'];
                        $subject = $_POST['subject'];

                        $surveyRow = $admin->getSpecificSurvey($teacher, $subject, $month);
                        // print_r($surveyRow);

                    


                        foreach ($surveyRow as $key => $row) {
                            echo "<tr>";
                            echo "<td>" . $row['teacher_name'] . "</td>";
                            echo "<td>" . $row['subject_taken'] . "</td>";
                            echo "<td>" . $row['month_taken'] . "</td>";
                            echo "<td>" . $row['subject_taken'] . "</td>";
                            echo "<td>" . $row['result'] . "</td>";

                            echo "</tr>";
                        }
                    } elseif (isset($_POST['monthly_submit'])) {
                        $month = $_POST['monthly_search'];

                        $monthly = $admin->monthlySearch($month);

                        foreach ($monthly as $key => $row) {
                            echo "<tr>";
                            echo "<td>" . $row['teacher_name'] . "</td>";
                            echo "<td>" . $row['subject_taken'] . "</td>";
                            echo "<td>" . $row['month_taken'] . "</td>";
                            echo "<td>" . $row['subject_taken'] . "</td>";
                            echo "<td>" . $row['result'] . "</td>";

                            echo "</tr>";
                        }
                    } else {
                        echo "<div class = 'alert alert-success text-center'>CHOOSE SOMETHING GENIUS!</div>";
                    }


                    ?>
                </tbody>


            </table>
            <hr>
            
        </div>


    </div>





    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>