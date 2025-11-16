<?php
$pageTitle = 'Subcontract Dashboard';
include 'inc/header.php'
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
            <?php include 'components/top-cards.php' ?>
            <!-- top card data  -->


            <!-- chart div weekely and budget chart -->
            <div class="supervisor_chart_container mt-4">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="weekly_chart">
                            <h3>Weekly Task Completion</h3>
                            <canvas id="taskChart_two"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bujet_chart">
                            <h3>Budget Tracking (K$)</h3>
                            <canvas id="budgetChart"></canvas>
                            <!-- Custom legend container -->
                            <div id="chartLegend" class="custom-legend"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chart div weekely and budget chart -->

            <!-- inner content div  -->
            <div class="inner_section_container mt-4">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="subcontract_work_progress_wrapper">
                            <div class="heading d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_21262_95266)">
                                            <path d="M18.3346 10.0003H16.268C15.9038 9.99955 15.5494 10.1181 15.2589 10.3378C14.9685 10.5575 14.758 10.8663 14.6596 11.217L12.7013 18.1837C12.6887 18.2269 12.6624 18.2649 12.6263 18.292C12.5902 18.319 12.5464 18.3337 12.5013 18.3337C12.4562 18.3337 12.4124 18.319 12.3763 18.292C12.3402 18.2649 12.3139 18.2269 12.3013 18.1837L7.7013 1.81699C7.68868 1.77372 7.66236 1.73571 7.6263 1.70866C7.59024 1.68161 7.54638 1.66699 7.5013 1.66699C7.45622 1.66699 7.41236 1.68161 7.3763 1.70866C7.34024 1.73571 7.31392 1.77372 7.3013 1.81699L5.34297 8.78366C5.24502 9.13295 5.03579 9.44076 4.74702 9.66034C4.45826 9.87992 4.10574 9.99929 3.74297 10.0003H1.66797" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_21262_95266">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Work Progress Tracking
                                </h3>

                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M5.33203 1.33301V3.99967" stroke="#62748E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.668 1.33301V3.99967" stroke="#62748E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.6667 2.66699H3.33333C2.59695 2.66699 2 3.26395 2 4.00033V13.3337C2 14.07 2.59695 14.667 3.33333 14.667H12.6667C13.403 14.667 14 14.07 14 13.3337V4.00033C14 3.26395 13.403 2.66699 12.6667 2.66699Z" stroke="#62748E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2 6.66699H14" stroke="#62748E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Nov 5, 2025
                                </div>
                            </div>
                            <div class="active_progress_bar_wrapper">
                                <h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.668 4.66699H14.668V8.66699" stroke="#314158" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6654 4.66699L8.9987 10.3337L5.66536 7.00033L1.33203 11.3337" stroke="#314158" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Active Projects Progress
                                </h4>
                            </div>
                            <!-- Project Progress Bars -->
                            <div class="progress_bars_section">
                                <?php
                                foreach ($projects as $p): ?>
                                    <div class="progress_card">
                                        <div class="cardbody">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5><?= $p['name'] ?></h5>
                                                <span class="<?= $p['color'] ?>"><?= $p['status'] ?></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="progress w-100" style="height: 8px;">
                                                    <div class="progressBar" style="width: <?= $p['progress'] ?>%;"></div>
                                                </div>
                                                <small class="text-muted"><?= $p['progress'] ?>%</small>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- Charts Section -->
                            <div class="chart_Section mt-4 mb-4">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="chart_first_card">
                                            <h6>Daily Progress (This Week)</h6>
                                            <canvas id="dailyProgressChart"></canvas>
                                            <div class="bottom_text d-flex align-items-center justify-content-between mt-3">
                                                <div>
                                                    Avg: 77%
                                                </div>
                                                <div class="green">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                        <g clip-path="url(#clip0_21262_95398)">
                                                            <path d="M8 3.5H11V6.5" stroke="#00A63E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 3.5L6.75 7.75L4.25 5.25L1 8.5" stroke="#00A63E" stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_21262_95398">
                                                                <rect width="12" height="12" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    +5% from last week
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="chart_first_card button_soft_bg">
                                            <h6>Weekly Completion vs Target</h6>
                                            <canvas id="weeklyCompletionChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Summary Cards -->
                            <div class="row text-center g-3">
                                <div class="col-6 col-lg-3">
                                    <div class="summar_card">
                                        <h4 class="primaryColor">78%</h4>
                                        <p class="">Overall Progress</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="summar_card">
                                        <h4 class="successColor">131</h4>
                                        <p class="">Tasks Completed</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="summar_card">
                                        <h4 class="dangerColor">37</h4>
                                        <p class="">Tasks Pending</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="summar_card">
                                        <h4 class="">18</h4>
                                        <p class="">Days Remaining</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="subcontract_effencicy_wrapper">
                            <div class="chart_first_card">
                                <h6>Productivity vs Efficiency</h6>
                                <canvas id="productivityChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- inner content div  -->

        </div>
        <!-- dashboard container  -->

    </div>
    </div>
</section>





<?php include 'inc/footer.php' ?>