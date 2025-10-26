<?php
$chartData = [
    'cashTitle'  => 'Total Labor  ',
    'cashsubTitle'  => 'Your Total Balance is ',
    'cashValue'  => '100,0000',
    'bankTitle'  => 'Total Payable',
    'bankValue'  => '3,56,792.230',
    'paymentTitle' => 'Total Payment',
    'paymentsubTitle' => 'Payment Not Finished',
    'paymentValue' => '20',
];
$pageTitle = 'Labour List';
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
    $currentPage = 'labourlist';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto">
        <!-- top profile header  -->
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M13.5 1.5H4.5C3.255 1.5 2.25 2.4975 2.25 3.7275V11.91C2.25 13.14 3.255 14.1375 4.5 14.1375H5.07C5.67 14.1375 6.24 14.37 6.66 14.79L7.9425 16.0575C8.5275 16.635 9.48 16.635 10.065 16.0575L11.3475 14.79C11.7675 14.37 12.345 14.1375 12.9375 14.1375H13.5C14.745 14.1375 15.75 13.14 15.75 11.91V3.7275C15.75 2.4975 14.745 1.5 13.5 1.5ZM9 4.3125C9.9675 4.3125 10.7475 5.0925 10.7475 6.06C10.7475 7.0275 9.9675 7.8075 9 7.8075C8.0325 7.8075 7.2525 7.02 7.2525 6.06C7.2525 5.0925 8.0325 4.3125 9 4.3125ZM11.01 11.295H6.99C6.3825 11.295 6.03 10.62 6.3675 10.1175C6.8775 9.36 7.8675 8.85 9 8.85C10.1325 8.85 11.1225 9.36 11.6325 10.1175C11.97 10.62 11.61 11.295 11.01 11.295Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="labour-list.php">Labor Management </a>
                    <span>/</span>
                    <p>Labor List</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">
                <?php include 'components/profile.php' ?>


                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- top profile header  -->


        <div class="admin_list_heading d-flex align-items-center flex-wrap gap-3 justify-content-between outer_padding">
            <div class="left_heading">
                <h3>Labor List</h3>
                <p>You can view the Project list accordingly.</p>
            </div>

            <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">

                <?php include 'components/search.php' ?>

                <!-- <div class="filter_comp">
                    <?php include 'components/filter.php' ?>
                </div> -->

                <div class="track_btns_container d-flex align-items-center gap-2">
                    <a href="labour-track.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15 15.7174H14.3667C13.7 15.7174 13.0667 15.9758 12.6 16.4424L11.175 17.8508C10.525 18.4924 9.46668 18.4924 8.81668 17.8508L7.39166 16.4424C6.925 15.9758 6.28333 15.7174 5.625 15.7174H5C3.61667 15.7174 2.5 14.6091 2.5 13.2425V4.15076C2.5 2.78409 3.61667 1.67578 5 1.67578H15C16.3833 1.67578 17.5 2.78409 17.5 4.15076V13.2425C17.5 14.6008 16.3833 15.7174 15 15.7174Z" stroke="#00427A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.0003 8.33253C11.0726 8.33253 11.942 7.4632 11.942 6.39085C11.942 5.3185 11.0726 4.44922 10.0003 4.44922C8.92792 4.44922 8.05859 5.3185 8.05859 6.39085C8.05859 7.4632 8.92792 8.33253 10.0003 8.33253Z" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3327 13.0487C13.3327 11.5487 11.841 10.332 9.99935 10.332C8.15768 10.332 6.66602 11.5487 6.66602 13.0487" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Track
                    </a>

                    <a href="#" id="assigned_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M9.99935 18.3327C14.5827 18.3327 18.3327 14.5827 18.3327 9.99935C18.3327 5.41602 14.5827 1.66602 9.99935 1.66602C5.41602 1.66602 1.66602 5.41602 1.66602 9.99935C1.66602 14.5827 5.41602 18.3327 9.99935 18.3327Z" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.66602 10H13.3327" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 13.3327V6.66602" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Assigned
                    </a>
                </div>


                <a href="#"
                    class="add-labour-btn"
                    data-title="Add Labour">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99935 18.3327C14.5827 18.3327 18.3327 14.5827 18.3327 9.99935C18.3327 5.41602 14.5827 1.66602 9.99935 1.66602C5.41602 1.66602 1.66602 5.41602 1.66602 9.99935C1.66602 14.5827 5.41602 18.3327 9.99935 18.3327Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.66602 10H13.3327" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 13.3327V6.66602" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Add Labor
                </a>
            </div>
        </div>


        <!-- top  chart list  -->
        <div class="mb-5 pl_pr">
            <?php include 'inc/dasbord/chart-list.php' ?>
        </div>
        <!-- top chart list ends  -->


        <div class="project_list_table pl_pr">
            <div class="common_table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Labor Name</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Gender</th>
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
                                                class="add-labour-btn"
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

            <div class="mb-5 mt-3">
                <?php include 'inc/pagination.php' ?>
            </div>
        </div>
    </div>
</section>



<!-- assigned labour popup  -->
<div class="assigned_labour_bg">
    <div class="assigned_labour_content_bg">
        <div class="content">
            <div class="ass_heading">
                <h5>Assignment</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="close-assign-btn">
                    <path d="M10.0013 1.66602C5.40964 1.66602 1.66797 5.40768 1.66797 9.99935C1.66797 14.591 5.40964 18.3327 10.0013 18.3327C14.593 18.3327 18.3346 14.591 18.3346 9.99935C18.3346 5.40768 14.593 1.66602 10.0013 1.66602ZM12.8013 11.916C13.043 12.1577 13.043 12.5577 12.8013 12.7993C12.6763 12.9243 12.518 12.9827 12.3596 12.9827C12.2013 12.9827 12.043 12.9243 11.918 12.7993L10.0013 10.8827L8.08464 12.7993C7.95964 12.9243 7.8013 12.9827 7.64297 12.9827C7.48464 12.9827 7.3263 12.9243 7.2013 12.7993C6.95964 12.5577 6.95964 12.1577 7.2013 11.916L9.11797 9.99935L7.2013 8.08268C6.95964 7.84102 6.95964 7.44102 7.2013 7.19935C7.44297 6.95768 7.84297 6.95768 8.08464 7.19935L10.0013 9.11602L11.918 7.19935C12.1596 6.95768 12.5596 6.95768 12.8013 7.19935C13.043 7.44102 13.043 7.84102 12.8013 8.08268L10.8846 9.99935L12.8013 11.916Z" fill="#FF0000" />
                </svg>
            </div>

            <div class="c_asset_sub_heading">
                <h5>Assign Labor</h5>
                <p>Please kindly complete the form to Assign </p>
            </div>

            <!-- asset filter form  -->
            <div class="asset_filter_form">
                <div class="common_form">
                    <form action="" id="<?= $formId ?>" data-redirect="<?= $redirectPage ?>">
                        <div class="row g-3 align-items-end">

                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="Project">Project</label>
                                    <input type="text" placeholder="Enter a Project" name="Project" id="Project">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="lab_name">Labor Name <span>*</span></label>
                                    <input type="text" placeholder="Enter your Project Name" name="lab_name" id="lab_name" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                                    <button class="discard" type="button">Back</button>
                                    <button type="submit" class="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- asset filter form end  -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- assigned labour popup ends  -->





<?php include 'inc/footer.php' ?>