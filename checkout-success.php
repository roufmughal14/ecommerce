<?php
    $title = 'Checkout Success';
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
    <div class="checkout-success-content py-2">
        <!--Order Card-->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="checkout-scard card border-0 rounded">
                    <div class="card-body text-center">
                        <p class="card-icon"><i class="icon an an-shield-check fs-1"></i></p>
                        <h4 class="card-title">Thank you for your order!</h4>
                        <p class="card-text mb-1">You will receive an order confirmation email with details of your order and a link to track its progress.</p>
                        <p class="card-text mb-1">All necessary information about the delivery, we sent to your email</p>
                        <p class="card-text text-order badge bg-success my-3">Your order # is: <b>00000123</b></p>
                        <p class="card-text mb-0">Order date: 14 Nov 2021</p>
                    </div>
                </div>
            </div>
        </div>
        <!--End Order Card-->
        <!--Order Summary-->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="checkout-item-ordered">
                    <h2 class="fs-6 mb-3">Order Summary</h2>
                    <div class="table-content table-responsive order-table mb-4">
                        <table class="table table-bordered align-middle table-hover text-center mb-0">
                            <thead>
                                <tr>
                                    <th class="fw-bold">Image</th>
                                    <th class="text-start fw-600">Product Name</th>
                                    <th class="fw-600">Price</th>
                                    <th class="fw-600">Qty</th>
                                    <th class="fw-600">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pro-img"><a href="product-layout1.html"><img class="primary blur-up lazyload" src="assets/images/products/product-6-1.jpg" alt="image" title="product" width="80" /></a></td>
                                    <td class="pro-name text-start">
                                        <a href="product-layout1.html" class="d-block">Sunset Sleep Scarf Top</a>
                                        <div class="cart__meta-text">
                                            Color: Black<br>Size: Small<br>
                                        </div>
                                    </td>
                                    <td class="pro-price">$99.00</td>
                                    <td class="pro-qty">1</td>
                                    <td class="pro-total fw-500">$99.00</td>
                                </tr>
                                <tr>
                                    <td class="pro-img"><a href="product-layout1.html"><img class="primary blur-up lazyload" src="assets/images/products/product-9-1.jpg" alt="image" title="product" width="80" /></a></td>
                                    <td class="pro-name text-start">
                                        <a href="product-layout1.html" class="d-block">Long Sleeve T-shirts</a>
                                        <div class="cart__meta-text">
                                            Color: Gray<br>Size: 28<br>
                                        </div>
                                    </td>
                                    <td class="pro-price">$128.00</td>
                                    <td class="pro-qty">2</td>
                                    <td class="pro-total fw-500">$256.00</td>
                                </tr>
                                <tr>
                                    <td class="pro-img"><a href="product-layout1.html"><img class="primary blur-up lazyload" src="assets/images/products/product-15.jpg" alt="image" title="product" width="80" /></a></td>
                                    <td class="pro-name text-start">
                                        <a href="product-layout1.html" class="d-block">Weave Hoodie Sweatshirt</a>
                                        <div class="cart__meta-text">
                                            Color: Navy<br>Size: Large<br>
                                        </div>
                                    </td>
                                    <td class="pro-price">$150.00</td>
                                    <td class="pro-qty">3</td>
                                    <td class="pro-total fw-500">$450.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="item subtotal text-end fw-bolder">Subtotal:</td>
                                    <td class="fw-500 last">$59.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="item tax text-end fw-bolder">Tax:</td>
                                    <td class="fw-500 last">$4.87</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="item discount text-end fw-bolder">Discount:</td>
                                    <td class="fw-500 last">$0.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="item shipping text-end fw-bolder">Shipping:</td>
                                    <td class="fw-500 last">$5.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="item total text-end fw-bolder">Grand Total:</td>
                                    <td class="fw-500 last">$68.87</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="ship-info-details shipping-method-details">
                    <div class="row g-0">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="shipping-details mb-4 mb-sm-0 clearfix">
                                <h3>Shipping Address</h3>
                                <p>No 40 Gallaxy Enque Street 133/2,</p>
                                <p>New York,</p>
                                <p>USA</p>
                                <p>00004-1988</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="billing-details clearfix">
                                <h3>Billing Address</h3>
                                <p>No 40 Gallaxy Enque Street 133/2,</p>
                                <p>New York,</p>
                                <p>USA</p>
                                <p>00004-1988</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ship-info-details billing-payment-details">
                    <div class="row g-0">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="shipping-details mb-4 mb-sm-0 clearfix">
                                <h3>Shipping Method</h3>
                                <p>Flat Rate - Fixeds</p>
                                <p>Delivery Date: N/A</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="billing-details clearfix">
                                <h3>Payment Method</h3>
                                <p>Check / Money order</p>
                                <p>Cash on delivery</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex-wrap w-100 mt-4 text-center">
                    <a href="index.html" class="d-inline-flex align-items-center btn btn-outline-primary rounded me-2 mb-2 me-sm-3"><i class="me-2 icon an an-angle-left-r"></i>Continue Shopping</a>
                    <button type="button" class="d-inline-flex align-items-center btn rounded me-2 mb-2 me-sm-3"><i class="me-2 icon an an-print"></i>Print Order</button>
                    <button type="button" class="d-inline-flex align-items-center btn rounded me-2 mb-2 me-sm-3"><i class="me-2 icon an an-sync-ar"></i>Re-Order</button>
                </div>
            </div>
        </div>
        <!--End Order Summary-->
    </div>
</div>

<?php
    include_once('includes/footer.php');
?>