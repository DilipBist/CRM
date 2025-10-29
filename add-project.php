<?php
$view = $_GET['view'] ?? 'projects';
if ($view === 'subcontractor') {
    $pageTitle = 'Sub Contractor Add Project';
} else {
    $pageTitle = 'Add Project';
}
include 'inc/header.php'
?>


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
                    <p>Add Projects</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">
                <?php include 'components/profile.php' ?>


                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- top profile header  -->



        <div class="admin_list_heading outer_padding">
            <div class="left_heading">
                <h3>Add Projects</h3>
                <p>Please kindly fill up the following form</p>
            </div>
        </div>

        <!-- add project form  -->
        <div class="add_project_form pl_pr mb-5">
            <div class="common_form">
                <form action="">
                    <div class="row g-3 align-items-end">
                        <div class="col-md-6 col-lg-4">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="project_name">Project Name <span>*</span></label>
                                <input type="text" placeholder="Enter your Project Name" name="project_name" id="project_name" required>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="project_address">Project Address <span>*</span></label>
                                <input type="text" placeholder="Enter your Project address" name="project_address" id="project_address" required>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4  slect-status">
                            <label for="status" class="mb-2">Status</label>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <select class="form-select" aria-label="select" id="status">

                                <option value="" selected disabled hidden>In Progress</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="form_input d-flex flex-column gap-2 position-relative">
                                <label for="start_date">Start Date <span>*</span></label>
                                <input type="text" class="date-picker" id="start_date" placeholder="MM/DD/YYYY">
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
                            <div class="form_input d-flex flex-column gap-2 position-relative">
                                <label for="end_date">End Date</label>
                                <input type="text" class="date-picker" id="end_date" placeholder="MM/DD/YYYY">
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
                                <label for="project_owner">Project Owner Name <span>*</span></label>
                                <input type="text" placeholder="Enter your Project Owner Name" name="project_owner" id="project_owner" required>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="bujet_anount">Estimated Budget Amount</label>
                                <input type="number" placeholder="Enter your Budget Amount" name="estimate_bujet" id="bujet_anount">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="estimated_month">Estimated Month</label>
                                <input type="number" placeholder="Enter your Estimated Month" name="estimated_month" id="estimated_month">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="project_creater">Project Created By <span>*</span></label>
                                <input type="text" placeholder="Enter your  Name" name="project_creater" id="project_creater" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="des">Description <span>*</span></label>
                                <div class="position-relative editor-wrapper">
                                    <textarea name="content" class="editor" placeholder="Write something awesome..."></textarea>
                                    <button id="toggleToolbar" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.777778 1.55556C0.35 1.55556 0 1.20556 0 0.777778C0 0.35 0.35 0 0.777778 0H13.2222C13.65 0 14 0.35 14 0.777778C14 1.20556 13.65 1.55556 13.2222 1.55556H0.777778ZM8.55556 3.11111H0.777778C0.35 3.11111 0 3.46111 0 3.88889C0 4.31667 0.35 4.66667 0.777778 4.66667H8.55556C8.98333 4.66667 9.33333 4.31667 9.33333 3.88889C9.33333 3.46111 8.98333 3.11111 8.55556 3.11111ZM8.55556 9.33333H0.777778C0.35 9.33333 0 9.68333 0 10.1111C0 10.5389 0.35 10.8889 0.777778 10.8889H8.55556C8.98333 10.8889 9.33333 10.5389 9.33333 10.1111C9.33333 9.68333 8.98333 9.33333 8.55556 9.33333ZM13.2222 7.77778H0.777778C0.35 7.77778 0 7.42778 0 7C0 6.57222 0.35 6.22222 0.777778 6.22222H13.2222C13.65 6.22222 14 6.57222 14 7C14 7.42778 13.65 7.77778 13.2222 7.77778ZM0.777778 14H13.2222C13.65 14 14 13.65 14 13.2222C14 12.7944 13.65 12.4444 13.2222 12.4444H0.777778C0.35 12.4444 0 12.7944 0 13.2222C0 13.65 0.35 14 0.777778 14Z" fill="#141414" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="upload-container">
                                <div>
                                    <label class="up_label">Upload Design & Drawaing <span>*</span></label>
                                    <label class="file-upload" data-upload="design">
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
                                        <input type="file" name="design" required>
                                        <div class="preview" data-preview="design"></div>
                                    </label>
                                </div>

                                <div>
                                    <label class="up_label">Upload Agreements File <span>*</span></label>
                                    <label class="file-upload" data-upload="agreements">
                                        <div class="placeholder-data">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                <path d="M9.94702 25.7871H7.38696C3.46696 25.5071 1.70703 22.4938 1.70703 19.8138C1.70703 17.1338 3.46698 14.1071 7.32031 13.8404C7.86698 13.7871 8.34696 14.2138 8.38696 14.7738C8.42696 15.3204 8.01369 15.8004 7.45369 15.8404C4.86703 16.0271 3.70703 17.9738 3.70703 19.8271C3.70703 21.6804 4.86703 23.6271 7.45369 23.8138H9.94702C10.4937 23.8138 10.947 24.2671 10.947 24.8138C10.947 25.3604 10.4937 25.7871 9.94702 25.7871Z" fill="#141414" />
                                                <path d="M22.2272 25.786C22.2005 25.786 22.1872 25.786 22.1605 25.786C21.6139 25.786 21.1072 25.3327 21.1072 24.786C21.1072 24.2127 21.5339 23.786 22.0939 23.786C23.7339 23.786 25.2006 23.2127 26.3472 22.186C28.4272 20.3727 28.5605 17.7594 28.0005 15.9194C27.4405 14.0927 25.8805 11.9994 23.1605 11.666C22.7205 11.6127 22.3738 11.2794 22.2938 10.8394C21.7605 7.63936 20.0405 5.42602 17.4272 4.62602C14.7339 3.78602 11.5872 4.61269 9.62716 6.66602C7.7205 8.65269 7.28051 11.4394 8.38717 14.506C8.57384 15.026 8.30724 15.5993 7.78724 15.786C7.26724 15.9727 6.69388 15.706 6.50721 15.186C5.16054 11.426 5.77389 7.82602 8.18722 5.29269C10.6539 2.70602 14.6139 1.67934 18.0139 2.71934C21.1339 3.67934 23.3338 6.25268 24.1338 9.82601C26.8538 10.4393 29.0405 12.506 29.9072 15.3594C30.8539 18.466 30.0005 21.666 27.6672 23.6927C26.1872 25.026 24.2538 25.786 22.2272 25.786Z" fill="#141414" />
                                                <path d="M16.0007 29.7064C13.3207 29.7064 10.814 28.2797 9.44067 25.973C9.29401 25.7464 9.14734 25.4797 9.02734 25.1864C8.57401 24.2397 8.33398 23.1597 8.33398 22.0397C8.33398 17.813 11.774 14.373 16.0007 14.373C20.2273 14.373 23.6673 17.813 23.6673 22.0397C23.6673 23.173 23.4273 24.2397 22.9473 25.2264C22.8407 25.4797 22.694 25.7464 22.534 25.9997C21.1873 28.2797 18.6807 29.7064 16.0007 29.7064ZM16.0007 16.373C12.8807 16.373 10.334 18.9197 10.334 22.0397C10.334 22.8664 10.5073 23.6397 10.8407 24.3464C10.9473 24.573 11.0406 24.7597 11.1473 24.933C12.1606 26.653 14.014 27.7064 15.9873 27.7064C17.9606 27.7064 19.814 26.653 20.814 24.9597C20.934 24.7597 21.0407 24.573 21.1207 24.3864C21.4807 23.653 21.654 22.8797 21.654 22.053C21.6673 18.9197 19.1207 16.373 16.0007 16.373Z" fill="#141414" />
                                                <path d="M15.2405 24.3604C14.9872 24.3604 14.7339 24.2671 14.5339 24.0671L13.2138 22.7471C12.8272 22.3604 12.8272 21.7204 13.2138 21.3338C13.6005 20.9471 14.2405 20.9471 14.6272 21.3338L15.2672 21.9738L17.4005 20.0004C17.8138 19.6271 18.4405 19.6538 18.8138 20.0538C19.1872 20.4538 19.1605 21.0938 18.7605 21.4671L15.9205 24.0938C15.7205 24.2671 15.4805 24.3604 15.2405 24.3604Z" fill="#141414" />
                                            </svg>
                                            <p>Choose a file or drag & drop it here</p>
                                            <span>Upload the Agreements File</span>
                                        </div>
                                        <input type="file" name="agreements" required>
                                        <div class="preview" data-preview="agreements"></div>
                                    </label>
                                </div>

                                <div>
                                    <label class="up_label">Upload Bill of quantitys <span>*</span></label>
                                    <label class="file-upload" data-upload="billquantity">
                                        <div class="placeholder-data">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                <path d="M9.94702 25.7871H7.38696C3.46696 25.5071 1.70703 22.4938 1.70703 19.8138C1.70703 17.1338 3.46698 14.1071 7.32031 13.8404C7.86698 13.7871 8.34696 14.2138 8.38696 14.7738C8.42696 15.3204 8.01369 15.8004 7.45369 15.8404C4.86703 16.0271 3.70703 17.9738 3.70703 19.8271C3.70703 21.6804 4.86703 23.6271 7.45369 23.8138H9.94702C10.4937 23.8138 10.947 24.2671 10.947 24.8138C10.947 25.3604 10.4937 25.7871 9.94702 25.7871Z" fill="#141414" />
                                                <path d="M22.2272 25.786C22.2005 25.786 22.1872 25.786 22.1605 25.786C21.6139 25.786 21.1072 25.3327 21.1072 24.786C21.1072 24.2127 21.5339 23.786 22.0939 23.786C23.7339 23.786 25.2006 23.2127 26.3472 22.186C28.4272 20.3727 28.5605 17.7594 28.0005 15.9194C27.4405 14.0927 25.8805 11.9994 23.1605 11.666C22.7205 11.6127 22.3738 11.2794 22.2938 10.8394C21.7605 7.63936 20.0405 5.42602 17.4272 4.62602C14.7339 3.78602 11.5872 4.61269 9.62716 6.66602C7.7205 8.65269 7.28051 11.4394 8.38717 14.506C8.57384 15.026 8.30724 15.5993 7.78724 15.786C7.26724 15.9727 6.69388 15.706 6.50721 15.186C5.16054 11.426 5.77389 7.82602 8.18722 5.29269C10.6539 2.70602 14.6139 1.67934 18.0139 2.71934C21.1339 3.67934 23.3338 6.25268 24.1338 9.82601C26.8538 10.4393 29.0405 12.506 29.9072 15.3594C30.8539 18.466 30.0005 21.666 27.6672 23.6927C26.1872 25.026 24.2538 25.786 22.2272 25.786Z" fill="#141414" />
                                                <path d="M16.0007 29.7064C13.3207 29.7064 10.814 28.2797 9.44067 25.973C9.29401 25.7464 9.14734 25.4797 9.02734 25.1864C8.57401 24.2397 8.33398 23.1597 8.33398 22.0397C8.33398 17.813 11.774 14.373 16.0007 14.373C20.2273 14.373 23.6673 17.813 23.6673 22.0397C23.6673 23.173 23.4273 24.2397 22.9473 25.2264C22.8407 25.4797 22.694 25.7464 22.534 25.9997C21.1873 28.2797 18.6807 29.7064 16.0007 29.7064ZM16.0007 16.373C12.8807 16.373 10.334 18.9197 10.334 22.0397C10.334 22.8664 10.5073 23.6397 10.8407 24.3464C10.9473 24.573 11.0406 24.7597 11.1473 24.933C12.1606 26.653 14.014 27.7064 15.9873 27.7064C17.9606 27.7064 19.814 26.653 20.814 24.9597C20.934 24.7597 21.0407 24.573 21.1207 24.3864C21.4807 23.653 21.654 22.8797 21.654 22.053C21.6673 18.9197 19.1207 16.373 16.0007 16.373Z" fill="#141414" />
                                                <path d="M15.2405 24.3604C14.9872 24.3604 14.7339 24.2671 14.5339 24.0671L13.2138 22.7471C12.8272 22.3604 12.8272 21.7204 13.2138 21.3338C13.6005 20.9471 14.2405 20.9471 14.6272 21.3338L15.2672 21.9738L17.4005 20.0004C17.8138 19.6271 18.4405 19.6538 18.8138 20.0538C19.1872 20.4538 19.1605 21.0938 18.7605 21.4671L15.9205 24.0938C15.7205 24.2671 15.4805 24.3604 15.2405 24.3604Z" fill="#141414" />
                                            </svg>
                                            <p>Choose a file or drag & drop it here</p>
                                            <span>Upload the Agreements File</span>
                                        </div>
                                        <input type="file" name="billquantity" required>
                                        <div class="preview" data-preview="billquantity"></div>
                                    </label>
                                </div>
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
        <!-- add project form ends  -->

    </div>
</section>

<?php include 'inc/footer.php' ?>