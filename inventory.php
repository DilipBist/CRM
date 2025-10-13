<?php
$pageTitle = 'Inventory';
include 'inc/header.php'
?>

<section class="admin_container d-flex">


    <!-- SIDE BAR  -->
    <?php
    $currentPage = 'inventory';
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
                    <a href="inventory.php">Inventory Management </a>
                    <span>/</span>
                    <p> Inventory Details</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">

                <?php include 'components/profile.php' ?>


                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- TOP PROFILE HEADER ENDS  -->


        <div class="inventory_page_container pl_pr mb-5">

            <div class="admin_list_heading d-flex align-items-center flex-wrap gap-1 gap-sm-3 justify-content-between pb-4">
                <div class="left_heading">
                    <h3>Inventory Details</h3>
                    <p>You can view the Project list accordingly.</p>
                </div>



                <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                    <!-- <div class="search">
                        <input type="text" placeholder="Search" name="search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div> -->

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
                        <button class="export" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M13.6997 7.41797C16.6997 7.6763 17.9247 9.21797 17.9247 12.593V12.7013C17.9247 16.4263 16.4331 17.918 12.7081 17.918H7.28307C3.55807 17.918 2.06641 16.4263 2.06641 12.7013V12.593C2.06641 9.24297 3.27474 7.7013 6.22474 7.4263" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 12.499V3.01562" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.7923 4.8737L10.0007 2.08203L7.20898 4.8737" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Export
                        </button>
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

                        <a href="#" class="inventory_transfer_btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.66602 10H13.3327" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 13.3346V6.66797" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Transfer
                        </a>
                    </div>
                    <!-- button div ends -->

                    <a href="add-inventory.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M9.99935 18.3327C14.5827 18.3327 18.3327 14.5827 18.3327 9.99935C18.3327 5.41602 14.5827 1.66602 9.99935 1.66602C5.41602 1.66602 1.66602 5.41602 1.66602 9.99935C1.66602 14.5827 5.41602 18.3327 9.99935 18.3327Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.66602 10H13.3327" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 13.3327V6.66602" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Add
                    </a>
                </div>
            </div>

            <!-- inventory chart  -->
            <div class="top_chart_container">

                <div class="card first_card">
                    <div class="d-flex align-items-center gap-3 justify-content-between">
                        <div class="card_div">
                            <p class="card-title">Total Inventory </p>
                            <span>Your Total Balance is</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <h4 class="card-value">Rs.100,000</h4>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45488 5.60777L14 4L12.6198 9.6061L10.898 7.9532L8.12069 10.8463C8.02641 10.9445 7.89615 11 7.76 11C7.62385 11 7.49359 10.9445 7.39931 10.8463L5.36 8.72199L2.36069 11.8463C2.16946 12.0455 1.85294 12.0519 1.65373 11.8607C1.45453 11.6695 1.44807 11.3529 1.63931 11.1537L4.99931 7.65373C5.09359 7.55552 5.22385 7.5 5.36 7.5C5.49615 7.5 5.62641 7.55552 5.72069 7.65373L7.76 9.77801L10.1766 7.26067L8.45488 5.60777Z" fill="#1C1C1C" />
                            </svg>
                        </div>
                    </div>

                    <div class="progress-bar">
                        <div class="progress" style="width: 60%;"></div>
                    </div>

                </div>


                <div class="card second_payment">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div>
                            <p class="card-title">Assets</p>
                            <h2 class="card-value">3,56,792.230 Dr</h2>
                        </div>
                        <div class="calender_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="none">
                                <path d="M11.4638 14.3637C11.4755 12.7815 10.85 11.5301 9.60242 10.6463C8.63883 9.96593 7.46947 9.61101 6.33845 9.26995C3.98237 8.55568 3.2989 8.17946 3.2989 7.05275C3.2989 5.79772 4.92991 5.35118 6.32618 5.35118C7.34304 5.35118 8.51294 5.66734 9.23948 6.13589L10.6798 3.90512C9.73032 3.28955 8.43075 2.86967 7.14746 2.73935V0.65625H4.49039V2.88543C2.12847 3.40501 0.640583 4.94871 0.640583 7.05275C0.640583 8.5263 1.2529 9.6949 2.45708 10.5191C3.37294 11.1483 4.48991 11.4862 5.5689 11.8134C7.8799 12.5119 8.81836 12.9375 8.80768 14.3472L8.80762 14.3576C8.80762 15.5407 7.23968 15.9614 5.89639 15.9614C4.62749 15.9614 3.24763 15.4053 2.46545 14.5785L0.535156 16.4044C1.5257 17.452 2.96486 18.1926 4.49033 18.483V20.6563H7.14746V18.5298C9.77203 18.1541 11.4612 16.5739 11.4638 14.3637Z" fill="#7CAC70" />
                            </svg>
                        </div>
                    </div>
                    <canvas id="lineChart"></canvas>
                </div>


                <div class="card payment_card">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div>
                            <p class="card-title">Product</p>
                            <h2 class="card-value">20</h2>
                        </div>

                        <div class="calender_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M16.3787 2.03125H15.625V1.40625C15.625 1.24049 15.5592 1.08152 15.4419 0.964308C15.3247 0.847098 15.1658 0.78125 15 0.78125C14.8342 0.78125 14.6753 0.847098 14.5581 0.964308C14.4408 1.08152 14.375 1.24049 14.375 1.40625V2.03125H10.625V1.40625C10.625 1.24049 10.5592 1.08152 10.4419 0.964308C10.3247 0.847098 10.1658 0.78125 10 0.78125C9.83424 0.78125 9.67527 0.847098 9.55806 0.964308C9.44085 1.08152 9.375 1.24049 9.375 1.40625V2.03125H5.625V1.40625C5.625 1.24049 5.55915 1.08152 5.44194 0.964308C5.32473 0.847098 5.16576 0.78125 5 0.78125C4.83424 0.78125 4.67527 0.847098 4.55806 0.964308C4.44085 1.08152 4.375 1.24049 4.375 1.40625V2.03125H3.62125C2.99266 2.03224 2.3901 2.28239 1.94562 2.72687C1.50114 3.17135 1.25099 3.77391 1.25 4.4025V17.16C1.25099 17.7885 1.50114 18.3911 1.94562 18.8356C2.3901 19.2801 2.99266 19.5303 3.62125 19.5312H16.3787C17.0073 19.5303 17.6099 19.2801 18.0544 18.8356C18.4989 18.3911 18.749 17.7885 18.75 17.16V4.4025C18.749 3.77391 18.4989 3.17135 18.0544 2.72687C17.6099 2.28239 17.0073 2.03224 16.3787 2.03125ZM17.5 17.16C17.499 17.4571 17.3806 17.7416 17.1705 17.9517C16.9604 18.1618 16.6758 18.2803 16.3787 18.2812H3.62125C3.32418 18.2803 3.03956 18.1618 2.8295 17.9517C2.61944 17.7416 2.50099 17.4571 2.5 17.16V4.4025C2.50099 4.10543 2.61944 3.82081 2.8295 3.61075C3.03956 3.40069 3.32418 3.28224 3.62125 3.28125H4.375V3.90625C4.375 4.07201 4.44085 4.23098 4.55806 4.34819C4.67527 4.4654 4.83424 4.53125 5 4.53125C5.16576 4.53125 5.32473 4.4654 5.44194 4.34819C5.55915 4.23098 5.625 4.07201 5.625 3.90625V3.28125H9.375V3.90625C9.375 4.07201 9.44085 4.23098 9.55806 4.34819C9.67527 4.4654 9.83424 4.53125 10 4.53125C10.1658 4.53125 10.3247 4.4654 10.4419 4.34819C10.5592 4.23098 10.625 4.07201 10.625 3.90625V3.28125H14.375V3.90625C14.375 4.07201 14.4408 4.23098 14.5581 4.34819C14.6753 4.4654 14.8342 4.53125 15 4.53125C15.1658 4.53125 15.3247 4.4654 15.4419 4.34819C15.5592 4.23098 15.625 4.07201 15.625 3.90625V3.28125H16.3787C16.6758 3.28224 16.9604 3.40069 17.1705 3.61075C17.3806 3.82081 17.499 4.10543 17.5 4.4025V17.16Z" fill="#0D99FF" />
                                <path d="M7.68299 7.21451L6.24987 8.64764L5.44174 7.83951C5.38409 7.77982 5.31512 7.7322 5.23887 7.69945C5.16262 7.66669 5.08061 7.64945 4.99762 7.64873C4.91463 7.64801 4.83233 7.66382 4.75552 7.69525C4.67871 7.72667 4.60893 7.77308 4.55025 7.83176C4.49156 7.89045 4.44516 7.96023 4.41373 8.03704C4.38231 8.11385 4.36649 8.19615 4.36721 8.27914C4.36793 8.36212 4.38518 8.44414 4.41793 8.52039C4.45069 8.59664 4.4983 8.66561 4.55799 8.72326L5.80799 9.97326C5.9252 10.0904 6.08414 10.1562 6.24987 10.1562C6.4156 10.1562 6.57454 10.0904 6.69174 9.97326L8.56674 8.09826C8.68059 7.98038 8.74359 7.82251 8.74217 7.65863C8.74074 7.49476 8.67501 7.338 8.55913 7.22212C8.44325 7.10624 8.28649 7.04051 8.12262 7.03909C7.95875 7.03766 7.80087 7.10066 7.68299 7.21451Z" fill="#0D99FF" />
                                <path d="M15 8.28125H10.625C10.4592 8.28125 10.3003 8.3471 10.1831 8.46431C10.0658 8.58152 10 8.74049 10 8.90625C10 9.07201 10.0658 9.23098 10.1831 9.34819C10.3003 9.4654 10.4592 9.53125 10.625 9.53125H15C15.1658 9.53125 15.3247 9.4654 15.4419 9.34819C15.5592 9.23098 15.625 9.07201 15.625 8.90625C15.625 8.74049 15.5592 8.58152 15.4419 8.46431C15.3247 8.3471 15.1658 8.28125 15 8.28125Z" fill="#0D99FF" />
                                <path d="M7.68299 12.8395L6.24987 14.2726L5.44174 13.4645C5.38409 13.4048 5.31512 13.3572 5.23887 13.3245C5.16262 13.2917 5.08061 13.2745 4.99762 13.2737C4.91463 13.273 4.83233 13.2888 4.75552 13.3203C4.67871 13.3517 4.60893 13.3981 4.55025 13.4568C4.49156 13.5155 4.44516 13.5852 4.41373 13.662C4.38231 13.7389 4.36649 13.8212 4.36721 13.9041C4.36793 13.9871 4.38518 14.0691 4.41793 14.1454C4.45069 14.2217 4.4983 14.2906 4.55799 14.3483L5.80799 15.5983C5.9252 15.7154 6.08414 15.7813 6.24987 15.7813C6.4156 15.7813 6.57454 15.7154 6.69174 15.5983L8.56674 13.7233C8.68059 13.6054 8.74359 13.4475 8.74217 13.2836C8.74074 13.1198 8.67501 12.963 8.55913 12.8471C8.44325 12.7313 8.28649 12.6655 8.12262 12.6641C7.95875 12.6627 7.80087 12.7257 7.68299 12.8395Z" fill="#0D99FF" />
                                <path d="M15 13.9062H10.625C10.4592 13.9062 10.3003 13.972 10.1831 14.0893C10.0658 14.2065 10 14.3654 10 14.5312C10 14.697 10.0658 14.856 10.1831 14.9732C10.3003 15.0905 10.4592 15.1562 10.625 15.1562H15C15.1658 15.1562 15.3247 15.0905 15.4419 14.9732C15.5592 14.856 15.625 14.697 15.625 14.5312C15.625 14.3654 15.5592 14.2065 15.4419 14.0893C15.3247 13.972 15.1658 13.9062 15 13.9062Z" fill="#0D99FF" />
                            </svg>
                        </div>
                    </div>
                    <div class="payment_small_title d-flex align-items-center gap-2 justify-content-between flex-wrap">
                        <small class="card-subtitle">Payment Not Finished</small>
                        <div>
                            20/28
                        </div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 70%;"></div>
                    </div>
                </div>


                <div class="d-flex align-items-center gap-4 donut_chart">
                    <div class=" position-relative piechard_relative">
                        <canvas id="pieChart">
                        </canvas>
                        <div class="canvus_content">
                            <h6>62</h6>
                            <p>Completed</p>
                        </div>
                    </div>
                    <div>
                        <p class="p-title">Total Stock Transfer</p>
                        <div class="legend">
                            <div><span style="background-color: var(--green-donutchart)"></span> Complete</div>
                            <div><span style="background-color: var(--blue-donutchart)"></span> Pending</div>
                            <div><span style="background-color: var(--black-donutchart)"></span> Not Start</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- inventory chart  -->


            <div class="inventory_table common_table">
                <div class="common_print_header">
                    <div class="print-header">
                        <div class="prit_logo">
                            <img src="assets/images/logo.svg" alt="logo">
                        </div>
                        <h3>Inventory Details</h3>
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
                                    <th scope="col">PO Number</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" class="wrap_Text">Products</th>
                                    <th scope="col" class="wrap_Text">Warehouse</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (array_slice($projectList, 0, 10) as $project): ?>
                                    <tr>
                                        <th scope="row"><?= $project['code'] ?></th>
                                        <td><?= $project['date'] ?></td>
                                        <td class="wrap_Text"><?= $project['acc_g_name'] ?></td>
                                        <td class="wrap_Text"><?= $project['warehouse'] ?></td>
                                        <td><?= $project['Quantity'] ?></td>
                                        <td><?= $project['rate'] ?></td>
                                        <td><?= $project['rate'] ?></td>
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




