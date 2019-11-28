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
    <div class="container">
        <h1 class="display-4 text-center mt-5">
            Kredo Admin Login
        </h1>
        <form method="post">
        <div class="row mt-5">
         
            <div class="col-md-6">
                <label for="" class="lead">Enter Username</label>
                <input type="text" name="uname" class="form-control">

            </div>
            <div class="col-md-6">
                <label for="" class="lead">Enter Password</label>
                <input type="password" name="pword" class="form-control">

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <button type="submit" name="admin_login" class="btn btn-primary w-50">Login</button>

            </div>
        </div>
        </form>
        <?php 
            if(isset($_POST['admin_login'])){
                $username = $_POST['uname'];
                $password = $_POST['pword'];
            
                if($username === 'KREDOADMIN' AND $password == 'KREDOADMIN@s'){
                    $_SESSION['user_id'] == 'Kredo Admin';
                    header('location: admin.php');
                }else{
                    echo "<div class = 'alert alert-danger'>Cannot Authorize Login</div>";
                }
            }
        
        
        
        ?>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>