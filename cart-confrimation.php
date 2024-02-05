<?php include 'header.php' ?>
    <link rel="stylesheet" href="assets/css/common.css">
    <script>
        $(document).ready(function () {
            $('.navbar-nav .nav-link').removeClass('active');
            $('.bf_header_icons a').removeClass('active');
        })
    </script>
    <main>
        <section class="section_not_home custom-container">
            <div class="place_order_navigation">
                <a href="cart.php" class="place_order_navigation_Link">
                    <span class="place_order_navigation_badge">
                        <span>1</span>
                        <i class="fa-solid fa-check"></i>
                    </span>
                    My Cart
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="shipping-info.php" class="place_order_navigation_Link">
                    <span class="place_order_navigation_badge">
                        <span>2</span>
                        <i class="fa-solid fa-check"></i>
                    </span>
                    Shipping info
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="payment-method.php" class="place_order_navigation_Link">
                    <span class="place_order_navigation_badge">
                        <span>3</span>
                        <i class="fa-solid fa-check"></i>
                    </span>
                    Payment method
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="cart-confrimation.php" class="place_order_navigation_Link active">
                    <span class="place_order_navigation_badge">
                        <span>4</span>
                        <i class="fa-solid fa-check"></i>
                    </span>
                    Confirmation
                </a>
            </div>
            <div class="container place_order_table pt-lg-5 pt-4">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto px-0">
                        <div class="text-center thank_you_top">
                            <img src="images/thank-you-img.png" class="thank_you_top_icon" alt="">
                            <h3 class="heading my-lg-3 mt-3">Thank You for Your Order!</h3>
                            <p class="main_para">A copy or your order summary has been sent to customer@example.com</p>
                        </div>
                        <div class="payment_method_wrapper my-lg-5 my-4">
                            <h5 class="payment_method_wrapper_header mb-0">Payment Method</h5>
                            <div class="payment_method_wrapperBody">
                                <div class="payment_method_wrapperBodyitem">
                                    <div class="payment_method_item_inner">
                                        <h6>Order date:</h6>
                                        <h6>12-02-2022 3:21 PM</h6>
                                    </div>
                                    <div class="payment_method_item_inner">
                                        <h6>Order status:</h6>
                                        <h6>Pending</h6>
                                    </div>
                                    <div class="payment_method_item_inner">
                                        <h6>Seller:</h6>
                                        <h6>Mr. Danial khan</h6>
                                    </div>
                                    <div class="payment_method_item_inner">
                                        <h6>Total order amount:</h6>
                                        <h6>Rs 50000</h6>
                                    </div>
                                    <div class="payment_method_item_inner">
                                        <h6>Email:</h6>
                                        <h6>customer@example.com</h6>
                                    </div>
                                    <div class="payment_method_item_inner">
                                        <h6>Direct Bank Transfer:</h6>
                                        <h6>Mr Danial Khan,
                                            1924 2122 4444 633,
                                            Al-Habib Bank limited</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment_method_wrapper">
                            <h5 class="payment_method_wrapper_header mb-0 text-center text-green">Order Code:
                                0312039019283917</h5>
                            <div class="payment_method_wrapperBody">
                                <h5>Payment Method</h5>
                                <div class="table-responsive mt-lg-4 mt-4">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Variation</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Delivery Type</th>
                                            <th scope="col" class="text-right">Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Adidas women shoes latest <br> edition</td>
                                            <td>Black</td>
                                            <td>1</td>
                                            <td>Home Delivery</td>
                                            <td class="text-right">Rs 3000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td>Subtotal</td>
                                            <td class="text-right">Rs 3000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td>Shipping</td>
                                            <td class="text-right">Rs 20</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td>Tax</td>
                                            <td class="text-right">Rs 50</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td>Coupon Discount</td>
                                            <td class="text-right">Rs 209</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td>Total</td>
                                            <td class="text-right">Rs 30002</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="pt-lg-5 pt-4 placeOrderMain">
                            <a href="#" class="placeOrderMainLeft"><i class="fa-solid fa-chevron-left"></i> Return to shop</a>
                            <a href="shipping-info.php" class="main_btn downloadOrderDetails">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php' ?>