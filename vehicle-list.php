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

        <div class="vehicle_basic_detail d-none">
            <div class="vehicle_registration_steps">
                <div class="row justify-content-center g-3">
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
                                <p class="active">Basic Details</p>
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
                            <div class="heading">
                                <div class="d-flex align-items-center gap-2">
                                    <h3>Vehicle Image</h3>
                                    <div class="file_num">(1 file)</div>
                                </div>
                                <p>Please upload your remaining document.</p>
                            </div>

                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <div class="image_photo">
                                    <img src="assets/images/car.png" alt="car">
                                </div>

                                <div class="image_photo" id="carimagePreview">
                                    <label for="fileInput" class="image_add_btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M6 12H18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 18V6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </label>
                                    <input type="file" id="fileInput" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form_input d-flex flex-column gap-2">
                            <label for="des">Description <span>*</span></label>
                            <div class="editor-wrapper position-relative">
                                <textarea name="content" class='editor' placeholder="Write something awesome..."></textarea>
                                <button id="toggleToolbar" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.777778 1.55556C0.35 1.55556 0 1.20556 0 0.777778C0 0.35 0.35 0 0.777778 0H13.2222C13.65 0 14 0.35 14 0.777778C14 1.20556 13.65 1.55556 13.2222 1.55556H0.777778ZM8.55556 3.11111H0.777778C0.35 3.11111 0 3.46111 0 3.88889C0 4.31667 0.35 4.66667 0.777778 4.66667H8.55556C8.98333 4.66667 9.33333 4.31667 9.33333 3.88889C9.33333 3.46111 8.98333 3.11111 8.55556 3.11111ZM8.55556 9.33333H0.777778C0.35 9.33333 0 9.68333 0 10.1111C0 10.5389 0.35 10.8889 0.777778 10.8889H8.55556C8.98333 10.8889 9.33333 10.5389 9.33333 10.1111C9.33333 9.68333 8.98333 9.33333 8.55556 9.33333ZM13.2222 7.77778H0.777778C0.35 7.77778 0 7.42778 0 7C0 6.57222 0.35 6.22222 0.777778 6.22222H13.2222C13.65 6.22222 14 6.57222 14 7C14 7.42778 13.65 7.77778 13.2222 7.77778ZM0.777778 14H13.2222C13.65 14 14 13.65 14 13.2222C14 12.7944 13.65 12.4444 13.2222 12.4444H0.777778C0.35 12.4444 0 12.7944 0 13.2222C0 13.65 0.35 14 0.777778 14Z" fill="#141414" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="multi_select_tag">
                    <div class="form_input d-flex flex-column gap-2">
                        <label for="des">Service <span>*</span></label>
                        <div class="multi-select">
                            <div class="select-box" id="selectBox">
                                <div class="tags" id="tags"></div>
                            </div>
                            <div class="options" id="options">
                                <div class="option" data-value="1">Tour Package</div>
                                <div class="option" data-value="2">Wedding</div>
                                <div class="option" data-value="3">Airport Transfer</div>
                                <div class="option" data-value="4">Transfer</div>
                                <div class="option" data-value="5">Airport</div>
                                <div class="option" data-value="6">Option</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="vehicle_details_Form ">
                    <div class="registration_title">
                        <h3>Vehicle Details</h3>
                        <p>Please kindly complete the form to add driver registration.</p>
                    </div>
                    <div class="common_form">
                        <div class="row g-3 align-items-end">
                            <div class="col-md-6 col-lg-4  slect-status">
                                <label for="Category" class="mb-2">Category <span class="red">*</span></label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="form-select" aria-label="select" id="Category">

                                    <option value="" selected disabled hidden>Select category</option>
                                    <option value="2">Two Wheeler</option>
                                    <option value="3">Four Wheeler</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4  slect-status">
                                <label for="Category" class="mb-2">Model <span class="red">*</span></label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="form-select" aria-label="select" id="Model">

                                    <option value="" selected disabled hidden>Select model</option>
                                    <option value="2">Two Wheeler</option>
                                    <option value="3">Four Wheeler</option>
                                </select>
                            </div>


                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="register_number">Registration Number <span class="red">*</span></label>
                                    <input type="text" placeholder="Enter your registration number" name="register_number" id="register_number" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2 position-relative">
                                    <label for="start_date">Year of Manufacture <span>*</span></label>
                                    <input type="text" class="date-picker" id="start_date" placeholder="MM/DD/YYYY">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="calender" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M7.33203 1.66602V4.16602" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14 1.66602V4.16602" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.58203 7.57422H17.7487" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.166 7.08268V14.166C18.166 16.666 16.916 18.3327 13.9993 18.3327H7.33268C4.41602 18.3327 3.16602 16.666 3.16602 14.166V7.08268C3.16602 4.58268 4.41602 2.91602 7.33268 2.91602H13.9993C16.916 2.91602 18.166 4.58268 18.166 7.08268Z" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.7441 11.4167H13.7516" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.7441 13.9167H13.7516" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.6621 11.4167H10.6696" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.6621 13.9167H10.6696" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.5781 11.4167H7.58559" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.5781 13.9167H7.58559" stroke="#848484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4  slect-status">
                                <label for="fuel_type" class="mb-2">Fuel Type <span class="red">*</span></label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="form-select" aria-label="select" id="fuel_type">

                                    <option value="" selected disabled hidden>Select fuel type</option>
                                    <option value="2">Petrol</option>
                                    <option value="3">Diesel</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4  slect-status">
                                <label for="transmisson_type" class="mb-2">Transmission Type <span class="red">*</span></label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="form-select" aria-label="select" id="transmisson_type">

                                    <option value="" selected disabled hidden>Enter transmission type</option>
                                    <option value="2">Two Wheeler</option>
                                    <option value="3">Four Wheeler</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="vehicle_color">Vehicle Color <span>*</span></label>
                                    <input type="text" placeholder="Enter Color" name="vehicle_color" id="vehicle_color" required>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="next_Swap_buttons_container d-flex align-items-center gap-3 justify-content-between">
                    <div class="previous_btn disabled">Previous</div>
                    <div class="form_discard_save d-flex align-items-center gap-3">
                        <button class="discard" type="button">Back</button>
                        <button type="submit" class="submit px-3">Save & Next</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="vehicle_registration_steps d-none">
            <div class="row justify-content-center g-3">
                <div class="col-lg-10">
                    <div class="steps_container d-flex align-items-center justify-content-between">
                        <div class="d-flex flex-column align-items-center">
                            <div class="steps light_green">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path opacity="0.4" d="M25.2728 12.1796L24.1295 17.0563C23.1495 21.2679 21.2128 22.9713 17.5728 22.6213C16.9895 22.5746 16.3595 22.4696 15.6828 22.3063L13.7228 21.8396C8.85781 20.6846 7.35281 18.2813 8.49615 13.4046L9.63948 8.51627C9.87281 7.5246 10.1528 6.66127 10.5028 5.9496C11.8678 3.12627 14.1895 2.36794 18.0861 3.2896L20.0345 3.7446C24.9228 4.88794 26.4161 7.30294 25.2728 12.1796Z" fill="#008F1D" />
                                        <path d="M17.5733 22.6209C16.85 23.1109 15.94 23.5192 14.8317 23.8809L12.9883 24.4876C8.35666 25.9809 5.91833 24.7326 4.41333 20.1009L2.91999 15.4926C1.42666 10.8609 2.66333 8.41089 7.29499 6.91755L9.13833 6.31089C9.61666 6.15922 10.0717 6.03089 10.5033 5.94922C10.1533 6.66089 9.87333 7.52422 9.64 8.51589L8.49666 13.4042C7.35333 18.2809 8.85833 20.6842 13.7233 21.8392L15.6833 22.3059C16.36 22.4692 16.99 22.5742 17.5733 22.6209Z" fill="#008F1D" />
                                        <path d="M20.4036 12.2624C20.3336 12.2624 20.2636 12.2507 20.182 12.239L14.5236 10.804C14.057 10.6874 13.777 10.2091 13.8936 9.74238C14.0103 9.27572 14.4886 8.99572 14.9553 9.11238L20.6136 10.5474C21.0803 10.664 21.3603 11.1424 21.2436 11.609C21.1503 11.994 20.7886 12.2624 20.4036 12.2624Z" fill="#008F1D" />
                                        <path d="M16.984 16.2063C16.914 16.2063 16.844 16.1947 16.7624 16.183L13.3674 15.3197C12.9007 15.203 12.6207 14.7247 12.7374 14.258C12.854 13.7913 13.3324 13.5113 13.799 13.628L17.194 14.4913C17.6607 14.608 17.9407 15.0863 17.824 15.553C17.7307 15.9497 17.3807 16.2063 16.984 16.2063Z" fill="#008F1D" />
                                    </svg>
                                </div>
                            </div>
                            <p class="light_green">Basic Details</p>
                        </div>

                        <div>
                            <div class="steps active">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M9.67188 7.33703C9.18187 7.33703 8.79688 6.94036 8.79688 6.46203V3.20703C8.79688 2.7287 9.18187 2.33203 9.67188 2.33203C10.1619 2.33203 10.5469 2.7287 10.5469 3.20703V6.45037C10.5469 6.94037 10.1619 7.33703 9.67188 7.33703Z" fill="#005399" />
                                        <path d="M18.3281 7.33703C17.8381 7.33703 17.4531 6.94036 17.4531 6.46203V3.20703C17.4531 2.71703 17.8498 2.33203 18.3281 2.33203C18.8181 2.33203 19.2031 2.7287 19.2031 3.20703V6.45037C19.2031 6.94037 18.8181 7.33703 18.3281 7.33703Z" fill="#005399" />
                                        <path d="M22.8291 5.2487C22.0591 4.67703 20.9507 5.22536 20.9507 6.1937V6.31036C20.9507 7.67536 19.9707 8.93536 18.6057 9.07536C17.0307 9.2387 15.7007 8.00203 15.7007 6.46203V5.2487C15.7007 4.60703 15.1757 4.08203 14.5341 4.08203H13.4607C12.8191 4.08203 12.2941 4.60703 12.2941 5.2487V6.46203C12.2941 7.3837 11.8157 8.20036 11.0924 8.65536C10.9874 8.72536 10.8707 8.7837 10.7541 8.84203C10.6491 8.90036 10.5324 8.94703 10.4041 8.98203C10.2641 9.0287 10.1124 9.0637 9.94906 9.07536C9.7624 9.0987 9.57573 9.0987 9.38906 9.07536C9.22573 9.0637 9.07406 9.0287 8.93406 8.98203C8.8174 8.94703 8.70073 8.90036 8.58406 8.84203C8.4674 8.7837 8.35073 8.72536 8.24573 8.65536C7.51073 8.14203 7.04406 7.25536 7.04406 6.31036V6.1937C7.04406 5.29536 6.0874 4.7587 5.32906 5.1437C5.3174 5.15536 5.30573 5.15536 5.29406 5.16703C5.2474 5.19036 5.2124 5.2137 5.16573 5.2487C5.13073 5.2837 5.08406 5.30703 5.04906 5.34203C4.7224 5.5987 4.43073 5.89036 4.18573 6.20536C4.0574 6.34536 3.9524 6.49703 3.85906 6.6487C3.8474 6.66036 3.83573 6.67203 3.82406 6.69536C3.71906 6.84703 3.62573 7.02203 3.54406 7.18536C3.52073 7.2087 3.50906 7.22036 3.50906 7.2437C3.43906 7.3837 3.36906 7.5237 3.3224 7.67536C3.2874 7.7337 3.27573 7.78036 3.2524 7.8387C3.1824 8.0137 3.13573 8.1887 3.08906 8.3637C3.0424 8.52703 3.0074 8.70203 2.98406 8.87703C2.96073 9.00536 2.94906 9.1337 2.9374 9.2737C2.92573 9.43703 2.91406 9.60036 2.91406 9.7637V19.9837C2.91406 23.122 5.4574 25.6654 8.59573 25.6654H19.3991C22.5374 25.6654 25.0807 23.122 25.0807 19.9837V9.7637C25.0807 7.9087 24.1941 6.28703 22.8291 5.2487ZM13.9974 20.322H8.58406C8.10573 20.322 7.70906 19.9254 7.70906 19.447C7.70906 18.957 8.10573 18.5604 8.58406 18.5604H13.9974C14.4874 18.5604 14.8724 18.957 14.8724 19.447C14.8724 19.9254 14.4874 20.322 13.9974 20.322ZM17.2407 15.9937H8.58406C8.10573 15.9937 7.70906 15.597 7.70906 15.1187C7.70906 14.6287 8.10573 14.232 8.58406 14.232H17.2407C17.7307 14.232 18.1274 14.6287 18.1274 15.1187C18.1274 15.597 17.7307 15.9937 17.2407 15.9937Z" fill="#005399" />
                                    </svg>
                                </div>
                            </div>
                            <p class="active">Properties</p>
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
            </div>

            <div class="">
                <div class="registration_title">
                    <h3>External Setup</h3>
                    <p>Please kindly complete the form to add external setup.</p>
                </div>
                <div class="common_form">
                    <div class="row g-3 align-items-end">

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="engine_number">Engine Number <span class="red">*</span></label>
                                <input type="number" placeholder="Enter engine number" name="engine_number" id="engine_number" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="chassis_num">Chassis Number <span class="red">*</span></label>
                                <input type="number" placeholder="Enter chassis number" name="chassis_num" id="chassis_num" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="seat_capacity">Seating Capacity <span class="red">*</span></label>
                                <input type="number" placeholder="Enter seat capacity" name="seat_capacity" id="seat_capacity" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="Luggage">Luggage Capacity <span class="red">*</span></label>
                                <input type="number" placeholder="Enter luggage capacity" name="Luggage" id="Luggage" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="EngineCapacity">Engine Capacity Capacity <span class="red">*</span></label>
                                <input type="number" placeholder="Enter engine capacity" name="EngineCapacity" id="EngineCapacity" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vehicle_details_Form ">
                <div class="registration_title">
                    <h3>Internal Setup</h3>
                    <p>Please kindly complete the form to add internal setup.</p>
                </div>
                <div class="common_form">
                    <div class="row g-3 align-items-end">

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="Mileage">Mileage <span class="red">*</span></label>
                                <input type="number" placeholder="Enter mileage" name="Mileage" id="Mileage" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="Power">Power <span class="red">*</span></label>
                                <input type="number" placeholder="Enter Power" name="Power" id="Power" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="Torque">Torque <span class="red">*</span></label>
                                <input type="number" placeholder="Enter Torque" name="Torque" id="Torque" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="weight">Weight<span class="kg">(Kg)</span> <span class="red">*</span></label>
                                <input type="number" placeholder="Enter weight " name="weight" id="weight" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="length">Length<span class="kg">(m)</span> <span class="red">*</span></label>
                                <input type="number" placeholder="Enter length" name="length" id="length" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="Width">Width<span class="kg">(m)</span> <span class="red">*</span></label>
                                <input type="number" placeholder="Enter Width" name="Width" id="Width" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="wheelbase">wheelbase <span class="red">*</span></label>
                                <input type="number" placeholder="Enter wheelbase" name="wheelbase" id="wheelbase" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="Width">Width<span class="kg">(m)</span> <span class="red">*</span></label>
                                <input type="number" placeholder="Enter Width" name="Width" id="Width" required>
                            </div>
                        </div>


                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="GroundClearance">Ground Clearance<span class="kg">(mm)</span> <span class="red">*</span></label>
                                <input type="number" placeholder="Enter ground clearance" name="GroundClearance" id="GroundClearance" required>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="tank_capacity">Fuel Tank Capacity<span class="kg">(m)</span> <span class="red">*</span></label>
                                <input type="number" placeholder="Enter fuel tank capacity " name="tank_capacity" id="tank_capacity" required>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="next_Swap_buttons_container d-flex align-items-center gap-3 justify-content-between">
                <div class="previous_btn">Previous</div>
                <div class="form_discard_save d-flex align-items-center gap-3">
                    <button class="discard" type="button">Back</button>
                    <button type="submit" class="submit px-3">Save & Next</button>
                </div>
            </div>
        </div>

        <div class="vehicle_registration_steps">
            <div class="row justify-content-center g-3">
                <div class="col-lg-10">
                    <div class="steps_container d-flex align-items-center justify-content-between">
                        <div class="d-flex flex-column align-items-center">
                            <div class="steps light_green">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path opacity="0.4" d="M25.2728 12.1796L24.1295 17.0563C23.1495 21.2679 21.2128 22.9713 17.5728 22.6213C16.9895 22.5746 16.3595 22.4696 15.6828 22.3063L13.7228 21.8396C8.85781 20.6846 7.35281 18.2813 8.49615 13.4046L9.63948 8.51627C9.87281 7.5246 10.1528 6.66127 10.5028 5.9496C11.8678 3.12627 14.1895 2.36794 18.0861 3.2896L20.0345 3.7446C24.9228 4.88794 26.4161 7.30294 25.2728 12.1796Z" fill="#008F1D" />
                                        <path d="M17.5733 22.6209C16.85 23.1109 15.94 23.5192 14.8317 23.8809L12.9883 24.4876C8.35666 25.9809 5.91833 24.7326 4.41333 20.1009L2.91999 15.4926C1.42666 10.8609 2.66333 8.41089 7.29499 6.91755L9.13833 6.31089C9.61666 6.15922 10.0717 6.03089 10.5033 5.94922C10.1533 6.66089 9.87333 7.52422 9.64 8.51589L8.49666 13.4042C7.35333 18.2809 8.85833 20.6842 13.7233 21.8392L15.6833 22.3059C16.36 22.4692 16.99 22.5742 17.5733 22.6209Z" fill="#008F1D" />
                                        <path d="M20.4036 12.2624C20.3336 12.2624 20.2636 12.2507 20.182 12.239L14.5236 10.804C14.057 10.6874 13.777 10.2091 13.8936 9.74238C14.0103 9.27572 14.4886 8.99572 14.9553 9.11238L20.6136 10.5474C21.0803 10.664 21.3603 11.1424 21.2436 11.609C21.1503 11.994 20.7886 12.2624 20.4036 12.2624Z" fill="#008F1D" />
                                        <path d="M16.984 16.2063C16.914 16.2063 16.844 16.1947 16.7624 16.183L13.3674 15.3197C12.9007 15.203 12.6207 14.7247 12.7374 14.258C12.854 13.7913 13.3324 13.5113 13.799 13.628L17.194 14.4913C17.6607 14.608 17.9407 15.0863 17.824 15.553C17.7307 15.9497 17.3807 16.2063 16.984 16.2063Z" fill="#008F1D" />
                                    </svg>
                                </div>
                            </div>
                            <p class="light_green">Basic Details</p>
                        </div>

                        <div>
                            <div class="steps light_green">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                        <path d="M19.915 1.16667C19.145 0.595 18.0367 1.14333 18.0367 2.11167V2.22833C18.0367 3.59333 17.0567 4.85333 15.6917 4.99333C14.1167 5.15667 12.7867 3.92 12.7867 2.38V1.16667C12.7867 0.525 12.2617 0 11.62 0H10.5467C9.905 0 9.38 0.525 9.38 1.16667V2.38C9.38 3.30167 8.90167 4.11833 8.17833 4.57333C8.07333 4.64333 7.95667 4.70167 7.84 4.76C7.735 4.81833 7.61833 4.865 7.49 4.9C7.35 4.94667 7.19833 4.98167 7.035 4.99333C6.84833 5.01667 6.66167 5.01667 6.475 4.99333C6.31167 4.98167 6.16 4.94667 6.02 4.9C5.90333 4.865 5.78667 4.81833 5.67 4.76C5.55333 4.70167 5.43667 4.64333 5.33167 4.57333C4.59667 4.06 4.13 3.17333 4.13 2.22833V2.11167C4.13 1.21333 3.17333 0.676666 2.415 1.06167C2.40333 1.07333 2.39167 1.07333 2.38 1.085C2.33333 1.10833 2.29833 1.13167 2.25167 1.16667C2.21667 1.20167 2.17 1.225 2.135 1.26C1.80833 1.51667 1.51667 1.80833 1.27167 2.12333C1.14333 2.26333 1.03833 2.415 0.945 2.56667C0.933333 2.57833 0.921667 2.59 0.91 2.61333C0.805 2.765 0.711667 2.94 0.63 3.10333C0.606667 3.12667 0.595 3.13833 0.595 3.16167C0.525 3.30167 0.455 3.44167 0.408333 3.59333C0.373333 3.65167 0.361667 3.69833 0.338333 3.75667C0.268333 3.93167 0.221667 4.10667 0.175 4.28167C0.128333 4.445 0.0933333 4.62 0.0699999 4.795C0.0466666 4.92333 0.035 5.05167 0.0233333 5.19167C0.0116666 5.355 0 5.51833 0 5.68167V15.9017C0 19.04 2.54333 21.5833 5.68167 21.5833H16.485C19.6233 21.5833 22.1667 19.04 22.1667 15.9017V5.68167C22.1667 3.82667 21.28 2.205 19.915 1.16667ZM11.0833 16.24H5.67C5.19167 16.24 4.795 15.8433 4.795 15.365C4.795 14.875 5.19167 14.4783 5.67 14.4783H11.0833C11.5733 14.4783 11.9583 14.875 11.9583 15.365C11.9583 15.8433 11.5733 16.24 11.0833 16.24ZM14.3267 11.9117H5.67C5.19167 11.9117 4.795 11.515 4.795 11.0367C4.795 10.5467 5.19167 10.15 5.67 10.15H14.3267C14.8167 10.15 15.2133 10.5467 15.2133 11.0367C15.2133 11.515 14.8167 11.9117 14.3267 11.9117Z" fill="#008F1D" />
                                    </svg>
                                </div>
                            </div>
                            <p class="light_green">Properties</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="steps active">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M9.67188 7.33703C9.18187 7.33703 8.79688 6.94036 8.79688 6.46203V3.20703C8.79688 2.7287 9.18187 2.33203 9.67188 2.33203C10.1619 2.33203 10.5469 2.7287 10.5469 3.20703V6.45037C10.5469 6.94037 10.1619 7.33703 9.67188 7.33703Z" fill="#005399" />
                                        <path d="M18.3281 7.33703C17.8381 7.33703 17.4531 6.94036 17.4531 6.46203V3.20703C17.4531 2.71703 17.8498 2.33203 18.3281 2.33203C18.8181 2.33203 19.2031 2.7287 19.2031 3.20703V6.45037C19.2031 6.94037 18.8181 7.33703 18.3281 7.33703Z" fill="#005399" />
                                        <path d="M22.8291 5.2487C22.0591 4.67703 20.9507 5.22536 20.9507 6.1937V6.31036C20.9507 7.67536 19.9707 8.93536 18.6057 9.07536C17.0307 9.2387 15.7007 8.00203 15.7007 6.46203V5.2487C15.7007 4.60703 15.1757 4.08203 14.5341 4.08203H13.4607C12.8191 4.08203 12.2941 4.60703 12.2941 5.2487V6.46203C12.2941 7.3837 11.8157 8.20036 11.0924 8.65536C10.9874 8.72536 10.8707 8.7837 10.7541 8.84203C10.6491 8.90036 10.5324 8.94703 10.4041 8.98203C10.2641 9.0287 10.1124 9.0637 9.94906 9.07536C9.7624 9.0987 9.57573 9.0987 9.38906 9.07536C9.22573 9.0637 9.07406 9.0287 8.93406 8.98203C8.8174 8.94703 8.70073 8.90036 8.58406 8.84203C8.4674 8.7837 8.35073 8.72536 8.24573 8.65536C7.51073 8.14203 7.04406 7.25536 7.04406 6.31036V6.1937C7.04406 5.29536 6.0874 4.7587 5.32906 5.1437C5.3174 5.15536 5.30573 5.15536 5.29406 5.16703C5.2474 5.19036 5.2124 5.2137 5.16573 5.2487C5.13073 5.2837 5.08406 5.30703 5.04906 5.34203C4.7224 5.5987 4.43073 5.89036 4.18573 6.20536C4.0574 6.34536 3.9524 6.49703 3.85906 6.6487C3.8474 6.66036 3.83573 6.67203 3.82406 6.69536C3.71906 6.84703 3.62573 7.02203 3.54406 7.18536C3.52073 7.2087 3.50906 7.22036 3.50906 7.2437C3.43906 7.3837 3.36906 7.5237 3.3224 7.67536C3.2874 7.7337 3.27573 7.78036 3.2524 7.8387C3.1824 8.0137 3.13573 8.1887 3.08906 8.3637C3.0424 8.52703 3.0074 8.70203 2.98406 8.87703C2.96073 9.00536 2.94906 9.1337 2.9374 9.2737C2.92573 9.43703 2.91406 9.60036 2.91406 9.7637V19.9837C2.91406 23.122 5.4574 25.6654 8.59573 25.6654H19.3991C22.5374 25.6654 25.0807 23.122 25.0807 19.9837V9.7637C25.0807 7.9087 24.1941 6.28703 22.8291 5.2487ZM13.9974 18.957H12.0257V20.9987C12.0257 21.477 11.6291 21.8737 11.1507 21.8737C10.6607 21.8737 10.2757 21.477 10.2757 20.9987V18.957H8.16406C7.68573 18.957 7.28906 18.5604 7.28906 18.082C7.28906 17.6037 7.68573 17.207 8.16406 17.207H10.2757V15.1654C10.2757 14.687 10.6607 14.2904 11.1507 14.2904C11.6291 14.2904 12.0257 14.687 12.0257 15.1654V17.207H13.9974C14.4757 17.207 14.8724 17.6037 14.8724 18.082C14.8724 18.5604 14.4757 18.957 13.9974 18.957Z" fill="#005399" />
                                    </svg>
                                </div>
                            </div>
                            <p class="active">Additional Feature</p>
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
            </div>

            <div class="">
                <div class="registration_title">
                    <h3>Additional Feature</h3>
                    <p>Please kindly complete the form to add additional feature.</p>
                </div>
                <div class="common_form mb-5">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="des" class="editor_tag">Additional Information</label>
                                <div class="position-relative editor-wrapper">
                                    <textarea name="content" class='editor' placeholder="Write something awesome..."></textarea>
                                    <button id="toggleToolbar" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.777778 1.55556C0.35 1.55556 0 1.20556 0 0.777778C0 0.35 0.35 0 0.777778 0H13.2222C13.65 0 14 0.35 14 0.777778C14 1.20556 13.65 1.55556 13.2222 1.55556H0.777778ZM8.55556 3.11111H0.777778C0.35 3.11111 0 3.46111 0 3.88889C0 4.31667 0.35 4.66667 0.777778 4.66667H8.55556C8.98333 4.66667 9.33333 4.31667 9.33333 3.88889C9.33333 3.46111 8.98333 3.11111 8.55556 3.11111ZM8.55556 9.33333H0.777778C0.35 9.33333 0 9.68333 0 10.1111C0 10.5389 0.35 10.8889 0.777778 10.8889H8.55556C8.98333 10.8889 9.33333 10.5389 9.33333 10.1111C9.33333 9.68333 8.98333 9.33333 8.55556 9.33333ZM13.2222 7.77778H0.777778C0.35 7.77778 0 7.42778 0 7C0 6.57222 0.35 6.22222 0.777778 6.22222H13.2222C13.65 6.22222 14 6.57222 14 7C14 7.42778 13.65 7.77778 13.2222 7.77778ZM0.777778 14H13.2222C13.65 14 14 13.65 14 13.2222C14 12.7944 13.65 12.4444 13.2222 12.4444H0.777778C0.35 12.4444 0 12.7944 0 13.2222C0 13.65 0.35 14 0.777778 14Z" fill="#141414" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="des" class="editor_tag">Safety Information </label>
                                <div class="position-relative editor-wrapper">
                                    <textarea name="content" class='editor' placeholder="Write something awesome..."></textarea>
                                    <button id="toggleToolbar" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.777778 1.55556C0.35 1.55556 0 1.20556 0 0.777778C0 0.35 0.35 0 0.777778 0H13.2222C13.65 0 14 0.35 14 0.777778C14 1.20556 13.65 1.55556 13.2222 1.55556H0.777778ZM8.55556 3.11111H0.777778C0.35 3.11111 0 3.46111 0 3.88889C0 4.31667 0.35 4.66667 0.777778 4.66667H8.55556C8.98333 4.66667 9.33333 4.31667 9.33333 3.88889C9.33333 3.46111 8.98333 3.11111 8.55556 3.11111ZM8.55556 9.33333H0.777778C0.35 9.33333 0 9.68333 0 10.1111C0 10.5389 0.35 10.8889 0.777778 10.8889H8.55556C8.98333 10.8889 9.33333 10.5389 9.33333 10.1111C9.33333 9.68333 8.98333 9.33333 8.55556 9.33333ZM13.2222 7.77778H0.777778C0.35 7.77778 0 7.42778 0 7C0 6.57222 0.35 6.22222 0.777778 6.22222H13.2222C13.65 6.22222 14 6.57222 14 7C14 7.42778 13.65 7.77778 13.2222 7.77778ZM0.777778 14H13.2222C13.65 14 14 13.65 14 13.2222C14 12.7944 13.65 12.4444 13.2222 12.4444H0.777778C0.35 12.4444 0 12.7944 0 13.2222C0 13.65 0.35 14 0.777778 14Z" fill="#141414" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_input d-flex flex-column gap-2">
                                <label for="des" class="editor_tag">Further Feature</label>
                                <div class="position-relative editor-wrapper">
                                    <textarea name="content" class='editor' placeholder="Write something awesome..."></textarea>
                                    <button id="toggleToolbar" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.777778 1.55556C0.35 1.55556 0 1.20556 0 0.777778C0 0.35 0.35 0 0.777778 0H13.2222C13.65 0 14 0.35 14 0.777778C14 1.20556 13.65 1.55556 13.2222 1.55556H0.777778ZM8.55556 3.11111H0.777778C0.35 3.11111 0 3.46111 0 3.88889C0 4.31667 0.35 4.66667 0.777778 4.66667H8.55556C8.98333 4.66667 9.33333 4.31667 9.33333 3.88889C9.33333 3.46111 8.98333 3.11111 8.55556 3.11111ZM8.55556 9.33333H0.777778C0.35 9.33333 0 9.68333 0 10.1111C0 10.5389 0.35 10.8889 0.777778 10.8889H8.55556C8.98333 10.8889 9.33333 10.5389 9.33333 10.1111C9.33333 9.68333 8.98333 9.33333 8.55556 9.33333ZM13.2222 7.77778H0.777778C0.35 7.77778 0 7.42778 0 7C0 6.57222 0.35 6.22222 0.777778 6.22222H13.2222C13.65 6.22222 14 6.57222 14 7C14 7.42778 13.65 7.77778 13.2222 7.77778ZM0.777778 14H13.2222C13.65 14 14 13.65 14 13.2222C14 12.7944 13.65 12.4444 13.2222 12.4444H0.777778C0.35 12.4444 0 12.7944 0 13.2222C0 13.65 0.35 14 0.777778 14Z" fill="#141414" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="next_Swap_buttons_container d-flex align-items-center gap-3 justify-content-between">
                <div class="previous_btn">Previous</div>
                <div class="form_discard_save d-flex align-items-center gap-3">
                    <button class="discard" type="button">Back</button>
                    <button class="skip_btn">Skip</button>
                    <button type="submit" class="submit px-3">Save & Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'inc/footer.php' ?>