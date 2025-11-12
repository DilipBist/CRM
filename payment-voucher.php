<?php
$pageTitle = 'Payment Vourcher';
include 'inc/header.php'
?>


<section class="admin_container d-flex">


    <!-- SIDE BAR  -->
    <?php
    $currentPage = 'Payment';
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
                    <a href="index.php">Finance Management </a>
                    <span>/</span>
                    <p>Payment Voucher</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">

                <?php include 'components/profile.php' ?>
                <?php include 'components/notification.php' ?>

            </div>
        </div>
        <!-- TOP PROFILE HEADER ENDS  -->

        <div class="admin_list_heading d-flex align-items-center flex-wrap gap-1 gap-sm-3 justify-content-between pt-3 pb-4 pl_pr">
            <div class="left_heading">
                <h3>Payment Voucher</h3>
                <p>You can view the Payment list accordingly.</p>
            </div>



            <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                <div class="search">
                    <input type="text" placeholder="Voucher No." name="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

                <!-- <div class="filter_comp">
                    <?php include 'components/filter.php' ?>
                </div> -->

                <a href="#" class="common_payment_popbtns">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99935 18.3327C14.5827 18.3327 18.3327 14.5827 18.3327 9.99935C18.3327 5.41602 14.5827 1.66602 9.99935 1.66602C5.41602 1.66602 1.66602 5.41602 1.66602 9.99935C1.66602 14.5827 5.41602 18.3327 9.99935 18.3327Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.66602 10H13.3327" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 13.3327V6.66602" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Add Payment
                </a>
            </div>
        </div>


        <!-- journal vouchar list table  -->
        <div class="journal_vouchar_table_list pl_pr">
            <div class="common_table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Voucher No</th>
                                <th scope="col">Date</th>
                                <th scope="col">Pay From</th>
                                <th scope="col">Paid Account</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php foreach ($projectList as $project): ?>
                                <tr>
                                    <th scope="row"><?= $project['id'] ?></th>
                                    <td><?= $project['uid'] ?></td>
                                    <td><?= $project['date'] ?></td>
                                    <td><?= $project['ledger'] ?></td>
                                    <td><?= $project['name'] ?></td>
                                    <td><?= $project['rate'] ?></td>
                                    <td>
                                        <div class="table_actions">
                                            <a href="#>" title="View Details" class="common_payment_popbtns">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#" title="Edit Details" class="common_payment_popbtns">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M9.94452 2.70041L3.78702 9.21791C3.55452 9.46541 3.32952 9.95291 3.28452 10.2904L3.00702 12.7204C2.90952 13.5979 3.53952 14.1979 4.40952 14.0479L6.82452 13.6354C7.16202 13.5754 7.63452 13.3279 7.86702 13.0729L14.0245 6.55541C15.0895 5.43041 15.5695 4.14791 13.912 2.58041C12.262 1.02791 11.0095 1.57541 9.94452 2.70041Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.91797 3.78711C9.24047 5.85711 10.9205 7.43961 13.0055 7.64961" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M2.25 16.5H15.75" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <a href="#" title="print" onclick="window.print()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M5.4375 5.25H12.5625V3.75C12.5625 2.25 12 1.5 10.3125 1.5H7.6875C6 1.5 5.4375 2.25 5.4375 3.75V5.25Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 11.25V14.25C12 15.75 11.25 16.5 9.75 16.5H8.25C6.75 16.5 6 15.75 6 14.25V11.25H12Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M15.75 7.5V11.25C15.75 12.75 15 13.5 13.5 13.5H12V11.25H6V13.5H4.5C3 13.5 2.25 12.75 2.25 11.25V7.5C2.25 6 3 5.25 4.5 5.25H13.5C15 5.25 15.75 6 15.75 7.5Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12.75 11.25H11.8425H5.25" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M5.25 8.25H7.5" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
        <!-- journal vouchar list table  -->


    </div>
</section>



