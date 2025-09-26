<?php
$pageTitle = 'Dashboard';
include 'inc/header.php'
?>

<section class="admin_container d-flex">


    <!-- SIDE BAR  -->
    <?php
    $currentPage = 'dashboard';
    include 'inc/side-bar.php';
    ?>
    <!-- SIDE BAR ENDS  -->

    <div class="admin_right_content ms-auto">

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
                    <a href="index.php">Overview</a>
                    <span>/</span>
                    <p>Profile</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">

                <div class="d-none d-sm-block">
                    <?php include 'components/search.php' ?>
                </div>


                <?php include 'components/profile.php' ?>


                <?php include 'components/notification.php' ?>

            </div>
        </div>
        <!-- TOP PROFILE HEADER ENDS  -->


        <div class="profile_page_container pl_pr pt-4 mb-5">
            <div class="profile_heading">
                <h3>Manage Profile</h3>
                <p>You can change your profile details here seamlessely.</p>
            </div>
            <div class="profile_picture_img_wrapper">
                <div class="img">
                    <img id="profileImage" class="profile-pic" src="assets/images/profileimg.jpg" alt="Profile Picture">
                    <input type="file" id="fileInput" accept="image/*" style="display:none" onchange="previewImage(event)">
                </div>

                <div class="profile_img_btn">
                    <h5>Upload Your Profile Picture</h5>
                    <p>PNG, JPEG under 15MB</p>
                    <button class="edit-button" onclick="document.getElementById('fileInput').click()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M8.83958 2.39982L3.36624 8.19315C3.15958 8.41315 2.95958 8.84649 2.91958 9.14649L2.67291 11.3065C2.58624 12.0865 3.14624 12.6198 3.91958 12.4865L6.06624 12.1198C6.36624 12.0665 6.78624 11.8465 6.99291 11.6198L12.4662 5.82649C13.4129 4.82649 13.8396 3.68649 12.3662 2.29315C10.8996 0.913152 9.78624 1.39982 8.83958 2.39982Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.92578 3.36621C8.21245 5.20621 9.70578 6.61288 11.5591 6.79954" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2 14.667H14" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Edit
                    </button>
                </div>
                </img>
            </div>

            <div class="profile_page_form">
                <form action="">
                    <div class="common_row d-flex flex-wrap justify-content-between gap-3">
                        <div class="name_container">
                            <h4>Full Name</h4>
                            <p>Manage your full name.</p>
                        </div>

                        <div class="input_wrapper">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <label for="fname">First Name <span class="red">*</span></label>
                                        <input type="text" placeholder="Rohan" value="Rohan" name="fname" id="fname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <label for="lname">Last Name <span class="red">*</span></label>
                                        <input type="text" placeholder="Rohan" value="Dangol" name="lname" id="lname" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="common_row d-flex flex-wrap justify-content-between gap-3">
                        <div class="name_container">
                            <h4>Contact Email</h4>
                            <p>Manage your accounts email address.</p>
                        </div>

                        <div class="input_wrapper">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <label for="Email">Email <span class="red">*</span></label>
                                        <input type="email" placeholder="rohanshrestha020@gmail.com" value="rohanshrestha020@gmail.com" name="Email" id="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <label for="number">Phone Number <span class="red">*</span></label>
                                        <input type="tel" placeholder="9841868583" value="9841868583" name="number" id="number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="common_row d-flex flex-wrap justify-content-between gap-3">
                        <div class="name_container">
                            <h4>Gender</h4>
                            <p>Manage your respective gender.</p>
                        </div>

                        <div class="input_wrapper">
                            <div class="gender-selector" aria-label="Select Gender">
                                <div class="gender-option selected" data-value="male">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M18 7.5C18 10.2614 15.7614 12.5 13 12.5C10.2386 12.5 8 10.2614 8 7.5C8 4.73857 10.2386 2.5 13 2.5C15.7614 2.5 18 4.73857 18 7.5Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3 12.5V14.1667C3 15.738 3 16.5237 3.48816 17.0118C3.97631 17.5 4.76198 17.5 6.33333 17.5H8M3.83333 16.6667L9.25 11.25" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Male
                                </div>
                                <div class="gender-option" data-value="female">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M10.5 11.667C13.2614 11.667 15.5 9.42841 15.5 6.66699C15.5 3.90557 13.2614 1.66699 10.5 1.66699C7.73857 1.66699 5.5 3.90557 5.5 6.66699C5.5 9.42841 7.73857 11.667 10.5 11.667ZM10.5 11.667V18.3337M8 15.8337H13" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Female
                                </div>
                                <div class="gender-option" data-value="other">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_20138_144730)">
                                            <path d="M4.85547 14.9709V17.8661L3.59945 16.6102C3.54161 16.5513 3.47267 16.5045 3.39662 16.4723C3.32057 16.4402 3.23891 16.4235 3.15636 16.4232C3.07381 16.4228 2.99201 16.4388 2.91567 16.4702C2.83933 16.5016 2.76998 16.5478 2.71161 16.6062C2.65324 16.6646 2.60701 16.7339 2.57559 16.8103C2.54418 16.8866 2.52819 16.9684 2.52857 17.051C2.52894 17.1335 2.54566 17.2152 2.57777 17.2912C2.60988 17.3673 2.65673 17.4362 2.71562 17.4941L5.03844 19.8169C5.15565 19.9341 5.31461 20 5.48037 20C5.64613 20 5.80509 19.9341 5.9223 19.8169L8.24516 17.4941C8.30377 17.4362 8.35036 17.3672 8.38224 17.2913C8.41411 17.2153 8.43065 17.1337 8.4309 17.0513C8.43115 16.9689 8.41511 16.8873 8.38369 16.8111C8.35228 16.735 8.30611 16.6658 8.24785 16.6075C8.18958 16.5492 8.12038 16.5031 8.04421 16.4717C7.96803 16.4402 7.8864 16.4242 7.80401 16.4244C7.72161 16.4247 7.64008 16.4412 7.5641 16.4731C7.48812 16.505 7.4192 16.5516 7.36129 16.6102L6.10547 17.8661V14.9709C7.22083 14.8409 8.2696 14.3724 9.11054 13.6282C9.95148 12.8841 10.5442 11.9001 10.8089 10.8089C11.9001 10.5442 12.8841 9.95148 13.6282 9.11055C14.3724 8.26961 14.841 7.22084 14.9709 6.10547H16.2534V7.97707C16.2534 8.14283 16.3192 8.3018 16.4365 8.41901C16.5537 8.53622 16.7126 8.60207 16.8784 8.60207C17.0442 8.60207 17.2031 8.53622 17.3203 8.41901C17.4375 8.3018 17.5034 8.14283 17.5034 7.97707V6.10547H19.375C19.5408 6.10547 19.6997 6.03962 19.8169 5.92241C19.9342 5.8052 20 5.64623 20 5.48047C20 5.31471 19.9342 5.15574 19.8169 5.03853C19.6997 4.92132 19.5408 4.85547 19.375 4.85547H17.5034V2.98375C17.5034 2.81799 17.4375 2.65902 17.3203 2.54181C17.2031 2.4246 17.0442 2.35875 16.8784 2.35875C16.7126 2.35875 16.5537 2.4246 16.4365 2.54181C16.3192 2.65902 16.2534 2.81799 16.2534 2.98375V4.85547H14.9709C14.6597 2.12676 12.3369 0 9.52637 0C6.94602 0 4.77684 1.79266 4.19789 4.19789C1.7927 4.7768 0 6.94602 0 9.52637C0 12.3369 2.12676 14.6597 4.85547 14.9709ZM9.52637 9.71094C8.40476 9.7097 7.32944 9.26359 6.53634 8.47049C5.74325 7.67739 5.29714 6.60208 5.2959 5.48047C5.2959 5.42004 5.2975 5.35996 5.2998 5.30016C5.35961 5.29762 5.41969 5.29625 5.48012 5.29625C6.60173 5.29749 7.67704 5.7436 8.47014 6.5367C9.26324 7.32979 9.70935 8.40511 9.71059 9.52672C9.71059 9.58715 9.70898 9.64719 9.70668 9.70703C9.64684 9.70918 9.5868 9.71094 9.52637 9.71094ZM9.52637 1.25C10.5221 1.25008 11.4859 1.6014 12.2482 2.24212C13.0104 2.88285 13.5222 3.77191 13.6935 4.75282C13.8647 5.73373 13.6845 6.74362 13.1845 7.60473C12.6845 8.46585 11.8968 9.12299 10.96 9.46051C10.9248 6.49086 8.51594 4.08199 5.54625 4.0468C5.84217 3.22832 6.38293 2.5208 7.09503 2.02041C7.80713 1.52003 8.65604 1.25103 9.52637 1.25ZM4.04688 5.54621C4.08203 8.5159 6.4909 10.9247 9.46055 10.9599C9.2191 11.6303 8.81224 12.2288 8.27772 12.7C7.7432 13.1712 7.09833 13.4997 6.40294 13.6551C5.70756 13.8104 4.98419 13.7877 4.29996 13.5889C3.61572 13.3901 2.99279 13.0216 2.48895 12.5178C1.98512 12.014 1.6167 11.391 1.4179 10.7068C1.21909 10.0225 1.19632 9.29918 1.35172 8.6038C1.50711 7.90841 1.83563 7.26355 2.30679 6.72903C2.77796 6.19451 3.37649 5.78765 4.04688 5.54621Z" fill="#141414" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_20138_144730">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Other
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="common_row d-flex flex-wrap justify-content-between gap-3">
                        <div class="name_container">
                            <h4>Password</h4>
                            <p>Modify your current password.</p>
                        </div>

                        <div class="input_wrapper">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <label for="cpassword">Current Password <span class="red">*</span></label>
                                        <input type="text" value="Bipl@b1!23#" name="cpassword" id="cpassword" required>
                                    </div>
                                </div>
                                <div class="col-md-6 d-lg-flex align-items-lg-end">
                                    <div class="change_Tag d-lg-flex align-items-lg-end justify-content-lg-end">
                                        <div class="input_fieldtwo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M4 6.66634V5.33301C4 3.12634 4.66667 1.33301 8 1.33301C11.3333 1.33301 12 3.12634 12 5.33301V6.66634" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.332 14.667H4.66536C1.9987 14.667 1.33203 14.0003 1.33203 11.3337V10.0003C1.33203 7.33366 1.9987 6.66699 4.66536 6.66699H11.332C13.9987 6.66699 14.6654 7.33366 14.6654 10.0003V11.3337C14.6654 14.0003 13.9987 14.667 11.332 14.667Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.6656 10.6663H10.6716" stroke="#005399" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.99764 10.6663H8.00363" stroke="#005399" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.32967 10.6663H5.33566" stroke="#005399" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Change Password
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="input_field">
                                            <label for="new_password">New Password <span class="red">*</span></label>
                                            <div class="input_password">
                                                <input type="password" placeholder="Enter New Password" name="new_password" id="new_password" required>
                                                <i class="ri-eye-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input_field">
                                            <label for="cPassoword">Confirm Password <span class="red">*</span></label>
                                            <div class="input_password">
                                                <input type="password" placeholder="Enter Confirm Password" name="cPassoword" id="cPassoword" required>
                                                <i class="ri-eye-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-end border_top">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</section>





<?php include 'inc/footer.php' ?>