<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/dashboard.css">
<main>
    <section class="dashboard_main custom-container section_not_home pt-lg-5">
        <?php include 'dashboard-nav.php' ?>
        <div class="row custom-row-gap pt-lg-5 pt-4">
            <div class="col-lg-8">
                <div class="dashboardContent h-auto left">
                    <h5 class="dashboardContentHeading">Manage Profile</h5>
                    <form class="dashboard_manage_profile">
                        <div class="page_popup_wrapperTop">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input class="form-control" placeholder="Your Name" type="text">
                            </div>
                            <div class="form-group mt-3">
                                <label>Phone No.</label>
                                <input class="form-control" placeholder="Phone No." type="text">
                            </div>
                            <div class="form-group mt-3">
                                <label>Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label>Your Password</label>
                                <input class="form-control" placeholder="Your Password" type="text">
                            </div>
                            <div class="form-group mt-3">
                                <label>Confirm Password</label>
                                <input class="form-control" placeholder="Confirm Password" type="text">
                            </div>
                            <div class="createTicketBtns text-right">
                                <button class="main_btn ml-auto" type="button">Send Ticket</button>
                            </div>
                        </div>
                    </form>
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
        $('.dashboard_navigationLink[href*="dashboard-manage-profile"]').addClass('active');
    })
</script>
<?php include 'footer.php' ?>
