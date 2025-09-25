<?php
$view = $_GET['view'] ?? 'projects';
if ($view === 'subcontractor') {
    $pageTitle = 'Sub Contractor Total Income';
} else {
    $pageTitle = 'Total income';
}
include 'inc/header.php'
?>


<section class="admin_container d-flex">


    <?php
    if ($view === 'subcontractor') {
        $currentPage = 'subcontractor';
    } else {
        $currentPage = 'projectlist';
    }
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto">

        <!-- top profile header  -->
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M16.5 16.5H1.5C1.1925 16.5 0.9375 16.245 0.9375 15.9375C0.9375 15.63 1.1925 15.375 1.5 15.375H16.5C16.8075 15.375 17.0625 15.63 17.0625 15.9375C17.0625 16.245 16.8075 16.5 16.5 16.5Z" fill="#141414" />
                        <path d="M7.3125 3V16.5H10.6875V3C10.6875 2.175 10.35 1.5 9.3375 1.5H8.6625C7.65 1.5 7.3125 2.175 7.3125 3Z" fill="#141414" />
                        <path d="M2.25 7.5V16.5H5.25V7.5C5.25 6.675 4.95 6 4.05 6H3.45C2.55 6 2.25 6.675 2.25 7.5Z" fill="#141414" />
                        <path d="M12.75 11.25V16.5H15.75V11.25C15.75 10.425 15.45 9.75 14.55 9.75H13.95C13.05 9.75 12.75 10.425 12.75 11.25Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="project-list.php">Project Management</a>
                    <span>/</span>
                    <?php if ($view === 'subcontractor') : ?>
                        <p>Total Cash</p>
                    <?php else: ?>
                        <p>Total Income</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">
                <?php include 'components/profile.php' ?>


                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- top profile header ends  -->


        <div class="admin_list_heading d-flex align-items-center flex-wrap gap-1 gap-sm-3 justify-content-between pt-3 pb-4 pl_pr">
            <div class="left_heading">
                <?php if ($view === 'subcontractor') : ?>
                    <h3>Total Cash</h3>
                <?php else: ?>
                    <h3>Income List</h3>
                <?php endif; ?>
                <p>You can view the Project list accordingly.</p>
            </div>

            <div class="add_expenses common_payment_popbtns"
                data-title="Payment Voucher"
                data-form="payment">
                Add Income
            </div>

        </div>

        <!-- VOUCHAR POPUP  -->
        <?php include 'components/vouchar-popup.php' ?>
        <!-- VOUCHAR POPUP ENDS  -->

        <!-- income table  -->
        <div class="expense_common_table_container pl_pr">
            <div class="common_table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Ledger</th>
                                <th scope="col">Short Name</th>
                                <th scope="col">Opening Debit</th>
                                <th scope="col">Opening Credit</th>
                                <th scope="col">Debit Amount</th>
                                <th scope="col">Credit Amount</th>
                                <th scope="col">Debit Balance</th>
                                <th scope="col">Credit Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php foreach (array_slice($projectList, 0, 12) as $project): ?>
                                <tr>
                                    <th scope="row"><?= $project['id'] ?></th>
                                    <td><?= $project['ledger'] ?></td>
                                    <td><?= $project['requisationnumber'] ?></td>
                                    <td><?= $project['rate'] ?></td>
                                    <td><?= $project['Quantity'] ?></td>
                                    <td><?= $project['Quantity'] ?></td>
                                    <td><?= $project['Quantity'] ?></td>
                                    <td><?= $project['Quantity'] ?></td>
                                    <td><?= $project['Quantity'] ?></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mb-5 mt-3">
                <?php include 'inc/pagination.php' ?>
            </div>
        </div>
    </div>
    <!-- income table ends  -->
</section>




<?php include 'inc/footer.php' ?>