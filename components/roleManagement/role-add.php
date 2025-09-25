<!-- user details popup up  -->
<div class="user_Details_bg">
    <div class="user_details_container_role">
        <div class="user_details_content">
            <div class="top_heading">
                <h3>Create New Role</h3>
                <div class="close-user-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M8.9974 0.666016C4.40573 0.666016 0.664062 4.40768 0.664062 8.99935C0.664062 13.591 4.40573 17.3327 8.9974 17.3327C13.5891 17.3327 17.3307 13.591 17.3307 8.99935C17.3307 4.40768 13.5891 0.666016 8.9974 0.666016ZM11.7974 10.916C12.0391 11.1577 12.0391 11.5577 11.7974 11.7993C11.6724 11.9243 11.5141 11.9827 11.3557 11.9827C11.1974 11.9827 11.0391 11.9243 10.9141 11.7993L8.9974 9.88268L7.08073 11.7993C6.95573 11.9243 6.7974 11.9827 6.63906 11.9827C6.48073 11.9827 6.3224 11.9243 6.1974 11.7993C5.95573 11.5577 5.95573 11.1577 6.1974 10.916L8.11406 8.99935L6.1974 7.08268C5.95573 6.84102 5.95573 6.44102 6.1974 6.19935C6.43906 5.95768 6.83906 5.95768 7.08073 6.19935L8.9974 8.11602L10.9141 6.19935C11.1557 5.95768 11.5557 5.95768 11.7974 6.19935C12.0391 6.44102 12.0391 6.84102 11.7974 7.08268L9.88073 8.99935L11.7974 10.916Z" fill="#FF0000" />
                    </svg>
                </div>
            </div>

            <div class="title_text">
                <h4>Add New Role</h4>
                <p>Please kindly Tick the form </p>
            </div>

            <div class="role_assign_form">
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">
                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="User">User <span>*</span></label>
                                    <input type="text" placeholder="Enter User Name" name="User" id="User" required>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-4">
                                <div class="slect-status">
                                    <label for="Role" class="mb-2">Role <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="Role" name="Role" required>
                                        <option value="" disabled hidden selected>Staff</option>
                                        <option value="male">Male</option>
                                        <option value="female">Felmale</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <!-- role permission module  -->
            <div class="mb-4">
                <?php
                $action = 'hide';
                include 'components/roleManagement/role-module.php'
                ?>
            </div>
            <!-- role permission module ends  -->
        </div>
    </div>
</div>