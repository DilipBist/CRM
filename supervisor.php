<?php
include 'inc/header.php'
?>

<!-- delet popup component  -->
<?php include 'components/delete-popup.php' ?>
<!-- delet popup component ends -->

<section class="admin_container d-flex">


    <?php
    $currentPage = 'supervisor';

    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto">
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
                    <p>Project List</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">
                <?php include 'components/profile.php' ?>


                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- top profile header  -->


        <div class="admin_list_heading d-flex align-items-center flex-wrap gap-1 gap-sm-3 justify-content-between pt-3 pb-4 pl_pr">
            <div class="left_heading">
                <h3>Project List</h3>
                <p>You can view the Project list accordingly.</p>
            </div>



            <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                <div class="search">
                    <input type="text" placeholder="Search" name="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>

                <button class="add_acc_group add_acc_groupBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.66602 10H13.3327" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 13.3346V6.66797" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Add Supervisor
                </button>
            </div>
        </div>

        <!-- top  chart list  -->
        <div class="mb-4 pl_pr">
            <?php
            $chartData = [
                'cashTitle'       => 'Total Pending Approvals',
                'cashsubTitle'    => 'Your Total Payable is',
                'cashValue'       => 1000,
                'bankTitle'       => 'Total completed Payment',
                'bankValue'       => '3,56,792.230',
                'paymentTitle'    => 'Total Project Budget',
                'paymentValue'    => '20,000',
                'paymentsubTitle' => 'Invoice Paid',
                'projectTitle' => 'Projects Overview',
                'legend' => [
                    'complete' => 'Payable',
                    'pending'  => 'paid',
                    'notstart' => 'Total Bill'
                ]
            ];
            ?>
            <?php include 'inc/dasbord/chart-list.php' ?>
        </div>
        <!-- top chart list ends  -->

        <!-- project list table  -->
        <div class="project_list_table pl_pr">
            <div class="common_table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Supervisor Name</th>
                                <th scope="col">Assigned Projects</th>
                                <th scope="col">Project Address</th>
                                <th scope="col">Labours Number</th>
                                <th scope="col">Phone No </th>
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
                                    <td>Sky Walk Tower, Sitapaila Site</td>
                                    <td><?= $project['location'] ?></td>
                                    <td>15</td>
                                    <td><?= $project['labour_contact'] ?></td>
                                    <td>
                                        <!--
                                        total two status and two classes accordion to the status of 
                                        (user_active class for active status and user_inactive class for hold status ) 
                                        add above class accordion to state 
                                        -->
                                        <div class="user_active">
                                            Active
                                        </div>
                                        <!-- use this for hold  --> 
                                        <!-- <div class="user_inactive">
                                            Hold
                                        </div> -->
                                    </td>
                                    <td>
                                        <div class="table_actions">
                                            <a href="#" title="View Details" class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M11.6864 8.99945C11.6864 10.4845 10.4864 11.6845 9.00141 11.6845C7.51641 11.6845 6.31641 10.4845 6.31641 8.99945C6.31641 7.51445 7.51641 6.31445 9.00141 6.31445C10.4864 6.31445 11.6864 7.51445 11.6864 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.99891 15.2016C11.6464 15.2016 14.1139 13.6416 15.8314 10.9416C16.5064 9.88406 16.5064 8.10656 15.8314 7.04906C14.1139 4.34906 11.6464 2.78906 8.99891 2.78906C6.35141 2.78906 3.88391 4.34906 2.16641 7.04906C1.49141 8.10656 1.49141 9.88406 2.16641 10.9416C3.88391 13.6416 6.35141 15.2016 8.99891 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#" aria-label="Edit" title="Edit" class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M9.94355 2.70041L3.78605 9.21791C3.55355 9.46541 3.32855 9.95291 3.28355 10.2904L3.00605 12.7204C2.90855 13.5979 3.53855 14.1979 4.40855 14.0479L6.82355 13.6354C7.16105 13.5754 7.63355 13.3279 7.86605 13.0729L14.0235 6.55541C15.0885 5.43041 15.5685 4.14791 13.911 2.58041C12.261 1.02791 11.0085 1.57541 9.94355 2.70041Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.91797 3.78711C9.24047 5.85711 10.9205 7.43961 13.0055 7.64961" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M2.25 16.5H15.75" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#" class="hover-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M15 6.1875V13.5C15 15.75 13.6575 16.5 12 16.5H6C4.3425 16.5 3 15.75 3 13.5V6.1875C3 3.75 4.3425 3.1875 6 3.1875C6 3.6525 6.18748 4.0725 6.49498 4.38C6.80248 4.6875 7.2225 4.875 7.6875 4.875H10.3125C11.2425 4.875 12 4.1175 12 3.1875C13.6575 3.1875 15 3.75 15 6.1875Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 3.1875C12 4.1175 11.2425 4.875 10.3125 4.875H7.6875C7.2225 4.875 6.80248 4.6875 6.49498 4.38C6.18748 4.0725 6 3.6525 6 3.1875C6 2.2575 6.7575 1.5 7.6875 1.5H10.3125C10.7775 1.5 11.1975 1.6875 11.505 1.995C11.8125 2.3025 12 2.7225 12 3.1875Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6 9.75H9" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6 12.75H12" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#"
                                                title="Delete"
                                                class="delete_row_btn delete"
                                                data-title="Edit User">
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
        <!-- project list table ends  -->
    </div>
