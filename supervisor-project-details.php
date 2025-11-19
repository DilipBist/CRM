<?php
$pageTitle = 'supervisor project details';
include 'inc/header.php'
?>
<!-- delet popup component  -->
<?php include 'components/delete-popup.php' ?>
<!-- delet popup component ends -->

<!-- Add labout popup component  -->
<?php include 'components/add-labour.php' ?>
<!-- Add labour popup component ends -->

<section class="admin_container d-flex">


    <?php
    $currentPage = 'supervisor';

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
                        <!-- <div class="more_p">
                            High Priority
                        </div> -->
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
            <!-- project deatails headind ends  -->

            <div class="project_details_showcase mt33">


                <!-- details shocase box  -->

                <!-- details shocase box  -->

                <div class="mt46">
                    <div class="row  g-4 g-lg-5">
                        <div class="col-xl-8">
                            <div class="project_expense_container">
                                <div class="d-flex align-items-center gap-3 flex-wrap justify-content-between mb-2">
                                    <div class="expense_heading">
                                        <h3>Daily Log Table</h3>
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
                                            Add New Log
                                        </a>
                                    </div>

                                </div>
                                <div class="expense_table common_table">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Project</th>
                                                    <th scope="col">Weather</th>
                                                    <th scope="col">Work Summary</th>
                                                    <th scope="col">Upload Image</th>
                                                    <th scope="col">Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tbody>
                                                <?php foreach (array_slice($projectList, 0, 11) as $project): ?>
                                                    <tr>
                                                        <td><?= $project['date'] ?></td>
                                                        <td>St Builder</td>
                                                        <td>Sunny</td>
                                                        <td>Lorem ifsum </td>
                                                        <td>
                                                            <div class="image_upload_div">
                                                                <div class="image">
                                                                    <img src="./assets/images/gallery.png" alt="image">
                                                                </div>
                                                                <div class="image">
                                                                    <img src="./assets/images/gallery.png" alt="image">
                                                                </div>
                                                                <div class="image">
                                                                    <img src="./assets/images/gallery.png" alt="image">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="table_actions">
                                                                <a href="#" title="View Details" class="addAssetBtn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                                        <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </svg>
                                                                </a>
                                                                <a href="#" class="addAssetBtn">
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
                                <div class="project_expense_container_new p-detail moregap">
                                    <h3>Project Details</h3>
                                    <div class="inner_content">
                                        <p>Detailed information about the project</p>

                                        <ul>
                                            <li>
                                                <p>Supervisor Name:</p>
                                                <p>Rohan Dangol</p>
                                            </li>
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
                                                <p>Labour Number:</p>
                                                <p>50</p>
                                            </li>
                                            <li>
                                                <p>Phone Number:</p>
                                                <p>9827339100</p>
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
                                </div>
                                <!-- project details ends  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- LABOUR ADDEDANCE SECTION  -->
            <div class="purchase_request_container">
                <div class="d-flex align-items-center gap-3 flex-wrap justify-content-between">
                    <div class="purchase_heading">
                        <h4>Labour Attendance</h4>
                        <p>Detailed information about the project</p>
                    </div>

                    <div class="purchase_heading_right d-flex align-items-center gap-2">
                        <?php include 'components/search.php' ?>

                        <a href="add-purchase-requisation.php" class="add-labour-btn add_purchase_btn"
                            data-title="Add Labour">
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
                                    <th scope="col">SN</th>
                                    <th scope="col">Labor Name</th>
                                    <th scope="col">Phone No</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Check In </th>
                                    <th scope="col">Check Out </th>
                                    <th scope="col">Current working Project</th>
                                    <th scope="col">Labor Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <?php foreach ($projectList as $project): ?>
                                    <tr>
                                        <th scope="row"><?= $project['id'] ?></th>
                                        <td><?= $project['labour_name'] ?></td>
                                        <td><?= $project['labour_contact'] ?></td>
                                        <td><?= $project['gender'] ?></td>
                                        <td>9.00 AM</td>
                                        <td>9.00 PM</td>
                                        <td><?= $project['location'] ?></td>
                                        <td><?= $project['labour_type'] ?></td>
                                        <td>
                                            <!--
                                        total three status and three classes accordion to the status of labour
                                        (half_day class for half day, complete_state class for present, cancelled_state class for absent) 
                                        add above class accordion to state 
                                        -->
                                            <div class="<?= $project['labour_class'] ?>">
                                                <?= $project['labour_status'] ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table_actions">
                                                <a href="tracking-details.php" class="cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                                        <path d="M9.50016 10.0726C10.7925 10.0726 11.8402 9.02492 11.8402 7.73258C11.8402 6.44023 10.7925 5.39258 9.50016 5.39258C8.20781 5.39258 7.16016 6.44023 7.16016 7.73258C7.16016 9.02492 8.20781 10.0726 9.50016 10.0726Z" stroke="#141414" stroke-width="1.5" />
                                                        <path d="M3.21527 6.3675C4.69277 -0.127498 14.3153 -0.119998 15.7853 6.375C16.6478 10.185 14.2778 13.41 12.2003 15.405C10.6928 16.86 8.30777 16.86 6.79277 15.405C4.72277 13.41 2.35277 10.1775 3.21527 6.3675Z" stroke="#141414" stroke-width="1.5" />
                                                    </svg>
                                                </a>
                                                <a href="labour-details.php" title="View Details">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                        <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                                <a href="#"
                                                    aria-label="Edit Labout List" title="Edit Labour List"
                                                    class="add-labour-btn hover-primary"
                                                    data-title="Edit Labour">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                        <path d="M9.94452 2.70041L3.78702 9.21791C3.55452 9.46541 3.32952 9.95291 3.28452 10.2904L3.00702 12.7204C2.90952 13.5979 3.53952 14.1979 4.40952 14.0479L6.82452 13.6354C7.16202 13.5754 7.63452 13.3279 7.86702 13.0729L14.0245 6.55541C15.0895 5.43041 15.5695 4.14791 13.912 2.58041C12.262 1.02791 11.0095 1.57541 9.94452 2.70041Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.91797 3.78711C9.24047 5.85711 10.9205 7.43961 13.0055 7.64961" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2.25 16.5H15.75" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                                <a href="#" title="Delete" class="delete_row_btn delete">
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
                <div class="mt-3">
                    <?php include 'inc/pagination.php' ?>
                </div>
            </div>
            <!-- LABOUR ADDEDANCE SECTION  -->


        </div>
    </div>
