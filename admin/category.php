<?php 
include('includes/header.php'); 

$select = "SELECT * FROM category ORDER BY id desc";
$query = mysqli_query($conn, $select);

?>

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Categories</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Categories</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="responsive-table-plugin">
                            <div class="table-rep-plugin">

                                <div class="col-md-12 text-right">
                                    <button type="button" class="btn btn-success text-right" data-toggle="modal" data-target="#exampleModalLong">Add Category</button>
                                </div>
                
<table id="category-table" class="table table-striped">
    <thead>
    <tr>
        <th>
            No.
        </th>
        <th data-priority="1">
            Image
        </th>
        <th data-priority="1">
            Category Name
        </th>
        <th data-priority="1">
            Action
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = '0';
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $image = $row['category_image'];
        $name = $row['category_name'];
    ?>
    <tr>
        <td><?php echo $no += 1; ?></td>
        <td><img src="assets/category_image/<?php echo $image; ?>" alt="" width="50" ></td>
        <td><?php echo $name; ?></td>
        <td>
            <button type="button" class="btn btn-warning waves-effect waves-light"><i class="fa fa-eye"></i></button>

            <a href="category.php?id=<?php $id; ?>">
                <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#edit_category"><i class="fa fa-edit"></i></button>
            </a>

            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#delete_category"><i class="fa fa-trash"></i></button>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add category -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add a new category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form method="POST" action="function.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" name="category_name" class="form-control" id="category_name" aria-describedby="category_name" placeholder="Enter category name">   
                        <label for="category_image">Category Image</label>
                        <input type="file" name="category_image" class="form-control" id="category_image" aria-describedby="category_image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    <button type="submit" name="add_category" class="btn btn-success">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit category -->
<div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add a new category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form method="POST" action="function.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <img src="assets/category_image/<?php echo $image; ?>" alt="">
                    <h1><?php echo $name; ?></h1>
                    <h1><?php echo $id; ?></h1>
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" name="category_name" class="form-control" id="category_name" aria-describedby="category_name" placeholder="Enter category name">   
                        <label for="category_image">Category Image</label>
                        <input type="file" name="category_image" class="form-control" id="category_image" aria-describedby="category_image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    <button type="submit" name="edit_category" class="btn btn-success">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete category -->
<div class="modal fade" id="delete_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Delete category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form method="POST" action="function.php">
                <input type="hidden" name="category_id" value="<?php echo $id; ?>">
                <div class="modal-body">
                    <h4>Are you sure you want to delete?</h4>
                </div>
                <div class="modal-footer">
                    <button type="bu
                    tton" class="btn btn-success" data-dismiss="modal">No</button>

                    <button type="submit" name="delete_category" class="btn btn-danger">Delete Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>