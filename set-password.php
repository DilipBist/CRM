<?php
$pageTitle = 'Login';
include 'inc/header.php'
?>


<!-- LOGIN SECTION STARTS  -->
<section class="login_section">
    <div class="l_container">
        <div class="login_grid">
            <div class="login_left_img d-none d-lg-block">
                <div class="swiper mySwiperLogin">
                    <div class="swiper-wrapper">
                        <?php foreach ($loginSlide as $slide): ?>
                            <div class="swiper-slide w-100">
                                <div class="login_slider_img">
                                    <img src="<?php echo $slide['img']; ?>" alt="<?php echo $slide['alt']; ?>">
                                    <div class="img_text">
                                        <h3><?php echo $slide['heading']; ?></h3>
                                        <p><?php echo $slide['text']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="login_right">
                <div class="c-logo">
                    <img src="assets/images/logo.svg" alt="logo">
                </div>
                <div class="flag">
                    <img src="assets/images/icons/lock.svg" alt="flag icon">
                </div>
                <div class="text-center formmax">
                    <h2>Set Password</h2>
                    <p>Please set password to proceed further.</p>
                </div>

                <form action="">
                    <div class="row g-4">
                        <div class="col-12">
                            <label for="Password">New Password <span>*</span></label>
                            <div class="input_password">
                                <input type="password" placeholder="Please enter your password" name="Password" id="Password">
                                <i class="ri-eye-line"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="Cpassword">Confirm Password <span>*</span></label>
                            <div class="input_password">
                                <input type="password" placeholder="Please enter your password" name="Cpassword" id="Cpassword">
                                <i class="ri-eye-line"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="" class="login">Proceed</a>
                            <!-- you can use a and button tag both remove which is not in use  -->
                            <!-- <button>Proceed</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- LOGIN SECTION ENDS -->



<?php include 'inc/footer.php' ?>