<!-- search inventory form  popup  -->
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
                    <p>Please kindly complete the form of General ledger</p>
                </div>

                <!-- add asset form  -->
                <div class="asset_filter_form">
                    <div class="common_form">
                        <form action="">
                            <div class="row g-3 align-items-end">

                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input d-flex flex-column gap-2 position-relative">
                                        <label for="start_date">Form Date</label>
                                        <input type="text" class="date-picker" id="start_date" name="start_date" placeholder="MM/DD/YYYY">
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

                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input d-flex flex-column gap-2 position-relative">
                                        <label for="end_date">To Date</label>
                                        <input type="text" class="date-picker" id="end_date" name="end_date" placeholder="MM/DD/YYYY">
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


                                <div class="col-md-6 col-lg-4  slect-status">
                                    <label for="Branch" class="mb-2">Branch <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45703L11.1671 12.8904C10.5254 13.532 9.47539 13.532 8.83372 12.8904L3.40039 7.45703" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="Branch" name="Branch" required>

                                        <option value="" hidden disabled selected>Head Office</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-md-6 col-lg-4  slect-status">
                                    <label for="Project" class="mb-2">Project <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45703L11.1671 12.8904C10.5254 13.532 9.47539 13.532 8.83372 12.8904L3.40039 7.45703" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="Project" name="Project" required>

                                        <option value="" hidden disabled selected>Select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-md-6 col-lg-4  slect-status">
                                    <label for="Product" class="mb-2">Product <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45703L11.1671 12.8904C10.5254 13.532 9.47539 13.532 8.83372 12.8904L3.40039 7.45703" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="Product" name="Product" required>

                                        <option value="" hidden disabled selected>Enter</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-md-6 col-lg-4  slect-status">
                                    <label for="ReportType" class="mb-2">Report Type <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45703L11.1671 12.8904C10.5254 13.532 9.47539 13.532 8.83372 12.8904L3.40039 7.45703" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="ReportType" name="ReportType" required>

                                        <option value="" hidden disabled selected>Product Summary</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>


                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input mb-2">
                                        <label>Inventory to Sub Contractor</label>
                                    </div>
                                    <div class="loc_selct_box">
                                        <div class="btn-box">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-4  ">
                                    <div class="locationData">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="contracter_name">Name of Sub Contractor</label>
                                            <input type="text" placeholder="Enter a Name" name="contracter_name" id="project_name">
                                        </div>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                                        <button class="discard popup-btn1" type="button">Back</button>
                                        <!-- use button if need the button tag  -->
                                        <!-- <button type="submit" class="submit popup-btn2 view">View report</button> -->
                                        <a href="search-inventory.php" class="submit popup-btn2 view">View report</a>
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
<!-- search inventory form popup  -->

<?php include 'inc/footer.php' ?>