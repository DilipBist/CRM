<?php
$pageTitle = 'Receptionist Dashboard';
include 'inc/header.php';
?>

<section class="admin_container d-flex">


    <!-- SIDE BAR  -->
    <?php
    $currentPage = 'dashboard';
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
                    <a href="#">Overview</a>
                    <span>/</span>
                    <p>Dashboard</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">

                <div class="d-none d-sm-block">
                    <?php include 'components/search.php' ?>
                </div>
                <?php include 'components/profile.php' ?>
                <?php include 'components/notification.php' ?>

            </div>
        </div>
        <!-- TOP PROFILE HEADER ENDS  -->

        <!-- dashboard container  -->
        <div class="dashboard_page_container pl_pr mb-5">

            <div class="dash_heading">
                <h3>Hello Rohan, </h3>
                <p>You can view the Product list accordingly.</p>
            </div>

            <!-- top card data  -->
            <div class="purchase_dashboard_common_card_wrapper">
                <div class="common_card c_div light_blue">
                    <div class="d-flex justify-content-between w-100 g-3">
                        <div class="heading">
                            <h4>Labour Management</h4>
                            <div class="numbering">
                                124
                            </div>
                        </div>

                        <div class="icon d-flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <g clip-path="url(#clip0_21287_106652)">
                                    <path d="M8 8.5H11V5.5" stroke="#F54900" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11 8.5L6.75 4.25L4.25 6.75L1 3.5" stroke="#F54900" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_21287_106652">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="clock_sign white_bg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_21318_92859)">
                                        <path d="M10.6654 14V12.6667C10.6654 11.9594 10.3844 11.2811 9.88432 10.781C9.38422 10.281 8.70594 10 7.9987 10H3.9987C3.29145 10 2.61318 10.281 2.11308 10.781C1.61298 11.2811 1.33203 11.9594 1.33203 12.6667V14" stroke="#155DFC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.9987 7.33333C7.47146 7.33333 8.66536 6.13943 8.66536 4.66667C8.66536 3.19391 7.47146 2 5.9987 2C4.52594 2 3.33203 3.19391 3.33203 4.66667C3.33203 6.13943 4.52594 7.33333 5.9987 7.33333Z" stroke="#155DFC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.668 5.33301V9.33301" stroke="#155DFC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.668 7.33301H10.668" stroke="#155DFC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_21318_92859">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-4">
                        <div class="progress w-100" style="height: 8px;">
                            <div class="progressBar" style="width: 60%;"></div>
                        </div>
                        <small>84%</small>
                    </div>
                </div>

                <div class="common_card c_div light_grey">
                    <div class="d-flex justify-content-between w-100 g-3">
                        <div class="heading">
                            <h4>Purchase Entry</h4>
                            <div class="numbering">
                                42
                            </div>
                        </div>

                        <div class="icon d-flex gap-2">
                            <div class="clock_sign light_green">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M3.33203 8H12.6654" stroke="#009966" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8 3.33301V12.6663" stroke="#009966" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="line_chart">
                        <canvas id="lineChart" style="width: 100%; "></canvas>
                    </div>
                </div>

                <div class="common_card c_div light_blue">
                    <div class="d-flex justify-content-between w-100 g-3">
                        <div class="heading">
                            <h4>Supplier Network</h4>
                            <div class="numbering">
                                24
                            </div>
                        </div>

                        <div class="icon d-flex gap-2">
                            <div class="d-flex gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M8 3.5H11V6.5" stroke="#155DFC" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11 3.5L6.75 7.75L4.25 5.25L1 8.5" stroke="#155DFC" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <div class="inctext">
                                    +3
                                </div>
                            </div>
                            <div class="clock_sign light_green2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_21318_92920)">
                                        <path d="M10.6654 14V12.6667C10.6654 11.9594 10.3844 11.2811 9.88432 10.781C9.38422 10.281 8.70594 10 7.9987 10H3.9987C3.29145 10 2.61318 10.281 2.11308 10.781C1.61298 11.2811 1.33203 11.9594 1.33203 12.6667V14" stroke="#7F22FE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.668 2.08496C11.2398 2.23321 11.7462 2.56714 12.1078 3.03434C12.4693 3.50153 12.6654 4.07555 12.6654 4.66629C12.6654 5.25703 12.4693 5.83105 12.1078 6.29825C11.7462 6.76545 11.2398 7.09938 10.668 7.24763" stroke="#7F22FE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.668 14.0002V12.6669C14.6675 12.0761 14.4709 11.5021 14.1089 11.0351C13.7469 10.5682 13.2401 10.2346 12.668 10.0869" stroke="#7F22FE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.9987 7.33333C7.47146 7.33333 8.66536 6.13943 8.66536 4.66667C8.66536 3.19391 7.47146 2 5.9987 2C4.52594 2 3.33203 3.19391 3.33203 4.66667C3.33203 6.13943 4.52594 7.33333 5.9987 7.33333Z" stroke="#7F22FE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_21318_92920">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-4">
                        <div class="progress w-100" style="height: 8px;">
                            <div class="progressBar" style="width: 60%;"></div>
                        </div>
                        <small>18/24</small>
                    </div>
                </div>

                <div class="common_card c_div light_grey">
                    <div class="d-flex justify-content-between w-100 g-3">
                        <div class="heading">
                            <h4>Reports</h4>
                            <div class="numbering">
                                Rs 36,00,000
                            </div>
                        </div>

                        <div class="icon d-flex gap-2">
                            <div class="clock_sign light_orange">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M10.0013 1.33301H4.0013C3.64768 1.33301 3.30854 1.47348 3.05849 1.72353C2.80844 1.97358 2.66797 2.31272 2.66797 2.66634V13.333C2.66797 13.6866 2.80844 14.0258 3.05849 14.2758C3.30854 14.5259 3.64768 14.6663 4.0013 14.6663H12.0013C12.3549 14.6663 12.6941 14.5259 12.9441 14.2758C13.1942 14.0258 13.3346 13.6866 13.3346 13.333V4.66634L10.0013 1.33301Z" stroke="#E17100" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.33203 1.33301V3.99967C9.33203 4.3533 9.47251 4.69244 9.72256 4.94248C9.9726 5.19253 10.3117 5.33301 10.6654 5.33301H13.332" stroke="#E17100" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.66536 6H5.33203" stroke="#E17100" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.6654 8.66699H5.33203" stroke="#E17100" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.6654 11.333H5.33203" stroke="#E17100" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-4">
                        <div class="progress w-100" style="height: 8px;">
                            <div class="progressBar" style="width: 60%;"></div>
                        </div>
                        <small>Rs 10,000</small>
                    </div>
                </div>
            </div>
            <!-- top card data  -->


            <div class="receiptionist_dashboard_data_container mt-4">
                <!-- ROW  -->
                <div class="row g-3">
                    <div class="col-lg-8">
                        <div class="left_div_wrapper">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="new_purchase_wrapper d-flex flex-column gap-3 g-lg-4 h-100">
                                        <div class="heading d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                            <h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_21318_92952)">
                                                        <path d="M6.66536 18.3337C7.1256 18.3337 7.4987 17.9606 7.4987 17.5003C7.4987 17.0401 7.1256 16.667 6.66536 16.667C6.20513 16.667 5.83203 17.0401 5.83203 17.5003C5.83203 17.9606 6.20513 18.3337 6.66536 18.3337Z" stroke="#2B7FFF" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M15.8333 18.3337C16.2936 18.3337 16.6667 17.9606 16.6667 17.5003C16.6667 17.0401 16.2936 16.667 15.8333 16.667C15.3731 16.667 15 17.0401 15 17.5003C15 17.9606 15.3731 18.3337 15.8333 18.3337Z" stroke="#2B7FFF" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M1.70703 1.70801H3.3737L5.59036 12.058C5.67168 12.4371 5.88259 12.7759 6.18679 13.0162C6.49099 13.2565 6.86945 13.3833 7.25703 13.3747H15.407C15.7863 13.3741 16.1541 13.2441 16.4496 13.0062C16.745 12.7683 16.9505 12.4368 17.032 12.0663L18.407 5.87467H4.26536" stroke="#2B7FFF" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21318_92952">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                New Purchase Entries
                                            </h4>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M3.33203 8H12.6654" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 3.33301V12.6663" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Add Purchase
                                            </button>
                                        </div>

                                        <div class="sec_heading">
                                            <h4>Today's Entries</h4>
                                            <p>8 new</p>
                                        </div>

                                        <div class="data_show_grid d-flex flex-column gap-3">
                                            <h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M10.668 4.66699H14.668V8.66699" stroke="#009966" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.6654 4.66699L8.9987 10.3337L5.66536 7.00033L1.33203 11.3337" stroke="#009966" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                +3 more than yesterday
                                            </h4>

                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <div class="box bx">
                                                        <h5>This Week</h5>
                                                        <p>42</p>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="box2 bx">
                                                        <h5>This Week</h5>
                                                        <p>42</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="pending_approvals_wrapper h-100">
                                        <div class="heading">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_21318_92988)">
                                                    <path d="M10 5V10L13.3333 11.6667" stroke="#FF6900" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10.0013 18.3337C14.6037 18.3337 18.3346 14.6027 18.3346 10.0003C18.3346 5.39795 14.6037 1.66699 10.0013 1.66699C5.39893 1.66699 1.66797 5.39795 1.66797 10.0003C1.66797 14.6027 5.39893 18.3337 10.0013 18.3337Z" stroke="#FF6900" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_21318_92988">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Pending Approvals
                                        </div>
                                        <div class="pending_text_wrapper mt-3 mt-lg-4">
                                            <div class="d-flex align-items-center justify-content-between gap-2 p_heading">
                                                <h4>Total Pending</h4>
                                                <p>22 orders</p>
                                            </div>
                                            <div class="d-flex flex-column gap-3 mt-3 mt-lg-4">
                                                <div class="urgent d-flex align-items-center justify-content-between gap-2">
                                                    <h4>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <g clip-path="url(#clip0_21318_93001)">
                                                                <path d="M7.9987 14.6663C11.6806 14.6663 14.6654 11.6816 14.6654 7.99967C14.6654 4.31778 11.6806 1.33301 7.9987 1.33301C4.3168 1.33301 1.33203 4.31778 1.33203 7.99967C1.33203 11.6816 4.3168 14.6663 7.9987 14.6663Z" stroke="#FB2C36" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M8 5.33301V7.99967" stroke="#FB2C36" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M8 10.667H8.00667" stroke="#FB2C36" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_21318_93001">
                                                                    <rect width="16" height="16" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        Urgent
                                                    </h4>
                                                    <div class="bx light_red_bg">
                                                        2
                                                    </div>
                                                </div>
                                                <div class="urgent d-flex align-items-center justify-content-between gap-2">
                                                    <h4>
                                                        High Priority
                                                    </h4>
                                                    <div class="bx light_orange_bg">
                                                        7
                                                    </div>
                                                </div>
                                                <div class="urgent d-flex align-items-center justify-content-between gap-2">
                                                    <h4>
                                                        Normal
                                                    </h4>
                                                    <div class="bx light_blue_bg">
                                                        12
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="recent_purchase_wrapper mt-3">
                                <div class="heading">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M3.33203 1.66699V18.3337L4.9987 17.5003L6.66536 18.3337L8.33203 17.5003L9.9987 18.3337L11.6654 17.5003L13.332 18.3337L14.9987 17.5003L16.6654 18.3337V1.66699L14.9987 2.50033L13.332 1.66699L11.6654 2.50033L9.9987 1.66699L8.33203 2.50033L6.66536 1.66699L4.9987 2.50033L3.33203 1.66699Z" stroke="#00BC7D" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.3346 6.66699H8.33464C7.89261 6.66699 7.46869 6.84259 7.15612 7.15515C6.84356 7.46771 6.66797 7.89163 6.66797 8.33366C6.66797 8.77569 6.84356 9.19961 7.15612 9.51217C7.46869 9.82473 7.89261 10.0003 8.33464 10.0003H11.668C12.11 10.0003 12.5339 10.1759 12.8465 10.4885C13.159 10.801 13.3346 11.225 13.3346 11.667C13.3346 12.109 13.159 12.5329 12.8465 12.8455C12.5339 13.1581 12.11 13.3337 11.668 13.3337H6.66797" stroke="#00BC7D" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10 14.5837V5.41699" stroke="#00BC7D" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Recent Purchase Records
                                </div>

                                <div class="record_box_wrapper mt-3 d-flex flex-column gap-3">

                                    <div class="record_box">
                                        <div class="left">
                                            <h4>Cement Bags (50kg)</h4>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="date d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M4 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M9.5 2H2.5C1.94772 2 1.5 2.44772 1.5 3V10C1.5 10.5523 1.94772 11 2.5 11H9.5C10.0523 11 10.5 10.5523 10.5 10V3C10.5 2.44772 10.0523 2 9.5 2Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M1.5 5H10.5" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    Nov 6, 2025
                                                </div>
                                                <div class="builder d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <g clip-path="url(#clip0_21318_93298)">
                                                                <path d="M3 11V2C3 1.73478 3.10536 1.48043 3.29289 1.29289C3.48043 1.10536 3.73478 1 4 1H8C8.26522 1 8.51957 1.10536 8.70711 1.29289C8.89464 1.48043 9 1.73478 9 2V11H3Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M3 6H2C1.73478 6 1.48043 6.10536 1.29289 6.29289C1.10536 6.48043 1 6.73478 1 7V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M9 4.5H10C10.2652 4.5 10.5196 4.60536 10.7071 4.79289C10.8946 4.98043 11 5.23478 11 5.5V10C11 10.2652 10.8946 10.5196 10.7071 10.7071C10.5196 10.8946 10.2652 11 10 11H9" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 3H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 5H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 7H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 9H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_21318_93298">
                                                                    <rect width="12" height="12" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    BuildMart Supplies
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right_price">
                                            <span style="margin-right: 5px;">₹ </span>4,250
                                        </div>
                                    </div>
                                    <div class="record_box">
                                        <div class="left">
                                            <h4>Cement Bags (50kg)</h4>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="date d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M4 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M9.5 2H2.5C1.94772 2 1.5 2.44772 1.5 3V10C1.5 10.5523 1.94772 11 2.5 11H9.5C10.0523 11 10.5 10.5523 10.5 10V3C10.5 2.44772 10.0523 2 9.5 2Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M1.5 5H10.5" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    Nov 6, 2025
                                                </div>
                                                <div class="builder d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <g clip-path="url(#clip0_21318_93298)">
                                                                <path d="M3 11V2C3 1.73478 3.10536 1.48043 3.29289 1.29289C3.48043 1.10536 3.73478 1 4 1H8C8.26522 1 8.51957 1.10536 8.70711 1.29289C8.89464 1.48043 9 1.73478 9 2V11H3Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M3 6H2C1.73478 6 1.48043 6.10536 1.29289 6.29289C1.10536 6.48043 1 6.73478 1 7V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M9 4.5H10C10.2652 4.5 10.5196 4.60536 10.7071 4.79289C10.8946 4.98043 11 5.23478 11 5.5V10C11 10.2652 10.8946 10.5196 10.7071 10.7071C10.5196 10.8946 10.2652 11 10 11H9" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 3H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 5H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 7H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 9H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_21318_93298">
                                                                    <rect width="12" height="12" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    BuildMart Supplies
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right_price">
                                            <span style="margin-right: 5px;">₹ </span>4,250
                                        </div>
                                    </div>
                                    <div class="record_box">
                                        <div class="left">
                                            <h4>Cement Bags (50kg)</h4>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="date d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M4 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M9.5 2H2.5C1.94772 2 1.5 2.44772 1.5 3V10C1.5 10.5523 1.94772 11 2.5 11H9.5C10.0523 11 10.5 10.5523 10.5 10V3C10.5 2.44772 10.0523 2 9.5 2Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M1.5 5H10.5" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    Nov 6, 2025
                                                </div>
                                                <div class="builder d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <g clip-path="url(#clip0_21318_93298)">
                                                                <path d="M3 11V2C3 1.73478 3.10536 1.48043 3.29289 1.29289C3.48043 1.10536 3.73478 1 4 1H8C8.26522 1 8.51957 1.10536 8.70711 1.29289C8.89464 1.48043 9 1.73478 9 2V11H3Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M3 6H2C1.73478 6 1.48043 6.10536 1.29289 6.29289C1.10536 6.48043 1 6.73478 1 7V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M9 4.5H10C10.2652 4.5 10.5196 4.60536 10.7071 4.79289C10.8946 4.98043 11 5.23478 11 5.5V10C11 10.2652 10.8946 10.5196 10.7071 10.7071C10.5196 10.8946 10.2652 11 10 11H9" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 3H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 5H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 7H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 9H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_21318_93298">
                                                                    <rect width="12" height="12" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    BuildMart Supplies
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right_price">
                                            <span style="margin-right: 5px;">₹ </span>4,250
                                        </div>
                                    </div>
                                    <div class="record_box">
                                        <div class="left">
                                            <h4>Cement Bags (50kg)</h4>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="date d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M4 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M9.5 2H2.5C1.94772 2 1.5 2.44772 1.5 3V10C1.5 10.5523 1.94772 11 2.5 11H9.5C10.0523 11 10.5 10.5523 10.5 10V3C10.5 2.44772 10.0523 2 9.5 2Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M1.5 5H10.5" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    Nov 6, 2025
                                                </div>
                                                <div class="builder d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <g clip-path="url(#clip0_21318_93298)">
                                                                <path d="M3 11V2C3 1.73478 3.10536 1.48043 3.29289 1.29289C3.48043 1.10536 3.73478 1 4 1H8C8.26522 1 8.51957 1.10536 8.70711 1.29289C8.89464 1.48043 9 1.73478 9 2V11H3Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M3 6H2C1.73478 6 1.48043 6.10536 1.29289 6.29289C1.10536 6.48043 1 6.73478 1 7V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M9 4.5H10C10.2652 4.5 10.5196 4.60536 10.7071 4.79289C10.8946 4.98043 11 5.23478 11 5.5V10C11 10.2652 10.8946 10.5196 10.7071 10.7071C10.5196 10.8946 10.2652 11 10 11H9" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 3H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 5H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 7H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 9H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_21318_93298">
                                                                    <rect width="12" height="12" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    BuildMart Supplies
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right_price">
                                            <span style="margin-right: 5px;">₹ </span>4,250
                                        </div>
                                    </div>
                                    <div class="record_box">
                                        <div class="left">
                                            <h4>Cement Bags (50kg)</h4>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="date d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M4 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M9.5 2H2.5C1.94772 2 1.5 2.44772 1.5 3V10C1.5 10.5523 1.94772 11 2.5 11H9.5C10.0523 11 10.5 10.5523 10.5 10V3C10.5 2.44772 10.0523 2 9.5 2Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M1.5 5H10.5" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    Nov 6, 2025
                                                </div>
                                                <div class="builder d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <g clip-path="url(#clip0_21318_93298)">
                                                                <path d="M3 11V2C3 1.73478 3.10536 1.48043 3.29289 1.29289C3.48043 1.10536 3.73478 1 4 1H8C8.26522 1 8.51957 1.10536 8.70711 1.29289C8.89464 1.48043 9 1.73478 9 2V11H3Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M3 6H2C1.73478 6 1.48043 6.10536 1.29289 6.29289C1.10536 6.48043 1 6.73478 1 7V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M9 4.5H10C10.2652 4.5 10.5196 4.60536 10.7071 4.79289C10.8946 4.98043 11 5.23478 11 5.5V10C11 10.2652 10.8946 10.5196 10.7071 10.7071C10.5196 10.8946 10.2652 11 10 11H9" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 3H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 5H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 7H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 9H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_21318_93298">
                                                                    <rect width="12" height="12" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    BuildMart Supplies
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right_price">
                                            <span style="margin-right: 5px;">₹ </span>4,250
                                        </div>
                                    </div>
                                    <div class="record_box">
                                        <div class="left">
                                            <h4>Cement Bags (50kg)</h4>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="date d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M4 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 1V3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M9.5 2H2.5C1.94772 2 1.5 2.44772 1.5 3V10C1.5 10.5523 1.94772 11 2.5 11H9.5C10.0523 11 10.5 10.5523 10.5 10V3C10.5 2.44772 10.0523 2 9.5 2Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M1.5 5H10.5" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    Nov 6, 2025
                                                </div>
                                                <div class="builder d-flex align-items-center gap-2">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <g clip-path="url(#clip0_21318_93298)">
                                                                <path d="M3 11V2C3 1.73478 3.10536 1.48043 3.29289 1.29289C3.48043 1.10536 3.73478 1 4 1H8C8.26522 1 8.51957 1.10536 8.70711 1.29289C8.89464 1.48043 9 1.73478 9 2V11H3Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M3 6H2C1.73478 6 1.48043 6.10536 1.29289 6.29289C1.10536 6.48043 1 6.73478 1 7V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H3" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M9 4.5H10C10.2652 4.5 10.5196 4.60536 10.7071 4.79289C10.8946 4.98043 11 5.23478 11 5.5V10C11 10.2652 10.8946 10.5196 10.7071 10.7071C10.5196 10.8946 10.2652 11 10 11H9" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 3H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 5H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 7H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M5 9H7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_21318_93298">
                                                                    <rect width="12" height="12" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    BuildMart Supplies
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right_price">
                                            <span style="margin-right: 5px;">₹ </span>4,250
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="shifts_and_sites_wrapper mt-3">
                                <div class="heading">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6654 8.33366C16.6654 12.4945 12.0495 16.8278 10.4995 18.1662C10.3551 18.2747 10.1794 18.3335 9.9987 18.3335C9.81803 18.3335 9.64226 18.2747 9.49786 18.1662C7.94786 16.8278 3.33203 12.4945 3.33203 8.33366C3.33203 6.56555 4.03441 4.86986 5.28465 3.61961C6.5349 2.36937 8.23059 1.66699 9.9987 1.66699C11.7668 1.66699 13.4625 2.36937 14.7127 3.61961C15.963 4.86986 16.6654 6.56555 16.6654 8.33366Z" stroke="#2B7FFF" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10 10.833C11.3807 10.833 12.5 9.71372 12.5 8.33301C12.5 6.9523 11.3807 5.83301 10 5.83301C8.61929 5.83301 7.5 6.9523 7.5 8.33301C7.5 9.71372 8.61929 10.833 10 10.833Z" stroke="#2B7FFF" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Shift & Site Assignment
                                </div>

                                <div class="inner_div_container d-flex flex-column gap-3 mt-3 mt-lg-4">
                                    <div class="box_wrapper d-flex gap-2 justify-content-between align-items-start">
                                        <div class="left">
                                            <h3>Downtown Plaza Construction</h3>
                                            <div class="time">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                    <g clip-path="url(#clip0_21329_93952)">
                                                        <path d="M6 3V6L8 7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21329_93952">
                                                            <rect width="12" height="12" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                6:00 AM - 2:00 PM
                                            </div>
                                            <div class="d-flex align-items-center gap-2 d-lg-block">
                                                <div class="workers">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                        <path d="M8 10.5V9.5C8 8.96957 7.78929 8.46086 7.41421 8.08579C7.03914 7.71071 6.53043 7.5 6 7.5H3C2.46957 7.5 1.96086 7.71071 1.58579 8.08579C1.21071 8.46086 1 8.96957 1 9.5V10.5" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8 1.56445C8.42888 1.67564 8.8087 1.92609 9.07984 2.27648C9.35098 2.62688 9.4981 3.0574 9.4981 3.50045C9.4981 3.94351 9.35098 4.37402 9.07984 4.72442C8.8087 5.07482 8.42888 5.32527 8 5.43645" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11 10.4995V9.49945C10.9997 9.05632 10.8522 8.62584 10.5807 8.27561C10.3092 7.92538 9.92906 7.67524 9.5 7.56445" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M4.5 5.5C5.60457 5.5 6.5 4.60457 6.5 3.5C6.5 2.39543 5.60457 1.5 4.5 1.5C3.39543 1.5 2.5 2.39543 2.5 3.5C2.5 4.60457 3.39543 5.5 4.5 5.5Z" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    28 workers
                                                </div>
                                                <div class="status">
                                                    assigned
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right morning">
                                            Morning
                                        </div>
                                    </div>
                                    <div class="box_wrapper d-flex gap-2 justify-content-between align-items-start">
                                        <div class="left">
                                            <h3>Downtown Plaza Construction</h3>
                                            <div class="time">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                    <g clip-path="url(#clip0_21329_93952)">
                                                        <path d="M6 3V6L8 7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21329_93952">
                                                            <rect width="12" height="12" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                6:00 AM - 2:00 PM
                                            </div>
                                            <div class="d-flex align-items-center gap-2 d-lg-block">
                                                <div class="workers">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                        <path d="M8 10.5V9.5C8 8.96957 7.78929 8.46086 7.41421 8.08579C7.03914 7.71071 6.53043 7.5 6 7.5H3C2.46957 7.5 1.96086 7.71071 1.58579 8.08579C1.21071 8.46086 1 8.96957 1 9.5V10.5" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8 1.56445C8.42888 1.67564 8.8087 1.92609 9.07984 2.27648C9.35098 2.62688 9.4981 3.0574 9.4981 3.50045C9.4981 3.94351 9.35098 4.37402 9.07984 4.72442C8.8087 5.07482 8.42888 5.32527 8 5.43645" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11 10.4995V9.49945C10.9997 9.05632 10.8522 8.62584 10.5807 8.27561C10.3092 7.92538 9.92906 7.67524 9.5 7.56445" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M4.5 5.5C5.60457 5.5 6.5 4.60457 6.5 3.5C6.5 2.39543 5.60457 1.5 4.5 1.5C3.39543 1.5 2.5 2.39543 2.5 3.5C2.5 4.60457 3.39543 5.5 4.5 5.5Z" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    28 workers
                                                </div>
                                                <div class="status">
                                                    assigned
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right afternoon">
                                            Afternoon
                                        </div>
                                    </div>
                                    <div class="box_wrapper d-flex gap-2 justify-content-between align-items-start">
                                        <div class="left">
                                            <h3>Downtown Plaza Construction</h3>
                                            <div class="time">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                    <g clip-path="url(#clip0_21329_93952)">
                                                        <path d="M6 3V6L8 7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21329_93952">
                                                            <rect width="12" height="12" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                6:00 AM - 2:00 PM
                                            </div>
                                            <div class="d-flex align-items-center gap-2 d-lg-block">
                                                <div class="workers">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                        <path d="M8 10.5V9.5C8 8.96957 7.78929 8.46086 7.41421 8.08579C7.03914 7.71071 6.53043 7.5 6 7.5H3C2.46957 7.5 1.96086 7.71071 1.58579 8.08579C1.21071 8.46086 1 8.96957 1 9.5V10.5" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8 1.56445C8.42888 1.67564 8.8087 1.92609 9.07984 2.27648C9.35098 2.62688 9.4981 3.0574 9.4981 3.50045C9.4981 3.94351 9.35098 4.37402 9.07984 4.72442C8.8087 5.07482 8.42888 5.32527 8 5.43645" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11 10.4995V9.49945C10.9997 9.05632 10.8522 8.62584 10.5807 8.27561C10.3092 7.92538 9.92906 7.67524 9.5 7.56445" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M4.5 5.5C5.60457 5.5 6.5 4.60457 6.5 3.5C6.5 2.39543 5.60457 1.5 4.5 1.5C3.39543 1.5 2.5 2.39543 2.5 3.5C2.5 4.60457 3.39543 5.5 4.5 5.5Z" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    28 workers
                                                </div>
                                                <div class="status">
                                                    assigned
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right morning">
                                            Morning
                                        </div>
                                    </div>
                                    <div class="box_wrapper d-flex gap-2 justify-content-between align-items-start">
                                        <div class="left">
                                            <h3>Downtown Plaza Construction</h3>
                                            <div class="time">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                    <g clip-path="url(#clip0_21329_93952)">
                                                        <path d="M6 3V6L8 7" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#62748E" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21329_93952">
                                                            <rect width="12" height="12" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                6:00 AM - 2:00 PM
                                            </div>
                                            <div class="d-flex align-items-center gap-2 d-lg-block">
                                                <div class="workers">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                        <path d="M8 10.5V9.5C8 8.96957 7.78929 8.46086 7.41421 8.08579C7.03914 7.71071 6.53043 7.5 6 7.5H3C2.46957 7.5 1.96086 7.71071 1.58579 8.08579C1.21071 8.46086 1 8.96957 1 9.5V10.5" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8 1.56445C8.42888 1.67564 8.8087 1.92609 9.07984 2.27648C9.35098 2.62688 9.4981 3.0574 9.4981 3.50045C9.4981 3.94351 9.35098 4.37402 9.07984 4.72442C8.8087 5.07482 8.42888 5.32527 8 5.43645" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11 10.4995V9.49945C10.9997 9.05632 10.8522 8.62584 10.5807 8.27561C10.3092 7.92538 9.92906 7.67524 9.5 7.56445" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M4.5 5.5C5.60457 5.5 6.5 4.60457 6.5 3.5C6.5 2.39543 5.60457 1.5 4.5 1.5C3.39543 1.5 2.5 2.39543 2.5 3.5C2.5 4.60457 3.39543 5.5 4.5 5.5Z" stroke="#45556C" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    28 workers
                                                </div>
                                                <div class="status">
                                                    assigned
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right afternoon">
                                            Afternoon
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT DIV  -->
                    <div class="col-lg-4">
                        <div class="right_div_wrapper">
                            <div class="active_labour_details">
                                <div class="active_heading">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M13.3346 17.5V15.8333C13.3346 14.9493 12.9834 14.1014 12.3583 13.4763C11.7332 12.8512 10.8854 12.5 10.0013 12.5H5.0013C4.11725 12.5 3.2694 12.8512 2.64428 13.4763C2.01916 14.1014 1.66797 14.9493 1.66797 15.8333V17.5" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.332 2.60645C14.0468 2.79175 14.6799 3.20917 15.1318 3.79316C15.5837 4.37716 15.8289 5.09469 15.8289 5.83311C15.8289 6.57154 15.5837 7.28906 15.1318 7.87306C14.6799 8.45706 14.0468 8.87447 13.332 9.05978" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.332 17.5001V15.8334C18.3315 15.0948 18.0857 14.3774 17.6332 13.7937C17.1807 13.2099 16.5471 12.793 15.832 12.6084" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.5013 9.16667C9.34225 9.16667 10.8346 7.67428 10.8346 5.83333C10.8346 3.99238 9.34225 2.5 7.5013 2.5C5.66035 2.5 4.16797 3.99238 4.16797 5.83333C4.16797 7.67428 5.66035 9.16667 7.5013 9.16667Z" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Active Labour
                                </div>

                                <div class="center_div d-flex flex-column align-items-center justify-content-center gap-2 p-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                            <path d="M21.332 14.6667L23.9987 17.3333L29.332 12" stroke="white" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.3346 28V25.3333C21.3346 23.9188 20.7727 22.5623 19.7725 21.5621C18.7723 20.5619 17.4158 20 16.0013 20H8.0013C6.58681 20 5.23026 20.5619 4.23007 21.5621C3.22987 22.5623 2.66797 23.9188 2.66797 25.3333V28" stroke="white" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.0013 14.6667C14.9468 14.6667 17.3346 12.2789 17.3346 9.33333C17.3346 6.38781 14.9468 4 12.0013 4C9.05578 4 6.66797 6.38781 6.66797 9.33333C6.66797 12.2789 9.05578 14.6667 12.0013 14.6667Z" stroke="white" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <h4>124</h4>
                                    </div>
                                    <p>Total Active Labourers</p>
                                </div>

                                <div class="border_div">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center flex-column justify-content-center">
                                                <h4>Male</h4>
                                                <p>98</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center flex-column justify-content-center">
                                                <h4>Female</h4>
                                                <p>26</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom_text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M13.3346 6.66634C13.3346 9.99501 9.64197 13.4617 8.40197 14.5323C8.28645 14.6192 8.14583 14.6662 8.0013 14.6662C7.85677 14.6662 7.71615 14.6192 7.60064 14.5323C6.36064 13.4617 2.66797 9.99501 2.66797 6.66634C2.66797 5.25185 3.22987 3.8953 4.23007 2.89511C5.23026 1.89491 6.58681 1.33301 8.0013 1.33301C9.41579 1.33301 10.7723 1.89491 11.7725 2.89511C12.7727 3.8953 13.3346 5.25185 13.3346 6.66634Z" stroke="#DBEAFE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8 8.66699C9.10457 8.66699 10 7.77156 10 6.66699C10 5.56242 9.10457 4.66699 8 4.66699C6.89543 4.66699 6 5.56242 6 6.66699C6 7.77156 6.89543 8.66699 8 8.66699Z" stroke="#DBEAFE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Across 8 active sites
                                </div>
                            </div>

                            <!-- wages summary  -->
                            <div class="wages_Summary_wrapper mt-3">
                                <div class="heading">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M15.8333 5.83333V3.33333C15.8333 3.11232 15.7455 2.90036 15.5893 2.74408C15.433 2.5878 15.221 2.5 15 2.5H4.16667C3.72464 2.5 3.30072 2.67559 2.98816 2.98816C2.67559 3.30072 2.5 3.72464 2.5 4.16667C2.5 4.60869 2.67559 5.03262 2.98816 5.34518C3.30072 5.65774 3.72464 5.83333 4.16667 5.83333H16.6667C16.8877 5.83333 17.0996 5.92113 17.2559 6.07741C17.4122 6.23369 17.5 6.44565 17.5 6.66667V10M17.5 10H15C14.558 10 14.134 10.1756 13.8215 10.4882C13.5089 10.8007 13.3333 11.2246 13.3333 11.6667C13.3333 12.1087 13.5089 12.5326 13.8215 12.8452C14.134 13.1577 14.558 13.3333 15 13.3333H17.5C17.721 13.3333 17.933 13.2455 18.0893 13.0893C18.2455 12.933 18.3333 12.721 18.3333 12.5V10.8333C18.3333 10.6123 18.2455 10.4004 18.0893 10.2441C17.933 10.0878 17.721 10 17.5 10Z" stroke="#00BC7D" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2.5 4.16699V15.8337C2.5 16.2757 2.67559 16.6996 2.98816 17.0122C3.30072 17.3247 3.72464 17.5003 4.16667 17.5003H16.6667C16.8877 17.5003 17.0996 17.4125 17.2559 17.2562C17.4122 17.1 17.5 16.888 17.5 16.667V13.3337" stroke="#00BC7D" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    Wages Summary
                                </div>

                                <div class="total_paid mt-4 mb-3">
                                    <div class="date">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M5.33203 1.33301V3.99967" stroke="#45556C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.668 1.33301V3.99967" stroke="#45556C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.6667 2.66699H3.33333C2.59695 2.66699 2 3.26395 2 4.00033V13.3337C2 14.07 2.59695 14.667 3.33333 14.667H12.6667C13.403 14.667 14 14.07 14 13.3337V4.00033C14 3.26395 13.403 2.66699 12.6667 2.66699Z" stroke="#45556C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2 6.66699H14" stroke="#45556C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        November 2025
                                    </div>
                                    <h4>₹ 142,500</h4>
                                    <p>Total wages paid</p>
                                </div>

                                <div class="previous_transaction">
                                    <h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.668 11.333H14.668V7.33301" stroke="#F54900" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.6654 11.3337L8.9987 5.66699L5.66536 9.00033L1.33203 4.66699" stroke="#F54900" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        -5% vs last month
                                    </h4>
                                    <p>Previous: ₹ 150,000</p>
                                </div>

                                <div class="work_data_show">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="left_row">
                                                <h4>Avg per Worker</h4>
                                                <p>₹ 1,149</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="right_row">
                                                <h4>Pending</h4>
                                                <p>₹ 1,149</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- wages summary  -->

                            <!-- daily task  -->
                            <div class="daily_task_wrapper mt-3">
                                <div class="heading mb-3 mb-lg-4 d-flex align-items-center gap-2 flex-wrap justify-content-between">
                                    <h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M17.5 8.88V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H14.4533" stroke="#2B7FFF" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.5 9.16634L10 11.6663L18.3333 3.33301" stroke="#2B7FFF" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Daily Tasks
                                    </h4>
                                    <p>3/6</p>
                                </div>
                            </div>
                            <!-- daily task  -->
                        </div>
                    </div>

                </div>
                <!-- ROW  -->

            </div>
            <!-- dashboard container  -->

        </div>
    </div>
</section>




<?php include 'inc/footer.php' ?>