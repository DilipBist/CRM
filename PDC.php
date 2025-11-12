<?php
$pageTitle = 'PDC';
include 'inc/header.php'
?>


<!-- delet popup component  -->
<?php include 'components/delete-popup.php' ?>
<!-- delet popup component ends -->

<section class="admin_container d-flex">


    <!-- SIDE BAR  -->
    <?php
    $currentPage = 'PDC';
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
                    <a href="index.php">Finance Management </a>
                    <span>/</span>
                    <p>PDC</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">

                <?php include 'components/profile.php' ?>
                <?php include 'components/notification.php' ?>

            </div>
        </div>
        <!-- TOP PROFILE HEADER ENDS  -->

        <div class="admin_list_heading d-flex align-items-center flex-wrap gap-1 gap-sm-3 justify-content-between pt-3 pb-4 pl_pr">
            <div class="left_heading">
                <h3>PDC</h3>
                <p>You can view the Quotation list accordingly.</p>
            </div>
        </div>

        <div class="pdc_data_container pl_pr mb-5">
            <!-- chart list  -->
            <div class="top_chart_container">

                <div class="card second_payment">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div>
                            <p class="card-title">Total PDC</p>
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

                <div class="card first_card">
                    <div class="d-flex align-items-center gap-3 justify-content-between">
                        <div class="card_div">
                            <p class="card-title">Outstanding</p>
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


                <div class="card payment_card">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div>
                            <p class="card-title">Paid PDC Cheque</p>
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
                        <p class="p-title">Notation</p>
                        <div class="legend">
                            <div><span style="background-color: var(--green-donutchart)"></span> Complete</div>
                            <div><span style="background-color: var(--blue-donutchart)"></span> Pending</div>
                            <div><span style="background-color: var(--black-donutchart)"></span> Not Start</div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- chart list ends -->


            <!-- button div  -->
            <div class="requistation_btns_container d-flex align-items-center justify-content-end">
                <div class="account_buttons d-flex align-items-center gap-2 flex-wrap">
                    <?php include 'components/search.php' ?>
                    <?php
                    $title = "PDC Form";
                    include 'components/asset-filter.php';
                    ?>

                    <button class="export" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M13.6997 7.41797C16.6997 7.6763 17.9247 9.21797 17.9247 12.593V12.7013C17.9247 16.4263 16.4331 17.918 12.7081 17.918H7.28307C3.55807 17.918 2.06641 16.4263 2.06641 12.7013V12.593C2.06641 9.24297 3.27474 7.7013 6.22474 7.4263" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 12.499V3.01562" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.7923 4.8737L10.0007 2.08203L7.20898 4.8737" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Export
                    </button>
                    <button class="import" type="button" onclick="document.getElementById('fileInput').click()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.66602 10H13.3327" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 13.3346V6.66797" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="file" id="fileInput" style="display:none" />
                        Import
                    </button>

                    <button class="email" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10.8832 9.11719C12.7582 10.9922 12.7582 14.0255 10.8832 15.8922C9.00821 17.7589 5.97487 17.7672 4.1082 15.8922C2.24154 14.0172 2.2332 10.9839 4.1082 9.11719" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.82578 11.1734C6.87578 9.22344 6.87578 6.05677 8.82578 4.09844C10.7758 2.14011 13.9424 2.14844 15.9008 4.09844C17.8591 6.04844 17.8508 9.21511 15.9008 11.1734" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Email
                    </button>

                    <button class="" type="button" onclick="window.print()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M6.04297 5.83464H13.9596V4.16797C13.9596 2.5013 13.3346 1.66797 11.4596 1.66797H8.54297C6.66797 1.66797 6.04297 2.5013 6.04297 4.16797V5.83464Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3346 12.5V15.8333C13.3346 17.5 12.5013 18.3333 10.8346 18.3333H9.16797C7.5013 18.3333 6.66797 17.5 6.66797 15.8333V12.5H13.3346Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5 8.33203V12.4987C17.5 14.1654 16.6667 14.9987 15 14.9987H13.3333V12.4987H6.66667V14.9987H5C3.33333 14.9987 2.5 14.1654 2.5 12.4987V8.33203C2.5 6.66536 3.33333 5.83203 5 5.83203H15C16.6667 5.83203 17.5 6.66536 17.5 8.33203Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.1654 12.5H13.157H5.83203" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.83203 9.16797H8.33203" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Print
                    </button>

                    <button class="print add-labour-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10.0013 18.3346C14.5846 18.3346 18.3346 14.5846 18.3346 10.0013C18.3346 5.41797 14.5846 1.66797 10.0013 1.66797C5.41797 1.66797 1.66797 5.41797 1.66797 10.0013C1.66797 14.5846 5.41797 18.3346 10.0013 18.3346Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.66797 10H13.3346" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 13.3346V6.66797" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Add PDC Cheque
                    </button>
                </div>
            </div>
            <!-- button div end -->


            <div class="" id="printableTable">

                <div class="common_table PURCHASE_REQ_TABLE">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Cheque Number</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Bank Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <?php foreach (array_slice($projectList, 0, 12) as $project): ?>
                                    <tr>
                                        <th scope="row"><?= $project['date'] ?></th>
                                        <td><?= $project['name'] ?></td>
                                        <td><?= $project['uid'] ?></td>
                                        <td><?= $project['Quantity'] ?></td>
                                        <td><?= $project['branch'] ?></td>
                                        <td>
                                            <!--
                                        total three status and three classes accordion to the status 
                                        (approved, unapproved and bill)
                                        add above class accordion to state 
                                        -->
                                            <div class="<?= $project['p_class'] ?>">
                                                <?= $project['p_status'] ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table_actions">
                                                <a href="#" class="add-labour-btn" title="View">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                        <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                                <a href="#" class="add-labour-btn" title="Edit">
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

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-3 print_pagination">
                    <?php include 'inc/pagination.php' ?>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- add PDC form  -->