<div class="vouchar-popup-content">
    <!-- VOUCHAR POPUP  -->
    <div class="vouchar_data_bg">
        <div class="Common_vouchar_data_container">
            <div class="inner_content">
                <div class="heading">
                    <h4>Payment Voucher</h4>
                    <div class="closeVoucharBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path d="M10.0013 2.16602C5.40964 2.16602 1.66797 5.90768 1.66797 10.4993C1.66797 15.091 5.40964 18.8327 10.0013 18.8327C14.593 18.8327 18.3346 15.091 18.3346 10.4993C18.3346 5.90768 14.593 2.16602 10.0013 2.16602ZM12.8013 12.416C13.043 12.6577 13.043 13.0577 12.8013 13.2993C12.6763 13.4243 12.518 13.4827 12.3596 13.4827C12.2013 13.4827 12.043 13.4243 11.918 13.2993L10.0013 11.3827L8.08464 13.2993C7.95964 13.4243 7.8013 13.4827 7.64297 13.4827C7.48464 13.4827 7.3263 13.4243 7.2013 13.2993C6.95964 13.0577 6.95964 12.6577 7.2013 12.416L9.11797 10.4993L7.2013 8.58268C6.95964 8.34102 6.95964 7.94102 7.2013 7.69935C7.44297 7.45768 7.84297 7.45768 8.08464 7.69935L10.0013 9.61602L11.918 7.69935C12.1596 7.45768 12.5596 7.45768 12.8013 7.69935C13.043 7.94102 13.043 8.34102 12.8013 8.58268L10.8846 10.4993L12.8013 12.416Z" fill="#FF0000" />
                        </svg>
                    </div>
                </div>




                <!-- vouchar table  -->

                <div class="vouchar_data_Table_container">
                    <form action="" class="common_form">
                        <div class="main_heading d-flex align-items-center gap-2 flex-wrap justify-content-between">
                            <div class="left">
                                <h3>Payment Voucher</h3>
                                <p>SL. No : 66172644</p>
                            </div>

                            <div class="account_buttons d-flex align-items-center gap-2 flex-wrap">
                                <button class="import ListMsgPopBtn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.66602 10H13.3327" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10 13.3346V6.66797" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Image Upload
                                </button>
                                <button class="email" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10.8832 9.11719C12.7582 10.9922 12.7582 14.0255 10.8832 15.8922C9.00821 17.7589 5.97487 17.7672 4.1082 15.8922C2.24154 14.0172 2.2332 10.9839 4.1082 9.11719" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.82578 11.1734C6.87578 9.22344 6.87578 6.05677 8.82578 4.09844C10.7758 2.14011 13.9424 2.14844 15.9008 4.09844C17.8591 6.04844 17.8508 9.21511 15.9008 11.1734" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Email
                                </button>
                                <button class="print" type="button" onclick="window.print()">
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


                        <div class="printing_vouchar_container">
                            <div class="table-responsive">
                                <div class="voucher-header">
                                    <h2>Accounting Voucher Creation</h2>
                                    <div class="voucher-meta d-flex align-items-center justify-content-between gap-3">
                                        <div class="d-flex flex-column gap-1">
                                            <p>Payment Voucher &nbsp; No:83</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <p>Accounts:</p>
                                                <input type="text">
                                            </div>
                                            <p>Current balance</p>
                                        </div>

                                        <div class="c-date d-flex flex-column gap-1 text-end">
                                            <span class="date"></span>
                                            <span class="day"></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- payment print format  -->
                                <div id="printSection">
                                    <div class="common_print_header">
                                        <div class="print-header">
                                            <div class="prit_logo">
                                                <img src="assets/images/logo.svg" alt="logo">
                                            </div>
                                            <h3>Payment Voucher</h3>
                                            <div class="last_div">
                                                <p>S.T Builders Pvt.Ltd.</p>
                                                <p>Kathmandu-32,Koteshwor</p>
                                                <p>9863313584</p>
                                                <p>PAN: 601241851</p>
                                            </div>
                                        </div>

                                        <div class="sec_heading d-flex align-items-center justify-content-between gap-3">
                                            <div class="gap">
                                                <p>Company’s Name : Sita Dhuwani Sewa</p>
                                                <p>Receiver’s Name : Gita</p>
                                                <p>Phone No : 107659660</p>
                                            </div>
                                            <div class="gap">
                                                <p>Voucher No :PO-00001-82/83</p>
                                                <p>Date :01/04/2082</p>
                                                <p>Address : Dhapakhel , Lalitpur</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="print-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Particulars</th>
                                                    <th scope="col">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td class="number_box">1,00,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Rohan</td>
                                                    <td>2000000</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>1258</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td>Total</td>
                                                    <td>10000</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <div class="payment_print_footer">
                                        <p>
                                            Amount in Words : Eight Thousand Rupees And Zero Paisa Only.
                                        </p>
                                        <p>
                                            Payment Method
                                        </p>

                                        <div class="signature_box d-flex align-items-center">
                                            <div>
                                                <h4>CASH</h4>
                                                <div class="box">

                                                </div>
                                            </div>
                                            <div>
                                                <h4>CHEQUE NO.</h4>
                                                <div class="box">

                                                </div>
                                            </div>
                                            <div>
                                                <h4>BANK NAME</h4>
                                                <div class="box">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="issue_sig">
                                            <p>Issued By</p>

                                            <p>Received By</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- payment print format ends -->

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Particulars</th>
                                            <th scope="col">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td class="number_box">1,00,000</td>
                                        </tr>
                                        <tr>
                                            <td>Rohan</td>
                                            <td>2000000</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>1258</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td>10000</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                            <button class="discard popup-btn1" type="button">Back</button>
                            <button type="submit" class="submit popup-btn2">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- VOUCHAR POPUP ENDS  -->



    <!-- Vouchar inner popup   -->
    <?php include 'components/vouchar-inner-popup.php' ?>
    <!-- Vouchar inner popup   -->
