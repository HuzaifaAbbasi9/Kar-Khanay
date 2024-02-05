<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kar-Khanay</title>
    <link rel="icon" type="image/x-icon" href="images/fav-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="assets/css/common.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script src=" assets/js/jquery.min.js"></script>
</head>
<body>
<div id="preloader">
    <div id="loader"></div>
</div>
<?php include 'popups.php' ?>
<header>
    <div class="header-top custom-container">
        <a href="index.php">
            <img src="images/logo.png" class="header-logo" alt="">
        </a>
        <div class="input-group hide-on-lg">
            <input type="text" class="form-control" placeholder="What service are you looking for today? "
                   aria-label="Recipient's username"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-header" type="button">
                    <svg id="search-svgrepo-com" xmlns="http://www.w3.org/2000/svg" width="22.254" height="22.235"
                         viewBox="0 0 22.254 22.235">
                        <g id="Group_1" data-name="Group 1">
                            <path id="Path_1" data-name="Path 1"
                                  d="M21.973,20.851l-6.385-6.389A8.625,8.625,0,0,0,17.6,8.915,8.8,8.8,0,0,0,0,8.92a8.811,8.811,0,0,0,14.261,6.827l6.408,6.408a.922.922,0,1,0,1.3-1.3ZM1.87,8.92a6.928,6.928,0,0,1,13.855,0,6.928,6.928,0,0,1-13.855,0Z"
                                  transform="translate(0 -0.2)" fill="#fff"/>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
        <ul class="m-0 p-0 header-top-list header-top hide-on-lg">
            <li>
                <a href="#" class="hide-on-lg headerMini_popup_link header-top-icon ml-lg-auto">
                    <span class="count">1</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50.103" height="40.13" viewBox="0 0 50.103 40.13">
                        <g id="message" transform="translate(-0.941 -4.05)">
                            <path id="Path_63" data-name="Path 63"
                                  d="M41.91,42.63H10.075A6.982,6.982,0,0,1,3,35.788V11.842A6.982,6.982,0,0,1,10.075,5H41.91a6.982,6.982,0,0,1,7.075,6.842V35.788A6.982,6.982,0,0,1,41.91,42.63Z"
                                  transform="translate(0 0.3)" fill="none" stroke="currentColor" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Path_64" data-name="Path 64" d="M3,10,25.992,23.86,48.985,10"
                                  transform="translate(0 3.669)" fill="none" stroke="currentColor"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                        </g>
                    </svg>
                </a>
                <div class="header-mini-cart header-inbox-cart">
                    <div class="header-mini-cart-header mb-0 d-flex align-items-center">
                        <h5 class="inbox-icon-outer"><img src="images/header-inbox-icon.png" class="inbox-icon" alt="">
                            inbox (0)</h5>
                    </div>
                    <div class="header-mini-cart-body">
                        <a href="dashboard-conversations-inbox.php" class="header-mini-cart-item">
                            <img src="images/inbox-profile-img.png" class="header-mini-cart-item-img" alt="">
                            <div class="header-mini-cart-item-text">
                                <h5>Logan Paul</h5>
                                <p class="main_para">10:20:04 19-04-2022</p>
                            </div>
                            <div class="header-mini-cart-item-remove">
                                <button>
                                    <img src="images/inbox-img.png" class="header-popup-inbox-icon" alt="">
                                </button>
                            </div>
                        </a>
                        <a href="dashboard-conversations-inbox.php" class="header-mini-cart-item">
                            <img src="images/inbox-profile-img-1.png" class="header-mini-cart-item-img" alt="">
                            <div class="header-mini-cart-item-text">
                                <h5>Filon Asset Store</h5>
                                <p class="main_para">10:20:04 19-04-2022</p>
                            </div>
                            <div class="header-mini-cart-item-remove">
                                <button>
                                    <img src="images/inbox-img.png" class="header-popup-inbox-icon" alt="">
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="header-mini-cart-actions">
                        <a href="dashboard-conversations.php">See all your inbox</a>
                    </div>
                </div>
                <!--                <div class="header-mini-cart header-inbox-cart empty active">-->
                <!--                    <div class="header-mini-cart-header mb-0 d-flex align-items-center">-->
                <!--                        <h5 class="inbox-icon-outer"><img src="images/header-inbox-icon.png" class="inbox-icon" alt="">-->
                <!--                            inbox (0)</h5>-->
                <!--                    </div>-->
                <!--                    <div class="header-mini-cart-body header-inbox-empty">-->
                <!--                        <img src="images/no-notification-icon.png" alt="">-->
                <!--                        <h5 class="text-capitalize">No Notification</h5>-->
                <!--                        <p class="main_para">Browse our top selling products-->
                <!--                            or offer your product on Kar Khanay</p>-->
                <!--                    </div>-->
                <!--                    <div class="header-mini-cart-actions">-->
                <!--                        <a href="#">See all your inbox</a>-->
                <!--                    </div>-->
                <!--                </div>-->
            </li>
            <li>
                <a href="compare.php" class="hide-on-lg header-top-icon">
                    <span class="count">1</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="46.856" height="41" viewBox="0 0 46.856 41">
                        <g id="compare" transform="translate(-9.224 -11.536)">
                            <path id="Path_39" data-name="Path 39"
                                  d="M50.568,28.5c-.009-.016-.023-.026-.032-.041a1.326,1.326,0,0,0-.148-.19,1.37,1.37,0,0,0-.2-.225A1.421,1.421,0,0,0,50,27.926a1.394,1.394,0,0,0-.3-.142c-.028-.009-.048-.029-.076-.037a1.29,1.29,0,0,0-.149-.007,1.346,1.346,0,0,0-.3-.015,1.393,1.393,0,0,0-.293.051,1.149,1.149,0,0,0-.12.022l-8.268,3.086a1.464,1.464,0,1,0,1.025,2.742l5.4-2.015a17.059,17.059,0,0,1-32.339-2.643,1.465,1.465,0,0,0-2.839.723A19.984,19.984,0,0,0,49.542,32.9L52.167,38a1.461,1.461,0,0,0,1.3.794,1.446,1.446,0,0,0,.669-.163,1.464,1.464,0,0,0,.633-1.972Z"
                                  transform="translate(1.145 7.513)" fill="currentColor"/>
                            <path id="Path_40" data-name="Path 40"
                                  d="M32.335,14.464A17.143,17.143,0,0,1,48.732,26.8a1.464,1.464,0,1,0,2.8-.852,19.968,19.968,0,0,0-37.126-3.2l-2.4-5.034a1.464,1.464,0,0,0-2.644,1.258l3.839,8.059c.006.013.016.022.022.034.018.034.042.061.063.1a1.435,1.435,0,0,0,.252.309c.037.034.072.063.111.094a1.466,1.466,0,0,0,.416.224c.012,0,.02.015.034.018s.007,0,.01,0a1.456,1.456,0,0,0,.414.061h0a1.453,1.453,0,0,0,.385-.053l8.343-2.3a1.464,1.464,0,1,0-.779-2.821l-5.535,1.527A17.048,17.048,0,0,1,32.335,14.464Z"
                                  transform="translate(0 0)" fill="currentColor"/>
                        </g>
                    </svg>
                </a>
            </li>
            <li>
                <a href="wishlist.php" class="hide-on-lg header-top-icon">
                    <span class="count">1</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="44.755" height="40.5" viewBox="0 0 44.755 40.5">
                        <path id="heart-svgrepo-com"
                              d="M39.952,12.876A11.77,11.77,0,0,0,32.7,10.334c-3.284,0-6.83,1.4-10.319,4.066-3.488-2.665-7.035-4.066-10.319-4.066A11.77,11.77,0,0,0,4.8,12.876,11.076,11.076,0,0,0,0,22.132c.174,12.581,20.6,27.427,21.474,28.053l.9.649.9-.649c.87-.626,21.3-15.471,21.474-28.053A11.076,11.076,0,0,0,39.952,12.876ZM31.668,38.883A94.58,94.58,0,0,1,22.378,47a94.551,94.551,0,0,1-9.29-8.122c-6.48-6.518-9.937-12.325-10-16.795a8.04,8.04,0,0,1,3.586-6.757,8.749,8.749,0,0,1,5.384-1.91c3.615,0,7.069,2.251,9.329,4.14l.99.827.99-.827c2.26-1.889,5.713-4.14,9.329-4.14a8.749,8.749,0,0,1,5.384,1.91,8.04,8.04,0,0,1,3.586,6.757C41.605,26.558,38.148,32.365,31.668,38.883Z"
                              transform="translate(0 -10.334)" fill="currentColor"/>
                    </svg>

                </a>
            </li>
            <li>
                <a href="#" class="hide-on-lg header-top-icon headerMini_popup_link headerMini_cart">
                    <span class="count">1</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35.586" height="41.5" viewBox="0 0 35.586 41.5">
                        <g id="Shops" transform="translate(1.005 -2)">
                            <path id="Path_34" data-name="Path 34"
                                  d="M39.455,34.726l-3.32-19.268a7.011,7.011,0,0,0-6.729-6.047H29.2a7.411,7.411,0,1,0-14.821,0H14.17a7.011,7.011,0,0,0-6.729,6.047L4.121,34.726A7.752,7.752,0,0,0,5.8,41.084,6.6,6.6,0,0,0,10.85,43.5H32.726a6.6,6.6,0,0,0,5.054-2.416A7.752,7.752,0,0,0,39.455,34.726ZM21.788,4.964a4.446,4.446,0,0,1,4.446,4.446H17.342a4.446,4.446,0,0,1,4.446-4.446ZM35.513,39.172a3.631,3.631,0,0,1-2.786,1.364H10.85a3.631,3.631,0,0,1-2.786-1.364A4.758,4.758,0,0,1,7.041,35.23l3.32-19.268a4.061,4.061,0,0,1,3.809-3.587H29.406a4.061,4.061,0,0,1,3.809,3.587l3.32,19.268a4.758,4.758,0,0,1-1.023,3.943Z"
                                  transform="translate(-5)" fill="currentColor"/>
                        </g>
                    </svg>
                </a>
                <div class="header-mini-cart">
                    <div class="header-mini-cart-header mb-0"><h4>Your cart</h4></div>
                    <div class="header-mini-cart-body">
                        <div class="header-mini-cart-item">
                            <img src="images/mini-cart-item-img.png" class="header-mini-cart-item-img" alt="">
                            <div class="header-mini-cart-item-text">
                                <p class="main_para mb-2">Womens Summer Lace Neckline Cold Shoulder Short Sleeve</p>
                                <p class="main_para">100 x Rs 250</p>
                            </div>
                            <div class="header-mini-cart-item-remove">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.707" height="10.707"
                                         viewBox="0 0 10.707 10.707">
                                        <g id="cross-icon" transform="translate(-9.016 -9.249)">
                                            <line id="Line_166" data-name="Line 166" x2="10" y2="10"
                                                  transform="translate(9.369 9.602)" fill="none" stroke="#010101"
                                                  stroke-miterlimit="10" stroke-width="1"/>
                                            <line id="Line_167" data-name="Line 167" y1="10" x2="10"
                                                  transform="translate(9.369 9.602)" fill="none" stroke="#010101"
                                                  stroke-miterlimit="10" stroke-width="1"/>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="header-mini-cart-sub-total">
                        <h5 class="mb-0">Sub-Total</h5>
                        <h5 class="mb-0"><span>25000 PKR</span></h5>
                    </div>
                    <div class="header-mini-cart-actions">
                        <a href="cart.php" class="main_btn">View Cart</a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="bf_header_icons">
            <a class="header_login_link" href="login.php">Login</a>
            <div></div>
            <a class="header_signup_link" href="signup.php">Signup</a>
            <a href="dashboard.php" class="header_nav_profile">
                <img src="images/hnpp.png" alt="">
            </a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="navbar-toggler-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="show-on-lg mobile-nav-icon">
            <a href="dashboard-conversations.php" class="header-top-icon">
                <span class="count">1</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="50.103" height="40.13" viewBox="0 0 50.103 40.13">
                    <g id="message" transform="translate(-0.941 -4.05)">
                        <path id="Path_63" data-name="Path 63"
                              d="M41.91,42.63H10.075A6.982,6.982,0,0,1,3,35.788V11.842A6.982,6.982,0,0,1,10.075,5H41.91a6.982,6.982,0,0,1,7.075,6.842V35.788A6.982,6.982,0,0,1,41.91,42.63Z"
                              transform="translate(0 0.3)" fill="none" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.5"></path>
                        <path id="Path_64" data-name="Path 64" d="M3,10,25.992,23.86,48.985,10"
                              transform="translate(0 3.669)" fill="none" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></path>
                    </g>
                </svg>
            </a>
            <a href="compare.php" class="header-top-icon">
                <span class="count">1</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="46.856" height="41" viewBox="0 0 46.856 41">
                    <g id="compare" transform="translate(-9.224 -11.536)">
                        <path id="Path_39" data-name="Path 39"
                              d="M50.568,28.5c-.009-.016-.023-.026-.032-.041a1.326,1.326,0,0,0-.148-.19,1.37,1.37,0,0,0-.2-.225A1.421,1.421,0,0,0,50,27.926a1.394,1.394,0,0,0-.3-.142c-.028-.009-.048-.029-.076-.037a1.29,1.29,0,0,0-.149-.007,1.346,1.346,0,0,0-.3-.015,1.393,1.393,0,0,0-.293.051,1.149,1.149,0,0,0-.12.022l-8.268,3.086a1.464,1.464,0,1,0,1.025,2.742l5.4-2.015a17.059,17.059,0,0,1-32.339-2.643,1.465,1.465,0,0,0-2.839.723A19.984,19.984,0,0,0,49.542,32.9L52.167,38a1.461,1.461,0,0,0,1.3.794,1.446,1.446,0,0,0,.669-.163,1.464,1.464,0,0,0,.633-1.972Z"
                              transform="translate(1.145 7.513)" fill="currentColor"/>
                        <path id="Path_40" data-name="Path 40"
                              d="M32.335,14.464A17.143,17.143,0,0,1,48.732,26.8a1.464,1.464,0,1,0,2.8-.852,19.968,19.968,0,0,0-37.126-3.2l-2.4-5.034a1.464,1.464,0,0,0-2.644,1.258l3.839,8.059c.006.013.016.022.022.034.018.034.042.061.063.1a1.435,1.435,0,0,0,.252.309c.037.034.072.063.111.094a1.466,1.466,0,0,0,.416.224c.012,0,.02.015.034.018s.007,0,.01,0a1.456,1.456,0,0,0,.414.061h0a1.453,1.453,0,0,0,.385-.053l8.343-2.3a1.464,1.464,0,1,0-.779-2.821l-5.535,1.527A17.048,17.048,0,0,1,32.335,14.464Z"
                              transform="translate(0 0)" fill="currentColor"/>
                    </g>
                </svg>
            </a>
            <a href="wishlist.php" class="header-top-icon">
                <span class="count">1</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="44.755" height="40.5" viewBox="0 0 44.755 40.5">
                    <path id="heart-svgrepo-com"
                          d="M39.952,12.876A11.77,11.77,0,0,0,32.7,10.334c-3.284,0-6.83,1.4-10.319,4.066-3.488-2.665-7.035-4.066-10.319-4.066A11.77,11.77,0,0,0,4.8,12.876,11.076,11.076,0,0,0,0,22.132c.174,12.581,20.6,27.427,21.474,28.053l.9.649.9-.649c.87-.626,21.3-15.471,21.474-28.053A11.076,11.076,0,0,0,39.952,12.876ZM31.668,38.883A94.58,94.58,0,0,1,22.378,47a94.551,94.551,0,0,1-9.29-8.122c-6.48-6.518-9.937-12.325-10-16.795a8.04,8.04,0,0,1,3.586-6.757,8.749,8.749,0,0,1,5.384-1.91c3.615,0,7.069,2.251,9.329,4.14l.99.827.99-.827c2.26-1.889,5.713-4.14,9.329-4.14a8.749,8.749,0,0,1,5.384,1.91,8.04,8.04,0,0,1,3.586,6.757C41.605,26.558,38.148,32.365,31.668,38.883Z"
                          transform="translate(0 -10.334)" fill="currentColor"/>
                </svg>

            </a>
            <a href="cart.php" class="header-top-icon">
                <span class="count">1</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="35.586" height="41.5" viewBox="0 0 35.586 41.5">
                    <g id="Shops" transform="translate(1.005 -2)">
                        <path id="Path_34" data-name="Path 34"
                              d="M39.455,34.726l-3.32-19.268a7.011,7.011,0,0,0-6.729-6.047H29.2a7.411,7.411,0,1,0-14.821,0H14.17a7.011,7.011,0,0,0-6.729,6.047L4.121,34.726A7.752,7.752,0,0,0,5.8,41.084,6.6,6.6,0,0,0,10.85,43.5H32.726a6.6,6.6,0,0,0,5.054-2.416A7.752,7.752,0,0,0,39.455,34.726ZM21.788,4.964a4.446,4.446,0,0,1,4.446,4.446H17.342a4.446,4.446,0,0,1,4.446-4.446ZM35.513,39.172a3.631,3.631,0,0,1-2.786,1.364H10.85a3.631,3.631,0,0,1-2.786-1.364A4.758,4.758,0,0,1,7.041,35.23l3.32-19.268a4.061,4.061,0,0,1,3.809-3.587H29.406a4.061,4.061,0,0,1,3.809,3.587l3.32,19.268a4.758,4.758,0,0,1-1.023,3.943Z"
                              transform="translate(-5)" fill="#74767e"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="collapse navbar-collapse  flex-column" id="navbar">
            <ul class="navbar-nav w-100 justify-content-center px-lg-3">
                <li class="nav-item"><a class="nav-link active" href="index.php"><span>Home</span></a></li>
                <li class="nav-item"><a class="nav-link" href="flash-sale.php"><span>Flash Sale</span></a></li>
                <li class="nav-item"><a class="nav-link" href="blogs.php"><span>Blogs</span></a></li>
                <li class="nav-item"><a class="nav-link" href="brands.php"><span>All Brands</span></a></li>
                <li class="nav-item"><a class="nav-link" href="categories.php"><span>All Categories</span></a></li>
                <li class="nav-item"><a class="nav-link" href="sellers.php"><span>All Seller</span></a></li>
                <li class="nav-item"><a class="nav-link" href="become-seller.php"><span>Become a Seller</span></a></li>
            </ul>
        </div>
    </nav>
</header>