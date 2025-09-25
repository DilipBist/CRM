<?php
$pageTitle = 'Labour Track';
include 'inc/header.php'
?>



<section class="admin_container d-flex">


    <?php
    $currentPage = 'labourlist';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto">
        <!-- top profile header  -->
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M13.5 1.5H4.5C3.255 1.5 2.25 2.4975 2.25 3.7275V11.91C2.25 13.14 3.255 14.1375 4.5 14.1375H5.07C5.67 14.1375 6.24 14.37 6.66 14.79L7.9425 16.0575C8.5275 16.635 9.48 16.635 10.065 16.0575L11.3475 14.79C11.7675 14.37 12.345 14.1375 12.9375 14.1375H13.5C14.745 14.1375 15.75 13.14 15.75 11.91V3.7275C15.75 2.4975 14.745 1.5 13.5 1.5ZM9 4.3125C9.9675 4.3125 10.7475 5.0925 10.7475 6.06C10.7475 7.0275 9.9675 7.8075 9 7.8075C8.0325 7.8075 7.2525 7.02 7.2525 6.06C7.2525 5.0925 8.0325 4.3125 9 4.3125ZM11.01 11.295H6.99C6.3825 11.295 6.03 10.62 6.3675 10.1175C6.8775 9.36 7.8675 8.85 9 8.85C10.1325 8.85 11.1225 9.36 11.6325 10.1175C11.97 10.62 11.61 11.295 11.01 11.295Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="labour-list.php">Labor Management </a>
                    <span>/</span>
                    <p>Labor List</p>
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
                <h3>Labor List</h3>
                <p>You can view the Project list accordingly.</p>
            </div>

            <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">

                <?php include 'components/search.php' ?>

                <div class="filter_comp">
                    <?php include 'components/filter.php' ?>
                </div>

                <div class="track_btns_container d-flex align-items-center gap-2">
                    <a href="#" id="assigned_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15 15.7174H14.3667C13.7 15.7174 13.0667 15.9758 12.6 16.4424L11.175 17.8508C10.525 18.4924 9.46668 18.4924 8.81668 17.8508L7.39166 16.4424C6.925 15.9758 6.28333 15.7174 5.625 15.7174H5C3.61667 15.7174 2.5 14.6091 2.5 13.2425V4.15076C2.5 2.78409 3.61667 1.67578 5 1.67578H15C16.3833 1.67578 17.5 2.78409 17.5 4.15076V13.2425C17.5 14.6008 16.3833 15.7174 15 15.7174Z" stroke="#00427A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.0003 8.33253C11.0726 8.33253 11.942 7.4632 11.942 6.39085C11.942 5.3185 11.0726 4.44922 10.0003 4.44922C8.92792 4.44922 8.05859 5.3185 8.05859 6.39085C8.05859 7.4632 8.92792 8.33253 10.0003 8.33253Z" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3327 13.0487C13.3327 11.5487 11.841 10.332 9.99935 10.332C8.15768 10.332 6.66602 11.5487 6.66602 13.0487" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Track
                    </a>
                </div>

            </div>
        </div>

        <!-- tarcking data list showing  -->
        <?php include 'components/tracking/track-list.php' ?>
        <!-- tarcking data list showing ends  -->


        <div class="tracking-data-wrapper pl_pr mt-5 mb-5">
            <div class="left_div">
                <?php
                $status = 'active';
                include 'components/tracking/track-profile.php'
                ?>
                <?php
                $status = 'inactive';
                include 'components/tracking/track-profile.php'
                ?>
                <?php
                $status = 'active';
                include 'components/tracking/track-profile.php'
                ?>
                <?php
                $status = 'inactive';
                include 'components/tracking/track-profile.php'
                ?>
                <?php
                $status = 'active';
                include 'components/tracking/track-profile.php'
                ?>
                <?php
                $status = 'inactive';
                include 'components/tracking/track-profile.php'
                ?>
            </div>

            <div class="right_div">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.484830692851!2d85.3424406758687!3d27.71248967617964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197bf11725d3%3A0x9667b0e977175ef1!2sMega%20Web%20Link%20Pvt%20Ltd!5e1!3m2!1sen!2snp!4v1758612043964!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>


    </div>
</section>



<!-- assigned labour popup  -->
<div class="assigned_labour_bg">
    <div class="assigned_labour_content_bg">
        <div class="content">
            <div class="ass_heading">
                <h5>Assignment</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="close-assign-btn">
                    <path d="M10.0013 1.66602C5.40964 1.66602 1.66797 5.40768 1.66797 9.99935C1.66797 14.591 5.40964 18.3327 10.0013 18.3327C14.593 18.3327 18.3346 14.591 18.3346 9.99935C18.3346 5.40768 14.593 1.66602 10.0013 1.66602ZM12.8013 11.916C13.043 12.1577 13.043 12.5577 12.8013 12.7993C12.6763 12.9243 12.518 12.9827 12.3596 12.9827C12.2013 12.9827 12.043 12.9243 11.918 12.7993L10.0013 10.8827L8.08464 12.7993C7.95964 12.9243 7.8013 12.9827 7.64297 12.9827C7.48464 12.9827 7.3263 12.9243 7.2013 12.7993C6.95964 12.5577 6.95964 12.1577 7.2013 11.916L9.11797 9.99935L7.2013 8.08268C6.95964 7.84102 6.95964 7.44102 7.2013 7.19935C7.44297 6.95768 7.84297 6.95768 8.08464 7.19935L10.0013 9.11602L11.918 7.19935C12.1596 6.95768 12.5596 6.95768 12.8013 7.19935C13.043 7.44102 13.043 7.84102 12.8013 8.08268L10.8846 9.99935L12.8013 11.916Z" fill="#FF0000" />
                </svg>
            </div>

            <div class="c_asset_sub_heading">
                <h5>Assign Labor</h5>
                <p>Please kindly complete the form to Assign </p>
            </div>

            <!-- asset filter form  -->
            <div class="asset_filter_form">
                <div class="common_form">
                    <form action="" id="<?= $formId ?>" data-redirect="<?= $redirectPage ?>">
                        <div class="row g-3 align-items-end">

                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="Project">Project</label>
                                    <input type="text" placeholder="Enter a Project" name="Project" id="Project">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="lab_name">Labor Name <span>*</span></label>
                                    <input type="text" placeholder="Enter your Project Name" name="lab_name" id="lab_name" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                                    <button class="discard" type="button">Back</button>
                                    <button type="submit" class="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- asset filter form end  -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- assigned labour popup ends  -->


<?php include 'inc/footer.php' ?>