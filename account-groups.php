<?php
$pageTitle = 'Account Groups';
include 'inc/header.php'
?>


<section class="admin_container d-flex">


    <?php
    $currentPage = 'accounting';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto accounting_container">
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M9 1.5C7.035 1.5 5.4375 3.0975 5.4375 5.0625C5.4375 6.99 6.945 8.55 8.91 8.6175C8.97 8.61 9.03 8.61 9.075 8.6175C9.09 8.6175 9.0975 8.6175 9.1125 8.6175C9.12 8.6175 9.12 8.6175 9.1275 8.6175C11.0475 8.55 12.555 6.99 12.5625 5.0625C12.5625 3.0975 10.965 1.5 9 1.5Z" fill="#141414" />
                        <path d="M12.8097 10.6127C10.7172 9.21766 7.30473 9.21766 5.19723 10.6127C4.24473 11.2502 3.71973 12.1127 3.71973 13.0352C3.71973 13.9577 4.24473 14.8127 5.18973 15.4427C6.23973 16.1477 7.61973 16.5002 8.99973 16.5002C10.3797 16.5002 11.7597 16.1477 12.8097 15.4427C13.7547 14.8052 14.2797 13.9502 14.2797 13.0202C14.2722 12.0977 13.7547 11.2427 12.8097 10.6127Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="account.php">Finance Management </a>
                    <span>/</span>
                    <p>Account Groups</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">
                <a href="#" class="name_tag">
                    R
                </a>

                <a href="#" class="bell">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                        <path d="M10.5165 2.42578C7.75816 2.42578 5.5165 4.66745 5.5165 7.42578V9.83411C5.5165 10.3424 5.29983 11.1174 5.0415 11.5508L4.08316 13.1424C3.4915 14.1258 3.89983 15.2174 4.98316 15.5841C8.57483 16.7841 12.4498 16.7841 16.0415 15.5841C17.0498 15.2508 17.4915 14.0591 16.9415 13.1424L15.9832 11.5508C15.7332 11.1174 15.5165 10.3424 15.5165 9.83411V7.42578C15.5165 4.67578 13.2665 2.42578 10.5165 2.42578Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                        <path d="M12.0579 2.66719C11.7996 2.59219 11.5329 2.53385 11.2579 2.50052C10.4579 2.40052 9.69128 2.45885 8.97461 2.66719C9.21628 2.05052 9.81628 1.61719 10.5163 1.61719C11.2163 1.61719 11.8163 2.05052 12.0579 2.66719Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.0166 15.8828C13.0166 17.2578 11.8916 18.3828 10.5166 18.3828C9.83327 18.3828 9.19993 18.0995 8.74993 17.6495C8.29993 17.1995 8.0166 16.5661 8.0166 15.8828" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="admin_list_heading d-flex align-items-center flex-wrap gap-3 justify-content-between outer_padding">
            <div class="left_heading">
                <h3>Account Groups</h3>
                <p>You can view the Account group list accordingly.</p>
            </div>

            <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
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

                <button class="add_acc_group" id="add_acc_group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.66602 10H13.3327" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 13.3346V6.66797" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Add
                </button>
            </div>
        </div>



        <div class="project_list_table pl_pr">
            <div class="common_table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Name</th>
                                <th scope="col">No of Ledger</th>
                                <th scope="col">Account Type</th>
                                <th scope="col">BS/PL Type</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php foreach (array_slice($projectList, 0, 11) as $project): ?>
                                <tr>
                                    <th scope="row"><?= $project['id'] ?></th>
                                    <td><?= $project['acc_g_name'] ?></td>
                                    <td><?= $project['num'] ?></td>
                                    <td><?= $project['account_type'] ?></td>
                                    <td><?= $project['pl_type'] ?></td>
                                    <td>
                                        <div class="acc_group_active">
                                            Active
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_actions">
                                            <a href="#" title="View Details" class="openLedgerPopup">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#" aria-label="Edit Labout List" title="Edit Labour List">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M9.94452 2.70041L3.78702 9.21791C3.55452 9.46541 3.32952 9.95291 3.28452 10.2904L3.00702 12.7204C2.90952 13.5979 3.53952 14.1979 4.40952 14.0479L6.82452 13.6354C7.16202 13.5754 7.63452 13.3279 7.86702 13.0729L14.0245 6.55541C15.0895 5.43041 15.5695 4.14791 13.912 2.58041C12.262 1.02791 11.0095 1.57541 9.94452 2.70041Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.91797 3.78711C9.24047 5.85711 10.9205 7.43961 13.0055 7.64961" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M2.25 16.5H15.75" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#" title="Delete" class="delete">
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

        <!-- Add Account Group pop up  -->
        <div class="AttendancePopup">
            <div class="outer_layout">
                <div class="attendance_popup_content">
                    <div class="monthly_heading">
                        Add Account Group

                        <button type="button" id="CloseAttendancePopup">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99935 1.66602C5.40768 1.66602 1.66602 5.40768 1.66602 9.99935C1.66602 14.591 5.40768 18.3327 9.99935 18.3327C14.591 18.3327 18.3327 14.591 18.3327 9.99935C18.3327 5.40768 14.591 1.66602 9.99935 1.66602ZM12.7993 11.916C13.041 12.1577 13.041 12.5577 12.7993 12.7993C12.6743 12.9243 12.516 12.9827 12.3577 12.9827C12.1993 12.9827 12.041 12.9243 11.916 12.7993L9.99935 10.8827L8.08268 12.7993C7.95768 12.9243 7.79935 12.9827 7.64102 12.9827C7.48268 12.9827 7.32435 12.9243 7.19935 12.7993C6.95768 12.5577 6.95768 12.1577 7.19935 11.916L9.11602 9.99935L7.19935 8.08268C6.95768 7.84102 6.95768 7.44102 7.19935 7.19935C7.44102 6.95768 7.84102 6.95768 8.08268 7.19935L9.99935 9.11602L11.916 7.19935C12.1577 6.95768 12.5577 6.95768 12.7993 7.19935C13.041 7.44102 13.041 7.84102 12.7993 8.08268L10.8827 9.99935L12.7993 11.916Z" fill="#FF0000" />
                            </svg>
                        </button>
                    </div>

                    <div class="attendance_form mt-4">
                        <h4>Add Account Group </h4>
                        <p>Please kindly complete the form to account group registration.</p>
                        <div class="common_form">
                            <form action="">
                                <div class="row g-3 align-items-end">

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="Name">Name<span>*</span> </label>
                                            <input type="text" id="Name" name="Name" placeholder="Enter a  Name" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="Order">Order<span>*</span> </label>
                                            <input type="text" id="Order" name="Order" placeholder="Enter a Order " required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="code">Account Group Code<span>*</span> </label>
                                            <input type="number" id="code" name="code" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label for="acount_type" class="mb-2">Account Type <span class="red">*</span></label>
                                        <select class="form-select" aria-label="select" id="acount_type" name="acount_type" required>
                                            <option value="" disabled hidden selected>Select</option>
                                            <option value="Present" >Present</option>
                                            <option value="Absent">Absent</option>
                                            <option value="other">other</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <label for="bsheet" class="mb-2">Balance Sheet Type <span class="red">*</span></label>
                                        <select class="form-select" aria-label="select" id="bsheet" name="bsheet" required>
                                            <option value="" selected hidden disabled>Inventory</option>
                                            <option value="Inventory" >Inventory</option>
                                            <option value="Carpenter">Carpenter</option>
                                            <option value="Painter">Painter</option>
                                            <option value="Worker">Worker</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end">
                                            <button class="discard" type="button">Back</button>
                                            <button type="submit" class="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Account Group pop up ends  -->




        <!-- Ledger Mapping popup  -->
        <div class="monthly_detail_popup_container acc_group_popup" id="monthly-popup">
            <div class="outer_bg ledger_mapp_width">
                <div class="monthly_update_details">

                    <div class="monthly_heading">
                        Ledger Mapping

                        <button type="button" id="CloseMonthlyPopup">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99935 1.66602C5.40768 1.66602 1.66602 5.40768 1.66602 9.99935C1.66602 14.591 5.40768 18.3327 9.99935 18.3327C14.591 18.3327 18.3327 14.591 18.3327 9.99935C18.3327 5.40768 14.591 1.66602 9.99935 1.66602ZM12.7993 11.916C13.041 12.1577 13.041 12.5577 12.7993 12.7993C12.6743 12.9243 12.516 12.9827 12.3577 12.9827C12.1993 12.9827 12.041 12.9243 11.916 12.7993L9.99935 10.8827L8.08268 12.7993C7.95768 12.9243 7.79935 12.9827 7.64102 12.9827C7.48268 12.9827 7.32435 12.9243 7.19935 12.7993C6.95768 12.5577 6.95768 12.1577 7.19935 11.916L9.11602 9.99935L7.19935 8.08268C6.95768 7.84102 6.95768 7.44102 7.19935 7.19935C7.44102 6.95768 7.84102 6.95768 8.08268 7.19935L9.99935 9.11602L11.916 7.19935C12.1577 6.95768 12.5577 6.95768 12.7993 7.19935C13.041 7.44102 13.041 7.84102 12.7993 8.08268L10.8827 9.99935L12.7993 11.916Z" fill="#FF0000" />
                            </svg>
                        </button>
                    </div>
                    <div class="admin_right_content ">

                        <div class="admin_list_heading d-flex flex-wrap align-items-center gap-1 gap-sm-3 justify-content-between my-4">
                            <div class="left_heading">
                                <h3>Ledger Mapping list</h3>
                                <p>You can view the service setup list accordingly.</p>
                            </div>
                        </div>

                        <button class="add_acc_group mb-3 mb-lg-4 ms-auto" id="AddLedgerBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.66602 10H13.3327" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 13.3346V6.66797" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Add
                        </button>

                        <div class="project_list_table">
                            <div class="common_table">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">SN</th>
                                                <th scope="col">Ledger</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tbody>
                                            <?php foreach (array_slice($projectList, 0, 12) as $project): ?>
                                                <tr>
                                                    <th scope="row"><?= $project['id'] ?></th>
                                                    <td><?= $project['ledger'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <!-- show only 10 table content  -->

                            <div class="mb-3 mt-3">
                                <?php include 'inc/pagination.php' ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Ledger Mapping popup ends  -->
    </div>
</section>


<!-- Add Account Group pop up  -->
<div class="add_account_group_popup">
    <div class="outer_layout">
        <div class="add_account_group_popup_content">
            <div class="monthly_heading">
                Add Ledger

                <button type="button" id="closeAddLedger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99935 1.66602C5.40768 1.66602 1.66602 5.40768 1.66602 9.99935C1.66602 14.591 5.40768 18.3327 9.99935 18.3327C14.591 18.3327 18.3327 14.591 18.3327 9.99935C18.3327 5.40768 14.591 1.66602 9.99935 1.66602ZM12.7993 11.916C13.041 12.1577 13.041 12.5577 12.7993 12.7993C12.6743 12.9243 12.516 12.9827 12.3577 12.9827C12.1993 12.9827 12.041 12.9243 11.916 12.7993L9.99935 10.8827L8.08268 12.7993C7.95768 12.9243 7.79935 12.9827 7.64102 12.9827C7.48268 12.9827 7.32435 12.9243 7.19935 12.7993C6.95768 12.5577 6.95768 12.1577 7.19935 11.916L9.11602 9.99935L7.19935 8.08268C6.95768 7.84102 6.95768 7.44102 7.19935 7.19935C7.44102 6.95768 7.84102 6.95768 8.08268 7.19935L9.99935 9.11602L11.916 7.19935C12.1577 6.95768 12.5577 6.95768 12.7993 7.19935C13.041 7.44102 13.041 7.84102 12.7993 8.08268L10.8827 9.99935L12.7993 11.916Z" fill="#FF0000" />
                    </svg>
                </button>
            </div>

            <div class="attendance_form mt-4">
                <h4>Add Ledger </h4>
                <p>Please kindly complete the form to account group registration.</p>
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="ledgername">Name<span>*</span> </label>
                                    <input type="text" id="ledgername" name="ledgername" placeholder="Enter a  Name" required>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="lcode">Ledger Code<span>*</span> </label>
                                    <input type="number" id="lcode" name="lcode" required placeholder="Enter a code ">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="amount">Opening Amount</label>
                                    <input type="number" id="amount" name="amount">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end">
                                    <button class="discard" type="button">Back</button>
                                    <button type="submit" class="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Account Group pop up ends  -->

<?php include 'inc/footer.php' ?>