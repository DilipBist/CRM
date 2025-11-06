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
        <div class="chat_box_container pl_pr">
            <div class="chat_box_left">
                <h2>Chats</h2>

                <div class="chat_profile_search_container">
                    <input type="text" placeholder="Search For Contacts or Messages">
                </div>

                <h3 class="c_heaidng">All Chats</h3>

                <!-- chat profiles  -->
                <div class="all_Chat_profiles_list_container d-flex flex-column gap-2">
                    <?php foreach ($chatProfiles as $chat): ?>
                        <div class="chat_profile d-flex gap-2" data-chat="<?= htmlspecialchars($chat['id']) ?>">
                            <div class="img <?= $chat['status'] === 'online' ? 'active' : '' ?>">
                                <img src="<?= htmlspecialchars($chat['image']) ?>" alt="<?= htmlspecialchars($chat['name']) ?>">
                                <?php if ($chat['status'] === 'online'): ?>
                                    <div class="active_dot"></div>
                                <?php endif; ?>
                            </div>

                            <div class="right_part w-100">
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <div class="name"><?= htmlspecialchars($chat['name']) ?></div>
                                    <?php if (!empty($chat['time'])): ?>
                                        <div class="time"><?= htmlspecialchars($chat['time']) ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="msg_container d-flex justify-content-between gap-2 mt-1">
                                    <?php if (!empty($chat['type']) && $chat['type'] === 'call_missed'): ?>
                                        <div class="call_missed"><?= htmlspecialchars($chat['message']) ?></div>
                                    <?php elseif (!empty($chat['type']) && $chat['type'] === 'incoming_call'): ?>
                                        <div class="incomming_call"><?= htmlspecialchars($chat['message']) ?></div>
                                    <?php else: ?>
                                        <div class="msg"><?= htmlspecialchars($chat['message']) ?></div>
                                    <?php endif; ?>

                                    <?php if (!empty($chat['unread'])): ?>
                                        <div class="msg_num"><?= htmlspecialchars($chat['unread']) ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- chat profiles  -->

            </div>

            <!-- chat box design  -->
            <div class="chat_profile_verlay"></div>
            <?php foreach ($chatConversations as $chatId => $chat): ?>
                <div class="chat_box_right" id="<?= htmlspecialchars($chatId) ?>">
                    <div class="top_profile_bar">
                        <div class="chat_profile d-flex gap-2 position-relative">
                            <div class="img active">
                                <img src="<?= htmlspecialchars($chat['image']) ?>" alt="Profile Image">
                                <div class="active_dot"></div>
                            </div>
                            <div class="right_part w-100">
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <div class="name"><?= htmlspecialchars($chat['name']) ?></div>
                                </div>
                                <div class="msg_container">
                                    <div class="msg"><?= htmlspecialchars($chat['status']) ?></div>
                                </div>
                            </div>

                            <div class="closeChatProfileBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M9.99935 1.66406C5.40768 1.66406 1.66602 5.40573 1.66602 9.9974C1.66602 14.5891 5.40768 18.3307 9.99935 18.3307C14.591 18.3307 18.3327 14.5891 18.3327 9.9974C18.3327 5.40573 14.591 1.66406 9.99935 1.66406ZM12.7993 11.9141C13.041 12.1557 13.041 12.5557 12.7993 12.7974C12.6743 12.9224 12.516 12.9807 12.3577 12.9807C12.1993 12.9807 12.041 12.9224 11.916 12.7974L9.99935 10.8807L8.08268 12.7974C7.95768 12.9224 7.79935 12.9807 7.64102 12.9807C7.48268 12.9807 7.32435 12.9224 7.19935 12.7974C6.95768 12.5557 6.95768 12.1557 7.19935 11.9141L9.11602 9.9974L7.19935 8.08073C6.95768 7.83906 6.95768 7.43906 7.19935 7.1974C7.44102 6.95573 7.84102 6.95573 8.08268 7.1974L9.99935 9.11406L11.916 7.1974C12.1577 6.95573 12.5577 6.95573 12.7993 7.1974C13.041 7.43906 13.041 7.83906 12.7993 8.08073L10.8827 9.9974L12.7993 11.9141Z" fill="#FF0000" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="right_chat_content_wrapper">
                        <div class="content d-flex flex-column gap-3">
                            <?php foreach ($chat['messages'] as $message): ?>
                                <?php if ($message['side'] === 'left'): ?>
                                    <div class="left_chat d-flex gap-2 align-items-end">
                                        <div class="img">
                                            <img src="<?= htmlspecialchars($chat['image']) ?>" alt="Profile Image">
                                        </div>
                                        <div class="d-flex flex-column gap-2">
                                            <div class="chat_content">
                                                <p><?= htmlspecialchars($message['text']) ?></p>
                                                <div class="messager_name d-flex align-items-center gap-3">
                                                    <h5><?= htmlspecialchars($message['from']) ?></h5>
                                                    <p><?= htmlspecialchars($message['time']) ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="right_chat d-flex gap-2 align-items-end justify-content-end">
                                        <div class="d-flex flex-column gap-2 align-items-end">
                                            <div class="chat_content">
                                                <p><?= htmlspecialchars($message['text']) ?></p>
                                                <div class="messager_name d-flex align-items-center gap-3">
                                                    <p><?= htmlspecialchars($message['time']) ?></p>
                                                    <h5><?= htmlspecialchars($message['from']) ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="img">
                                            <img src="./assets//images/chatProfile/cp2.png" alt="Profile Image">
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- chat box design  -->

            <!-- chat msg type input  -->
            <div class="chat_box_msg_type_container">
                <div class="input_box">
                    <input type="text" placeholder="Type Your Message">
                    <div class="mic_Svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M9.99935 12.9141C11.841 12.9141 13.3327 11.4224 13.3327 9.58073V4.9974C13.3327 3.15573 11.841 1.66406 9.99935 1.66406C8.15768 1.66406 6.66602 3.15573 6.66602 4.9974V9.58073C6.66602 11.4224 8.15768 12.9141 9.99935 12.9141Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.625 8.03906V9.45573C3.625 12.9724 6.48333 15.8307 10 15.8307C13.5167 15.8307 16.375 12.9724 16.375 9.45573V8.03906" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.8418 5.35469C9.5918 5.07969 10.4085 5.07969 11.1585 5.35469" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.33398 7.12656C9.77565 7.0099 10.234 7.0099 10.6757 7.12656" stroke="#848484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 15.8359V18.3359" stroke="#848484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div class="input_Extra_Feilds">
                        <div class="emoj">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.5 14.5C16.5 14.5 15 16.5 12 16.5C9 16.5 7.5 14.5 7.5 14.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.5 9C15.3674 9 15.2402 8.94732 15.1464 8.85355C15.0527 8.75979 15 8.63261 15 8.5C15 8.36739 15.0527 8.24021 15.1464 8.14645C15.2402 8.05268 15.3674 8 15.5 8C15.6326 8 15.7598 8.05268 15.8536 8.14645C15.9473 8.24021 16 8.36739 16 8.5C16 8.63261 15.9473 8.75979 15.8536 8.85355C15.7598 8.94732 15.6326 9 15.5 9ZM8.5 9C8.36739 9 8.24021 8.94732 8.14645 8.85355C8.05268 8.75979 8 8.63261 8 8.5C8 8.36739 8.05268 8.24021 8.14645 8.14645C8.24021 8.05268 8.36739 8 8.5 8C8.63261 8 8.75979 8.05268 8.85355 8.14645C8.94732 8.24021 9 8.36739 9 8.5C9 8.63261 8.94732 8.75979 8.85355 8.85355C8.75979 8.94732 8.63261 9 8.5 9Z" fill="black" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="file_add">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M5.00067 20.5807C4.50161 20.5807 4.08525 20.4139 3.75158 20.0802C3.41792 19.7466 3.25072 19.3298 3.25 18.8301V7.16473C3.25 6.66567 3.41719 6.24931 3.75158 5.91565C4.08597 5.58198 4.50197 5.41478 4.99958 5.41406H10.3957L12.5623 7.58073H21.0004C21.4988 7.58073 21.9151 7.74792 22.2495 8.08231C22.5839 8.4167 22.7507 8.83306 22.75 9.3314V18.8311C22.75 19.3295 22.5832 19.7458 22.2495 20.0802C21.9158 20.4146 21.4995 20.5815 21.0004 20.5807H5.00067ZM5.00067 19.4974H21.0004C21.1947 19.4974 21.3543 19.4349 21.4792 19.31C21.6042 19.185 21.6667 19.0254 21.6667 18.8311V9.33031C21.6667 9.13603 21.6042 8.97642 21.4792 8.85148C21.3543 8.72654 21.1947 8.66406 21.0004 8.66406H12.1279L9.96125 6.4974H4.99958C4.80531 6.4974 4.64569 6.55987 4.52075 6.68481C4.39581 6.80976 4.33333 6.96973 4.33333 7.16473V18.8311C4.33333 19.0254 4.39581 19.185 4.52075 19.31C4.64569 19.4349 4.80567 19.4974 5.00067 19.4974Z" fill="black" />
                            </svg>
                        </div>
                        <div class="dot">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="14" viewBox="0 0 4 14" fill="none">
                                <path d="M3.5 6.75C3.5 7.09612 3.39736 7.43446 3.20507 7.72225C3.01278 8.01003 2.73947 8.23434 2.4197 8.36679C2.09993 8.49924 1.74806 8.5339 1.40859 8.46638C1.06913 8.39885 0.757306 8.23218 0.512564 7.98744C0.267822 7.7427 0.101151 7.43088 0.0336265 7.09141C-0.0338976 6.75194 0.000758246 6.40008 0.133212 6.08031C0.265665 5.76053 0.489967 5.48722 0.777753 5.29493C1.06554 5.10264 1.40388 5 1.75 5C2.21413 5 2.65925 5.18438 2.98744 5.51256C3.31563 5.84075 3.5 6.28587 3.5 6.75ZM1.75 3.5C2.09612 3.5 2.43446 3.39737 2.72225 3.20507C3.01004 3.01278 3.23434 2.73947 3.36679 2.4197C3.49924 2.09993 3.5339 1.74806 3.46638 1.40859C3.39885 1.06913 3.23218 0.757306 2.98744 0.512564C2.7427 0.267822 2.43088 0.101151 2.09141 0.0336265C1.75194 -0.0338976 1.40008 0.000758246 1.08031 0.133212C0.760534 0.265665 0.487221 0.489967 0.294929 0.777753C0.102637 1.06554 9.42654e-07 1.40388 9.42654e-07 1.75C9.42654e-07 2.21413 0.184376 2.65925 0.512564 2.98744C0.840753 3.31563 1.28587 3.5 1.75 3.5ZM1.75 10C1.40388 10 1.06554 10.1026 0.777753 10.2949C0.489967 10.4872 0.265665 10.7605 0.133212 11.0803C0.000758246 11.4001 -0.0338976 11.7519 0.0336265 12.0914C0.101151 12.4309 0.267822 12.7427 0.512564 12.9874C0.757306 13.2322 1.06913 13.3989 1.40859 13.4664C1.74806 13.5339 2.09993 13.4992 2.4197 13.3668C2.73947 13.2343 3.01278 13.01 3.20507 12.7222C3.39736 12.4345 3.5 12.0961 3.5 11.75C3.5 11.2859 3.31563 10.8408 2.98744 10.5126C2.65925 10.1844 2.21413 10 1.75 10Z" fill="black" />
                            </svg>
                        </div>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M6.16641 5.26289L13.2414 2.90456C16.4164 1.84622 18.1414 3.57956 17.0914 6.75456L14.7331 13.8296C13.1497 18.5879 10.5497 18.5879 8.96641 13.8296L8.26641 11.7296L6.16641 11.0296C1.40807 9.44622 1.40807 6.85456 6.16641 5.26289Z" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.42578 11.3745L11.4091 8.38281" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- chatbox container  -->

    </div>
</section>


<?php include 'inc/footer.php' ?>