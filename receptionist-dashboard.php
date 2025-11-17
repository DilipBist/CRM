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
        </div>


        
        <!-- dashboard container  -->

    </div>
    </div>
</section>




<?php include 'inc/footer.php' ?>