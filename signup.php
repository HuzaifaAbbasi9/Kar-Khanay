<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/global.css">
<script>
    $(document).ready(function () {
        $('.navbar-nav .nav-link').removeClass('active');
        $('.bf_header_icons .header_login_link').removeClass('active');
        $('.bf_header_icons .header_signup_link').addClass('active');
    })
</script>
<main>
    <section class="section_not_home bf_account_sec custom-container-lg">
        <div class="bf_account_wrapper">
            <h4 class="mb-4 text-center text-uppercase">Create an account.</h4>
            <form autocomplete="off" class="form account_form">
                <div class="form-group">
                    <input class="form-control" placeholder="Full Name" required="" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Email" required="" type="email">
                </div>
                <div class="form-group">
                    <div class="password_outer">
                        <input class="form-control" placeholder="Password" required="" type="password">
                        <i class="fa-solid fa-eye-slash"></i>
                    </div>
                </div>
                <div class="form-group">
                    <div class="password_outer">
                        <input class="form-control" placeholder="Confirm Password" required="" type="password">
                        <i class="fa-solid fa-eye-slash"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span>By signing up you agree to our terms and conditions.</span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="main_btn w-100 mt-4" type="button">Continue</button>
                <div class="form-group mb-0 account_form_footer mt-4">
                    <p class="main_para">Already have an account?</p>
                    <p class="main_para"><a href="login.php">Log In</a></p>
                </div>
            </form>
        </div>
    </section
</main>
<?php include 'footer.php' ?>

