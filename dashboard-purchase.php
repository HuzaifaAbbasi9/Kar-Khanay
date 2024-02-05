<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/dashboard.css">
<main>
    <section class="dashboard_main custom-container section_not_home pt-lg-5">
        <?php include 'dashboard-nav.php' ?>
        <div class="row custom-row-gap pt-lg-5 pt-4">
            <div class="col-lg-8">
                <div class="dashboardContent left">
                    <h5 class="dashboardContentHeading">Purchase History</h5>
                    <div class="table-responsive dashboard_table">
                        <table class="table table-borderless mb-0">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Delivery Status</th>
                                <th>Payment Status</th>
                                <th class="text-right">Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="code" data-label="Code">2022151-11525471</td>
                                <td data-label="Date">22-05-2022</td>
                                <td data-label="Amount">R 900.00</td>
                                <td data-label="Delivery Status">Pending</td>
                                <td data-label="Payment Status">
                                    <div class="table_unpaid">Un-Paid</div>
                                </td>
                                <td data-label="Options" class="dashboard_table_buttons">
                                    <button class="delete"><i class="fa-solid fa-trash-can"></i></button>
                                    <a href="dashboard-purchase-view.php" class="view"><i class="fa-solid fa-eye"></i></a>
                                    <button class="download"><i class="fa-solid fa-download"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="code" data-label="Code">2022151-11525471</td>
                                <td data-label="Date">22-05-2022</td>
                                <td data-label="Amount">R 900.00</td>
                                <td data-label="Delivery Status">Pending</td>
                                <td data-label="Payment Status">
                                    <div class="table_unpaid">Un-Paid</div>
                                </td>
                                <td data-label="Options" class="dashboard_table_buttons">
                                    <button class="delete"><i class="fa-solid fa-trash-can"></i></button>
                                    <a href="dashboard-purchase-view.php" class="view"><i class="fa-solid fa-eye"></i></a>
                                    <button class="download"><i class="fa-solid fa-download"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="code" data-label="Code">2022151-11525471</td>
                                <td data-label="Date">22-05-2022</td>
                                <td data-label="Amount">R 900.00</td>
                                <td data-label="Delivery Status">Pending</td>
                                <td data-label="Payment Status">
                                    <div class="table_unpaid paid">Paid</div>
                                </td>
                                <td data-label="Options" class="dashboard_table_buttons">
                                    <button class="delete"><i class="fa-solid fa-trash-can"></i></button>
                                    <a href="dashboard-purchase-view.php" class="view"><i class="fa-solid fa-eye"></i></a>
                                    <button class="download"><i class="fa-solid fa-download"></i></button>
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
        $('.dashboard_navigationLink[href*="dashboard-purchase"]').addClass('active');
    })
</script>
<?php include 'footer.php' ?>
