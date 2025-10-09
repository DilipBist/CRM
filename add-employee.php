<?php
$pageTitle = 'Employee';
include 'inc/header.php'
?>


<!-- delet popup component  -->
<?php include 'components/delete-popup.php' ?>
<!-- delet popup component ends -->

<section class="admin_container d-flex">


    <?php
    $currentPage = 'employee';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto user_list">
        <!-- top profile header  -->
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M9 1.5C7.035 1.5 5.4375 3.0975 5.4375 5.0625C5.4375 6.99 6.945 8.55 8.91 8.6175C8.97 8.61 9.03 8.61 9.075 8.6175C9.09 8.6175 9.0975 8.6175 9.1125 8.6175C9.12 8.6175 9.12 8.6175 9.1275 8.6175C11.0475 8.55 12.555 6.99 12.5625 5.0625C12.5625 3.0975 10.965 1.5 9 1.5Z" fill="#141414" />
                        <path d="M12.8097 10.6127C10.7172 9.21766 7.30473 9.21766 5.19723 10.6127C4.24473 11.2502 3.71973 12.1127 3.71973 13.0352C3.71973 13.9577 4.24473 14.8127 5.18973 15.4427C6.23973 16.1477 7.61973 16.5002 8.99973 16.5002C10.3797 16.5002 11.7597 16.1477 12.8097 15.4427C13.7547 14.8052 14.2797 13.9502 14.2797 13.0202C14.2722 12.0977 13.7547 11.2427 12.8097 10.6127Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="employee.php">HRMS </a>
                    <span>/</span>
                    <p>Employee</p>
                    <span>/</span>
                    <p>Add Employee</p>
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
                <h3> Add Employee</h3>
                <p>Please kindly fill up the following form.</p>
            </div>
        </div>


        <div class="add_employee_form_container pl_pr mb-5">
            <div class="common_form">
                <form action="">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="common_employee_bg">
                                <div class="heading">
                                    <h3>Personal Detail</h3>
                                </div>
                                <div class="content">
                                    <div class="row g-3 align-items-end">
                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2">
                                                <label for="Name">Name <span>*</span></label>
                                                <input type="text" placeholder="Enter Employee Name" name="Name" id="Name" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2">
                                                <label for="Email">Email <span>*</span></label>
                                                <input type="email" placeholder="Enter Employee Email" name="Email" id="Email" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2">
                                                <label for="Phone1">Phone 1 <span class="red">*</span></label>
                                                <input type="tel" placeholder="Enter Employee Number" name="Phone1" id="Phone1" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2">
                                                <label for="Phone2">Phone 1</label>
                                                <input type="tel" placeholder="Enter Employee Number" name="Phone2" id="Phone2">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2 position-relative">
                                                <label for="dob">Date of Birth <span class="red">*</span></label>
                                                <input type="text" class="date-picker" id="dob" name="dob" placeholder="MM/DD/YYYY">
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


                                        <div class="col-md-6 slect-status">
                                            <label for="Gender" class="mb-2">Gender <span class="red">*</span></label>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <select class="form-select" aria-label="select" id="Gender" name="Gender" required>

                                                <option value="" selected disabled hidden>Male</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
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
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="common_employee_bg">
                                <div class="heading">
                                    <h3>Company Detail</h3>
                                </div>
                                <div class="content">
                                    <div class="row g-3 align-items-end">
                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2">
                                                <label for="eid">Employee ID <span>*</span></label>
                                                <input type="text" placeholder="Auto Generated" name="eid" id="eid" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2">
                                                <label for="cemail">Email <span>*</span></label>
                                                <input type="email" placeholder="Enter Employee Email" name="cemail" id="cemail" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form_input d-flex flex-column gap-2">
                                                        <label for="Password">Password <span class="red">*</span></label>
                                                        <input type="password" placeholder="Enter Employee Password" name="Password" id="Password" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 slect-status">
                                                    <label for="Branch" class="mb-2">Select Branch <span class="red">*</span></label>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <select class="form-select" aria-label="select" id="Branch" name="Branch" required>

                                                        <option value="" selected disabled hidden>Select Branch</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                        <option value="3">Other</option>
                                                    </select>
                                                    <div class="sub_tag">
                                                        <p>Create Branch. </p>
                                                        <a href="#">Click Here</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 slect-status">
                                            <label for="Department" class="mb-2">Select Department <span class="red">*</span></label>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <select class="form-select" aria-label="select" id="Department" name="Department" required>

                                                <option value="" selected disabled hidden>Select Department</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                            <div class="sub_tag">
                                                <p>Create Department. </p>
                                                <a href="#">Click Here</a>
                                            </div>
                                        </div>

                                        <div class="col-md-6 slect-status">
                                            <label for="Designation" class="mb-2">Select Designation <span class="red">*</span></label>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <select class="form-select" aria-label="select" id="Designation" name="Designation" required>

                                                <option value="" selected disabled hidden>Select Designation</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                            <div class="sub_tag">
                                                <p>Create Designation. </p>
                                                <a href="#">Click Here</a>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2 position-relative">
                                                <label for="dob">Date of Joining <span class="red">*</span></label>
                                                <input type="text" class="date-picker" id="dob" name="dob" placeholder="MM/DD/YYYY">
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


                                        <div class="col-md-6 slect-status">
                                            <label for="Status" class="mb-2">Status <span class="red">*</span></label>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <select class="form-select" aria-label="select" id="Status" name="Status" required>
                                                <option value="" selected disabled hidden>Active</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="common_employee_bg">
                                <div class="heading">
                                    <h3>Bank Account Detail</h3>
                                </div>
                                <div class="content">
                                    <div class="row g-3 align-items-end">
                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2">
                                                <label for="acc_name">Account Holder Name <span>*</span></label>
                                                <input type="text" placeholder="Enter Account Holder Name" name="acc_name" id="acc_name" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2">
                                                <label for="acc_num">Account Number <span>*</span></label>
                                                <input type="number" placeholder="Enter Account Number" name="acc_num" id="acc_num" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2">
                                                <label for="bank_name">Bank Name<span class="red">*</span></label>
                                                <input type="text" placeholder="Enter Bank Name" name="bank_name" id="bank_name" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form_input d-flex flex-column gap-2">
                                                <label for="bank_branch">Branch</label>
                                                <input type="tel" placeholder="Enter Branch" name="bank_branch" id="bank_branch">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="common_employee_bg">
                                <div class="heading">
                                    <h3>Documents</h3>
                                </div>
                                <div class="content">
                                    <div class="row g-3 align-items-end">
                                        <div class="col-md-6">
                                            <div class="upload-container document_upload">
                                                <div>
                                                    <label class="up_label">Resume File <span>*</span></label>
                                                    <label class="file-upload" data-upload="Resume">
                                                        <div class="placeholder-data">
                                                            <p>Choose a file or drag & drop it here</p>
                                                        </div>
                                                        <input type="file" name="Resume" required>
                                                        <div class="preview" data-preview="Resume"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="upload-container document_upload">
                                                <div>
                                                    <label class="up_label">Offer Letter <span>*</span></label>
                                                    <label class="file-upload" data-upload="Letter">
                                                        <div class="placeholder-data">
                                                            <p>Choose a file or drag & drop it here</p>
                                                        </div>
                                                        <input type="file" name="Letter" required>
                                                        <div class="preview" data-preview="Letter"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="upload-container document_upload">
                                                <div>
                                                    <label class="up_label">Agreement <span>*</span></label>
                                                    <label class="file-upload" data-upload="Agreement">
                                                        <div class="placeholder-data">
                                                            <p>Choose a file or drag & drop it here</p>
                                                        </div>
                                                        <input type="file" name="Agreement" required>
                                                        <div class="preview" data-preview="Agreement"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="upload-container document_upload">
                                                <div>
                                                    <label class="up_label">Certificate <span>*</span></label>
                                                    <label class="file-upload" data-upload="Certificate">
                                                        <div class="placeholder-data">
                                                            <p>Choose a file or drag & drop it here</p>
                                                        </div>
                                                        <input type="file" name="Certificate" required>
                                                        <div class="preview" data-preview="Certificate"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-5">
                        <button class="discard" type="button">Discard</button>
                        <button type="submit" class="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php' ?>