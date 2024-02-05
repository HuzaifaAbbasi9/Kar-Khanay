<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/dashboard.css">
<main>
    <section class="dashboard_main custom-container section_not_home pt-lg-5">
        <?php include 'dashboard-nav.php' ?>
        <div class="row custom-row-gap pt-lg-5 pt-4">
            <div class="col-lg-8">
                <div class="dashboardContent left">
                    <h5 class="dashboardContentHeading">All messages</h5>
                    <div class="dashboard_conversations_wrapper">
                        <a href="dashboard-conversations-inbox.php" class="dashboard_conversations_item">
                            <div class="dashboard_conversations_itemLeft">
                                <img src="images/inbpi.png" alt="">
                                <div>
                                    <h5 class="mb-1">Logan Paul</h5>
                                    <h5 class="mb-0 main_para">10:20:04 19-04-2022</h5>
                                </div>
                            </div>
                            <div class="mx-auto">
                                <h5 class="mb-1">Jacket Blue Plain Washington</h5>
                                <h5 class="mb-0 main_para">nadnajdnajdn</h5>
                            </div>
                            <button><img src="images/inbox-img-sm.png" alt=""></button>
                        </a>
                        <a href="dashboard-conversations-inbox.php" class="dashboard_conversations_item mt-lg-5 mt-4">
                            <div class="dashboard_conversations_itemLeft">
                                <img src="images/inbpi.png" alt="">
                                <div>
                                    <h5 class="mb-1">Logan Paul</h5>
                                    <h5 class="mb-0 main_para">10:20:04 19-04-2022</h5>
                                </div>
                            </div>
                            <div class="mx-auto">
                                <h5 class="mb-1">Jacket Blue Plain Washington</h5>
                                <h5 class="mb-0 main_para">nadnajdnajdn</h5>
                            </div>
                            <button><img src="images/inbox-img-sm.png" alt=""></button>
                        </a>
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
        $('.dashboard_navigationLink[href*="dashboard-conversations"]').addClass('active');
    })
</script>
<?php include 'footer.php' ?>
