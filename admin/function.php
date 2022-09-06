<?php 
include('includes/connection.php'); 

if (isset($_REQUEST['add_category'])) {
   $category_id = $_REQUEST['category_id'];
   $category_name = $_REQUEST['category_name'];
   $category_image = $_FILES['category_image']['name'];
   $path = $_FILES['category_image']['tmp_name'];
   $folder = 'assets/category_image/' . $category_image;
   if (move_uploaded_file($path, $folder)) {
      $insert = "INSERT INTO category (`category_name`, `category_image`, `status`) VALUES ('$category_name', '$category_image', '1')";
      $query = mysqli_query($conn, $insert);
      if ($query) {
         header('location:category.php');
      } else {
         echo "Not OK";
      }
   } else {
      echo "No Move Image";
   }
}

if (isset($_REQUEST['edit_category'])) {
   echo $category_id = $_REQUEST['category_id'];
}

if (isset($_REQUEST['delete_category'])) {
   $id = $_REQUEST['category_id'];
   $delete = "DELETE FROM `category` WHERE `id`='$id'";
   $query = mysqli_query($conn, $delete);
   if ($query) {
      header("location:category.php");
   } else {
      echo 'Not Deleted';
   }

   
}

?>