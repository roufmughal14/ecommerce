<?php
    $title = 'Compare';
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
    <div class="compare-page py-3 compare-page2">
        <div class="table-wrapper table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead>
                    <tr class="th-compare">
                        <td class="item-row position-relative">
                            <button type="button" class="btn remove-icon remove-compare border-0 p-0"><i class="icon an an-times-l" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></button>
                            <div class="item-row">
                                <img class="blur-up lazyload featured-image" data-src="assets/images/products/product-8.jpg" src="assets/images/products/product-8.jpg" alt="" />
                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                            </div>
                            <div class="grid-link__title fw-500 mt-2 py-1"><a href="product-layout1.html">Martha Knit Top</a></div>
                        </td>
                        <td class="item-row position-relative">
                            <button type="button" class="btn remove-icon remove-compare border-0 p-0"><i class="icon an an-times-l" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></button>
                            <div class="item-row">
                                <img class="blur-up lazyload featured-image" data-src="assets/images/products/product-9-2.jpg" src="assets/images/products/product-9-2.jpg" alt="" />
                                <div class="product-labels"><span class="lbl pr-label2">50% Off</span></div>
                            </div>
                            <div class="grid-link__title fw-500 mt-2 py-1"><a href="product-layout1.html">Long Sleeve T-shirts</a></div>
                        </td>
                        <td class="item-row position-relative">
                            <button type="button" class="btn remove-icon remove-compare border-0 p-0"><i class="icon an an-times-l" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></button>
                            <div class="item-row">
                                <img class="blur-up lazyload featured-image" data-src="assets/images/products/product-7.jpg" src="assets/images/products/product-7.jpg" alt="" />
                                <div class="product-labels"><span class="lbl on-sale">Out of stock</span></div>
                            </div>
                            <div class="grid-link__title fw-500 mt-2 py-1"><a href="product-layout1.html">Button Up Top Black</a></div>
                        </td>
                        <td class="item-row position-relative">
                            <button type="button" class="btn remove-icon remove-compare border-0 p-0"><i class="icon an an-times-l" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></button>
                            <div class="item-row">
                                <img class="blur-up lazyload featured-image" data-src="assets/images/products/product-6.jpg" src="assets/images/products/product-6.jpg" alt="" />
                                <div class="product-labels"><span class="lbl pr-label3">Low in stock</span></div>
                            </div>
                            <div class="grid-link__title fw-500 mt-2 py-1"><a href="product-layout1.html">Sunset Sleep Scarf Top</a></div>
                        </td>
                        <td class="item-row position-relative">
                            <button type="button" class="btn remove-icon remove-compare border-0 p-0"><i class="icon an an-times-l" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></button>
                            <div class="item-row">
                                <img class="blur-up lazyload featured-image" data-src="assets/images/products/product-15-1.jpg" src="assets/images/products/product-15-1.jpg" alt="" />
                                <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                            </div>
                            <div class="grid-link__title fw-500 mt-2 py-1"><a href="product-layout1.html">Weave Hoodie Sweatshirt</a></div>
                        </td>
                    </tr>
                </thead>
                <tbody id="table-compare">
                    <tr>
                        <td class="item-row">
                            <div class="product-price product_price mb-0 fw-500"><span class="old-price">$199.00</span><span class="price">$219.00</span></div>
                            <p class="grid-link__title hidden">Martha Knit Top</p>
                        </td>
                        <td class="item-row">
                            <div class="product-price product_price mb-0 fw-500"><span class="old-price">$200.00</span><span class="price">$100.00</span></div>
                            <p class="grid-link__title hidden">Long Sleeve T-shirts</p>
                        </td>
                        <td class="item-row">
                            <div class="product-price product_price mb-0 fw-500"><span>$99.00</span></div>
                            <p class="grid-link__title hidden">Button Up Top Black</p>
                        </td>
                        <td class="item-row">
                            <div class="product-price product_price mb-0 fw-500"><span>$82.00</span></div>
                            <p class="grid-link__title hidden">Sunset Sleep Scarf Top</p>
                        </td>
                        <td class="item-row">
                            <div class="product-price product_price mb-0 fw-500"><span>$199.00</span></div>
                            <p class="grid-link__title hidden">Weave Hoodie Sweatshirt</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Product Description</th>
                        <th>Product Description</th>
                        <th>Product Description</th>
                        <th>Product Description</th>
                        <th>Product Description</th>
                    </tr>
                    <tr>
                        <td class="item-row">
                            <p class="description-compare">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </td>
                        <td class="item-row">
                            <p class="description-compare">It is a long established fact distracted by the readable content of a page layout.</p>
                        </td>
                        <td class="item-row">
                            <p class="description-compare">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </td>
                        <td class="item-row">
                            <p class="description-compare">The standard chunk of Lorem Ipsum used since the 1500s for those interested.</p>
                        </td>
                        <td class="item-row">
                            <p class="description-compare">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Availability</th>
                        <th>Availability</th>
                        <th>Availability</th>
                        <th>Availability</th>
                        <th>Availability</th>
                    </tr>
                    <tr>
                        <td class="text-in-stock fw-500">
                            <p>In stock</p>
                        </td>
                        <td class="text-in-stock fw-500">
                            <p>In stock</p>
                        </td>
                        <td class="text-out-stock fw-500">
                            <p>Out Of stock</p>
                        </td>
                        <td class="text-in-stock fw-500">
                            <p>In stock</p>
                        </td>
                        <td class="text-in-stock fw-500">
                            <p>In stock</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-center">
                            <form method="post" action="#" class="variants clearfix">
                                <a href="cart-style1.html" class="add-to-cart btn rounded">Add to Cart</a>
                            </form>
                        </td>
                        <td class="align-center">
                            <form method="post" action="#" class="variants clearfix">
                                <a href="cart-style1.html" class="add-to-cart btn rounded">Add to Cart</a>
                            </form>
                        </td>
                        <td class="align-center">
                            <form method="post" action="#" class="variants clearfix">
                                <button type="button" class="add-to-cart btn rounded soldOutBtn">Out Of stock</button>
                            </form>
                        </td>
                        <td class="align-center">
                            <form method="post" action="#" class="variants clearfix">
                                <a href="cart-style1.html" class="add-to-cart btn rounded">Add to Cart</a>
                            </form>
                        </td>
                        <td class="align-center">
                            <form method="post" action="#" class="variants clearfix">
                                <a href="cart-style1.html" class="add-to-cart btn rounded">Add to Cart</a>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>                    
</div>

<?php
}
    include_once('includes/footer.php');
?>