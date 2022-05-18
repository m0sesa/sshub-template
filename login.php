<?php
session_start();

$type = "Tickets";

// 1. require auth files
// require_once 'func/auth.php';

// 2. check if user is already loggedin
// if (isLogin('student')) {
//     header('Location: ./dashboard.php');
// }

// 3. Try Logging in
if (count($_POST) > 0) {
    $required = array('id', 'pass');

    if (!(count(array_intersect_key(array_flip($required), $_POST)) === count($required))) {
        $error = "Something went wrong, please try again";
    } else {
        $id = htmlspecialchars(stripslashes(trim($_POST['id'])));
        $pass = htmlspecialchars(stripslashes(trim($_POST['pass'])));

        // Check user
        // $user = authStudent($id, $pass);
        if ($user) {
            // loginStudent($user);
            header('Location: ./dashboard.php');
        } else {
            $error = "Invalid Credentials";
        }
    }
}


$page = (object)[
    'title'       =>  'Student Login',
    'description' =>  'Login to SSHub portal',
    'author'      =>  'SSHub.ng'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" <?= $page->description ?> ">
    <meta name="author" content=" <?= $page->author ?> ">
    <link rel="icon" href="./img/logo.png">

    <title> <?= $page->title ?> </title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background-image: url('img/login-bg<?= rand(1, 13) ?>.jpg');">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5" style="opacity:0.9">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-3 font-weight-bold">SSHub <sup><?=$type?></sup></h1>
                                        <h2 class="h5 text-gray-900 mb-3">Welcome Back!</h2>
                                    </div>
                                    <div class="alert alert-danger text-center" id="error" style="display:<?= isset($error) ? 'visible' : 'none' ?>">
                                        <?= isset($error) ? $error : '' ?>
                                    </div>
                                    <form class="user" method='POST' id='login-form'>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="id" id="id" placeholder="ID" required>
                                        </div>
                                        <div class="form-group pb-3">
                                            <input type="password" class="form-control form-control-user" name="pass" id="pass" placeholder="Password" required>
                                        </div>

                                        <button type='submit' name="login-submit" class="btn btn-primary btn-user btn-block" id='login-btn'>
                                            Login
                                            <span class="spn text-light" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                    </form>
                                </div>
                                <div class='text-center small bg-dark text-light' style='margin-top: -20px;'>© Bowen University - Directorate of Digital Services</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="buiapp/js/jquery.validate.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $('#login-form').on('submit', function() {
            $('.spn').addClass("spinner-border").addClass("spinner-border-sm");
            $('#login-btn').prop('disabled', true);
        });
    </script>
</body>

</html>