<?php include('includes/header.php'); ?>


<div class="content-page">
    
    <div class="content">
        
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
                                <li class="breadcrumb-item active">Add New Category</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add New Category</h4>
                    </div>
                </div>
            </div>     

            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                
                                    <form action="#" class="parsley-examples" data-parsley-validate novalidate>
                                        <div class="form-group">
                                            <label for="category_name"> Category Name<span class="text-danger">*</span></label>

                                            <input type="text" name="category_name" parsley-trigger="change" required placeholder="Enter Category Name" class="form-control" id="category_name">
                                        </div>

                                        <div class="form-group text-right mb-0">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                Add Category
                                            </button>
                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include('includes/footer.php'); ?>