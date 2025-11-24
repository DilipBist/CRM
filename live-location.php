<?php
$pageTitle = 'Live Location';
include 'inc/header.php'
?>



<section class="admin_container d-flex">


    <?php
    $currentPage = 'livelocation';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto">
        <!-- top profile header  -->
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M9 1.5C7.035 1.5 5.4375 3.0975 5.4375 5.0625C5.4375 6.99 6.945 8.55 8.91 8.6175C8.97 8.61 9.03 8.61 9.075 8.6175C9.09 8.6175 9.0975 8.6175 9.1125 8.6175C9.12 8.6175 9.12 8.6175 9.1275 8.6175C11.0475 8.55 12.555 6.99 12.5625 5.0625C12.5625 3.0975 10.965 1.5 9 1.5Z" fill="#141414" />
                        <path d="M12.8107 10.6087C10.7182 9.21375 7.3057 9.21375 5.1982 10.6087C4.2457 11.2462 3.7207 12.1087 3.7207 13.0312C3.7207 13.9537 4.2457 14.8088 5.1907 15.4387C6.2407 16.1437 7.6207 16.4963 9.0007 16.4963C10.3807 16.4963 11.7607 16.1437 12.8107 15.4387C13.7557 14.8012 14.2807 13.9463 14.2807 13.0163C14.2732 12.0938 13.7557 11.2387 12.8107 10.6087Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="vehicle-list.php">Vehicle Management </a>
                    <span>/</span>
                    <p> Vehicle Maintenance</p>
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
                <h3>Live Location</h3>
                <p>You can view the Project list accordingly.</p>
            </div>

            <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">

                <?php include 'components/search.php' ?>

                <!-- <div class="filter_comp">
                    <?php include 'components/filter.php' ?>
                </div> -->
                <div class="track_btns_container d-flex align-items-center gap-2">
                    <a href="live-location-track.php">
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
        <div class="track_list_container pl_pr">
            <div class="primary_off_bg">
                <h4>Engine On</h4>
                <h5>50</h5>
            </div>
            <div class="">
                <h4>Moving</h4>
                <h5>50</h5>
            </div>
            <div class="primary_off_bg">
                <h4>Online</h4>
                <h5>50</h5>
            </div>
            <div class="">
                <h4>Offline</h4>
                <h5>50</h5>
            </div>
        </div>
        <!-- tarcking data list showing ends  -->


        <div class="tracking-data-wrapper pl_pr mt-5 mb-5">
            <div class="left_div">
                <div class="track_profile_container">
                    <div class="fist_div d-flex align-items-center gap-2 flex-wrap justify-content-between">
                        <div class="profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M17.5 3.65V14.0375C17.5 15.3125 16.4625 16.35 15.1875 16.35H3.75C3.0625 16.35 2.5 15.7875 2.5 15.1V7.1125C2.5 4.5625 4.5625 2.5 7.1125 2.5H16.3375C16.9875 2.5 17.5 3.0125 17.5 3.65Z" fill="#005399" />
                                <path d="M26.875 19.375C27.225 19.375 27.5 19.65 27.5 20V21.25C27.5 23.325 25.825 25 23.75 25C23.75 22.9375 22.0625 21.25 20 21.25C17.9375 21.25 16.25 22.9375 16.25 25H13.75C13.75 22.9375 12.0625 21.25 10 21.25C7.9375 21.25 6.25 22.9375 6.25 25C4.175 25 2.5 23.325 2.5 21.25V18.75C2.5 18.0625 3.0625 17.5 3.75 17.5H15.625C17.35 17.5 18.75 16.1 18.75 14.375V7.5C18.75 6.8125 19.3125 6.25 20 6.25H21.05C21.95 6.25 22.775 6.7375 23.225 7.5125L24.025 8.9125C24.1375 9.1125 23.9875 9.375 23.75 9.375C22.025 9.375 20.625 10.775 20.625 12.5V16.25C20.625 17.975 22.025 19.375 23.75 19.375H26.875Z" fill="#005399" />
                                <path d="M10 27.5C11.3807 27.5 12.5 26.3807 12.5 25C12.5 23.6193 11.3807 22.5 10 22.5C8.61929 22.5 7.5 23.6193 7.5 25C7.5 26.3807 8.61929 27.5 10 27.5Z" fill="#005399" />
                                <path d="M20 27.5C21.3807 27.5 22.5 26.3807 22.5 25C22.5 23.6193 21.3807 22.5 20 22.5C18.6193 22.5 17.5 23.6193 17.5 25C17.5 26.3807 18.6193 27.5 20 27.5Z" fill="#005399" />
                                <path d="M27.5 15.6625V17.5H23.75C23.0625 17.5 22.5 16.9375 22.5 16.25V12.5C22.5 11.8125 23.0625 11.25 23.75 11.25H25.3625L27.175 14.425C27.3875 14.8 27.5 15.225 27.5 15.6625Z" fill="#005399" />
                            </svg>
                            <h4>Truck</h4>
                        </div>
                        <div class="gps">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M16.5 8.4375H14.97C14.7 5.58 12.42 3.2925 9.5625 3.03V1.5C9.5625 1.1925 9.3075 0.9375 9 0.9375C8.6925 0.9375 8.4375 1.1925 8.4375 1.5V3.03C5.58 3.3 3.2925 5.58 3.03 8.4375H1.5C1.1925 8.4375 0.9375 8.6925 0.9375 9C0.9375 9.3075 1.1925 9.5625 1.5 9.5625H3.03C3.3 12.42 5.58 14.7075 8.4375 14.97V16.5C8.4375 16.8075 8.6925 17.0625 9 17.0625C9.3075 17.0625 9.5625 16.8075 9.5625 16.5V14.97C12.42 14.7 14.7075 12.42 14.97 9.5625H16.5C16.8075 9.5625 17.0625 9.3075 17.0625 9C17.0625 8.6925 16.8075 8.4375 16.5 8.4375ZM9 11.34C7.71 11.34 6.66 10.29 6.66 9C6.66 7.71 7.71 6.66 9 6.66C10.29 6.66 11.34 7.71 11.34 9C11.34 10.29 10.29 11.34 9 11.34Z" fill="#005399" />
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 justify-content-between my-1">
                        <div class="profile_id">
                            ID- 001
                        </div>
                        <div class="dot_color_div"></div>
                    </div>

                    <div class="profile_status">

                        <div>
                            <div class="d-flex align-items-center border_bottom">

                                <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between w-100">
                                    <div class="active_time">
                                        Parked Since 2 Days
                                    </div>
                                    <div class="engine_status">
                                        Engine On
                                    </div>
                                </div>
                            </div>
                            <a href="tracking-details.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M9.00016 10.0726C10.2925 10.0726 11.3402 9.02492 11.3402 7.73258C11.3402 6.44023 10.2925 5.39258 9.00016 5.39258C7.70781 5.39258 6.66016 6.44023 6.66016 7.73258C6.66016 9.02492 7.70781 10.0726 9.00016 10.0726Z" fill="#005399" stroke="#00427A" stroke-width="1.5" />
                                    <path d="M2.71527 6.3675C4.19277 -0.127498 13.8153 -0.119998 15.2853 6.375C16.1478 10.185 13.7778 13.41 11.7003 15.405C10.1928 16.86 7.80777 16.86 6.29277 15.405C4.22277 13.41 1.85277 10.1775 2.71527 6.3675Z" stroke="#00427A" stroke-width="1.5" />
                                </svg>
                                Texas college, New banaeshwor,
                                Kathmandu, Nepal
                            </a>
                        </div>

                        <!-- <div class="d-flex align-items-center border_bottom">
                            <img src="assets/images/icons/user-remove.svg" alt="user Inactive">
                            <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between w-100">
                                <div class="active_time">
                                    Never: Punch In
                                </div>
                                <div class="active_staus">
                                    Never seen
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>

                <div class="track_profile_container">
                    <div class="fist_div d-flex align-items-center gap-2 flex-wrap justify-content-between">
                        <div class="profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M8.365 10L11.2 8H14.692L13.6 5H11V3H15L16.092 6H20V9H17.184L18.64 13.002C19.7448 13.0371 20.798 13.4776 21.5988 14.2395C22.3996 15.0014 22.892 16.0313 22.982 17.133C23.0721 18.2346 22.7536 19.3309 22.0872 20.2127C21.4209 21.0946 20.4532 21.7003 19.3688 21.9145C18.2845 22.1286 17.1592 21.9362 16.2076 21.3738C15.256 20.8115 14.5447 19.9186 14.2093 18.8654C13.8738 17.8122 13.9377 16.6724 14.3888 15.6633C14.8398 14.6542 15.6465 13.8464 16.655 13.394L15.419 10H14.472L12.89 15.87L9.965 16.939C9.98834 17.123 10 17.31 10 17.5C9.99975 18.3249 9.77275 19.1339 9.34379 19.8386C8.91484 20.5432 8.30044 21.1164 7.56775 21.4954C6.83506 21.8745 6.01227 22.0449 5.1893 21.9879C4.36633 21.9309 3.57486 21.6489 2.90137 21.1725C2.22788 20.6961 1.69831 20.0438 1.37051 19.2867C1.04272 18.5297 0.929323 17.6972 1.04272 16.8801C1.15612 16.063 1.49194 15.2928 2.01349 14.6536C2.53504 14.0145 3.22224 13.531 4 13.256V12H2V10H8.365ZM5.5 20C6.16304 20 6.79893 19.7366 7.26777 19.2678C7.73661 18.7989 8 18.163 8 17.5C8 16.837 7.73661 16.2011 7.26777 15.7322C6.79893 15.2634 6.16304 15 5.5 15C4.83696 15 4.20108 15.2634 3.73223 15.7322C3.26339 16.2011 3 16.837 3 17.5C3 18.163 3.26339 18.7989 3.73223 19.2678C4.20108 19.7366 4.83696 20 5.5 20ZM18.5 20C19.163 20 19.7989 19.7366 20.2678 19.2678C20.7366 18.7989 21 18.163 21 17.5C21 16.837 20.7366 16.2011 20.2678 15.7322C19.7989 15.2634 19.163 15 18.5 15C17.837 15 17.2011 15.2634 16.7322 15.7322C16.2634 16.2011 16 16.837 16 17.5C16 18.163 16.2634 18.7989 16.7322 19.2678C17.2011 19.7366 17.837 20 18.5 20Z" fill="#005399" />
                            </svg>
                            <h4>Motorbike</h4>
                        </div>
                        <div class="gps">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M16.5 8.4375H14.97C14.7 5.58 12.42 3.2925 9.5625 3.03V1.5C9.5625 1.1925 9.3075 0.9375 9 0.9375C8.6925 0.9375 8.4375 1.1925 8.4375 1.5V3.03C5.58 3.3 3.2925 5.58 3.03 8.4375H1.5C1.1925 8.4375 0.9375 8.6925 0.9375 9C0.9375 9.3075 1.1925 9.5625 1.5 9.5625H3.03C3.3 12.42 5.58 14.7075 8.4375 14.97V16.5C8.4375 16.8075 8.6925 17.0625 9 17.0625C9.3075 17.0625 9.5625 16.8075 9.5625 16.5V14.97C12.42 14.7 14.7075 12.42 14.97 9.5625H16.5C16.8075 9.5625 17.0625 9.3075 17.0625 9C17.0625 8.6925 16.8075 8.4375 16.5 8.4375ZM9 11.34C7.71 11.34 6.66 10.29 6.66 9C6.66 7.71 7.71 6.66 9 6.66C10.29 6.66 11.34 7.71 11.34 9C11.34 10.29 10.29 11.34 9 11.34Z" fill="#005399" />
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 justify-content-between my-1">
                        <div class="profile_id">
                            ID- 002
                        </div>
                        <div class="dot_color_div red"></div>
                    </div>

                    <div class="profile_status">

                        <div>
                            <div class="d-flex align-items-center border_bottom">

                                <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between w-100">
                                    <div class="active_time">
                                        Last Movement: Never Seen
                                    </div>
                                </div>
                            </div>
                            <a href="tracking-details.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M9.00016 10.0726C10.2925 10.0726 11.3402 9.02492 11.3402 7.73258C11.3402 6.44023 10.2925 5.39258 9.00016 5.39258C7.70781 5.39258 6.66016 6.44023 6.66016 7.73258C6.66016 9.02492 7.70781 10.0726 9.00016 10.0726Z" fill="#005399" stroke="#00427A" stroke-width="1.5" />
                                    <path d="M2.71527 6.3675C4.19277 -0.127498 13.8153 -0.119998 15.2853 6.375C16.1478 10.185 13.7778 13.41 11.7003 15.405C10.1928 16.86 7.80777 16.86 6.29277 15.405C4.22277 13.41 1.85277 10.1775 2.71527 6.3675Z" stroke="#00427A" stroke-width="1.5" />
                                </svg>
                                Offline New Baneshwor
                            </a>
                        </div>
                    </div>
                </div>

                <div class="track_profile_container">
                    <div class="fist_div d-flex align-items-center gap-2 flex-wrap justify-content-between">
                        <div class="profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M17.5 3.65V14.0375C17.5 15.3125 16.4625 16.35 15.1875 16.35H3.75C3.0625 16.35 2.5 15.7875 2.5 15.1V7.1125C2.5 4.5625 4.5625 2.5 7.1125 2.5H16.3375C16.9875 2.5 17.5 3.0125 17.5 3.65Z" fill="#005399" />
                                <path d="M26.875 19.375C27.225 19.375 27.5 19.65 27.5 20V21.25C27.5 23.325 25.825 25 23.75 25C23.75 22.9375 22.0625 21.25 20 21.25C17.9375 21.25 16.25 22.9375 16.25 25H13.75C13.75 22.9375 12.0625 21.25 10 21.25C7.9375 21.25 6.25 22.9375 6.25 25C4.175 25 2.5 23.325 2.5 21.25V18.75C2.5 18.0625 3.0625 17.5 3.75 17.5H15.625C17.35 17.5 18.75 16.1 18.75 14.375V7.5C18.75 6.8125 19.3125 6.25 20 6.25H21.05C21.95 6.25 22.775 6.7375 23.225 7.5125L24.025 8.9125C24.1375 9.1125 23.9875 9.375 23.75 9.375C22.025 9.375 20.625 10.775 20.625 12.5V16.25C20.625 17.975 22.025 19.375 23.75 19.375H26.875Z" fill="#005399" />
                                <path d="M10 27.5C11.3807 27.5 12.5 26.3807 12.5 25C12.5 23.6193 11.3807 22.5 10 22.5C8.61929 22.5 7.5 23.6193 7.5 25C7.5 26.3807 8.61929 27.5 10 27.5Z" fill="#005399" />
                                <path d="M20 27.5C21.3807 27.5 22.5 26.3807 22.5 25C22.5 23.6193 21.3807 22.5 20 22.5C18.6193 22.5 17.5 23.6193 17.5 25C17.5 26.3807 18.6193 27.5 20 27.5Z" fill="#005399" />
                                <path d="M27.5 15.6625V17.5H23.75C23.0625 17.5 22.5 16.9375 22.5 16.25V12.5C22.5 11.8125 23.0625 11.25 23.75 11.25H25.3625L27.175 14.425C27.3875 14.8 27.5 15.225 27.5 15.6625Z" fill="#005399" />
                            </svg>
                            <h4>Car</h4>
                        </div>
                        <div class="gps">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M16.5 8.4375H14.97C14.7 5.58 12.42 3.2925 9.5625 3.03V1.5C9.5625 1.1925 9.3075 0.9375 9 0.9375C8.6925 0.9375 8.4375 1.1925 8.4375 1.5V3.03C5.58 3.3 3.2925 5.58 3.03 8.4375H1.5C1.1925 8.4375 0.9375 8.6925 0.9375 9C0.9375 9.3075 1.1925 9.5625 1.5 9.5625H3.03C3.3 12.42 5.58 14.7075 8.4375 14.97V16.5C8.4375 16.8075 8.6925 17.0625 9 17.0625C9.3075 17.0625 9.5625 16.8075 9.5625 16.5V14.97C12.42 14.7 14.7075 12.42 14.97 9.5625H16.5C16.8075 9.5625 17.0625 9.3075 17.0625 9C17.0625 8.6925 16.8075 8.4375 16.5 8.4375ZM9 11.34C7.71 11.34 6.66 10.29 6.66 9C6.66 7.71 7.71 6.66 9 6.66C10.29 6.66 11.34 7.71 11.34 9C11.34 10.29 10.29 11.34 9 11.34Z" fill="#005399" />
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 justify-content-between my-1">
                        <div class="profile_id">
                            ID- 003
                        </div>
                        <div class="dot_color_div"></div>
                    </div>

                    <div class="profile_status">

                        <div>
                            <div class="d-flex align-items-center border_bottom">

                                <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between w-100">
                                    <div class="active_time">
                                        Parked Since 2 Days
                                    </div>
                                    <div class="engine_status">
                                        Engine On
                                    </div>
                                </div>
                            </div>
                            <a href="tracking-details.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M9.00016 10.0726C10.2925 10.0726 11.3402 9.02492 11.3402 7.73258C11.3402 6.44023 10.2925 5.39258 9.00016 5.39258C7.70781 5.39258 6.66016 6.44023 6.66016 7.73258C6.66016 9.02492 7.70781 10.0726 9.00016 10.0726Z" fill="#005399" stroke="#00427A" stroke-width="1.5" />
                                    <path d="M2.71527 6.3675C4.19277 -0.127498 13.8153 -0.119998 15.2853 6.375C16.1478 10.185 13.7778 13.41 11.7003 15.405C10.1928 16.86 7.80777 16.86 6.29277 15.405C4.22277 13.41 1.85277 10.1775 2.71527 6.3675Z" stroke="#00427A" stroke-width="1.5" />
                                </svg>
                                Texas college, New banaeshwor,
                                Kathmandu, Nepal
                            </a>
                        </div>

                        <!-- <div class="d-flex align-items-center border_bottom">
                            <img src="assets/images/icons/user-remove.svg" alt="user Inactive">
                            <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between w-100">
                                <div class="active_time">
                                    Never: Punch In
                                </div>
                                <div class="active_staus">
                                    Never seen
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>

                <div class="track_profile_container">
                    <div class="fist_div d-flex align-items-center gap-2 flex-wrap justify-content-between">
                        <div class="profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M8.365 10L11.2 8H14.692L13.6 5H11V3H15L16.092 6H20V9H17.184L18.64 13.002C19.7448 13.0371 20.798 13.4776 21.5988 14.2395C22.3996 15.0014 22.892 16.0313 22.982 17.133C23.0721 18.2346 22.7536 19.3309 22.0872 20.2127C21.4209 21.0946 20.4532 21.7003 19.3688 21.9145C18.2845 22.1286 17.1592 21.9362 16.2076 21.3738C15.256 20.8115 14.5447 19.9186 14.2093 18.8654C13.8738 17.8122 13.9377 16.6724 14.3888 15.6633C14.8398 14.6542 15.6465 13.8464 16.655 13.394L15.419 10H14.472L12.89 15.87L9.965 16.939C9.98834 17.123 10 17.31 10 17.5C9.99975 18.3249 9.77275 19.1339 9.34379 19.8386C8.91484 20.5432 8.30044 21.1164 7.56775 21.4954C6.83506 21.8745 6.01227 22.0449 5.1893 21.9879C4.36633 21.9309 3.57486 21.6489 2.90137 21.1725C2.22788 20.6961 1.69831 20.0438 1.37051 19.2867C1.04272 18.5297 0.929323 17.6972 1.04272 16.8801C1.15612 16.063 1.49194 15.2928 2.01349 14.6536C2.53504 14.0145 3.22224 13.531 4 13.256V12H2V10H8.365ZM5.5 20C6.16304 20 6.79893 19.7366 7.26777 19.2678C7.73661 18.7989 8 18.163 8 17.5C8 16.837 7.73661 16.2011 7.26777 15.7322C6.79893 15.2634 6.16304 15 5.5 15C4.83696 15 4.20108 15.2634 3.73223 15.7322C3.26339 16.2011 3 16.837 3 17.5C3 18.163 3.26339 18.7989 3.73223 19.2678C4.20108 19.7366 4.83696 20 5.5 20ZM18.5 20C19.163 20 19.7989 19.7366 20.2678 19.2678C20.7366 18.7989 21 18.163 21 17.5C21 16.837 20.7366 16.2011 20.2678 15.7322C19.7989 15.2634 19.163 15 18.5 15C17.837 15 17.2011 15.2634 16.7322 15.7322C16.2634 16.2011 16 16.837 16 17.5C16 18.163 16.2634 18.7989 16.7322 19.2678C17.2011 19.7366 17.837 20 18.5 20Z" fill="#005399" />
                            </svg>
                            <h4>Motorbike</h4>
                        </div>
                        <div class="gps">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M16.5 8.4375H14.97C14.7 5.58 12.42 3.2925 9.5625 3.03V1.5C9.5625 1.1925 9.3075 0.9375 9 0.9375C8.6925 0.9375 8.4375 1.1925 8.4375 1.5V3.03C5.58 3.3 3.2925 5.58 3.03 8.4375H1.5C1.1925 8.4375 0.9375 8.6925 0.9375 9C0.9375 9.3075 1.1925 9.5625 1.5 9.5625H3.03C3.3 12.42 5.58 14.7075 8.4375 14.97V16.5C8.4375 16.8075 8.6925 17.0625 9 17.0625C9.3075 17.0625 9.5625 16.8075 9.5625 16.5V14.97C12.42 14.7 14.7075 12.42 14.97 9.5625H16.5C16.8075 9.5625 17.0625 9.3075 17.0625 9C17.0625 8.6925 16.8075 8.4375 16.5 8.4375ZM9 11.34C7.71 11.34 6.66 10.29 6.66 9C6.66 7.71 7.71 6.66 9 6.66C10.29 6.66 11.34 7.71 11.34 9C11.34 10.29 10.29 11.34 9 11.34Z" fill="#005399" />
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 justify-content-between my-1">
                        <div class="profile_id">
                            ID- 002
                        </div>
                        <div class="dot_color_div red"></div>
                    </div>

                    <div class="profile_status">

                        <div>
                            <div class="d-flex align-items-center border_bottom">

                                <div class="d-flex align-items-center gap-2 flex-wrap justify-content-between w-100">
                                    <div class="active_time">
                                        Last Movement: Never Seen
                                    </div>
                                </div>
                            </div>
                            <a href="tracking-details.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M9.00016 10.0726C10.2925 10.0726 11.3402 9.02492 11.3402 7.73258C11.3402 6.44023 10.2925 5.39258 9.00016 5.39258C7.70781 5.39258 6.66016 6.44023 6.66016 7.73258C6.66016 9.02492 7.70781 10.0726 9.00016 10.0726Z" fill="#005399" stroke="#00427A" stroke-width="1.5" />
                                    <path d="M2.71527 6.3675C4.19277 -0.127498 13.8153 -0.119998 15.2853 6.375C16.1478 10.185 13.7778 13.41 11.7003 15.405C10.1928 16.86 7.80777 16.86 6.29277 15.405C4.22277 13.41 1.85277 10.1775 2.71527 6.3675Z" stroke="#00427A" stroke-width="1.5" />
                                </svg>
                                Offline New Baneshwor
                            </a>
                        </div>
                    </div>
                </div>
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