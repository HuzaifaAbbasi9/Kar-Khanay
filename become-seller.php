<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/global.css">
<script>
    $(document).ready(function () {
        $('.navbar-nav .nav-link').removeClass('active');
        $('.bf_header_icons a').removeClass('active');
        $('.navbar-nav .nav-link[href*=become-seller]').addClass('active');
    })
</script>
<main>
    <section class="section_not_home  custom-container-lg">
        <h4 class="text-center mb-lg-5 mb-4 text-uppercase font-weight-normal">Seller Registeration</h4>
        <div class="bf_account_sec bf_become_seller_wrapper">
            <div class="bf_account_wrapper account_form_wrapper">
                <h4 class="mb-4 text-center text-uppercase font-weight-normal">Personal information</h4>
                <form autocomplete="off" class="form account_form become_seller">
                    <div class="form-group">
                        <label for="1">Your Name</label>
                        <input class="form-control" id="1" placeholder="Full Name" type="text">
                    </div>
                    <div class="form-group">
                        <label for="1">Your Email</label>
                        <input class="form-control" id="1" placeholder="Email" type="email">
                    </div>
                    <div class="form-group">
                        <label for="1">Your Password</label>
                        <div class="password_outer">
                            <input class="form-control" id="1" placeholder="Password" type="password">
                            <i class="fa-solid fa-eye-slash"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="password_outer">
                            <input class="form-control" id="1" placeholder="Confirm Password" type="password">
                            <i class="fa-solid fa-eye-slash"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="2">Mobile no.</label>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text country_code" id="inputGroupPrepend2">+92</span>
                            </div>
                            <input type="text" class="form-control" id="2" placeholder="Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="1">Cnic no.</label>
                        <input class="form-control" id="1" placeholder="Cnic" type="number">
                    </div>
                </form>
            </div>
            <div class="bf_account_wrapper account_form_wrapper">
                <h4 class="mb-4 text-center text-uppercase font-weight-normal">Bank Details</h4>
                <form autocomplete="off" class="form account_form become_seller">
                    <div class="form-group">
                        <label for="1">Account No.</label>
                        <input class="form-control" id="1" placeholder="Number" type="number">
                    </div>
                    <div class="form-group">
                        <label for="1">Account Title</label>
                        <input class="form-control" id="1" placeholder="Title" type="text">
                    </div>
                    <div class="form-group">
                        <label for="1">Bank Name</label>
                        <input class="form-control" id="1" placeholder="Bank Name" type="text">
                    </div>
                </form>
            </div>
            <div class="bf_account_wrapper account_form_wrapper">
                <h4 class="mb-4 text-center text-uppercase font-weight-normal">Basic information</h4>
                <form autocomplete="off" class="form account_form become_seller">
                    <div class="form-group">
                        <label for="1">Shop Name</label>
                        <input class="form-control" id="1" placeholder="Shop Name" type="text">
                    </div>
                    <div class="form-group">
                        <label for="1">Address</label>
                        <textarea class="form-control" id="1" rows="4" style="resize: horizontal"
                                  placeholder="Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="1">Warehouse Adress</label>
                        <textarea class="form-control" id="1" rows="4" style="resize: horizontal"
                                  placeholder="Warehouse Adress"></textarea>
                    </div>
                    <a href="subscription-package.php" class="main_btn w-100 mt-4" type="button">Select a Subscription package</a>
                </form>
            </div>
        </div>
    </section
</main>
<?php include 'footer.php' ?>

