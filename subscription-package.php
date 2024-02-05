<?php include 'header.php' ?>
<script>
    $(document).ready(function () {
        $('.navbar-nav .nav-link').removeClass('active');
        $('.bf_header_icons a').removeClass('active');
        $('.navbar-nav .nav-link[href*=become-seller]').addClass('active');
    })
</script>
<main>
    <section class="section_not_home image_hover_fun custom-container-lg">
        <h3 class="heading mb-lg-5 mb-4 text-center">Subscription package</h3>
        <div class="row custom-row-gap">
            <div class="col-lg-4 col-md-6">
                <div class="subscription_package_inner active">
                    <img src="images/subscription-packge-badge.png" alt="">
                    <h4>Bronze</h4>
                    <p class="main_para">Lorem ipsum dolor sit amet, consectetur adipiscing
                        dolor sit amet, consectetur adipiscing elit</p>
                    <h3 class="my-3">20000 PKR</h3>
                    <button class="main_btn">Select Package</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="subscription_package_inner">
                    <img src="images/subscription-packge-badge.png" alt="">
                    <h4>Silver</h4>
                    <p class="main_para">Lorem ipsum dolor sit amet, consectetur adipiscing
                        dolor sit amet, consectetur adipiscing elit</p>
                    <h3 class="my-3">50000 PKR</h3>
                    <button class="main_btn main_btn_outline">Select Package</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="subscription_package_inner">
                    <img src="images/subscription-packge-badge.png" alt="">
                    <h4>Gold</h4>
                    <p class="main_para">Lorem ipsum dolor sit amet, consectetur adipiscing
                        dolor sit amet, consectetur adipiscing elit</p>
                    <h3 class="my-3">100000 PKR</h3>
                    <button class="main_btn main_btn_outline">Select Package</button>
                </div>
            </div>
        </div>
        <div class="mt-lg-5 mt-3 text-center">
            <a href="seller-payment-method.php" class="main_btn register_your_shop">Register your shop</a>
        </div>
    </section
</main>
<script>
    $(document).ready(function () {
        $('.subscription_package_inner .main_btn').click(function (e) {
            e.preventDefault();
            $('.subscription_package_inner .main_btn').addClass('main_btn_outline');
            $(this).removeClass('main_btn_outline');
            $('.subscription_package_inner').removeClass('active');
            $(this).parents('.subscription_package_inner').addClass('active');
        });
    })
</script>
<?php include 'footer.php' ?>


