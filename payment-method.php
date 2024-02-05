<?php include 'header.php' ?>
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/global.css">
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
                <a href="payment-method.php" class="place_order_navigation_Link active">
                    <span class="place_order_navigation_badge">
                        <span>3</span>
                        <i class="fa-solid fa-check"></i>
                    </span>
                    Payment method
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="cart-confrimation.php" class="place_order_navigation_Link">
                    <span class="place_order_navigation_badge">
                        <span>4</span>
                        <i class="fa-solid fa-check"></i>
                    </span>
                    Confirmation
                </a>
            </div>
            <div class="container pt-lg-5 pt-4">
                <div class="row">
                    <div class="col-12 col-lg-11 mx-auto px-0">
                        <form class="row">
                            <div class="col-lg-8">
                                <div class="payment_method_main">
                                    <h5 class="font-weight-normal">Payment Method</h5>
                                    <div class="payment_method_details mt-4">
                                        <div class="form-check w-100">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input main_para" checked
                                                       name="optradio">
                                                Direct Bank Account Transfer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment_method_body">
                                        <p class="main_para mb-2">Account Title: <span>Mr. Danial Khan</span></p>
                                        <p class="main_para mb-2">Account Number: <span>XXXXXXXXXX</span></p>
                                        <p class="main_para mb-2">Bank Name: <span>Al-Habib Bank limited</span></p>
                                    </div>
                                </div>
                                <div class="account_form pt-lg-5 pt-4">
                                    <div class="form-check w-100">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox">
                                            <span class="color_green">I agree to the <a
                                                        href="#"> terms and conditions </a>,
                                            <a href="#"> Return Policy </a> & <a href="#"> Privacy Policy </a>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pt-lg-4 pt-4 placeOrderMain justify-content-start">
                                    <a href="#" class="placeOrderMainLeft"><i class="fa-solid fa-chevron-left"></i>
                                        Return to shipping info</a>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-lg-0 mt-4">
                                <div class="priceSummary">
                                    <h4 class="font-weight-normal">Price Summary</h4>
                                    <div class="priceSummaryItem">
                                        <h5 class="font-weight-normal">Product</h5>
                                        <h5 class="font-weight-normal">Total</h5>
                                    </div>
                                    <div class="priceSummaryItem">
                                        <p class="main_para">Womens Summer Lace <br> Neckline Cold Shoulder</p>
                                        <h5 class="font-weight-normal">PKR 30002</h5>
                                    </div>
                                    <div class="priceSummaryItem">
                                        <h5 class="font-weight-normal">Subtotal</h5>
                                        <h5 class="font-weight-normal">Rs 2222</h5>
                                    </div>
                                    <div class="priceSummaryItem">
                                        <h5 class="font-weight-normal">Tax</h5>
                                        <h5 class="font-weight-normal">Rs 20</h5>
                                    </div>
                                    <div class="priceSummaryItem">
                                        <h5 class="font-weight-normal">Total Shipping</h5>
                                        <h5 class="font-weight-normal">Rs 100</h5>
                                    </div>
                                    <div class="priceSummaryItem border-bottom-0">
                                        <h5 class="font-weight-normal">Total</h5>
                                        <h5 class="font-weight-normal">20002</h5>
                                    </div>
                                    <button class="main_btn">Place Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php' ?>