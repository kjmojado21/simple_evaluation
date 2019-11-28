<?php
include 'classes/admin.php';

$admin = new Admin();

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
            <div class="col-md-3">
                <h2 class="lead">
                    How many teachers do you wanna add?
                </h2>
                <form method="post">
                <input type="number" name="len" class="form-control">
                <button type="submit" name='generate' class="btn btn-outline-success float-right mt-3">Generate</button>
                </form>

            </div>
            
                <div class="col-md-9">
                <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="admin.php" class="nav-link ">Survey List</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Add Subject</a>
                                    <a class="dropdown-item" href="addTeacher.php">Add Teacher</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="addStudent.php">Add Student</a>
                                </div>
                            </li>
                           
                        </ul>
                        
                    <form action="" method="post">
                    <?php 
                        if(isset($_POST['generate'])){
                            $len = $_POST['len'];
                            for($x = 1; $x <= $len; $x++){
                                echo "<div class = 'row'>";
                                    echo "<div class = 'col-md-6'>";
                                        echo "<label class = 'lead'>Enter Teacher First Name</label>";
                                        echo "<input type = 'text' name = 'teacher_fname[]' class = 'form-control'>";
                                    echo "</div>";
                                    echo "<div class = 'col-md-6'>";
                                        echo "<label class = 'lead'>Enter Teacher Last Name</label>";
                                        echo "<input type = 'text' name = 'teacher_lname[]' class = 'form-control'>";
                                    echo "</div>";
                                echo "</div>";
                            } 
                            echo "<br>";
                            echo '<button type="submit" name="submit_teacher" class="btn btn-outline-primary btn-block">Submit</button>';  

                        }
                    
                    
                    ?>
                    </form>
                    <?php 
                        if(isset($_POST['submit_teacher'])){
                            $teacher_fname = $_POST['teacher_fname'];
                            $teacher_lname = $_POST['teacher_lname'];
                            $counter = count($teacher_fname);

                            for($x=0; $x<$counter;$x++){

                                $admin->addNewTeacher($teacher_fname[$x],$teacher_lname[$x]);


                            }

                        }
                    
                    
                    ?>
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