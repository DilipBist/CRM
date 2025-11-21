   <?php
       $pageTitle = 'CRM-Deals Add';
       include 'inc/header.php';
   ?>


   <!-- delet popup component  -->
   <?php include 'components/delete-popup.php'?>
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
                   <?php include 'components/profile.php'?>
                   <?php include 'components/notification.php'?>
               </div>
           </div>
           <!-- top profile header  -->


           <div class="pl_pr">
               <div class="deal_details_view_wrapper mt-4 mb-5">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="deal_profile_wrapper">
                               <div class="profile_bg">
                                   <img src="./assets/images/dealbg.svg" alt="gradient bg">
                               </div>
                               <div class="profile_div position-relative">
                                   <div class="profile_img">
                                       <img src="assets/images/profileimg.jpg" alt="profileimg">
                                   </div>
                                   <div>
                                       <h3>
                                           Website Redesign
                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                               <path d="M13.7289 3.51063L15.4889 7.03063C15.7289 7.52063 16.3689 7.99062 16.9089 8.08063L20.0989 8.61062C22.1389 8.95062 22.6189 10.4306 21.1489 11.8906L18.6689 14.3706C18.2489 14.7906 18.0189 15.6006 18.1489 16.1806L18.8589 19.2506C19.4189 21.6806 18.1289 22.6206 15.9789 21.3506L12.9889 19.5806C12.4489 19.2606 11.5589 19.~2606 11.0089 19.5806L8.01893 21.3506C5.87893 22.6206 4.57893 21.6706 5.13893 19.2506L5.84893 16.1806C5.97893 15.6006 5.74893 14.7906 5.32893 14.3706L2.84893 11.8906C1.38893 10.4306 1.85893 8.95062 3.89893 8.61062L7.08893 8.08063C7.61893 7.99062 8.25893 7.52063 8.49893 7.03063L10.2589 3.51063C11.2189 1.60063 12.7789 1.60063 13.7289 3.51063Z" fill="#E2B93B" />
                                           </svg>
                                       </h3>
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
                           </div>
                       </div>
                   </div>
               </div>
           </div>

       </div>
   </section>


   <?php include 'inc/footer.php'?>