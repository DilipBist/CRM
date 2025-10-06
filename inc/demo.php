    <!-- cRM SIDE BAR   -->
    <div class="app_side_bar">
        <div class="app_side_bar_content">
            <div class="side_bar_logo">
                <img src="assets/images/ST_white_logo.svg" alt="St Builders">
            </div>
            <div class="admin_content" id="sidebar-accordion">
                <div class="admin_dash_cat">
                    <h6>Overview</h6>
                    <div class="admin_dash_btns">
                        <a href="index.php" class="menu-item <?php echo ($currentPage === 'dashboard') ? 'active' : ''; ?>">
                            Dashboard
                        </a>
                    </div>
                </div>
                <div class="admin_dash_cat">
                    <h6>Construction Management</h6>
                    <div class="admin_dash_btns">
                        <div class="accordion d-flex flex-column gap-2">
                            <div class="accordion-item">
                                <h2 class="accordion-header">

                                    <a href="#" class="menu-item accordion-button <?php echo ($currentPage === 'projectlist' || $currentPage === 'subcontractor' || $currentPage === 'labourlist') ? '' : 'collapsed'; ?>" data-bs-toggle="collapse" data-bs-target="#menu-collapse-construction" aria-expanded="<?php echo ($currentPage === 'userlist' || $currentPage === 'roles' || $currentPage === 'scopes') ? 'true' : 'false'; ?>"
                                        aria-controls="menu-collapse-construction">
                                        Site Management
                                    </a>
                                </h2>
                                <div id="menu-collapse-construction" class="accordion-collapse collapse <?php echo ($currentPage === 'projectlist' || $currentPage === 'subcontractor' || $currentPage === 'labourlist') ? 'show' : ''; ?>"
                                    data-bs-parent="#sidebar-accordion">
                                    <div class="accordion-body">

                                        <a href="project-list.php?view=projects" class="menu-item <?php echo ($currentPage === 'projectlist') ? 'active' : ''; ?>">
                                            Projects
                                        </a>

                                        <a href="project-list.php?view=subcontractor" class="menu-item <?php echo ($currentPage === 'subcontractor') ? 'active' : ''; ?>">
                                            Sub Contractor
                                        </a>


                                        <a href="labour-list.php" class="menu-item <?php echo ($currentPage === 'labourlist') ? 'active' : ''; ?>">
                                            Labors
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="admin_dash_cat">
                    <h6>Finance Management</h6>
                    <div class="admin_dash_btns">
                        <div class="accordion d-flex flex-column gap-2">
                            <div class="accordion-item">
                                <h2 class="accordion-header">

                                    <a href="#" class="menu-item accordion-button <?php echo ($currentPage === 'Journal' || $currentPage === 'Payment' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'accounting') ? '' : 'collapsed'; ?>" data-bs-toggle="collapse" data-bs-target="#menu-collapse-one" aria-expanded="<?php echo ($currentPage === '' || $currentPage === '' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'accounting') ? 'true' : 'false'; ?>"
                                        aria-controls="menu-collapse-one">
                                        Purchase & Accounting
                                    </a>
                                </h2>

                                <div id="menu-collapse-one" class="accordion-collapse collapse <?php echo ($currentPage === 'Journal' || $currentPage === 'Payment' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'accounting') ? 'show' : ''; ?>"
                                    data-bs-parent="#sidebar-accordion">
                                    <div class="accordion-body">

                                        <!-- inner accordion   -->
                                        <div class="accordion d-flex flex-column gap-2 inner_accordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <a href="#" class="menu-item accordion-button <?php echo ($currentPage === 'Journal' || $currentPage === 'Payment' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'accounting') ? '' : 'collapsed'; ?>" data-bs-toggle="collapse" data-bs-target="#menu-collapse-inner" aria-expanded="<?php echo ($currentPage === 'Journal' || $currentPage === 'Payment' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'accounting') ? 'true' : 'false'; ?>"
                                                        aria-controls="menu-collapse-one">
                                                        Accounting
                                                    </a>
                                                </h2>
                                                <div id="menu-collapse-inner" class="accordion-collapse collapse <?php echo ($currentPage === 'Journal' || $currentPage === 'Payment' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'accounting') ? 'show' : ''; ?>"
                                                    data-bs-parent="#sidebar-accordion1">
                                                    <div class="accordion-body pb-0">
                                                        <a href="journal-vourcher.php" class="menu-item  <?php echo ($currentPage === 'Journal') ? 'active' : ''; ?>">
                                                            Journal Vouchar
                                                        </a>
                                                        <a href="payment-voucher.php" class="menu-item  <?php echo ($currentPage === 'Payment') ? 'active' : ''; ?>">
                                                            Payment Vouchar
                                                        </a>
                                                        <a href="receipt-vouchar.php" class="menu-item  <?php echo ($currentPage === 'Receipt') ? 'active' : ''; ?>">
                                                            Receipt Vouchar
                                                        </a>
                                                        <a href="contra.php" class="menu-item  <?php echo ($currentPage === 'Contra') ? 'active' : ''; ?>">
                                                            Contra
                                                        </a>
                                                        <a href="PDC.php" class="menu-item  <?php echo ($currentPage === 'PDC') ? 'active' : ''; ?>">
                                                            PDC
                                                        </a>

                                                        <div class="menu-item left_arrow_container active">
                                                            <div class="d-flex align-items-center gap-2">
                                                                Account Ledger
                                                            </div>
                                                            <i class="ri-arrow-right-s-line"></i>

                                                            <div class="common_inner_dropdown_container account_group">
                                                                <a href="#">
                                                                    Account Group
                                                                </a>
                                                                <a href="#">
                                                                    General Ledger
                                                                </a>
                                                                <a href="#">
                                                                    Ledger
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- inner accordion   -->
                                        <a href="#" class="menu-item left_arrow_container <?php echo ($currentPage === 'userlist') ? '' : ''; ?>">
                                            <div class="d-flex align-items-center gap-2">
                                                Purchase Entries
                                            </div>

                                            <i class="ri-arrow-right-s-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>