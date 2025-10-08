<?php
$view = $_GET['view'] ?? 'projects';
if ($view === 'subcontractor') {
    $pageTitle = 'Sub Contractor List of task';
} else {
    $pageTitle = 'List of task';
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
                    <p>List of Task</p>
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
                <h3>List of Task</h3>
                <p>You can view the Product list accordingly.</p>
            </div>



            <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                <div class="search">
                    <input type="text" placeholder="Search" name="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

                <?php
                $title = "Task List";
                include 'components/asset-filter.php'
                ?>

                <!-- button div  -->
                <div class="account_buttons d-flex align-items-center gap-2 flex-wrap">

                    <button class="export" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M13.6997 7.41797C16.6997 7.6763 17.9247 9.21797 17.9247 12.593V12.7013C17.9247 16.4263 16.4331 17.918 12.7081 17.918H7.28307C3.55807 17.918 2.06641 16.4263 2.06641 12.7013V12.593C2.06641 9.24297 3.27474 7.7013 6.22474 7.4263" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 12.499V3.01562" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.7923 4.8737L10.0007 2.08203L7.20898 4.8737" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Export
                    </button>
                    <button type="button" onclick="window.print()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M6.04297 5.83268H13.9596V4.16602C13.9596 2.49935 13.3346 1.66602 11.4596 1.66602H8.54297C6.66797 1.66602 6.04297 2.49935 6.04297 4.16602V5.83268Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3346 12.5V15.8333C13.3346 17.5 12.5013 18.3333 10.8346 18.3333H9.16797C7.5013 18.3333 6.66797 17.5 6.66797 15.8333V12.5H13.3346Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5 8.33398V12.5007C17.5 14.1673 16.6667 15.0007 15 15.0007H13.3333V12.5007H6.66667V15.0007H5C3.33333 15.0007 2.5 14.1673 2.5 12.5007V8.33398C2.5 6.66732 3.33333 5.83398 5 5.83398H15C16.6667 5.83398 17.5 6.66732 17.5 8.33398Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.1654 12.5H13.157H5.83203" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.83203 9.16602H8.33203" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Print
                    </button>
                    <a href="#" class="listPopBtn" data-title="Add Task">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M9.99935 18.3327C14.5827 18.3327 18.3327 14.5827 18.3327 9.99935C18.3327 5.41602 14.5827 1.66602 9.99935 1.66602C5.41602 1.66602 1.66602 5.41602 1.66602 9.99935C1.66602 14.5827 5.41602 18.3327 9.99935 18.3327Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.66602 10H13.3327" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 13.3327V6.66602" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Add
                    </a>
                </div>
                <!-- button div  -->
            </div>
        </div>



        <div class="pl_pr" id="printableTable">
            <div class="common_table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Task</th>
                                <th scope="col">Assigned To</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php foreach ($projectList as $project): ?>
                                <tr>
                                    <th scope="row"><?= $project['date'] ?></th>
                                    <td><?= $project['ledger'] ?></td>
                                    <td><?= $project['name'] ?></td>
                                    <td>
                                        <!--
                                        total two status and wo classes accordion to the status 
                                        (deal_state class for Just Started and progress_state class for In Progress)
                                        -->
                                        <div class="<?= $project['assign_class'] ?>">
                                            <?= $project['assign'] ?>
                                        </div>
                                    </td>
                                    <td class="action_icons">
                                        <div class="table_actions">
                                            <a href="#" class="listPopBtn" data-title="Edit Task">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M9.94355 2.70041L3.78605 9.21791C3.55355 9.46541 3.32855 9.95291 3.28355 10.2904L3.00605 12.7204C2.90855 13.5979 3.53855 14.1979 4.40855 14.0479L6.82355 13.6354C7.16105 13.5754 7.63355 13.3279 7.86605 13.0729L14.0235 6.55541C15.0885 5.43041 15.5685 4.14791 13.911 2.58041C12.261 1.02791 11.0085 1.57541 9.94355 2.70041Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.91797 3.78711C9.24047 5.85711 10.9205 7.43961 13.0055 7.64961" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M2.25 16.5H15.75" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#" title="Delete" class="delete delete_row_btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M15.75 4.48438C13.2525 4.23687 10.74 4.10938 8.235 4.10938C6.75 4.10938 5.265 4.18438 3.78 4.33438L2.25 4.48438" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.375 3.7275L6.54 2.745C6.66 2.0325 6.75 1.5 8.0175 1.5H9.9825C11.25 1.5 11.3475 2.0625 11.46 2.7525L11.625 3.7275" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.1373 6.85547L13.6498 14.408C13.5673 15.5855 13.4998 16.5005 11.4073 16.5005H6.5923C4.4998 16.5005 4.4323 15.5855 4.3498 14.408L3.8623 6.85547" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.74707 12.375H10.2446" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.125 9.375H10.875" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#" class="ListMsgPopBtn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M16.5 7.5V9.75C16.5 12.75 15 14.25 12 14.25H11.625C11.3925 14.25 11.1675 14.3625 11.025 14.55L9.9 16.05C9.405 16.71 8.595 16.71 8.1 16.05L6.975 14.55C6.855 14.385 6.5775 14.25 6.375 14.25H6C3 14.25 1.5 13.5 1.5 9.75V6C1.5 3 3 1.5 6 1.5H10.5" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.625 5.25C15.6605 5.25 16.5 4.41053 16.5 3.375C16.5 2.33947 15.6605 1.5 14.625 1.5C13.5895 1.5 12.75 2.33947 12.75 3.375C12.75 4.41053 13.5895 5.25 14.625 5.25Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11.9959 8.25H12.0026" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.99588 8.25H9.00262" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M5.99588 8.25H6.00262" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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

            <div class="mb-5 mt-3 print_pagination">
                <?php include 'inc/pagination.php' ?>
            </div>

        </div>
    </div>
</section>


<!-- List message edit popup  -->
<div class="list_msg_pop_bg">
    <div class="ass_filter_popcontent">
        <div class="bg_white">
            <div class="ass_heading">
                <h5>Message</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" id="closeListMsgPop">
                    <path d="M10.0013 1.66602C5.40964 1.66602 1.66797 5.40768 1.66797 9.99935C1.66797 14.591 5.40964 18.3327 10.0013 18.3327C14.593 18.3327 18.3346 14.591 18.3346 9.99935C18.3346 5.40768 14.593 1.66602 10.0013 1.66602ZM12.8013 11.916C13.043 12.1577 13.043 12.5577 12.8013 12.7993C12.6763 12.9243 12.518 12.9827 12.3596 12.9827C12.2013 12.9827 12.043 12.9243 11.918 12.7993L10.0013 10.8827L8.08464 12.7993C7.95964 12.9243 7.8013 12.9827 7.64297 12.9827C7.48464 12.9827 7.3263 12.9243 7.2013 12.7993C6.95964 12.5577 6.95964 12.1577 7.2013 11.916L9.11797 9.99935L7.2013 8.08268C6.95964 7.84102 6.95964 7.44102 7.2013 7.19935C7.44297 6.95768 7.84297 6.95768 8.08464 7.19935L10.0013 9.11602L11.918 7.19935C12.1596 6.95768 12.5596 6.95768 12.8013 7.19935C13.043 7.44102 13.043 7.84102 12.8013 8.08268L10.8846 9.99935L12.8013 11.916Z" fill="#FF0000" />
                </svg>
            </div>

            <div class="c_asset_sub_heading">
                <h5 class="m-0">Message</h5>
            </div>

            <div class="asset_filter_form">
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">


                            <div class="col-12">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="assigned_name">Description <span>*</span></label>
                                    <textarea name="description" placeholder="Write something awesome..." required></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                                    <button class="discard popup-btn1" type="button">Back</button>
                                    <button type="submit" class="submit popup-btn2">Done</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- List message edit popup  -->

<!-- List Add Popup  -->
<div class="addlisttask_bg">
    <div class="ass_filter_popcontent">
        <div class="bg_white">
            <div class="ass_heading">
                <h5>Asset</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" id="closeListPop">
                    <path d="M10.0013 1.66602C5.40964 1.66602 1.66797 5.40768 1.66797 9.99935C1.66797 14.591 5.40964 18.3327 10.0013 18.3327C14.593 18.3327 18.3346 14.591 18.3346 9.99935C18.3346 5.40768 14.593 1.66602 10.0013 1.66602ZM12.8013 11.916C13.043 12.1577 13.043 12.5577 12.8013 12.7993C12.6763 12.9243 12.518 12.9827 12.3596 12.9827C12.2013 12.9827 12.043 12.9243 11.918 12.7993L10.0013 10.8827L8.08464 12.7993C7.95964 12.9243 7.8013 12.9827 7.64297 12.9827C7.48464 12.9827 7.3263 12.9243 7.2013 12.7993C6.95964 12.5577 6.95964 12.1577 7.2013 11.916L9.11797 9.99935L7.2013 8.08268C6.95964 7.84102 6.95964 7.44102 7.2013 7.19935C7.44297 6.95768 7.84297 6.95768 8.08464 7.19935L10.0013 9.11602L11.918 7.19935C12.1596 6.95768 12.5596 6.95768 12.8013 7.19935C13.043 7.44102 13.043 7.84102 12.8013 8.08268L10.8846 9.99935L12.8013 11.916Z" fill="#FF0000" />
                </svg>
            </div>

            <div class="c_asset_sub_heading">
                <h5>Add Task</h5>
                <p>Please kindly complete the form of General ledger</p>
            </div>

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
                                    <label for="task">Task <span>*</span></label>
                                    <input type="number" placeholder="Enter a Task" name="task" id="task" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4  slect-status">
                                <label for="Name" class="mb-2">Status <span class="red">*</span></label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="form-select" aria-label="select" id="Name" required>

                                    <option value="" hidden disabled selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>



                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="assigned_name">Assigned To <span>*</span></label>
                                    <input type="text" placeholder="Enter a Name" name="assigned_name" id="assigned_name" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                                    <button class="discard popup-btn1" type="button">Back</button>
                                    <button type="submit" class="submit popup-btn2">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- List Add Popup  -->



<?php include 'inc/footer.php' ?>