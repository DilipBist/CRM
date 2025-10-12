<?php
$pageTitle = 'Employee Leave';
include 'inc/header.php'
?>


<!-- delet popup component  -->
<?php include 'components/delete-popup.php' ?>
<!-- delet popup component ends -->

<section class="admin_container d-flex">


    <?php
    $currentPage = 'employeeLeave';
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
                    <a href="employee.php">HRMS </a>
                    <span>/</span>
                    <p>Leave</p>
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
                <h3>Leave List</h3>
                <p>You can view the Holidays list accordingly.</p>
            </div>

            <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                <div class="search">
                    <input type="text" placeholder="Search" name="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

                <button class="add_acc_group add_acc_groupBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.66602 10H13.3327" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 13.3346V6.66797" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Add leave
                </button>
            </div>
        </div>

        <div class="leave_list_container pl_pr mb-5">
            <div class="row g-3 g-xxl-4">
                <div class="col-md-6 col-xxl-3">
                    <div class="employee_leave_list_common_box">
                        <div class="list_heading">
                            <p>Annual Leaves</p>
                            <h4>05</h4>

                            <div class="remainaing_leave_tag">
                                Remaining Leaves : 07
                            </div>
                        </div>

                        <div class="shape">
                            <img src="assets/images/icons/leaveg5.svg" alt="shape">

                            <div class="inner_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="29" viewBox="0 0 25 29" fill="none">
                                    <path d="M5.58292 1.61304C5.71056 1.36988 5.93394 1.15436 6.25304 0.966463C6.57214 0.77857 6.89124 0.739887 7.21034 0.850412C7.59326 0.983042 7.89109 1.31462 8.10382 1.84514L8.13573 2.70724V3.56933H16.1133V2.70724L16.1452 1.84514C16.4217 1.27041 16.7515 0.938833 17.1344 0.850412C17.4109 0.784098 17.7088 0.828308 18.0279 0.983042C18.1981 1.09357 18.3257 1.19304 18.4108 1.28146C18.581 1.4583 18.6873 1.65172 18.7299 1.86172C18.7724 2.07172 18.7937 2.41987 18.7937 2.90618V3.56933H19.4319C20.1765 3.56933 20.7934 3.6467 21.2827 3.80144C22.1549 4.0667 22.8463 4.57511 23.3569 5.32668C23.4632 5.48142 23.5749 5.66931 23.6919 5.89036C23.8089 6.11141 23.8887 6.31036 23.9312 6.4872L23.9632 6.55351C24.027 6.77456 24.0642 7.13377 24.0748 7.63113C24.0855 8.1285 24.0908 9.75874 24.0908 12.5219V22.3034C24.0908 23.5633 24.0695 24.3812 24.027 24.757C24.027 25.0444 23.9951 25.2765 23.9312 25.4533L23.8993 25.5528C23.4526 27.0559 22.4634 27.9954 20.9317 28.3712L20.6126 28.4375H3.98742C3.66832 28.4375 3.46622 28.4264 3.38113 28.4043C2.72165 28.2496 2.14727 27.9733 1.65798 27.5754C1.04105 27.0891 0.604945 26.4149 0.349664 25.5528L0.317754 25.4533C0.253933 25.2765 0.222023 25.0444 0.222023 24.757C0.179477 24.3812 0.158203 23.5633 0.158203 22.3034V12.5219C0.158203 9.75874 0.163521 8.1285 0.174158 7.63113C0.184795 7.13377 0.222023 6.77456 0.285844 6.55351L0.317754 6.4872C0.466668 5.93457 0.764495 5.4151 1.21124 4.92879C1.61543 4.48669 2.03026 4.16617 2.45573 3.96722C2.79611 3.81249 3.12584 3.70749 3.44495 3.65223C3.76405 3.59696 4.22143 3.56933 4.81708 3.56933H5.45528V2.90618C5.45528 2.48619 5.46592 2.20987 5.48719 2.07724C5.48719 1.9004 5.5191 1.74567 5.58292 1.61304ZM4.72135 6.35457C4.14697 6.35457 3.74277 6.40983 3.50877 6.52036C3.25348 6.63088 3.04075 6.90719 2.87056 7.34929L2.83865 9.60401V11.8587H21.4103V9.60401L21.3784 7.34929C21.2082 6.90719 20.953 6.61983 20.6126 6.4872C20.3999 6.39878 20.0276 6.35457 19.4957 6.35457H18.7937V7.05087C18.7937 7.55929 18.7724 7.89087 18.7299 8.0456C18.6873 8.28876 18.5703 8.50981 18.3789 8.70875C18.23 8.86349 18.0279 8.97401 17.7726 9.04033C17.4748 9.15085 17.1876 9.1398 16.911 9.00717C16.5919 8.85244 16.3366 8.54296 16.1452 8.07876L16.1133 7.21666V6.35457H8.13573V7.21666L8.10382 8.07876C7.86982 8.65349 7.54008 8.99612 7.11461 9.10664C6.75296 9.19506 6.40195 9.11217 6.06158 8.85796C5.7212 8.60375 5.52974 8.29981 5.48719 7.94613C5.46592 7.85771 5.45528 7.55929 5.45528 7.05087V6.35457H4.72135ZM2.83865 19.6507L2.87056 24.6575C2.95566 24.8786 3.03011 25.0333 3.09393 25.1217C3.2003 25.2765 3.31731 25.3981 3.44495 25.4865L3.50877 25.5196C3.59386 25.586 3.71086 25.6302 3.85978 25.6523C4.07251 25.6744 4.5618 25.6854 5.32764 25.6854H19.2085C19.9744 25.6633 20.3999 25.6412 20.485 25.6191C20.7828 25.5086 21.0061 25.3538 21.1551 25.1549C21.2402 25.0444 21.3146 24.8786 21.3784 24.6575L21.4103 19.6507V14.644H2.83865V19.6507ZM6.50832 17.4292C6.31686 17.4955 6.1254 17.606 5.93394 17.7608C5.67865 17.9818 5.52974 18.2581 5.48719 18.5897C5.46592 18.7223 5.45528 19.2473 5.45528 20.1647C5.45528 21.082 5.46592 21.607 5.48719 21.7397C5.52974 22.0049 5.62547 22.226 5.77438 22.4028C5.88075 22.5355 6.10412 22.7123 6.4445 22.9333H9.82697C10.2099 22.6681 10.4545 22.4747 10.5609 22.3531C10.6673 22.2315 10.7417 22.027 10.7843 21.7397C10.8055 21.5628 10.8162 21.0544 10.8162 20.2144C10.8162 19.1313 10.7736 18.4571 10.6885 18.1918C10.6034 18.015 10.4705 17.8492 10.2897 17.6945C10.1088 17.5397 9.9227 17.4513 9.73124 17.4292C9.6036 17.385 9.06113 17.3629 8.10382 17.3629C7.14652 17.3629 6.61468 17.385 6.50832 17.4292Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="employee_leave_list_common_box bgGroup2">
                        <div class="list_heading">
                            <p>Medical Leaves</p>
                            <h4>11</h4>

                            <div class="remainaing_leave_tag blue">
                                Remaining Leaves : 01
                            </div>
                        </div>

                        <div class="shape">
                            <img src="assets/images/icons/leaveg6.svg" alt="shape">

                            <div class="inner_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34" viewBox="0 0 35 34" fill="none">
                                    <path d="M23.0273 3.85715C23.1835 3.52558 23.4179 3.30453 23.7304 3.194C23.9759 3.08348 24.2381 3.04479 24.5171 3.07795C24.7961 3.11111 24.9803 3.1719 25.0695 3.26032L25.2035 3.39295C26.2748 4.40978 27.2569 5.3603 28.1497 6.2445L30.2923 8.39974C30.7164 8.81973 30.9843 9.1071 31.0959 9.26184C31.1851 9.39446 31.2409 9.5271 31.2633 9.65973V9.72604C31.3079 10.0355 31.2577 10.3284 31.1126 10.6047C30.9675 10.881 30.7499 11.0855 30.4597 11.2181C30.3705 11.2623 30.2477 11.2844 30.0915 11.2844H29.8571C29.6339 11.2844 29.4721 11.2679 29.3717 11.2347C29.2712 11.2016 29.1317 11.1076 28.9532 10.9529C28.8193 10.8202 28.5403 10.5439 28.1162 10.1239L27.1118 9.16236L22.8264 13.4065L25.7726 16.3576C26.0181 16.6007 26.1744 16.7775 26.2413 16.8881C26.3083 16.9986 26.3529 17.1312 26.3752 17.286V17.3191C26.4422 17.6949 26.3529 18.0486 26.1074 18.3802C25.8619 18.7117 25.5383 18.8996 25.1365 18.9438C24.6901 18.9659 24.2772 18.7891 23.8978 18.4133L23.6299 18.1149L16.4653 25.1775C15.885 25.7522 15.4833 26.1169 15.2601 26.2717C15.1261 26.3822 14.9922 26.4596 14.8583 26.5038H14.7914C14.7244 26.5259 13.8204 26.5369 12.0795 26.5369H9.56856L6.08669 29.919C5.77422 30.2285 5.56218 30.4164 5.45058 30.4827C5.33898 30.549 5.20506 30.6042 5.04883 30.6485H5.01535C4.72519 30.6927 4.4462 30.6429 4.17836 30.4992C3.91053 30.3556 3.70407 30.1511 3.55899 29.8858C3.41391 29.6206 3.36369 29.3443 3.40833 29.0569V29.0237C3.45297 28.869 3.50877 28.7364 3.57573 28.6258C3.64269 28.5153 3.83241 28.3053 4.14488 27.9959L7.55979 24.5475V22.0607C7.55979 20.3365 7.57095 19.4412 7.59327 19.3749V19.3086C7.63791 19.1759 7.71602 19.0433 7.82762 18.9107C7.98386 18.6896 8.35213 18.2917 8.93245 17.717L16.0636 10.6213L15.7623 10.356C15.3828 9.98025 15.2043 9.57131 15.2266 9.1292C15.2712 8.73131 15.4609 8.41079 15.7957 8.16763C16.1305 7.92448 16.4876 7.83606 16.8671 7.90237H16.9006C17.0568 7.92448 17.1907 7.96869 17.3023 8.03501C17.4139 8.10132 17.5925 8.25606 17.838 8.49921L20.8177 11.4171L25.103 7.17291L24.1321 6.17818C23.7081 5.75819 23.4291 5.48187 23.2951 5.34924C23.1389 5.1724 23.044 5.03425 23.0106 4.93477C22.9771 4.8353 22.9603 4.67504 22.9603 4.45399V4.22189C22.9603 4.06715 22.9827 3.94557 23.0273 3.85715ZM17.6371 13.0086L17.2354 13.4065L17.8715 14.0365C18.2063 14.3681 18.4183 14.6057 18.5076 14.7494C18.5969 14.8931 18.6638 15.0644 18.7085 15.2634C18.7531 15.5728 18.6973 15.8657 18.5411 16.142C18.3848 16.4183 18.1616 16.6228 17.8715 16.7554C17.5813 16.8881 17.28 16.9102 16.9675 16.8218C16.8336 16.7997 16.7053 16.7333 16.5825 16.6228C16.4597 16.5123 16.2198 16.2912 15.8627 15.9597L15.2266 15.3628C14.49 16.0923 13.7646 16.8218 13.0504 17.5512L13.6865 18.1812C14.0213 18.5128 14.2334 18.7504 14.3226 18.8941C14.4119 19.0378 14.4789 19.2091 14.5235 19.408C14.5682 19.7175 14.5124 20.0104 14.3561 20.2867C14.1999 20.563 13.9767 20.7675 13.6865 20.9001C13.3964 21.0328 13.0951 21.0549 12.7826 20.9665C12.6487 20.9443 12.5203 20.878 12.3976 20.7675C12.2748 20.657 12.0349 20.4359 11.6778 20.1044L11.0417 19.5075C10.8185 19.7286 10.5953 19.9607 10.3721 20.2038V23.7517H13.9878C16.5323 21.2317 19.0767 18.7007 21.6212 16.1586L18.0389 12.6107L17.6371 13.0086Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="employee_leave_list_common_box">
                        <div class="list_heading">
                            <p>Casual Leaves</p>
                            <h4>02</h4>

                            <div class="remainaing_leave_tag purple">
                                Remaining Leaves : 07
                            </div>
                        </div>

                        <div class="shape">
                            <img src="assets/images/icons/leaveg7.svg" alt="shape">

                            <div class="inner_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="34" viewBox="0 0 33 34" fill="none">
                                    <path d="M14.7636 2.73442C15.2104 2.51336 15.5827 2.36968 15.8805 2.30337C16.0932 2.25916 16.4123 2.23705 16.8378 2.23705C17.5185 2.23705 18.1567 2.39179 18.7524 2.70126C18.9651 2.81178 20.566 3.78993 23.5549 5.6357C26.5438 7.48147 28.0914 8.44857 28.1978 8.53699C29.1551 9.28856 29.7401 10.2391 29.9529 11.3885C29.9741 11.477 29.9848 11.6317 29.9848 11.8527V22.7947L29.9209 23.1263C29.772 23.9442 29.4317 24.6516 28.8998 25.2484C28.602 25.5579 28.1978 25.8894 27.6872 26.2431C21.7945 30.1336 18.7418 32.1231 18.529 32.2115C18.0185 32.4767 17.4175 32.6094 16.7261 32.6094C16.0347 32.6094 15.4231 32.4767 14.8913 32.2115C14.6573 32.101 13.0405 31.062 10.0409 29.0947L5.54162 26.1105C4.47794 25.4694 3.79719 24.4747 3.49937 23.1263L3.43555 22.7947V11.8859C3.43555 11.6427 3.44618 11.477 3.46746 11.3885C3.70146 10.2391 4.29712 9.28856 5.25442 8.53699C5.40334 8.44857 6.99353 7.47595 10.025 5.61912C13.0564 3.7623 14.636 2.80073 14.7636 2.73442ZM17.2845 5.0886C17.0293 5.00018 16.8165 4.96702 16.6463 4.98913C16.5187 4.98913 16.306 5.04439 16.0081 5.15492L7.96678 10.0954C7.32858 10.4712 6.92439 10.7254 6.7542 10.858C6.49892 11.057 6.33937 11.2449 6.27555 11.4217L6.24364 11.488C6.17982 11.5985 6.14791 11.7312 6.14791 11.8859C6.10536 12.107 6.08409 12.6043 6.08409 13.378V21.0705C6.08409 21.8442 6.10536 22.3416 6.14791 22.5626C6.14791 22.7395 6.17982 22.8832 6.24364 22.9937L6.27555 23.06C6.40319 23.3032 6.60529 23.5132 6.88184 23.69C7.90296 24.3752 9.70057 25.5579 12.2747 27.2379C14.7636 28.8515 16.04 29.6805 16.1039 29.7247C16.2953 29.8131 16.5027 29.8573 16.7261 29.8573C16.9495 29.8573 17.1569 29.8131 17.3484 29.7247C17.4122 29.6805 19.2949 28.4536 22.9965 26.0442L26.5704 23.69C26.6768 23.6237 26.7884 23.5187 26.9054 23.375C27.0224 23.2313 27.1022 23.1153 27.1448 23.0268L27.1767 22.9605C27.2405 22.85 27.2724 22.7063 27.2724 22.5295C27.315 22.3084 27.3362 21.8111 27.3362 21.0374V17.2243C27.3362 13.7096 27.3256 11.908 27.3043 11.8196C27.2192 11.3775 26.9639 11.0128 26.5385 10.7254C26.1981 10.4601 24.5707 9.45435 21.6562 7.70805C18.8056 5.98386 17.3484 5.11071 17.2845 5.0886ZM16.0081 10.5928C15.1997 10.7475 14.503 11.1178 13.918 11.7035C13.333 12.2893 12.9554 13.0022 12.7852 13.8422C12.7639 13.9527 12.7533 14.428 12.7533 15.268V19.5785C12.7533 20.4184 12.7639 20.8937 12.7852 21.0042C12.9979 21.9547 13.4234 22.7284 14.0616 23.3253C14.6785 23.8558 15.3912 24.1708 16.1996 24.2702C17.008 24.3697 17.7738 24.2426 18.4971 23.8889C19.263 23.491 19.848 22.8942 20.2522 22.0984C20.4011 21.8332 20.5128 21.5292 20.5872 21.1866C20.6617 20.844 20.6989 20.529 20.6989 20.2416C20.6989 19.8658 20.5819 19.5342 20.3479 19.2469C20.1139 18.9595 19.7948 18.8158 19.3906 18.8158C19.0715 18.8158 18.8056 18.8932 18.5929 19.0479C18.295 19.2911 18.1142 19.6779 18.0504 20.2084C18.0291 20.6284 17.8908 20.9545 17.6356 21.1866C17.3803 21.4187 17.0878 21.5403 16.758 21.5513C16.4283 21.5624 16.1305 21.4574 15.8645 21.2363C15.5986 21.0153 15.4444 20.7169 15.4018 20.3411C15.3806 20.1863 15.3699 19.2137 15.3699 17.4232C15.3699 15.6327 15.3806 14.6601 15.4018 14.5053C15.4444 14.1517 15.5933 13.8643 15.8486 13.6433C16.1039 13.4222 16.3964 13.3062 16.7261 13.2951C17.0559 13.284 17.3484 13.3946 17.6036 13.6267C17.8589 13.8588 18.0078 14.1959 18.0504 14.638C18.0929 14.9917 18.1993 15.2901 18.3695 15.5332C18.6035 15.8648 18.9439 16.0306 19.3906 16.0306C19.7948 16.0306 20.1139 15.8869 20.3479 15.5995C20.5819 15.3122 20.6989 14.9806 20.6989 14.6048C20.6989 13.8533 20.4915 13.1348 20.0767 12.4496C19.6618 11.7643 19.1034 11.2449 18.4014 10.8912C17.6568 10.5375 16.8591 10.438 16.0081 10.5928Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="employee_leave_list_common_box bgGroup2">
                        <div class="list_heading">
                            <p>Other Leaves</p>
                            <h4>08</h4>

                            <div class="remainaing_leave_tag pink">
                                Remaining Leaves : 05
                            </div>
                        </div>

                        <div class="shape">
                            <img src="assets/images/icons/leaveg8.svg" alt="shape">

                            <div class="inner_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none">
                                    <path d="M19.14 19.5C20.91 17.7 22 15.22 22 12.5C22 6.98 17.52 2.5 12 2.5C6.48 2.5 2 6.98 2 12.5C2 15.22 3.08 17.68 4.84 19.49" stroke="#ffffffff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.0001 21.5C13.8668 21.5 15.3801 19.9867 15.3801 18.12C15.3801 16.2533 13.8668 14.74 12.0001 14.74C10.1334 14.74 8.62012 16.2533 8.62012 18.12C8.62012 19.9867 10.1334 21.5 12.0001 21.5Z" stroke="#ffffffff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.25 12H16C16.82 12 17.5 11.33 17.5 10.5C17.5 9.68 16.82 9 16 9C15.18 9 14.5 9.67 14.5 10.5V11.25C14.5 11.66 14.84 12 15.25 12Z" stroke="#ffffffff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- leave table list  -->
            <div class="common_table mt-4">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Leave Type</th>
                                <th scope="col">From</th>
                                <th scope="col">No of Day</th>
                                <th scope="col">To</th>
                                <th scope="col">Approved By</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php foreach ($projectList as $project): ?>
                                <tr>
                                    <td><?= $project['id'] ?></td>
                                    <td>Medical leave</td>
                                    <td><?= $project['date'] ?></td>
                                    <td>1 Days</td>
                                    <td><?= $project['date'] ?></td>
                                    <td>
                                        <div class="table_profile_image">
                                            <img src="assets/images/profileimg.jpg" alt="profile image">
                                            <?= $project['labour_name'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="approved2">
                                            Approved
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_actions">

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

            <div class="mt-3">
                <?php include 'inc/pagination.php' ?>
            </div>
            <!-- leave table list ends -->
        </div>



    </div>
</section>


<!-- Add admin leave  pop up  -->
<div class="AttendancePopup">
    <div class="outer_layout">
        <div class="attendance_popup_content">
            <div class="monthly_heading">
                Leave

                <button type="button" id="CloseAttendancePopup">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.99935 1.66602C5.40768 1.66602 1.66602 5.40768 1.66602 9.99935C1.66602 14.591 5.40768 18.3327 9.99935 18.3327C14.591 18.3327 18.3327 14.591 18.3327 9.99935C18.3327 5.40768 14.591 1.66602 9.99935 1.66602ZM12.7993 11.916C13.041 12.1577 13.041 12.5577 12.7993 12.7993C12.6743 12.9243 12.516 12.9827 12.3577 12.9827C12.1993 12.9827 12.041 12.9243 11.916 12.7993L9.99935 10.8827L8.08268 12.7993C7.95768 12.9243 7.79935 12.9827 7.64102 12.9827C7.48268 12.9827 7.32435 12.9243 7.19935 12.7993C6.95768 12.5577 6.95768 12.1577 7.19935 11.916L9.11602 9.99935L7.19935 8.08268C6.95768 7.84102 6.95768 7.44102 7.19935 7.19935C7.44102 6.95768 7.84102 6.95768 8.08268 7.19935L9.99935 9.11602L11.916 7.19935C12.1577 6.95768 12.5577 6.95768 12.7993 7.19935C13.041 7.44102 13.041 7.84102 12.7993 8.08268L10.8827 9.99935L12.7993 11.916Z" fill="#FF0000" />
                    </svg>
                </button>
            </div>

            <div class="attendance_form mt-4">
                <h4>Add Leave </h4>
                <p>Please kindly complete the form to Add Leave</p>
                <div class="common_form">
                    <form action="">
                        <div class="row g-3 align-items-end">
                            <!-- <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="Employee_name">Employee Name<span>*</span> </label>
                                    <input type="text" id="Employee_name" name="Employee_name" placeholder="Enter a Employee Name" required>
                                </div>
                            </div> -->

                            <div class="col-md-6">
                                <div class="slect-status">
                                    <label for="Leave" class="mb-2">Leave Type <span class="red">*</span></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <select class="form-select" aria-label="select" id="Leave" name="Leave" required>
                                        <option value="" disabled hidden selected>Select</option>
                                        <option value="Medical">Medical leave</option>
                                        <option value="Casual">Casual Leave</option>
                                        <option value="Annual">Annual Leave</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="daysnum">No of Days<span>*</span> </label>
                                    <input type="number" id="daysnum" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2 position-relative">
                                    <label for="start_date ">From <span class="red">*</span></label>
                                    <input type="text" class="date-picker" id="start_date " name="start_date " placeholder="MM/DD/YYYY">
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

                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2 position-relative">
                                    <label for="end_Date ">To <span class="red">*</span></label>
                                    <input type="text" class="date-picker" id="end_Date " name="end_Date " placeholder="MM/DD/YYYY">
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


                            <div class="col-md-6">
                                <div class="form_input d-flex flex-column gap-2">
                                    <label for="Reason">Reason<span>*</span> </label>
                                    <input type="text" id="Reason" placeholder="Enter Reason" required>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end">
                                    <button class="discard" type="button">Back</button>
                                    <button type="submit" class="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add employee pop up ends  -->


<?php include 'inc/footer.php' ?>