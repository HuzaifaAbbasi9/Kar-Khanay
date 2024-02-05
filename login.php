<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/global.css">
<script>
    $(document).ready(function () {
        $('.navbar-nav .nav-link').removeClass('active');
        $('.bf_header_icons .header_login_link').addClass('active');
    })
</script>
<main>
    <section class="section_not_home bf_account_sec custom-container-lg">
        <div class="bf_account_wrapper">
            <h4 class="mb-4 text-center text-uppercase">Login to your account.</h4>
            <form autocomplete="off" class="form account_form">
                <div class="form-group">
                    <label for="uname1" class="d-none">Email</label>
                    <input class="form-control" id="uname1" name="uname1" placeholder="Email" required="" type="text">
                </div>
                <div class="form-group">
                    <label for="pwd1" class="d-none">Password</label>
                    <div class="password_outer">
                        <input autocomplete="new-password" class="form-control" id="pwd1" placeholder="Password"
                               required=""
                               type="password">
                        <i class="fa-solid fa-eye-slash"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span>Remember me</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <a href="#" class="main_para forget_btn">Forget password ?</a>
                    </div>
                </div>
                <button class="main_btn w-100 mt-4" type="button">Continue</button>
                <div class="form-group mb-0 account_form_footer mt-4">
                    <p class="main_para">Don't have a account</p>
                    <p class="main_para"><a href="signup.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </section
</main>
<?php include 'footer.php' ?>

