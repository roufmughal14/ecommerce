<?php
    $title = 'Wishlist';
    include_once('includes/header.php');
    include_once('includes/topbar.php');
    include_once('includes/navbar.php');
?>

<div class="collection-header">
    <div class="collection-hero large">
        <div class="collection-hero__image blur-up lazyload"></div>
        <div class="collection-hero__title-wrapper container">
            <h1 class="collection-hero__title medium"><?php echo $title; ?></h1>
            <div class="breadcrumbs text-uppercase mt-2"><a href="index.php">Home</a><span>|</span><span class="fw-bold"><?php echo $title; ?><span></div>
        </div>
    </div>
</div>
<?php
if (empty($_SESSION['user_id'])) {
    include_once ('onpage-login.php');
} else {
?>
<div class="container">
    <form action="#" method="post">
        <div class="wishlist-table table-content text-nowrap table-responsive py-2">
            <table class="table table-bordered align-middle">
                <thead class="bg-light thead-bg">
                    <tr>
                        <th class="product-name text-center alt-font">Remove</th>
                        <th class="product-price text-center alt-font">Images</th>
                        <th class="product-name alt-font">Product</th>
                        <th class="product-price text-center alt-font">Unit Price</th>
                        <th class="stock-status text-center alt-font">Stock Status</th>
                        <th class="product-subtotal text-center alt-font">Add to Cart</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="product-remove text-center"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon an an-times-l"></i></a></td>
                        <td class="product-thumbnail text-center">
                            <a href="product-layout1.html"><img src="assets/images/products/product-1.jpg" width="100" alt="" title=""></a>
                        </td>
                        <td class="product-name"><h6 class="mb-0"><a href="product-layout1.html">Minerva Dress black</a></h6></td>
                        <td class="product-price text-center"><span class="amount fw-500">$165.00</span></td>
                        <td class="stock text-center"><span class="text-in-stock">in stock</span></td>
                        <td class="product-subtotal text-center"><a href="cart-style1.html" class="btn btn-small rounded-1 text-nowrap">Add To Cart</a></td>
                    </tr>
                    <tr>
                        <td class="product-remove text-center"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon an an-times-l"></i></a></td>
                        <td class="product-thumbnail text-center">
                            <a href="product-layout1.html"><img src="assets/images/products/product-2.jpg" width="100" alt="" title=""></a>
                        </td>
                        <td class="product-name"><h6 class="mb-0"><a href="product-layout1.html">Sueded Cotton Pant in Khaki</a></h6></td>
                        <td class="product-price text-center"><span class="amount fw-500">$150.00</span></td>
                        <td class="stock text-center"><span class="text-out-stock">Out Of stock</span></td>
                        <td class="product-subtotal text-center"><a href="cart-style1.html" class="btn btn-small rounded-1 text-nowrap soldOutBtn disabled">Out Of stock</a></td>
                    </tr>
                    <tr>
                        <td class="product-remove text-center"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon an an-times-l"></i></a></td>
                        <td class="product-thumbnail text-center">
                            <a href="product-layout1.html"><img src="assets/images/products/product-3.jpg" width="100" alt="" title=""></a>
                        </td>
                        <td class="product-name"><h6 class="mb-0"><a href="product-layout1.html">Woven Solid Midi Shirt Dress</a></h6></td>
                        <td class="product-price text-center"><span class="amount fw-500">$150.00</span></td>
                        <td class="stock text-center"><span class="text-in-stock">in stock</span></td>
                        <td class="product-subtotal text-center"><a href="cart-style1.html" class="btn btn-small rounded-1 text-nowrap">Add To Cart</a></td>
                    </tr>
                    <tr>
                        <td class="product-remove text-center"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon an an-times-l"></i></a></td>
                        <td class="product-thumbnail text-center">
                            <a href="product-layout1.html"><img src="assets/images/products/product-4.jpg" width="100" alt="" title=""></a>
                        </td>
                        <td class="product-name"><h6 class="mb-0"><a href="product-layout1.html">Woven Solid Midi Shirt Dress</a></h6></td>
                        <td class="product-price text-center"><span class="amount fw-500">$99.00</span></td>
                        <td class="stock text-center"><span class="text-in-stock">in stock</span></td>
                        <td class="product-subtotal text-center"><a href="cart-style1.html" class="btn btn-small rounded-1 text-nowrap">Add To Cart</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form> 
</div>

<?php
}
    include_once('includes/footer.php');
?>