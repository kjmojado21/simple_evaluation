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
      <div class="container-fluid p-5">
          <div class="row mt-5">
              <div class="col-md-3">
                  <div class="alert alert-secondary">
                      <h2 class="lead">Hello Admin!</h2>
                        <a href="logout.php" class="lead d-block text-right">Logout!</a>
                  </div>
                  <form method="post">
                      <label for="" class="lead">How Many Students You want to add?</label>
                      <input type="number" name="length" id="" class="form-control">
                      <br>
                      <button type="submit" name="submit_length"class="btn btn-outline-primary float-right">Submit</button>

                     
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
                        <form action="" method="post" class="lead">
                            <?php 
                             if(isset($_POST['submit_length'])){
                                $len = $_POST['length'];
                                
                                for($x = 1; $x <= $len; $x++){

                                    echo "<div class = 'card w-25 float-left ml-3 mt-4 mb-5'>";
                                        echo "<div class = 'card-header'>";
                                            echo "Add a student";
    
                                        echo "</div>";
                                        echo "<div class = 'card-body'>";
                                            echo "Student First Name: ";
                                            echo "<input type = 'text' class = 'form-control' name = 'fname[]'>";
                                            echo "Student Last Name: ";
                                            echo "<input type = 'text' class = 'form-control' name = 'lname[]'>";
                                        echo "</div>";
    
    
                                    echo "</div>";
    
                                }
                                
                                echo '<button type="submit" name ="submit_students" class="btn btn-primary btn-block">Add Students</button>';

                            }else{
                                echo "<div class = ' mt-5 alert alert-danger'>Specify how many students you want to add </div>";
                            }
        
                          
                                                       
                            ?>
                        </form>
                        <?php 
                        if(isset($_POST['submit_students'])){
                            $studentFname = $_POST['fname'];
                            $studentLname = $_POST['lname'];
                            $counter = count($studentLname);

                            
                            for($x = 0; $x < $counter; $x++){

                                $admin->addNewStudents($studentFname[$x],$studentLname[$x]);
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


