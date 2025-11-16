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
                <div class="row">
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


                            <div class="chart_remaining_data_list mt-4">
                                <div class="price-chart-container">
                                    <canvas id="priceChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- dashboard container  -->

    </div>
    </div>
</section>




<?php include 'inc/footer.php' ?>