<?php
$pageTitle = 'Purchase Requisation';
$view = $_GET['view'] ?? 'projects';
if ($view === 'subcontractor') {
    $pageTitle = 'Sub Contractor';
} else {
    $pageTitle = 'Purchase Requisation';
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
                        <path d="M9 1.5C7.035 1.5 5.4375 3.0975 5.4375 5.0625C5.4375 6.99 6.945 8.55 8.91 8.6175C8.97 8.61 9.03 8.61 9.075 8.6175C9.09 8.6175 9.0975 8.6175 9.1125 8.6175C9.12 8.6175 9.12 8.6175 9.1275 8.6175C11.0475 8.55 12.555 6.99 12.5625 5.0625C12.5625 3.0975 10.965 1.5 9 1.5Z" fill="#141414" />
                        <path d="M12.8088 10.6127C10.7162 9.21766 7.30375 9.21766 5.19625 10.6127C4.24375 11.2502 3.71875 12.1127 3.71875 13.0352C3.71875 13.9577 4.24375 14.8127 5.18875 15.4427C6.23875 16.1477 7.61875 16.5002 8.99875 16.5002C10.3787 16.5002 11.7587 16.1477 12.8088 15.4427C13.7537 14.8052 14.2788 13.9502 14.2788 13.0202C14.2713 12.0977 13.7537 11.2427 12.8088 10.6127Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="project-list.php">Administration</a>
                    <span>/</span>
                    <p> Users</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">
                <?php include 'components/profile.php' ?>
                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- top profile header ends  -->


        <div class="admin_list_heading  outer_padding d-flex align-items-center flex-wrap gap-1 gap-sm-3 justify-content-between">
            <div class="left_heading asset_summary_heading">
                <h3>Purchase requisation </h3>
                <p>You can view the Quotation list accordingly.</p>
            </div>
        </div>

        <div class="purchase_requisation_data_container pl_pr">
            <?php include 'inc/dasbord/chart-list.php' ?>

            <!-- button div  -->
            <div class="requistation_btns_container d-flex align-items-center justify-content-end">
                <div class="account_buttons d-flex align-items-center gap-2 flex-wrap">
                    <?php include 'components/search.php' ?>
                    <?php
                    $title = "Purchase Requisition";
                    $formId = "purchaseForm";
                    $redirectPage = "purchase-requisation.php";
                    include 'components/asset-filter.php';
                    ?>
                    <a href="add-purchase-requisation.php" class="add_purchase">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10.0013 18.3327C14.5846 18.3327 18.3346 14.5827 18.3346 9.99935C18.3346 5.41602 14.5846 1.66602 10.0013 1.66602C5.41797 1.66602 1.66797 5.41602 1.66797 9.99935C1.66797 14.5827 5.41797 18.3327 10.0013 18.3327Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.66797 10H13.3346" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 13.3327V6.66602" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Add Purchase Requisation
                    </a>
                    <button class="export" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M13.6997 7.41797C16.6997 7.6763 17.9247 9.21797 17.9247 12.593V12.7013C17.9247 16.4263 16.4331 17.918 12.7081 17.918H7.28307C3.55807 17.918 2.06641 16.4263 2.06641 12.7013V12.593C2.06641 9.24297 3.27474 7.7013 6.22474 7.4263" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 12.499V3.01562" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.7923 4.8737L10.0007 2.08203L7.20898 4.8737" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Export
                    </button>
                    <button type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M6.66797 10.166H12.5013" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.66797 13.5H10.318" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.33464 4.99935H11.668C13.3346 4.99935 13.3346 4.16602 13.3346 3.33268C13.3346 1.66602 12.5013 1.66602 11.668 1.66602H8.33464C7.5013 1.66602 6.66797 1.66602 6.66797 3.33268C6.66797 4.99935 7.5013 4.99935 8.33464 4.99935Z" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3333 3.34961C16.1083 3.49961 17.5 4.52461 17.5 8.33294V13.3329C17.5 16.6663 16.6667 18.3329 12.5 18.3329H7.5C3.33333 18.3329 2.5 16.6663 2.5 13.3329V8.33294C2.5 4.53294 3.89167 3.49961 6.66667 3.34961" stroke="#005399" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Reporting
                    </button>
                    <button class="email" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10.8832 9.11719C12.7582 10.9922 12.7582 14.0255 10.8832 15.8922C9.00821 17.7589 5.97487 17.7672 4.1082 15.8922C2.24154 14.0172 2.2332 10.9839 4.1082 9.11719" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.82578 11.1734C6.87578 9.22344 6.87578 6.05677 8.82578 4.09844C10.7758 2.14011 13.9424 2.14844 15.9008 4.09844C17.8591 6.04844 17.8508 9.21511 15.9008 11.1734" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Link
                    </button>
                    <button class="print" type="button" onclick="window.print()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M6.04102 5.83464H13.9577V4.16797C13.9577 2.5013 13.3327 1.66797 11.4577 1.66797H8.54102C6.66602 1.66797 6.04102 2.5013 6.04102 4.16797V5.83464Z" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3327 12.5V15.8333C13.3327 17.5 12.4993 18.3333 10.8327 18.3333H9.16602C7.49935 18.3333 6.66602 17.5 6.66602 15.8333V12.5H13.3327Z" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5 8.33203V12.4987C17.5 14.1654 16.6667 14.9987 15 14.9987H13.3333V12.4987H6.66667V14.9987H5C3.33333 14.9987 2.5 14.1654 2.5 12.4987V8.33203C2.5 6.66536 3.33333 5.83203 5 5.83203H15C16.6667 5.83203 17.5 6.66536 17.5 8.33203Z" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.1673 12.5H13.159H5.83398" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.83398 9.16797H8.33398" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Print
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
                                    <th scope="col">Requisation Number</th>
                                    <th scope="col">Supplier</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <?php foreach (array_slice($projectList, 0, 12) as $project): ?>
                                    <tr>
                                        <th scope="row"><?= $project['requisationnumber'] ?></th>
                                        <td><?= $project['Supplier'] ?></td>
                                        <td><?= $project['date'] ?></td>
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
                                                <a href="add-purchase-requisation.php" title="View">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                        <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                                <a href="add-purchase-requisation.php" title="Edit">
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




<?php include 'inc/footer.php' ?>