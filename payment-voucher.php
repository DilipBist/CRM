<?php
$pageTitle = 'Payment Voucher';
include 'inc/header.php'
?>


<section class="admin_container d-flex">


    <?php
    $currentPage = 'accounting';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto accounting_container">
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M9 1.5C7.035 1.5 5.4375 3.0975 5.4375 5.0625C5.4375 6.99 6.945 8.55 8.91 8.6175C8.97 8.61 9.03 8.61 9.075 8.6175C9.09 8.6175 9.0975 8.6175 9.1125 8.6175C9.12 8.6175 9.12 8.6175 9.1275 8.6175C11.0475 8.55 12.555 6.99 12.5625 5.0625C12.5625 3.0975 10.965 1.5 9 1.5Z" fill="#141414" />
                        <path d="M12.8097 10.6127C10.7172 9.21766 7.30473 9.21766 5.19723 10.6127C4.24473 11.2502 3.71973 12.1127 3.71973 13.0352C3.71973 13.9577 4.24473 14.8127 5.18973 15.4427C6.23973 16.1477 7.61973 16.5002 8.99973 16.5002C10.3797 16.5002 11.7597 16.1477 12.8097 15.4427C13.7547 14.8052 14.2797 13.9502 14.2797 13.0202C14.2722 12.0977 13.7547 11.2427 12.8097 10.6127Z" fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="account.php">Finance Management </a>
                    <span>/</span>
                    <p>Payment Voucher</p>
                </div>
            </div>

            <div class="admin_profile_container d-flex align-items-center gap-3">
                <a href="#" class="bell">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                        <path d="M10.5165 2.42578C7.75816 2.42578 5.5165 4.66745 5.5165 7.42578V9.83411C5.5165 10.3424 5.29983 11.1174 5.0415 11.5508L4.08316 13.1424C3.4915 14.1258 3.89983 15.2174 4.98316 15.5841C8.57483 16.7841 12.4498 16.7841 16.0415 15.5841C17.0498 15.2508 17.4915 14.0591 16.9415 13.1424L15.9832 11.5508C15.7332 11.1174 15.5165 10.3424 15.5165 9.83411V7.42578C15.5165 4.67578 13.2665 2.42578 10.5165 2.42578Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                        <path d="M12.0579 2.66719C11.7996 2.59219 11.5329 2.53385 11.2579 2.50052C10.4579 2.40052 9.69128 2.45885 8.97461 2.66719C9.21628 2.05052 9.81628 1.61719 10.5163 1.61719C11.2163 1.61719 11.8163 2.05052 12.0579 2.66719Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.0166 15.8828C13.0166 17.2578 11.8916 18.3828 10.5166 18.3828C9.83327 18.3828 9.19993 18.0995 8.74993 17.6495C8.29993 17.1995 8.0166 16.5661 8.0166 15.8828" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" />
                    </svg>
                </a>


                <a href="#" class="name_tag">
                    B
                </a>


            </div>
        </div>

        <div class="account_list_heading pl_pr my-4 d-flex align-items-center gap-3 flex-wrap justify-content-between">
            <div class="left_heading">
                <h4>Payment Voucher</h4>
                <p>SL. No : 66172644</p>
            </div>

            <div class="account_buttons d-flex align-items-center gap-2 flex-wrap">
                <button class="import" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.66602 10H13.3327" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 13.3346V6.66797" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Import
                </button>
                <button class="export" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M13.6997 7.41797C16.6997 7.6763 17.9247 9.21797 17.9247 12.593V12.7013C17.9247 16.4263 16.4331 17.918 12.7081 17.918H7.28307C3.55807 17.918 2.06641 16.4263 2.06641 12.7013V12.593C2.06641 9.24297 3.27474 7.7013 6.22474 7.4263" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 12.499V3.01562" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.7923 4.8737L10.0007 2.08203L7.20898 4.8737" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Export
                </button>
                <button class="help" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M10.8832 9.11719C12.7582 10.9922 12.7582 14.0255 10.8832 15.8922C9.00821 17.7589 5.97487 17.7672 4.1082 15.8922C2.24154 14.0172 2.2332 10.9839 4.1082 9.11719" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.82578 11.1734C6.87578 9.22344 6.87578 6.05677 8.82578 4.09844C10.7758 2.14011 13.9424 2.14844 15.9008 4.09844C17.8591 6.04844 17.8508 9.21511 15.9008 11.1734" stroke="#005399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Help
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


        <div class="common_print payment_vouchar_table pl_pr">
            <div class="table-responsive">
                <table>
                    <thead>
                        <th colspan="2">Accounting Voucher Creation</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Payment Voucher No: 83
                                <div class="account_num_input my-1">
                                    <label for="acc_num">Accounts: </label>
                                    <input type="number">
                                </div>
                                Current balance
                            </td>
                            <td>Date: 15-Jul-2025</td>
                        </tr>
                        <tr>
                            <th>Particulars</th>
                            <th>Amounts</th>
                        </tr>
                        <tr>
                            <td>Rohan</td>
                            <td>1,00,000</td>
                        </tr>
                        <tr>
                            <td>Krittita</td>
                            <td>1,00,000</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2,00,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>




    </div>
</section>


<?php include 'inc/footer.php' ?>