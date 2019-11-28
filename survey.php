<?php 
include 'classes/student.php';
if(empty($_SESSION['user_id'])){
    header('location: login.php');
}else{
    $current_user = $_SESSION['user_id'];
    $student = new Student();

    $details = $student->getUserDetails($current_user);

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
      <div class="container-fluid w-50">
          <div class="card mt-5 p-5">
            <div class="card-header">
            <h2 class="lead text-center">
                  Teacher's Evaluation Form
              </h2>
              <p class="lead text-capitalize">Name: <?php echo $current_user ?></p>
              <p class="lead text-capitalize">Teacher: <?php echo $details['teacher_name'] ?></p>
              <p class="lead text-capitalize">Subject: <?php echo $details['subject_taken'] ?></p>


            </div>
            <form action="action.php" method="post">
            <div class="card-body">
                <p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in ullam nesciunt recusandae corporis eos saepe ?</p>
                <input type="radio" value="30" name="first" required> Never
                <br>
                <input type="radio" value="80" name="first"> Sometimes
                <br>
                <input type="radio" value="100" name="first"> Always
                <br>
                <br>
                <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in ullam nesciunt recusandae corporis eos saepe ?</p>
                <input type="radio" value="30" name="second" required> Never
                <br>
                <input type="radio" value="80" name="second"> Sometimes
                <br>
                <input type="radio" value="100" name="second"> Always
                <br>
                <br>
                <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in ullam nesciunt recusandae corporis eos saepe ?</p>
                <input type="radio" value="30" name="third" required> Never
                <br>
                <input type="radio" value="80" name="third" > Sometimes
                <br>
                <input type="radio" value="100" name="third"> Always
                <br>
                <br>
                <p>4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in ullam nesciunt recusandae corporis eos saepe ?</p>
                <input type="radio" value="30" name="fourth"required> Never
                <br>
                <input type="radio" value="80" name="fourth"> Sometimes
                <br>
                <input type="radio" value="100" name="fourth"> Always
                <br>
                <br>
                <p>5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in ullam nesciunt recusandae corporis eos saepe ?</p>
                <input type="radio" value="30" name="fifth" required> Never
                <br>
                <input type="radio" value="80" name="fifth"> Sometimes
                <br>
                <input type="radio" value="100" name="fifth"> Always
                <br>
                <br>
                <p>6. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in ullam nesciunt recusandae corporis eos saepe ?</p>
                <input type="radio" value="30" name="sixth" required> Never
                <br>
                <input type="radio" value="80" name="sixth"> Sometimes
                <br>
                <input type="radio" value="100" name="sixth"> Always
                <br>
                <br>
                <p>7. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in ullam nesciunt recusandae corporis eos saepe ?</p>
                <input type="radio" value="30" name="seventh" required> Never
                <br>
                <input type="radio" value="80" name="seventh"> Sometimes
                <br>
                <input type="radio" value="100" name="seventh"> Always
                <br>
                <br>
                <p>8. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in ullam nesciunt recusandae corporis eos saepe ?</p>
                <input type="radio" value="30" name="eighth" required> Never
                <br>
                <input type="radio" value="80" name="eighth"> Sometimes
                <br>
                <input type="radio" value="100" name="eighth"> Always
                <br>
                <br>
                <p>9. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in ullam nesciunt recusandae corporis eos saepe ?</p>
                <input type="radio" value="30" name="ninth" required> Never
                <br>
                <input type="radio" value="80" name="ninth"> Sometimes
                <br>
                <input type="radio" value="100" name="ninth"> Always
                <br>
                <br>
                <p>10. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates in ullam nesciunt recusandae corporis eos saepe ?</p>
                <input type="radio" value="30" name="tenth" required> Never
                <br>
                <input type="radio" value="80" name="tenth"> Sometimes
                <br>
                <input type="radio" value="100" name="tenth"> Always

                <input type="hidden" value="<?php echo $details['teacher_name'] ?>"name="teacher_name">
                <input type="hidden" value="<?php echo $details['student_id']?>" name="student_id">
                <input type="hidden" value="<?php echo $details['subject_taken']?>" name="subject">


        <br>
            <button type="submit" name="submit_survey" class=" w-50 btn btn-outline-success float-right">Submit survey</button>
            </div>
            </form>
          </div>




      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>