<?php
$view = $_GET['view'] ?? 'projects';
if ($view === 'subcontractor') {
    $pageTitle = 'Sub Contractor Details';
} else {
    $pageTitle = 'Project Details';
}
include 'inc/header.php'
?>
<!-- delet popup component  -->
<?php include 'components/delete-popup.php' ?>
<!-- delet popup component ends -->

<section class="admin_container d-flex">

    <?php
    if ($view === 'subcontractor') {
        $currentPage = 'subcontractor';
    } else {
        $currentPage = 'projectlist';
    }
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content project__Details ms-auto">

        <!-- top profile header  -->
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M16.5 16.5H1.5C1.1925 16.5 0.9375 16.245 0.9375 15.9375C0.9375 15.63 1.1925 15.375 1.5 15.375H16.5C16.8075 15.375 17.0625 15.63 17.0625 15.9375C17.0625 16.245 16.8075 16.5 16.5 16.5Z" fill="#141414" />
                        <path d="M7.3125 3V16.5H10.6875V3C10.6875 2.175 10.35 1.5 9.3375 1.5H8.6625C7.65 1.5 7.3125 2.175 7.3125 3Z" fill="#141414" />
                        <path d="M2.25 7.5V16.5H5.25V7.5C5.25 6.675 4.95 6 4.05 6H3.45C2.55 6 2.25 6.675 2.25 7.5Z" fill="#141414" />
                        <path d="M12.75 11.25V16.5H15.75V11.25C15.75 10.425 15.45 9.75 14.55 9.75H13.95C13.05 9.75 12.75 10.425 12.75 11.25Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="project-list.php">Project Management</a>
                    <span>/</span>
                    <p>Project Details</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">
                <?php include 'components/profile.php' ?>
                <?php include 'components/notification.php' ?>
            </div>
        </div>

        <div class="admin_list_heading pb36 outer_padding d-flex align-items-center flex-wrap gap-1 gap-sm-3 justify-content-between">
            <div class="left_heading">
                <h3>Project Details </h3>
                <p>You can view the Project detail accordingly.</p>
            </div>
        </div>
        <!-- top profile header  -->


        <div class="project__details mb-5 pl_pr">

            <!-- project details heading  -->
            <div class="project_detail_heading_container d-flex gap-3 justify-content-between flex-wrap">
                <div class="left_line_heading">
                    <div class="inner_heading">
                        <h3>Sky Walk Tower</h3>
                        <p>Lorem if sum have tea to get</p>
                    </div>

                    <div class="project_tag d-flex align-items-center gap-3 mt-4 flex-wrap">
                        <div class="less_p">
                            In Progress
                        </div>
                        <div class="more_p">
                            High Priority
                        </div>
                    </div>
                </div>

                <div class="project_deail_post_time d-flex flex-column gap-2">
                    <div class="dead_line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                            <path d="M7.16602 1.66602V4.16602" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.834 1.66602V4.16602" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.41602 7.57422H17.5827" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18 7.08268V14.166C18 16.666 16.75 18.3327 13.8333 18.3327H7.16667C4.25 18.3327 3 16.666 3 14.166V7.08268C3 4.58268 4.25 2.91602 7.16667 2.91602H13.8333C16.75 2.91602 18 4.58268 18 7.08268Z" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.5781 11.4167H13.5856" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.5781 13.9167H13.5856" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.4961 11.4167H10.5036" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.4961 13.9167H10.5036" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.41209 11.4167H7.41957" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.41209 13.9167H7.41957" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Deadline: NOV 15, 2023
                    </div>

                    <div class="start_Date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                            <path d="M18.8327 9.99935C18.8327 14.5993 15.0993 18.3327 10.4993 18.3327C5.89935 18.3327 2.16602 14.5993 2.16602 9.99935C2.16602 5.39935 5.89935 1.66602 10.4993 1.66602C15.0993 1.66602 18.8327 5.39935 18.8327 9.99935Z" stroke="#848484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.5914 12.6495L11.0081 11.1078C10.5581 10.8411 10.1914 10.1995 10.1914 9.67448V6.25781" stroke="#848484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Started: NOV 15, 2023
                    </div>
                </div>
            </div>

            <div class="project_details_showcase mt33">
                <!-- project deatails headind ends  -->

                <?php if ($view === 'subcontractor') : ?>
                    <div class="row g-4 g-lg-3 g-xxl-5">
                        <div class="col-md-6 col-lg-4  col-xl-3">
                            <a href="list-of-task.php?view=<?= $view ?>">
                                <div class="commm_grey_bg fist_bg e5bg">
                                    <h3>Task</h3>
                                    <h4>30%</h4>
                                    <meter value="80" min="0" max="100"></meter>
                                    <span>Pending Only 30% Task Completed</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="commm_grey_bg e5bg2">
                                <h3>Outstanding/ Prepaid Amount</h3>
                                <h4>Rs. 10,00,000</h4>
                                <span>Pending receivables or advance payments.</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  col-xl-3">
                            <a href="total-income.php?view=<?= $view ?>">
                                <div class="commm_grey_bg e5bg">
                                    <h3>Total Cash</h3>
                                    <h4>Rs. 50,00,000</h4>
                                    <span>Confirmed revenue from client projects.</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4  col-xl-3">
                            <a href="total-expense.php?view=<?= $view ?>">
                                <div class="commm_grey_bg e5bg2">
                                    <h3>Total Billing </h3>
                                    <h4>128</h4>
                                    <span>Expense entries recorded today.</span>
                                </div>
                            </a>
                        </div>

                    </div>
                <?php else : ?>

                    <!-- chart list  -->
                    <div class="top_chart_container">

                        <a href="list-of-task.php" class="card first_card">
                            <div class="d-flex align-items-center gap-3 justify-content-between">
                                <div class="card_div">
                                    <p class="card-title">Task Completed</p>
                                    <span>Your Total Project is</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <h4 class="card-value">30%</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45488 5.60777L14 4L12.6198 9.6061L10.898 7.9532L8.12069 10.8463C8.02641 10.9445 7.89615 11 7.76 11C7.62385 11 7.49359 10.9445 7.39931 10.8463L5.36 8.72199L2.36069 11.8463C2.16946 12.0455 1.85294 12.0519 1.65373 11.8607C1.45453 11.6695 1.44807 11.3529 1.63931 11.1537L4.99931 7.65373C5.09359 7.55552 5.22385 7.5 5.36 7.5C5.49615 7.5 5.62641 7.55552 5.72069 7.65373L7.76 9.77801L10.1766 7.26067L8.45488 5.60777Z" fill="#1C1C1C" />
                                    </svg>
                                </div>
                            </div>

                            <div class="progress-bar">
                                <div class="progress" style="width: 60%;"></div>
                            </div>

                        </a>


                        <a href="total-income.php" class="card second_payment">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div>
                                    <p class="card-title">Total Income</p>
                                    <h2 class="card-value">3,56,792.230 Dr</h2>
                                </div>
                                <div class="calender_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="none">
                                        <path d="M11.4638 14.3637C11.4755 12.7815 10.85 11.5301 9.60242 10.6463C8.63883 9.96593 7.46947 9.61101 6.33845 9.26995C3.98237 8.55568 3.2989 8.17946 3.2989 7.05275C3.2989 5.79772 4.92991 5.35118 6.32618 5.35118C7.34304 5.35118 8.51294 5.66734 9.23948 6.13589L10.6798 3.90512C9.73032 3.28955 8.43075 2.86967 7.14746 2.73935V0.65625H4.49039V2.88543C2.12847 3.40501 0.640583 4.94871 0.640583 7.05275C0.640583 8.5263 1.2529 9.6949 2.45708 10.5191C3.37294 11.1483 4.48991 11.4862 5.5689 11.8134C7.8799 12.5119 8.81836 12.9375 8.80768 14.3472L8.80762 14.3576C8.80762 15.5407 7.23968 15.9614 5.89639 15.9614C4.62749 15.9614 3.24763 15.4053 2.46545 14.5785L0.535156 16.4044C1.5257 17.452 2.96486 18.1926 4.49033 18.483V20.6563H7.14746V18.5298C9.77203 18.1541 11.4612 16.5739 11.4638 14.3637Z" fill="#7CAC70" />
                                    </svg>
                                </div>
                            </div>
                            <canvas id="lineChart"></canvas>
                        </a>


                        <div class="card payment_card">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div>
                                    <p class="card-title">Outstanding/ Prepaid Amount</p>
                                    <h2 class="card-value">Rs 20,000</h2>
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

                        <a href="total-expense.php" class="card first_card off_light_chart_bg">
                            <div class="d-flex align-items-center gap-3 justify-content-between">
                                <div class="card_div">
                                    <p class="card-title">Total Expenses</p>
                                    <span>Your Total Expenses is</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <h4 class="card-value">120,00</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45488 5.60777L14 4L12.6198 9.6061L10.898 7.9532L8.12069 10.8463C8.02641 10.9445 7.89615 11 7.76 11C7.62385 11 7.49359 10.9445 7.39931 10.8463L5.36 8.72199L2.36069 11.8463C2.16946 12.0455 1.85294 12.0519 1.65373 11.8607C1.45453 11.6695 1.44807 11.3529 1.63931 11.1537L4.99931 7.65373C5.09359 7.55552 5.22385 7.5 5.36 7.5C5.49615 7.5 5.62641 7.55552 5.72069 7.65373L7.76 9.77801L10.1766 7.26067L8.45488 5.60777Z" fill="#1C1C1C" />
                                    </svg>
                                </div>
                            </div>

                            <div class="progress-bar">
                                <div class="progress" style="width: 60%;"></div>
                            </div>
                        </a>


                    </div>
                <?php endif; ?>
                <!-- chart list ends -->

                <div class="mt46">
                    <div class="row  g-4 g-lg-5">
                        <div class="col-xl-8">
                            <div class="project_expense_container">
                                <div class="d-flex align-items-center gap-3 flex-wrap justify-content-between mb-2">
                                    <div class="expense_heading">
                                        <h3>Assets</h3>
                                        <p>Detailed information about the project</p>
                                    </div>

                                    <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                                        <div class="search">
                                            <input type="text" placeholder="Search" name="search">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>

                                        <div class="asset-filter">
                                            <?php
                                            $title = "Assets";
                                            $formId = "assetsForm";
                                            $redirectPage = "assets-summary.php";
                                            include 'components/asset-filter.php';
                                            ?>
                                        </div>

                                        <a href="#"
                                            class="addAssetBtn"
                                            data-title="Add Assets"
                                            data-btn1="Back"
                                            data-btn2="Submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M9.99935 18.3327C14.5827 18.3327 18.3327 14.5827 18.3327 9.99935C18.3327 5.41602 14.5827 1.66602 9.99935 1.66602C5.41602 1.66602 1.66602 5.41602 1.66602 9.99935C1.66602 14.5827 5.41602 18.3327 9.99935 18.3327Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.66602 10H13.3327" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 13.3327V6.66602" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Add Assets
                                        </a>
                                    </div>

                                </div>
                                <div class="expense_table common_table">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SN</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Assigned To</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tbody>
                                                <?php foreach (array_slice($projectList, 0, 13) as $project): ?>
                                                    <tr>
                                                        <th scope="row"><?= $project['id'] ?></th>
                                                        <td><?= $project['name'] ?></td>
                                                        <td><?= $project['location'] ?></td>
                                                        <td><?= $project['labour_name'] ?></td>
                                                        <td>
                                                            <div class="table_actions">
                                                                <a href="#" title="View Details" class="addAssetBtn"
                                                                    data-title="View Assets"
                                                                    data-btn1="Back"
                                                                    data-btn2="Okay">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                                        <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </svg>
                                                                </a>
                                                                <a href="#" class="addAssetBtn"
                                                                    data-title="Edit Assets"
                                                                    data-btn1="Back"
                                                                    data-btn2="Save ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                                        <path d="M9.94452 2.70041L3.78702 9.21791C3.55452 9.46541 3.32952 9.95291 3.28452 10.2904L3.00702 12.7204C2.90952 13.5979 3.53952 14.1979 4.40952 14.0479L6.82452 13.6354C7.16202 13.5754 7.63452 13.3279 7.86702 13.0729L14.0245 6.55541C15.0895 5.43041 15.5695 4.14791 13.912 2.58041C12.262 1.02791 11.0095 1.57541 9.94452 2.70041Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M8.91797 3.78711C9.24047 5.85711 10.9205 7.43961 13.0055 7.64961" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M2.25 16.5H15.75" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </svg>
                                                                </a>

                                                                <a href="#" class="delete_row_btn" title="Delete">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="del" width="18" height="18" viewBox="0 0 18 18" fill="none">
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

                                <div class="mt-3">
                                    <?php include 'inc/pagination.php' ?>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="d-flex flex-column gap-4">
                                <!-- project details  -->
                                <div class="project_expense_container p-detail">
                                    <h3>Project Details</h3>
                                    <p>Detailed information about the project</p>

                                    <ul>
                                        <li>
                                            <p>Project Name:</p>
                                            <p>Sky walk Tower</p>
                                        </li>
                                        <li>
                                            <p>Project Id:</p>
                                            <p>#ID1287956401</p>
                                        </li>
                                        <li>
                                            <p>Project Address:</p>
                                            <p>Hattiban</p>
                                        </li>
                                        <li>
                                            <p>Project Owner Name:</p>
                                            <p>Rohan Dangol</p>
                                        </li>
                                        <li>
                                            <p>Estimated Budget:</p>
                                            <p>Rs. 50,00,000</p>
                                        </li>
                                        <li>
                                            <p>Created By:</p>
                                            <p>Rohan Dangol</p>
                                        </li>
                                        <li>
                                            <p>Estimated Month:</p>
                                            <p>9 Month</p>
                                        </li>
                                        <li>
                                            <p>Start Date:</p>
                                            <p>08 March 2025</p>
                                        </li>
                                        <li>
                                            <p>End Date:</p>
                                            <p>08 March 2025</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- project details ends  -->

                                <!-- attachemnt div  -->
                                <div class="project_expense_container att_heading">
                                    <h3>Attachments</h3>

                                    <div class="d-flex flex-column gap-3 gap-md-4 mt26">
                                        <div class="attach_file_info">
                                            <h4>Design & Sketch <span>*</span></h4>

                                            <div class="outer_bg1 d-flex align-items-center gap-3 justify-content-between">
                                                <div class="file_info d-flex align-items-center gap-2">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                                                            <path opacity="0.4" d="M26.1673 9.11232V16.2173L24.2657 14.584C23.3557 13.8023 21.8856 13.8023 20.9756 14.584L16.1223 18.749C15.2123 19.5306 13.7423 19.5306 12.8323 18.749L12.4356 18.4223C11.6073 17.699 10.289 17.629 9.35565 18.259L3.61565 22.109L3.48732 22.2023C3.05565 21.269 2.83398 20.1607 2.83398 18.889V9.11232C2.83398 4.86565 5.36565 2.33398 9.61232 2.33398H19.389C23.6357 2.33398 26.1673 4.86565 26.1673 9.11232Z" fill="#141414" />
                                                            <path d="M10.9993 12.11C12.5328 12.11 13.776 10.8668 13.776 9.33331C13.776 7.7998 12.5328 6.55664 10.9993 6.55664C9.46581 6.55664 8.22266 7.7998 8.22266 9.33331C8.22266 10.8668 9.46581 12.11 10.9993 12.11Z" fill="#141414" />
                                                            <path d="M26.1663 16.2176V18.8893C26.1663 23.136 23.6347 25.6676 19.388 25.6676H9.61133C6.63633 25.6676 4.48966 24.4193 3.48633 22.2026L3.61466 22.1093L9.35466 18.2593C10.288 17.6293 11.6063 17.6993 12.4347 18.4226L12.8313 18.7493C13.7413 19.531 15.2113 19.531 16.1213 18.7493L20.9747 14.5843C21.8847 13.8026 23.3547 13.8026 24.2647 14.5843L26.1663 16.2176Z" fill="#141414" />
                                                        </svg>
                                                    </div>
                                                    <div class="d-flex flex-column gap-1">
                                                        <h6>File2024</h6>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <p>JPEG</p>
                                                            <div class="dot"></div>
                                                            <p>1.2 MB</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="file_download d-flex align-items-center gap-2">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                                            <path d="M13.4842 10.0009C13.4842 11.6509 12.1509 12.9842 10.5009 12.9842C8.85091 12.9842 7.51758 11.6509 7.51758 10.0009C7.51758 8.35091 8.85091 7.01758 10.5009 7.01758C12.1509 7.01758 13.4842 8.35091 13.4842 10.0009Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10.4999 16.8913C13.4415 16.8913 16.1832 15.1579 18.0915 12.1579C18.8415 10.9829 18.8415 9.00794 18.0915 7.83294C16.1832 4.83294 13.4415 3.09961 10.4999 3.09961C7.5582 3.09961 4.81654 4.83294 2.9082 7.83294C2.1582 9.00794 2.1582 10.9829 2.9082 12.1579C4.81654 15.1579 7.5582 16.8913 10.4999 16.8913Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>

                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                                            <path d="M15.5581 12.0254L10.4997 17.0837L5.44141 12.0254" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10.5 2.91602V16.941" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>

                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="del" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                                            <path d="M18 4.98307C15.225 4.70807 12.4333 4.56641 9.65 4.56641C8 4.56641 6.35 4.64974 4.7 4.81641L3 4.98307" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M7.58398 4.14102L7.76732 3.04935C7.90065 2.25768 8.00065 1.66602 9.40898 1.66602H11.5923C13.0007 1.66602 13.109 2.29102 13.234 3.05768L13.4173 4.14102" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M16.2077 7.61719L15.666 16.0089C15.5743 17.3172 15.4993 18.3339 13.1743 18.3339H7.82435C5.49935 18.3339 5.42435 17.3172 5.33268 16.0089L4.79102 7.61719" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M9.10742 13.75H11.8824" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8.41602 10.416H12.5827" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="attach_file_info">
                                            <h4>Aggrement <span>*</span></h4>

                                            <div class="outer_bg1 d-flex align-items-center gap-3 justify-content-between">
                                                <div class="file_info d-flex align-items-center gap-2">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                                                            <path opacity="0.4" d="M26.1673 9.11232V16.2173L24.2657 14.584C23.3557 13.8023 21.8856 13.8023 20.9756 14.584L16.1223 18.749C15.2123 19.5306 13.7423 19.5306 12.8323 18.749L12.4356 18.4223C11.6073 17.699 10.289 17.629 9.35565 18.259L3.61565 22.109L3.48732 22.2023C3.05565 21.269 2.83398 20.1607 2.83398 18.889V9.11232C2.83398 4.86565 5.36565 2.33398 9.61232 2.33398H19.389C23.6357 2.33398 26.1673 4.86565 26.1673 9.11232Z" fill="#141414" />
                                                            <path d="M10.9993 12.11C12.5328 12.11 13.776 10.8668 13.776 9.33331C13.776 7.7998 12.5328 6.55664 10.9993 6.55664C9.46581 6.55664 8.22266 7.7998 8.22266 9.33331C8.22266 10.8668 9.46581 12.11 10.9993 12.11Z" fill="#141414" />
                                                            <path d="M26.1663 16.2176V18.8893C26.1663 23.136 23.6347 25.6676 19.388 25.6676H9.61133C6.63633 25.6676 4.48966 24.4193 3.48633 22.2026L3.61466 22.1093L9.35466 18.2593C10.288 17.6293 11.6063 17.6993 12.4347 18.4226L12.8313 18.7493C13.7413 19.531 15.2113 19.531 16.1213 18.7493L20.9747 14.5843C21.8847 13.8026 23.3547 13.8026 24.2647 14.5843L26.1663 16.2176Z" fill="#141414" />
                                                        </svg>
                                                    </div>
                                                    <div class="d-flex flex-column gap-1">
                                                        <h6>File2024</h6>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <p>JPEG</p>
                                                            <div class="dot"></div>
                                                            <p>1.2 MB</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="file_download d-flex align-items-center gap-2">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                                            <path d="M13.4842 10.0009C13.4842 11.6509 12.1509 12.9842 10.5009 12.9842C8.85091 12.9842 7.51758 11.6509 7.51758 10.0009C7.51758 8.35091 8.85091 7.01758 10.5009 7.01758C12.1509 7.01758 13.4842 8.35091 13.4842 10.0009Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10.4999 16.8913C13.4415 16.8913 16.1832 15.1579 18.0915 12.1579C18.8415 10.9829 18.8415 9.00794 18.0915 7.83294C16.1832 4.83294 13.4415 3.09961 10.4999 3.09961C7.5582 3.09961 4.81654 4.83294 2.9082 7.83294C2.1582 9.00794 2.1582 10.9829 2.9082 12.1579C4.81654 15.1579 7.5582 16.8913 10.4999 16.8913Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>

                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                                            <path d="M15.5581 12.0254L10.4997 17.0837L5.44141 12.0254" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10.5 2.91602V16.941" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>

                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="del" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                                            <path d="M18 4.98307C15.225 4.70807 12.4333 4.56641 9.65 4.56641C8 4.56641 6.35 4.64974 4.7 4.81641L3 4.98307" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M7.58398 4.14102L7.76732 3.04935C7.90065 2.25768 8.00065 1.66602 9.40898 1.66602H11.5923C13.0007 1.66602 13.109 2.29102 13.234 3.05768L13.4173 4.14102" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M16.2077 7.61719L15.666 16.0089C15.5743 17.3172 15.4993 18.3339 13.1743 18.3339H7.82435C5.49935 18.3339 5.42435 17.3172 5.33268 16.0089L4.79102 7.61719" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M9.10742 13.75H11.8824" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8.41602 10.416H12.5827" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- attachment div end  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- purhase requition  -->
            <div class="purchase_request_container">
                <div class="d-flex align-items-center gap-3 flex-wrap justify-content-between">
                    <div class="purchase_heading">
                        <h4>Purchase Requisition</h4>
                        <p>Detailed information about the project</p>
                    </div>

                    <div class="purchase_heading_right d-flex align-items-center gap-2">
                        <?php include 'components/search.php' ?>
                        <?php
                        $title = "Purchase Requisition";
                        $formId = "purchaseForm";
                        $redirectPage = "purchase-requisation.php?view={$view}";
                        include 'components/asset-filter.php';
                        ?>
                        <a href="add-purchase-requisation.php" class="add_purchase_btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99935 18.3327C14.5827 18.3327 18.3327 14.5827 18.3327 9.99935C18.3327 5.41602 14.5827 1.66602 9.99935 1.66602C5.41602 1.66602 1.66602 5.41602 1.66602 9.99935C1.66602 14.5827 5.41602 18.3327 9.99935 18.3327Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.66602 10H13.3327" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 13.3327V6.66602" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Add
                        </a>
                    </div>
                </div>

                <div class="purchase_data_table common_table">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Particulars</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (array_slice($projectList, 0, 8) as $project): ?>
                                    <tr>
                                        <th scope="row"><?= $project['id'] ?></th>
                                        <td><?= $project['Particulars'] ?></td>
                                        <td><?= $project['Quantity'] ?></td>
                                        <td>
                                            <!--
                                        total five status and five classes accordion to the status 
                                        (deal_state, progress_state, hold_state, complete_state, cancelled_state) 
                                        add above class accordion to state 
                                        -->
                                            <div class="<?= $project['class'] ?>">
                                                <?= $project['status'] ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table_actions">
                                                <a href="add-purchase-requisation.php" title="View Details">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                        <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                                <a href="add-purchase-requisation.php" title="Edit Details">
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
                <div class="mt-3">
                    <?php include 'inc/pagination.php' ?>
                </div>
            </div>
            <!-- purchase requitio end s  -->

        </div>
    </div>
</section>


<!-- add asset popup  -->
<?php
include 'components/add-asset.php'
?>
<!-- add asset popup  -->



<?php include 'inc/footer.php' ?>