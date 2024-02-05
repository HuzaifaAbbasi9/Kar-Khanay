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
                <a href="cart.php" class="place_order_navigation_Link active">
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
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Tax</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="place_order_table_Product">
                                            <img src="images/placed_product_img_1.png" class="placeOrderProductImg"
                                                 alt="">
                                            <div class="place_order_table_ProductText">
                                                <h5>Womens Summer Lace Neckline Cold Shoulder Short Sleeve</h5>
                                                <div class="place_order_table_ProductReviews">
                                                    <img src="images/stars-svgrepo-com.png" alt="">
                                                    <span class="main_para product_numbering">(20)</span>
                                                    <span class="main_para">503 products sold</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><h5>Rs400</h5></td>
                                    <td><h5>Rs50</h5></td>
                                    <td>
                                        <div class="placeOrderQuantity">
                                            <button class="placeOrderQuantityMinus"><i class="fa-solid fa-minus"></i>
                                            </button>
                                            <input type="number" min="0" class="placeOrderQuantityInput" value="1"/>
                                            <button class="placeOrderQuantityPlus"><i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td><h5 class="placeOrderPrice">Rs5505</h5></td>
                                    <td class="text-center">
                                        <button class="placeOrderButton placeOrderButtonTrash">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="place_order_table_Product">
                                            <img src="images/placed_product_img_1.png" class="placeOrderProductImg"
                                                 alt="">
                                            <div class="place_order_table_ProductText">
                                                <h5>Womens Summer Lace Neckline Cold Shoulder Short Sleeve</h5>
                                                <div class="place_order_table_ProductReviews">
                                                    <img src="images/stars-svgrepo-com.png" alt="">
                                                    <span class="main_para product_numbering">(20)</span>
                                                    <span class="main_para">503 products sold</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><h5>Rs400</h5></td>
                                    <td><h5>Rs50</h5></td>
                                    <td>
                                        <div class="placeOrderQuantity">
                                            <button class="placeOrderQuantityMinus"><i class="fa-solid fa-minus"></i>
                                            </button>
                                            <input type="number" min="0" class="placeOrderQuantityInput" value="1"/>
                                            <button class="placeOrderQuantityPlus"><i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td><h5 class="placeOrderPrice">Rs5505</h5></td>
                                    <td class="text-center">
                                        <button class="placeOrderButton placeOrderButtonTrash">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pt-lg-4 pt-4 placeOrderMain">
                            <a href="#" class="placeOrderMainLeft"><i class="fa-solid fa-chevron-left"></i> Return to
                                shop</a>
                            <a href="shipping-info.php" class="main_btn">Continue to Shipping</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function () {
            $('.placeOrderQuantityMinus').click(function (e) {
                e.preventDefault();
                let QuantityInput = $(this).next('.placeOrderQuantityInput');
                if (QuantityInput.val() > 1) {
                    QuantityInput.val((QuantityInput.val()) - 1);
                }

            });
            $('.placeOrderQuantityPlus').click(function (e) {
                e.preventDefault();
                let QuantityInput = $(this).prev('.placeOrderQuantityInput');
                QuantityInput.val(parseInt(QuantityInput.val()) + 1);
            });
            $('.placeOrderButtonTrash').click(function (e) {
                e.preventDefault();
                $(this).parents('tr').remove();
            });
        })
    </script>
<?php include 'footer.php' ?>