<?php
include ('includes/connection.php');

$error = '';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $_SESSION['ADMIN_LOGIN'] = 'yes';
        $_SESSION['ADMIN_USERNAME'] = $username;
        header ('location:index.php');
        die();
    } else {
        $error = 'Incorrect Login Details';
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Admin Login</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico">

    <!-- App css -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

    <div class="account-pages pt-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="account-card-box">
                        <div class="card mb-0">
                            <div class="card-body p-4">
                                
                                <div class="text-center">
                                    <div class="my-3">
                                        <span><img src="assets/images/logo.png" alt="" height="28"></span>
                                    </div>
                                    <h5 class="text-muted text-uppercase py-3 font-16">Admin Sign In</h5>
                                </div>

                                <form action="" method="POST" class="mt-2">

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="text" name="username" required="" placeholder="Enter your username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="password" required=""
                                        name="password" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit" name="submit"> Log In </button>
                                    </div>

                                    <div>
                                        <h1>
                                            <?php echo $error; ?>
                                        </h1>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>
    
</body>
</html>
