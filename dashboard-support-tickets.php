<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/dashboard.css">
<main>
    <section class="dashboard_main custom-container section_not_home pt-lg-5">
        <?php include 'dashboard-nav.php' ?>
        <div class="row custom-row-gap pt-lg-5 pt-4">
            <div class="col-lg-8">
                <div class="createTicketWrapper">
                    <div class="icon"><i class="fa-solid fa-plus"></i></div>
                    <p class="main_para">Create a ticket</p>
                </div>
                <div class="dashboardContent h-auto left">
                    <h5 class="dashboardContentHeading">tickets</h5>
                    <div class="table-responsive dashboard_table">
                        <table class="table table-borderless mb-0">
                            <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Sending Data</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th class=" text-right">Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="color_green" data-label="Ticket ID">2022151-11525471</td>
                                <td data-label="Sending Data">22-05-2022</td>
                                <td data-label="Subject">DADAD</td>
                                <td data-label="Status">
                                    <div class="table_unpaid">Un-Paid</div>
                                </td>
                                <td data-label="Options">
                                    <a href="dashboard-support-tickets-chat.php" class="color_green text-right d-block">View
                                        Detail ></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="color_green" data-label="Ticket ID">2022151-11525471</td>
                                <td data-label="Sending Data">22-05-2022</td>
                                <td data-label="Subject">DADAD</td>
                                <td data-label="Status">
                                    <div class="table_unpaid">Un-Paid</div>
                                </td>
                                <td data-label="Options">
                                    <a href="dashboard-support-tickets-chat.php" class="color_green text-right d-block">View
                                        Detail ></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="color_green" data-label="Ticket ID">2022151-11525471</td>
                                <td data-label="Sending Data">22-05-2022</td>
                                <td data-label="Subject">DADAD</td>
                                <td data-label="Status">
                                    <div class="table_unpaid paid">Un-Paid</div>
                                </td>
                                <td data-label="Options">
                                    <a href="dashboard-support-tickets-chat.php" class="color_green text-right d-block">View
                                        Detail ></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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
        $('.dashboard_navigationLink[href*="dashboard-support-tickets"]').addClass('active');
    })
</script>
<?php include 'footer.php' ?>
