<?php
$pageTitle = 'Setting';
include 'inc/header.php'
?>

<section class="admin_container d-flex">


    <!-- SIDE BAR  -->
    <?php
    $currentPage = 'setting';
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
                    <a href="setting.php">Company Setting</a>
                    <span>/</span>
                    <p>Company</p>
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


        <div class="company_setting_container pl_pr mb-5">
            <div class="company_setting_heading">
                <h3>Company Setting</h3>
                <p>You can view the Company Setting list accordingly.</p>
            </div>

            <div class="company_setting_form">
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">
                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="company_name">Company Name <span>*</span></label>
                                    <input type="text" placeholder="Enter your Project Name" value="S.T Builders Pvt. Ltd." name="company_name" id="company_name" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="project_address">Address <span>*</span></label>
                                    <input type="text" placeholder="Enter your Project address" name="project_address" value="Kathmandu-32, Koteshwor" id="project_address" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="PAN">PAN <span>*</span></label>
                                    <input type="number" placeholder="Enter PAN number" name="PAN" value="601241851" id="PAN" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="Web">Web <span>*</span></label>
                                    <input type="link" placeholder="Enter Link" name="Web" id="Web" value="https://stbuilders.com.np/" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="project_address">Email <span>*</span></label>
                                    <input type="text" placeholder="Enter your Email" name="Email" value="stbuildersads@gmail.com" id="Email" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="Telephone">Telephone <span>*</span></label>
                                    <input type="tel" placeholder="Enter your Project address" name="Telephone" value="9863313584" id="Telephone" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="upload-container">
                                    <div>
                                        <label class="up_label">Upload Logo <span>*</span></label>
                                        <label class="file-upload" data-upload="design">
                                            <div class="placeholder-data">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                    <path d="M9.94702 25.7871H7.38696C3.46696 25.5071 1.70703 22.4938 1.70703 19.8138C1.70703 17.1338 3.46698 14.1071 7.32031 13.8404C7.86698 13.7871 8.34696 14.2138 8.38696 14.7738C8.42696 15.3204 8.01369 15.8004 7.45369 15.8404C4.86703 16.0271 3.70703 17.9738 3.70703 19.8271C3.70703 21.6804 4.86703 23.6271 7.45369 23.8138H9.94702C10.4937 23.8138 10.947 24.2671 10.947 24.8138C10.947 25.3604 10.4937 25.7871 9.94702 25.7871Z" fill="#141414" />
                                                    <path d="M22.2272 25.786C22.2005 25.786 22.1872 25.786 22.1605 25.786C21.6139 25.786 21.1072 25.3327 21.1072 24.786C21.1072 24.2127 21.5339 23.786 22.0939 23.786C23.7339 23.786 25.2006 23.2127 26.3472 22.186C28.4272 20.3727 28.5605 17.7594 28.0005 15.9194C27.4405 14.0927 25.8805 11.9994 23.1605 11.666C22.7205 11.6127 22.3738 11.2794 22.2938 10.8394C21.7605 7.63936 20.0405 5.42602 17.4272 4.62602C14.7339 3.78602 11.5872 4.61269 9.62716 6.66602C7.7205 8.65269 7.28051 11.4394 8.38717 14.506C8.57384 15.026 8.30724 15.5993 7.78724 15.786C7.26724 15.9727 6.69388 15.706 6.50721 15.186C5.16054 11.426 5.77389 7.82602 8.18722 5.29269C10.6539 2.70602 14.6139 1.67934 18.0139 2.71934C21.1339 3.67934 23.3338 6.25268 24.1338 9.82601C26.8538 10.4393 29.0405 12.506 29.9072 15.3594C30.8539 18.466 30.0005 21.666 27.6672 23.6927C26.1872 25.026 24.2538 25.786 22.2272 25.786Z" fill="#141414" />
                                                    <path d="M16.0007 29.7064C13.3207 29.7064 10.814 28.2797 9.44067 25.973C9.29401 25.7464 9.14734 25.4797 9.02734 25.1864C8.57401 24.2397 8.33398 23.1597 8.33398 22.0397C8.33398 17.813 11.774 14.373 16.0007 14.373C20.2273 14.373 23.6673 17.813 23.6673 22.0397C23.6673 23.173 23.4273 24.2397 22.9473 25.2264C22.8407 25.4797 22.694 25.7464 22.534 25.9997C21.1873 28.2797 18.6807 29.7064 16.0007 29.7064ZM16.0007 16.373C12.8807 16.373 10.334 18.9197 10.334 22.0397C10.334 22.8664 10.5073 23.6397 10.8407 24.3464C10.9473 24.573 11.0406 24.7597 11.1473 24.933C12.1606 26.653 14.014 27.7064 15.9873 27.7064C17.9606 27.7064 19.814 26.653 20.814 24.9597C20.934 24.7597 21.0407 24.573 21.1207 24.3864C21.4807 23.653 21.654 22.8797 21.654 22.053C21.6673 18.9197 19.1207 16.373 16.0007 16.373Z" fill="#141414" />
                                                    <path d="M15.2405 24.3604C14.9872 24.3604 14.7339 24.2671 14.5339 24.0671L13.2138 22.7471C12.8272 22.3604 12.8272 21.7204 13.2138 21.3338C13.6005 20.9471 14.2405 20.9471 14.6272 21.3338L15.2672 21.9738L17.4005 20.0004C17.8138 19.6271 18.4405 19.6538 18.8138 20.0538C19.1872 20.4538 19.1605 21.0938 18.7605 21.4671L15.9205 24.0938C15.7205 24.2671 15.4805 24.3604 15.2405 24.3604Z" fill="#141414" />
                                                </svg>
                                                <p>Choose a file or drag & drop it here</p>
                                                <span>Upload the Picture</span>
                                            </div>
                                            <input type="file" name="design" required>
                                            <div class="preview" data-preview="design"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end">
                                    <button class="discard" type="button">Discard</button>
                                    <button type="submit" class="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>





<?php include 'inc/footer.php' ?>