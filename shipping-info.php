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
                <a href="shipping-info.php" class="place_order_navigation_Link active">
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
                <a href="cart-confrimation.php" class="place_order_navigation_Link">
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
                        <form class="row">
                            <div class="col-lg-6">
                                <label for="exampleRadios1" class="shipping_info_wrapper">
                                    <div class="shipping_info_wrapper_header">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label">Shipping Adress</label>
                                        </div>
                                    </div>
                                    <div class="shipping_info_wrapper_body">
                                        <p class="main_para mb-1">Adress: <span>adadadadadajb,dajdua 4155244, lahore</span></p>
                                        <p class="main_para mb-1">Postal Code: <span>2021</span></p>
                                        <p class="main_para mb-1">City: <span>pindi</span></p>
                                        <p class="main_para mb-1">State: <span>punjab</span></p>
                                        <p class="main_para mb-1">Country: <span>pakistan</span></p>
                                        <p class="main_para">Phone: <span>1818111777</span></p>
                                    </div>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="exampleRadios2" class="shipping_info_wrapper">
                                    <div class="shipping_info_wrapper_header">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios2" value="option1">
                                            <label class="form-check-label">Shipping Adress</label>
                                        </div>
                                    </div>
                                    <div class="shipping_info_wrapper_body">
                                        <p class="main_para mb-1">Adress: <span>adadadadadajb,dajdua 4155244, lahore</span></p>
                                        <p class="main_para mb-1">Postal Code: <span>2021</span></p>
                                        <p class="main_para mb-1">City: <span>pindi</span></p>
                                        <p class="main_para mb-1">State: <span>punjab</span></p>
                                        <p class="main_para mb-1">Country: <span>pakistan</span></p>
                                        <p class="main_para">Phone: <span>1818111777</span></p>
                                    </div>
                                </label>
                            </div>
                        </form>
                        <div class="pt-lg-4 pt-4 placeOrderMain justify-content-start">
                            <a href="#" class="placeOrderMainLeft"><i class="fa-solid fa-chevron-left"></i> Return to my cart</a>
                            <button class="main_btn addNewAddressBtn ml-auto mr-2 main_btn_outline">+ Add new adress</button>
                            <a href="#" class="main_btn">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function () {
        })
    </script>
<?php include 'footer.php' ?>