<?php
$pageTitle = 'Supervisor Dashboard';
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
            <div class="supervisor_top_chart_container pt-1">
                <div class="c_div light_blue">
                    <div class="left_content_div">
                        <h4>Active Projects</h4>
                        <h5>12</h5>
                        <p>+2 this month</p>
                    </div>
                    <div class="right_content_div">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M5 18.3337V3.33366C5 2.89163 5.17559 2.46771 5.48816 2.15515C5.80072 1.84259 6.22464 1.66699 6.66667 1.66699H13.3333C13.7754 1.66699 14.1993 1.84259 14.5118 2.15515C14.8244 2.46771 15 2.89163 15 3.33366V18.3337H5Z" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.0013 10H3.33464C2.89261 10 2.46868 10.1756 2.15612 10.4882C1.84356 10.8007 1.66797 11.2246 1.66797 11.6667V16.6667C1.66797 17.1087 1.84356 17.5326 2.15612 17.8452C2.46868 18.1577 2.89261 18.3333 3.33464 18.3333H5.0013" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15 7.5H16.6667C17.1087 7.5 17.5326 7.6756 17.8452 7.98816C18.1577 8.30072 18.3333 8.72464 18.3333 9.16667V16.6667C18.3333 17.1087 18.1577 17.5326 17.8452 17.8452C17.5326 18.1577 17.1087 18.3333 16.6667 18.3333H15" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.33203 5H11.6654" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.33203 8.33301H11.6654" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.33203 11.667H11.6654" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.33203 15H11.6654" stroke="#155DFC" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class="c_div light_grey">
                    <div class="left_content_div">
                        <h4>Workers On-Site</h4>
                        <h5>147/150</h5>
                        <p>94% attendance</p>
                    </div>
                    <div class="right_content_div light_green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M13.3346 17.5V15.8333C13.3346 14.9493 12.9834 14.1014 12.3583 13.4763C11.7332 12.8512 10.8854 12.5 10.0013 12.5H5.0013C4.11725 12.5 3.2694 12.8512 2.64428 13.4763C2.01916 14.1014 1.66797 14.9493 1.66797 15.8333V17.5" stroke="#00A63E" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.332 2.60645C14.0468 2.79175 14.6799 3.20917 15.1318 3.79316C15.5837 4.37716 15.8289 5.09469 15.8289 5.83311C15.8289 6.57154 15.5837 7.28906 15.1318 7.87306C14.6799 8.45706 14.0468 8.87447 13.332 9.05978" stroke="#00A63E" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.332 17.5001V15.8334C18.3315 15.0948 18.0857 14.3774 17.6332 13.7937C17.1807 13.2099 16.5471 12.793 15.832 12.6084" stroke="#00A63E" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.5013 9.16667C9.34225 9.16667 10.8346 7.67428 10.8346 5.83333C10.8346 3.99238 9.34225 2.5 7.5013 2.5C5.66035 2.5 4.16797 3.99238 4.16797 5.83333C4.16797 7.67428 5.66035 9.16667 7.5013 9.16667Z" stroke="#00A63E" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class="c_div light_blue">
                    <div class="left_content_div">
                        <h4>Equipment Active</h4>
                        <h5>34/38</h5>
                        <p>94% Utilization</p>
                    </div>
                    <div class="right_content_div light_orange">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M8.33203 8.33301V4.16634C8.33203 3.94533 8.41983 3.73337 8.57611 3.57709C8.73239 3.42081 8.94435 3.33301 9.16536 3.33301H10.832C11.053 3.33301 11.265 3.42081 11.4213 3.57709C11.5776 3.73337 11.6654 3.94533 11.6654 4.16634V8.33301" stroke="#F54900" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.668 5C12.9941 5 14.2658 5.52678 15.2035 6.46447C16.1412 7.40215 16.668 8.67392 16.668 10V12.5" stroke="#F54900" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.33203 12.5V10C3.33203 8.67392 3.85882 7.40215 4.7965 6.46447C5.73418 5.52678 7.00595 5 8.33203 5" stroke="#F54900" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5013 12.5H2.5013C2.04106 12.5 1.66797 12.8731 1.66797 13.3333V15C1.66797 15.4602 2.04106 15.8333 2.5013 15.8333H17.5013C17.9615 15.8333 18.3346 15.4602 18.3346 15V13.3333C18.3346 12.8731 17.9615 12.5 17.5013 12.5Z" stroke="#F54900" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class="c_div light_grey">
                    <div class="left_content_div">
                        <h4>Safety Incidents</h4>
                        <h5>2</h5>
                        <p>This Week</p>
                    </div>
                    <div class="right_content_div light_orange">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M8.33203 8.33301V4.16634C8.33203 3.94533 8.41983 3.73337 8.57611 3.57709C8.73239 3.42081 8.94435 3.33301 9.16536 3.33301H10.832C11.053 3.33301 11.265 3.42081 11.4213 3.57709C11.5776 3.73337 11.6654 3.94533 11.6654 4.16634V8.33301" stroke="#F54900" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.668 5C12.9941 5 14.2658 5.52678 15.2035 6.46447C16.1412 7.40215 16.668 8.67392 16.668 10V12.5" stroke="#F54900" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.33203 12.5V10C3.33203 8.67392 3.85882 7.40215 4.7965 6.46447C5.73418 5.52678 7.00595 5 8.33203 5" stroke="#F54900" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5013 12.5H2.5013C2.04106 12.5 1.66797 12.8731 1.66797 13.3333V15C1.66797 15.4602 2.04106 15.8333 2.5013 15.8333H17.5013C17.9615 15.8333 18.3346 15.4602 18.3346 15V13.3333C18.3346 12.8731 17.9615 12.5 17.5013 12.5Z" stroke="#F54900" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

            </div>
            <!-- top card data  -->


            <!-- chart div weekely and budget chart -->
            <div class="supervisor_chart_container mt-4">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="weekly_chart">
                            <h3>Weekly Task Completion</h3>
                            <canvas id="taskChart"></canvas>
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
                        <div class="left_div">
                            <div class="active_project_Container">
                                <h4>Active Projects</h4>
                                <div class="active_project_table">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Project Name</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Progress</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Deadline</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tbody>
                                                <tr>
                                                    <td>Downtown Office Complex</td>
                                                    <td>Site A</td>
                                                    <td>
                                                        <div class="task_progress d-flex align-items-center gap-2">
                                                            <meter id="task-progress"
                                                                min="0"
                                                                max="100"
                                                                value="45">
                                                            </meter>
                                                            <label for="task-progress">45%</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="green">On Track</button>
                                                    </td>
                                                    <td>
                                                        <div class="table_txt">
                                                            Jun 30, 2025
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table_txt">
                                                            42
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Residential Tower Phase 2</td>
                                                    <td>Site B</td>
                                                    <td>
                                                        <div class="task_progress d-flex align-items-center gap-2">
                                                            <meter id="task-progress"
                                                                min="0"
                                                                max="100"
                                                                value="76">
                                                            </meter>
                                                            <label for="task-progress">76%</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="red">Delayed</button>
                                                    </td>
                                                    <td>
                                                        <div class="table_txt">
                                                            Jun 30, 2025
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table_txt">
                                                            42
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hospital Expansion</td>
                                                    <td>Site C</td>
                                                    <td>
                                                        <div class="task_progress d-flex align-items-center gap-2">
                                                            <meter id="task-progress"
                                                                min="0"
                                                                max="100"
                                                                value="90">
                                                            </meter>
                                                            <label for="task-progress">90%</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="orange">At Risk</button>
                                                    </td>
                                                    <td>
                                                        <div class="table_txt">
                                                            Nov 5, 2025
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table_txt">
                                                            22
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Downtown Office Complex</td>
                                                    <td>Site A</td>
                                                    <td>
                                                        <div class="task_progress d-flex align-items-center gap-2">
                                                            <meter id="task-progress"
                                                                min="0"
                                                                max="100"
                                                                value="76">
                                                            </meter>
                                                            <label for="task-progress">76%</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="green">On Track</button>
                                                    </td>
                                                    <td>
                                                        <div class="table_txt">
                                                            Jun 30, 2025
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table_txt">
                                                            42
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="att_work_time_container mt-4">
                                <h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_21257_92563)">
                                            <path d="M10 5V10L13.3333 11.6667" stroke="#314158" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.0013 18.3337C14.6037 18.3337 18.3346 14.6027 18.3346 10.0003C18.3346 5.39795 14.6037 1.66699 10.0013 1.66699C5.39893 1.66699 1.66797 5.39795 1.66797 10.0003C1.66797 14.6027 5.39893 18.3337 10.0013 18.3337Z" stroke="#314158" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_21257_92563">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Attendance & Work Time
                                </h4>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="box">
                                            <h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M6.66797 11.3337L10.0013 8.00033L6.66797 4.66699" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 8H2" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 2H12.6667C13.0203 2 13.3594 2.14048 13.6095 2.39052C13.8595 2.64057 14 2.97971 14 3.33333V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H10" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Clock In
                                            </h4>
                                            <p>07:45 AM</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box2">
                                            <h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M10.668 11.3337L14.0013 8.00033L10.668 4.66699" stroke="#F54900" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14 8H6" stroke="#F54900" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V3.33333C2 2.97971 2.14048 2.64057 2.39052 2.39052C2.64057 2.14048 2.97971 2 3.33333 2H6" stroke="#F54900" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Clock Out
                                            </h4>
                                            <p>In Progress</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box">
                                            <h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M6.66797 11.3337L10.0013 8.00033L6.66797 4.66699" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 8H2" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 2H12.6667C13.0203 2 13.3594 2.14048 13.6095 2.39052C13.8595 2.64057 14 2.97971 14 3.33333V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H10" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Clock In
                                            </h4>
                                            <p>07:45 AM</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box">
                                            <h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M6.66797 11.3337L10.0013 8.00033L6.66797 4.66699" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 8H2" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 2H12.6667C13.0203 2 13.3594 2.14048 13.6095 2.39052C13.8595 2.64057 14 2.97971 14 3.33333V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H10" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Clock In
                                            </h4>
                                            <p>07:45 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="right_labour_management">
                            <h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M13.3346 17.5V15.8333C13.3346 14.9493 12.9834 14.1014 12.3583 13.4763C11.7332 12.8512 10.8854 12.5 10.0013 12.5H5.0013C4.11725 12.5 3.2694 12.8512 2.64428 13.4763C2.01916 14.1014 1.66797 14.9493 1.66797 15.8333V17.5" stroke="#314158" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.332 2.60645C14.0468 2.79175 14.6799 3.20917 15.1318 3.79316C15.5837 4.37716 15.8289 5.09469 15.8289 5.83311C15.8289 6.57154 15.5837 7.28906 15.1318 7.87306C14.6799 8.45706 14.0468 8.87447 13.332 9.05978" stroke="#314158" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.332 17.5001V15.8334C18.3315 15.0948 18.0857 14.3774 17.6332 13.7937C17.1807 13.2099 16.5471 12.793 15.832 12.6084" stroke="#314158" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.5013 9.16667C9.34225 9.16667 10.8346 7.67428 10.8346 5.83333C10.8346 3.99238 9.34225 2.5 7.5013 2.5C5.66035 2.5 4.16797 3.99238 4.16797 5.83333C4.16797 7.67428 5.66035 9.16667 7.5013 9.16667Z" stroke="#314158" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Labour Management
                            </h4>
                            <div class="total_labour_tag">
                                <div>
                                    <p>Total Labours on Site</p>
                                    <h4>147</h4>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M21.3346 28V25.3333C21.3346 23.9188 20.7727 22.5623 19.7725 21.5621C18.7723 20.5619 17.4158 20 16.0013 20H8.0013C6.58681 20 5.23026 20.5619 4.23007 21.5621C3.22987 22.5623 2.66797 23.9188 2.66797 25.3333V28" stroke="#005399" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.332 4.1709C22.4757 4.46739 23.4886 5.13525 24.2116 6.06965C24.9347 7.00405 25.327 8.15208 25.327 9.33357C25.327 10.515 24.9347 11.6631 24.2116 12.5975C23.4886 13.5319 22.4757 14.1997 21.332 14.4962" stroke="#005399" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M29.332 28.0005V25.3338C29.3311 24.1521 28.9378 23.0042 28.2139 22.0702C27.4899 21.1363 26.4762 20.4693 25.332 20.1738" stroke="#005399" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0013 14.6667C14.9468 14.6667 17.3346 12.2789 17.3346 9.33333C17.3346 6.38781 14.9468 4 12.0013 4C9.05578 4 6.66797 6.38781 6.66797 9.33333C6.66797 12.2789 9.05578 14.6667 12.0013 14.6667Z" stroke="#005399" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="labour_track_container mt-3">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="labour_present">
                                            <h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M10.668 7.33333L12.0013 8.66667L14.668 6" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10.6654 14V12.6667C10.6654 11.9594 10.3844 11.2811 9.88432 10.781C9.38422 10.281 8.70594 10 7.9987 10H3.9987C3.29145 10 2.61318 10.281 2.11308 10.781C1.61298 11.2811 1.33203 11.9594 1.33203 12.6667V14" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M5.9987 7.33333C7.47146 7.33333 8.66536 6.13943 8.66536 4.66667C8.66536 3.19391 7.47146 2 5.9987 2C4.52594 2 3.33203 3.19391 3.33203 4.66667C3.33203 6.13943 4.52594 7.33333 5.9987 7.33333Z" stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Present
                                            </h4>
                                            <p>132</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="labour_absent">
                                            <h4>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_21274_95812)">
                                                        <path d="M10.6654 14V12.6667C10.6654 11.9594 10.3844 11.2811 9.88432 10.781C9.38422 10.281 8.70594 10 7.9987 10H3.9987C3.29145 10 2.61318 10.281 2.11308 10.781C1.61298 11.2811 1.33203 11.9594 1.33203 12.6667V14" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M5.9987 7.33333C7.47146 7.33333 8.66536 6.13943 8.66536 4.66667C8.66536 3.19391 7.47146 2 5.9987 2C4.52594 2 3.33203 3.19391 3.33203 4.66667C3.33203 6.13943 4.52594 7.33333 5.9987 7.33333Z" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11.332 5.33301L14.6654 8.66634" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.6654 5.33301L11.332 8.66634" stroke="#E7000B" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_21274_95812">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Absent
                                            </h4>
                                            <p>15</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="labour_chart_container mt-3">
                                <h4>Weekly Attendance</h4>
                                <canvas id="labourChart"></canvas>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10.0013 18.3337C14.5846 18.3337 18.3346 14.5837 18.3346 10.0003C18.3346 5.41699 14.5846 1.66699 10.0013 1.66699C5.41797 1.66699 1.66797 5.41699 1.66797 10.0003C1.66797 14.5837 5.41797 18.3337 10.0013 18.3337Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.66797 10H13.3346" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10 13.3337V6.66699" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Add Labour Report
                                </button>
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