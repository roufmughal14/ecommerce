<?php
    $title = 'Contact';
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
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
    include_once('includes/footer.php');
?>