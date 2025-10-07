<?php
$pageTitle = 'Backup and Restore';
include 'inc/header.php'
?>

<!-- delet popup component  -->
<?php include 'components/delete-popup.php' ?>
<!-- delet popup component ends -->

<section class="admin_container d-flex">


    <?php
    $currentPage = 'BackupRestore';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto accounting_container">
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
                    <a href="#">Data Management </a>
                    <span>/</span>
                    <p>Backup & Restore</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">

                <?php include 'components/profile.php' ?>
                <?php include 'components/notification.php' ?>

            </div>
        </div>
        <!-- TOP PROFILE HEADER ENDS  -->

        <div class="admin_list_heading d-flex align-items-center flex-wrap gap-3 justify-content-between outer_padding">
            <div class="left_heading">
                <h3>Backup & Restore</h3>
                <p>You can view the Ledger list accordingly.</p>
            </div>
        </div>


        <div class="pl_pr">
            <div class="backup_filter_button_container d-flex align-items-center gap-3 flex-wrap">
                <button class="active" data-filter="backup">Backup</button>
                <button data-filter="upload_restore">Upload & Restore</button>
            </div>


            <div class="backupfilterable_data">
                <!-- backup data div  -->
                <div class="data active" data-category="backup">
                    <div class="account_buttons d-flex align-items-center gap-2 flex-wrap">
                        <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                            <div class="search">
                                <input type="text" placeholder="Backup File Name" name="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>

                            <?php
                            $title = "Backup Search Form";
                            include 'components/asset-filter.php';
                            ?>
                        </div>

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

                        <button class="export" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M13.6997 7.41797C16.6997 7.6763 17.9247 9.21797 17.9247 12.593V12.7013C17.9247 16.4263 16.4331 17.918 12.7081 17.918H7.28307C3.55807 17.918 2.06641 16.4263 2.06641 12.7013V12.593C2.06641 9.24297 3.27474 7.7013 6.22474 7.4263" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 12.499V3.01562" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.7923 4.8737L10.0007 2.08203L7.20898 4.8737" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Export
                        </button>

                        <button class="print">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.0013 18.3346C14.5846 18.3346 18.3346 14.5846 18.3346 10.0013C18.3346 5.41797 14.5846 1.66797 10.0013 1.66797C5.41797 1.66797 1.66797 5.41797 1.66797 10.0013C1.66797 14.5846 5.41797 18.3346 10.0013 18.3346Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.66797 10H13.3346" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 13.3346V6.66797" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Backup
                        </button>
                    </div>
                </div>
                <!-- backup data div  -->

                <!-- uplaod and restore data  -->
                <div class="data" data-category="upload_restore">
                    <div class="account_buttons d-flex align-items-center gap-2 flex-wrap">
                        <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                            <div class="search">
                                <input type="text" placeholder="Backup File Name" name="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>

                            <?php
                            $title = "Backup Search Form";
                            include 'components/asset-filter.php';
                            ?>
                        </div>

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

                        <button class="export" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M13.6997 7.41797C16.6997 7.6763 17.9247 9.21797 17.9247 12.593V12.7013C17.9247 16.4263 16.4331 17.918 12.7081 17.918H7.28307C3.55807 17.918 2.06641 16.4263 2.06641 12.7013V12.593C2.06641 9.24297 3.27474 7.7013 6.22474 7.4263" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 12.499V3.01562" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.7923 4.8737L10.0007 2.08203L7.20898 4.8737" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Export
                        </button>

                        <button class="print ListMsgPopBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.0013 18.3346C14.5846 18.3346 18.3346 14.5846 18.3346 10.0013C18.3346 5.41797 14.5846 1.66797 10.0013 1.66797C5.41797 1.66797 1.66797 5.41797 1.66797 10.0013C1.66797 14.5846 5.41797 18.3346 10.0013 18.3346Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.66797 10H13.3346" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 13.3346V6.66797" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Upload & Restore
                        </button>
                    </div>
                </div>
                <!-- upload and restore data end -->
            </div>


            <!-- backup data table  -->
            <div id="printableTable">
                <div class="common_table backup_table">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="wrap_Text">Database Name</th>
                                    <th scope="col" class="wrap_Text">Backup start date </th>
                                    <th scope="col" class="wrap_Text">End start date</th>
                                    <th scope="col" class="wrap_Text">Type Database</th>
                                    <th scope="col" class="wrap_Text">Backup file name</th>
                                    <th scope="col">File Size</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <tr>
                                    <td class="wrap_Text">PENAHAK_demo</td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td class="wrap_Text">PANAHAK_COMPANY_DB</td>
                                    <td class="wrap_Text">D:\DATA\BACKUP\demo\e661cca2-1c78-4b2f-9e19-56080edc9d0a.bak</td>
                                    <td class="wrap_Text">34 MB</td>
                                    <td>
                                        <div class="success_status">
                                            Success
                                        </div>
                                    </td>
                                    <td class="wrap_Text action">
                                        <!-- not aviable  -->
                                        <div class="not-available">
                                            Not Available
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="wrap_Text">PENAHAK_demo</td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td class="wrap_Text">PANAHAK_COMPANY_DB</td>
                                    <td class="wrap_Text">D:\DATA\BACKUP\demo\e661cca2-1c78-4b2f-9e19-56080edc9d0a.bak</td>
                                    <td class="wrap_Text">34 MB</td>
                                    <td>
                                        <div class="text-center">
                                            -----
                                        </div>
                                    </td>
                                    <td class="wrap_Text action">
                                        <div class="d-flex align-items-center gap-2 justify-content-center">
                                            <div class="refresh">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                                    <path d="M9.5 22H15.5C20.5 22 22.5 20 22.5 15V9C22.5 4 20.5 2 15.5 2H9.5C4.5 2 2.5 4 2.5 9V15C2.5 20 4.5 22 9.5 22Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M18 12C18 15.04 15.54 17.5 12.5 17.5C9.46 17.5 7.60999 14.44 7.60999 14.44M7.60999 14.44H10.09M7.60999 14.44V17.19M7 12C7 8.96 9.44 6.5 12.5 6.5C16.17 6.5 18 9.56 18 9.56M18 9.56V6.81M18 9.56H15.56" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="download">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                                    <path d="M14.0523 10.8242L9.49977 15.3767L4.94727 10.8242" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.5 2.625V15.2475" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="wrap_Text">PENAHAK_demo</td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td class="wrap_Text">PANAHAK_COMPANY_DB</td>
                                    <td class="wrap_Text">D:\DATA\BACKUP\demo\e661cca2-1c78-4b2f-9e19-56080edc9d0a.bak</td>
                                    <td class="wrap_Text">34 MB</td>
                                    <td>
                                        <div class="success_status">
                                            Success
                                        </div>
                                    </td>
                                    <td class="wrap_Text action">
                                        <!-- not aviable  -->
                                        <div class="not-available">
                                            Not Available
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="wrap_Text">PENAHAK_demo</td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td class="wrap_Text">PANAHAK_COMPANY_DB</td>
                                    <td class="wrap_Text">D:\DATA\BACKUP\demo\e661cca2-1c78-4b2f-9e19-56080edc9d0a.bak</td>
                                    <td class="wrap_Text">34 MB</td>
                                    <td>
                                        <div class="text-center">
                                            -----
                                        </div>
                                    </td>
                                    <td class="wrap_Text action">
                                        <div class="d-flex align-items-center gap-2 justify-content-center">
                                            <div class="refresh">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                                    <path d="M9.5 22H15.5C20.5 22 22.5 20 22.5 15V9C22.5 4 20.5 2 15.5 2H9.5C4.5 2 2.5 4 2.5 9V15C2.5 20 4.5 22 9.5 22Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M18 12C18 15.04 15.54 17.5 12.5 17.5C9.46 17.5 7.60999 14.44 7.60999 14.44M7.60999 14.44H10.09M7.60999 14.44V17.19M7 12C7 8.96 9.44 6.5 12.5 6.5C16.17 6.5 18 9.56 18 9.56M18 9.56V6.81M18 9.56H15.56" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="download">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                                    <path d="M14.0523 10.8242L9.49977 15.3767L4.94727 10.8242" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.5 2.625V15.2475" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="wrap_Text">PENAHAK_demo</td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td class="wrap_Text">PANAHAK_COMPANY_DB</td>
                                    <td class="wrap_Text">D:\DATA\BACKUP\demo\e661cca2-1c78-4b2f-9e19-56080edc9d0a.bak</td>
                                    <td class="wrap_Text">34 MB</td>
                                    <td>
                                        <div class="success_status">
                                            Success
                                        </div>
                                    </td>
                                    <td class="wrap_Text action">
                                        <!-- not aviable  -->
                                        <div class="not-available">
                                            Not Available
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="wrap_Text">PENAHAK_demo</td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_Date_container">
                                            <p>2025-08-07</p>
                                            <p>09:15:22</p>
                                        </div>
                                    </td>
                                    <td class="wrap_Text">PANAHAK_COMPANY_DB</td>
                                    <td class="wrap_Text">D:\DATA\BACKUP\demo\e661cca2-1c78-4b2f-9e19-56080edc9d0a.bak</td>
                                    <td class="wrap_Text">34 MB</td>
                                    <td>
                                        <div class="text-center">
                                            -----
                                        </div>
                                    </td>
                                    <td class="wrap_Text action">
                                        <div class="d-flex align-items-center gap-2 justify-content-center">
                                            <div class="refresh">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                                    <path d="M9.5 22H15.5C20.5 22 22.5 20 22.5 15V9C22.5 4 20.5 2 15.5 2H9.5C4.5 2 2.5 4 2.5 9V15C2.5 20 4.5 22 9.5 22Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M18 12C18 15.04 15.54 17.5 12.5 17.5C9.46 17.5 7.60999 14.44 7.60999 14.44M7.60999 14.44H10.09M7.60999 14.44V17.19M7 12C7 8.96 9.44 6.5 12.5 6.5C16.17 6.5 18 9.56 18 9.56M18 9.56V6.81M18 9.56H15.56" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="download">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                                    <path d="M14.0523 10.8242L9.49977 15.3767L4.94727 10.8242" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.5 2.625V15.2475" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mb-5 mt-3">
                <?php include 'inc/pagination.php' ?>
            </div>
            <!-- backup data table  -->

        </div>


    </div>