</section>


<!-- ===== add new log popup === -->
<div class="add-asset-filter-component">
    <div class="add_asset_filter_bg">
        <div class="ass_filter_popcontent">
            <div class="bg_white">
                <div class="ass_heading">
                    <h5>Add New Log</h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="close-add-asset">
                        <path d="M10.0013 1.66602C5.40964 1.66602 1.66797 5.40768 1.66797 9.99935C1.66797 14.591 5.40964 18.3327 10.0013 18.3327C14.593 18.3327 18.3346 14.591 18.3346 9.99935C18.3346 5.40768 14.593 1.66602 10.0013 1.66602ZM12.8013 11.916C13.043 12.1577 13.043 12.5577 12.8013 12.7993C12.6763 12.9243 12.518 12.9827 12.3596 12.9827C12.2013 12.9827 12.043 12.9243 11.918 12.7993L10.0013 10.8827L8.08464 12.7993C7.95964 12.9243 7.8013 12.9827 7.64297 12.9827C7.48464 12.9827 7.3263 12.9243 7.2013 12.7993C6.95964 12.5577 6.95964 12.1577 7.2013 11.916L9.11797 9.99935L7.2013 8.08268C6.95964 7.84102 6.95964 7.44102 7.2013 7.19935C7.44297 6.95768 7.84297 6.95768 8.08464 7.19935L10.0013 9.11602L11.918 7.19935C12.1596 6.95768 12.5596 6.95768 12.8013 7.19935C13.043 7.44102 13.043 7.84102 12.8013 8.08268L10.8846 9.99935L12.8013 11.916Z" fill="#FF0000" />
                    </svg>
                </div>

                <div class="c_asset_sub_heading">
                    <h5>Add New Log</h5>
                    <p>Please kindly fill up the following form</p>
                </div>

                <!-- add asset form  -->
                <div class="asset_filter_form">
                    <div class="common_form">
                        <form action="">
                            <div class="row g-3 align-items-end">

                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input d-flex flex-column gap-2 position-relative">
                                        <label for="date">Date</label>
                                        <input type="text" class="date-picker" id="date" placeholder="MM/DD/YYYY">
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
                                    <div class="form_input d-flex flex-column gap-2">
                                        <label for="project_name">Project Name <span>*</span></label>
                                        <input type="text" placeholder="Enter a Project Name" name="project_name" id="project_name" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form_input d-flex flex-column gap-2">
                                        <label for="weather">Weather <span>*</span></label>
                                        <input type="text" placeholder="Enter a Project Name" name="weather" id="weather" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-7">
                                    <div class="form_input d-flex flex-column gap-2">
                                        <label for="summary">Work Summary <span>*</span></label>
                                        <textarea name="summary" id="summary" class="summary-cls" placeholder="Write something awesome..."></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-5">
                                    <div class="upload-container">
                                        <div>
                                            <label class="up_label">Upload Image <span>*</span></label>
                                            <label class="file-upload" data-upload="image">
                                                <div class="placeholder-data">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                        <path d="M9.94702 25.7871H7.38696C3.46696 25.5071 1.70703 22.4938 1.70703 19.8138C1.70703 17.1338 3.46698 14.1071 7.32031 13.8404C7.86698 13.7871 8.34696 14.2138 8.38696 14.7738C8.42696 15.3204 8.01369 15.8004 7.45369 15.8404C4.86703 16.0271 3.70703 17.9738 3.70703 19.8271C3.70703 21.6804 4.86703 23.6271 7.45369 23.8138H9.94702C10.4937 23.8138 10.947 24.2671 10.947 24.8138C10.947 25.3604 10.4937 25.7871 9.94702 25.7871Z" fill="#141414" />
                                                        <path d="M22.2272 25.786C22.2005 25.786 22.1872 25.786 22.1605 25.786C21.6139 25.786 21.1072 25.3327 21.1072 24.786C21.1072 24.2127 21.5339 23.786 22.0939 23.786C23.7339 23.786 25.2006 23.2127 26.3472 22.186C28.4272 20.3727 28.5605 17.7594 28.0005 15.9194C27.4405 14.0927 25.8805 11.9994 23.1605 11.666C22.7205 11.6127 22.3738 11.2794 22.2938 10.8394C21.7605 7.63936 20.0405 5.42602 17.4272 4.62602C14.7339 3.78602 11.5872 4.61269 9.62716 6.66602C7.7205 8.65269 7.28051 11.4394 8.38717 14.506C8.57384 15.026 8.30724 15.5993 7.78724 15.786C7.26724 15.9727 6.69388 15.706 6.50721 15.186C5.16054 11.426 5.77389 7.82602 8.18722 5.29269C10.6539 2.70602 14.6139 1.67934 18.0139 2.71934C21.1339 3.67934 23.3338 6.25268 24.1338 9.82601C26.8538 10.4393 29.0405 12.506 29.9072 15.3594C30.8539 18.466 30.0005 21.666 27.6672 23.6927C26.1872 25.026 24.2538 25.786 22.2272 25.786Z" fill="#141414" />
                                                        <path d="M16.0007 29.7064C13.3207 29.7064 10.814 28.2797 9.44067 25.973C9.29401 25.7464 9.14734 25.4797 9.02734 25.1864C8.57401 24.2397 8.33398 23.1597 8.33398 22.0397C8.33398 17.813 11.774 14.373 16.0007 14.373C20.2273 14.373 23.6673 17.813 23.6673 22.0397C23.6673 23.173 23.4273 24.2397 22.9473 25.2264C22.8407 25.4797 22.694 25.7464 22.534 25.9997C21.1873 28.2797 18.6807 29.7064 16.0007 29.7064ZM16.0007 16.373C12.8807 16.373 10.334 18.9197 10.334 22.0397C10.334 22.8664 10.5073 23.6397 10.8407 24.3464C10.9473 24.573 11.0406 24.7597 11.1473 24.933C12.1606 26.653 14.014 27.7064 15.9873 27.7064C17.9606 27.7064 19.814 26.653 20.814 24.9597C20.934 24.7597 21.0407 24.573 21.1207 24.3864C21.4807 23.653 21.654 22.8797 21.654 22.053C21.6673 18.9197 19.1207 16.373 16.0007 16.373Z" fill="#141414" />
                                                        <path d="M15.2405 24.3604C14.9872 24.3604 14.7339 24.2671 14.5339 24.0671L13.2138 22.7471C12.8272 22.3604 12.8272 21.7204 13.2138 21.3338C13.6005 20.9471 14.2405 20.9471 14.6272 21.3338L15.2672 21.9738L17.4005 20.0004C17.8138 19.6271 18.4405 19.6538 18.8138 20.0538C19.1872 20.4538 19.1605 21.0938 18.7605 21.4671L15.9205 24.0938C15.7205 24.2671 15.4805 24.3604 15.2405 24.3604Z" fill="#141414" />
                                                    </svg>
                                                    <p>Choose a file or drag & drop it here</p>
                                                    <span>Upload the Image</span>
                                                </div>
                                                <input type="file" name="image" required>
                                                <div class="preview" data-preview="image"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                                        <button class="discard popup-btn1" type="button">Discard</button>
                                        <button type="submit" class="submit popup-btn2">Submit</button>
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
<!-- ===== add new log popup === -->



<?php include 'inc/footer.php' ?>