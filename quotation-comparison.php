<?php
$pageTitle = 'Quotation';
include 'inc/header.php'
?>

<section class="admin_container d-flex">


    <!-- SIDE BAR  -->
    <?php
    $currentPage = 'quotation';
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
                    <a href="quotation.php">Purchase Entries </a>
                    <span>/</span>
                    <p>Quotation</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">

                <?php include 'components/profile.php' ?>


                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- TOP PROFILE HEADER ENDS  -->


        <div class="inventory_page_container pl_pr mb-5">

            <div class="admin_list_heading d-flex align-items-center flex-wrap gap-1 gap-sm-3 justify-content-between">
                <div class="left_heading">
                    <h3>Quotation Comparison</h3>
                    <p>You can view the Project list accordingly.</p>
                </div>

                <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">


                    <div class="filter_comp">
                        <div class="asset_filter_btn_inv addAssetBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4.50065 1.75H15.5007C16.4173 1.75 17.1673 2.5 17.1673 3.41667V5.25C17.1673 5.91667 16.7507 6.75 16.334 7.16667L12.7507 10.3333C12.2507 10.75 11.9173 11.5833 11.9173 12.25V15.8333C11.9173 16.3333 11.584 17 11.1673 17.25L10.0007 18C8.91732 18.6667 7.41732 17.9167 7.41732 16.5833V12.1667C7.41732 11.5833 7.08398 10.8333 6.75065 10.4167L3.58398 7.08333C3.16732 6.66667 2.83398 5.91667 2.83398 5.41667V3.5C2.83398 2.5 3.58398 1.75 4.50065 1.75Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.10833 1.75L5 8.33333" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <!-- buttton div  -->
                    <div class="account_buttons d-flex align-items-center gap-2 flex-wrap">
                        <button type="button" onclick="window.print()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M6.04102 5.83464H13.9577V4.16797C13.9577 2.5013 13.3327 1.66797 11.4577 1.66797H8.54102C6.66602 1.66797 6.04102 2.5013 6.04102 4.16797V5.83464Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.3327 12.5V15.8333C13.3327 17.5 12.4993 18.3333 10.8327 18.3333H9.16602C7.49935 18.3333 6.66602 17.5 6.66602 15.8333V12.5H13.3327Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.5 8.33203V12.4987C17.5 14.1654 16.6667 14.9987 15 14.9987H13.3333V12.4987H6.66667V14.9987H5C3.33333 14.9987 2.5 14.1654 2.5 12.4987V8.33203C2.5 6.66536 3.33333 5.83203 5 5.83203H15C16.6667 5.83203 17.5 6.66536 17.5 8.33203Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.1673 12.5H13.159H5.83398" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5.83398 9.16797H8.33398" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Print
                        </button>
                    </div>
                    <!-- button div ends -->
                </div>
            </div>

            <div class="inventory_table common_table">
                <div class="common_print_header">
                    <div class="print-header">
                        <div class="prit_logo">
                            <img src="assets/images/logo.svg" alt="logo">
                        </div>
                        <h3>Quotation Comparison</h3>
                        <div class="last_div">
                            <p>S.T Builders Pvt.Ltd.</p>
                            <p>Kathmandu-32,Koteshwor</p>
                            <p>9863313584</p>
                            <p>PAN: 601241851</p>
                        </div>
                    </div>
                </div>
                <div class="print-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col" class="wrap_Text">Particular</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col" class="hideCol">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (array_slice($projectList, 0, 10) as $project): ?>
                                    <tr>
                                        <th scope="row"><?= $project['id'] ?></th>
                                        <td class="wrap_Text"><?= $project['acc_g_name'] ?></td>
                                        <td><?= $project['rate'] ?></td>
                                        <td><?= $project['Quantity'] ?></td>
                                        <td><?= $project['Quantity'] ?></td>
                                        <td class="hideCol">
                                            <div class="table_actions">
                                                <a href="add-purchase-order.php" title="View">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                        <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                                <a href="add-purchase-order.php" title="Edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                        <path d="M9.94452 2.70041L3.78702 9.21791C3.55452 9.46541 3.32952 9.95291 3.28452 10.2904L3.00702 12.7204C2.90952 13.5979 3.53952 14.1979 4.40952 14.0479L6.82452 13.6354C7.16202 13.5754 7.63452 13.3279 7.86702 13.0729L14.0245 6.55541C15.0895 5.43041 15.5695 4.14791 13.912 2.58041C12.262 1.02791 11.0095 1.57541 9.94452 2.70041Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.91797 3.78711C9.24047 5.85711 10.9205 7.43961 13.0055 7.64961" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2.25 16.5H15.75" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                                <a href="#" title="Delete" class="delete_row_btn">
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
                        </table>
                    </div>
                </div>

                <div class="payment_print_footer">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>

                    <div class="issue_sig">
                        <p>Prepared By</p>

                        <p>Approved By</p>
                    </div>
                </div>
            </div>


            <div class="mt-3 pagination_class">
                <?php include 'inc/pagination.php' ?>
            </div>

        </div>

    </div>

    </div>



