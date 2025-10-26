<?php
$pageTitle = 'Labour Details';
include 'inc/header.php'
?>

<!-- payment VOUCHAR POPUP  -->
<?php include 'components/vouchar-popup.php' ?>
<!-- payment VOUCHAR POPUP ENDS  -->

<section class="admin_container d-flex">

    <?php
    $currentPage = 'labourlist';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto labour-details">
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
                    <a href="labour-list.php">Labor Management </a>
                    <span>/</span>
                    <p>Labor Report</p>
                </div>
            </div>


            <div class="admin_profile_container d-flex align-items-center gap-3">
                <?php include 'components/profile.php' ?>


                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- top profile header  -->


        <div class="admin_list_heading outer_padding">
            <div class="left_heading">
                <h3>Labor Details/Report</h3>
                <p>You can view the Project detail accordingly.</p>
            </div>
        </div>

        <div class="individual_labour_Details_container pl_pr">
            <div class="row g-4 g-xxl-5">
                <div class="col-xl-8">
                    <div class="labour_personal_Details_container outer_border">
                        <div class="left_line_heading">
                            <div class="inner_heading">
                                <h3>labor Details</h3>
                                <p>Detailed information about the project</p>
                            </div>

                            <div class="project_tag d-flex align-items-center gap-3 mt-4 flex-wrap">
                                <div class="less_p">
                                    In Progress
                                </div>
                                <!-- <div class="more_p">
                                    High Priority
                                </div> -->
                            </div>
                        </div>

                        <div class="labour_personal_Detail">
                            <ul>
                                <li>
                                    <p>Citizen Id:</p>
                                    <p>#ID1287956401</p>
                                </li>
                                <li>
                                    <p>Labor Name:</p>
                                    <p>Rohan Dangol</p>
                                </li>
                                <li>
                                    <p>Current Address:</p>
                                    <p>Hattiban</p>
                                </li>
                                <li>
                                    <p>Permanent Address</p>
                                    <p>New Baneshowor</p>
                                </li>
                                <li>
                                    <p>Gender:</p>
                                    <p>Male</p>
                                </li>
                                <li>
                                    <p>Created By:</p>
                                    <p>Rohan Dangol</p>
                                </li>
                                <li>
                                    <p>Date of Birth:</p>
                                    <p>2000-07-027</p>
                                </li>
                                <li>
                                    <p>Phone Number:</p>
                                    <p>9827339100</p>
                                </li>
                                <li>
                                    <p>Emergency Number:</p>
                                    <p>9827339100</p>
                                </li>
                                <li>
                                    <p>labor Type:</p>
                                    <p>Painter</p>
                                </li>
                                <li>
                                    <p>Wages Paid:</p>
                                    <p>1000/day</p>
                                </li>
                                <li>
                                    <p>Project Address:</p>
                                    <p>Hattiban</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="lb_monthly_update outer_border">
                        <h3>Monthly Update</h3>
                        <p>Detailed information about the project</p>

                        <ul>
                            <li>
                                <a href="#">ST Building Construction</a>
                                <p>4 Days at ST </p>
                            </li>
                            <li>
                                <a href="#">Mega web link</a>
                                <p>2025-August-13</p>
                            </li>
                            <li>
                                <a href="#">ST Building Construction</a>
                                <p>2025-August-13</p>
                            </li>
                            <li>
                                <a href="#">Mega web link</a>
                                <p>6 Days at Mega</p>
                            </li>
                            <li>
                                <a href="#">ST Building Construction</a>
                                <p>2025-August-13</p>
                            </li>
                            <li>
                                <a href="#">Mega web link</a>
                                <p>6 Days at Mega</p>
                            </li>
                        </ul>

                        <button type="button" id="OpenMonthlyPopup">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M2.25 9H15.75" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.75 2.99805L15.75 8.99805L9.75 14.998" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="pl_pr labour_details_calender mb-4 mb-lg-5">
            <div class="labour_monlthly_attendance_container mt-4 mt-lg-5">
                <div class="heading d-flex align-items-center gap-2 justify-content-between flex-wrap">
                    <h3>
                        <span>2025</span>
                        August
                    </h3>


                    <div class="add_expenses common_payment_popbtns"
                        data-title="Payment Voucher"
                        data-form="payment">
                        Add Payment
                    </div>
                </div>
                <div class="week_names">
                    <div>
                        Sunday
                    </div>
                    <div>
                        Monday
                    </div>
                    <div>
                        Tuesday
                    </div>
                    <div>
                        Wednesday
                    </div>
                    <div>
                        Thursday
                    </div>
                    <div>
                        Friday
                    </div>
                    <div>
                        Saturday
                    </div>
                </div>

                <div class="month_DaysContainer mt-3">
                    <div class="month_Date present">
                        <h4>1</h4>
                        <h6>1000</h6>
                        <p>Sky Walk Tower</p>

                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date present">
                        <h4>2</h4>
                        <h6>7000</h6>
                        <p>Sky Walk Tower</p>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date half-day">
                        <h4>3</h4>
                        <h6>5000</h6>
                        <p>Sky Walk Tower</p>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date half-day">
                        <h4>4</h4>
                        <h6>9000</h6>
                        <p>Sky Walk Tower</p>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date half-day">
                        <h4>5</h4>
                        <h6>7000</h6>
                        <p>Sky Walk Tower</p>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date present">
                        <h4>6</h4>
                        <h6>7000</h6>
                        <p>Sky Walk Tower</p>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date absent">
                        <h4>7</h4>
                        <p>Absent</p>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date off_bg">
                        <h4>8</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>9</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>10</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>11</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>12</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>13</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date off_bg">
                        <h4>14</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date off_bg">
                        <h4>15</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>16</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>17</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>18</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>19</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>20</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date off_bg">
                        <h4>21</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date off_bg">
                        <h4>22</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>23</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>24</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>25</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>26</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>27</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date off_bg">
                        <h4>28</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date off_bg">
                        <h4>29</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>30</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>31</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="month_Date">
                        <h4>32</h4>
                        <div class="plus_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <rect x="0.306641" y="1.14648" width="23.4435" height="23.4435" rx="3.75" fill="white" stroke="#646464" stroke-width="0.5" />
                                <rect x="10.7598" y="5.98242" width="2.53657" height="13.7699" rx="1.26828" fill="#646464" />
                                <rect x="5.14258" y="14.1348" width="2.53657" height="13.7699" rx="1.26828" transform="rotate(-90 5.14258 14.1348)" fill="#646464" />
                            </svg>
                        </div>
                    </div>

                    <div class="attnotic">
                        <h3>Notations</h3>
                        <div class="d-flex align-items-center gap-4 justify-content-center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <circle cx="9" cy="9.39648" r="9" fill="#04E391" />
                                </svg>
                                Present
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <circle cx="9" cy="9.39648" r="9" fill="#DAE514" />
                                </svg>
                                Half-day
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <circle cx="9" cy="9.39648" r="9" fill="#FF0A0A" />
                                </svg>
                                Absent
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- monthly details popup  -->
        <div class="monthly_detail_popup_container" id="monthly-popup">
            <div class="outer_bg">
                <div class="monthly_update_details">

                    <div class="monthly_heading">
                        Monthly Update

                        <button type="button" id="CloseMonthlyPopup">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99935 1.66602C5.40768 1.66602 1.66602 5.40768 1.66602 9.99935C1.66602 14.591 5.40768 18.3327 9.99935 18.3327C14.591 18.3327 18.3327 14.591 18.3327 9.99935C18.3327 5.40768 14.591 1.66602 9.99935 1.66602ZM12.7993 11.916C13.041 12.1577 13.041 12.5577 12.7993 12.7993C12.6743 12.9243 12.516 12.9827 12.3577 12.9827C12.1993 12.9827 12.041 12.9243 11.916 12.7993L9.99935 10.8827L8.08268 12.7993C7.95768 12.9243 7.79935 12.9827 7.64102 12.9827C7.48268 12.9827 7.32435 12.9243 7.19935 12.7993C6.95768 12.5577 6.95768 12.1577 7.19935 11.916L9.11602 9.99935L7.19935 8.08268C6.95768 7.84102 6.95768 7.44102 7.19935 7.19935C7.44102 6.95768 7.84102 6.95768 8.08268 7.19935L9.99935 9.11602L11.916 7.19935C12.1577 6.95768 12.5577 6.95768 12.7993 7.19935C13.041 7.44102 13.041 7.84102 12.7993 8.08268L10.8827 9.99935L12.7993 11.916Z" fill="#FF0000" />
                            </svg>
                        </button>
                    </div>
                    <div class="admin_right_content ">

                        <div class="admin_list_heading d-flex flex-wrap align-items-center gap-1 gap-sm-3 justify-content-between ">
                            <div class="left_heading">
                                <h3>Monthly Project Update list</h3>
                                <p>You can view the service setup list accordingly.</p>
                            </div>
                            <div class="right_fil_div d-flex align-items-center gap-2 justify-content-end">
                                <div class="search">
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
                                </div>


                            </div>
                        </div>




                        <div class="project_list_table">
                            <div class="common_table">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">SN</th>
                                                <th scope="col">Project Name</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Timing</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach (array_slice($projectList, 0, 10) as $project): ?>
                                                <tr>
                                                    <th scope="row"><?= $project['id'] ?></th>
                                                    <td><?= $project['project_name'] ?></td>
                                                    <td><?= $project['date'] ?></td>
                                                    <td><?= $project['timing'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>

                            </div>

                            <!-- show only 10 table content  -->

                            <div class="mb-2 mt-3">
                                <?php include 'inc/pagination.php' ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- monthly details popup ends  -->


        <!-- Attendance pop up  -->
        <div class="AttendancePopup">
            <div class="attendance_popup_content">
                <div class="monthly_heading">
                    Attendance

                    <button type="button" id="CloseAttendancePopup">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M9.99935 1.66602C5.40768 1.66602 1.66602 5.40768 1.66602 9.99935C1.66602 14.591 5.40768 18.3327 9.99935 18.3327C14.591 18.3327 18.3327 14.591 18.3327 9.99935C18.3327 5.40768 14.591 1.66602 9.99935 1.66602ZM12.7993 11.916C13.041 12.1577 13.041 12.5577 12.7993 12.7993C12.6743 12.9243 12.516 12.9827 12.3577 12.9827C12.1993 12.9827 12.041 12.9243 11.916 12.7993L9.99935 10.8827L8.08268 12.7993C7.95768 12.9243 7.79935 12.9827 7.64102 12.9827C7.48268 12.9827 7.32435 12.9243 7.19935 12.7993C6.95768 12.5577 6.95768 12.1577 7.19935 11.916L9.11602 9.99935L7.19935 8.08268C6.95768 7.84102 6.95768 7.44102 7.19935 7.19935C7.44102 6.95768 7.84102 6.95768 8.08268 7.19935L9.99935 9.11602L11.916 7.19935C12.1577 6.95768 12.5577 6.95768 12.7993 7.19935C13.041 7.44102 13.041 7.84102 12.7993 8.08268L10.8827 9.99935L12.7993 11.916Z" fill="#FF0000" />
                        </svg>
                    </button>
                </div>

                <div class="attendance_form mt-4">
                    <h4>Add Attendance</h4>
                    <p>Please kindly complete the form to Add Attendence.</p>
                    <div class="common_form">
                        <form action="">
                            <div class="row g-3 align-items-end">

                                <div class="col-md-6 col-lg-4 ">
                                    <div class="slect-status">
                                        <label for="Status" class="mb-2">Status <span class="red">*</span></label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <select class="form-select" aria-label="select" id="Status" name="Status" required>
                                            <option value="" disabled hidden selected>Present</option>
                                            <option value="Present">Present</option>
                                            <option value="Absent">Absent</option>
                                            <option value="other">other</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input d-flex flex-column gap-2 position-relative">
                                        <label for="stime">Start Time<span>*</span> </label>
                                        <input type="time" id="stime" name="stime" placeholder="10:00 AM" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input d-flex flex-column gap-2 position-relative">
                                        <label for="etime">End Time<span>*</span> </label>
                                        <input type="time" id="etime" name="etime" placeholder="10:00 AM" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 ">
                                    <div class=" slect-status">
                                        <label for="pname" class="mb-2">Project Name <span class="red">*</span></label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <select class="form-select" aria-label="select" id="pname" name="pname" required>
                                            <option value="" disabled hidden selected>Select Project Name</option>
                                            <option value="Carpenter">Carpenter</option>
                                            <option value="Painter">Painter</option>
                                            <option value="Worker">Worker</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input d-flex flex-column gap-2 position-relative">
                                        <label for="description">Work Description<span>*</span> </label>
                                        <textarea name="description" id="description"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input mb-2">
                                        <label for="description">Transfer of Labor<span>*</span> </label>
                                    </div>
                                    <div class="height50">
                                        <div class="loc_selct_box">
                                            <div class="btn-box">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4  ">
                                    <div class=" slect-status locationData">
                                        <div class="form_input d-flex flex-column gap-2 position-relative">
                                            <label for="lstime">Start Time<span>*</span> </label>
                                            <input type="time" id="stime" name="lstime" placeholder="10:00 AM" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4  ">
                                    <div class=" slect-status locationData">
                                        <div class="form_input d-flex flex-column gap-2 position-relative">
                                            <label for="letime">End Time<span>*</span> </label>
                                            <input type="time" id="etime" name="letime" placeholder="10:00 AM" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 ">
                                    <div class=" slect-status locationData">
                                        <label for="lpname" class="mb-2">Project Name <span class="red">*</span></label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <select class="form-select" aria-label="select" id="lpname" name="lpname" required>
                                            <option value="" disabled hidden selected>Select Project Name</option>
                                            <option value="Carpenter">Carpenter</option>
                                            <option value="Painter">Painter</option>
                                            <option value="Worker">Worker</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end">
                                        <button class="discard" type="button">Back</button>
                                        <button type="submit" class="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Attendance pop up ends  -->

    </div>
</section>




<?php include 'inc/footer.php' ?>