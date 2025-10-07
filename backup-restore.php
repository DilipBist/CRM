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

                        <button class="print">
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


<?php include 'inc/footer.php' ?>