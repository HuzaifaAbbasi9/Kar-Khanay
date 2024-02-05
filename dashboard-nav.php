<div class="dashboard_navigation">
    <a class="dashboard_navigationLink active" href="dashboard.php">dashboard</a>
    <a class="dashboard_navigationLink" href="dashboard-purchase.php">purchase history</a>
    <a class="dashboard_navigationLink" href="dashboard-download.php">downloads</a>
    <a class="dashboard_navigationLink" href="dashboard-conversations.php">CONVERSATIONS</a>
    <a class="dashboard_navigationLink" href="dashboard-support-tickets.php">SUPPORT TICKETS</a>
    <a class="dashboard_navigationLink" href="dashboard-manage-profile.php">Manage profile</a>
</div>
<script>
    $(document).ready(function () {
        $('.navbar-nav .nav-link').removeClass('active');
        $('.dashboard_navigationLink').removeClass('active');
    });
</script>