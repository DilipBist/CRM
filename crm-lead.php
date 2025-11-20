 <?php
    $pageTitle = 'CRM-lead';
    include 'inc/header.php'
    ?>

 <!-- delet popup component  -->
 <?php include 'components/delete-popup.php' ?>
 <!-- delet popup component ends -->

 <section class="admin_container d-flex">


     <?php
        $currentPage = 'crmlead';
        include 'inc/side-bar.php';
        ?>

     <div class="admin_right_content ms-auto">
         <!-- top profile header  -->

         <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
             <div class="chart_bread_crump d-flex align-items-center gap-3">
                 <div class="icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                         <path d="M16.5 16.5H1.5C1.1925 16.5 0.9375 16.245 0.9375 15.9375C0.9375 15.63 1.1925 15.375 1.5 15.375H16.5C16.8075 15.375 17.0625 15.63 17.0625 15.9375C17.0625 16.245 16.8075 16.5 16.5 16.5Z" fill="#141414" />
                         <path d="M7.3125 3V16.5H10.6875V3C10.6875 2.175 10.35 1.5 9.3375 1.5H8.6625C7.65 1.5 7.3125 2.175 7.3125 3Z" fill="#141414" />
                         <path d="M2.25 7.5V16.5H5.25V7.5C5.25 6.675 4.95 6 4.05 6H3.45C2.55 6 2.25 6.675 2.25 7.5Z" fill="#141414" />
                         <path d="M12.75 11.25V16.5H15.75V11.25C15.75 10.425 15.45 9.75 14.55 9.75H13.95C13.05 9.75 12.75 10.425 12.75 11.25Z" fill="#141414" />
                     </svg>
                 </div>

                 <div class="bread_crump_content d-flex align-items-center gap-2">
                     <a href="#">CRM</a>
                     <span>/</span>
                     <p>Lead List</p>
                 </div>
             </div>

             <div class="admin_profile_container d-flex align-items-center gap-3">
                 <?php include 'components/profile.php' ?>


                 <?php include 'components/notification.php' ?>
             </div>
         </div>
         <!-- top profile header  -->


         <div class="admin_list_heading d-flex align-items-center flex-wrap gap-1 gap-sm-3 justify-content-between pt-3 pb-4 pl_pr">
             <div class="left_heading">
                 <h3>Lead List</h3>
                 <p>You can view the Lead list accordingly.</p>
             </div>



             <div class="right_fil_div d-flex align-items-center gap-2 flex-wrap justify-content-md-end">
                 <div class="search">
                     <input type="text" placeholder="Search" name="search">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                         <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M14.6663 14.6673L13.333 13.334" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>

                 </div>

                 <button
                     class="add_acc_group add_acc_groupBtn"
                     data-heading="Add lead  ">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                         <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M6.66602 10H13.3327" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M10 13.3346V6.66797" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                     Add lead
                 </button>
             </div>
         </div>

         <!-- top  chart list  -->
         <div class="mb-4 pl_pr">
             <?php
                $chartData = [
                    'cashTitle'       => 'Total Lead ',
                    'cashsubTitle'    => 'Your Total Project is',
                    'cashValue'       => 1000,
                    'bankTitle'       => 'Total Company',
                    'bankValue'       => '3,56,792.230',
                    'paymentTitle'    => 'Approved',
                    'paymentValue'    => '20,000',
                    'paymentsubTitle' => 'Approved lead',
                    'projectTitle' => 'All Projects',
                    'legend' => [
                        'complete' => 'income',
                        'pending'  => 'Expenses',
                        'notstart' => 'Prepaid/outstanding'
                    ]
                ];
                ?>
             <?php include 'inc/dasbord/chart-list.php' ?>
         </div>
         <!-- top chart list ends  -->

         <!-- project list table  -->
         <div class="project_list_table pl_pr">
             <div class="common_table">
                 <div class="table-responsive">
                     <table class="table table-hover">
                         <thead>
                             <tr>
                                 <th scope="col">SN</th>
                                 <th scope="col">Lead Name</th>
                                 <th scope="col">Company</th>
                                 <th scope="col">Email </th>
                                 <th scope="col">Phone</th>
                                 <th scope="col">Lead Source</th>
                                 <th scope="col">Lead Owner </th>
                                 <th scope="col">Status</th>
                                 <th scope="col">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                         <tbody>
                             <?php foreach ($projectList as $project): ?>
                                 <tr>
                                     <th scope="row"><?= $project['id'] ?></th>
                                     <td>Christopher Maclead (Sample)</td>
                                     <td>Rangoni Of Florence</td>
                                     <td>rohanshrestha020@gmail.com</td>
                                     <td>9827339100</td>
                                     <td>Cold Call </td>
                                     <td>Rohan Shrestha</td>
                                     <td>
                                         <!-- use the below classes according the status for desing  -->
                                         <div class="approved_green">
                                             Approved
                                         </div>
                                         <!-- <div class="pending_orange">
                                             Pending
                                         </div>
                                         <div class="hold_grey">
                                             Hold
                                         </div>
                                         <div class="rejected_red">
                                             Rejected
                                         </div> -->
                                     </td>
                                     <td>
                                         <div class="table_actions">
                                             <a href="#" title="View Details" class="add_acc_groupBtn" data-heading="View Task">
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                     <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                     <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                 </svg>
                                             </a>
                                             <a
                                                 href="#" aria-label="Edit user List"
                                                 class="add_acc_groupBtn"
                                                 data-heading="Edit Task">
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
         <!-- project list table ends  -->
     </div>
 </section>


 <!-- Add lead  pop up  -->
 <div class="AttendancePopup">
     <div class="outer_layout">
         <div class="attendance_popup_content">
             <div class="monthly_heading">
                 <span>Add Lead</span>

                 <button type="button" id="CloseAttendancePopup">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                         <path d="M9.99935 1.66602C5.40768 1.66602 1.66602 5.40768 1.66602 9.99935C1.66602 14.591 5.40768 18.3327 9.99935 18.3327C14.591 18.3327 18.3327 14.591 18.3327 9.99935C18.3327 5.40768 14.591 1.66602 9.99935 1.66602ZM12.7993 11.916C13.041 12.1577 13.041 12.5577 12.7993 12.7993C12.6743 12.9243 12.516 12.9827 12.3577 12.9827C12.1993 12.9827 12.041 12.9243 11.916 12.7993L9.99935 10.8827L8.08268 12.7993C7.95768 12.9243 7.79935 12.9827 7.64102 12.9827C7.48268 12.9827 7.32435 12.9243 7.19935 12.7993C6.95768 12.5577 6.95768 12.1577 7.19935 11.916L9.11602 9.99935L7.19935 8.08268C6.95768 7.84102 6.95768 7.44102 7.19935 7.19935C7.44102 6.95768 7.84102 6.95768 8.08268 7.19935L9.99935 9.11602L11.916 7.19935C12.1577 6.95768 12.5577 6.95768 12.7993 7.19935C13.041 7.44102 13.041 7.84102 12.7993 8.08268L10.8827 9.99935L12.7993 11.916Z" fill="#FF0000" />
                     </svg>
                 </button>
             </div>

             <div class="attendance_form mt-4">
                 <h4>Add Lead</h4>
                 <p>Please kindly complete the form to add Lead registration. </p>
                 <div class="common_form">
                     <form action="">
                         <div class="row g-3 align-items-end">

                             <div class="col-md-6 col-lg-4">
                                 <div class="form_input d-flex flex-column gap-2">
                                     <label for="lead_name">Lead Name <span>*</span> </label>
                                     <input type="text" id="lead_name" name="lead_name" placeholder="Enter Lead Name" required>
                                 </div>
                             </div>

                             <div class="col-md-6 col-lg-4">
                                 <div class="slect-status">
                                     <label for="lead_type" class="mb-2">Lead Type <span class="red">*</span></label>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                         <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                     <select class="form-select" aria-label="select" id="lead_type" name="lead_type " required>
                                         <option value="" disabled hidden selected>Select Type</option>
                                         <option value="normal">Normal</option>
                                         <option value="high">High</option>
                                         <option value="low">Low</option>
                                     </select>
                                 </div>
                             </div>

                             <div class="col-md-6 col-lg-4">
                                 <div class="slect-status">
                                     <label for="company_name" class="mb-2">Company Name <span class="red">*</span></label>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                         <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                     <select class="form-select" aria-label="select" id="company_name" name="company_name" required>
                                         <option value="" disabled hidden selected>Select Type</option>
                                         <option value="normal">Normal</option>
                                         <option value="high">High</option>
                                         <option value="low">Low</option>
                                     </select>
                                 </div>
                             </div>


                             <div class="col-md-6 col-lg-4">
                                 <div class="form_input d-flex flex-column gap-2">
                                     <label for="Email">Email <span>*</span> </label>
                                     <input type="email " id="Email" name="Email" placeholder="Enter a Email Address" required>
                                 </div>
                             </div>


                             <div class="col-md-6 col-lg-4">
                                 <div class="form_input d-flex flex-column gap-2">
                                     <label for="Phone">Phone <span>*</span> </label>
                                     <input type="tel" id="Phone" name="Phone" placeholder="Enter Number" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                 </div>
                             </div>


                             <div class="col-md-6 col-lg-4">
                                 <div class="slect-status">
                                     <label for="lead_source" class="mb-2">Lead Source <span class="red">*</span></label>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                         <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                     <select class="form-select" aria-label="select" id="lead_source" name="lead_source" required>
                                         <option value="" disabled hidden selected>Select</option>
                                         <option value="normal">Normal</option>
                                         <option value="high">High</option>
                                         <option value="low">Low</option>
                                     </select>
                                 </div>
                             </div>

                             <div class="col-md-6 col-lg-4">
                                 <div class="slect-status">
                                     <label for="lead_status" class="mb-2">Lead Status <span class="red">*</span></label>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                         <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                     <select class="form-select" aria-label="select" id="lead_status" name="lead_status" required>
                                         <option value="" disabled hidden selected>Select Status</option>
                                         <option value="normal">Normal</option>
                                         <option value="high">High</option>
                                         <option value="low">Low</option>
                                     </select>
                                 </div>
                             </div>

                             <div class="col-md-6 col-lg-4">
                                 <div class="slect-status">
                                     <label for="lead_owner" class="mb-2">Lead Owner <span class="red">*</span></label>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                         <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                     <select class="form-select" aria-label="select" id="lead_owner" name="lead_owner" required>
                                         <option value="" disabled hidden selected>Enter a Lead Owner</option>
                                         <option value="normal">Normal</option>
                                         <option value="high">High</option>
                                         <option value="low">Low</option>
                                     </select>
                                 </div>
                             </div>

                             <div class="col-12">
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
                             </div>

                             <div class="col-md-6 col-lg-4">
                                 <div class="upload-container">
                                     <div>
                                         <label class="up_label">Upload Image <span>*</span></label>
                                         <label class="file-upload" data-upload="image">
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
                                             <input type="file" name="image" required>
                                             <div class="preview" data-preview="image"></div>
                                         </label>
                                     </div>
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
 <!-- Add Lead pop up ends  -->


 <?php include 'inc/footer.php' ?>