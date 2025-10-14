<?php
$pageTitle = 'Order Number';
include 'inc/header.php'
?>


<section class="admin_container d-flex">

    <?php
    $currentPage = 'purchaseOrder';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content project__Details ms-auto">
        <!-- top profile header  -->
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M9 1.5C7.035 1.5 5.4375 3.0975 5.4375 5.0625C5.4375 6.99 6.945 8.55 8.91 8.6175C8.97 8.61 9.03 8.61 9.075 8.6175C9.09 8.6175 9.0975 8.6175 9.1125 8.6175C9.12 8.6175 9.12 8.6175 9.1275 8.6175C11.0475 8.55 12.555 6.99 12.5625 5.0625C12.5625 3.0975 10.965 1.5 9 1.5Z" fill="#141414" />
                        <path d="M12.8088 10.6127C10.7162 9.21766 7.30375 9.21766 5.19625 10.6127C4.24375 11.2502 3.71875 12.1127 3.71875 13.0352C3.71875 13.9577 4.24375 14.8127 5.18875 15.4427C6.23875 16.1477 7.61875 16.5002 8.99875 16.5002C10.3787 16.5002 11.7587 16.1477 12.8088 15.4427C13.7537 14.8052 14.2788 13.9502 14.2788 13.0202C14.2713 12.0977 13.7537 11.2427 12.8088 10.6127Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="purchase-entries-requisation.php">Purchase Entries</a>
                    <span>/</span>
                    <p>Purchase Order</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">
                <?php include 'components/profile.php' ?>
                <?php include 'components/notification.php' ?>
            </div>
        </div>
        <!-- top profile header ends -->

        <div class="add_purchase_requisation_data_container pl_pr">
            <div class="add_heading">
                <a href="purchase-order.php">Back</a>
                <h3>Purchase Order</h3>
                <p>Please kindly fill up the following form</p>
            </div>

            <!-- add purchase order form  -->
            <div class="add_purchase_form">
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">

                            <div class="col-md-4 col-lg-3">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="ponum">Purchase Order Number <span>*</span></label>
                                    <input type="number"  name="ponum" id="ponum" value="546498984" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3">
                                <div class="form_input d-flex flex-column gap-2 position-relative">
                                    <label for="date">Date</label>
                                    <input type="text" class="date-picker" id="date" placeholder="MM/DD/YYYY" value="01/04/2082">
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


                            <div class="col-md-4 col-lg-3 slect-status">
                                <label for="Supplier" class="mb-2">Supplier <span class="red">*</span></label>
                                <select class="form-select" aria-label="select" id="Supplier" name="Supplier" required>
                                    <option value="Sita Dhuwani Sewa" selected>Sita Dhuwani Sewa </option>
                                </select>
                            </div>

                            <div class="col-md-4 col-lg-3 ">
                                <div class="form_input d-flex flex-column gap-2 position-relative">
                                    <label for="Expdate">Expiry Date</label>
                                    <input type="text" class="date-picker" id="Expdate" placeholder="MM/DD/YYYY" value="01/04/2082">
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

                            <div class="col-md-4 col-lg-3 slect-status">
                                <label for="Status" class="mb-2">Status <span class="red">*</span></label>
                                <select class="form-select" aria-label="select" id="Status" name="Status" required>
                                    <option value="Used on Bill" selected>Used on Bill</option>
                                </select>
                            </div>


                            <!-- products add form  -->
                            <div class="col-12">
                                <div class="inner_project_table_wrapper">
                                    <div class="purhcase_order_Track_btns">
                                        <div class="account_buttons d-flex align-items-center justify-content-end gap-2 flex-wrap">

                                            <button type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.66602 10H13.3327" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 13.3346V6.66797" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Order Cancel
                                            </button>
                                            <button type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.66602 10H13.3327" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 13.3346V6.66797" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Copy to Invoice
                                            </button>
                                            <button type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.66602 10H13.3327" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 13.3346V6.66797" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Copy to New
                                            </button>
                                            <button type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.23713 2.36555C1.6705 2.8917 1.29102 3.74543 1.29102 5.08464V10.918C1.29102 12.2572 1.6705 13.1109 2.23713 13.6371C2.81214 14.171 3.67849 14.4596 4.83268 14.4596H13.166C14.3202 14.4596 15.1866 14.171 15.7616 13.6371C16.3282 13.1109 16.7077 12.2572 16.7077 10.918V5.08464C16.7077 3.74543 16.3282 2.8917 15.7616 2.36555C15.1866 1.83161 14.3202 1.54297 13.166 1.54297H4.83268C3.67849 1.54297 2.81214 1.83161 2.23713 2.36555ZM1.38657 1.44956C2.26989 0.62933 3.48687 0.292969 4.83268 0.292969H13.166C14.5118 0.292969 15.7288 0.62933 16.6121 1.44956C17.5038 2.27757 17.9577 3.50718 17.9577 5.08464V10.918C17.9577 12.4954 17.5038 13.725 16.6121 14.553C15.7288 15.3733 14.5118 15.7096 13.166 15.7096H4.83268C3.48687 15.7096 2.26989 15.3733 1.38657 14.553C0.494862 13.725 0.0410156 12.4954 0.0410156 10.918V5.08464C0.0410156 3.50718 0.494862 2.27757 1.38657 1.44956Z" fill="#005399" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6537 5.10997C13.8692 5.37968 13.8251 5.77295 13.5554 5.98837L10.9463 8.07232C9.86017 8.93703 8.12893 8.93703 7.04277 8.07232L7.04123 8.0711L4.44124 5.98776C4.17187 5.77192 4.12847 5.37858 4.34432 5.10921C4.56016 4.83984 4.9535 4.79644 5.22287 5.01229L7.82205 7.09496C8.45256 7.59627 9.53717 7.59615 10.1675 7.09462L12.7753 5.01168C13.045 4.79626 13.4383 4.84026 13.6537 5.10997Z" fill="#005399" />
                                                </svg>
                                                Email
                                            </button>
                                            <button type="button" class="print" onclick="window.print()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M6.04102 5.83464H13.9577V4.16797C13.9577 2.5013 13.3327 1.66797 11.4577 1.66797H8.54102C6.66602 1.66797 6.04102 2.5013 6.04102 4.16797V5.83464Z" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M13.3327 12.5V15.8333C13.3327 17.5 12.4993 18.3333 10.8327 18.3333H9.16602C7.49935 18.3333 6.66602 17.5 6.66602 15.8333V12.5H13.3327Z" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17.5 8.33203V12.4987C17.5 14.1654 16.6667 14.9987 15 14.9987H13.3333V12.4987H6.66667V14.9987H5C3.33333 14.9987 2.5 14.1654 2.5 12.4987V8.33203C2.5 6.66536 3.33333 5.83203 5 5.83203H15C16.6667 5.83203 17.5 6.66536 17.5 8.33203Z" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.1673 12.5H13.159H5.83398" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M5.83398 9.16797H8.33398" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Print
                                            </button>
                                        </div>
                                    </div>

                                    <div class="inner_product_table_container">
                                        <div class="purchase_data_table add_inventory_table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">SN</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Rate</th>
                                                            <th scope="col">Amount </th>
                                                            <th scope="col">Adjustment </th>
                                                            <th scope="col">Net Amount </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="w_max">
                                                                <div class="inner_input">
                                                                    <input type="number" placeholder="SN" value="1">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inner_input">
                                                                    <input type="text" placeholder="Product" value="Dhunga">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inner_input">
                                                                    <input type="text" placeholder="Qty" value="8 TP">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inner_input">
                                                                    <input type="number" placeholder="Rate" value="8000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inner_input">
                                                                    <input type="number" placeholder="Amount" value="8000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inner_input">
                                                                    <input type="number" placeholder="Adjustment" value="8000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="inner_input">
                                                                    <input type="number" placeholder="NetAmount" value="8000">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
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
                                                            <td></td>
                                                            <td></td>
                                                            <td>Tax (Rs.) </td=>
                                                            <td>NA</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
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

                        </div>
                    </form>
                </div>
            </div>
            <!-- add purchase order form ends  -->
        </div>


    </div>
</section>




<?php include 'inc/footer.php' ?>