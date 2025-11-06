<!-- NOTE: select account groupwise open trail  then open this page design(this is the second page )  -->
<?php
$pageTitle = 'Account Group Wise page pah ';
include 'inc/header.php'
?>

<section class="admin_container d-flex">


    <!-- SIDE BAR  -->
    <?php
    $currentPage = 'trailBalance';
    include 'inc/side-bar.php';
    ?>
    <!-- SIDE BAR ENDS  -->

    <div class="admin_right_content ms-auto">

        <!-- TOP PROFILE HEADER  -->
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M9 1.5C7.035 1.5 5.4375 3.0975 5.4375 5.0625C5.4375 6.99 6.945 8.55 8.91 8.6175C8.97 8.61 9.03 8.61 9.075 8.6175C9.09 8.6175 9.0975 8.6175 9.1125 8.6175C9.12 8.6175 9.12 8.6175 9.1275 8.6175C11.0475 8.55 12.555 6.99 12.5625 5.0625C12.5625 3.0975 10.965 1.5 9 1.5Z" fill="#141414" />
                        <path d="M12.8107 10.6127C10.7182 9.21766 7.3057 9.21766 5.1982 10.6127C4.2457 11.2502 3.7207 12.1127 3.7207 13.0352C3.7207 13.9577 4.2457 14.8127 5.1907 15.4427C6.2407 16.1477 7.6207 16.5002 9.0007 16.5002C10.3807 16.5002 11.7607 16.1477 12.8107 15.4427C13.7557 14.8052 14.2807 13.9502 14.2807 13.0202C14.2732 12.0977 13.7557 11.2427 12.8107 10.6127Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="opening-trails.php">Account Report </a>
                    <span>/</span>
                    <p> Trail Balance</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">
                <?php include 'components/profile.php' ?>
                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- TOP PROFILE HEADER ENDS  -->


        <div class="trail_container pl_pr">
            <!-- trail balance buttons container  -->
            <div class="trail_balance_buttons_container d-flex align-items-center justify-content-between gap-3 flex-wrap">
                <div class="fist_buttons d-flex align-items-center gap-3 flex-wrap">
                    <button class="ledger_common_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M13.6997 7.41797C16.6997 7.6763 17.9247 9.21797 17.9247 12.593V12.7013C17.9247 16.4263 16.4331 17.918 12.7081 17.918H7.28307C3.55807 17.918 2.06641 16.4263 2.06641 12.7013V12.593C2.06641 9.24297 3.27474 7.7013 6.22474 7.4263" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 12.499V3.01562" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.7904 4.8737L9.9987 2.08203L7.20703 4.8737" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Export
                    </button>

                    <button class="ledger_common_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M13.6997 7.41797C16.6997 7.6763 17.9247 9.21797 17.9247 12.593V12.7013C17.9247 16.4263 16.4331 17.918 12.7081 17.918H7.28307C3.55807 17.918 2.06641 16.4263 2.06641 12.7013V12.593C2.06641 9.24297 3.27474 7.7013 6.22474 7.4263" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 12.499V3.01562" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.7904 4.8737L9.9987 2.08203L7.20703 4.8737" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Export Setup
                    </button>

                    <button class="ledger_common_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M6.66602 10.168H12.4993" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.66602 13.5H10.316" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.33268 5.0013H11.666C13.3327 5.0013 13.3327 4.16797 13.3327 3.33464C13.3327 1.66797 12.4993 1.66797 11.666 1.66797H8.33268C7.49935 1.66797 6.66602 1.66797 6.66602 3.33464C6.66602 5.0013 7.49935 5.0013 8.33268 5.0013Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3333 3.35156C16.1083 3.50156 17.5 4.52656 17.5 8.3349V13.3349C17.5 16.6682 16.6667 18.3349 12.5 18.3349H7.5C3.33333 18.3349 2.5 16.6682 2.5 13.3349V8.3349C2.5 4.5349 3.89167 3.50156 6.66667 3.35156" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Page setup
                    </button>
                </div>
                <div class="center_div_pagination d-flex align-items-center gap-2">
                    <div class="left_arrow cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                            <path d="M17.4993 32.5846C25.5535 32.5846 32.0827 26.0555 32.0827 18.0013C32.0827 9.94715 25.5535 3.41797 17.4993 3.41797C9.4452 3.41797 2.91602 9.94715 2.91602 18.0013C2.91602 26.0555 9.4452 32.5846 17.4993 32.5846Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M19.3384 23.1474L14.2051 17.9995L19.3384 12.8516" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div class="pagination_num">
                        <div class="box active">
                            2
                        </div>
                        <div class="slash">
                            /
                        </div>
                        <div class="box2">
                            3
                        </div>
                    </div>

                    <div class="right_arrow cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                            <path d="M17.4993 32.5846C25.5535 32.5846 32.0827 26.0555 32.0827 18.0013C32.0827 9.94715 25.5535 3.41797 17.4993 3.41797C9.4452 3.41797 2.91602 9.94715 2.91602 18.0013C2.91602 26.0555 9.4452 32.5846 17.4993 32.5846Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.6621 23.1474L20.7954 17.9995L15.6621 12.8516" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class="last_div d-flex align-items-center gap-3 flex-wrap">
                    <div class="ledger_common_btn d-flex align-items-center gap-2 px-4">
                        <div class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M8 9.75H12.1667" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.0827 17.5013C14.4549 17.5013 17.9993 13.9569 17.9993 9.58464C17.9993 5.21238 14.4549 1.66797 10.0827 1.66797C5.71043 1.66797 2.16602 5.21238 2.16602 9.58464C2.16602 13.9569 5.71043 17.5013 10.0827 17.5013Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18.8327 18.3346L17.166 16.668" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        125%
                        <div class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M8.16602 9.75H12.3327" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.25 11.8346V7.66797" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.0827 17.5013C14.4549 17.5013 17.9993 13.9569 17.9993 9.58464C17.9993 5.21238 14.4549 1.66797 10.0827 1.66797C5.71043 1.66797 2.16602 5.21238 2.16602 9.58464C2.16602 13.9569 5.71043 17.5013 10.0827 17.5013Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18.8327 18.3346L17.166 16.668" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <button class="ledger_common_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M6.04102 5.83464H13.9577V4.16797C13.9577 2.5013 13.3327 1.66797 11.4577 1.66797H8.54102C6.66602 1.66797 6.04102 2.5013 6.04102 4.16797V5.83464Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3327 12.5V15.8333C13.3327 17.5 12.4993 18.3333 10.8327 18.3333H9.16602C7.49935 18.3333 6.66602 17.5 6.66602 15.8333V12.5H13.3327Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5 8.33203V12.4987C17.5 14.1654 16.6667 14.9987 15 14.9987H13.3333V12.4987H6.66667V14.9987H5C3.33333 14.9987 2.5 14.1654 2.5 12.4987V8.33203C2.5 6.66536 3.33333 5.83203 5 5.83203H15C16.6667 5.83203 17.5 6.66536 17.5 8.33203Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.1673 12.5H13.159H5.83398" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.83398 9.16797H8.33398" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Print Layout
                    </button>

                    <button class="print" onclick="window.print()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M6.04102 5.83464H13.9577V4.16797C13.9577 2.5013 13.3327 1.66797 11.4577 1.66797H8.54102C6.66602 1.66797 6.04102 2.5013 6.04102 4.16797V5.83464Z" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3327 12.5V15.8333C13.3327 17.5 12.4993 18.3333 10.8327 18.3333H9.16602C7.49935 18.3333 6.66602 17.5 6.66602 15.8333V12.5H13.3327Z" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5 8.33203V12.4987C17.5 14.1654 16.6667 14.9987 15 14.9987H13.3333V12.4987H6.66667V14.9987H5C3.33333 14.9987 2.5 14.1654 2.5 12.4987V8.33203C2.5 6.66536 3.33333 5.83203 5 5.83203H15C16.6667 5.83203 17.5 6.66536 17.5 8.33203Z" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.1673 12.5H13.159H5.83398" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.83398 9.16797H8.33398" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Print
                    </button>
                </div>
            </div>
            <!-- trail balance buttons container  -->

            <!-- second group wise print table  -->
            <div class="trail_print_table_container">
                <div class=" common_table open_trail_table">
                    <div class="trial_print_table_header d-flex align-items-center gap-3 justify-content-between">
                        <div class="trail_logo">
                            <img src="assets/images//logo.svg" alt="">
                        </div>

                        <div class="center_print_div addAssetBtn cursor-pointer text-center">
                            <h4>Trail Balance: Datewise</h4>
                            <p>Data: 01/04/02082-30/04/2082</p>
                        </div>

                        <div class="last_trail_print_header_div">
                            <p>S.T Builders Pvt.Ltd.</p>
                            <p>Kathmandu-32,Koteshwor</p>
                            <p>9863313584</p>
                            <p>PAN: 601241851</p>
                        </div>
                    </div>
                    <div class="print-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="wrap_Text">Ledger</th>
                                        <th scope="col">Opening Debit</th>
                                        <th scope="col">Opening Credit</th>
                                        <th scope="col">Debit Amount</th>
                                        <th scope="col">Credit Amount</th>
                                        <th scope="col">Closing Debit</th>
                                        <th scope="col">Closing Credit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- First group  -->
                                    <tr>
                                        <td colspan="7">
                                            <div class="trail_table_heading">
                                                Group : SUNDRY CREDITORS
                                            </div>
                                        </td>
                                    </tr>
                                    <?php foreach (array_slice($projectList, 0, 4) as $project): ?>
                                        <tr>
                                            <td class="wrap_Text"><?= $project['acc_g_name'] ?></td>
                                            <td><?= $project['Quantity'] ?></td>
                                            <td><?= $project['rate'] ?></td>
                                            <td><?= $project['rate'] ?></td>
                                            <td><?= $project['Quantity'] ?></td>
                                            <td><?= $project['rate'] ?></td>
                                            <td><?= $project['rate'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td>
                                            <div class="c_total">
                                                Total
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- First group  -->

                                    <!-- second group  -->
                                    <tr>
                                        <td colspan="7">
                                            <div class="trail_table_heading">
                                                Group : RESERVE & SURPLUS
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PROFIT & LOSS</td>
                                        <td>-- --</td>
                                        <td>-- --</td>
                                        <td>17,99,160</td>
                                        <td>-- -- </td>
                                        <td>17,99,160</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="c_total">
                                                Total
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                -- --
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- second group  -->

                                    <!-- third group  -->
                                    <tr>
                                        <td colspan="7">
                                            <div class="trail_table_heading">
                                                Group : INDIRECT EXPENSES
                                            </div>
                                        </td>
                                    </tr>
                                    <?php foreach (array_slice($projectList, 0, 4) as $project): ?>
                                        <tr>
                                            <td class="wrap_Text"><?= $project['acc_g_name'] ?></td>
                                            <td><?= $project['Quantity'] ?></td>
                                            <td><?= $project['rate'] ?></td>
                                            <td><?= $project['rate'] ?></td>
                                            <td><?= $project['Quantity'] ?></td>
                                            <td>-- --</td>
                                            <td><?= $project['rate'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td>
                                            <div class="c_total">
                                                Total
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                -- --
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                -- --
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- third group  -->

                                    <!-- fourth group  -->
                                    <tr>
                                        <td colspan="7">
                                            <div class="trail_table_heading">
                                                Group : Duty and Taxes
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TDS Payable Ledger</td>
                                        <td>1,529.00</td>
                                        <td>-- --</td>
                                        <td>17,99,160</td>
                                        <td>-- --</td>
                                        <td>17,99,160</td>
                                        <td>-- --</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="c_total">
                                                Total
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                -- --
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                        <td>
                                            <div class="c1_total">
                                                875,100.31
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- fourth group  -->



                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="trail_print_footer ">
                        <p>
                            Filtered Based On: Branch: Head Office**First Segment: Bhupendra Malla’s Site***
                        </p>

                        <div class="d-flex align-items-center justify-content-between">
                            <p>Printed Date and Time is 2082/04/30 15:29:15</p>

                            <p>Page No: 2/3</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second group wise print table  -->

        </div>
    </div>
    </div>

</section>

<!-- search trail balance popup   -->
<div class="add-asset-filter-component">
    <div class="add_asset_filter_bg">
        <div class="ass_filter_popcontent">
            <div class="bg_white">
                <div class="ass_heading">
                    <h5>Search </h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="close-add-asset">
                        <path d="M10.0013 1.66602C5.40964 1.66602 1.66797 5.40768 1.66797 9.99935C1.66797 14.591 5.40964 18.3327 10.0013 18.3327C14.593 18.3327 18.3346 14.591 18.3346 9.99935C18.3346 5.40768 14.593 1.66602 10.0013 1.66602ZM12.8013 11.916C13.043 12.1577 13.043 12.5577 12.8013 12.7993C12.6763 12.9243 12.518 12.9827 12.3596 12.9827C12.2013 12.9827 12.043 12.9243 11.918 12.7993L10.0013 10.8827L8.08464 12.7993C7.95964 12.9243 7.8013 12.9827 7.64297 12.9827C7.48464 12.9827 7.3263 12.9243 7.2013 12.7993C6.95964 12.5577 6.95964 12.1577 7.2013 11.916L9.11797 9.99935L7.2013 8.08268C6.95964 7.84102 6.95964 7.44102 7.2013 7.19935C7.44297 6.95768 7.84297 6.95768 8.08464 7.19935L10.0013 9.11602L11.918 7.19935C12.1596 6.95768 12.5596 6.95768 12.8013 7.19935C13.043 7.44102 13.043 7.84102 12.8013 8.08268L10.8846 9.99935L12.8013 11.916Z" fill="#FF0000" />
                    </svg>
                </div>

                <div class="c_asset_sub_heading">
                    <h5>Search </h5>
                    <p>Please kindly complete the form to account group registration.</p>
                </div>

                <!-- add asset form  -->
                <div class="asset_filter_form">
                    <div class="common_form trail_balancedate">
                        <form action="">
                            <div class="row g-3 align-items-end">

                                <div class="col-md-6  slect-status">
                                    <label for="Group" class="mb-2">Group by <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="Group" required>

                                        <option value="" hidden disabled selected>With Opening trail</option>
                                        <option value="1">With Opening Trail</option>
                                        <option value="2">Account Groupwise(With Opening Trail) </option>
                                        <option value="3">Account Groupwise Summary(With Opening Trial)</option>
                                    </select>
                                </div>


                                <div class="col-md-6">
                                    <div class="form_input d-flex flex-column gap-2 position-relative">
                                        <label for="fromdate">From Date</label>
                                        <input type="text" class="date-picker" id="fromdate" placeholder="MM/DD/YYYY">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="calender" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                            <path d="M7.33203 1.66602V4.16602" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14 1.66602V4.16602" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3.58203 7.57422H17.7487" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.166 7.08268V14.166C18.166 16.666 16.916 18.3327 13.9993 18.3327H7.33268C4.41602 18.3327 3.16602 16.666 3.16602 14.166V7.08268C3.16602 4.58268 4.41602 2.91602 7.33268 2.91602H13.9993C16.916 2.91602 18.166 4.58268 18.166 7.08268Z" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.7441 11.4167H13.7516" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.7441 13.9167H13.7516" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.6621 11.4167H10.6696" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.6621 13.9167H10.6696" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.5781 11.4167H7.58559" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.5781 13.9167H7.58559" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="col-md-6  slect-status">
                                    <label for="Group" class="mb-2">Project <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="Group" required>

                                        <option value="" hidden disabled selected>Select </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                                        <button class="discard popup-btn1" type="button">Back</button>
                                        <button type="submit" class="submit px-3">View report</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- add asset form  -->
            </div>
        </div>
    </div>
</div>
<!-- search trail balance popup  -->


<?php include 'inc/footer.php' ?>