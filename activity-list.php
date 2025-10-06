<?php
$pageTitle = 'Activity List';
include 'inc/header.php'
?>

<!-- delet popup component  -->
<?php include 'components/delete-popup.php' ?>
<!-- delet popup component ends -->

<section class="admin_container d-flex">


    <?php
    $currentPage = 'ActivityList';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto accounting_container">
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
                    <a href="#">Data Management </a>
                    <span>/</span>
                    <p>Activity Logs</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">

                <?php include 'components/profile.php' ?>
                <?php include 'components/notification.php' ?>

            </div>
        </div>
        <!-- TOP PROFILE HEADER ENDS  -->

        <div class="admin_list_heading d-flex align-items-center flex-wrap gap-3 justify-content-between outer_padding">
            <div class="left_heading">
                <h3>Activity List</h3>
                <p>You can view the Ledger list accordingly.</p>
            </div>

            <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                <!-- <div class="search">
                    <input type="text" placeholder="Search" name="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="filter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.11634 18.875C8.71634 18.875 8.32467 18.775 7.95801 18.575C7.22467 18.1667 6.78301 17.425 6.78301 16.5917V12.175C6.78301 11.7583 6.50801 11.1333 6.24967 10.8167L3.13301 7.51667C2.60801 6.99167 2.20801 6.09167 2.20801 5.41667V3.5C2.20801 2.16667 3.21634 1.125 4.49967 1.125H15.4997C16.7663 1.125 17.7913 2.15 17.7913 3.41667V5.25C17.7913 6.125 17.2663 7.11667 16.7747 7.60833L13.1663 10.8C12.8163 11.0917 12.5413 11.7333 12.5413 12.25V15.8333C12.5413 16.575 12.0747 17.4333 11.4913 17.7833L10.3413 18.525C9.96634 18.7583 9.54134 18.875 9.11634 18.875ZM4.49967 2.375C3.91634 2.375 3.45801 2.86667 3.45801 3.5V5.41667C3.45801 5.725 3.70801 6.325 4.02467 6.64167L7.19967 9.98333C7.62467 10.5083 8.04134 11.3833 8.04134 12.1667V16.5833C8.04134 17.125 8.41634 17.3917 8.57467 17.475C8.92467 17.6667 9.34967 17.6667 9.67467 17.4667L10.833 16.725C11.0663 16.5833 11.2997 16.1333 11.2997 15.8333V12.25C11.2997 11.3583 11.733 10.375 12.358 9.85L15.9247 6.69167C16.208 6.40833 16.5497 5.73333 16.5497 5.24167V3.41667C16.5497 2.84167 16.083 2.375 15.508 2.375H4.49967Z" fill="#141414" />
                        <path d="M5.00006 8.95741C4.88339 8.95741 4.77506 8.92408 4.66672 8.86575C4.37506 8.68241 4.28339 8.29075 4.46672 7.99908L8.57506 1.41575C8.75839 1.12408 9.14172 1.03241 9.43339 1.21575C9.72506 1.39908 9.81672 1.78241 9.63339 2.07408L5.52506 8.65741C5.40839 8.84908 5.20839 8.95741 5.00006 8.95741Z" fill="#141414" />
                    </svg>
                </div> -->

                <div class="account_buttons d-flex align-items-center gap-2 flex-wrap">
                    <?php include 'components/search.php' ?>
                    <?php
                    $title = "Purchase Requisition";
                    $formId = "purchaseForm";
                    $redirectPage = "purchase-requisation.php";
                    include 'components/asset-filter.php';
                    ?>


                    <button class="" type="button" onclick="window.print()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M6.04297 5.83464H13.9596V4.16797C13.9596 2.5013 13.3346 1.66797 11.4596 1.66797H8.54297C6.66797 1.66797 6.04297 2.5013 6.04297 4.16797V5.83464Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3346 12.5V15.8333C13.3346 17.5 12.5013 18.3333 10.8346 18.3333H9.16797C7.5013 18.3333 6.66797 17.5 6.66797 15.8333V12.5H13.3346Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5 8.33203V12.4987C17.5 14.1654 16.6667 14.9987 15 14.9987H13.3333V12.4987H6.66667V14.9987H5C3.33333 14.9987 2.5 14.1654 2.5 12.4987V8.33203C2.5 6.66536 3.33333 5.83203 5 5.83203H15C16.6667 5.83203 17.5 6.66536 17.5 8.33203Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.1654 12.5H13.157H5.83203" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.83203 9.16797H8.33203" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Print
                    </button>

                </div>
                <div class="add_expenses activity_list_dropdown position-relative" id="AddExpenseBtn">
                    Choose Role
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none" class="expIcon">
                        <path d="M16.5984 7.95898L11.1651 13.3923C10.5234 14.034 9.47344 14.034 8.83177 13.3923L3.39844 7.95898" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="add_exprense_dropdown_container">
                        <a href="#">
                            Admin
                        </a>
                        <a href="#">
                            Project Manager
                        </a>
                        <a href="#">
                            HR Manager
                        </a>
                        <a href="#">
                            Accountant
                        </a>
                        <a href="#">
                            Client
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="project_list_table pl_pr">
            <div class="common_table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Name</th>
                                <th scope="col">Ledger Code</th>
                                <th scope="col">Account Groups</th>
                                <th scope="col">Opening Balance </th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php foreach (array_slice($projectList, 0, 11) as $project): ?>
                                <tr>
                                    <th scope="row"><?= $project['id'] ?></th>
                                    <td><?= $project['acc_g_name'] ?></td>
                                    <td>Ad</td>
                                    <td><?= $project['pl_type'] ?></td>
                                    <td>0.000</td>
                                    <td>
                                        <div class="acc_group_active">
                                            Open
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_actions">

                                            <a href="#" aria-label="Edit Labout List" title="Edit Labour List" class="add_acc_groupBtn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M9.94452 2.70041L3.78702 9.21791C3.55452 9.46541 3.32952 9.95291 3.28452 10.2904L3.00702 12.7204C2.90952 13.5979 3.53952 14.1979 4.40952 14.0479L6.82452 13.6354C7.16202 13.5754 7.63452 13.3279 7.86702 13.0729L14.0245 6.55541C15.0895 5.43041 15.5695 4.14791 13.912 2.58041C12.262 1.02791 11.0095 1.57541 9.94452 2.70041Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.91797 3.78711C9.24047 5.85711 10.9205 7.43961 13.0055 7.64961" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M2.25 16.5H15.75" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#" title="Delete" class="delete delete_row_btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M15.75 4.48438C13.2525 4.23687 10.74 4.10938 8.235 4.10938C6.75 4.10938 5.265 4.18438 3.78 4.33438L2.25 4.48438" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.375 3.7275L6.54 2.745C6.66 2.0325 6.75 1.5 8.0175 1.5H9.9825C11.25 1.5 11.3475 2.0625 11.46 2.7525L11.625 3.7275" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.1373 6.85547L13.6498 14.408C13.5673 15.5855 13.4998 16.5005 11.4073 16.5005H6.5923C4.4998 16.5005 4.4323 15.5855 4.3498 14.408L3.8623 6.85547" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.74707 12.375H10.2446" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.125 9.375H10.875" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
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
</section>


<?php include 'inc/footer.php' ?>