</div>

<!-- print table  -->
<div id="printSection" class="paymentV">
    <div class="common_print_header">
        <div class="print-header">
            <div class="prit_logo">
                <img src="assets/images/logo.svg" alt="logo">
            </div>
            <h3>Payment Voucher</h3>
            <div class="last_div">
                <p>S.T Builders Pvt.Ltd.</p>
                <p>Kathmandu-32,Koteshwor</p>
                <p>9863313584</p>
                <p>PAN: 601241851</p>
            </div>
        </div>

        <div class="sec_heading d-flex align-items-center justify-content-between gap-3">
            <div class="gap">
                <p>Company’s Name : Sita Dhuwani Sewa</p>
                <p>Receiver’s Name : Gita</p>
                <p>Phone No : 107659660</p>
            </div>
            <div class="gap">
                <p>Voucher No :PO-00001-82/83</p>
                <p>Date :01/04/2082</p>
                <p>Address : Dhapakhel , Lalitpur</p>
            </div>
        </div>
    </div>

    <div class="print-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">Debit</th>
                    <th scope="col">Credit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dhunga</td>
                    <td>8,000</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dhunga</td>
                    <td></td>
                    <td>1,00,000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" class="text-end">Total</td>
                    <td>100000</td>
                    <td>100000</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="payment_print_footer">
        <p>
            Amount in Words : Eight Thousand Rupees And Zero Paisa Only.
        </p>
        <p>
            Payment Method
        </p>

        <div class="signature_box d-flex align-items-center">
            <div>
                <h4>CASH</h4>
                <div class="box">

                </div>
            </div>
            <div>
                <h4>CHEQUE NO.</h4>
                <div class="box">

                </div>
            </div>
            <div>
                <h4>BANK NAME</h4>
                <div class="box">

                </div>
            </div>
        </div>

        <div class="issue_sig">
            <p>Issued By</p>

            <p>Received By</p>
        </div>
    </div>
</div>
<!-- print table  -->


