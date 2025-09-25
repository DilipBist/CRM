<?php
$pageTitle = 'Forgot Password';
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
                    <a href="login.php">
                        <i class="ri-arrow-left-line"></i>
                        Back
                    </a>
                </div>

                <div class="flag">
                    <img src="assets/images/icons/lock.svg" alt="flag icon">
                </div>
                <div class="text-center formmax">
                    <h2>Forgot Password ?</h2>
                    <p>Please provide email address to set new password.</p>
                </div>

                <form action="">
                    <div class="row g-4">
                        <div class="col-12">
                            <label for="email">Email <span>*</span></label>
                            <div>
                                <input type="email" placeholder="Please enter your email" name="email" id="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="email-verification.php" class="login">Proceed</a>
                            <!-- you can use a and button tag both remove which is not in use  -->
                            <!-- <button>Proceed</button>     -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- LOGIN SECTION ENDS -->



<?php include 'inc/footer.php' ?>