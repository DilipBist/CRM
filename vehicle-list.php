<?php
$pageTitle = 'Vehicle List';
include 'inc/header.php'
?>


<!-- delet popup component  -->
<?php include 'components/delete-popup.php' ?>
<!-- delet popup component ends -->

<section class="admin_container d-flex">


    <?php
    $currentPage = 'vehicleList';
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
                    <a href="vehicle-list.php">Vehicle Management </a>
                    <span>/</span>
                    <p>Vehicle List</p>
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
                <h3>Vehicle List</h3>
                <p>You can view the driver registration list accordingly.</p>
            </div>

            <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                <div class="search">
                    <input type="text" placeholder="Search" name="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

                <button class="add_acc_group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.66602 10H13.3327" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 13.3346V6.66797" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Add Vehicle
                </button>
            </div>
        </div>


        <div class="project_list_table pl_pr">
            <div class="common_table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Model</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Category</th>
                                <th scope="col">Fuel Type</th>
                                <th scope="col">Engine Number</th>
                                <th scope="col">Chassis Number</th>
                                <th scope="col">Plate Number</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php foreach ($projectList as $project): ?>
                                <tr>
                                    <td><?= $project['id'] ?></td>
                                    <td>
                                        <div class="model_tag">
                                            <div class="tag">
                                                A
                                            </div>
                                            Honda
                                        </div>
                                    </td>
                                    <td>Civic</td>
                                    <td>Four Wheeler</td>
                                    <td>Diesel</td>
                                    <td>124141214</td>
                                    <td>9841868583</td>
                                    <td>1241212593</td>
                                    <td>
                                        <div class="table_actions">
                                            <a href="#" title="View Details" class="add_acc_groupBtn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a href="#" aria-label="Edit user List" class="add_acc_groupBtn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M9.94452 2.70041L3.78702 9.21791C3.55452 9.46541 3.32952 9.95291 3.28452 10.2904L3.00702 12.7204C2.90952 13.5979 3.53952 14.1979 4.40952 14.0479L6.82452 13.6354C7.16202 13.5754 7.63452 13.3279 7.86702 13.0729L14.0245 6.55541C15.0895 5.43041 15.5695 4.14791 13.912 2.58041C12.262 1.02791 11.0095 1.57541 9.94452 2.70041Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.91797 3.78711C9.24047 5.85711 10.9205 7.43961 13.0055 7.64961" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M2.25 16.5H15.75" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#"
                                                title="Delete"
                                                class="delete_row_btn delete"
                                                data-title="Edit User">
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

            <div class="mb-5 mt-3">
                <?php include 'inc/pagination.php' ?>
            </div>
        </div>
    </div>
</section>



