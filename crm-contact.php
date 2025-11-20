  <?php
    $pageTitle = 'CRM-Contact';
    include 'inc/header.php'
    ?>


  <!-- delet popup component  -->
  <?php include 'components/delete-popup.php' ?>
  <!-- delet popup component ends -->

  <section class="admin_container d-flex">

      <?php
        $currentPage = 'crmcontact';
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
                      <a href="#">CRM </a>
                      <span>/</span>
                      <p>Contact </p>
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
                  <h3>Contact List</h3>
                  <p>You can view the Contact List accordingly.</p>
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
                      data-heading="Add Contact ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M9.99935 18.3346C14.5827 18.3346 18.3327 14.5846 18.3327 10.0013C18.3327 5.41797 14.5827 1.66797 9.99935 1.66797C5.41602 1.66797 1.66602 5.41797 1.66602 10.0013C1.66602 14.5846 5.41602 18.3346 9.99935 18.3346Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M6.66602 10H13.3327" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M10 13.3346V6.66797" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      Add Contact
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
                                  <th scope="col">Contact Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Phone</th>
                                  <th scope="col">Location</th>
                                  <th scope="col">Contact Owner </th>
                                  <th scope="col">Contact </th>
                                  <th scope="col">Status </th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          <tbody>
                              <?php foreach ($projectList as $project): ?>
                                  <tr>
                                      <td><?= $project['id'] ?></td>
                                      <td>
                                          <div class="table_profile_image">
                                              <img src="assets/images/profileimg.jpg" alt="profile image">
                                              Rohan Dangol
                                          </div>
                                      </td>
                                      <td>rohanshrestha020@gmail.com</td>
                                      <td>9827339100</td>
                                      <td>Germany </td>
                                      <td>Rohan Shrestha </td>
                                      <td>
                                          <div class="table_contact_link d-flex align-items-center gap-2">
                                              <a href="mailto:#">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="19" viewBox="0 0 22 19" fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M2.63534 2.4871C1.95538 3.11848 1.5 4.14295 1.5 5.75V12.75C1.5 14.357 1.95538 15.3815 2.63534 16.0129C3.32535 16.6536 4.36497 17 5.75 17H15.75C17.135 17 18.1746 16.6536 18.8647 16.0129C19.5446 15.3815 20 14.357 20 12.75V5.75C20 4.14295 19.5446 3.11848 18.8647 2.4871C18.1746 1.84637 17.135 1.5 15.75 1.5H5.75C4.36497 1.5 3.32535 1.84637 2.63534 2.4871ZM1.61466 1.3879C2.67465 0.403634 4.13503 0 5.75 0H15.75C17.365 0 18.8254 0.403634 19.8853 1.3879C20.9554 2.38152 21.5 3.85705 21.5 5.75V12.75C21.5 14.643 20.9554 16.1185 19.8853 17.1121C18.8254 18.0964 17.365 18.5 15.75 18.5H5.75C4.13503 18.5 2.67465 18.0964 1.61466 17.1121C0.544615 16.1185 0 14.643 0 12.75V5.75C0 3.85705 0.544615 2.38152 1.61466 1.3879Z" fill="#141414" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.336 5.78196C16.5945 6.10561 16.5417 6.57754 16.2181 6.83605L13.0872 9.33679C11.7838 10.3744 9.70628 10.3744 8.40289 9.33679L8.40104 9.33532L5.28105 6.83531C4.9578 6.5763 4.90573 6.10429 5.16474 5.78105C5.42375 5.4578 5.89576 5.40573 6.21901 5.66474L9.33802 8.16395C10.0946 8.76552 11.3962 8.76539 12.1525 8.16355L15.282 5.66401C15.6056 5.40551 16.0775 5.45832 16.336 5.78196Z" fill="#141414" />
                                                  </svg>
                                              </a>
                                              <a href="tel:">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                      <path d="M16.4775 13.7475C16.4775 14.0175 16.4175 14.295 16.29 14.565C16.1625 14.835 15.9975 15.09 15.78 15.33C15.4125 15.735 15.0075 16.0275 14.55 16.215C14.1 16.4025 13.6125 16.5 13.0875 16.5C12.3225 16.5 11.505 16.32 10.6425 15.9525C9.78 15.585 8.9175 15.09 8.0625 14.4675C7.2 13.8375 6.3825 13.14 5.6025 12.3675C4.83 11.5875 4.1325 10.77 3.51 9.915C2.895 9.06 2.4 8.205 2.04 7.3575C1.68 6.5025 1.5 5.685 1.5 4.905C1.5 4.395 1.59 3.9075 1.77 3.4575C1.95 3 2.235 2.58 2.6325 2.205C3.1125 1.7325 3.6375 1.5 4.1925 1.5C4.4025 1.5 4.6125 1.545 4.8 1.635C4.995 1.725 5.1675 1.86 5.3025 2.055L7.0425 4.5075C7.1775 4.695 7.275 4.8675 7.3425 5.0325C7.41 5.19 7.4475 5.3475 7.4475 5.49C7.4475 5.67 7.395 5.85 7.29 6.0225C7.1925 6.195 7.05 6.375 6.87 6.555L6.3 7.1475C6.2175 7.23 6.18 7.3275 6.18 7.4475C6.18 7.5075 6.1875 7.56 6.2025 7.62C6.225 7.68 6.2475 7.725 6.2625 7.77C6.3975 8.0175 6.63 8.34 6.96 8.73C7.2975 9.12 7.6575 9.5175 8.0475 9.915C8.4525 10.3125 8.8425 10.68 9.24 11.0175C9.63 11.3475 9.9525 11.5725 10.2075 11.7075C10.245 11.7225 10.29 11.745 10.3425 11.7675C10.4025 11.79 10.4625 11.7975 10.53 11.7975C10.6575 11.7975 10.755 11.7525 10.8375 11.67L11.4075 11.1075C11.595 10.92 11.775 10.7775 11.9475 10.6875C12.12 10.5825 12.2925 10.53 12.48 10.53C12.6225 10.53 12.7725 10.56 12.9375 10.6275C13.1025 10.695 13.275 10.7925 13.4625 10.92L15.945 12.6825C16.14 12.8175 16.275 12.975 16.3575 13.1625C16.4325 13.35 16.4775 13.5375 16.4775 13.7475Z" stroke="#141414" stroke-width="1.5" stroke-miterlimit="10" />
                                                      <path d="M13.875 6.75C13.875 6.3 13.5225 5.61 12.9975 5.0475C12.5175 4.53 11.88 4.125 11.25 4.125" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                      <path d="M16.5 6.75C16.5 3.8475 14.1525 1.5 11.25 1.5" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                              </a>
                                              <a href="#" target="_blank">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                      <path d="M6.75 16.5H11.25C15 16.5 16.5 15 16.5 11.25V6.75C16.5 3 15 1.5 11.25 1.5H6.75C3 1.5 1.5 3 1.5 6.75V11.25C1.5 15 3 16.5 6.75 16.5Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                      <path d="M9 11.625C10.4497 11.625 11.625 10.4497 11.625 9C11.625 7.55025 10.4497 6.375 9 6.375C7.55025 6.375 6.375 7.55025 6.375 9C6.375 10.4497 7.55025 11.625 9 11.625Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                      <path d="M13.2271 5.25H13.2358" stroke="#141414" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                              </a>
                                          </div>
                                      </td>
                                      <td>
                                          <!-- use the below status design  -->
                                          <!-- <div class="green_status">
                                             Active
                                         </div> -->
                                          <div class="red_staus">
                                              Inactive
                                          </div>
                                      </td>
                                      <td>
                                          <div class="table_actions">
                                              <a href="#" title="View Details" class="add_acc_groupBtn" data-heading="View Contact">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                      <path d="M11.6854 8.99945C11.6854 10.4845 10.4854 11.6845 9.00043 11.6845C7.51543 11.6845 6.31543 10.4845 6.31543 8.99945C6.31543 7.51445 7.51543 6.31445 9.00043 6.31445C10.4854 6.31445 11.6854 7.51445 11.6854 8.99945Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                      <path d="M8.99988 15.2016C11.6474 15.2016 14.1149 13.6416 15.8324 10.9416C16.5074 9.88406 16.5074 8.10656 15.8324 7.04906C14.1149 4.34906 11.6474 2.78906 8.99988 2.78906C6.35238 2.78906 3.88488 4.34906 2.16738 7.04906C1.49238 8.10656 1.49238 9.88406 2.16738 10.9416C3.88488 13.6416 6.35238 15.2016 8.99988 15.2016Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>
                                              </a>
                                              <a
                                                  href="#" aria-label="Edit user List"
                                                  class="add_acc_groupBtn"
                                                  data-heading="Edit Contact">
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


  <!-- Add Task  pop up  -->
  <div class="AttendancePopup">
      <div class="outer_layout">
          <div class="attendance_popup_content">
              <div class="monthly_heading">
                  <span>Add Contact</span>

                  <button type="button" id="CloseAttendancePopup">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M9.99935 1.66602C5.40768 1.66602 1.66602 5.40768 1.66602 9.99935C1.66602 14.591 5.40768 18.3327 9.99935 18.3327C14.591 18.3327 18.3327 14.591 18.3327 9.99935C18.3327 5.40768 14.591 1.66602 9.99935 1.66602ZM12.7993 11.916C13.041 12.1577 13.041 12.5577 12.7993 12.7993C12.6743 12.9243 12.516 12.9827 12.3577 12.9827C12.1993 12.9827 12.041 12.9243 11.916 12.7993L9.99935 10.8827L8.08268 12.7993C7.95768 12.9243 7.79935 12.9827 7.64102 12.9827C7.48268 12.9827 7.32435 12.9243 7.19935 12.7993C6.95768 12.5577 6.95768 12.1577 7.19935 11.916L9.11602 9.99935L7.19935 8.08268C6.95768 7.84102 6.95768 7.44102 7.19935 7.19935C7.44102 6.95768 7.84102 6.95768 8.08268 7.19935L9.99935 9.11602L11.916 7.19935C12.1577 6.95768 12.5577 6.95768 12.7993 7.19935C13.041 7.44102 13.041 7.84102 12.7993 8.08268L10.8827 9.99935L12.7993 11.916Z" fill="#FF0000" />
                      </svg>
                  </button>
              </div>

              <div class="attendance_form mt-4">
                  <h4>Add Contact</h4>
                  <p>Please kindly complete the form to add Contact registration.</p>

                  <div class="backup_filter_button_container d-flex align-items-center gap-3 flex-wrap">
                      <button class="active" data-filter="basic_info">Basic Information</button>
                      <button data-filter="Address">Address</button>
                      <button data-filter="social">Social Profiles</button>
                  </div>


                  <div class="backupfilterable_data">
                      <!-- Basic info data div  -->
                      <div class="data active" data-category="basic_info">
                          <div class="common_form">
                              <form action="">
                                  <div class="row g-3 align-items-start">

                                      <div class="col-md-6 col-lg-4">
                                          <div class="form_input d-flex flex-column gap-2">
                                              <label for="fname">First Name <span>*</span> </label>
                                              <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>
                                          </div>
                                      </div>

                                      <div class="col-md-6 col-lg-4">
                                          <div class="form_input d-flex flex-column gap-2">
                                              <label for="lname">Last Name <span>*</span> </label>
                                              <input type="text" id="lname" name="lname" placeholder="Enter a last name " required>
                                          </div>
                                      </div>

                                      <div class="col-md-6 col-lg-4">
                                          <div class="slect-status">
                                              <label for="Company_name" class="mb-2">Company Name <span class="red">*</span></label>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                                  <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                              </svg>
                                              <select class="form-select" aria-label="select" id="Company_name" name="Company_name" required>
                                                  <option value="" disabled hidden selected>Select Company</option>
                                                  <option value="normal">Normal</option>
                                                  <option value="high">High</option>
                                                  <option value="low">Low</option>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="col-md-6 col-lg-4">
                                          <div class="form_input d-flex flex-column gap-2">
                                              <label for="Email">Email <span>*</span> </label>
                                              <input type="email" id="Email" name="Email" placeholder="Enter a Email Address" required>
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
                                              <label for="contact_source" class="mb-2">Contact Source <span class="red">*</span></label>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                                  <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                              </svg>
                                              <select class="form-select" aria-label="select" id="contact_source" name="contact_source" required>
                                                  <option value="" disabled hidden selected>Select Company</option>
                                                  <option value="normal">Normal</option>
                                                  <option value="high">High</option>
                                                  <option value="low">Low</option>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="col-md-6 col-lg-4">
                                          <div class="slect-status">
                                              <label for="lead_Status" class="mb-2">Lead Status <span class="red">*</span></label>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                                  <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                              </svg>
                                              <select class="form-select" aria-label="select" id="lead_Status" name="lead_Status" required>
                                                  <option value="" disabled hidden selected>Select Status</option>
                                                  <option value="normal">Normal</option>
                                                  <option value="high">High</option>
                                                  <option value="low">Low</option>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="col-md-6 col-lg-4">
                                          <div class="slect-status">
                                              <label for="contact_status" class="mb-2">Contact Status <span class="red">*</span></label>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                                  <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                              </svg>
                                              <select class="form-select" aria-label="select" id="contact_status" name="contact_status" required>
                                                  <option value="" disabled hidden selected>Select Status</option>
                                                  <option value="normal">Normal</option>
                                                  <option value="high">High</option>
                                                  <option value="low">Low</option>
                                              </select>
                                          </div>
                                      </div>


                                      <div class="col-md-6 col-lg-4">
                                          <div class="upload-container">
                                              <div>
                                                  <label class="up_label">Upload Profile Image <span>*</span></label>
                                                  <label class="file-upload" data-upload="profile">
                                                      <div class="placeholder-data">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                              <path d="M9.94702 25.7871H7.38696C3.46696 25.5071 1.70703 22.4938 1.70703 19.8138C1.70703 17.1338 3.46698 14.1071 7.32031 13.8404C7.86698 13.7871 8.34696 14.2138 8.38696 14.7738C8.42696 15.3204 8.01369 15.8004 7.45369 15.8404C4.86703 16.0271 3.70703 17.9738 3.70703 19.8271C3.70703 21.6804 4.86703 23.6271 7.45369 23.8138H9.94702C10.4937 23.8138 10.947 24.2671 10.947 24.8138C10.947 25.3604 10.4937 25.7871 9.94702 25.7871Z" fill="#141414" />
                                                              <path d="M22.2272 25.786C22.2005 25.786 22.1872 25.786 22.1605 25.786C21.6139 25.786 21.1072 25.3327 21.1072 24.786C21.1072 24.2127 21.5339 23.786 22.0939 23.786C23.7339 23.786 25.2006 23.2127 26.3472 22.186C28.4272 20.3727 28.5605 17.7594 28.0005 15.9194C27.4405 14.0927 25.8805 11.9994 23.1605 11.666C22.7205 11.6127 22.3738 11.2794 22.2938 10.8394C21.7605 7.63936 20.0405 5.42602 17.4272 4.62602C14.7339 3.78602 11.5872 4.61269 9.62716 6.66602C7.7205 8.65269 7.28051 11.4394 8.38717 14.506C8.57384 15.026 8.30724 15.5993 7.78724 15.786C7.26724 15.9727 6.69388 15.706 6.50721 15.186C5.16054 11.426 5.77389 7.82602 8.18722 5.29269C10.6539 2.70602 14.6139 1.67934 18.0139 2.71934C21.1339 3.67934 23.3338 6.25268 24.1338 9.82601C26.8538 10.4393 29.0405 12.506 29.9072 15.3594C30.8539 18.466 30.0005 21.666 27.6672 23.6927C26.1872 25.026 24.2538 25.786 22.2272 25.786Z" fill="#141414" />
                                                              <path d="M16.0007 29.7064C13.3207 29.7064 10.814 28.2797 9.44067 25.973C9.29401 25.7464 9.14734 25.4797 9.02734 25.1864C8.57401 24.2397 8.33398 23.1597 8.33398 22.0397C8.33398 17.813 11.774 14.373 16.0007 14.373C20.2273 14.373 23.6673 17.813 23.6673 22.0397C23.6673 23.173 23.4273 24.2397 22.9473 25.2264C22.8407 25.4797 22.694 25.7464 22.534 25.9997C21.1873 28.2797 18.6807 29.7064 16.0007 29.7064ZM16.0007 16.373C12.8807 16.373 10.334 18.9197 10.334 22.0397C10.334 22.8664 10.5073 23.6397 10.8407 24.3464C10.9473 24.573 11.0406 24.7597 11.1473 24.933C12.1606 26.653 14.014 27.7064 15.9873 27.7064C17.9606 27.7064 19.814 26.653 20.814 24.9597C20.934 24.7597 21.0407 24.573 21.1207 24.3864C21.4807 23.653 21.654 22.8797 21.654 22.053C21.6673 18.9197 19.1207 16.373 16.0007 16.373Z" fill="#141414" />
                                                              <path d="M15.2405 24.3604C14.9872 24.3604 14.7339 24.2671 14.5339 24.0671L13.2138 22.7471C12.8272 22.3604 12.8272 21.7204 13.2138 21.3338C13.6005 20.9471 14.2405 20.9471 14.6272 21.3338L15.2672 21.9738L17.4005 20.0004C17.8138 19.6271 18.4405 19.6538 18.8138 20.0538C19.1872 20.4538 19.1605 21.0938 18.7605 21.4671L15.9205 24.0938C15.7205 24.2671 15.4805 24.3604 15.2405 24.3604Z" fill="#141414" />
                                                          </svg>
                                                          <p>Choose a file or drag & drop it here</p>
                                                          <span>Upload the Profile Image</span>
                                                      </div>
                                                      <input type="file" name="profile" required>
                                                      <div class="preview" data-preview="profile"></div>
                                                  </label>
                                              </div>
                                          </div>
                                      </div>


                                      <div class="col-12">
                                          <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end">
                                              <button class="discard" type="button">Back</button>
                                              <button type="submit" class="submit">Save</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <!-- Basic info data div  -->

                      <!-- Address data  -->
                      <div class="data" data-category="Address">
                          <div class="common_form">
                              <form action="">
                                  <div class="row g-3 align-items-start">

                                      <div class="col-md-6 col-lg-4">
                                          <div class="form_input d-flex flex-column gap-2">
                                              <label for="Address">Address <span>*</span> </label>
                                              <input type="text" id="Address" name="Address" placeholder="Enter Address" required>
                                          </div>
                                      </div>

                                      <div class="col-md-6 col-lg-4">
                                          <div class="slect-status">
                                              <label for="Country" class="mb-2">Country <span class="red">*</span></label>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                                  <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                              </svg>
                                              <select class="form-select" aria-label="select" id="Country" name="Country" required>
                                                  <option value="" disabled hidden selected>Select Type</option>
                                                  <option value="normal">Normal</option>
                                                  <option value="high">High</option>
                                                  <option value="low">Low</option>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="col-md-6 col-lg-4">
                                          <div class="slect-status">
                                              <label for="State" class="mb-2">State <span class="red">*</span></label>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                                  <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                              </svg>
                                              <select class="form-select" aria-label="select" id="State" name="State" required>
                                                  <option value="" disabled hidden selected>Select Company</option>
                                                  <option value="Active">Active</option>
                                                  <option value="Inactive">Inactive</option>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="col-md-6 col-lg-4">
                                          <div class="slect-status">
                                              <label for="City" class="mb-2">City <span class="red">*</span></label>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 15 8" fill="none">
                                                  <path d="M13.95 0.75L8.51667 6.18333C7.875 6.825 6.825 6.825 6.18333 6.18333L0.75 0.75" stroke="#848484" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                              </svg>
                                              <select class="form-select" aria-label="select" id="City" name="City" required>
                                                  <option value="" disabled hidden selected>Select </option>
                                                  <option value="normal">Normal</option>
                                                  <option value="high">High</option>
                                                  <option value="low">Low</option>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="col-md-6 col-lg-4">
                                          <div class="form_input d-flex flex-column gap-2">
                                              <label for="Phone">Phone <span>*</span> </label>
                                              <input type="tel" id="Phone" name="Phone" placeholder="Enter Number" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                          </div>
                                      </div>



                                      <div class="col-12">
                                          <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end">
                                              <button class="discard" type="button">Back</button>
                                              <button type="submit" class="submit">Save</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <!-- Address data end -->

                      <!-- Social info div  -->
                      <div class="data" data-category="social">
                          <div class="common_form">
                              <form action="">
                                  <div class="row g-3 align-items-start">

                                      <div class="col-md-6">
                                          <div class="form_input d-flex flex-column gap-2">
                                              <label for="Facebook">Facebook <span>*</span> </label>
                                              <input type="url" id="Facebook" name="Facebook" placeholder="Enter url" required>
                                          </div>
                                      </div>

                                      <div class="col-md-6">
                                          <div class="form_input d-flex flex-column gap-2">
                                              <label for="Linkdin">Linkdin <span>*</span> </label>
                                              <input type="url" id="Linkdin" name="Linkdin" placeholder="Enter url" required>
                                          </div>
                                      </div>

                                      <div class="col-md-6">
                                          <div class="form_input d-flex flex-column gap-2">
                                              <label for="Whatsapp">Whatsapp <span>*</span> </label>
                                              <input type="url" id="Whatsapp" name="Whatsapp" placeholder="Enter url" required>
                                          </div>
                                      </div>

                                      <div class="col-md-6">
                                          <div class="form_input d-flex flex-column gap-2">
                                              <label for="Instagram">Instagram <span>*</span> </label>
                                              <input type="url" id="Instagram" name="Instagram" placeholder="Enter url" required>
                                          </div>
                                      </div>

                                      <div class="col-12">
                                          <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end">
                                              <button class="discard" type="button">Back</button>
                                              <button type="submit" class="submit">Save</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <!-- Social info div  -->


                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Add Task pop up ends  -->

  <?php include 'inc/footer.php' ?>