<div class="add_labour_component_bg">
    <div class="assigned_labour_content_bg">
        <div class="content">
            <div class="ass_heading">
                <h5>PDC Cheque</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="close-labour-btn">
                    <path d="M10.0013 1.66602C5.40964 1.66602 1.66797 5.40768 1.66797 9.99935C1.66797 14.591 5.40964 18.3327 10.0013 18.3327C14.593 18.3327 18.3346 14.591 18.3346 9.99935C18.3346 5.40768 14.593 1.66602 10.0013 1.66602ZM12.8013 11.916C13.043 12.1577 13.043 12.5577 12.8013 12.7993C12.6763 12.9243 12.518 12.9827 12.3596 12.9827C12.2013 12.9827 12.043 12.9243 11.918 12.7993L10.0013 10.8827L8.08464 12.7993C7.95964 12.9243 7.8013 12.9827 7.64297 12.9827C7.48464 12.9827 7.3263 12.9243 7.2013 12.7993C6.95964 12.5577 6.95964 12.1577 7.2013 11.916L9.11797 9.99935L7.2013 8.08268C6.95964 7.84102 6.95964 7.44102 7.2013 7.19935C7.44297 6.95768 7.84297 6.95768 8.08464 7.19935L10.0013 9.11602L11.918 7.19935C12.1596 6.95768 12.5596 6.95768 12.8013 7.19935C13.043 7.44102 13.043 7.84102 12.8013 8.08268L10.8846 9.99935L12.8013 11.916Z" fill="#FF0000" />
                </svg>
            </div>

            <div class="c_asset_sub_heading">
                <h5>Add PDC Cheque</h5>
                <p>Please kindly complete the form of PDC Form </p>
            </div>

            <!-- add labour form  -->
            <div class="add_labour_form_container">
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">
                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="cid">Cheque Number <span>*</span></label>
                                    <input type="text" placeholder="#P0001" name="cid" id="cid" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="slect-status">
                                    <label for="gender" class="mb-2">Bank Name <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="gender" name="gender" required>
                                        <option value="" disabled hidden selected>Select </option>
                                        <option value="male">Male</option>
                                        <option value="female">Felmale</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="Amount">Amount <span>*</span></label>
                                    <input type="text" placeholder="Enter Amount" name="Amount" id="Amount" required>
                                </div>
                            </div>



                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="cureent_address">Receiver Name <span>*</span></label>
                                    <input type="text" placeholder="Enter a Receiver Name" name="curent_address" id="cureent_address" required>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-4">
                                <div class="slect-status">
                                    <label for="Status" class="mb-2">Status <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="Status" name="Status" required>
                                        <option value="" disabled hidden selected>Select</option>
                                        <option value="Carpenter">Carpenter</option>
                                        <option value="Painter">Painter</option>
                                        <option value="Worker">Worker</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="upload-container">
                                    <div>
                                        <label class="up_label">Upload Image <span>*</span></label>
                                        <label class="file-upload" data-upload="design">
                                            <div class="placeholder-data">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                    <path d="M9.94702 25.7871H7.38696C3.46696 25.5071 1.70703 22.4938 1.70703 19.8138C1.70703 17.1338 3.46698 14.1071 7.32031 13.8404C7.86698 13.7871 8.34696 14.2138 8.38696 14.7738C8.42696 15.3204 8.01369 15.8004 7.45369 15.8404C4.86703 16.0271 3.70703 17.9738 3.70703 19.8271C3.70703 21.6804 4.86703 23.6271 7.45369 23.8138H9.94702C10.4937 23.8138 10.947 24.2671 10.947 24.8138C10.947 25.3604 10.4937 25.7871 9.94702 25.7871Z" fill="#141414" />
                                                    <path d="M22.2272 25.786C22.2005 25.786 22.1872 25.786 22.1605 25.786C21.6139 25.786 21.1072 25.3327 21.1072 24.786C21.1072 24.2127 21.5339 23.786 22.0939 23.786C23.7339 23.786 25.2006 23.2127 26.3472 22.186C28.4272 20.3727 28.5605 17.7594 28.0005 15.9194C27.4405 14.0927 25.8805 11.9994 23.1605 11.666C22.7205 11.6127 22.3738 11.2794 22.2938 10.8394C21.7605 7.63936 20.0405 5.42602 17.4272 4.62602C14.7339 3.78602 11.5872 4.61269 9.62716 6.66602C7.7205 8.65269 7.28051 11.4394 8.38717 14.506C8.57384 15.026 8.30724 15.5993 7.78724 15.786C7.26724 15.9727 6.69388 15.706 6.50721 15.186C5.16054 11.426 5.77389 7.82602 8.18722 5.29269C10.6539 2.70602 14.6139 1.67934 18.0139 2.71934C21.1339 3.67934 23.3338 6.25268 24.1338 9.82601C26.8538 10.4393 29.0405 12.506 29.9072 15.3594C30.8539 18.466 30.0005 21.666 27.6672 23.6927C26.1872 25.026 24.2538 25.786 22.2272 25.786Z" fill="#141414" />
                                                    <path d="M16.0007 29.7064C13.3207 29.7064 10.814 28.2797 9.44067 25.973C9.29401 25.7464 9.14734 25.4797 9.02734 25.1864C8.57401 24.2397 8.33398 23.1597 8.33398 22.0397C8.33398 17.813 11.774 14.373 16.0007 14.373C20.2273 14.373 23.6673 17.813 23.6673 22.0397C23.6673 23.173 23.4273 24.2397 22.9473 25.2264C22.8407 25.4797 22.694 25.7464 22.534 25.9997C21.1873 28.2797 18.6807 29.7064 16.0007 29.7064ZM16.0007 16.373C12.8807 16.373 10.334 18.9197 10.334 22.0397C10.334 22.8664 10.5073 23.6397 10.8407 24.3464C10.9473 24.573 11.0406 24.7597 11.1473 24.933C12.1606 26.653 14.014 27.7064 15.9873 27.7064C17.9606 27.7064 19.814 26.653 20.814 24.9597C20.934 24.7597 21.0407 24.573 21.1207 24.3864C21.4807 23.653 21.654 22.8797 21.654 22.053C21.6673 18.9197 19.1207 16.373 16.0007 16.373Z" fill="#141414" />
                                                    <path d="M15.2405 24.3604C14.9872 24.3604 14.7339 24.2671 14.5339 24.0671L13.2138 22.7471C12.8272 22.3604 12.8272 21.7204 13.2138 21.3338C13.6005 20.9471 14.2405 20.9471 14.6272 21.3338L15.2672 21.9738L17.4005 20.0004C17.8138 19.6271 18.4405 19.6538 18.8138 20.0538C19.1872 20.4538 19.1605 21.0938 18.7605 21.4671L15.9205 24.0938C15.7205 24.2671 15.4805 24.3604 15.2405 24.3604Z" fill="#141414" />
                                                </svg>
                                                <p>Choose a file or drag & drop it here</p>
                                                <span>Upload Image</span>
                                            </div>
                                            <input type="file" name="design" required>
                                            <div class="preview" data-preview="design"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end">
                                    <button class="discard" type="button">Discard</button>
                                    <button type="submit" class="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- add labour form ends -->
        </div>
    </div>
</div>
<!-- add PDC form ends -->

<?php include 'inc/footer.php' ?>