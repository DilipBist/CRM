<?php
$pageTitle = 'Chat';
include 'inc/header.php'
?>


<section class="admin_container d-flex">


    <?php
    $currentPage = 'chat';
    include 'inc/side-bar.php';
    ?>

    <div class="admin_right_content ms-auto user_list">
        <!-- top profile header  -->
        <div class="admin_top_header d-flex align-items-center gap-3 justify-content-between">
            <div class="chart_bread_crump d-flex align-items-center gap-3">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path
                            d="M9 1.5C7.035 1.5 5.4375 3.0975 5.4375 5.0625C5.4375 6.99 6.945 8.55 8.91 8.6175C8.97 8.61 9.03 8.61 9.075 8.6175C9.09 8.6175 9.0975 8.6175 9.1125 8.6175C9.12 8.6175 9.12 8.6175 9.1275 8.6175C11.0475 8.55 12.555 6.99 12.5625 5.0625C12.5625 3.0975 10.965 1.5 9 1.5Z"
                            fill="#141414" />
                        <path
                            d="M12.8097 10.6127C10.7172 9.21766 7.30473 9.21766 5.19723 10.6127C4.24473 11.2502 3.71973 12.1127 3.71973 13.0352C3.71973 13.9577 4.24473 14.8127 5.18973 15.4427C6.23973 16.1477 7.61973 16.5002 8.99973 16.5002C10.3797 16.5002 11.7597 16.1477 12.8097 15.4427C13.7547 14.8052 14.2797 13.9502 14.2797 13.0202C14.2722 12.0977 13.7547 11.2427 12.8097 10.6127Z"
                            fill="#141414" />
                    </svg>
                </div>

                <div class="bread_crump_content d-flex align-items-center gap-2">
                    <a href="employee.php">HRMS </a>
                    <span>/</span>
                    <p>Chat</p>
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
                <h3>Chat</h3>
            </div>
        </div>

        <!-- chatbox container  -->
        <div class="chat_box_container d-flex gap-3  pl_pr">
            <div class="chat_box_left">
                <h2>Chats</h2>

                <div class="chat_profile_search_container">
                    <input type="text" placeholder="Search For Contacts or Messages">

                    <h3>All Chats</h3>
                </div>

                <div class="all_Chat_profiles_list_container d-flex flex-column gap-2">
                    <div class="chat_profile active_chat d-flex gap-2">
                        <div class="img active">
                            <img src="./assets//images/chatProfile/cp1.jpg" alt="Profile Image">

                            <div class="active_dot"></div>
                        </div>

                        <div class="right_part w-100">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="name">
                                    Anthony Lewis
                                </div>
                                <div class="time">
                                    02:40 PM
                                </div>
                            </div>
                            <div class="msg_container d-flex justify-content-between gap-2 mt-1">
                                <div class="msg">
                                    is typing...
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="chat_profile d-flex gap-2">
                        <div class="img active">
                            <img src="./assets//images/chatProfile/cp2.png" alt="Profile Image">

                            <div class="active_dot"></div>
                        </div>

                        <div class="right_part w-100">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="name">
                                    Anthony Lewis
                                </div>
                                <div class="time">
                                    06:12 AM
                                </div>
                            </div>
                            <div class="msg_container d-flex justify-content-between gap-2 mt-1">
                                <div class="msg">
                                    Document
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="chat_profile d-flex gap-2">
                        <div class="img active">
                            <img src="./assets//images/chatProfile/cp3.png" alt="Profile Image">

                            <div class="active_dot"></div>
                        </div>

                        <div class="right_part w-100">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="name">
                                    Anthony Lewis
                                </div>
                                <div class="time">
                                    Tuesday
                                </div>
                            </div>
                            <div class="msg_container d-flex justify-content-between gap-2 mt-1">
                                <!-- if missed call  -->
                                <div class="call_missed">
                                    Missed Video Call
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="chat_profile d-flex gap-2">
                        <div class="img active">
                            <img src="./assets//images/chatProfile/cp4.jpg" alt="Profile Image">

                            <div class="active_dot"></div>
                        </div>

                        <div class="right_part w-100">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="name">
                                    Anthony Lewis
                                </div>
                                <div class="time">
                                    02:40 PM
                                </div>
                            </div>
                            <div class="msg_container d-flex justify-content-between gap-2 mt-1">
                                <div class="msg">
                                    Hi How are you 🔥
                                </div>
                                <div class="msg_num">
                                    12
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chat_profile d-flex gap-2">
                        <div class="img active">
                            <img src="./assets//images/chatProfile/cp5.jpg" alt="Profile Image">

                            <div class="active_dot"></div>
                        </div>

                        <div class="right_part w-100">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="name">
                                    Anthony Lewis
                                </div>
                                <div class="time">
                                    Sunday
                                </div>
                            </div>
                            <div class="msg_container d-flex justify-content-between gap-2 mt-1">
                                <div class="msg">
                                    Haha oh man 🔥
                                </div>
                                <div class="msg_num">
                                    25
                                </div>
                                <!-- <div class="call_missed">
                                    Missed Video Call
                                </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="chat_profile d-flex gap-2">
                        <div class="img active">
                            <img src="./assets//images/chatProfile/cp6.jpg" alt="Profile Image">

                            <div class="active_dot"></div>
                        </div>

                        <div class="right_part w-100">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="name">
                                    Anthony Lewis
                                </div>
                                <div class="time">
                                    02:40 PM
                                </div>
                            </div>
                            <div class="msg_container d-flex justify-content-between gap-2 mt-1">
                                <div class="msg">
                                    Do you know which...
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="chat_profile d-flex gap-2">
                        <div class="img active">
                            <img src="./assets//images/chatProfile/cp7.jpg" alt="Profile Image">

                            <div class="active_dot"></div>
                        </div>

                        <div class="right_part w-100">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="name">
                                    Anthony Lewis
                                </div>

                            </div>
                            <div class="msg_container d-flex justify-content-between gap-2 mt-1">
                                <!-- incomming call  -->
                                <div class="incomming_call">
                                    Incoming Video Call
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="chat_profile d-flex gap-2">
                        <div class="img active">
                            <img src="./assets//images/chatProfile/cp1.jpg" alt="Profile Image">

                            <div class="active_dot"></div>
                        </div>

                        <div class="right_part w-100">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="name">
                                    Anthony Lewis
                                </div>
                                <div class="time">
                                    02:40 PM
                                </div>
                            </div>
                            <div class="msg_container d-flex justify-content-between gap-2 mt-1">
                                <div class="msg">
                                    Photo
                                </div>
                                <div class="msg_num">
                                    25
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="chat_profile d-flex gap-2">
                        <div class="img active">
                            <img src="./assets//images/chatProfile/cp2.png" alt="Profile Image">

                            <div class="active_dot"></div>
                        </div>

                        <div class="right_part w-100">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="name">
                                    Anthony Lewis
                                </div>
                                <div class="time">
                                    02:40 PM
                                </div>
                            </div>
                            <div class="msg_container d-flex justify-content-between gap-2 mt-1">
                                <div class="msg">
                                    Do you know which...
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="chat_box_right">
                <div class="top_profile_bar">
                    <div class="chat_profile d-flex gap-2">
                        <div class="img active">
                            <img src="./assets//images/chatProfile/cp1.jpg" alt="Profile Image">

                            <div class="active_dot"></div>
                        </div>

                        <div class="right_part w-100">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="name">
                                    Anthony Lewis
                                </div>
                            </div>
                            <div class="msg_container">
                                <div class="msg">
                                    Online
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right_chat_content_wrapper">
                    <div class="content d-flex flex-column gap-3">
                        <div class="left_chat d-flex gap-2 align-items-end">
                            <div class="img">
                                <img src="./assets//images/chatProfile/cp1.jpg" alt="Profile Image">
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <div class="chat_content">
                                    <p>Hi John, I wanted to update you on a new company policy regarding remote work.</p>
                                    <div class="messager_name d-flex align-items-center gap-3">
                                        <h5>Anthony Lewis</h5>
                                        <p>08:00 AM</p>
                                    </div>
                                </div>
                                <div class="chat_content">
                                    <p>Do you have a moment?</p>
                                    <div class="messager_name d-flex align-items-center gap-3">
                                        <h5>Anthony Lewis</h5>
                                        <p>08:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="right_chat d-flex gap-2 align-items-end justify-content-end">
                            <div class="d-flex flex-column gap-2 align-items-end">
                                <div class="chat_content">
                                    <p>Hi John, I wanted to update you on a new company policy regarding remote work.</p>
                                    <div class="messager_name d-flex align-items-center gap-3">
                                        <h5>Anthony Lewis</h5>
                                        <p>08:00 AM</p>
                                    </div>
                                </div>
                                <div class="chat_content">
                                    <p>Do you have a moment?</p>
                                    <div class="messager_name d-flex align-items-center gap-3">
                                        <p>08:00 AM</p>
                                        <h5>You</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="img">
                                <img src="./assets//images/chatProfile/cp2.png" alt="Profile Image">
                            </div>
                        </div>
                    </div>

                    <div class="content d-flex flex-column gap-3">
                        <div class="left_chat d-flex gap-2 align-items-end">
                            <div class="img">
                                <img src="./assets//images/chatProfile/cp1.jpg" alt="Profile Image">
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <div class="chat_content">
                                    <p>Hi John, I wanted to update you on a new company policy regarding remote work. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem ut a vero corrupti, quam cupiditate culpa aut in? Suscipit harum tenetur pariatur natus praesentium accusamus temporibus possimus enim fugiat expedita?</p>
                                    <div class="messager_name d-flex align-items-center gap-3">
                                        <h5>Anthony Lewis</h5>
                                        <p>08:00 AM</p>
                                    </div>
                                </div>
                                <div class="chat_content">
                                    <p>Do you have a moment?</p>
                                    <div class="messager_name d-flex align-items-center gap-3">
                                        <h5>Anthony Lewis</h5>
                                        <p>08:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="right_chat d-flex gap-2 align-items-end justify-content-end">
                            <div class="d-flex flex-column gap-2 align-items-end">
                                <div class="chat_content">
                                    <p>Hi John, I wanted to update you on a new company policy regarding remote work. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate optio dolorem provident nulla voluptatum nisi numquam autem omnis. Quidem necessitatibus dolores aliquid culpa omnis, maiores incidunt officia libero et corporis?</p>
                                    <div class="messager_name d-flex align-items-center gap-3">
                                        <h5>Anthony Lewis</h5>
                                        <p>08:00 AM</p>
                                    </div>
                                </div>
                                <div class="chat_content">
                                    <p>Do you have a moment? Lorem ipsum dolor sit amet.</p>
                                    <div class="messager_name d-flex align-items-center gap-3">
                                        <p>08:00 AM</p>
                                        <h5>You</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="img">
                                <img src="./assets//images/chatProfile/cp2.png" alt="Profile Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- chatbox container  -->

    </div>
</section>


<?php include 'inc/footer.php' ?>