<div class="vehicle_list_popup_outer_bg">
    <div class="vehicle_list_popup_content">
        <div class="heading_container">
            <div class="heading">
                <h3>Setup Vehicle Registration</h3>
                <p>You can set the vehicle registration list accordingly.</p>
            </div>
            <div class="vehicle_pop_close_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M3.75 3.75L14.2493 14.2493" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.75071 14.2493L14.25 3.75" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>

        <div class="vehicle_registration_steps">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="steps_container d-flex align-items-center justify-content-between">
                        <div class="d-flex flex-column align-items-center">
                            <div class="steps active">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M14.794 23.2841C15.1145 23.3587 15.1439 23.7785 14.8317 23.8826L12.9883 24.4892C8.35666 25.9826 5.91833 24.7342 4.41333 20.1026L2.91999 15.4942C1.42666 10.8626 2.66333 8.41255 7.29499 6.91922L8.07566 6.66069C8.47852 6.52727 8.86807 6.9304 8.74927 7.33781C8.66533 7.62565 8.58569 7.92946 8.50833 8.24922L7.36499 13.1376C6.08166 18.6326 7.95999 21.6659 13.455 22.9726L14.794 23.2841Z" fill="#005399" />
                                        <path d="M20.0345 3.7446L18.0861 3.2896C14.1895 2.36794 11.8678 3.12627 10.5028 5.9496C10.1528 6.66127 9.87281 7.5246 9.63948 8.51627L8.49615 13.4046C7.35281 18.2813 8.85781 20.6846 13.7228 21.8396L15.6828 22.3063C16.3595 22.4696 16.9895 22.5746 17.5728 22.6213C21.2128 22.9713 23.1495 21.2679 24.1295 17.0563L25.2728 12.1796C26.4161 7.30294 24.9228 4.88794 20.0345 3.7446ZM17.8411 15.5513C17.7361 15.9479 17.3861 16.2046 16.9895 16.2046C16.9195 16.2046 16.8495 16.1929 16.7678 16.1813L13.3728 15.3179C12.9061 15.2013 12.6261 14.7229 12.7428 14.2563C12.8595 13.7896 13.3378 13.5096 13.8045 13.6263L17.1995 14.4896C17.6778 14.6063 17.9578 15.0846 17.8411 15.5513ZM21.2595 11.6079C21.1545 12.0046 20.8045 12.2613 20.4078 12.2613C20.3378 12.2613 20.2678 12.2496 20.1861 12.2379L14.5278 10.8029C14.0611 10.6863 13.7811 10.2079 13.8978 9.74127C14.0145 9.2746 14.4928 8.9946 14.9595 9.11127L20.6178 10.5463C21.0961 10.6513 21.3761 11.1296 21.2595 11.6079Z" fill="#005399" />
                                    </svg>
                                </div>
                            </div>
                            <p>Basic Details</p>
                        </div>

                        <div>
                            <div class="steps">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M9.33594 2.33203V5.83203" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.6641 2.33203V5.83203" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.16406 15.168H17.4974" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.16406 19.832H13.9974" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.6667 4.08203C22.5517 4.29203 24.5 5.7737 24.5 11.257V18.467C24.5 23.2737 23.3333 25.677 17.5 25.677H10.5C4.66667 25.677 3.5 23.2737 3.5 18.467V11.257C3.5 5.7737 5.44833 4.3037 9.33333 4.08203H18.6667Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <p>Properties</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="steps">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M11.1562 21.0013V15.168" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.9974 18.082H8.16406" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.33594 2.33203V5.83203" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.6641 2.33203V5.83203" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.4419 3.98828C22.3385 4.12828 24.3102 5.56328 24.4269 11.0466L24.5785 18.2449C24.6719 23.0516 23.5635 25.4666 17.7302 25.5949L10.7302 25.7349C4.89688 25.8516 3.68354 23.4716 3.59021 18.6766L3.42688 11.4666C3.31021 5.98328 5.23521 4.46661 9.10854 4.17495L18.4419 3.98828Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <p>Additional Feature</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="steps">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M18.0924 3.30078H9.9024C6.9974 3.30078 6.35573 4.74745 5.9824 6.52078L4.66406 12.8324H23.3307L22.0124 6.52078C21.6391 4.74745 20.9974 3.30078 18.0924 3.30078Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M25.6562 23.122C25.7845 24.487 24.6878 25.6654 23.2878 25.6654H21.0945C19.8345 25.6654 19.6595 25.1287 19.4378 24.4637L19.2045 23.7637C18.8778 22.807 18.6678 22.1654 16.9878 22.1654H11.0145C9.33449 22.1654 9.08949 22.8887 8.79782 23.7637L8.56449 24.4637C8.34282 25.1287 8.16782 25.6654 6.90782 25.6654H4.71449C3.31449 25.6654 2.21782 24.487 2.34616 23.122L2.99949 16.017C3.16282 14.267 3.50116 12.832 6.55782 12.832H21.4445C24.5012 12.832 24.8395 14.267 25.0028 16.017L25.6562 23.122Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4.66667 9.33203H3.5" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M24.5026 9.33203H23.3359" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14 3.5V5.83333" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.25 5.83203H15.75" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 17.5H10.5" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.5 17.5H21" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <p>Vehicle Specification</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="registration_title">
                        <h3>Basic Details</h3>
                        <p>Please kindly complete the form to add basic details .</p>
                    </div>

                    <div class="vehicle_image_select_container">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php' ?>