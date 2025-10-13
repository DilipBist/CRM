<?php
$pageTitle = 'Stock Transfer';
include 'inc/header.php'
?>


<section class="admin_container d-flex">

    <?php
    $currentPage = 'stockTransfer';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content project__Details ms-auto">

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
                    <a href="inventory.php">Inventory Management </a>
                    <span>/</span>
                    <p> Stock Transfer</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">

                <?php include 'components/profile.php' ?>


                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- TOP PROFILE HEADER ENDS  -->

        <div class="add_purchase_requisation_data_container pl_pr">
            <div class="add_heading">
                <h3> Stock Transfer</h3>
                <p>Please kindly fill up the following form</p>
            </div>

            <!--  Stock Transfer form  -->
            <div class="add_purchase_form">
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">

                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form_input d-flex flex-column gap-2 position-relative">
                                    <label for="date">Date</label>
                                    <input type="text" class="date-picker" id="date" placeholder="MM/DD/YYYY">
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


                            <div class="col-md-6 col-lg-4 col-xxl-3 slect-status">
                                <label for="transferType" class="mb-2">Transfer Type <span class="red">*</span></label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="form-select" aria-label="select" id="transferType" name="transferType" required>

                                    <option value="" disabled selected hidden>Select </option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xxl-3 slect-status">
                                <label for="From" class="mb-2">From <span class="red">*</span></label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="form-select" aria-label="select" id="From" name="From" required>

                                    <option value="" disabled selected hidden>Warehouse </option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xxl-3 slect-status">
                                <label for="transferTwo" class="mb-2">Transfer To <span class="red">*</span></label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="form-select" aria-label="select" id="transferTwo" name="transferTwo" required>

                                    <option value="" disabled selected hidden>Summary </option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <!-- shipping address  -->
                            <div class="col-12">
                                <div class="add_heading mb-0 mt-4">
                                    <h3>Shipping Address</h3>
                                    <p>Please kindly fill up the following form</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 slect-status">
                                <label for="shipping_address" class="mb-2">Shipping Address <span class="red">*</span></label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="form-select" aria-label="select" id="shipping_address" name="shipping_address" required>

                                    <option value="" disabled selected hidden>Enter Name </option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="phoneNumber">Phone Number <span>*</span></label>
                                    <input type="tel" placeholder="Enter your Number" name="phoneNumber" id="phoneNumber" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="receiverName">Receiver Name <span>*</span></label>
                                    <input type="text" placeholder="Enter your Name" name="receiverName" id="receiverName" required>
                                </div>
                            </div>
                            <!-- shipping address  -->


                            <!-- products add form  -->
                            <div class="col-12">
                                <div class="inner_project_table_wrapper">
                                    <div class="add_project_inner_form d-flex align-items-center gap-2 flex-wrap mt-4 justify-content-between">
                                        <div class="add_heading mb-0">
                                            <h3>Products</h3>
                                            <p>Please kindly fill up the following form</p>
                                        </div>

                                        <a href="#" id="addInventoryRow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M9.99935 18.3327C14.5827 18.3327 18.3327 14.5827 18.3327 9.99935C18.3327 5.41602 14.5827 1.66602 9.99935 1.66602C5.41602 1.66602 1.66602 5.41602 1.66602 9.99935C1.66602 14.5827 5.41602 18.3327 9.99935 18.3327Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.66602 10H13.3327" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 13.3327V6.66602" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Add Items
                                        </a>
                                    </div>

                                    <div class="inner_product_table_container">
                                        <div class="purchase_data_table add_inventory_table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Particular</th>
                                                            <th scope="col">Unit</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Rate</th>
                                                            <th scope="col">Amount </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="inner_input">
                                                                    <input type="text" placeholder="Items">

                                                                    <textarea name="description" placeholder="Description" rows="3"></textarea>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inner_input">
                                                                    <input type="number" placeholder="Unit">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inner_input">
                                                                    <input type="number" placeholder="Qty">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inner_input">
                                                                    <input type="number" placeholder="Rate">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="amount_text">
                                                                    8000
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>Sub Total (Rs)</td=>
                                                            <td>NA</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>Tax (Rs.) </td=>
                                                            <td>NA</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>Total Amount (Rs.)</td>
                                                            <td>NA</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- products add form  -->


                            <div class="col-12 ">
                                <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                                    <button class="discard popup-btn1" type="button">Discard</button>
                                    <button type="submit" class="submit popup-btn2">Create</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--  Stock Transfer form ends  -->
        </div>


    </div>
</section>




<?php include 'inc/footer.php' ?>