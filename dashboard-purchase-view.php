<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/dashboard.css">
<main>
    <section class="dashboard_main custom-container section_not_home pt-lg-5">
        <?php include 'dashboard-nav.php' ?>
        <div class="row custom-row-gap py-lg-5 py-4">
            <div class="col-lg-8">
                <div class="dashboardContent h-auto left">
                    <h5 class="dashboardContentHeading">Order History</h5>
                    <div class="dashboardContentBody custom_table">
                        <p class="main_para">Order code:</p>
                        <p class="main_para">20212541=151815</p>
                        <p class="main_para">Order date:</p>
                        <p class="main_para">33-22-33 12:30 pm</p>
                        <p class="main_para">Customer:</p>
                        <p class="main_para">Mr. Mount</p>
                        <p class="main_para">Order status:</p>
                        <p class="main_para">Pending</p>
                        <p class="main_para">Email:</p>
                        <p class="main_para">customer@example.com</p>
                        <p class="main_para">Total order amount:</p>
                        <p class="main_para">Rs 600.00</p>
                        <p class="main_para">Shipping adress</p>
                        <p class="main_para">adadadadadajb,dajdua 4155244, lahore</p>
                        <p class="main_para">Shipping method:</p>
                        <p class="main_para">Flat Shipping rate</p>
                        <p class="main_para">Payment method:</p>
                        <p class="main_para">COD</p>
                    </div>
                </div>
                <div class="row custom-row-gap mt-lg-4 pt-lg- mt-4 mb-lg-0 mb-2">
                    <div class="col-lg-8">
                        <div class="dashboardContent h-auto py-lg-4 left">
                            <h5 class="dashboardContentHeading">Order Detail</h5>
                            <div class="table-responsive dashboard_table order_details">
                                <table class="table table-borderless mb-0">
                                    <thead>
                                    <tr>
                                        <th class="pr-3">#</th>
                                        <th>Products</th>
                                        <th>Variation</th>
                                        <th>Quantity</th>
                                        <th>Delivery Type</th>
                                        <th>Price</th>
                                        <th>Review</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="pr-3" data-label="#">1</td>
                                        <td class="color_green" data-label="Products">xyz</td>
                                        <td data-label="Variation">22-05-2022</td>
                                        <td data-label="Quantity">2</td>
                                        <td data-label="Delivery Type">Home Delivery</td>
                                        <td data-label="Price">Re500.00</td>
                                        <td data-label="Review">Pending</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pl-lg-0 mt-lg-0 mt-2">
                        <div class="dashboardContent h-auto py-lg-4 right">
                            <h5 class="dashboardContentHeading">Order Amount</h5>
                            <div class="dashboardContentBody">
                                <p class="main_para mb-3 d-flex align-items-center justify-content-between">
                                    <span>Subtotal</span>
                                    <span>Rs600.00</span>
                                </p>
                                <p class="main_para mb-3 d-flex align-items-center justify-content-between">
                                    <span>Shipping</span>
                                    <span>Rs600.00</span>
                                </p>
                                <p class="main_para mb-3 d-flex align-items-center justify-content-between">
                                    <span>Tax</span>
                                    <span>Rs600.00</span>
                                </p>
                                <p class="main_para mb-3 d-flex align-items-center justify-content-between">
                                    <span>Coupon</span>
                                    <span>Rs600.00</span>
                                </p>
                                <p class="main_para mb-3 d-flex align-items-center justify-content-between">
                                    <span>Total</span>
                                    <span>Rs600.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="dashboardWrapperProfile">
                    <img src="images/dashboardWrapperProfile.png" alt="">
                    <div class="dashboardWrapperProfileText">
                        <h5>Logan Paul</h5>
                        <h5>customer@example.com</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    $(document).ready(function () {
        $('.dashboard_navigationLink[href*="dashboard-purchase"]').addClass('active');
    })
</script>
<?php include 'footer.php' ?>
