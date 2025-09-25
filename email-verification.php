<?php
$pageTitle = 'Email Verification';
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

                <div class="back_login_btn">
                    <a href="forgot-password.php">
                        <i class="ri-arrow-left-line"></i>
                        Back
                    </a>
                </div>

                <div class="flag">
                    <img src="assets/images/icons/lock.svg" alt="flag icon">
                </div>
                <div class="text-center formmax">
                    <h2>Email Verification</h2>
                    <p>Kindly check your email for the password reset link and follow the instructions to complete the process.</p>
                </div>
                <img src="assets/images/login/emailpc.svg" class="send_mail" alt="send mail image ">

            </div>
        </div>
    </div>
</section>
<!-- LOGIN SECTION ENDS -->



<?php include 'inc/footer.php' ?>