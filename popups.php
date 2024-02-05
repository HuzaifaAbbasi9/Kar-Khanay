<div class="page_popup">
    <div class="page_popup_overlay"></div>
    <div id="resetPopupPage" class="page_popup_wrapper">
        <form class="page_popup_wrapperTop">
            <h2>Reset Password</h2>
            <p class="main_para">Please enter your email address and we'll
                send you a link to reset your password.</p>
            <div class="form-group mt-3">
                <label for="uname1" class="d-none">Email</label>
                <input class="form-control" id="uname1" placeholder="Enter your email" type="text">
            </div>
            <button class="main_btn" type="button">Submit</button>
        </form>
        <div class="reset_popup_wrapperBottom account_form_footer py-3">
            <p class="main_para"><a class="close_popup" href="#">Back to Sign in</a></p>
        </div>
    </div>
    <div id="newAddressPopup" class="page_popup_wrapper">
        <form class="page_popup_wrapperTop">
            <h3 class="d-flex align-items-center">New Address
                <button class="ml-auto close_popup"><i class="fa-solid fa-xmark"></i></button>
            </h3>
            <div class="form-group mt-3">
                <label>Adress</label>
                <input class="form-control" placeholder="Your Adress" type="text">
            </div>
            <div class="form-group">
                <label>Country</label>
                <input class="form-control" placeholder="Pakistan" type="text">
            </div>
            <div class="form-group">
                <label>Country</label>
                <div class="position-relative custom-select-outer">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Nothing slected</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>
            <div class="form-group">
                <label>City</label>
                <div class="position-relative custom-select-outer">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Nothing slected</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>
            <div class="form-group">
                <label>Postal Code</label>
                <input class="form-control" placeholder="postal code" type="text">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input class="form-control" placeholder="44444" type="text">
            </div>
            <button class="main_btn" type="button">Save</button>
        </form>
    </div>
    <div id="DownloadOrderDetails" class="page_popup_wrapper">
        <div class="page_popup_wrapperTop">
            <img src="images/thank-you-img.png" class="thank_you_top_icon" alt="">
            <h3 class="heading my-3">Downloaded Successfully</h3>
            <button class="main_btn close_popup" type="button">OK</button>
        </div>
    </div>
    <div id="dashboardTableDelete" class="page_popup_wrapper">
        <button class="close_popup close_popup_arrow"><i class="fa-solid fa-xmark"></i></button>
        <p class="main_para mb-3">Are you sure you delete this?</p>
        <div class="d-flex align-items-center justify-content-center">
            <button class="close_popup main_btn bg-transparent color_green">Cancel</button>
            <button class="main_btn delete_dashboard_tableRow" type="button">Delete</button>
        </div>
    </div>
    <div id="createOffer" class="page_popup_wrapper">
        <h3 class="createOfferHeading">
            <i class="fa-solid fa-angle-left"></i>
            Create a single-payment offer
            <button class="close_popup ml-auto"><i class="fa-solid fa-xmark"></i></button>
        </h3>
        <div class="createOfferBody">
            <h4 class="Text">Womens Summer Lace Neckline Cold Shoulder Short Sleeve</h4>
            <div class="createOfferWrapper">
                <div class="createOfferWrapperImg">
                    <img src="images/dbcoi.png" alt="">
                </div>
                <div class="createOfferWrapperTextarea">
                    <form action="#" class="h-lg-100">
                        <div class="dashboard_chat_textarea h-lg-100">
                            <textarea maxlength="1500"
                                      class="form-control color_green h-lg-100 chatTextBox"
                                      placeholder="Describe your offer"></textarea>
                            <div class="dashboard_chat_textareaProp">
                                <p class="main_para color_green"><span class="chatLen">0</span>/1500</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <h4 class="Text mt-4">Set up a offer</h4>
            <p class="main_para">Define the terms of your offer</p>
            <form class="defineOfferTOS mt-lg-4 mt-3">
                <div class="form-group mb-0">
                    <label for="example1">Quantity</label>
                    <input type="text" class="form-control" id="example1" placeholder="Quantity"/>
                </div>
                <div class="form-group mb-0">
                    <label for="example1">Price <small>(per piece)</small></label>
                    <input type="text" class="form-control" id="example1" placeholder="Quantity"/>
                </div>
                <div class="form-group mb-0">
                    <label for="example1">Duration</label>
                    <select class="form-control">
                        <option>Days</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button class="main_btn send_offer_btn">Send Offer</button>
            </form>
        </div>
    </div>
    <div id="createTicket" class="page_popup_wrapper">
        <form class="page_popup_wrapperTop">
            <h3 class="d-flex align-items-center">Create a Ticket
                <button class="ml-auto close_popup"><i class="fa-solid fa-xmark"></i></button>
            </h3>
            <div class="form-group mt-3">
                <label>Subject</label>
                <input class="form-control" placeholder="Subject" type="text">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group mt-3">
                <label>Photo</label>
                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    </div>
                </div>
            </div>
            <div class="createTicketBtns">
                <button class="close_popup main_btn bg-transparent color_green">Cancel</button>
                <button class="main_btn delete_dashboard_tableRow" type="button">Send Ticket</button>
            </div>
        </form>
    </div>
</div>