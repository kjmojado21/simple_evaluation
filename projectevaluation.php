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
        <form action="" method="post">
            <div class="row mt-5">

                <div class="col-md-3">
                    <label for="" class="lead">Teacher Name</label>
                    <select name="teacher_name" id="" class="form-control">
                        <?php
                        $teacherList = $admin->getTeacherList();
                        foreach ($teacherList as $key => $row) {
                            echo "<option value = '" . $row['teacher_fname'] . " " . $row['teacher_lname'] . "'>" . $row['teacher_fname'] . " " . $row['teacher_lname'] . "</option>";
                        }
                        ?>

                    </select>
                    <label for="" class="lead">Project Name</label>
                    <input type="text" name="project_name" class="form-control">

                    <label for="" class="lead">Subject List</label>
                    <select name="subject" id="" class='form-control'>
                        <option value="Web Development">Web Development</option>
                        <option value="Web Basic">Web Basic</option>
                        <option value="Web Development Advanced">Web Development Advanced</option>




                    </select>
                    <button type="submit" name="generate_form" class="btn btn-primary mt-3 float-right">Generate </button>
        </form>
    </div>
    <div class="col-md-9">
        <?php
        if (isset($_POST['generate_form'])) {
            $teacherName = $_POST['teacher_name'];
            $project_name = $_POST['project_name'];
            $subject = $_POST['subject'];

            echo "<div class = 'card p-5'>";

            echo "<div class = 'card-header'>";
            echo "<h2 class = 'lead text-center'>Student Project Evaluation Form</h2>";
            echo "<label class = 'lead'>Teacher Name: " . $teacherName . "</label>";
            echo "<br>";
            echo "<label class = 'lead'>Project Name: " . $project_name . "</label>";
            echo "<br>";
            echo "<label class = 'lead'>Teacher Name: " . $teacherName . "</label>";





            echo "</div>";

            echo "<div class = 'card-body'>";

            echo "<label class = 'lead'>1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci suscipit sed pariatur obcaecati cupiditate illo libero nihil deserunt?</label>";
            echo "<select name = 'first' class = 'form-control'>";
            echo "<option value = '30'>Good</option>";
            echo "<option value = '70'>Average</option>";
            echo "<option value = '100'>Above Average</option>";
            echo "</select>";

            echo "<label class = 'lead'>2. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci suscipit sed pariatur obcaecati cupiditate illo libero nihil deserunt?</label>";
            echo "<select name = 'second' class = 'form-control'>";
            echo "<option value = '30'>Good</option>";
            echo "<option value = '70'>Average</option>";
            echo "<option value = '100'>Above Average</option>";
            echo "</select>";
            echo "<label class = 'lead'>3. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci suscipit sed pariatur obcaecati cupiditate illo libero nihil deserunt?</label>";
            echo "<select name = 'third' class = 'form-control'>";
            echo "<option value = '30'>Good</option>";
            echo "<option value = '70'>Average</option>";
            echo "<option value = '100'>Above Average</option>";
            echo "</select>";






            echo "</div>";



            echo "</div>";
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