</section>




<!-- Quotation Comparsion view form  popup  -->
<div class="add-asset-filter-component">
    <div class="add_asset_filter_bg">
        <div class="ass_filter_popcontent">
            <div class="bg_white">
                <div class="ass_heading">
                    <h5>Quotation Comparsion</h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="close-add-asset">
                        <path d="M10.0013 1.66602C5.40964 1.66602 1.66797 5.40768 1.66797 9.99935C1.66797 14.591 5.40964 18.3327 10.0013 18.3327C14.593 18.3327 18.3346 14.591 18.3346 9.99935C18.3346 5.40768 14.593 1.66602 10.0013 1.66602ZM12.8013 11.916C13.043 12.1577 13.043 12.5577 12.8013 12.7993C12.6763 12.9243 12.518 12.9827 12.3596 12.9827C12.2013 12.9827 12.043 12.9243 11.918 12.7993L10.0013 10.8827L8.08464 12.7993C7.95964 12.9243 7.8013 12.9827 7.64297 12.9827C7.48464 12.9827 7.3263 12.9243 7.2013 12.7993C6.95964 12.5577 6.95964 12.1577 7.2013 11.916L9.11797 9.99935L7.2013 8.08268C6.95964 7.84102 6.95964 7.44102 7.2013 7.19935C7.44297 6.95768 7.84297 6.95768 8.08464 7.19935L10.0013 9.11602L11.918 7.19935C12.1596 6.95768 12.5596 6.95768 12.8013 7.19935C13.043 7.44102 13.043 7.84102 12.8013 8.08268L10.8846 9.99935L12.8013 11.916Z" fill="#FF0000" />
                    </svg>
                </div>

                <div class="c_asset_sub_heading">
                    <h5>View Quotation Comparison </h5>
                    <p>Please kindly complete the form to add product registration.</p>
                </div>

                <!-- form  -->
                <div class="asset_filter_form">
                    <div class="common_form">
                        <form action="">
                            <div class="row g-3 align-items-end">

                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input d-flex flex-column gap-2">
                                        <label for="project_name">Project Name <span>*</span></label>
                                        <input type="text" placeholder="Enter your Project Name" name="project_name" id="project_name" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input d-flex flex-column gap-2">
                                        <label for="Description">Description <span>*</span></label>
                                        <input type="text" placeholder="Enter Description" name="Description" id="Description" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input d-flex flex-column gap-2">
                                        <label for="unit">Unit <span>*</span></label>
                                        <input type="number" placeholder="Enter unit" name="unit" id="unit" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                                        <button class="discard popup-btn1" type="button">Back</button>
                                        <button class="discard popup-btn1" type="button">Import</button>
                                        <button type="submit" class="submit popup-btn2 view">View report</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- form  -->
            </div>
        </div>
    </div>
</div>
<!-- Quotation Comparsion view form popup  -->

<?php include 'inc/footer.php' ?>