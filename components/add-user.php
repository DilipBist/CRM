        <!-- Add user  popup  -->
        <div class="monthly_detail_popup_container registration_popup" id="monthly-popup">
            <div class="outer_bg">
                <div class="monthly_update_details">

                    <div class="monthly_heading">
                        <span>Registration</span>

                        <button type="button" id="CloseMonthlyPopup">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99935 1.66602C5.40768 1.66602 1.66602 5.40768 1.66602 9.99935C1.66602 14.591 5.40768 18.3327 9.99935 18.3327C14.591 18.3327 18.3327 14.591 18.3327 9.99935C18.3327 5.40768 14.591 1.66602 9.99935 1.66602ZM12.7993 11.916C13.041 12.1577 13.041 12.5577 12.7993 12.7993C12.6743 12.9243 12.516 12.9827 12.3577 12.9827C12.1993 12.9827 12.041 12.9243 11.916 12.7993L9.99935 10.8827L8.08268 12.7993C7.95768 12.9243 7.79935 12.9827 7.64102 12.9827C7.48268 12.9827 7.32435 12.9243 7.19935 12.7993C6.95768 12.5577 6.95768 12.1577 7.19935 11.916L9.11602 9.99935L7.19935 8.08268C6.95768 7.84102 6.95768 7.44102 7.19935 7.19935C7.44102 6.95768 7.84102 6.95768 8.08268 7.19935L9.99935 9.11602L11.916 7.19935C12.1577 6.95768 12.5577 6.95768 12.7993 7.19935C13.041 7.44102 13.041 7.84102 12.7993 8.08268L10.8827 9.99935L12.7993 11.916Z" fill="#FF0000" />
                            </svg>
                        </button>
                    </div>

                    <div class="attendance_form mt-4">
                        <h4>User Registration</h4>
                        <p>Please kindly complete the form to User registration.</p>
                        <div class="common_form">
                            <form action="">
                                <div class="row g-3 align-items-end">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="User">User <span>*</span></label>
                                            <input type="text" placeholder="Enter your user name" name="User" id="User" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="Password">Password <span>*</span></label>
                                            <input type="password" placeholder="Enter your Password" name="Password" id="Password" required>
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="cPassword">Confirm Password <span>*</span></label>
                                            <input type="password" placeholder="Enter your Password" name="cPassword" id="cPassword" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="uid">User ID <span>*</span></label>
                                            <input type="number" placeholder="#1212121" name="Usuider" id="uid" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="Name">Name <span>*</span></label>
                                            <input type="text" placeholder="Enter your name" name="Name" id="Name" required>
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="Email">Email <span>*</span></label>
                                            <input type="email" placeholder="Enter your email" name="Email" id="Email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="slect-status">
                                            <label for="Branch" class="mb-2">Branch <span class="red">*</span></label>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <select class="form-select" aria-label="select" id="Branch" name="Branch" required>
                                                <option value="" disabled hidden selected>Select Branch</option>
                                                <option value="female">Felmale</option>
                                                <option value="other">other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="Address">Address <span>*</span></label>
                                            <input type="text" placeholder="Enter your Address" name="Address" id="Address" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="phone_num">Phone Number <span>*</span></label>
                                            <input type="tel" placeholder="Enter your Number" name="phone_num" id="phone_num" required>
                                        </div>
                                    </div>

                                    <!-- 
                                    <div class="col-md-6 col-lg-4">
                                        <label for="Role" class="mb-2">Role <span class="red">*</span></label>
                                        <select class="form-select" aria-label="select" id="Role" name="Role" required>
                                            <option value="" disabled hidden selected>Select Role</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Administrartion">Administrartion</option>
                                            <option value="Customer">Customer</option>
                                        </select>
                                    </div> -->


                                    <div class="col-md-6 col-lg-4">
                                        <div class=" slect-status">
                                            <label for="Status" class="mb-2">Status <span class="red">*</span></label>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M16.6004 7.45898L11.1671 12.8923C10.5254 13.534 9.47539 13.534 8.83372 12.8923L3.40039 7.45898" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <select class="form-select" aria-label="select" id="Status" name="Status" required>
                                                <option value="" disabled hidden selected>Select status</option>
                                                <option value="inactive">inactive</option>
                                                <option value="Active">Active</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-lg-4">
                                        <div class="form_input d-flex flex-column gap-2">
                                            <label for="Created">Created by <span>*</span></label>
                                            <input type="text" placeholder="Enter your Name" name="Created" id="Created" required>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form_discard_save d-flex align-items-center gap-2 justify-content-end">
                                            <button class="discard" type="button">Discard</button>
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
        <!-- add user popup ends  -->