</section>


<!-- Image upload popup  -->
<div class="list_msg_pop_bg">
    <div class="ass_filter_popcontent">
        <div class="bg_white">
            <div class="ass_heading">
                <h5>Upload & Restore</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" id="closeListMsgPop">
                    <path d="M10.0013 1.66602C5.40964 1.66602 1.66797 5.40768 1.66797 9.99935C1.66797 14.591 5.40964 18.3327 10.0013 18.3327C14.593 18.3327 18.3346 14.591 18.3346 9.99935C18.3346 5.40768 14.593 1.66602 10.0013 1.66602ZM12.8013 11.916C13.043 12.1577 13.043 12.5577 12.8013 12.7993C12.6763 12.9243 12.518 12.9827 12.3596 12.9827C12.2013 12.9827 12.043 12.9243 11.918 12.7993L10.0013 10.8827L8.08464 12.7993C7.95964 12.9243 7.8013 12.9827 7.64297 12.9827C7.48464 12.9827 7.3263 12.9243 7.2013 12.7993C6.95964 12.5577 6.95964 12.1577 7.2013 11.916L9.11797 9.99935L7.2013 8.08268C6.95964 7.84102 6.95964 7.44102 7.2013 7.19935C7.44297 6.95768 7.84297 6.95768 8.08464 7.19935L10.0013 9.11602L11.918 7.19935C12.1596 6.95768 12.5596 6.95768 12.8013 7.19935C13.043 7.44102 13.043 7.84102 12.8013 8.08268L10.8846 9.99935L12.8013 11.916Z" fill="#FF0000" />
                </svg>
            </div>

            <div class="c_asset_sub_heading">
                <h5 class="m-0">Upload & Restore</h5>
            </div>

            <div class="asset_filter_form">
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">
                            <div class="col-12">
                                <div>
                                    <label class="up_label">Upload Image<span>*</span></label>
                                    <label class="file-upload" data-upload="voucharImage">
                                        <div class="placeholder-data">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                <path d="M9.94702 25.7871H7.38696C3.46696 25.5071 1.70703 22.4938 1.70703 19.8138C1.70703 17.1338 3.46698 14.1071 7.32031 13.8404C7.86698 13.7871 8.34696 14.2138 8.38696 14.7738C8.42696 15.3204 8.01369 15.8004 7.45369 15.8404C4.86703 16.0271 3.70703 17.9738 3.70703 19.8271C3.70703 21.6804 4.86703 23.6271 7.45369 23.8138H9.94702C10.4937 23.8138 10.947 24.2671 10.947 24.8138C10.947 25.3604 10.4937 25.7871 9.94702 25.7871Z" fill="#141414" />
                                                <path d="M22.2272 25.786C22.2005 25.786 22.1872 25.786 22.1605 25.786C21.6139 25.786 21.1072 25.3327 21.1072 24.786C21.1072 24.2127 21.5339 23.786 22.0939 23.786C23.7339 23.786 25.2006 23.2127 26.3472 22.186C28.4272 20.3727 28.5605 17.7594 28.0005 15.9194C27.4405 14.0927 25.8805 11.9994 23.1605 11.666C22.7205 11.6127 22.3738 11.2794 22.2938 10.8394C21.7605 7.63936 20.0405 5.42602 17.4272 4.62602C14.7339 3.78602 11.5872 4.61269 9.62716 6.66602C7.7205 8.65269 7.28051 11.4394 8.38717 14.506C8.57384 15.026 8.30724 15.5993 7.78724 15.786C7.26724 15.9727 6.69388 15.706 6.50721 15.186C5.16054 11.426 5.77389 7.82602 8.18722 5.29269C10.6539 2.70602 14.6139 1.67934 18.0139 2.71934C21.1339 3.67934 23.3338 6.25268 24.1338 9.82601C26.8538 10.4393 29.0405 12.506 29.9072 15.3594C30.8539 18.466 30.0005 21.666 27.6672 23.6927C26.1872 25.026 24.2538 25.786 22.2272 25.786Z" fill="#141414" />
                                                <path d="M16.0007 29.7064C13.3207 29.7064 10.814 28.2797 9.44067 25.973C9.29401 25.7464 9.14734 25.4797 9.02734 25.1864C8.57401 24.2397 8.33398 23.1597 8.33398 22.0397C8.33398 17.813 11.774 14.373 16.0007 14.373C20.2273 14.373 23.6673 17.813 23.6673 22.0397C23.6673 23.173 23.4273 24.2397 22.9473 25.2264C22.8407 25.4797 22.694 25.7464 22.534 25.9997C21.1873 28.2797 18.6807 29.7064 16.0007 29.7064ZM16.0007 16.373C12.8807 16.373 10.334 18.9197 10.334 22.0397C10.334 22.8664 10.5073 23.6397 10.8407 24.3464C10.9473 24.573 11.0406 24.7597 11.1473 24.933C12.1606 26.653 14.014 27.7064 15.9873 27.7064C17.9606 27.7064 19.814 26.653 20.814 24.9597C20.934 24.7597 21.0407 24.573 21.1207 24.3864C21.4807 23.653 21.654 22.8797 21.654 22.053C21.6673 18.9197 19.1207 16.373 16.0007 16.373Z" fill="#141414" />
                                                <path d="M15.2405 24.3604C14.9872 24.3604 14.7339 24.2671 14.5339 24.0671L13.2138 22.7471C12.8272 22.3604 12.8272 21.7204 13.2138 21.3338C13.6005 20.9471 14.2405 20.9471 14.6272 21.3338L15.2672 21.9738L17.4005 20.0004C17.8138 19.6271 18.4405 19.6538 18.8138 20.0538C19.1872 20.4538 19.1605 21.0938 18.7605 21.4671L15.9205 24.0938C15.7205 24.2671 15.4805 24.3604 15.2405 24.3604Z" fill="#141414" />
                                            </svg>
                                            <p>Choose a file or drag & drop it here</p>
                                            <span>Upload the Design & Drawing</span>
                                        </div>
                                        <input type="file" name="voucharImage" required>
                                        <div class="preview" data-preview="voucharImage"></div>
                                    </label>
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
<!-- Image upload  popup  -->

<?php include 'inc/footer.php' ?>