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
                    <img src="assets/images/icons/flag.svg" alt="flag icon">
                </div>
                <div class="text-center formmax">
                    <h2>Welcome to ST Builder</h2>
                    <p>Please provide email address and password to proceed.</p>
                </div>

                <form action="">
                    <div class="row g-4">
                        <div class="col-12">
                            <label for="email">Username <span>*</span></label>
                            <div>
                                <input type="email" placeholder="Please enter your name" name="email" id="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="Password">Password <span>*</span></label>
                            <div class="input_password">
                                <input type="password" placeholder="Please enter your password" name="Password" id="Password">
                                <i class="ri-eye-line"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="index.php" class="login">Login</a>
                            <!-- you can use a and button tag both remove which is not in use  -->
                            <!-- <button>Login</button> -->
                        </div>
                        <div class="col-12">
                            <a href="forgot-password.php" class="forgotpassword">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- LOGIN SECTION ENDS -->



<?php include 'inc/footer.php' ?>