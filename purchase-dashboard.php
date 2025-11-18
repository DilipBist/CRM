<?php
$pageTitle = 'Purchase Dashboard';
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
                            <h4>Pending Orders</h4>
                            <div class="numbering">
                                24
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
                            <div class="clock_sign">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 6V12L16 14" stroke="#F54900" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#F54900" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                            <h4>Approved Order</h4>
                            <div class="numbering">
                                126
                            </div>
                        </div>

                        <div class="icon d-flex gap-2">
                            <div class="clock_sign green">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#00A63E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9 12L11 14L15 10" stroke="#00A63E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                            <h4>Total Suppilers</h4>
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
                            <div class="clock_sign blue">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H6C4.93913 15 3.92172 15.4214 3.17157 16.1716C2.42143 16.9217 2 17.9391 2 19V21" stroke="#155DFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16 3.12793C16.8578 3.3503 17.6174 3.85119 18.1597 4.55199C18.702 5.25279 18.9962 6.11382 18.9962 6.99993C18.9962 7.88604 18.702 8.74707 18.1597 9.44787C17.6174 10.1487 16.8578 10.6496 16 10.8719" stroke="#155DFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M22 20.9999V18.9999C21.9993 18.1136 21.7044 17.2527 21.1614 16.5522C20.6184 15.8517 19.8581 15.3515 19 15.1299" stroke="#155DFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="#155DFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                            <h4>Monthy Buget</h4>
                            <div class="numbering">
                                Rs 36,00,000
                            </div>
                        </div>

                        <div class="icon d-flex gap-2">
                            <div class="clock_sign purple">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 2V22" stroke="#9810FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="#9810FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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

            <div class="purhcase_dashboard_chart_wrappper mt-4">
                <div class="row g-3">
                    <!-- left div  -->
                    <div class="col-lg-7 col-xxl-8">
                        <div class="left_section_wrapper">
                            <div class="material_stock_chart">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.16667 18.1079C9.42003 18.2542 9.70744 18.3312 10 18.3312C10.2926 18.3312 10.58 18.2542 10.8333 18.1079L16.6667 14.7746C16.9198 14.6285 17.13 14.4183 17.2763 14.1653C17.4225 13.9123 17.4997 13.6252 17.5 13.3329V6.66626C17.4997 6.37399 17.4225 6.08693 17.2763 5.8339C17.13 5.58086 16.9198 5.37073 16.6667 5.22459L10.8333 1.89126C10.58 1.74498 10.2926 1.66797 10 1.66797C9.70744 1.66797 9.42003 1.74498 9.16667 1.89126L3.33333 5.22459C3.08022 5.37073 2.86998 5.58086 2.72372 5.8339C2.57745 6.08693 2.5003 6.37399 2.5 6.66626V13.3329C2.5003 13.6252 2.57745 13.9123 2.72372 14.1653C2.86998 14.4183 3.08022 14.6285 3.33333 14.7746L9.16667 18.1079Z" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10 18.3333V10" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2.74219 5.83301L10.0005 9.99967L17.2589 5.83301" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.25 3.55859L13.75 7.85026" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Materials Stock Level
                                </h3>
                                <div class="row g-3">
                                    <div class="col-xxl-6">
                                        <div class="stocj_pie_chart">
                                            <h4>Stock StatusDistribution</h4>
                                            <div class="pt-3 d-flex flex-column align-items-center justify-content-center">
                                                <canvas id="stockPie" style="max-height:320px;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6">
                                        <div class="material_inventory_chart_wrppper">
                                            <h4>Top MaterialsInventory</h4>
                                            <canvas id="inventoryBar"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- monthly spending  -->
                            <div class="monthly_spends_div_wrappper mt-4">
                                <div class="heading d-flex align-items-center gap-3 flex-wrap justify-content-between mb-4">
                                    <h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M2.5 2.5V15.8333C2.5 16.2754 2.67559 16.6993 2.98816 17.0118C3.30072 17.3244 3.72464 17.5 4.16667 17.5H17.5" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15 14.1667V7.5" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.832 14.167V4.16699" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.66797 14.167V11.667" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Monthly SpendingTrends
                                    </h4>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.668 4.66699H14.668V8.66699" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.6654 4.66699L8.9987 10.3337L5.66536 7.00033L1.33203 11.3337" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        10.5% vs last month
                                    </p>
                                </div>

                                <div class="tag_boxs">
                                    <div class="row g-3 g-lg-4">
                                        <div class="col-6 col-lg-3">
                                            <div class="cdiv blue">
                                                <h4>₹4.2L</h4>
                                                <p>This Month</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-3">
                                            <div class="cdiv green">
                                                <h4>₹3.7L</h4>
                                                <p>Avg/Month</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-3">
                                            <div class="cdiv purple">
                                                <h4>₹26.1L</h4>
                                                <p>Total (7 Mo)</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-3">
                                            <div class="cdiv red">
                                                <h4>47</h4>
                                                <p>Orders/Month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="spending_vs_bujet_Chart mt-4">
                                    <h4>Spending vs Budget</h4>
                                    <div class="chart">
                                        <canvas id="spendChart"></canvas>
                                    </div>
                                </div>

                                <div class="purchase_odr_per_month_chart_wrapper mt-4">
                                    <h4>Purchase Orders per Month</h4>
                                    <div class="chart">
                                        <canvas id="purhcaseOrdrChart"></canvas>
                                    </div>
                                </div>

                            </div>
                            <!-- monthly spending  -->

                            <!-- line doted chart  -->
                            <div class="chart_remaining_data_list mt-4">

                                <div class="box_list_container mb-4">
                                    <div class="row g-3">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="bx d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center justify-content-between gap-2">
                                                    <h3>Cement</h3>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.668 4.66699H14.668V8.66699" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M14.6654 4.66699L8.9987 10.3337L5.66536 7.00033L1.33203 11.3337" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <h4>460</h4>
                                                <div class="d-flex align-items-center justify-content-between gap-2">
                                                    <p>₹/bag</p>
                                                    <div class="icon">
                                                        +9.5%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="bx d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center justify-content-between gap-2">
                                                    <h3>Steel</h3>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.668 4.66699H14.668V8.66699" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M14.6654 4.66699L8.9987 10.3337L5.66536 7.00033L1.33203 11.3337" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <h4>725</h4>
                                                <div class="d-flex align-items-center justify-content-between gap-2">
                                                    <p>₹/kg</p>
                                                    <div class="icon">
                                                        +6.6%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="bx d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center justify-content-between gap-2">
                                                    <h3>Bricks</h3>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.668 4.66699H14.668V8.66699" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M14.6654 4.66699L8.9987 10.3337L5.66536 7.00033L1.33203 11.3337" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <h4>93</h4>
                                                <div class="d-flex align-items-center justify-content-between gap-2">
                                                    <p>₹/pc</p>
                                                    <div class="icon">
                                                        +9.4%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="bx d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center justify-content-between gap-2">
                                                    <h3>Paint</h3>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.668 4.66699H14.668V8.66699" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M14.6654 4.66699L8.9987 10.3337L5.66536 7.00033L1.33203 11.3337" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <h4>345</h4>
                                                <div class="d-flex align-items-center justify-content-between gap-2">
                                                    <p>₹/L</p>
                                                    <div class="icon">
                                                        +7.8%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-chart-container">
                                    <canvas id="priceChart"></canvas>
                                </div>

                                <div class="bottom_row">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="box d-flex flex-column gap-2">
                                                <h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M10.668 4.66699H14.668V8.66699" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.6654 4.66699L8.9987 10.3337L5.66536 7.00033L1.33203 11.3337" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    Highest Increase
                                                </h4>
                                                <p>Steel (+6.6%)</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="box2 d-flex flex-column gap-2">
                                                <h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M10.668 11.333H14.668V7.33301" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.6654 11.3337L8.9987 5.66699L5.66536 9.00033L1.33203 4.66699" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    Most Stable
                                                </h4>
                                                <p>Steel (+6.6%)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- line doted chart  -->

                        </div>
                    </div>
                    <!-- left div  -->


                    <!-- right div  -->
                    <div class="col-lg-5 col-xxl-4">
                        <div class="right_section_wrapper d-flex flex-column gap-4">
                            <div class="payment_status_box_wrapper">
                                <div class="heading d-flex align-items-center gap-2 justify-content-between mb-4">
                                    <h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16.668 4.16699H3.33464C2.41416 4.16699 1.66797 4.91318 1.66797 5.83366V14.167C1.66797 15.0875 2.41416 15.8337 3.33464 15.8337H16.668C17.5884 15.8337 18.3346 15.0875 18.3346 14.167V5.83366C18.3346 4.91318 17.5884 4.16699 16.668 4.16699Z" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1.66797 8.33301H18.3346" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Payment Status
                                    </h4>

                                    <div class="tag">
                                        1 Overdue
                                    </div>
                                </div>

                                <div class="pending_payment_wrapper">
                                    <h5>Total Pending Payments</h5>
                                    <h4>₹9.5L</h4>
                                    <div class="row g-3">
                                        <div class="col-6 col-md-4">
                                            <div class="box">
                                                <p>3</p>
                                                <h5>Pending</h5>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="box red">
                                                <p>1</p>
                                                <h5>Overdue</h5>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="box green">
                                                <p>3</p>
                                                <h5>Paid</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pending_list_data mt-4">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="box">
                                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                <g clip-path="url(#clip0_21289_107156)">
                                                                    <path d="M8 4V8L10.6667 9.33333" stroke="#00427A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M7.9987 14.6663C11.6806 14.6663 14.6654 11.6816 14.6654 7.99967C14.6654 4.31778 11.6806 1.33301 7.9987 1.33301C4.3168 1.33301 1.33203 4.31778 1.33203 7.99967C1.33203 11.6816 4.3168 14.6663 7.9987 14.6663Z" stroke="#00427A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_21289_107156">
                                                                        <rect width="16" height="16" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <div class="c_heading">
                                                            <h4>INV-2025-245</h4>
                                                            <p>BuildMart Supplies</p>
                                                        </div>
                                                    </div>
                                                    <div class="tag">
                                                        Pending
                                                    </div>
                                                </div>
                                                <h3>₹248K</h3>
                                                <div class="d-flex align-items-center gap-2 justify-content-between last_div">
                                                    <p>Due: Nov 8, 2025</p>
                                                    <p class="red">3 days left</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="box">
                                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                <g clip-path="url(#clip0_21289_107156)">
                                                                    <path d="M8 4V8L10.6667 9.33333" stroke="#00427A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M7.9987 14.6663C11.6806 14.6663 14.6654 11.6816 14.6654 7.99967C14.6654 4.31778 11.6806 1.33301 7.9987 1.33301C4.3168 1.33301 1.33203 4.31778 1.33203 7.99967C1.33203 11.6816 4.3168 14.6663 7.9987 14.6663Z" stroke="#00427A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_21289_107156">
                                                                        <rect width="16" height="16" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <div class="c_heading">
                                                            <h4>INV-2025-245</h4>
                                                            <p>Steel World Inc.</p>
                                                        </div>
                                                    </div>
                                                    <div class="tag">
                                                        Pending
                                                    </div>
                                                </div>
                                                <h3>₹248K</h3>
                                                <div class="d-flex align-items-center gap-2 justify-content-between last_div">
                                                    <p>Due: Nov 8, 2025</p>
                                                    <p>5 days left</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="box">
                                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                <g clip-path="url(#clip0_21289_107198)">
                                                                    <path d="M7.9987 14.6663C11.6806 14.6663 14.6654 11.6816 14.6654 7.99967C14.6654 4.31778 11.6806 1.33301 7.9987 1.33301C4.3168 1.33301 1.33203 4.31778 1.33203 7.99967C1.33203 11.6816 4.3168 14.6663 7.9987 14.6663Z" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M8 5.33301V7.99967" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M8 10.667H8.00667" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_21289_107198">
                                                                        <rect width="16" height="16" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <div class="c_heading">
                                                            <h4>INV-2025-245</h4>
                                                            <p>Prime Bricks Co.</p>
                                                        </div>
                                                    </div>
                                                    <div class="tag red">
                                                        Overdue
                                                    </div>
                                                </div>
                                                <h3>125K</h3>
                                                <div class="d-flex align-items-center gap-2 justify-content-between last_div">
                                                    <p>Due: Nov 8, 2025</p>
                                                    <p class="red">31 day(s) overdue</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="box">
                                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                <g clip-path="url(#clip0_21289_107220)">
                                                                    <path d="M14.535 6.66666C14.8395 8.16086 14.6225 9.71427 13.9203 11.0679C13.218 12.4214 12.073 13.4934 10.6761 14.1049C9.27913 14.7164 7.71479 14.8305 6.24391 14.4282C4.77302 14.026 3.4845 13.1316 2.59323 11.8943C1.70195 10.657 1.26179 9.15148 1.34615 7.62892C1.43051 6.10635 2.0343 4.65872 3.05681 3.52744C4.07932 2.39616 5.45876 1.64961 6.96509 1.4123C8.47141 1.17498 10.0136 1.46123 11.3344 2.22333" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M6 7.33366L8 9.33366L14.6667 2.66699" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_21289_107220">
                                                                        <rect width="16" height="16" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <div class="c_heading">
                                                            <h4>INV-2025-245</h4>
                                                            <p>Paint Perfect Ltd.</p>
                                                        </div>
                                                    </div>
                                                    <div class="tag green">
                                                        Paid
                                                    </div>
                                                </div>
                                                <h3>₹65K </h3>
                                                <div class="d-flex align-items-center gap-2 justify-content-between last_div">
                                                    <p>Due: Nov 8, 2025</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="action_box">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_21289_107259)">
                                                    <path d="M7.9987 14.6663C11.6806 14.6663 14.6654 11.6816 14.6654 7.99967C14.6654 4.31778 11.6806 1.33301 7.9987 1.33301C4.3168 1.33301 1.33203 4.31778 1.33203 7.99967C1.33203 11.6816 4.3168 14.6663 7.9987 14.6663Z" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 5.33301V7.99967" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 10.667H8.00667" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_21289_107259">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column gap-1">
                                            <h4>Action Required</h4>
                                            <p>1 payment(s) overdue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="recent_supplier_box_wrapper">
                                <div class="heading d-flex align-items-center gap-3 justify-content-between">
                                    <h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M13.3346 17.5V15.8333C13.3346 14.9493 12.9834 14.1014 12.3583 13.4763C11.7332 12.8512 10.8854 12.5 10.0013 12.5H5.0013C4.11725 12.5 3.2694 12.8512 2.64428 13.4763C2.01916 14.1014 1.66797 14.9493 1.66797 15.8333V17.5" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.332 2.60645C14.0468 2.79175 14.6799 3.20917 15.1318 3.79316C15.5837 4.37716 15.8289 5.09469 15.8289 5.83311C15.8289 6.57154 15.5837 7.28906 15.1318 7.87306C14.6799 8.45706 14.0468 8.87447 13.332 9.05978" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.332 17.5001V15.8334C18.3315 15.0948 18.0857 14.3774 17.6332 13.7937C17.1807 13.2099 16.5471 12.793 15.832 12.6084" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.5013 9.16667C9.34225 9.16667 10.8346 7.67428 10.8346 5.83333C10.8346 3.99238 9.34225 2.5 7.5013 2.5C5.66035 2.5 4.16797 3.99238 4.16797 5.83333C4.16797 7.67428 5.66035 9.16667 7.5013 9.16667Z" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Recent Suppliers
                                    </h4>
                                    <div class="top_tag">
                                        Top 5
                                    </div>
                                </div>

                                <div class="call_active_box_wrapper mt-4 d-flex flex-column gap-3">
                                    <div class="call_box">
                                        <div class="fist_div d-flex align-items-start justify-content-between gap-2">
                                            <div class="left_div d-flex gap-2">
                                                <div class="name_bx">
                                                    BM
                                                </div>
                                                <div>
                                                    <div class="details">
                                                        <h3>BuildMart Supplies</h3>
                                                        <h6>Cement & Concrete</h6>
                                                    </div>
                                                    <div class="rating_order_bx d-flex align-items-center gap-2">
                                                        <div class="rating d-flex align-items-center gap-2">
                                                            <div class="star">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                                    <g clip-path="url(#clip0_21289_111242)">
                                                                        <path d="M5.7634 1.14745C5.78531 1.10318 5.81916 1.06591 5.86113 1.03986C5.90309 1.01381 5.9515 1 6.0009 1C6.0503 1 6.09871 1.01381 6.14067 1.03986C6.18264 1.06591 6.21649 1.10318 6.2384 1.14745L7.3934 3.48695C7.46949 3.64093 7.58181 3.77415 7.72071 3.87517C7.85962 3.9762 8.02096 4.042 8.1909 4.06695L10.7739 4.44495C10.8228 4.45204 10.8688 4.47268 10.9066 4.50455C10.9445 4.53641 10.9726 4.57822 10.9879 4.62525C11.0032 4.67228 11.005 4.72265 10.9932 4.77066C10.9814 4.81868 10.9563 4.86242 10.9209 4.89695L9.0529 6.71595C8.92971 6.836 8.83754 6.98419 8.78432 7.14776C8.7311 7.31134 8.71843 7.48539 8.7474 7.65495L9.1884 10.2249C9.19704 10.2739 9.19176 10.3242 9.17315 10.3703C9.15454 10.4163 9.12336 10.4563 9.08317 10.4854C9.04298 10.5146 8.99539 10.5319 8.94583 10.5354C8.89628 10.5388 8.84675 10.5283 8.8029 10.5049L6.4939 9.29095C6.34176 9.21106 6.17249 9.16932 6.00065 9.16932C5.82881 9.16932 5.65954 9.21106 5.5074 9.29095L3.1989 10.5049C3.15507 10.5282 3.1056 10.5386 3.05613 10.5351C3.00665 10.5316 2.95916 10.5142 2.91905 10.4851C2.87894 10.4559 2.84782 10.416 2.82923 10.3701C2.81064 10.3241 2.80533 10.2738 2.8139 10.2249L3.2544 7.65545C3.2835 7.48581 3.27089 7.31165 3.21767 7.14797C3.16445 6.98429 3.0722 6.83602 2.9489 6.71595L1.0809 4.89745C1.0452 4.86296 1.0199 4.81914 1.00788 4.77098C0.995866 4.72282 0.997618 4.67226 1.01294 4.62504C1.02826 4.57783 1.05653 4.53587 1.09454 4.50394C1.13254 4.47201 1.17875 4.4514 1.2279 4.44445L3.8104 4.06695C3.98053 4.0422 4.14209 3.97648 4.28119 3.87544C4.42029 3.77441 4.53275 3.64108 4.6089 3.48695L5.7634 1.14745Z" fill="#F0B100" stroke="#F0B100" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_21289_111242">
                                                                            <rect width="12" height="12" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            4.8
                                                        </div>
                                                        <div class="dot"></div>
                                                        <div class="order">
                                                            145 orders
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="active_tag">
                                                active
                                            </div>
                                        </div>
                                        <div class="button_div">
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_21289_111252)">
                                                        <path d="M9.22003 11.045C9.35772 11.1082 9.51283 11.1227 9.65983 11.086C9.80682 11.0492 9.93692 10.9636 10.0287 10.843L10.2654 10.533C10.3896 10.3674 10.5506 10.233 10.7357 10.1404C10.9209 10.0479 11.125 9.99967 11.332 9.99967H13.332C13.6857 9.99967 14.0248 10.1402 14.2748 10.3902C14.5249 10.6402 14.6654 10.9794 14.6654 11.333V13.333C14.6654 13.6866 14.5249 14.0258 14.2748 14.2758C14.0248 14.5259 13.6857 14.6663 13.332 14.6663C10.1494 14.6663 7.09719 13.4021 4.84675 11.1516C2.59631 8.90119 1.33203 5.84894 1.33203 2.66634C1.33203 2.31272 1.47251 1.97358 1.72256 1.72353C1.9726 1.47348 2.31174 1.33301 2.66536 1.33301H4.66536C5.01899 1.33301 5.35812 1.47348 5.60817 1.72353C5.85822 1.97358 5.9987 2.31272 5.9987 2.66634V4.66634C5.9987 4.87333 5.9505 5.07749 5.85793 5.26263C5.76536 5.44777 5.63096 5.60881 5.46536 5.73301L5.15336 5.96701C5.03098 6.06046 4.94471 6.1934 4.90922 6.34324C4.87374 6.49308 4.89122 6.65059 4.9587 6.78901C5.86982 8.63958 7.36831 10.1362 9.22003 11.045Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21289_111252">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Call
                                            </button>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M14.6654 4.66699L8.67136 8.48499C8.46796 8.60313 8.23692 8.66536 8.0017 8.66536C7.76647 8.66536 7.53543 8.60313 7.33203 8.48499L1.33203 4.66699" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M13.332 2.66699H2.66536C1.92898 2.66699 1.33203 3.26395 1.33203 4.00033V12.0003C1.33203 12.7367 1.92898 13.3337 2.66536 13.3337H13.332C14.0684 13.3337 14.6654 12.7367 14.6654 12.0003V4.00033C14.6654 3.26395 14.0684 2.66699 13.332 2.66699Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Email
                                            </button>
                                        </div>
                                    </div>

                                    <div class="call_box">
                                        <div class="fist_div d-flex align-items-start justify-content-between gap-2">
                                            <div class="left_div d-flex gap-2">
                                                <div class="name_bx grey">
                                                    HH
                                                </div>
                                                <div>
                                                    <div class="details">
                                                        <h3>BuildMart Supplies</h3>
                                                        <h6>Cement & Concrete</h6>
                                                    </div>
                                                    <div class="rating_order_bx d-flex align-items-center gap-2">
                                                        <div class="rating d-flex align-items-center gap-2">
                                                            <div class="star">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                                    <g clip-path="url(#clip0_21289_111242)">
                                                                        <path d="M5.7634 1.14745C5.78531 1.10318 5.81916 1.06591 5.86113 1.03986C5.90309 1.01381 5.9515 1 6.0009 1C6.0503 1 6.09871 1.01381 6.14067 1.03986C6.18264 1.06591 6.21649 1.10318 6.2384 1.14745L7.3934 3.48695C7.46949 3.64093 7.58181 3.77415 7.72071 3.87517C7.85962 3.9762 8.02096 4.042 8.1909 4.06695L10.7739 4.44495C10.8228 4.45204 10.8688 4.47268 10.9066 4.50455C10.9445 4.53641 10.9726 4.57822 10.9879 4.62525C11.0032 4.67228 11.005 4.72265 10.9932 4.77066C10.9814 4.81868 10.9563 4.86242 10.9209 4.89695L9.0529 6.71595C8.92971 6.836 8.83754 6.98419 8.78432 7.14776C8.7311 7.31134 8.71843 7.48539 8.7474 7.65495L9.1884 10.2249C9.19704 10.2739 9.19176 10.3242 9.17315 10.3703C9.15454 10.4163 9.12336 10.4563 9.08317 10.4854C9.04298 10.5146 8.99539 10.5319 8.94583 10.5354C8.89628 10.5388 8.84675 10.5283 8.8029 10.5049L6.4939 9.29095C6.34176 9.21106 6.17249 9.16932 6.00065 9.16932C5.82881 9.16932 5.65954 9.21106 5.5074 9.29095L3.1989 10.5049C3.15507 10.5282 3.1056 10.5386 3.05613 10.5351C3.00665 10.5316 2.95916 10.5142 2.91905 10.4851C2.87894 10.4559 2.84782 10.416 2.82923 10.3701C2.81064 10.3241 2.80533 10.2738 2.8139 10.2249L3.2544 7.65545C3.2835 7.48581 3.27089 7.31165 3.21767 7.14797C3.16445 6.98429 3.0722 6.83602 2.9489 6.71595L1.0809 4.89745C1.0452 4.86296 1.0199 4.81914 1.00788 4.77098C0.995866 4.72282 0.997618 4.67226 1.01294 4.62504C1.02826 4.57783 1.05653 4.53587 1.09454 4.50394C1.13254 4.47201 1.17875 4.4514 1.2279 4.44445L3.8104 4.06695C3.98053 4.0422 4.14209 3.97648 4.28119 3.87544C4.42029 3.77441 4.53275 3.64108 4.6089 3.48695L5.7634 1.14745Z" fill="#F0B100" stroke="#F0B100" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_21289_111242">
                                                                            <rect width="12" height="12" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            4.8
                                                        </div>
                                                        <div class="dot"></div>
                                                        <div class="order">
                                                            145 orders
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="active_tag">
                                                active
                                            </div>
                                        </div>
                                        <div class="button_div">
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_21289_111252)">
                                                        <path d="M9.22003 11.045C9.35772 11.1082 9.51283 11.1227 9.65983 11.086C9.80682 11.0492 9.93692 10.9636 10.0287 10.843L10.2654 10.533C10.3896 10.3674 10.5506 10.233 10.7357 10.1404C10.9209 10.0479 11.125 9.99967 11.332 9.99967H13.332C13.6857 9.99967 14.0248 10.1402 14.2748 10.3902C14.5249 10.6402 14.6654 10.9794 14.6654 11.333V13.333C14.6654 13.6866 14.5249 14.0258 14.2748 14.2758C14.0248 14.5259 13.6857 14.6663 13.332 14.6663C10.1494 14.6663 7.09719 13.4021 4.84675 11.1516C2.59631 8.90119 1.33203 5.84894 1.33203 2.66634C1.33203 2.31272 1.47251 1.97358 1.72256 1.72353C1.9726 1.47348 2.31174 1.33301 2.66536 1.33301H4.66536C5.01899 1.33301 5.35812 1.47348 5.60817 1.72353C5.85822 1.97358 5.9987 2.31272 5.9987 2.66634V4.66634C5.9987 4.87333 5.9505 5.07749 5.85793 5.26263C5.76536 5.44777 5.63096 5.60881 5.46536 5.73301L5.15336 5.96701C5.03098 6.06046 4.94471 6.1934 4.90922 6.34324C4.87374 6.49308 4.89122 6.65059 4.9587 6.78901C5.86982 8.63958 7.36831 10.1362 9.22003 11.045Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21289_111252">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Call
                                            </button>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M14.6654 4.66699L8.67136 8.48499C8.46796 8.60313 8.23692 8.66536 8.0017 8.66536C7.76647 8.66536 7.53543 8.60313 7.33203 8.48499L1.33203 4.66699" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M13.332 2.66699H2.66536C1.92898 2.66699 1.33203 3.26395 1.33203 4.00033V12.0003C1.33203 12.7367 1.92898 13.3337 2.66536 13.3337H13.332C14.0684 13.3337 14.6654 12.7367 14.6654 12.0003V4.00033C14.6654 3.26395 14.0684 2.66699 13.332 2.66699Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Email
                                            </button>
                                        </div>
                                    </div>

                                    <div class="call_box">
                                        <div class="fist_div d-flex align-items-start justify-content-between gap-2">
                                            <div class="left_div d-flex gap-2">
                                                <div class="name_bx orange">
                                                    DB
                                                </div>
                                                <div>
                                                    <div class="details">
                                                        <h3>BuildMart Supplies</h3>
                                                        <h6>Cement & Concrete</h6>
                                                    </div>
                                                    <div class="rating_order_bx d-flex align-items-center gap-2">
                                                        <div class="rating d-flex align-items-center gap-2">
                                                            <div class="star">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                                    <g clip-path="url(#clip0_21289_111242)">
                                                                        <path d="M5.7634 1.14745C5.78531 1.10318 5.81916 1.06591 5.86113 1.03986C5.90309 1.01381 5.9515 1 6.0009 1C6.0503 1 6.09871 1.01381 6.14067 1.03986C6.18264 1.06591 6.21649 1.10318 6.2384 1.14745L7.3934 3.48695C7.46949 3.64093 7.58181 3.77415 7.72071 3.87517C7.85962 3.9762 8.02096 4.042 8.1909 4.06695L10.7739 4.44495C10.8228 4.45204 10.8688 4.47268 10.9066 4.50455C10.9445 4.53641 10.9726 4.57822 10.9879 4.62525C11.0032 4.67228 11.005 4.72265 10.9932 4.77066C10.9814 4.81868 10.9563 4.86242 10.9209 4.89695L9.0529 6.71595C8.92971 6.836 8.83754 6.98419 8.78432 7.14776C8.7311 7.31134 8.71843 7.48539 8.7474 7.65495L9.1884 10.2249C9.19704 10.2739 9.19176 10.3242 9.17315 10.3703C9.15454 10.4163 9.12336 10.4563 9.08317 10.4854C9.04298 10.5146 8.99539 10.5319 8.94583 10.5354C8.89628 10.5388 8.84675 10.5283 8.8029 10.5049L6.4939 9.29095C6.34176 9.21106 6.17249 9.16932 6.00065 9.16932C5.82881 9.16932 5.65954 9.21106 5.5074 9.29095L3.1989 10.5049C3.15507 10.5282 3.1056 10.5386 3.05613 10.5351C3.00665 10.5316 2.95916 10.5142 2.91905 10.4851C2.87894 10.4559 2.84782 10.416 2.82923 10.3701C2.81064 10.3241 2.80533 10.2738 2.8139 10.2249L3.2544 7.65545C3.2835 7.48581 3.27089 7.31165 3.21767 7.14797C3.16445 6.98429 3.0722 6.83602 2.9489 6.71595L1.0809 4.89745C1.0452 4.86296 1.0199 4.81914 1.00788 4.77098C0.995866 4.72282 0.997618 4.67226 1.01294 4.62504C1.02826 4.57783 1.05653 4.53587 1.09454 4.50394C1.13254 4.47201 1.17875 4.4514 1.2279 4.44445L3.8104 4.06695C3.98053 4.0422 4.14209 3.97648 4.28119 3.87544C4.42029 3.77441 4.53275 3.64108 4.6089 3.48695L5.7634 1.14745Z" fill="#F0B100" stroke="#F0B100" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_21289_111242">
                                                                            <rect width="12" height="12" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            4.8
                                                        </div>
                                                        <div class="dot"></div>
                                                        <div class="order">
                                                            145 orders
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="active_tag">
                                                active
                                            </div>
                                        </div>
                                        <div class="button_div">
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_21289_111252)">
                                                        <path d="M9.22003 11.045C9.35772 11.1082 9.51283 11.1227 9.65983 11.086C9.80682 11.0492 9.93692 10.9636 10.0287 10.843L10.2654 10.533C10.3896 10.3674 10.5506 10.233 10.7357 10.1404C10.9209 10.0479 11.125 9.99967 11.332 9.99967H13.332C13.6857 9.99967 14.0248 10.1402 14.2748 10.3902C14.5249 10.6402 14.6654 10.9794 14.6654 11.333V13.333C14.6654 13.6866 14.5249 14.0258 14.2748 14.2758C14.0248 14.5259 13.6857 14.6663 13.332 14.6663C10.1494 14.6663 7.09719 13.4021 4.84675 11.1516C2.59631 8.90119 1.33203 5.84894 1.33203 2.66634C1.33203 2.31272 1.47251 1.97358 1.72256 1.72353C1.9726 1.47348 2.31174 1.33301 2.66536 1.33301H4.66536C5.01899 1.33301 5.35812 1.47348 5.60817 1.72353C5.85822 1.97358 5.9987 2.31272 5.9987 2.66634V4.66634C5.9987 4.87333 5.9505 5.07749 5.85793 5.26263C5.76536 5.44777 5.63096 5.60881 5.46536 5.73301L5.15336 5.96701C5.03098 6.06046 4.94471 6.1934 4.90922 6.34324C4.87374 6.49308 4.89122 6.65059 4.9587 6.78901C5.86982 8.63958 7.36831 10.1362 9.22003 11.045Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21289_111252">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Call
                                            </button>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M14.6654 4.66699L8.67136 8.48499C8.46796 8.60313 8.23692 8.66536 8.0017 8.66536C7.76647 8.66536 7.53543 8.60313 7.33203 8.48499L1.33203 4.66699" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M13.332 2.66699H2.66536C1.92898 2.66699 1.33203 3.26395 1.33203 4.00033V12.0003C1.33203 12.7367 1.92898 13.3337 2.66536 13.3337H13.332C14.0684 13.3337 14.6654 12.7367 14.6654 12.0003V4.00033C14.6654 3.26395 14.0684 2.66699 13.332 2.66699Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Email
                                            </button>
                                        </div>
                                    </div>

                                    <div class="call_box">
                                        <div class="fist_div d-flex align-items-start justify-content-between gap-2">
                                            <div class="left_div d-flex gap-2">
                                                <div class="name_bx purple">
                                                    BM
                                                </div>
                                                <div>
                                                    <div class="details">
                                                        <h3>BuildMart Supplies</h3>
                                                        <h6>Cement & Concrete</h6>
                                                    </div>
                                                    <div class="rating_order_bx d-flex align-items-center gap-4">
                                                        <div class="rating_order_bx d-flex align-items-center gap-2">
                                                            <div class="rating d-flex align-items-center gap-2">
                                                                <div class="star">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                                        <g clip-path="url(#clip0_21289_111242)">
                                                                            <path d="M5.7634 1.14745C5.78531 1.10318 5.81916 1.06591 5.86113 1.03986C5.90309 1.01381 5.9515 1 6.0009 1C6.0503 1 6.09871 1.01381 6.14067 1.03986C6.18264 1.06591 6.21649 1.10318 6.2384 1.14745L7.3934 3.48695C7.46949 3.64093 7.58181 3.77415 7.72071 3.87517C7.85962 3.9762 8.02096 4.042 8.1909 4.06695L10.7739 4.44495C10.8228 4.45204 10.8688 4.47268 10.9066 4.50455C10.9445 4.53641 10.9726 4.57822 10.9879 4.62525C11.0032 4.67228 11.005 4.72265 10.9932 4.77066C10.9814 4.81868 10.9563 4.86242 10.9209 4.89695L9.0529 6.71595C8.92971 6.836 8.83754 6.98419 8.78432 7.14776C8.7311 7.31134 8.71843 7.48539 8.7474 7.65495L9.1884 10.2249C9.19704 10.2739 9.19176 10.3242 9.17315 10.3703C9.15454 10.4163 9.12336 10.4563 9.08317 10.4854C9.04298 10.5146 8.99539 10.5319 8.94583 10.5354C8.89628 10.5388 8.84675 10.5283 8.8029 10.5049L6.4939 9.29095C6.34176 9.21106 6.17249 9.16932 6.00065 9.16932C5.82881 9.16932 5.65954 9.21106 5.5074 9.29095L3.1989 10.5049C3.15507 10.5282 3.1056 10.5386 3.05613 10.5351C3.00665 10.5316 2.95916 10.5142 2.91905 10.4851C2.87894 10.4559 2.84782 10.416 2.82923 10.3701C2.81064 10.3241 2.80533 10.2738 2.8139 10.2249L3.2544 7.65545C3.2835 7.48581 3.27089 7.31165 3.21767 7.14797C3.16445 6.98429 3.0722 6.83602 2.9489 6.71595L1.0809 4.89745C1.0452 4.86296 1.0199 4.81914 1.00788 4.77098C0.995866 4.72282 0.997618 4.67226 1.01294 4.62504C1.02826 4.57783 1.05653 4.53587 1.09454 4.50394C1.13254 4.47201 1.17875 4.4514 1.2279 4.44445L3.8104 4.06695C3.98053 4.0422 4.14209 3.97648 4.28119 3.87544C4.42029 3.77441 4.53275 3.64108 4.6089 3.48695L5.7634 1.14745Z" fill="#F0B100" stroke="#F0B100" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_21289_111242">
                                                                                <rect width="12" height="12" fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                                4.8
                                                            </div>
                                                            <div class="dot"></div>
                                                            <div class="order">
                                                                145 orders
                                                            </div>
                                                        </div>

                                                        <div class="order">
                                                            145 orders
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="active_tag">
                                                active
                                            </div>
                                        </div>
                                        <div class="button_div">
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_21289_111252)">
                                                        <path d="M9.22003 11.045C9.35772 11.1082 9.51283 11.1227 9.65983 11.086C9.80682 11.0492 9.93692 10.9636 10.0287 10.843L10.2654 10.533C10.3896 10.3674 10.5506 10.233 10.7357 10.1404C10.9209 10.0479 11.125 9.99967 11.332 9.99967H13.332C13.6857 9.99967 14.0248 10.1402 14.2748 10.3902C14.5249 10.6402 14.6654 10.9794 14.6654 11.333V13.333C14.6654 13.6866 14.5249 14.0258 14.2748 14.2758C14.0248 14.5259 13.6857 14.6663 13.332 14.6663C10.1494 14.6663 7.09719 13.4021 4.84675 11.1516C2.59631 8.90119 1.33203 5.84894 1.33203 2.66634C1.33203 2.31272 1.47251 1.97358 1.72256 1.72353C1.9726 1.47348 2.31174 1.33301 2.66536 1.33301H4.66536C5.01899 1.33301 5.35812 1.47348 5.60817 1.72353C5.85822 1.97358 5.9987 2.31272 5.9987 2.66634V4.66634C5.9987 4.87333 5.9505 5.07749 5.85793 5.26263C5.76536 5.44777 5.63096 5.60881 5.46536 5.73301L5.15336 5.96701C5.03098 6.06046 4.94471 6.1934 4.90922 6.34324C4.87374 6.49308 4.89122 6.65059 4.9587 6.78901C5.86982 8.63958 7.36831 10.1362 9.22003 11.045Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21289_111252">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Call
                                            </button>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M14.6654 4.66699L8.67136 8.48499C8.46796 8.60313 8.23692 8.66536 8.0017 8.66536C7.76647 8.66536 7.53543 8.60313 7.33203 8.48499L1.33203 4.66699" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M13.332 2.66699H2.66536C1.92898 2.66699 1.33203 3.26395 1.33203 4.00033V12.0003C1.33203 12.7367 1.92898 13.3337 2.66536 13.3337H13.332C14.0684 13.3337 14.6654 12.7367 14.6654 12.0003V4.00033C14.6654 3.26395 14.0684 2.66699 13.332 2.66699Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Email
                                            </button>
                                        </div>
                                    </div>

                                    <div class="call_box">
                                        <div class="fist_div d-flex align-items-start justify-content-between gap-2">
                                            <div class="left_div d-flex gap-2">
                                                <div class="name_bx green">
                                                    BM
                                                </div>
                                                <div>
                                                    <div class="details">
                                                        <h3>BuildMart Supplies</h3>
                                                        <h6>Cement & Concrete</h6>
                                                    </div>
                                                    <div class="rating_order_bx d-flex align-items-center gap-2">
                                                        <div class="rating d-flex align-items-center gap-2">
                                                            <div class="star">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                                    <g clip-path="url(#clip0_21289_111242)">
                                                                        <path d="M5.7634 1.14745C5.78531 1.10318 5.81916 1.06591 5.86113 1.03986C5.90309 1.01381 5.9515 1 6.0009 1C6.0503 1 6.09871 1.01381 6.14067 1.03986C6.18264 1.06591 6.21649 1.10318 6.2384 1.14745L7.3934 3.48695C7.46949 3.64093 7.58181 3.77415 7.72071 3.87517C7.85962 3.9762 8.02096 4.042 8.1909 4.06695L10.7739 4.44495C10.8228 4.45204 10.8688 4.47268 10.9066 4.50455C10.9445 4.53641 10.9726 4.57822 10.9879 4.62525C11.0032 4.67228 11.005 4.72265 10.9932 4.77066C10.9814 4.81868 10.9563 4.86242 10.9209 4.89695L9.0529 6.71595C8.92971 6.836 8.83754 6.98419 8.78432 7.14776C8.7311 7.31134 8.71843 7.48539 8.7474 7.65495L9.1884 10.2249C9.19704 10.2739 9.19176 10.3242 9.17315 10.3703C9.15454 10.4163 9.12336 10.4563 9.08317 10.4854C9.04298 10.5146 8.99539 10.5319 8.94583 10.5354C8.89628 10.5388 8.84675 10.5283 8.8029 10.5049L6.4939 9.29095C6.34176 9.21106 6.17249 9.16932 6.00065 9.16932C5.82881 9.16932 5.65954 9.21106 5.5074 9.29095L3.1989 10.5049C3.15507 10.5282 3.1056 10.5386 3.05613 10.5351C3.00665 10.5316 2.95916 10.5142 2.91905 10.4851C2.87894 10.4559 2.84782 10.416 2.82923 10.3701C2.81064 10.3241 2.80533 10.2738 2.8139 10.2249L3.2544 7.65545C3.2835 7.48581 3.27089 7.31165 3.21767 7.14797C3.16445 6.98429 3.0722 6.83602 2.9489 6.71595L1.0809 4.89745C1.0452 4.86296 1.0199 4.81914 1.00788 4.77098C0.995866 4.72282 0.997618 4.67226 1.01294 4.62504C1.02826 4.57783 1.05653 4.53587 1.09454 4.50394C1.13254 4.47201 1.17875 4.4514 1.2279 4.44445L3.8104 4.06695C3.98053 4.0422 4.14209 3.97648 4.28119 3.87544C4.42029 3.77441 4.53275 3.64108 4.6089 3.48695L5.7634 1.14745Z" fill="#F0B100" stroke="#F0B100" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_21289_111242">
                                                                            <rect width="12" height="12" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            4.8
                                                        </div>
                                                        <div class="dot"></div>
                                                        <div class="order">
                                                            145 orders
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="active_tag">
                                                active
                                            </div>
                                        </div>
                                        <div class="button_div">
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_21289_111252)">
                                                        <path d="M9.22003 11.045C9.35772 11.1082 9.51283 11.1227 9.65983 11.086C9.80682 11.0492 9.93692 10.9636 10.0287 10.843L10.2654 10.533C10.3896 10.3674 10.5506 10.233 10.7357 10.1404C10.9209 10.0479 11.125 9.99967 11.332 9.99967H13.332C13.6857 9.99967 14.0248 10.1402 14.2748 10.3902C14.5249 10.6402 14.6654 10.9794 14.6654 11.333V13.333C14.6654 13.6866 14.5249 14.0258 14.2748 14.2758C14.0248 14.5259 13.6857 14.6663 13.332 14.6663C10.1494 14.6663 7.09719 13.4021 4.84675 11.1516C2.59631 8.90119 1.33203 5.84894 1.33203 2.66634C1.33203 2.31272 1.47251 1.97358 1.72256 1.72353C1.9726 1.47348 2.31174 1.33301 2.66536 1.33301H4.66536C5.01899 1.33301 5.35812 1.47348 5.60817 1.72353C5.85822 1.97358 5.9987 2.31272 5.9987 2.66634V4.66634C5.9987 4.87333 5.9505 5.07749 5.85793 5.26263C5.76536 5.44777 5.63096 5.60881 5.46536 5.73301L5.15336 5.96701C5.03098 6.06046 4.94471 6.1934 4.90922 6.34324C4.87374 6.49308 4.89122 6.65059 4.9587 6.78901C5.86982 8.63958 7.36831 10.1362 9.22003 11.045Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21289_111252">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Call
                                            </button>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M14.6654 4.66699L8.67136 8.48499C8.46796 8.60313 8.23692 8.66536 8.0017 8.66536C7.76647 8.66536 7.53543 8.60313 7.33203 8.48499L1.33203 4.66699" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M13.332 2.66699H2.66536C1.92898 2.66699 1.33203 3.26395 1.33203 4.00033V12.0003C1.33203 12.7367 1.92898 13.3337 2.66536 13.3337H13.332C14.0684 13.3337 14.6654 12.7367 14.6654 12.0003V4.00033C14.6654 3.26395 14.0684 2.66699 13.332 2.66699Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Email
                                            </button>
                                        </div>
                                    </div>
                                    <div class="call_box">
                                        <div class="fist_div d-flex align-items-start justify-content-between gap-2">
                                            <div class="left_div d-flex gap-2">
                                                <div class="name_bx">
                                                    BM
                                                </div>
                                                <div>
                                                    <div class="details">
                                                        <h3>BuildMart Supplies</h3>
                                                        <h6>Cement & Concrete</h6>
                                                    </div>
                                                    <div class="rating_order_bx d-flex align-items-center gap-2">
                                                        <div class="rating d-flex align-items-center gap-2">
                                                            <div class="star">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                                    <g clip-path="url(#clip0_21289_111242)">
                                                                        <path d="M5.7634 1.14745C5.78531 1.10318 5.81916 1.06591 5.86113 1.03986C5.90309 1.01381 5.9515 1 6.0009 1C6.0503 1 6.09871 1.01381 6.14067 1.03986C6.18264 1.06591 6.21649 1.10318 6.2384 1.14745L7.3934 3.48695C7.46949 3.64093 7.58181 3.77415 7.72071 3.87517C7.85962 3.9762 8.02096 4.042 8.1909 4.06695L10.7739 4.44495C10.8228 4.45204 10.8688 4.47268 10.9066 4.50455C10.9445 4.53641 10.9726 4.57822 10.9879 4.62525C11.0032 4.67228 11.005 4.72265 10.9932 4.77066C10.9814 4.81868 10.9563 4.86242 10.9209 4.89695L9.0529 6.71595C8.92971 6.836 8.83754 6.98419 8.78432 7.14776C8.7311 7.31134 8.71843 7.48539 8.7474 7.65495L9.1884 10.2249C9.19704 10.2739 9.19176 10.3242 9.17315 10.3703C9.15454 10.4163 9.12336 10.4563 9.08317 10.4854C9.04298 10.5146 8.99539 10.5319 8.94583 10.5354C8.89628 10.5388 8.84675 10.5283 8.8029 10.5049L6.4939 9.29095C6.34176 9.21106 6.17249 9.16932 6.00065 9.16932C5.82881 9.16932 5.65954 9.21106 5.5074 9.29095L3.1989 10.5049C3.15507 10.5282 3.1056 10.5386 3.05613 10.5351C3.00665 10.5316 2.95916 10.5142 2.91905 10.4851C2.87894 10.4559 2.84782 10.416 2.82923 10.3701C2.81064 10.3241 2.80533 10.2738 2.8139 10.2249L3.2544 7.65545C3.2835 7.48581 3.27089 7.31165 3.21767 7.14797C3.16445 6.98429 3.0722 6.83602 2.9489 6.71595L1.0809 4.89745C1.0452 4.86296 1.0199 4.81914 1.00788 4.77098C0.995866 4.72282 0.997618 4.67226 1.01294 4.62504C1.02826 4.57783 1.05653 4.53587 1.09454 4.50394C1.13254 4.47201 1.17875 4.4514 1.2279 4.44445L3.8104 4.06695C3.98053 4.0422 4.14209 3.97648 4.28119 3.87544C4.42029 3.77441 4.53275 3.64108 4.6089 3.48695L5.7634 1.14745Z" fill="#F0B100" stroke="#F0B100" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_21289_111242">
                                                                            <rect width="12" height="12" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            4.8
                                                        </div>
                                                        <div class="dot"></div>
                                                        <div class="order">
                                                            145 orders
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="active_tag">
                                                active
                                            </div>
                                        </div>
                                        <div class="button_div">
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_21289_111252)">
                                                        <path d="M9.22003 11.045C9.35772 11.1082 9.51283 11.1227 9.65983 11.086C9.80682 11.0492 9.93692 10.9636 10.0287 10.843L10.2654 10.533C10.3896 10.3674 10.5506 10.233 10.7357 10.1404C10.9209 10.0479 11.125 9.99967 11.332 9.99967H13.332C13.6857 9.99967 14.0248 10.1402 14.2748 10.3902C14.5249 10.6402 14.6654 10.9794 14.6654 11.333V13.333C14.6654 13.6866 14.5249 14.0258 14.2748 14.2758C14.0248 14.5259 13.6857 14.6663 13.332 14.6663C10.1494 14.6663 7.09719 13.4021 4.84675 11.1516C2.59631 8.90119 1.33203 5.84894 1.33203 2.66634C1.33203 2.31272 1.47251 1.97358 1.72256 1.72353C1.9726 1.47348 2.31174 1.33301 2.66536 1.33301H4.66536C5.01899 1.33301 5.35812 1.47348 5.60817 1.72353C5.85822 1.97358 5.9987 2.31272 5.9987 2.66634V4.66634C5.9987 4.87333 5.9505 5.07749 5.85793 5.26263C5.76536 5.44777 5.63096 5.60881 5.46536 5.73301L5.15336 5.96701C5.03098 6.06046 4.94471 6.1934 4.90922 6.34324C4.87374 6.49308 4.89122 6.65059 4.9587 6.78901C5.86982 8.63958 7.36831 10.1362 9.22003 11.045Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21289_111252">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Call
                                            </button>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M14.6654 4.66699L8.67136 8.48499C8.46796 8.60313 8.23692 8.66536 8.0017 8.66536C7.76647 8.66536 7.53543 8.60313 7.33203 8.48499L1.33203 4.66699" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M13.332 2.66699H2.66536C1.92898 2.66699 1.33203 3.26395 1.33203 4.00033V12.0003C1.33203 12.7367 1.92898 13.3337 2.66536 13.3337H13.332C14.0684 13.3337 14.6654 12.7367 14.6654 12.0003V4.00033C14.6654 3.26395 14.0684 2.66699 13.332 2.66699Z" stroke="#0A0A0A" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Email
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="active_div_wrappper">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <div class="box">
                                                <h4>24</h4>
                                                <p>Active Suppliers</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="box green">
                                                <h4>4.7</h4>
                                                <p>Avg Rating</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right div  -->

                </div>
            </div>


        </div>
        <!-- dashboard container  -->

    </div>
    </div>
</section>




<?php include 'inc/footer.php' ?>