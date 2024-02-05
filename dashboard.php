<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/dashboard.css">
<main>
    <section class="dashboard_main custom-container section_not_home pt-lg-5">
        <?php include 'dashboard-nav.php' ?>
        <div class="row custom-row-gap py-lg-5 py-4">
            <div class="col-lg-8">
                <div class="dashboard_wrapper">
                    <div class="dashboard_wrapperItem">
                        <div class="dashboard_ItemImg">
                            <img src="images/dbip-1.png" alt="">
                        </div>
                        <div class="dashboard_ItemText">
                            <h5>0 Products</h5>
                            <p class="main_para">in your cart</p>
                        </div>
                    </div>
                    <div class="dashboard_wrapperItem">
                        <div class="dashboard_ItemImg">
                            <img src="images/dbip2.png" alt="">
                        </div>
                        <div class="dashboard_ItemText">
                            <h5>0 Products</h5>
                            <p class="main_para">in your wishlist</p>
                        </div>
                    </div>
                    <div class="dashboard_wrapperItem">
                        <div class="dashboard_ItemImg">
                            <img src="images/dbip3.png" alt="">
                        </div>
                        <div class="dashboard_ItemText">
                            <h5>7 Products</h5>
                            <p class="main_para">you ordered</p>
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
        <div class="row custom-row-gap">
            <div class="col-lg-8">
                <div class="dashboardContent left">
                    <h5 class="dashboardContentHeading">Default Shipping Adress</h5>
                    <div class="dashboardContentBody">
                        <p class="main_para mb-3">Adress : 3947 West Side Avenue Hackensack, NJ 07601</p>
                        <p class="main_para mb-3">Country : United States</p>
                        <p class="main_para mb-3">State : Florida</p>
                        <p class="main_para mb-3">Country : Miami</p>
                        <p class="main_para mb-3">Postal Code : 20990</p>
                        <p class="main_para mb-3">Phone No : 124-521-33451</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="dashboardContent text-center">
                    <h5 class="dashboardContentHeading">Purchased Package</h5>
                    <div class="dashboardContentBody right">
                        <img src="images/ppdbi.png" alt="">
                        <p class="main_para">Product Upload : 400 times</p>
                        <p class="main_para">Product Upload Remaining : 477 times</p>
                        <h5>Current Package : Premium</h5>
                        <a href="#" class="main_btn">Update Package</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    $(document).ready(function () {
        $('.dashboard_navigationLink[href*="dashboard.php"]').addClass('active');
    })
</script>
<?php include 'footer.php' ?>

