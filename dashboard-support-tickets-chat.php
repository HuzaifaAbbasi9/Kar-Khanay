<?php include 'header.php' ?>
<link rel="stylesheet" href="assets/css/dashboard.css">
<main>
    <section class="dashboard_main custom-container section_not_home pt-lg-5">
        <?php include 'dashboard-nav.php' ?>
        <div class="row custom-row-gap pt-lg-5 pt-4">
            <div class="col-lg-8">
                <div class="dashboardContent h-auto left">
                    <div class="dashboard_conversations_main">
                        <div class="dashboard_conversations_chat">
                            <div class="dashboard_conversations_chatLeft">
                                <div class="conversations_chatProfile">m</div>
                                <div class="chatLine"></div>
                            </div>
                            <div class="dashboard_conversations_chatRight">
                                <div class="dashboard_conversations_chatRightItem">
                                    <h4 class="main_para">
                                        <span class="color_green">Mr.mount </span>
                                        sent you a message <i class="ml-2">Jan 30, 2:41 PM</i></h4>
                                    <p class="main_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        <button class="chat_attachment"><i class="fa-solid fa-arrow-down"></i>
                                            banner.png
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard_conversations_chat">
                            <div class="dashboard_conversations_chatLeft">
                                <div class="conversations_chatProfile"><img src="images/hnpp.png" alt=""></div>
                                <div class="chatLine"></div>
                            </div>
                            <div class="dashboard_conversations_chatRight">
                                <div class="dashboard_conversations_chatRightItem">
                                    <h4 class="main_para">
                                        <span class="color_green">Mr.mount </span>
                                        sent you a message <i class="ml-2">Jan 30, 2:41 PM</i></h4>
                                    <p class="main_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        <button class="chat_attachment"><i class="fa-solid fa-arrow-down"></i>
                                            banner.png
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard_conversations_chat">
                            <div class="dashboard_conversations_chatLeft">
                                <div class="conversations_chatProfile">m</div>
                                <div class="chatLine">

                                </div>
                            </div>
                            <div class="dashboard_conversations_chatRight">
                                <div class="dashboard_conversations_chatRightItem">
                                    <h4 class="main_para">
                                        <span class="color_green">Mr.mount </span>
                                        sent you a message <i class="ml-2">Jan 30, 2:41 PM</i></h4>
                                    <p class="main_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        <button class="chat_attachment"><i class="fa-solid fa-arrow-down"></i>
                                            banner.png
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard_conversations_chat">
                            <div class="dashboard_conversations_chatLeft">
                                <div class="conversations_chatProfile"><img src="images/hnpp.png" alt=""></div>
                                <div class="chatLine"></div>
                            </div>
                            <div class="dashboard_conversations_chatRight">
                                <div class="dashboard_conversations_chatRightItem">
                                    <h4 class="main_para">
                                        <span class="color_green">Mr.mount </span>
                                        sent you a message <i class="ml-2">Jan 30, 2:41 PM</i></h4>
                                    <p class="main_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard_conversations_chat">
                            <div class="dashboard_conversations_chatLeft">
                                <div class="conversations_chatProfile"><img src="images/hnpp.png" alt=""></div>
                            </div>
                            <div class="dashboard_conversations_chatRight">
                                <div class="dashboard_conversations_chatRightItem">
                                    <h4 class="main_para border-bottom-0 d-flex">
                                        <span class="color_green">Logan Paul</span>
                                        <div class="dashboard_user_status">
                                            <span>Local time: 11:40 pm</span>
                                            <span class="pr-0">Buyer is Offline</span>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <form action="#">
                            <div class="dashboard_chat_textarea">
                                <label for="chatTextBox" class="d-noen"></label>
                                <textarea maxlength="2500" id="chatTextBox" rows="8" cols="5"
                                          class="form-control color_green chatTextBox"
                                          placeholder="Type your message here"></textarea>
                                <div class="dashboard_chat_textareaProp">
                                    <p class="main_para color_green"><span class="chatLen">0</span>/2500</p>
                                    <div>
                                        <label for="file" class="mb-0">
                                            <input type="file" id="file" class="d-none">
                                            <img src="images/infi.png" alt="">
                                            <span></span>
                                        </label>
                                    </div>
                                    <img src="images/face-smile-emoji.png" alt="">
                                </div>
                            </div>
                            <div class="mt-3 dashboard_chat_textarea d-flex align-items-center justify-content-end">
                                <button type="button" class="main_btn mr-sm-3">Send</button>
                                <button type="button" class="main_btn main_btn_outline">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="dashboardWrapperProfile">
                    <img src="images/dashboardWrapperProfile.png" alt="">
                    <div class="dashboardWrapperProfileText">
                        <h5>Logan Paul</h5>
                        <h5>customer@example.com</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    $(document).ready(function () {
        $('.dashboard_navigationLink[href*="dashboard-support-tickets"]').addClass('active');
    })
</script>
<?php include 'footer.php' ?>
