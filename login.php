<?php
    $title = 'Login';
    include_once('includes/header.php');
    include_once('includes/topbar.php');
    include_once('includes/navbar.php');
?>

<div class="collection-header">
    <div class="collection-hero large">
        <div class="collection-hero__image blur-up lazyload"></div>
        <div class="collection-hero__title-wrapper container">
            <h1 class="collection-hero__title medium"><?php echo $title; ?></h1>
            <div class="breadcrumbs text-uppercase mt-2"><a href="index.php">Home</a><span>|</span><span class="fw-bold"><?php echo $title; ?></span></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="login-register pt-2 pt-lg-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                <div class="inner">
                    <form method="POST" action="functions.php" class="customer-form">	
                        <h3 class="h4 text-uppercase">Registered customer</h3>
                        <p>If you have an account with us, please log in.</p>
                        <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="username" class="d-none">Username <span class="required">*</span></label>
                                    <input type="text" name="username" placeholder="Enter your username" id="username" value="" required />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="password" class="d-none">Password <span class="required">*</span></label>
                                    <input type="password" name="password" placeholder="Enter your password" id="password" value="" required />                        	
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-left col-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="d-flex-center">
                                    <input type="submit" name="login" class="btn rounded me-auto" value="Log In">
                                    <a href="forgot-password.php">Forgot your password?</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="inner">
                    <h3 class="h4 text-uppercase">New customer?</h3>
                    <p>Registering for this site allows you to access your order status and history. We’ll get a new account set up for you in no time. For this will only ask you for information necessary to make the purchase process faster and easier</p>
                    <a href="register.php" class="btn rounded">Create an account</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php
    include_once('includes/footer.php');
?>