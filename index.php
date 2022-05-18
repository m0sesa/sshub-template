<?php
// 1. uncomment to show error
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// 2. uncomment to handle for session
// session_start(); 

// 3. uncommented for important session variables
// $matric = $_SESSION['matric'];
// $staff = $_SESSION['staff'];
// $id = $_SESSION['id'];

// 4. require important files
//require_once 'func/main.php';

// Page meta data
$page = (object)[
    'title'       =>  'Blank',
    'description' =>  "Student's Blank",
    'author'      =>  'Bowen DDS'
];


$student = (object)[
    'matric'                      =>  "matric",
    'id'                          =>  "id",
    'fname'                       =>  "DDS",
    'lname'                       =>  "DDS",
    'sex'                         =>  'male',
    'email'                       =>  'dds@bowen.edu.ng'
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
    <link rel="icon" href="img/bowen-bw.png">

    <title> <?= $page->title ?> </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
            require './includes/sidebar.inc.php';
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
                    require './includes/topbar.inc.php'
                ?>
                
                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> <?= $page->title ?> </h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <?php
                        

                        ?>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php 
                require './includes/footer.inc.php'
            ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>

</html>