</section>


<!-- Add supervisor popup  -->
<div class="AttendancePopup">
    <div class="outer_layout">
        <div class="attendance_popup_content">
            <div class="monthly_heading">
                Add Supervisor

                <button type="button" id="CloseAttendancePopup">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99935 1.66602C5.40768 1.66602 1.66602 5.40768 1.66602 9.99935C1.66602 14.591 5.40768 18.3327 9.99935 18.3327C14.591 18.3327 18.3327 14.591 18.3327 9.99935C18.3327 5.40768 14.591 1.66602 9.99935 1.66602ZM12.7993 11.916C13.041 12.1577 13.041 12.5577 12.7993 12.7993C12.6743 12.9243 12.516 12.9827 12.3577 12.9827C12.1993 12.9827 12.041 12.9243 11.916 12.7993L9.99935 10.8827L8.08268 12.7993C7.95768 12.9243 7.79935 12.9827 7.64102 12.9827C7.48268 12.9827 7.32435 12.9243 7.19935 12.7993C6.95768 12.5577 6.95768 12.1577 7.19935 11.916L9.11602 9.99935L7.19935 8.08268C6.95768 7.84102 6.95768 7.44102 7.19935 7.19935C7.44102 6.95768 7.84102 6.95768 8.08268 7.19935L9.99935 9.11602L11.916 7.19935C12.1577 6.95768 12.5577 6.95768 12.7993 7.19935C13.041 7.44102 13.041 7.84102 12.7993 8.08268L10.8827 9.99935L12.7993 11.916Z" fill="#FF0000" />
                    </svg>
                </button>
            </div>

            <div class="attendance_form mt-4">
                <h4>Add Supervisor </h4>
                <p>Please kindly fill up the following form</p>
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">
                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="supervisor_name">Supervisor Name<span>*</span> </label>
                                    <input type="text" id="supervisor_name" name="supervisor_name" placeholder="Enter  Supervisor Name" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="assigned_project">Assign project<span>*</span> </label>
                                    <input type="text" id="assigned_project" name="assigned_project" placeholder="Enter a Project Assign" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="project_address">Project Address<span>*</span> </label>
                                    <input type="text" id="project_address" name="project_address" placeholder="Enter a Project Address" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="labour_number">Number of Total Labour<span>*</span> </label>
                                    <input type="number" id="labour_number" name="Enter a Total Labour" placeholder="Enter a Project Address" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="phone_number">Phone Number<span>*</span> </label>
                                    <input type="tel" id="phone_number" name="phone_number" placeholder="Enter a phone Number" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="slect-status">
                                    <label for="Leave" class="mb-2">Status <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="Leave" name="Leave" required>
                                        <option value="" disabled hidden selected>In Progress</option>
                                        <option value="Medical">Medical leave</option>
                                        <option value="Casual">Casual Leave</option>
                                        <option value="Annual">Annual Leave</option>
                                    </select>
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
        </div>
    </div>
</div>
<!-- Add supervisor popup  -->

<?php include 'inc/footer.php' ?>