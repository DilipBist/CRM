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
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 15.625C9.65833 15.625 9.375 15.3417 9.375 15V12.5C9.375 12.1583 9.65833 11.875 10 11.875C10.3417 11.875 10.625 12.1583 10.625 12.5V15C10.625 15.3417 10.3417 15.625 10 15.625Z" fill="#FCFCFC" />
                            <path d="M14.6671 18.8H5.33379C3.81712 18.8 2.43379 17.6333 2.18379 16.1417L1.07546 9.50001C0.892122 8.46668 1.40046 7.14168 2.22546 6.48335L8.00046 1.85835C9.11712 0.958348 10.8755 0.966681 12.0005 1.86668L17.7755 6.48335C18.5921 7.14168 19.0921 8.46668 18.9255 9.50001L17.8171 16.1333C17.5671 17.6083 16.1505 18.8 14.6671 18.8ZM9.99212 2.44168C9.55046 2.44168 9.10879 2.57501 8.78379 2.83335L3.00879 7.46668C2.54212 7.84168 2.20879 8.70835 2.30879 9.30001L3.41712 15.9333C3.56712 16.8083 4.44212 17.55 5.33379 17.55H14.6671C15.5588 17.55 16.4338 16.8083 16.5838 15.925L17.6921 9.29168C17.7838 8.70835 17.4505 7.82501 16.9921 7.45835L11.2171 2.84168C10.8838 2.57501 10.4338 2.44168 9.99212 2.44168Z" fill="#FCFCFC" />
                        </svg>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                        <path d="M17.01 12.73C17.601 12.73 18.08 12.251 18.08 11.66C18.08 11.0691 17.601 10.5901 17.01 10.5901C16.4191 10.5901 15.94 11.0691 15.94 11.66C15.94 12.251 16.4191 12.73 17.01 12.73Z" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M20 6V7.78998C19.75 7.75998 19.46 7.73999 19.15 7.73999H14.87C12.73 7.73999 12.02 8.45003 12.02 10.59V15.7H6C2.8 15.7 2 14.9 2 11.7V6C2 2.8 2.8 2 6 2H16C19.2 2 20 2.8 20 6Z" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9 15.7V19.9999" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2 11.8999H12" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.95001 20H12" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.0101 12.73C17.601 12.73 18.08 12.251 18.08 11.66C18.08 11.0691 17.601 10.5901 17.0101 10.5901C16.4191 10.5901 15.9401 11.0691 15.9401 11.66C15.9401 12.251 16.4191 12.73 17.0101 12.73Z" stroke="#F2F6FA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M20 7.78998C19.75 7.75998 19.46 7.73999 19.15 7.73999H14.87C12.73 7.73999 12.02 8.45003 12.02 10.59V19.15C12.02 21.29 12.73 22 14.87 22H19.15C21.29 22 22 21.29 22 19.15V10.59C22 8.76003 21.48 7.97998 20 7.78998ZM17.01 10.59C17.6 10.59 18.08 11.07 18.08 11.66C18.08 12.25 17.6 12.73 17.01 12.73C16.42 12.73 15.94 12.25 15.94 11.66C15.94 11.07 16.42 10.59 17.01 10.59ZM17.01 19.15C15.83 19.15 14.87 18.19 14.87 17.01C14.87 16.52 15.04 16.06 15.32 15.7C15.71 15.2 16.32 14.87 17.01 14.87C17.55 14.87 18.04 15.07 18.41 15.39C18.86 15.79 19.15 16.37 19.15 17.01C19.15 18.19 18.19 19.15 17.01 19.15Z" stroke="#F2F6FA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19.15 17.0101C19.15 18.1901 18.19 19.1501 17.01 19.1501C15.83 19.1501 14.87 18.1901 14.87 17.0101C14.87 16.5201 15.04 16.0601 15.32 15.7001C15.71 15.2001 16.32 14.8701 17.01 14.8701C17.55 14.8701 18.04 15.0701 18.41 15.3901C18.86 15.7901 19.15 16.3701 19.15 17.0101Z" stroke="#F2F6FA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.0101 12.73C17.601 12.73 18.08 12.251 18.08 11.66C18.08 11.0691 17.601 10.5901 17.0101 10.5901C16.4191 10.5901 15.9401 11.0691 15.9401 11.66C15.9401 12.251 16.4191 12.73 17.0101 12.73Z" stroke="#F2F6FA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Site Management
                                </a>


                            </h2>
                            <div id="menu-collapse-construction" class="accordion-collapse collapse <?php echo ($currentPage === 'projectlist' || $currentPage === 'subcontractor' || $currentPage === 'labourlist') ? 'show' : ''; ?>"
                                data-bs-parent="#sidebar-accordion">
                                <div class="accordion-body">

                                    <a href="project-list.php?view=projects" class="menu-item <?php echo ($currentPage === 'projectlist') ? 'active' : ''; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path d="M10.5 5.0625H7.5C6.78 5.0625 5.4375 5.0625 5.4375 3C5.4375 0.9375 6.78 0.9375 7.5 0.9375H10.5C11.22 0.9375 12.5625 0.9375 12.5625 3C12.5625 3.72 12.5625 5.0625 10.5 5.0625ZM7.5 2.0625C6.7575 2.0625 6.5625 2.0625 6.5625 3C6.5625 3.9375 6.7575 3.9375 7.5 3.9375H10.5C11.4375 3.9375 11.4375 3.7425 11.4375 3C11.4375 2.0625 11.2425 2.0625 10.5 2.0625H7.5Z" fill="#FCFCFC" />
                                            <path d="M11.25 17.0618H6.75C2.535 17.0618 1.6875 15.1268 1.6875 11.9993V7.49934C1.6875 4.07934 2.925 2.61684 5.97 2.45934C6.2775 2.44434 6.5475 2.67684 6.5625 2.99184C6.5775 3.30684 6.3375 3.56184 6.03 3.57684C3.9 3.69684 2.8125 4.33434 2.8125 7.49934V11.9993C2.8125 14.7743 3.36 15.9368 6.75 15.9368H11.25C14.64 15.9368 15.1875 14.7743 15.1875 11.9993V7.49934C15.1875 4.33434 14.1 3.69684 11.97 3.57684C11.6625 3.56184 11.4225 3.29184 11.4375 2.98434C11.4525 2.67684 11.7225 2.43684 12.03 2.45184C15.075 2.61684 16.3125 4.07934 16.3125 7.49184V11.9918C16.3125 15.1268 15.465 17.0618 11.25 17.0618Z" fill="#FCFCFC" />
                                        </svg>
                                        Projects
                                    </a>

                                    <a href="project-list.php?view=subcontractor" class="menu-item <?php echo ($currentPage === 'subcontractor') ? 'active' : ''; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path d="M10.5 5.0625H7.5C6.78 5.0625 5.4375 5.0625 5.4375 3C5.4375 0.9375 6.78 0.9375 7.5 0.9375H10.5C11.22 0.9375 12.5625 0.9375 12.5625 3C12.5625 3.72 12.5625 5.0625 10.5 5.0625ZM7.5 2.0625C6.7575 2.0625 6.5625 2.0625 6.5625 3C6.5625 3.9375 6.7575 3.9375 7.5 3.9375H10.5C11.4375 3.9375 11.4375 3.7425 11.4375 3C11.4375 2.0625 11.2425 2.0625 10.5 2.0625H7.5Z" fill="#FCFCFC" />
                                            <path d="M11.25 17.0618H6.75C2.535 17.0618 1.6875 15.1268 1.6875 11.9993V7.49934C1.6875 4.07934 2.925 2.61684 5.97 2.45934C6.2775 2.44434 6.5475 2.67684 6.5625 2.99184C6.5775 3.30684 6.3375 3.56184 6.03 3.57684C3.9 3.69684 2.8125 4.33434 2.8125 7.49934V11.9993C2.8125 14.7743 3.36 15.9368 6.75 15.9368H11.25C14.64 15.9368 15.1875 14.7743 15.1875 11.9993V7.49934C15.1875 4.33434 14.1 3.69684 11.97 3.57684C11.6625 3.56184 11.4225 3.29184 11.4375 2.98434C11.4525 2.67684 11.7225 2.43684 12.03 2.45184C15.075 2.61684 16.3125 4.07934 16.3125 7.49184V11.9918C16.3125 15.1268 15.465 17.0618 11.25 17.0618Z" fill="#FCFCFC" />
                                        </svg>
                                        Sub Contractor
                                    </a>


                                    <a href="labour-list.php" class="menu-item <?php echo ($currentPage === 'labourlist') ? 'active' : ''; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M9.9998 18.9579C9.44147 18.9579 8.8748 18.8162 8.3748 18.5246L3.4248 15.6662C2.4248 15.0829 1.7998 14.0079 1.7998 12.8496V7.14961C1.7998 5.99127 2.4248 4.91627 3.4248 4.33294L8.3748 1.47461C9.3748 0.891276 10.6165 0.891276 11.6248 1.47461L16.5748 4.33294C17.5748 4.91627 18.1998 5.99127 18.1998 7.14961V12.8496C18.1998 14.0079 17.5748 15.0829 16.5748 15.6662L11.6248 18.5246C11.1248 18.8162 10.5581 18.9579 9.9998 18.9579ZM9.9998 2.29126C9.65814 2.29126 9.30814 2.38293 8.9998 2.55793L4.0498 5.41626C3.43314 5.77459 3.0498 6.43294 3.0498 7.14961V12.8496C3.0498 13.5579 3.43314 14.2246 4.0498 14.5829L8.9998 17.4413C9.61647 17.7996 10.3831 17.7996 10.9998 17.4413L15.9498 14.5829C16.5665 14.2246 16.9498 13.5662 16.9498 12.8496V7.14961C16.9498 6.44127 16.5665 5.77459 15.9498 5.41626L10.9998 2.55793C10.6915 2.38293 10.3415 2.29126 9.9998 2.29126Z" fill="#F2F6FA" />
                                            <path d="M10.0003 9.79151C8.58359 9.79151 7.43359 8.6415 7.43359 7.22483C7.43359 5.80817 8.58359 4.6582 10.0003 4.6582C11.4169 4.6582 12.5669 5.80817 12.5669 7.22483C12.5669 8.6415 11.4169 9.79151 10.0003 9.79151ZM10.0003 5.9082C9.27526 5.9082 8.68359 6.49983 8.68359 7.22483C8.68359 7.94983 9.27526 8.54151 10.0003 8.54151C10.7253 8.54151 11.3169 7.94983 11.3169 7.22483C11.3169 6.49983 10.7253 5.9082 10.0003 5.9082Z" fill="#F2F6FA" />
                                            <path d="M13.3337 14.5076C12.992 14.5076 12.7087 14.2243 12.7087 13.8826C12.7087 12.7326 11.492 11.791 10.0003 11.791C8.50866 11.791 7.29199 12.7326 7.29199 13.8826C7.29199 14.2243 7.00866 14.5076 6.66699 14.5076C6.32533 14.5076 6.04199 14.2243 6.04199 13.8826C6.04199 12.041 7.81699 10.541 10.0003 10.541C12.1837 10.541 13.9587 12.041 13.9587 13.8826C13.9587 14.2243 13.6753 14.5076 13.3337 14.5076Z" fill="#F2F6FA" />
                                        </svg>
                                        Labors
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="admin_dash_cat">
                <h6>Inventory Management</h6>

                <div class="admin_dash_btns">
                    <a href="inventory.php" class="menu-item <?php echo ($currentPage === 'inventory') ? 'active' : ''; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M10.5 5.0625H7.5C6.78 5.0625 5.4375 5.0625 5.4375 3C5.4375 0.9375 6.78 0.9375 7.5 0.9375H10.5C11.22 0.9375 12.5625 0.9375 12.5625 3C12.5625 3.72 12.5625 5.0625 10.5 5.0625ZM7.5 2.0625C6.7575 2.0625 6.5625 2.0625 6.5625 3C6.5625 3.9375 6.7575 3.9375 7.5 3.9375H10.5C11.4375 3.9375 11.4375 3.7425 11.4375 3C11.4375 2.0625 11.2425 2.0625 10.5 2.0625H7.5Z" fill="#FCFCFC" />
                            <path d="M11.25 17.0638H6.75C2.535 17.0638 1.6875 15.1288 1.6875 12.0013V7.50129C1.6875 4.08129 2.925 2.61879 5.97 2.46129C6.2775 2.44629 6.5475 2.67879 6.5625 2.99379C6.5775 3.30879 6.3375 3.56379 6.03 3.57879C3.9 3.69879 2.8125 4.33629 2.8125 7.50129V12.0013C2.8125 14.7763 3.36 15.9388 6.75 15.9388H11.25C14.64 15.9388 15.1875 14.7763 15.1875 12.0013V7.50129C15.1875 4.33629 14.1 3.69879 11.97 3.57879C11.6625 3.56379 11.4225 3.29379 11.4375 2.98629C11.4525 2.67879 11.7225 2.43879 12.03 2.45379C15.075 2.61879 16.3125 4.08129 16.3125 7.49379V11.9938C16.3125 15.1288 15.465 17.0638 11.25 17.0638Z" fill="#FCFCFC" />
                        </svg>
                        Inventory
                    </a>
                </div>
            </div>


            <div class="admin_dash_cat">
                <h6>Finance Management</h6>

                <div class="admin_dash_btns">

                    <div class="accordion d-flex flex-column gap-2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">

                                <a href="#" class="menu-item accordion-button <?php echo ($currentPage === 'Journal' || $currentPage === 'Payment' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'GeneralLegder' || $currentPage === 'accountingGroup' || $currentPage === 'Ledger') ? '' : 'collapsed'; ?>" data-bs-toggle="collapse" data-bs-target="#menu-collapse-one" aria-expanded="<?php echo ($currentPage === '' || $currentPage === '' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'GeneralLegder' || $currentPage === 'accountingGroup' || $currentPage === 'Ledger') ? 'true' : 'false'; ?>"
                                    aria-controls="menu-collapse-one">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                        <path d="M5 23.75C3.34 23.75 1.78 22.87 0.939999 21.44C0.489999 20.72 0.25 19.87 0.25 19C0.25 16.38 2.38 14.25 5 14.25C7.62 14.25 9.75 16.38 9.75 19C9.75 19.87 9.51 20.72 9.06 21.45C8.22 22.87 6.66 23.75 5 23.75ZM5 15.75C3.21 15.75 1.75 17.21 1.75 19C1.75 19.59 1.91 20.17 2.22 20.67C2.81 21.67 3.85 22.25 5 22.25C6.15 22.25 7.19 21.66 7.78 20.68C8.09 20.17 8.25 19.6 8.25 19C8.25 17.21 6.79 15.75 5 15.75Z" fill="#FCFCFC" />
                                        <path d="M4.42988 20.7401C4.23988 20.7401 4.04988 20.6701 3.89988 20.5201L2.90988 19.5301C2.61988 19.2401 2.61988 18.76 2.90988 18.47C3.19988 18.18 3.67988 18.18 3.96988 18.47L4.44988 18.9501L6.04988 17.47C6.34988 17.19 6.82988 17.2101 7.10988 17.5101C7.38988 17.8101 7.36988 18.2901 7.06988 18.5701L4.93988 20.54C4.78988 20.67 4.60988 20.7401 4.42988 20.7401Z" fill="#FCFCFC" />
                                        <path d="M6.19004 7.80995C5.95004 7.80995 5.73005 7.69995 5.58005 7.49995C5.41005 7.26995 5.39005 6.96992 5.52005 6.71992C5.69005 6.37992 5.93005 6.04995 6.24005 5.74995L9.49005 2.48994C11.15 0.839941 13.85 0.839941 15.51 2.48994L17.26 4.26997C18 4.99997 18.45 5.97997 18.5 7.01997C18.51 7.24997 18.42 7.46995 18.25 7.61995C18.08 7.76995 17.85 7.83994 17.63 7.79994C17.43 7.76994 17.22 7.75996 17 7.75996H7.00005C6.76005 7.75996 6.53005 7.77995 6.30005 7.80995C6.27005 7.80995 6.23004 7.80995 6.19004 7.80995ZM7.86005 6.24995H16.82C16.69 5.90995 16.48 5.59996 16.2 5.31996L14.44 3.53993C13.37 2.47993 11.62 2.47993 10.54 3.53993L7.86005 6.24995Z" fill="#FCFCFC" />
                                        <path d="M17 22.75H7.62998C7.30998 22.75 7.02998 22.55 6.91998 22.26C6.80998 21.96 6.89998 21.63 7.13998 21.43C7.37998 21.23 7.59998 20.97 7.75998 20.69C8.07998 20.18 8.23998 19.6 8.23998 19.01C8.23998 17.22 6.77998 15.76 4.98998 15.76C4.05998 15.76 3.16998 16.16 2.54998 16.87C2.33998 17.1 2.00998 17.19 1.71998 17.08C1.42998 16.97 1.22998 16.69 1.22998 16.38V12C1.22998 8.92 3.12998 6.69001 6.07998 6.32001C6.34998 6.28001 6.65998 6.25 6.97998 6.25H16.98C17.22 6.25 17.53 6.26 17.85 6.31C20.8 6.65 22.73 8.89 22.73 12V17C22.75 20.44 20.44 22.75 17 22.75ZM9.17998 21.25H17C19.58 21.25 21.25 19.58 21.25 17V12C21.25 9.66 19.88 8.04998 17.66 7.78998C17.42 7.74998 17.21 7.75 17 7.75H6.99998C6.75998 7.75 6.52998 7.76999 6.29998 7.79999C4.09998 8.07999 2.74998 9.68 2.74998 12V14.82C3.42998 14.45 4.20998 14.25 4.99998 14.25C7.61998 14.25 9.74998 16.38 9.74998 19C9.74998 19.79 9.54998 20.57 9.17998 21.25Z" fill="#FCFCFC" />
                                        <path d="M22 17.25H19C17.48 17.25 16.25 16.02 16.25 14.5C16.25 12.98 17.48 11.75 19 11.75H22C22.41 11.75 22.75 12.09 22.75 12.5C22.75 12.91 22.41 13.25 22 13.25H19C18.31 13.25 17.75 13.81 17.75 14.5C17.75 15.19 18.31 15.75 19 15.75H22C22.41 15.75 22.75 16.09 22.75 16.5C22.75 16.91 22.41 17.25 22 17.25Z" fill="#FCFCFC" />
                                    </svg>
                                    Purchase & Accounting
                                </a>
                            </h2>

                            <div id="menu-collapse-one" class="accordion-collapse collapse <?php echo ($currentPage === 'Journal' || $currentPage === 'Payment' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'GeneralLegder' || $currentPage === 'accountingGroup' || $currentPage === 'Ledger') ? 'show' : ''; ?>"
                                data-bs-parent="#sidebar-accordion">
                                <div class="accordion-body">

                                    <!-- inner accordion   -->
                                    <div class="accordion d-flex flex-column gap-2 inner_accordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <a href="#" class="menu-item accordion-button <?php echo ($currentPage === 'Journal' || $currentPage === 'Payment' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'GeneralLegder' || $currentPage === 'accountingGroup' || $currentPage === 'Ledger') ? '' : 'collapsed'; ?>" data-bs-toggle="collapse" data-bs-target="#menu-collapse-inner" aria-expanded="<?php echo ($currentPage === 'Journal' || $currentPage === 'Payment' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'GeneralLegder' || $currentPage === 'accountingGroup' || $currentPage === 'Ledger') ? 'true' : 'false'; ?>"
                                                    aria-controls="menu-collapse-one">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                        <path d="M9.50049 13.75C9.50049 14.72 10.2505 15.5 11.1705 15.5H13.0505C13.8505 15.5 14.5005 14.82 14.5005 13.97C14.5005 13.06 14.1005 12.73 13.5105 12.52L10.5005 11.47C9.91049 11.26 9.5105 10.94 9.5105 10.02C9.5105 9.17999 10.1605 8.48999 10.9605 8.48999H12.8405C13.7605 8.48999 14.5105 9.26999 14.5105 10.24" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12.0005 7.5V16.5" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M22.0005 12C22.0005 17.52 17.5205 22 12.0005 22C6.48049 22 2.00049 17.52 2.00049 12C2.00049 6.48 6.48049 2 12.0005 2" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M22.0005 6V2H18.0005" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M17.0005 7L22.0005 2" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    Accounting
                                                </a>
                                            </h2>
                                            <div id="menu-collapse-inner" class="accordion-collapse collapse <?php echo ($currentPage === 'Journal' || $currentPage === 'Payment' || $currentPage === 'Receipt' || $currentPage === 'PDC' || $currentPage === 'Contra' || $currentPage === 'GeneralLegder' || $currentPage === 'accountingGroup' || $currentPage === 'Ledger') ? 'show' : ''; ?>"
                                                data-bs-parent="#sidebar-accordion1">
                                                <div class="accordion-body pb-0">
                                                    <a href="journal-vourcher.php" class="menu-item  <?php echo ($currentPage === 'Journal') ? 'active' : ''; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                            <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        Journal Vouchar
                                                    </a>
                                                    <a href="payment-voucher.php" class="menu-item  <?php echo ($currentPage === 'Payment') ? 'active' : ''; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                            <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        Payment Vouchar
                                                    </a>
                                                    <a href="receipt-vouchar.php" class="menu-item  <?php echo ($currentPage === 'Receipt') ? 'active' : ''; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                            <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        Receipt Vouchar
                                                    </a>
                                                    <a href="contra.php" class="menu-item  <?php echo ($currentPage === 'Contra') ? 'active' : ''; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                            <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        Contra
                                                    </a>
                                                    <a href="PDC.php" class="menu-item  <?php echo ($currentPage === 'PDC') ? 'active' : ''; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                            <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        PDC
                                                    </a>

                                                    <!-- <div class="menu-item left_arrow_container active">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                                <path d="M14.2622 15.4385H9.26221" stroke="#FCFCFC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M11.7622 12.998V17.998" stroke="#FCFCFC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M12.6604 2.51814L12.6304 2.58814L9.73045 9.31814H6.88045C6.20045 9.31814 5.55045 9.45814 4.96045 9.70814L6.71045 5.52814L6.75045 5.42814L6.82045 5.26814C6.84045 5.20814 6.86045 5.14814 6.89045 5.09814C8.20045 2.06814 9.68045 1.37814 12.6604 2.51814Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M18.0505 9.51819C17.6005 9.37819 17.1205 9.31819 16.6405 9.31819H9.73047L12.6305 2.58819L12.6605 2.51819C12.8105 2.56819 12.9505 2.63819 13.1005 2.69819L15.3105 3.62819C16.5405 4.13819 17.4005 4.66819 17.9205 5.30819C18.0205 5.42819 18.1005 5.53819 18.1705 5.66819C18.2605 5.80819 18.3305 5.94819 18.3705 6.09819C18.4105 6.18819 18.4405 6.27819 18.4605 6.35819C18.7305 7.19819 18.5705 8.22819 18.0505 9.51819Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M21.5222 14.1984V16.1484C21.5222 16.3484 21.5122 16.5484 21.5022 16.7484C21.3122 20.2384 19.3622 21.9984 15.6622 21.9984H7.86221C7.62221 21.9984 7.38221 21.9784 7.15221 21.9484C3.97221 21.7384 2.27221 20.0384 2.06221 16.8584C2.03221 16.6284 2.01221 16.3884 2.01221 16.1484V14.1984C2.01221 12.1884 3.23221 10.4584 4.97221 9.70836C5.57221 9.45836 6.21221 9.31836 6.89221 9.31836H16.6522C17.1422 9.31836 17.6222 9.38836 18.0622 9.51836C20.0522 10.1284 21.5222 11.9884 21.5222 14.1984Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M6.71049 5.52808L4.96049 9.70808C3.22049 10.4581 2.00049 12.1881 2.00049 14.1981V11.2681C2.00049 8.42808 4.02049 6.05808 6.71049 5.52808Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M21.5191 11.2677V14.1977C21.5191 11.9977 20.0591 10.1277 18.0591 9.52766C18.5791 8.22766 18.7291 7.20766 18.4791 6.35766C18.4591 6.26766 18.4291 6.17766 18.3891 6.09766C20.2491 7.05766 21.5191 9.02766 21.5191 11.2677Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
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
                                                    </div> -->



                                                    <!-- inner Accounting accordion   -->
                                                    <div class="accordion d-flex flex-column gap-2 inner_accordion">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <a href="#" class="menu-item accordion-button <?php echo ($currentPage === 'GeneralLegder' || $currentPage === 'accountingGroup' || $currentPage === 'Ledger') ? '' : 'collapsed'; ?>" data-bs-toggle="collapse" data-bs-target="#menu-collapse-innerTwo" aria-expanded="<?php echo ($currentPage === 'GeneralLegder' || $currentPage === 'accountingGroup' || $currentPage === 'Ledger') ? 'true' : 'false'; ?>"
                                                                    aria-controls="menu-collapse-innerTwo">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                                        <path d="M9.50049 13.75C9.50049 14.72 10.2505 15.5 11.1705 15.5H13.0505C13.8505 15.5 14.5005 14.82 14.5005 13.97C14.5005 13.06 14.1005 12.73 13.5105 12.52L10.5005 11.47C9.91049 11.26 9.5105 10.94 9.5105 10.02C9.5105 9.17999 10.1605 8.48999 10.9605 8.48999H12.8405C13.7605 8.48999 14.5105 9.26999 14.5105 10.24" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M12.0005 7.5V16.5" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M22.0005 12C22.0005 17.52 17.5205 22 12.0005 22C6.48049 22 2.00049 17.52 2.00049 12C2.00049 6.48 6.48049 2 12.0005 2" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M22.0005 6V2H18.0005" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M17.0005 7L22.0005 2" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </svg>
                                                                    Account Ledger
                                                                </a>
                                                            </h2>
                                                            <div id="menu-collapse-innerTwo" class="accordion-collapse collapse <?php echo ($currentPage === 'GeneralLegder' || $currentPage === 'accountingGroup' || $currentPage === 'Ledger') ? 'show' : ''; ?>"
                                                                data-bs-parent="#sidebar-accordion2">
                                                                <div class="accordion-body pb-0">
                                                                    <a href="account-groups.php" class="menu-item  <?php echo ($currentPage === 'accountingGroup') ? 'active' : ''; ?>">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                                            <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                        Account Group
                                                                    </a>
                                                                    <a href="general-ledger.php" class="menu-item  <?php echo ($currentPage === 'GeneralLegder') ? 'active' : ''; ?>">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                                            <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                        General Ledger
                                                                    </a>
                                                                    <a href="ledger.php" class="menu-item  <?php echo ($currentPage === 'Ledger') ? 'active' : ''; ?>">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                                            <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                        Ledger
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- inner Accounting accordion   -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- inner accordion   -->

                                    <div class="purchse_dropdown">
                                        <!-- <a href="#" class="menu-item left_arrow_container <?php echo ($currentPage === 'userlist') ? '' : ''; ?>">
                                            <div class="d-flex align-items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                    <path d="M2.00049 8.5H13.5005" stroke="#FCFCFC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.00049 16.5H8.00049" stroke="#FCFCFC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10.5005 16.5H14.5005" stroke="#FCFCFC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M22.0005 11.03V16.11C22.0005 19.62 21.1105 20.5 17.5605 20.5H6.44049C2.89049 20.5 2.00049 19.62 2.00049 16.11V7.89C2.00049 4.38 2.89049 3.5 6.44049 3.5H13.5005" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M16.5005 6L18.0005 7.5L22.0005 3.5" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Purchase Entries
                                            </div>

                                            <i class="ri-arrow-right-s-line"></i>
                                        </a> -->
                                        <div class="accordion d-flex flex-column gap-2 inner_accordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <a href="#" class="menu-item accordion-button <?php echo ($currentPage === '') ? '' : 'collapsed'; ?>" data-bs-toggle="collapse" data-bs-target="#menu-collapse-purchase" aria-expanded="<?php echo ($currentPage === '') ? 'true' : 'false'; ?>"
                                                        aria-controls="menu-collapse-purchase">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                            <path d="M2.00049 8.5H13.5005" stroke="#FCFCFC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M6.00049 16.5H8.00049" stroke="#FCFCFC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10.5005 16.5H14.5005" stroke="#FCFCFC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M22.0005 11.03V16.11C22.0005 19.62 21.1105 20.5 17.5605 20.5H6.44049C2.89049 20.5 2.00049 19.62 2.00049 16.11V7.89C2.00049 4.38 2.89049 3.5 6.44049 3.5H13.5005" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M16.5005 6L18.0005 7.5L22.0005 3.5" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        Purchase Entries
                                                    </a>
                                                </h2>
                                                <div id="menu-collapse-purchase" class="accordion-collapse collapse <?php echo ($currentPage === '') ? 'show' : ''; ?>"
                                                    data-bs-parent="#sidebar-accordion2">
                                                    <div class="accordion-body pb-0">
                                                        <a href="#" class="menu-item  <?php echo ($currentPage === '') ? 'active' : ''; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                                <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            Purchase Requisition
                                                        </a>
                                                        <a href="#" class="menu-item  <?php echo ($currentPage === '') ? 'active' : ''; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                                <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            Quotation
                                                        </a>
                                                        <a href="#" class="menu-item  <?php echo ($currentPage === '') ? 'active' : ''; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                                                <path d="M20 7.04V16.96C20 18.48 19.86 19.56 19.5 20.33C19.5 20.34 19.49 20.36 19.48 20.37C19.26 20.65 18.97 20.79 18.63 20.79C18.1 20.79 17.46 20.44 16.77 19.7C15.95 18.82 14.69 18.89 13.97 19.85L12.96 21.19C12.56 21.73 12.03 22 11.5 22C10.97 22 10.44 21.73 10.04 21.19L9.02002 19.84C8.31002 18.89 7.05999 18.82 6.23999 19.69L6.22998 19.7C5.09998 20.91 4.10002 21.09 3.52002 20.37C3.51002 20.36 3.5 20.34 3.5 20.33C3.14 19.56 3 18.48 3 16.96V7.04C3 5.52 3.14 4.44 3.5 3.67C3.5 3.66 3.50002 3.65 3.52002 3.64C4.09002 2.91 5.09998 3.09 6.22998 4.3L6.23999 4.31C7.05999 5.18 8.31002 5.11 9.02002 4.16L10.04 2.81C10.44 2.27 10.97 2 11.5 2C12.03 2 12.56 2.27 12.96 2.81L13.97 4.15C14.69 5.11 15.95 5.18 16.77 4.3C17.46 3.56 18.1 3.21 18.63 3.21C18.97 3.21 19.26 3.36 19.48 3.64C19.5 3.65 19.5 3.66 19.5 3.67C19.86 4.44 20 5.52 20 7.04Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M8 10.25H16" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M8 13.75H14" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            Purchase Order
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

                </div>
            </div>

            <div class="admin_dash_cat">
                <h6>Report & Statement</h6>

                <div class="admin_dash_btns">

                    <div class="accordion d-flex flex-column gap-2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">

                                <a href="#" class="menu-item accordion-button <?php echo ($currentPage === 'openTrail' || $currentPage === 'trailBalance' || $currentPage === 'balanceSheet' || $currentPage === 'profitLoss' || $currentPage === 'daybook' || $currentPage === 'gledger') ? '' : 'collapsed'; ?>" data-bs-toggle="collapse" data-bs-target="#menu-collapse-two" aria-expanded="<?php echo ($currentPage === 'openTrail' || $currentPage === 'trailBalance' || $currentPage === 'balanceSheet' || $currentPage === 'profitLoss' || $currentPage === 'daybook' || $currentPage === 'gledger') ? 'true' : 'false'; ?>"
                                    aria-controls="menu-collapse-two">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M14.6329 4.3875L10.1779 1.815C9.45043 1.395 8.55043 1.395 7.81543 1.815L3.36793 4.3875C2.64043 4.8075 2.19043 5.5875 2.19043 6.435V11.565C2.19043 12.405 2.64043 13.185 3.36793 13.6125L7.82293 16.185C8.55043 16.605 9.45043 16.605 10.1854 16.185L14.6404 13.6125C15.3679 13.1925 15.8179 12.4125 15.8179 11.565V6.435C15.8104 5.5875 15.3604 4.815 14.6329 4.3875ZM9.00043 5.505C9.96793 5.505 10.7479 6.285 10.7479 7.2525C10.7479 8.22 9.96793 9 9.00043 9C8.03293 9 7.25293 8.22 7.25293 7.2525C7.25293 6.2925 8.03293 5.505 9.00043 5.505ZM11.0104 12.495H6.99043C6.38293 12.495 6.03043 11.82 6.36793 11.3175C6.87793 10.56 7.86793 10.05 9.00043 10.05C10.1329 10.05 11.1229 10.56 11.6329 11.3175C11.9704 11.8125 11.6104 12.495 11.0104 12.495Z" fill="#FCFCFC" />
                                    </svg>
                                    Account Reports
                                </a>
                            </h2>
                            <div id="menu-collapse-two" class="accordion-collapse collapse <?php echo ($currentPage === 'openTrail' || $currentPage === 'trailBalance' || $currentPage === 'balanceSheet' || $currentPage === 'profitLoss' || $currentPage === 'daybook' || $currentPage === 'gledger') ? 'show' : ''; ?>"
                                data-bs-parent="#sidebar-accordion">
                                <div class="accordion-body">
                                    <a href="opening-trails.php" class="menu-item  <?php echo ($currentPage === 'openTrail') ? 'active' : ''; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                            <path d="M12.06 16.5V11.5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.5 14H9.5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M22 11V17C22 21 21 22 17 22H7C3 22 2 21 2 17V7C2 3 3 2 7 2H8.5C10 2 10.33 2.44 10.9 3.2L12.4 5.2C12.78 5.7 13 6 14 6H17C21 6 22 7 22 11Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                                        </svg>
                                        Opening Trail
                                    </a>
                                    <a href="trail-balance.php" class="menu-item  <?php echo ($currentPage === 'trailBalance') ? 'active' : ''; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                            <path d="M12.6604 2.51814L12.6304 2.58814L9.73045 9.31814H6.88045C6.20045 9.31814 5.55045 9.45814 4.96045 9.70814L6.71045 5.52814L6.75045 5.42814L6.82045 5.26814C6.84045 5.20814 6.86045 5.14814 6.89045 5.09814C8.20045 2.06814 9.68045 1.37814 12.6604 2.51814Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.0505 9.51807C17.6005 9.37807 17.1205 9.31807 16.6405 9.31807H9.73047L12.6305 2.58807L12.6605 2.51807C12.8105 2.56807 12.9505 2.63807 13.1005 2.69807L15.3105 3.62807C16.5405 4.13807 17.4005 4.66807 17.9205 5.30807C18.0205 5.42807 18.1005 5.53807 18.1705 5.66807C18.2605 5.80807 18.3305 5.94807 18.3705 6.09807C18.4105 6.18807 18.4405 6.27807 18.4605 6.35807C18.7305 7.19807 18.5705 8.22807 18.0505 9.51807Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.5222 14.1984V16.1484C21.5222 16.3484 21.5122 16.5484 21.5022 16.7484C21.3122 20.2384 19.3622 21.9984 15.6622 21.9984H7.86221C7.62221 21.9984 7.38221 21.9784 7.15221 21.9484C3.97221 21.7384 2.27221 20.0384 2.06221 16.8584C2.03221 16.6284 2.01221 16.3884 2.01221 16.1484V14.1984C2.01221 12.1884 3.23221 10.4584 4.97221 9.70836C5.57221 9.45836 6.21221 9.31836 6.89221 9.31836H16.6522C17.1422 9.31836 17.6222 9.38836 18.0622 9.51836C20.0522 10.1284 21.5222 11.9884 21.5222 14.1984Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.71049 5.52832L4.96049 9.70832C3.22049 10.4583 2.00049 12.1883 2.00049 14.1983V11.2683C2.00049 8.42832 4.02049 6.05832 6.71049 5.52832Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.5191 11.2677V14.1977C21.5191 11.9977 20.0591 10.1277 18.0591 9.52766C18.5791 8.22766 18.7291 7.20766 18.4791 6.35766C18.4591 6.26766 18.4291 6.17766 18.3891 6.09766C20.2491 7.05766 21.5191 9.02766 21.5191 11.2677Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Trail Balance
                                    </a>
                                    <a href="profit-loss.php" class="menu-item  <?php echo ($currentPage === 'profitLoss') ? 'active' : ''; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                            <path d="M22 22.75H5C2.93 22.75 1.25 21.07 1.25 19V2C1.25 1.59 1.59 1.25 2 1.25C2.41 1.25 2.75 1.59 2.75 2V19C2.75 20.24 3.76 21.25 5 21.25H22C22.41 21.25 22.75 21.59 22.75 22C22.75 22.41 22.41 22.75 22 22.75Z" fill="white" />
                                            <path d="M4.99982 17.7501C4.82982 17.7501 4.64982 17.6901 4.50982 17.5701C4.19982 17.3001 4.15982 16.8301 4.42982 16.5101L9.01982 11.1501C9.51982 10.5701 10.2398 10.2201 10.9998 10.1901C11.7598 10.1701 12.5098 10.4501 13.0498 10.9901L13.9998 11.9401C14.2498 12.1901 14.5798 12.3101 14.9298 12.3101C15.2798 12.3001 15.5998 12.1401 15.8298 11.8701L20.4198 6.51008C20.6898 6.20008 21.1598 6.16006 21.4798 6.43006C21.7898 6.70006 21.8298 7.17006 21.5598 7.49006L16.9698 12.8501C16.4698 13.4301 15.7498 13.7801 14.9898 13.8101C14.2298 13.8301 13.4798 13.5501 12.9398 13.0101L11.9998 12.0601C11.7498 11.8101 11.4198 11.6801 11.0698 11.6901C10.7198 11.7001 10.3998 11.8601 10.1698 12.1301L5.57982 17.4901C5.41982 17.6601 5.20982 17.7501 4.99982 17.7501Z" fill="whtie" />
                                        </svg>
                                        Profit & Loss
                                    </a>

                                    <a href="balance-sheet.php" class="menu-item  <?php echo ($currentPage === 'balanceSheet') ? 'active' : ''; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                            <path d="M22 6V8.42C22 10 21 11 19.42 11H16V4.01C16 2.9 16.91 2 18.02 2C19.11 2.01 20.11 2.45 20.83 3.17C21.55 3.9 22 4.9 22 6Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2 7V21C2 21.83 2.94 22.3 3.6 21.8L5.31 20.52C5.71 20.22 6.27 20.26 6.63 20.62L8.29 22.29C8.68 22.68 9.32 22.68 9.71 22.29L11.39 20.61C11.74 20.26 12.3 20.22 12.69 20.52L14.4 21.8C15.06 22.29 16 21.82 16 21V4C16 2.9 16.9 2 18 2H7H6C3 2 2 3.79 2 6V7Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 13.0098H12" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 9.00977H12" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.99561 13H6.00459" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.99561 9H6.00459" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Balance Sheet
                                    </a>

                                    <a href="#" class="menu-item  <?php echo ($currentPage === 'daybook') ? 'active' : ''; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                            <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.3801 15.27V7.57999C18.3801 6.80999 17.7601 6.25 17.0001 6.31H16.9601C15.6201 6.42 13.5901 7.11001 12.4501 7.82001L12.3401 7.89002C12.1601 8.00002 11.8501 8.00002 11.6601 7.89002L11.5001 7.79001C10.3701 7.08001 8.34012 6.40999 7.00012 6.29999C6.24012 6.23999 5.62012 6.81001 5.62012 7.57001V15.27C5.62012 15.88 6.1201 16.46 6.7301 16.53L6.9101 16.56C8.2901 16.74 10.4301 17.45 11.6501 18.12L11.6801 18.13C11.8501 18.23 12.1301 18.23 12.2901 18.13C13.5101 17.45 15.6601 16.75 17.0501 16.56L17.2601 16.53C17.8801 16.46 18.3801 15.89 18.3801 15.27Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 8.1001V17.6601" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Day book
                                    </a>


                                    <a href="#" class="menu-item  <?php echo ($currentPage === 'gledger') ? 'active' : ''; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                            <path d="M8 2V5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16 2V5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7 11H15" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7 15H12" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15 22H9C4 22 3 19.94 3 15.82V9.65C3 4.95 4.67 3.69 8 3.5H16C19.33 3.68 21 4.95 21 9.65V16" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21 16L15 22V19C15 17 16 16 18 16H21Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        General ledger
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <div class="admin_botom_drop_down_container">
            <div class="common_div" id="user_dropdown_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M19.5099 5.85L13.5699 2.42C12.5999 1.86 11.3999 1.86 10.4199 2.42L4.48992 5.85C3.51992 6.41 2.91992 7.45 2.91992 8.58V15.42C2.91992 16.54 3.51992 17.58 4.48992 18.15L10.4299 21.58C11.3999 22.14 12.5999 22.14 13.5799 21.58L19.5199 18.15C20.4899 17.59 21.0899 16.55 21.0899 15.42V8.58C21.0799 7.45 20.4799 6.42 19.5099 5.85ZM11.9999 7.34C13.2899 7.34 14.3299 8.38 14.3299 9.67C14.3299 10.96 13.2899 12 11.9999 12C10.7099 12 9.66992 10.96 9.66992 9.67C9.66992 8.39 10.7099 7.34 11.9999 7.34ZM14.6799 16.66H9.31992C8.50992 16.66 8.03992 15.76 8.48992 15.09C9.16992 14.08 10.4899 13.4 11.9999 13.4C13.5099 13.4 14.8299 14.08 15.5099 15.09C15.9599 15.75 15.4799 16.66 14.6799 16.66Z" fill="#FCFCFC" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                    <path d="M0.672629 4.4349L4.75825 0.522405C4.89444 0.391988 5.02919 0.328222 5.22914 0.33255C5.42909 0.336879 5.56095 0.406415 5.69137 0.542603L9.60387 4.62823C9.8647 4.9006 9.85605 5.30051 9.58367 5.56134C9.3113 5.82218 8.91139 5.81352 8.65056 5.54115L5.19451 1.93218L1.58554 5.38822C1.31317 5.64905 0.913264 5.64039 0.652431 5.36802C0.391597 5.09564 0.400253 4.69574 0.672629 4.4349Z" fill="#FCFCFC" />
                </svg>
            </div>
            <div class="common_div" id="activity_dropdown_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M20.3418 14.25C21.5844 14.25 22.5918 13.2426 22.5918 12C22.5918 10.7574 21.5844 9.75 20.3418 9.75C19.0992 9.75 18.0918 10.7574 18.0918 12C18.0918 13.2426 19.0992 14.25 20.3418 14.25Z" fill="#FCFCFC" />
                    <path d="M20.3418 6.25C21.5844 6.25 22.5918 5.24264 22.5918 4C22.5918 2.75736 21.5844 1.75 20.3418 1.75C19.0992 1.75 18.0918 2.75736 18.0918 4C18.0918 5.24264 19.0992 6.25 20.3418 6.25Z" fill="#F5F5F5" />
                    <path d="M20.3418 22.25C21.5844 22.25 22.5918 21.2426 22.5918 20C22.5918 18.7574 21.5844 17.75 20.3418 17.75C19.0992 17.75 18.0918 18.7574 18.0918 20C18.0918 21.2426 19.0992 22.25 20.3418 22.25Z" fill="#F5F5F5" />
                    <path d="M4.3418 14.25C5.58444 14.25 6.5918 13.2426 6.5918 12C6.5918 10.7574 5.58444 9.75 4.3418 9.75C3.09916 9.75 2.0918 10.7574 2.0918 12C2.0918 13.2426 3.09916 14.25 4.3418 14.25Z" fill="#F5F5F5" />
                    <path d="M19.3418 12.75C19.7518 12.75 20.0918 12.41 20.0918 12C20.0918 11.59 19.7518 11.25 19.3418 11.25H12.0918V7C12.0918 5.42 12.7618 4.75 14.3418 4.75H19.3418C19.7518 4.75 20.0918 4.41 20.0918 4C20.0918 3.59 19.7518 3.25 19.3418 3.25H14.3418C11.9218 3.25 10.5918 4.58 10.5918 7V11.25H5.3418C4.9318 11.25 4.5918 11.59 4.5918 12C4.5918 12.41 4.9318 12.75 5.3418 12.75H10.5918V17C10.5918 19.42 11.9218 20.75 14.3418 20.75H19.3418C19.7518 20.75 20.0918 20.41 20.0918 20C20.0918 19.59 19.7518 19.25 19.3418 19.25H14.3418C12.7618 19.25 12.0918 18.58 12.0918 17V12.75H19.3418Z" fill="#F5F5F5" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                    <path d="M0.672629 4.4349L4.75825 0.522405C4.89444 0.391988 5.02919 0.328222 5.22914 0.33255C5.42909 0.336879 5.56095 0.406415 5.69137 0.542603L9.60387 4.62823C9.8647 4.9006 9.85605 5.30051 9.58367 5.56134C9.3113 5.82218 8.91139 5.81352 8.65056 5.54115L5.19451 1.93218L1.58554 5.38822C1.31317 5.64905 0.913264 5.64039 0.652431 5.36802C0.391597 5.09564 0.400253 4.69574 0.672629 4.4349Z" fill="#FCFCFC" />
                </svg>
            </div>
            <div class="common_div">
                <a href="setting.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path d="M3.68555 9.10937V14.8794C3.68555 16.9994 3.68555 16.9994 5.68555 18.3494L11.1855 21.5294C12.0155 22.0094 13.3655 22.0094 14.1855 21.5294L19.6855 18.3494C21.6855 16.9994 21.6855 16.9994 21.6855 14.8894V9.10937C21.6855 6.99937 21.6855 6.99937 19.6855 5.64937L14.1855 2.46937C13.3655 1.98937 12.0155 1.98937 11.1855 2.46937L5.68555 5.64937C3.68555 6.99937 3.68555 6.99937 3.68555 9.10937Z" stroke="#F7F7F7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.6855 15C14.3424 15 15.6855 13.6569 15.6855 12C15.6855 10.3431 14.3424 9 12.6855 9C11.0287 9 9.68555 10.3431 9.68555 12C9.68555 13.6569 11.0287 15 12.6855 15Z" stroke="#F7F7F7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>


            <!-- common popup  -->


            <!-- user roles  -->
            <div class="common_popup_bg user_dropdown_wrapper">
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" viewBox="0 0 25 23" fill="none">
                        <path d="M15.3075 20.6014C14.1676 22.6099 11.2809 22.6311 10.1115 20.6396L0.902639 4.95695C-0.266744 2.9655 1.1582 0.454955 3.46754 0.437966L21.6536 0.30418C23.9629 0.287191 25.4247 2.77651 24.2847 4.78495L15.3075 20.6014Z" fill="white" />
                    </svg>
                </div>

                <div class="links d-flex flex-column gap-2">
                    <a href="user-list.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M9 9C11.0711 9 12.75 7.32107 12.75 5.25C12.75 3.17893 11.0711 1.5 9 1.5C6.92893 1.5 5.25 3.17893 5.25 5.25C5.25 7.32107 6.92893 9 9 9Z" fill="#005399" />
                            <path d="M8.99914 10.875C5.24164 10.875 2.18164 13.395 2.18164 16.5C2.18164 16.71 2.34664 16.875 2.55664 16.875H15.4416C15.6516 16.875 15.8166 16.71 15.8166 16.5C15.8166 13.395 12.7566 10.875 8.99914 10.875Z" fill="#005399" />
                        </svg>
                        Users
                    </a>
                    <a href="role-management.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                            <path d="M0.25586 17.1158C0.25586 17.5526 0.604142 17.908 1.03225 17.908H2.53195C2.59424 17.908 2.66057 17.8826 2.7091 17.8331L4.65735 15.8451C4.7021 15.7994 4.73069 15.7341 4.73069 15.6644V12.5317C4.73069 12.0948 4.38241 11.7394 3.95434 11.7394H2.74377V10.6683C2.74377 10.5781 2.81571 10.5046 2.90418 10.5046H7.74897V11.7394H6.5384C6.11033 11.7394 5.76205 12.0948 5.76205 12.5316V17.1158C5.76205 17.5526 6.11033 17.908 6.5384 17.908H8.0381C8.10053 17.908 8.16696 17.8824 8.21525 17.8331L10.1635 15.8451C10.2076 15.8001 10.2368 15.7351 10.2368 15.6643V12.5316C10.2368 12.0948 9.88856 11.7394 9.46049 11.7394H8.24995V10.5046H13.0947C13.1832 10.5046 13.2551 10.5781 13.2551 10.6683V11.7395H12.0446C11.6165 11.7395 11.2682 12.0948 11.2682 12.5317V17.1158C11.2682 17.5526 11.6165 17.908 12.0446 17.908H13.5443C13.6086 17.908 13.6737 17.8818 13.7214 17.8331L15.6697 15.8451C15.715 15.7989 15.743 15.7329 15.743 15.6643V14.5163C15.743 14.3751 15.6309 14.2606 15.4925 14.2606C15.3542 14.2606 15.2421 14.3751 15.2421 14.5163V15.4087H14.0702C13.6421 15.4087 13.2938 15.7641 13.2938 16.201V17.3968H12.0446C11.8927 17.3968 11.7692 17.2707 11.7692 17.1158V12.5316C11.7692 12.3767 11.8927 12.2506 12.0446 12.2506H14.9667C15.1185 12.2506 15.242 12.3767 15.242 12.5316V13.3234C15.242 13.4646 15.3542 13.579 15.4925 13.579C15.6309 13.579 15.743 13.4646 15.743 13.3234V12.5316C15.743 12.0948 15.3947 11.7394 14.9667 11.7394H13.7561V10.6683C13.7561 10.2962 13.4594 9.99341 13.0947 9.99341H8.24992V8.7154H11.0338C11.3586 8.7154 11.6228 8.44582 11.6228 8.11442V7.61044C11.6228 7.46925 11.5106 7.35484 11.3723 7.35484C11.2339 7.35484 11.1218 7.46925 11.1218 7.61044V8.11442C11.1218 8.16391 11.0823 8.20419 11.0338 8.20419H10.1773V6.45815C10.1773 6.31696 10.0651 6.20255 9.92677 6.20255C9.7884 6.20255 9.67628 6.31696 9.67628 6.45815V8.20419H6.32258V6.45815C6.32258 6.31696 6.21046 6.20255 6.07209 6.20255C5.93371 6.20255 5.8216 6.31696 5.8216 6.45815V8.20419H4.96505C4.91656 8.20419 4.87711 8.16391 4.87711 8.11442V6.27903C4.87711 5.52057 5.48183 4.90351 6.22512 4.90351H9.7737C10.517 4.90351 11.1217 5.52057 11.1217 6.27906V6.41763C11.1217 6.55883 11.2339 6.67323 11.3722 6.67323C11.5106 6.67323 11.6227 6.55883 11.6227 6.41763V6.27906C11.6227 5.23869 10.7933 4.3923 9.7737 4.3923H9.38748C9.86959 3.98436 10.1772 3.3688 10.1772 2.68126C10.1772 1.4559 9.20028 0.458984 7.99943 0.458984C6.79858 0.458984 5.8216 1.4559 5.8216 2.68126C5.8216 3.3688 6.12923 3.98436 6.61138 4.3923H6.22512C5.20559 4.3923 4.37613 5.23869 4.37613 6.27903V8.11442C4.37613 8.44582 4.64032 8.7154 4.96505 8.7154H7.74897V9.99341H2.90415C2.53947 9.99341 2.24275 10.2962 2.24275 10.6683V11.7394H1.03225C0.604142 11.7394 0.255859 12.0948 0.255859 12.5316L0.25586 17.1158ZM13.7947 16.201C13.7947 16.046 13.9183 15.92 14.0701 15.92H14.8878L13.7947 17.0353L13.7947 16.201ZM6.32258 2.68126C6.32258 1.73775 7.07478 0.970191 7.99943 0.970191C8.92404 0.970191 9.67625 1.73775 9.67625 2.68126C9.67625 3.62106 8.92815 4.3923 7.99813 4.3923C7.07412 4.39159 6.32258 3.62434 6.32258 2.68126ZM8.28856 17.0353V16.201C8.28856 16.0461 8.4121 15.92 8.56393 15.92H9.38157L8.28856 17.0353ZM9.46046 12.2506C9.61229 12.2506 9.73583 12.3767 9.73583 12.5317V15.4087H8.56393C8.13586 15.4087 7.78758 15.7641 7.78758 16.201V17.3968H6.53837C6.38654 17.3968 6.26299 17.2707 6.26299 17.1158V12.5317C6.26299 12.3767 6.38654 12.2506 6.53837 12.2506H9.46046ZM2.78244 17.0353V16.201C2.78244 16.0461 2.90598 15.92 3.05782 15.92H3.87545L2.78244 17.0353ZM0.756842 12.5316C0.756842 12.3767 0.880383 12.2506 1.03225 12.2506H3.95434C4.10617 12.2506 4.22971 12.3767 4.22971 12.5316V15.4087H3.05782C2.62974 15.4087 2.28146 15.7641 2.28146 16.201V17.3968H1.03225C0.880383 17.3968 0.756841 17.2707 0.756841 17.1158L0.756842 12.5316Z" fill="#005399" />
                        </svg>
                        Roles
                    </a>
                </div>
            </div>
            <!-- user roles  -->


            <!-- activity  -->
            <div class="common_popup_bg activity_dropdown_wrapper">
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" viewBox="0 0 25 23" fill="none">
                        <path d="M15.3075 20.6014C14.1676 22.6099 11.2809 22.6311 10.1115 20.6396L0.902639 4.95695C-0.266744 2.9655 1.1582 0.454955 3.46754 0.437966L21.6536 0.30418C23.9629 0.287191 25.4247 2.77651 24.2847 4.78495L15.3075 20.6014Z" fill="white" />
                    </svg>
                </div>

                <div class="links d-flex flex-column gap-2">
                    <a href="activity-list.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_20194_47927)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.81148 3.40457H1.63599L3.20076 1.86774V3.02225C3.1998 3.23318 3.02625 3.40363 2.81148 3.40457ZM11.762 8.85737C11.179 8.28717 10.3574 8.01786 9.54234 8.13039C8.7273 8.24293 8.01352 8.72366 7.61269 9.42989L7.5451 9.2067C7.51442 9.12384 7.42333 9.07864 7.33752 9.10406C7.25123 9.12949 7.20041 9.21612 7.22102 9.30228L7.41998 9.95298C7.4473 10.0401 7.54078 10.0895 7.62995 10.0641L8.29248 9.8687C8.37734 9.83857 8.42288 9.74911 8.39747 9.66436C8.37158 9.58008 8.28289 9.5297 8.19565 9.55041L7.87924 9.64458C8.22969 8.99576 8.8812 8.556 9.62332 8.46748C10.3659 8.37896 11.1056 8.65204 11.6043 9.19964C12.1033 9.74676 12.298 10.4991 12.1263 11.2139C11.9542 11.9291 11.4374 12.5163 10.7418 12.7865C10.0467 13.0573 9.26053 12.9768 8.63683 12.5714C8.0136 12.166 7.63104 11.4865 7.61281 10.752C7.60994 10.6611 7.53275 10.5891 7.43974 10.5919C7.34674 10.5943 7.27387 10.6705 7.27675 10.7619C7.3036 11.616 7.75951 12.4014 8.49396 12.859C9.22841 13.3171 10.146 13.3882 10.9447 13.0487C11.7429 12.7097 12.3186 12.0039 12.4816 11.1649C12.6446 10.3254 12.3737 9.46133 11.7587 8.85721L11.762 8.85737ZM8.67943 9.58058C8.64635 9.47088 8.57252 9.37718 8.47185 9.31879C8.92201 8.86254 9.56968 8.64925 10.2087 8.74625C10.8482 8.84324 11.3995 9.23921 11.6887 9.80753C11.9773 10.3758 11.9677 11.0468 11.6623 11.6071C11.3564 12.167 10.7936 12.5469 10.1516 12.6256C9.50971 12.7047 8.86877 12.4725 8.43247 12.004C7.99573 11.5351 7.81788 10.8872 7.95499 10.2666L8.37591 10.1461C8.61801 10.0712 8.75373 9.81883 8.67943 9.58058ZM9.64878 10.6824C9.64878 10.8212 9.76383 10.9342 9.90525 10.9342H9.92107L10.4968 11.4997V11.4993C10.563 11.5661 10.6713 11.5675 10.7394 11.5026C10.807 11.4376 10.8085 11.3312 10.7423 11.2643L10.1665 10.6988V10.6833C10.1646 10.6103 10.1306 10.542 10.0735 10.4954V9.18411C10.0774 9.13749 10.0615 9.09182 10.0294 9.05745C9.9973 9.02308 9.95224 9.0033 9.90478 9.0033C9.85732 9.0033 9.81178 9.02308 9.78014 9.05745C9.74802 9.09182 9.73172 9.13749 9.73603 9.18411V10.4954C9.68138 10.5425 9.64926 10.6108 9.64878 10.6824ZM6.98951 10.7704C7.00485 11.2888 7.16402 11.7935 7.44974 12.23H2.02483C1.71705 12.229 1.46728 11.9842 1.4668 11.6814V3.73692H2.8168C3.21614 3.73363 3.53878 3.41486 3.53926 3.02218V1.69629H8.81653C9.12478 1.69676 9.37456 1.94207 9.37504 2.24482V7.86432C8.97952 7.934 8.60367 8.08467 8.27049 8.30502C8.02936 8.46511 7.81313 8.6591 7.63 8.88133C7.51638 8.80693 7.37544 8.78527 7.24456 8.82247C7.12759 8.85684 7.02979 8.935 6.97178 9.04047C6.91425 9.14594 6.9013 9.2693 6.9363 9.38419L7.13525 10.0349C7.17409 10.1573 7.26278 10.2576 7.38071 10.3122C7.15107 10.3456 6.98328 10.5425 6.98951 10.7704ZM5.33603 3.73461C5.33603 3.82736 5.37294 3.91682 5.44006 3.98274C5.5067 4.04819 5.5973 4.08539 5.69223 4.08539H7.9282C8.02312 4.08586 8.1142 4.04866 8.18084 3.98274C8.24796 3.9173 8.28583 3.82783 8.28535 3.73461V3.22468C8.28439 3.03116 8.12523 2.87485 7.92819 2.8739H5.69222C5.49566 2.87531 5.33699 3.03163 5.33603 3.22468L5.33603 3.73461ZM4.627 5.2536C4.627 5.34541 4.70274 5.41981 4.79623 5.41981H8.06912C8.1626 5.41981 8.23883 5.34541 8.23883 5.2536C8.23883 5.16131 8.1626 5.08692 8.06912 5.08692H4.79623C4.70274 5.08692 4.627 5.16132 4.627 5.2536ZM4.627 6.17174C4.627 6.26356 4.70274 6.33842 4.79623 6.33842H6.50815C6.59588 6.33089 6.66299 6.25885 6.66299 6.17268C6.66299 6.08605 6.59588 6.01401 6.50815 6.00695H4.79623C4.75116 6.00648 4.70802 6.0239 4.67638 6.0545C4.64474 6.08558 4.627 6.12796 4.627 6.17174ZM4.627 7.5245C4.627 7.61632 4.70274 7.69071 4.79623 7.69071H8.06912C8.1626 7.69071 8.23883 7.61632 8.23883 7.5245C8.23883 7.43222 8.1626 7.35783 8.06912 7.35783H4.79623C4.70274 7.35783 4.627 7.43222 4.627 7.5245ZM4.19218 9.85795C4.19218 9.7506 4.14903 9.64796 4.07184 9.57215C3.99466 9.49682 3.89015 9.45397 3.78132 9.45397H2.97113C2.74437 9.45491 2.56075 9.63524 2.5598 9.85796V10.6537V10.6532C2.56123 10.8755 2.74484 11.0553 2.97113 11.0558H3.78132C4.00761 11.0558 4.1917 10.8759 4.19218 10.6532L4.19218 9.85795ZM4.19218 7.58562C4.1917 7.36337 4.00761 7.18305 3.78132 7.18305H2.97112C2.74484 7.18399 2.56124 7.36338 2.55979 7.58562V8.38135C2.56075 8.60406 2.74436 8.78439 2.97112 8.78486H3.78132C3.89015 8.78486 3.99466 8.74249 4.07184 8.66668C4.14903 8.59087 4.19217 8.48823 4.19217 8.38135L4.19218 7.58562ZM4.19218 5.31472C4.1917 5.09201 4.00808 4.91168 3.78132 4.91121H2.97112C2.74581 4.91309 2.56315 5.09107 2.55979 5.31236V6.10809C2.55883 6.21591 2.6015 6.31997 2.67868 6.39718C2.75587 6.47393 2.86134 6.51725 2.97112 6.51772H3.78131C3.89014 6.51772 3.99465 6.47534 4.07183 6.39954C4.14902 6.32373 4.19217 6.22108 4.19217 6.11373L4.19218 5.31472ZM6.2848 10.7148C6.2848 10.623 6.20905 10.5486 6.11557 10.5486H4.79625C4.70277 10.5486 4.62702 10.623 4.62702 10.7148C4.62702 10.8067 4.70277 10.8811 4.79625 10.8811H6.11557C6.16015 10.8811 6.2033 10.8636 6.23542 10.8326C6.26706 10.801 6.2848 10.7591 6.2848 10.7148ZM6.65298 9.79529C6.65298 9.70347 6.57723 9.62861 6.48375 9.62861H4.79625C4.70277 9.62861 4.62702 9.70348 4.62702 9.79529C4.62702 9.8871 4.70277 9.9615 4.79625 9.9615H6.47896C6.52355 9.9615 6.56669 9.94407 6.59834 9.91253C6.63046 9.88145 6.64819 9.83908 6.64819 9.79529L6.65298 9.79529ZM6.67407 8.44637C6.67503 8.40259 6.65777 8.35974 6.62661 8.32819C6.59593 8.29665 6.55278 8.27828 6.5082 8.27781H4.79628C4.70279 8.27781 4.62705 8.35221 4.62705 8.44402C4.62705 8.53583 4.70279 8.61023 4.79628 8.61023H6.5082C6.59976 8.60881 6.67312 8.53631 6.67407 8.44637ZM3.78139 9.78685H2.97119C2.95202 9.78638 2.93332 9.79391 2.9199 9.8071C2.90647 9.82075 2.8988 9.83912 2.8988 9.85795V10.6537V10.6532C2.8988 10.672 2.90647 10.6895 2.9199 10.7026C2.93332 10.7163 2.95202 10.7243 2.97119 10.7243H3.78139C3.80057 10.7243 3.81926 10.7163 3.83269 10.7026C3.84611 10.6895 3.8533 10.672 3.85378 10.6532V9.85748V9.85795C3.8533 9.83912 3.84611 9.82075 3.83269 9.8071C3.81926 9.79391 3.80057 9.78638 3.78139 9.78685ZM3.78139 7.51451H2.97119C2.95202 7.51498 2.93332 7.52252 2.9199 7.53617C2.90647 7.54936 2.8988 7.56725 2.8988 7.58561V8.38134C2.8988 8.40017 2.90647 8.41807 2.9199 8.43172C2.93332 8.44537 2.95202 8.45244 2.97119 8.45244H3.78139C3.80057 8.45244 3.81926 8.44537 3.83269 8.43172C3.84611 8.41807 3.8533 8.40017 3.85378 8.38134V7.58561C3.8533 7.56725 3.84611 7.54936 3.83269 7.53617C3.81926 7.52252 3.80057 7.51498 3.78139 7.51451ZM3.78139 5.24362H2.97119C2.95202 5.24409 2.93332 5.25162 2.9199 5.26528C2.90647 5.27846 2.8988 5.29635 2.8988 5.31472V6.11045C2.89928 6.12928 2.90647 6.14717 2.9199 6.16083C2.93332 6.17401 2.95202 6.18154 2.97119 6.18154H3.78139C3.80105 6.18013 3.81974 6.17119 3.83269 6.15612C3.84611 6.14246 3.8533 6.1241 3.85378 6.10527V5.31237C3.8533 5.29401 3.84611 5.27612 3.83269 5.26293C3.81878 5.25022 3.80009 5.24315 3.78139 5.24362ZM5.69225 3.75247H7.92822C7.93877 3.75341 7.9474 3.74494 7.94644 3.73458V3.22465C7.94788 3.22089 7.94788 3.21665 7.94644 3.21241C7.94308 3.20912 7.93829 3.20676 7.93302 3.20676H5.69226C5.68747 3.20676 5.68267 3.20912 5.6798 3.21241C5.67788 3.21665 5.67788 3.22089 5.6798 3.22465V3.73458C5.67836 3.73882 5.67836 3.74353 5.6798 3.74776C5.68315 3.75059 5.68746 3.75247 5.69225 3.75247Z" fill="#005399" />
                            </g>
                            <defs>
                                <clipPath id="clip0_20194_47927">
                                    <rect width="13.5" height="13.5" fill="white" transform="translate(0.25 0.25)" />
                                </clipPath>
                            </defs>
                        </svg>
                        Activity Logs
                    </a>
                    <a href="backup-restore.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M15.5318 6.08962V13.1471C15.5318 14.9921 14.0243 16.4996 12.1793 16.4996H5.8193C3.9743 16.4996 2.4668 14.9921 2.4668 13.1471V6.08962C2.4668 4.80712 3.1868 3.68962 4.2443 3.12712C4.6118 2.93212 5.0693 3.19462 5.0693 3.61462C5.0693 4.80712 6.0443 5.78212 7.2368 5.78212H10.7618C11.9543 5.78212 12.9293 4.80712 12.9293 3.61462C12.9293 3.19462 13.3793 2.93212 13.7543 3.12712C14.8118 3.68962 15.5318 4.80712 15.5318 6.08962Z" fill="#005399" />
                            <path d="M10.7628 1.5H7.23781C6.45781 1.5 5.82031 2.13 5.82031 2.91V3.615C5.82031 4.395 6.45031 5.025 7.23031 5.025H10.7628C11.5428 5.025 12.1728 4.395 12.1728 3.615V2.91C12.1803 2.13 11.5428 1.5 10.7628 1.5Z" fill="#005399" />
                        </svg>
                        Backup & Restore
                    </a>
                </div>
            </div>
            <!-- activity  -->

            <!-- common popup  -->
        </div>
    </div>
</div>