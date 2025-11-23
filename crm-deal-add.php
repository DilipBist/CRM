   <?php
    $pageTitle = 'CRM-Deals Add';
    include 'inc/header.php';
    ?>


   <!-- delet popup component  -->
   <?php include 'components/delete-popup.php' ?>
   <!-- delet popup component ends -->

   <section class="admin_container d-flex">

       <?php
        $currentPage = 'crmdeals';
        include 'inc/side-bar.php';
        ?>

       <div class="admin_right_content ms-auto">
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
                       <a href="#">CRM </a>
                       <span>/</span>
                       <p>Deals </p>
                   </div>
               </div>

               <div class="admin_profile_container d-flex align-items-center gap-3">
                   <?php include 'components/profile.php' ?>
                   <?php include 'components/notification.php' ?>
               </div>
           </div>
           <!-- top profile header  -->


           <div class="pl_pr">
               <div class="deal_details_view_wrapper mt-4 mb-5">
                   <div class="row g-3">
                       <div class="col-xl-4">
                           <div class="deal_profile_wrapper">
                               <div class="profile_bg">
                                   <img src="./assets/images/dealbg.svg" alt="gradient bg">
                               </div>
                               <div class="profile_div position-relative">
                                   <div class="profile_img">
                                       <img src="assets/images/profileimg.jpg" alt="profileimg">
                                   </div>
                                   <div class="px-2">
                                       <div class="d-flex align-items-center gap-2 justify-content-center" style="  padding-top: 50px; margin-bottom: 8px;">
                                           <h3>Website Redesign</h3>
                                           <div class="icon">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                   <path d="M13.7289 3.51063L15.4889 7.03063C15.7289 7.52063 16.3689 7.99062 16.9089 8.08063L20.0989 8.61062C22.1389 8.95062 22.6189 10.4306 21.1489 11.8906L18.6689 14.3706C18.2489 14.7906 18.0189 15.6006 18.1489 16.1806L18.8589 19.2506C19.4189 21.6806 18.1289 22.6206 15.9789 21.3506L12.9889 19.5806C12.4489 19.2606 11.5589 19.2606 11.0089 19.5806L8.01893 21.3506C5.87893 22.6206 4.57893 21.6706 5.13893 19.2506L5.84893 16.1806C5.97893 15.6006 5.74893 14.7906 5.32893 14.3706L2.84893 11.8906C1.38893 10.4306 1.85893 8.95062 3.89893 8.61062L7.08893 8.08063C7.61893 7.99062 8.25893 7.52063 8.49893 7.03063L10.2589 3.51063C11.2189 1.60063 12.7789 1.60063 13.7289 3.51063Z" fill="#E2B93B" />
                                               </svg>
                                           </div>
                                       </div>
                                       <div class="location">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                               <path d="M10.0004 11.1922C11.4363 11.1922 12.6004 10.0281 12.6004 8.59219C12.6004 7.15625 11.4363 5.99219 10.0004 5.99219C8.56445 5.99219 7.40039 7.15625 7.40039 8.59219C7.40039 10.0281 8.56445 11.1922 10.0004 11.1922Z" stroke="#5C5C5C" stroke-width="1.5" />
                                               <path d="M3.01675 7.0724C4.65842 -0.144269 15.3501 -0.135935 16.9834 7.08073C17.9417 11.3141 15.3084 14.8974 13.0001 17.1141C11.3251 18.7307 8.67508 18.7307 6.99175 17.1141C4.69175 14.8974 2.05842 11.3057 3.01675 7.0724Z" stroke="#5C5C5C" stroke-width="1.5" />
                                           </svg>
                                           Kathmandu, New Baneshwor
                                       </div>

                                       <div class="tags_wrapper d-flex align-items-center justify-content-center gap-3 mt-3">
                                           <div class="private">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                   <path d="M3.5 5.83073V4.66406C3.5 2.73323 4.08333 1.16406 7 1.16406C9.91667 1.16406 10.5 2.73323 10.5 4.66406V5.83073" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                   <path d="M6.99935 10.7917C7.80476 10.7917 8.45768 10.1387 8.45768 9.33333C8.45768 8.52792 7.80476 7.875 6.99935 7.875C6.19393 7.875 5.54102 8.52792 5.54102 9.33333C5.54102 10.1387 6.19393 10.7917 6.99935 10.7917Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                   <path d="M9.91602 12.8359H4.08268C1.74935 12.8359 1.16602 12.2526 1.16602 9.91927V8.7526C1.16602 6.41927 1.74935 5.83594 4.08268 5.83594H9.91602C12.2493 5.83594 12.8327 6.41927 12.8327 8.7526V9.91927C12.8327 12.2526 12.2493 12.8359 9.91602 12.8359Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                               </svg>
                                               Private
                                           </div>
                                           <div class="like">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                   <path d="M4.36328 10.7064L6.17161 12.1064C6.40495 12.3397 6.92995 12.4564 7.27995 12.4564H9.49662C10.1966 12.4564 10.9549 11.9314 11.1299 11.2314L12.5299 6.97305C12.8216 6.15639 12.2966 5.45639 11.4216 5.45639H9.08828C8.73828 5.45639 8.44661 5.16472 8.50495 4.75639L8.79661 2.88972C8.91328 2.36472 8.56328 1.78139 8.03828 1.60639C7.57161 1.43139 6.98828 1.66472 6.75495 2.01472L4.36328 5.57305" stroke="#F7F7F7" stroke-width="1.5" stroke-miterlimit="10" />
                                                   <path d="M1.38867 10.7078V4.99115C1.38867 4.17448 1.73867 3.88281 2.55534 3.88281H3.13867C3.95534 3.88281 4.30534 4.17448 4.30534 4.99115V10.7078C4.30534 11.5245 3.95534 11.8161 3.13867 11.8161H2.55534C1.73867 11.8161 1.38867 11.5245 1.38867 10.7078Z" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                               </svg>
                                               Won
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- deals information div  -->
                               <div class="deal_info_container">
                                   <h3>Deals Information</h3>
                                   <ul>
                                       <li>
                                           <span>Date Created</span>
                                           <span>10Jan2024, 11:45pm</span>
                                       </li>
                                       <li>
                                           <span>Probability - Win</span>
                                           <span>85%</span>
                                       </li>
                                       <li>
                                           <span>Deal Value</span>
                                           <span>Rs 600,000</span>
                                       </li>
                                       <li>
                                           <span>Deal Date</span>
                                           <span>10 Jan 2024, 11:45 pm</span>
                                       </li>
                                       <li>
                                           <span>Follow Up</span>
                                           <span>25 Jan 2024</span>
                                       </li>
                                       <li>
                                           <span>Source</span>
                                           <span>Google</span>
                                       </li>
                                   </ul>
                               </div>
                               <!-- deals information div  -->

                               <!-- deal owner  -->
                               <div class="deal_owner_Deail_wrapper">
                                   <h3>Deals Owner</h3>

                                   <div class="d-flex flex-column gap-2">
                                       <div class="table_profile_image">
                                           <img src="assets/images/profileimg.jpg" alt="profile image">
                                           <h5>Rohan Dangol</h5>
                                       </div>
                                       <div class="table_profile_image">
                                           <img src="assets/images/profileimg.jpg" alt="profile image">
                                           <h5>Rohan Dangol</h5>
                                       </div>
                                   </div>
                               </div>
                               <!-- deal owner  -->

                               <!-- company details  -->
                               <div class="company_details_wrapper">
                                   <h3>Company</h3>

                                   <div class="d-flex flex-column gap-2">
                                       <div class="company_profile_image">
                                           <img src="assets/images/profileimg.jpg" alt="profile image">
                                           <div class="d-flex flex-column gap-1">
                                               <h5>Rohan Dangol</h5>
                                               <a href="mailto:infocompany@gmail.com">infocompany@gmail.com</a>
                                           </div>
                                       </div>
                                       <div class="company_profile_image">
                                           <img src="assets/images/profileimg.jpg" alt="profile image">
                                           <div class="d-flex flex-column gap-1">
                                               <h5>Rohan Dangol</h5>
                                               <a href="mailto:infocompany@gmail.com">infocompany@gmail.com</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- company details  -->


                               <!-- other more information  -->
                               <div class="other_more_info_container">
                                   <h3>Other Information</h3>

                                   <div class="d-flex flex-column gap-2">
                                       <div class="detail d-flex align-items-center gap-3 justify-content-between">
                                           <div class="d-flex align-items-center gap-2">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                   <path d="M10.0004 11.1922C11.4363 11.1922 12.6004 10.0281 12.6004 8.59219C12.6004 7.15625 11.4363 5.99219 10.0004 5.99219C8.56445 5.99219 7.40039 7.15625 7.40039 8.59219C7.40039 10.0281 8.56445 11.1922 10.0004 11.1922Z" stroke="#5C5C5C" stroke-width="1.5" />
                                                   <path d="M3.01675 7.0724C4.65842 -0.144269 15.3501 -0.135935 16.9834 7.08073C17.9417 11.3141 15.3084 14.8974 13.0001 17.1141C11.3251 18.7307 8.67508 18.7307 6.99175 17.1141C4.69175 14.8974 2.05842 11.3057 3.01675 7.0724Z" stroke="#5C5C5C" stroke-width="1.5" />
                                               </svg>
                                               Last Modified
                                           </div>
                                           <div>
                                               10 Jan 2024, 11:45 pm
                                           </div>
                                       </div>
                                       <div class="detail d-flex align-items-center gap-3 justify-content-between">
                                           <div class="d-flex align-items-center gap-2">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                   <path d="M10.0007 9.9974C12.3018 9.9974 14.1673 8.13192 14.1673 5.83073C14.1673 3.52954 12.3018 1.66406 10.0007 1.66406C7.69946 1.66406 5.83398 3.52954 5.83398 5.83073C5.83398 8.13192 7.69946 9.9974 10.0007 9.9974Z" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                   <path d="M2.8418 18.3333C2.8418 15.1083 6.05013 12.5 10.0001 12.5C10.8001 12.5 11.5751 12.6083 12.3001 12.8083" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                   <path d="M18.3327 14.9974C18.3327 15.6224 18.1577 16.2141 17.8494 16.7141C17.6744 17.0141 17.4494 17.2807 17.191 17.4974C16.6077 18.0224 15.841 18.3307 14.9993 18.3307C13.7827 18.3307 12.7243 17.6807 12.1493 16.7141C11.841 16.2141 11.666 15.6224 11.666 14.9974C11.666 13.9474 12.1493 13.0057 12.916 12.3974C13.491 11.9391 14.216 11.6641 14.9993 11.6641C16.841 11.6641 18.3327 13.1557 18.3327 14.9974Z" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                   <path d="M13.6992 14.9963L14.5242 15.8213L16.2992 14.1797" stroke="#848484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                               </svg>
                                               Modified By
                                           </div>
                                           <div class="d-flex align-items-center gap-2">
                                               <div class="profile_img_smal">
                                                   <img src="assets/images/profileimg.jpg" alt="profile image">
                                               </div>
                                               Rohan Dangol
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- other more information  -->
                           </div>
                       </div>

                       <div class="col-xl-8">
                           <div class="deal_right_view_wrapper">
                               <div class="top_bar_btns_container">
                                   <button class="active" data-filter="activities">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                           <path d="M18.3327 9.9974C18.3327 14.5974 14.5993 18.3307 9.99935 18.3307C5.39935 18.3307 1.66602 14.5974 1.66602 9.9974C1.66602 5.3974 5.39935 1.66406 9.99935 1.66406C14.5993 1.66406 18.3327 5.3974 18.3327 9.9974Z" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                           <path d="M13.0914 12.6495L10.5081 11.1078C10.0581 10.8411 9.69141 10.1995 9.69141 9.67448V6.25781" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                       Activities
                                   </button>

                                   <button data-filter="note">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                           <path d="M16.6673 6.8724V14.9974C16.6673 17.4974 15.1757 18.3307 13.334 18.3307H6.66732C4.82565 18.3307 3.33398 17.4974 3.33398 14.9974V6.8724C3.33398 4.16406 4.82565 3.53906 6.66732 3.53906C6.66732 4.05573 6.87563 4.52239 7.2173 4.86406C7.55896 5.20573 8.02565 5.41406 8.54232 5.41406H11.459C12.4923 5.41406 13.334 4.5724 13.334 3.53906C15.1757 3.53906 16.6673 4.16406 16.6673 6.8724Z" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                           <path d="M13.3327 3.53906C13.3327 4.5724 12.491 5.41406 11.4577 5.41406H8.54102C8.02435 5.41406 7.55766 5.20573 7.21599 4.86406C6.87433 4.52239 6.66602 4.05573 6.66602 3.53906C6.66602 2.50573 7.50768 1.66406 8.54102 1.66406H11.4577C11.9743 1.66406 12.441 1.8724 12.7827 2.21407C13.1244 2.55573 13.3327 3.0224 13.3327 3.53906Z" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                           <path d="M6.66602 10.8359H9.99935" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                           <path d="M6.66602 14.1641H13.3327" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                       Note
                                   </button>

                                   <button data-filter="calls">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                           <path d="M18.3077 15.2724C18.3077 15.5724 18.241 15.8807 18.0993 16.1807C17.9577 16.4807 17.7744 16.7641 17.5327 17.0307C17.1244 17.4807 16.6743 17.8057 16.166 18.0141C15.666 18.2224 15.1244 18.3307 14.541 18.3307C13.691 18.3307 12.7827 18.1307 11.8243 17.7224C10.866 17.3141 9.90768 16.7641 8.95768 16.0724C7.99935 15.3724 7.09102 14.5974 6.22435 13.7391C5.36602 12.8724 4.59102 11.9641 3.89935 11.0141C3.21602 10.0641 2.66602 9.11406 2.26602 8.1724C1.86602 7.2224 1.66602 6.31406 1.66602 5.4474C1.66602 4.88073 1.76602 4.33906 1.96602 3.83906C2.16602 3.33073 2.48268 2.86406 2.92435 2.4474C3.45768 1.9224 4.04102 1.66406 4.65768 1.66406C4.89102 1.66406 5.12435 1.71406 5.33268 1.81406C5.54935 1.91406 5.74102 2.06406 5.89102 2.28073L7.82435 5.00573C7.97435 5.21406 8.08268 5.40573 8.15768 5.58906C8.23268 5.76406 8.27435 5.93906 8.27435 6.0974C8.27435 6.2974 8.21602 6.4974 8.09935 6.68906C7.99102 6.88073 7.83268 7.08073 7.63268 7.28073L6.99935 7.93906C6.90768 8.03073 6.86602 8.13906 6.86602 8.2724C6.86602 8.33906 6.87435 8.3974 6.89102 8.46406C6.91602 8.53073 6.94102 8.58073 6.95768 8.63073C7.10768 8.90573 7.36602 9.26406 7.73268 9.6974C8.10768 10.1307 8.50768 10.5724 8.94102 11.0141C9.39102 11.4557 9.82435 11.8641 10.266 12.2391C10.6993 12.6057 11.0577 12.8557 11.341 13.0057C11.3827 13.0224 11.4327 13.0474 11.491 13.0724C11.5577 13.0974 11.6243 13.1057 11.6993 13.1057C11.841 13.1057 11.9493 13.0557 12.041 12.9641L12.6743 12.3391C12.8827 12.1307 13.0827 11.9724 13.2743 11.8724C13.466 11.7557 13.6577 11.6974 13.866 11.6974C14.0243 11.6974 14.191 11.7307 14.3743 11.8057C14.5577 11.8807 14.7494 11.9891 14.9577 12.1307L17.716 14.0891C17.9327 14.2391 18.0827 14.4141 18.1743 14.6224C18.2577 14.8307 18.3077 15.0391 18.3077 15.2724Z" stroke="#5C5C5C" stroke-width="1.5" stroke-miterlimit="10" />
                                       </svg>
                                       Calls
                                   </button>

                                   <button data-filter="file">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                           <path d="M6.66602 1.66406V4.16406" stroke="#5C5C5C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                           <path d="M13.334 1.66406V4.16406" stroke="#5C5C5C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                           <path d="M5.83398 10.8359H12.5007" stroke="#5C5C5C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                           <path d="M5.83398 14.1641H10.0007" stroke="#5C5C5C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                           <path d="M13.3333 2.91406C16.1083 3.06406 17.5 4.1224 17.5 8.03906V13.1891C17.5 16.6224 16.6667 18.3391 12.5 18.3391H7.5C3.33333 18.3391 2.5 16.6224 2.5 13.1891V8.03906C2.5 4.1224 3.89167 3.0724 6.66667 2.91406H13.3333Z" stroke="#5C5C5C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                       File
                                   </button>

                                   <button data-filter="email">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                           <path fill-rule="evenodd" clip-rule="evenodd" d="M2.19612 2.07258C1.62949 2.59873 1.25 3.45246 1.25 4.79167V10.625C1.25 11.9642 1.62949 12.8179 2.19612 13.3441C2.77113 13.878 3.63748 14.1667 4.79167 14.1667H13.125C14.2792 14.1667 15.1455 13.878 15.7206 13.3441C16.2872 12.8179 16.6667 11.9642 16.6667 10.625V4.79167C16.6667 3.45246 16.2872 2.59873 15.7206 2.07258C15.1455 1.53864 14.2792 1.25 13.125 1.25H4.79167C3.63748 1.25 2.77113 1.53864 2.19612 2.07258ZM1.34555 1.15659C2.22887 0.336362 3.44586 0 4.79167 0H13.125C14.4708 0 15.6878 0.336362 16.5711 1.15659C17.4628 1.9846 17.9167 3.21421 17.9167 4.79167V10.625C17.9167 12.2025 17.4628 13.4321 16.5711 14.2601C15.6878 15.0803 14.4708 15.4167 13.125 15.4167H4.79167C3.44586 15.4167 2.22887 15.0803 1.34555 14.2601C0.453846 13.4321 0 12.2025 0 10.625V4.79167C0 3.21421 0.453846 1.9846 1.34555 1.15659Z" fill="#5C5C5C" />
                                           <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6127 4.82091C13.8281 5.09061 13.7841 5.48389 13.5144 5.69931L10.9053 7.78326C9.81915 8.64797 8.08792 8.64797 7.00176 7.78326L7.00022 7.78203L4.40022 5.6987C4.13085 5.48286 4.08746 5.08951 4.3033 4.82014C4.51914 4.55077 4.91248 4.50738 5.18185 4.72322L7.78103 6.8059C8.41155 7.3072 9.49615 7.30709 10.1265 6.80556L12.7343 4.72261C13.004 4.50719 13.3973 4.5512 13.6127 4.82091Z" fill="#5C5C5C" />
                                       </svg>
                                       Email
                                   </button>
                               </div>

                               <div class="content_div_wrapper mt-4">

                                   <!-- activities  -->
                                   <div class="data " data-category="activities">
                                       <div class="common_wrapper">
                                           <h3>Activities</h3>

                                           <div class="inside_content_container d-flex flex-column gap-4">
                                               <!-- div  -->
                                               <div class="activity_box">
                                                   <div class="date_bx">
                                                       <div class="icon">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                               <path d="M6 1.5V3.75" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M12 1.5V3.75" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M2.625 6.82031H15.375" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M15.75 6.375V12.75C15.75 15 14.625 16.5 12 16.5H6C3.375 16.5 2.25 15 2.25 12.75V6.375C2.25 4.125 3.375 2.625 6 2.625H12C14.625 2.625 15.75 4.125 15.75 6.375Z" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M11.7713 10.2734H11.778" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M11.7713 12.5234H11.778" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M8.99588 10.2734H9.00262" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M8.99588 12.5234H9.00262" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M6.22049 10.2734H6.22723" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M6.22049 12.5234H6.22723" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           </svg>
                                                       </div>
                                                       28 May 2025
                                                   </div>

                                                   <div class="d-flex flex-column gap-4">
                                                       <div class="c_box d-flex align-items-start gap-2">
                                                           <div class="color_box primay_bg">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M2.19612 2.07258C1.62949 2.59873 1.25 3.45246 1.25 4.79167V10.625C1.25 11.9642 1.62949 12.8179 2.19612 13.3441C2.77113 13.878 3.63748 14.1667 4.79167 14.1667H13.125C14.2792 14.1667 15.1455 13.878 15.7206 13.3441C16.2872 12.8179 16.6667 11.9642 16.6667 10.625V4.79167C16.6667 3.45246 16.2872 2.59873 15.7206 2.07258C15.1455 1.53864 14.2792 1.25 13.125 1.25H4.79167C3.63748 1.25 2.77113 1.53864 2.19612 2.07258ZM1.34555 1.15659C2.22887 0.336362 3.44586 0 4.79167 0H13.125C14.4708 0 15.6878 0.336362 16.5711 1.15659C17.4628 1.9846 17.9167 3.21421 17.9167 4.79167V10.625C17.9167 12.2025 17.4628 13.4321 16.5711 14.2601C15.6878 15.0803 14.4708 15.4167 13.125 15.4167H4.79167C3.44586 15.4167 2.22887 15.0803 1.34555 14.2601C0.453846 13.4321 0 12.2025 0 10.625V4.79167C0 3.21421 0.453846 1.9846 1.34555 1.15659Z" fill="#F5F5F5" />
                                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6127 4.82091C13.8281 5.09061 13.7841 5.48389 13.5144 5.69931L10.9053 7.78326C9.81915 8.64797 8.08792 8.64797 7.00176 7.78326L7.00022 7.78203L4.40022 5.6987C4.13085 5.48286 4.08746 5.08951 4.3033 4.82014C4.51914 4.55077 4.91248 4.50738 5.18185 4.72322L7.78103 6.8059C8.41155 7.3072 9.49615 7.30709 10.1265 6.80556L12.7343 4.72261C13.004 4.50719 13.3973 4.5512 13.6127 4.82091Z" fill="#F5F5F5" />
                                                               </svg>
                                                           </div>

                                                           <div class="d-flex flex-column gap-1">
                                                               <h4>You Sent 1 Message to the Contact</h4>
                                                               <p>10: 25 Pm</p>
                                                           </div>
                                                       </div>

                                                       <div class="c_box d-flex align-items-start gap-2">
                                                           <div class="color_box green">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                   <path d="M18.3077 15.2724C18.3077 15.5724 18.241 15.8807 18.0993 16.1807C17.9577 16.4807 17.7744 16.7641 17.5327 17.0307C17.1244 17.4807 16.6743 17.8057 16.166 18.0141C15.666 18.2224 15.1244 18.3307 14.541 18.3307C13.691 18.3307 12.7827 18.1307 11.8243 17.7224C10.866 17.3141 9.90768 16.7641 8.95768 16.0724C7.99935 15.3724 7.09102 14.5974 6.22435 13.7391C5.36602 12.8724 4.59102 11.9641 3.89935 11.0141C3.21602 10.0641 2.66602 9.11406 2.26602 8.1724C1.86602 7.2224 1.66602 6.31406 1.66602 5.4474C1.66602 4.88073 1.76602 4.33906 1.96602 3.83906C2.16602 3.33073 2.48268 2.86406 2.92435 2.4474C3.45768 1.9224 4.04102 1.66406 4.65768 1.66406C4.89102 1.66406 5.12435 1.71406 5.33268 1.81406C5.54935 1.91406 5.74102 2.06406 5.89102 2.28073L7.82435 5.00573C7.97435 5.21406 8.08268 5.40573 8.15768 5.58906C8.23268 5.76406 8.27435 5.93906 8.27435 6.0974C8.27435 6.2974 8.21602 6.4974 8.09935 6.68906C7.99102 6.88073 7.83268 7.08073 7.63268 7.28073L6.99935 7.93906C6.90768 8.03073 6.86602 8.13906 6.86602 8.2724C6.86602 8.33906 6.87435 8.3974 6.89102 8.46406C6.91602 8.53073 6.94102 8.58073 6.95768 8.63073C7.10768 8.90573 7.36602 9.26406 7.73268 9.6974C8.10768 10.1307 8.50768 10.5724 8.94102 11.0141C9.39102 11.4557 9.82435 11.8641 10.266 12.2391C10.6993 12.6057 11.0577 12.8557 11.341 13.0057C11.3827 13.0224 11.4327 13.0474 11.491 13.0724C11.5577 13.0974 11.6243 13.1057 11.6993 13.1057C11.841 13.1057 11.9493 13.0557 12.041 12.9641L12.6743 12.3391C12.8827 12.1307 13.0827 11.9724 13.2743 11.8724C13.466 11.7557 13.6577 11.6974 13.866 11.6974C14.0243 11.6974 14.191 11.7307 14.3743 11.8057C14.5577 11.8807 14.7494 11.9891 14.9577 12.1307L17.716 14.0891C17.9327 14.2391 18.0827 14.4141 18.1743 14.6224C18.2577 14.8307 18.3077 15.0391 18.3077 15.2724Z" stroke="#F5F5F5" stroke-width="1.5" stroke-miterlimit="10" />
                                                               </svg>
                                                           </div>

                                                           <div class="d-flex flex-column gap-1">
                                                               <h4>Denwar responded to your appointment schedule by call at 09:30pm.</h4>
                                                               <p>10: 25 Pm</p>
                                                           </div>
                                                       </div>

                                                       <div class="c_box d-flex align-items-start gap-2">
                                                           <div class="color_box red">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                   <path d="M16.6673 6.8724V14.9974C16.6673 17.4974 15.1757 18.3307 13.334 18.3307H6.66732C4.82565 18.3307 3.33398 17.4974 3.33398 14.9974V6.8724C3.33398 4.16406 4.82565 3.53906 6.66732 3.53906C6.66732 4.05573 6.87563 4.52239 7.2173 4.86406C7.55896 5.20573 8.02565 5.41406 8.54232 5.41406H11.459C12.4923 5.41406 13.334 4.5724 13.334 3.53906C15.1757 3.53906 16.6673 4.16406 16.6673 6.8724Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M13.3327 3.53906C13.3327 4.5724 12.491 5.41406 11.4577 5.41406H8.54102C8.02435 5.41406 7.55766 5.20573 7.21599 4.86406C6.87433 4.52239 6.66602 4.05573 6.66602 3.53906C6.66602 2.50573 7.50768 1.66406 8.54102 1.66406H11.4577C11.9743 1.66406 12.441 1.8724 12.7827 2.21407C13.1244 2.55573 13.3327 3.0224 13.3327 3.53906Z" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M6.66602 10.8359H9.99935" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M6.66602 14.1641H13.3327" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                           </div>

                                                           <div class="d-flex flex-column gap-1">
                                                               <h4>Notes added by Antony</h4>
                                                               <p>Please accept my apologies for the inconvenience caused. It would be much appreciated if it's possible to reschedule to 6:00 PM, or any other day that week.</p>
                                                           </div>
                                                       </div>

                                                   </div>
                                               </div>
                                               <!-- div  -->

                                               <!-- div  -->
                                               <div class="activity_box">
                                                   <div class="date_bx">
                                                       <div class="icon">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                               <path d="M6 1.5V3.75" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M12 1.5V3.75" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M2.625 6.82031H15.375" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M15.75 6.375V12.75C15.75 15 14.625 16.5 12 16.5H6C3.375 16.5 2.25 15 2.25 12.75V6.375C2.25 4.125 3.375 2.625 6 2.625H12C14.625 2.625 15.75 4.125 15.75 6.375Z" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M11.7713 10.2734H11.778" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M11.7713 12.5234H11.778" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M8.99588 10.2734H9.00262" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M8.99588 12.5234H9.00262" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M6.22049 10.2734H6.22723" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M6.22049 12.5234H6.22723" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           </svg>
                                                       </div>
                                                       28 May 2025
                                                   </div>

                                                   <div class="d-flex flex-column gap-4">
                                                       <div class="c_box d-flex align-items-start gap-2">
                                                           <div class="color_box yellow">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                   <path d="M10.0007 9.9974C12.3018 9.9974 14.1673 8.13192 14.1673 5.83073C14.1673 3.52954 12.3018 1.66406 10.0007 1.66406C7.69946 1.66406 5.83398 3.52954 5.83398 5.83073C5.83398 8.13192 7.69946 9.9974 10.0007 9.9974Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M17.1585 18.3333C17.1585 15.1083 13.9501 12.5 10.0001 12.5C6.05013 12.5 2.8418 15.1083 2.8418 18.3333" stroke="#EBEBEB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                           </div>

                                                           <div class="d-flex flex-column gap-1">
                                                               <h4>You Sent 1 Message to the Contact</h4>
                                                               <p>10: 25 Pm</p>
                                                           </div>
                                                       </div>

                                                       <div class="c_box d-flex align-items-start gap-2">
                                                           <div class="color_box green">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                   <path d="M16.6673 6.8724V14.9974C16.6673 17.4974 15.1757 18.3307 13.334 18.3307H6.66732C4.82565 18.3307 3.33398 17.4974 3.33398 14.9974V6.8724C3.33398 4.16406 4.82565 3.53906 6.66732 3.53906C6.66732 4.05573 6.87563 4.52239 7.2173 4.86406C7.55896 5.20573 8.02565 5.41406 8.54232 5.41406H11.459C12.4923 5.41406 13.334 4.5724 13.334 3.53906C15.1757 3.53906 16.6673 4.16406 16.6673 6.8724Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M13.3327 3.53906C13.3327 4.5724 12.491 5.41406 11.4577 5.41406H8.54102C8.02435 5.41406 7.55766 5.20573 7.21599 4.86406C6.87433 4.52239 6.66602 4.05573 6.66602 3.53906C6.66602 2.50573 7.50768 1.66406 8.54102 1.66406H11.4577C11.9743 1.66406 12.441 1.8724 12.7827 2.21407C13.1244 2.55573 13.3327 3.0224 13.3327 3.53906Z" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M6.66602 10.8359H9.99935" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M6.66602 14.1641H13.3327" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                           </div>

                                                           <div class="d-flex flex-column gap-1">
                                                               <h4>Denwar responded to your appointment schedule by call at 09:30pm.</h4>
                                                               <p>10: 25 Pm</p>
                                                           </div>
                                                       </div>



                                                   </div>
                                               </div>
                                               <!-- div  -->

                                           </div>
                                       </div>
                                   </div>
                                   <!-- activities  -->

                                   <!-- notes  -->
                                   <div class="data active" data-category="note">
                                       <div class="common_wrapper">
                                           <h3>Note </h3>

                                           <div class="inside_content_container">
                                               <div class="date_bx">
                                                   <div class="icon">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                           <path d="M6 1.5V3.75" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M12 1.5V3.75" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M2.625 6.82031H15.375" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M15.75 6.375V12.75C15.75 15 14.625 16.5 12 16.5H6C3.375 16.5 2.25 15 2.25 12.75V6.375C2.25 4.125 3.375 2.625 6 2.625H12C14.625 2.625 15.75 4.125 15.75 6.375Z" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M11.7713 10.2734H11.778" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M11.7713 12.5234H11.778" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M8.99588 10.2734H9.00262" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M8.99588 12.5234H9.00262" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M6.22049 10.2734H6.22723" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M6.22049 12.5234H6.22723" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                       </svg>
                                                   </div>
                                                   28 May 2025
                                               </div>

                                               <div class="d-flex flex-column gap-4">
                                                   <div class="comment_box_wrapper">
                                                       <div class="left_div d-flex align-items-start gap-3 justify-content-between">
                                                           <div class="profile_wrapper d-flex align-items-start gap-2">
                                                               <div class="img">
                                                                   <img src="assets/images/profileimg.jpg" alt="profile image">
                                                               </div>
                                                               <div class="d-flex flex-column gap-1">
                                                                   <h4>Darlee Robertson</h4>
                                                                   <p>15 Sep 2023, 12:10 pm</p>
                                                               </div>
                                                           </div>

                                                           <button class="three_dot">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                                   <path d="M7.875 4.21875C7.875 3.99625 7.94098 3.77874 8.0646 3.59373C8.18821 3.40873 8.36392 3.26453 8.56948 3.17939C8.77505 3.09424 9.00125 3.07196 9.21948 3.11537C9.43771 3.15878 9.63816 3.26592 9.7955 3.42326C9.95283 3.58059 10.06 3.78105 10.1034 3.99927C10.1468 4.2175 10.1245 4.4437 10.0394 4.64927C9.95422 4.85484 9.81002 5.03054 9.62502 5.15415C9.44001 5.27777 9.2225 5.34375 9 5.34375C8.70163 5.34375 8.41548 5.22522 8.20451 5.01425C7.99353 4.80327 7.875 4.51712 7.875 4.21875ZM9 7.875C8.7775 7.875 8.55999 7.94098 8.37498 8.0646C8.18998 8.18821 8.04578 8.36391 7.96064 8.56948C7.87549 8.77505 7.85321 9.00125 7.89662 9.21948C7.94003 9.43771 8.04717 9.63816 8.20451 9.7955C8.36184 9.95283 8.5623 10.06 8.78052 10.1034C8.99875 10.1468 9.22495 10.1245 9.43052 10.0394C9.63609 9.95422 9.81179 9.81002 9.9354 9.62502C10.059 9.44001 10.125 9.2225 10.125 9C10.125 8.70163 10.0065 8.41548 9.7955 8.20451C9.58452 7.99353 9.29837 7.875 9 7.875ZM9 12.6563C8.7775 12.6563 8.55999 12.7222 8.37498 12.8458C8.18998 12.9695 8.04578 13.1452 7.96064 13.3507C7.87549 13.5563 7.85321 13.7825 7.89662 14.0007C7.94003 14.219 8.04717 14.4194 8.20451 14.5767C8.36184 14.7341 8.5623 14.8412 8.78052 14.8846C8.99875 14.928 9.22495 14.9058 9.43052 14.8206C9.63609 14.7355 9.81179 14.5913 9.9354 14.4063C10.059 14.2213 10.125 14.0038 10.125 13.7813C10.125 13.4829 10.0065 13.1967 9.7955 12.9858C9.58452 12.7748 9.29837 12.6563 9 12.6563Z" fill="#848484" />
                                                               </svg>

                                                               <div class="dropdown">
                                                                   <div>Edit</div>
                                                                   <div>Delete</div>
                                                               </div>
                                                           </button>
                                                       </div>

                                                       <div class="tag">Notes added by Antony</div>

                                                       <p>A project review evaluates the success of an initiative and identifies areas for improvement. It can also evaluate a current project to determine whether it's on the right track. Or, it can determine the success of a completed project.</p>

                                                       <div class="comment_add_container d-flex flex-wrap gap-2 justify-content-between align-items-end mb-3 mb-lg-4">
                                                           <div class="download_box d-flex align-items-center gap-3 justify-content-between">
                                                               <div class="d-flex gap-2">
                                                                   <div class="icon_box">
                                                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                           <path d="M16.6673 6.8724V14.9974C16.6673 17.4974 15.1757 18.3307 13.334 18.3307H6.66732C4.82565 18.3307 3.33398 17.4974 3.33398 14.9974V6.8724C3.33398 4.16406 4.82565 3.53906 6.66732 3.53906C6.66732 4.05573 6.87563 4.52239 7.2173 4.86406C7.55896 5.20573 8.02565 5.41406 8.54232 5.41406H11.459C12.4923 5.41406 13.334 4.5724 13.334 3.53906C15.1757 3.53906 16.6673 4.16406 16.6673 6.8724Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                           <path d="M13.3327 3.53906C13.3327 4.5724 12.491 5.41406 11.4577 5.41406H8.54102C8.02435 5.41406 7.55766 5.20573 7.21599 4.86406C6.87433 4.52239 6.66602 4.05573 6.66602 3.53906C6.66602 2.50573 7.50768 1.66406 8.54102 1.66406H11.4577C11.9743 1.66406 12.441 1.8724 12.7827 2.21407C13.1244 2.55573 13.3327 3.0224 13.3327 3.53906Z" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                           <path d="M6.66602 10.8359H9.99935" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                           <path d="M6.66602 14.1641H13.3327" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                       </svg>
                                                                   </div>
                                                                   <div>
                                                                       <h4>Project Specs.xls</h4>
                                                                       <p>10: 25 Pm</p>
                                                                   </div>
                                                               </div>
                                                               <div class="download_icon">
                                                                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                       <path d="M15.0581 12.0234L9.99974 17.0818L4.94141 12.0234" stroke="#858585" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                       <path d="M10 2.91406V16.9391" stroke="#858585" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                   </svg>
                                                               </div>
                                                           </div>

                                                           <div class="add_comment_button">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                   <path d="M10.0013 18.3307C14.5846 18.3307 18.3346 14.5807 18.3346 9.9974C18.3346 5.41406 14.5846 1.66406 10.0013 1.66406C5.41797 1.66406 1.66797 5.41406 1.66797 9.9974C1.66797 14.5807 5.41797 18.3307 10.0013 18.3307Z" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M6.66797 10H13.3346" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M10 13.3307V6.66406" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                               Add Comment
                                                           </div>
                                                       </div>

                                                       <div class="comment_box">
                                                           <div class="form_input d-flex flex-column gap-2">
                                                               <label for="des">Description <span>*</span></label>
                                                               <div class="position-relative editor-wrapper">
                                                                   <textarea name="content" class="editor" placeholder="Write something awesome..."></textarea>
                                                                   <button id="toggleToolbar" type="button">
                                                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                                           <path fill-rule="evenodd" clip-rule="evenodd" d="M0.777778 1.55556C0.35 1.55556 0 1.20556 0 0.777778C0 0.35 0.35 0 0.777778 0H13.2222C13.65 0 14 0.35 14 0.777778C14 1.20556 13.65 1.55556 13.2222 1.55556H0.777778ZM8.55556 3.11111H0.777778C0.35 3.11111 0 3.46111 0 3.88889C0 4.31667 0.35 4.66667 0.777778 4.66667H8.55556C8.98333 4.66667 9.33333 4.31667 9.33333 3.88889C9.33333 3.46111 8.98333 3.11111 8.55556 3.11111ZM8.55556 9.33333H0.777778C0.35 9.33333 0 9.68333 0 10.1111C0 10.5389 0.35 10.8889 0.777778 10.8889H8.55556C8.98333 10.8889 9.33333 10.5389 9.33333 10.1111C9.33333 9.68333 8.98333 9.33333 8.55556 9.33333ZM13.2222 7.77778H0.777778C0.35 7.77778 0 7.42778 0 7C0 6.57222 0.35 6.22222 0.777778 6.22222H13.2222C13.65 6.22222 14 6.57222 14 7C14 7.42778 13.65 7.77778 13.2222 7.77778ZM0.777778 14H13.2222C13.65 14 14 13.65 14 13.2222C14 12.7944 13.65 12.4444 13.2222 12.4444H0.777778C0.35 12.4444 0 12.7944 0 13.2222C0 13.65 0.35 14 0.777778 14Z" fill="#141414" />
                                                                       </svg>
                                                                   </button>
                                                               </div>
                                                           </div>

                                                           <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-4">
                                                               <button class="discard" type="button">Cancel</button>
                                                               <button type="submit" class="submit">Save</button>
                                                           </div>
                                                       </div>
                                                   </div>

                                                   <div class="comment_box_wrapper">
                                                       <div class="left_div d-flex align-items-start gap-3 justify-content-between">
                                                           <div class="profile_wrapper d-flex align-items-start gap-2">
                                                               <div class="img">
                                                                   <img src="assets/images/profileimg.jpg" alt="profile image">
                                                               </div>
                                                               <div class="d-flex flex-column gap-1">
                                                                   <h4>Darlee Robertson</h4>
                                                                   <p>15 Sep 2023, 12:10 pm</p>
                                                               </div>
                                                           </div>

                                                           <button class="three_dot">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                                   <path d="M7.875 4.21875C7.875 3.99625 7.94098 3.77874 8.0646 3.59373C8.18821 3.40873 8.36392 3.26453 8.56948 3.17939C8.77505 3.09424 9.00125 3.07196 9.21948 3.11537C9.43771 3.15878 9.63816 3.26592 9.7955 3.42326C9.95283 3.58059 10.06 3.78105 10.1034 3.99927C10.1468 4.2175 10.1245 4.4437 10.0394 4.64927C9.95422 4.85484 9.81002 5.03054 9.62502 5.15415C9.44001 5.27777 9.2225 5.34375 9 5.34375C8.70163 5.34375 8.41548 5.22522 8.20451 5.01425C7.99353 4.80327 7.875 4.51712 7.875 4.21875ZM9 7.875C8.7775 7.875 8.55999 7.94098 8.37498 8.0646C8.18998 8.18821 8.04578 8.36391 7.96064 8.56948C7.87549 8.77505 7.85321 9.00125 7.89662 9.21948C7.94003 9.43771 8.04717 9.63816 8.20451 9.7955C8.36184 9.95283 8.5623 10.06 8.78052 10.1034C8.99875 10.1468 9.22495 10.1245 9.43052 10.0394C9.63609 9.95422 9.81179 9.81002 9.9354 9.62502C10.059 9.44001 10.125 9.2225 10.125 9C10.125 8.70163 10.0065 8.41548 9.7955 8.20451C9.58452 7.99353 9.29837 7.875 9 7.875ZM9 12.6563C8.7775 12.6563 8.55999 12.7222 8.37498 12.8458C8.18998 12.9695 8.04578 13.1452 7.96064 13.3507C7.87549 13.5563 7.85321 13.7825 7.89662 14.0007C7.94003 14.219 8.04717 14.4194 8.20451 14.5767C8.36184 14.7341 8.5623 14.8412 8.78052 14.8846C8.99875 14.928 9.22495 14.9058 9.43052 14.8206C9.63609 14.7355 9.81179 14.5913 9.9354 14.4063C10.059 14.2213 10.125 14.0038 10.125 13.7813C10.125 13.4829 10.0065 13.1967 9.7955 12.9858C9.58452 12.7748 9.29837 12.6563 9 12.6563Z" fill="#848484" />
                                                               </svg>

                                                               <div class="dropdown">
                                                                   <div>Edit</div>
                                                                   <div>Delete</div>
                                                               </div>
                                                           </button>
                                                       </div>

                                                       <div class="tag">Notes added by Antony</div>

                                                       <p>A project review evaluates the success of an initiative and identifies areas for improvement. It can also evaluate a current project to determine whether it's on the right track. Or, it can determine the success of a completed project.</p>

                                                       <div class="comment_add_container d-flex flex-wrap gap-2 justify-content-between align-items-end mb-3 mb-lg-4">
                                                           <div class="download_box d-flex align-items-center gap-3 justify-content-between">
                                                               <div class="d-flex gap-2">
                                                                   <div class="icon_box">
                                                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                           <path d="M16.6673 6.8724V14.9974C16.6673 17.4974 15.1757 18.3307 13.334 18.3307H6.66732C4.82565 18.3307 3.33398 17.4974 3.33398 14.9974V6.8724C3.33398 4.16406 4.82565 3.53906 6.66732 3.53906C6.66732 4.05573 6.87563 4.52239 7.2173 4.86406C7.55896 5.20573 8.02565 5.41406 8.54232 5.41406H11.459C12.4923 5.41406 13.334 4.5724 13.334 3.53906C15.1757 3.53906 16.6673 4.16406 16.6673 6.8724Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                           <path d="M13.3327 3.53906C13.3327 4.5724 12.491 5.41406 11.4577 5.41406H8.54102C8.02435 5.41406 7.55766 5.20573 7.21599 4.86406C6.87433 4.52239 6.66602 4.05573 6.66602 3.53906C6.66602 2.50573 7.50768 1.66406 8.54102 1.66406H11.4577C11.9743 1.66406 12.441 1.8724 12.7827 2.21407C13.1244 2.55573 13.3327 3.0224 13.3327 3.53906Z" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                           <path d="M6.66602 10.8359H9.99935" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                           <path d="M6.66602 14.1641H13.3327" stroke="#F2F6FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                       </svg>
                                                                   </div>
                                                                   <div>
                                                                       <h4>Project Specs.xls</h4>
                                                                       <p>10: 25 Pm</p>
                                                                   </div>
                                                               </div>
                                                               <div class="download_icon">
                                                                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                       <path d="M15.0581 12.0234L9.99974 17.0818L4.94141 12.0234" stroke="#858585" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                       <path d="M10 2.91406V16.9391" stroke="#858585" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                   </svg>
                                                               </div>
                                                           </div>

                                                           <div class="add_comment_button">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                   <path d="M10.0013 18.3307C14.5846 18.3307 18.3346 14.5807 18.3346 9.9974C18.3346 5.41406 14.5846 1.66406 10.0013 1.66406C5.41797 1.66406 1.66797 5.41406 1.66797 9.9974C1.66797 14.5807 5.41797 18.3307 10.0013 18.3307Z" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M6.66797 10H13.3346" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                   <path d="M10 13.3307V6.66406" stroke="#00427A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                               Add Comment
                                                           </div>
                                                       </div>

                                                       <div class="comment_box">
                                                           <div class="form_input d-flex flex-column gap-2">
                                                               <label for="des">Description <span>*</span></label>
                                                               <div class="position-relative editor-wrapper">
                                                                   <textarea name="content" class="editor" placeholder="Write something awesome..."></textarea>
                                                                   <button id="toggleToolbar" type="button">
                                                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                                           <path fill-rule="evenodd" clip-rule="evenodd" d="M0.777778 1.55556C0.35 1.55556 0 1.20556 0 0.777778C0 0.35 0.35 0 0.777778 0H13.2222C13.65 0 14 0.35 14 0.777778C14 1.20556 13.65 1.55556 13.2222 1.55556H0.777778ZM8.55556 3.11111H0.777778C0.35 3.11111 0 3.46111 0 3.88889C0 4.31667 0.35 4.66667 0.777778 4.66667H8.55556C8.98333 4.66667 9.33333 4.31667 9.33333 3.88889C9.33333 3.46111 8.98333 3.11111 8.55556 3.11111ZM8.55556 9.33333H0.777778C0.35 9.33333 0 9.68333 0 10.1111C0 10.5389 0.35 10.8889 0.777778 10.8889H8.55556C8.98333 10.8889 9.33333 10.5389 9.33333 10.1111C9.33333 9.68333 8.98333 9.33333 8.55556 9.33333ZM13.2222 7.77778H0.777778C0.35 7.77778 0 7.42778 0 7C0 6.57222 0.35 6.22222 0.777778 6.22222H13.2222C13.65 6.22222 14 6.57222 14 7C14 7.42778 13.65 7.77778 13.2222 7.77778ZM0.777778 14H13.2222C13.65 14 14 13.65 14 13.2222C14 12.7944 13.65 12.4444 13.2222 12.4444H0.777778C0.35 12.4444 0 12.7944 0 13.2222C0 13.65 0.35 14 0.777778 14Z" fill="#141414" />
                                                                       </svg>
                                                                   </button>
                                                               </div>
                                                           </div>


                                                           <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end mt-4">
                                                               <button class="discard" type="button">Cancel</button>
                                                               <button type="submit" class="submit">Save</button>
                                                           </div>
                                                       </div>
                                                   </div>

                                                  
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- notes  -->

                                   <!-- calls  -->
                                   <div class="data" data-category="calls">
                                       <div class="common_wrapper">
                                           <h3>Calls </h3>

                                           <div class="inside_content_container">
                                               <div class="date_bx">
                                                   <div class="icon">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                           <path d="M6 1.5V3.75" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M12 1.5V3.75" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M2.625 6.82031H15.375" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M15.75 6.375V12.75C15.75 15 14.625 16.5 12 16.5H6C3.375 16.5 2.25 15 2.25 12.75V6.375C2.25 4.125 3.375 2.625 6 2.625H12C14.625 2.625 15.75 4.125 15.75 6.375Z" stroke="#0074D7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M11.7713 10.2734H11.778" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M11.7713 12.5234H11.778" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M8.99588 10.2734H9.00262" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M8.99588 12.5234H9.00262" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M6.22049 10.2734H6.22723" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                           <path d="M6.22049 12.5234H6.22723" stroke="#0074D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                       </svg>
                                                   </div>
                                                   28 May 2025
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- calls  -->

                                   <!-- files  -->
                                   <div class="data" data-category="file">
                                       <div class="common_wrapper">
                                           <h3>Files</h3>

                                       </div>
                                   </div>
                                   <div class="data" data-category="email">
                                       <div class="common_wrapper">
                                           <h3>email</h3>
                                       </div>
                                   </div>
                                   <!-- files  -->


                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

       </div>
   </section>


   <?php include 'inc/footer.php' ?>