<!-- Image upload popup  -->
<div class="list_msg_pop_bg">

    <div class="ass_filter_popcontent">
        <div class="bg_white">

            <div class="ass_heading">
                <h5>Upload Image</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" id="closeListMsgPop">
                    <path d="M10.0013 1.66602C5.40964 1.66602 1.66797 5.40768 1.66797 9.99935C1.66797 14.591 5.40964 18.3327 10.0013 18.3327C14.593 18.3327 18.3346 14.591 18.3346 9.99935C18.3346 5.40768 14.593 1.66602 10.0013 1.66602ZM12.8013 11.916C13.043 12.1577 13.043 12.5577 12.8013 12.7993C12.6763 12.9243 12.518 12.9827 12.3596 12.9827C12.2013 12.9827 12.043 12.9243 11.918 12.7993L10.0013 10.8827L8.08464 12.7993C7.95964 12.9243 7.8013 12.9827 7.64297 12.9827C7.48464 12.9827 7.3263 12.9243 7.2013 12.7993C6.95964 12.5577 6.95964 12.1577 7.2013 11.916L9.11797 9.99935L7.2013 8.08268C6.95964 7.84102 6.95964 7.44102 7.2013 7.19935C7.44297 6.95768 7.84297 6.95768 8.08464 7.19935L10.0013 9.11602L11.918 7.19935C12.1596 6.95768 12.5596 6.95768 12.8013 7.19935C13.043 7.44102 13.043 7.84102 12.8013 8.08268L10.8846 9.99935L12.8013 11.916Z" fill="#FF0000" />
                </svg>
            </div>

            <div class="c_asset_sub_heading">
                <h5 class="m-0">Upload Image</h5>
            </div>

            <div class="asset_filter_form">
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">
                            <div class="col-12">
                                <div>
                                    <label class="up_label">Upload Image<span>*</span></label>
                                    <label class="file-upload" data-upload="voucharImage">
                                        <div class="placeholder-data">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                <path d="M9.94702 25.7871H7.38696C3.46696 25.5071 1.70703 22.4938 1.70703 19.8138C1.70703 17.1338 3.46698 14.1071 7.32031 13.8404C7.86698 13.7871 8.34696 14.2138 8.38696 14.7738C8.42696 15.3204 8.01369 15.8004 7.45369 15.8404C4.86703 16.0271 3.70703 17.9738 3.70703 19.8271C3.70703 21.6804 4.86703 23.6271 7.45369 23.8138H9.94702C10.4937 23.8138 10.947 24.2671 10.947 24.8138C10.947 25.3604 10.4937 25.7871 9.94702 25.7871Z" fill="#141414" />
                                                <path d="M22.2272 25.786C22.2005 25.786 22.1872 25.786 22.1605 25.786C21.6139 25.786 21.1072 25.3327 21.1072 24.786C21.1072 24.2127 21.5339 23.786 22.0939 23.786C23.7339 23.786 25.2006 23.2127 26.3472 22.186C28.4272 20.3727 28.5605 17.7594 28.0005 15.9194C27.4405 14.0927 25.8805 11.9994 23.1605 11.666C22.7205 11.6127 22.3738 11.2794 22.2938 10.8394C21.7605 7.63936 20.0405 5.42602 17.4272 4.62602C14.7339 3.78602 11.5872 4.61269 9.62716 6.66602C7.7205 8.65269 7.28051 11.4394 8.38717 14.506C8.57384 15.026 8.30724 15.5993 7.78724 15.786C7.26724 15.9727 6.69388 15.706 6.50721 15.186C5.16054 11.426 5.77389 7.82602 8.18722 5.29269C10.6539 2.70602 14.6139 1.67934 18.0139 2.71934C21.1339 3.67934 23.3338 6.25268 24.1338 9.82601C26.8538 10.4393 29.0405 12.506 29.9072 15.3594C30.8539 18.466 30.0005 21.666 27.6672 23.6927C26.1872 25.026 24.2538 25.786 22.2272 25.786Z" fill="#141414" />
                                                <path d="M16.0007 29.7064C13.3207 29.7064 10.814 28.2797 9.44067 25.973C9.29401 25.7464 9.14734 25.4797 9.02734 25.1864C8.57401 24.2397 8.33398 23.1597 8.33398 22.0397C8.33398 17.813 11.774 14.373 16.0007 14.373C20.2273 14.373 23.6673 17.813 23.6673 22.0397C23.6673 23.173 23.4273 24.2397 22.9473 25.2264C22.8407 25.4797 22.694 25.7464 22.534 25.9997C21.1873 28.2797 18.6807 29.7064 16.0007 29.7064ZM16.0007 16.373C12.8807 16.373 10.334 18.9197 10.334 22.0397C10.334 22.8664 10.5073 23.6397 10.8407 24.3464C10.9473 24.573 11.0406 24.7597 11.1473 24.933C12.1606 26.653 14.014 27.7064 15.9873 27.7064C17.9606 27.7064 19.814 26.653 20.814 24.9597C20.934 24.7597 21.0407 24.573 21.1207 24.3864C21.4807 23.653 21.654 22.8797 21.654 22.053C21.6673 18.9197 19.1207 16.373 16.0007 16.373Z" fill="#141414" />
                                                <path d="M15.2405 24.3604C14.9872 24.3604 14.7339 24.2671 14.5339 24.0671L13.2138 22.7471C12.8272 22.3604 12.8272 21.7204 13.2138 21.3338C13.6005 20.9471 14.2405 20.9471 14.6272 21.3338L15.2672 21.9738L17.4005 20.0004C17.8138 19.6271 18.4405 19.6538 18.8138 20.0538C19.1872 20.4538 19.1605 21.0938 18.7605 21.4671L15.9205 24.0938C15.7205 24.2671 15.4805 24.3604 15.2405 24.3604Z" fill="#141414" />
                                            </svg>
                                            <p>Choose a file or drag & drop it here</p>
                                            <span>Upload the Image</span>
                                        </div>
                                        <input type="file" name="voucharImage" required>
                                        <div class="preview" data-preview="voucharImage"></div>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-2">
                                    <button class="discard popup-btn1" type="button">Back</button>
                                    <button type="submit" class="submit popup-btn2">Done</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Image upload  popup  -->
<?php include 'inc/footer.php' ?>