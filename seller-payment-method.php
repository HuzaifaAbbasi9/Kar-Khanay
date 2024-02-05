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
                <a href="seller-payment-method.php" class="place_order_navigation_Link active">
                    <span class="place_order_navigation_badge">
                        <span>3</span>
                        <i class="fa-solid fa-check"></i>
                    </span>
                    Payment method
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="seller-cart-confrimation.php" class="place_order_navigation_Link">
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
                                <div class="payment_method_main pb-0">
                                    <h5 class="font-weight-normal">Payment Method</h5>
                                    <div class="payment_method_details mt-4">
                                        <div class="form-check w-100">
                                            <label class="form-check-label w-100">
                                                <input type="radio" class="form-check-input main_para" checked
                                                       name="optradio">
                                                Credit & Debit Card
                                                <img src="images/card-img.png" class="ml-2 card_img" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment_method_body seller_payment_method_form">
                                        <div class="form-group">
                                            <label>Card Number</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Expiration Date</label>
                                            <input class="form-control" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Second name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="payment_method_details payment_seller_method_details">
                                        <div class="form-check w-100">
                                            <label class="form-check-label d-flex align-items-center">
                                                <input type="radio" class="form-check-input main_para" name="optradio">
                                                Easypaisa
                                                <img src="images/seller-payment-method-img-1.png" class="ml-3 seller-payment-method-img" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment_method_details payment_seller_method_details mt-1">
                                        <div class="form-check w-100">
                                            <label class="form-check-label d-flex align-items-center">
                                                <input type="radio" class="form-check-input main_para" name="optradio">
                                                JazzCash
                                                <img src="images/seller-payment-method-img-2.png" class="ml-3 seller-payment-method-img" alt="">
                                            </label>
                                        </div>
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
                                    <div class="priceSummaryItem pb-lg-5 pb-4">
                                        <p class="main_para">Silver Package</p>
                                        <h5 class="font-weight-normal">PKR 50000</h5>
                                    </div>
                                    <div class="priceSummaryItem border-bottom-0">
                                        <h5 class="font-weight-normal">Total</h5>
                                        <h5 class="font-weight-normal">20002</h5>
                                    </div>
                                    <a href="seller-cart-confrimation.php" class="main_btn">Subscription</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php' ?>