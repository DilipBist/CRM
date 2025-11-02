<?php
$pageTitle = 'Vehicle Form Details Final Step ';
include 'inc/header.php';
?>

<div class="vehicle_final_details_showCase_wrapper">
    <div class="back_btn_wrapper">
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15.5 12H9.5" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M11.5 9L8.5 12L11.5 15" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Back
        </button>
    </div>

    <div class="data_success_wrapper position-relative border">
        <div class="content">
            <div class="d-flex flex-column align-items-center">
                <div class="tick_img">
                    <!-- for success state  -->
                    <img src="assets/images/tickarrow.png" alt="tick arrow">
                    <!-- if status failed then use the below image and change the message  -->
                    <!-- <img src="assets/images/crossarrow.png" alt="cross arrow"> -->
                </div>
                <h3>Data Successfully Saved!</h3>
                <p>You have set the data of the vehicle registration successfully.</p>
                <a href="index.php">Back to Home</a>
            </div>
        </div>
        <a href="index.php" class="company_logo">
            <img src="assets/images/logo.svg" alt="company logo">
        </a>
    </div>
</div>
<?php include 'inc/footer.php' ?>