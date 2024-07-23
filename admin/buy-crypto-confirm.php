<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rockie | Crypto Exchange HTML Template</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="app/dist/app.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- End Style CSS -->

    <link rel="shortcut icon" href="assets/images/logo/favicon.png" />
    <link
      rel="apple-touch-icon-precomposed"
      href="assets/images/logo/favicon.png"
    />
  </head>
  <body class="body header-fixed">
    <!-- Header -->
    <header id="header_main" class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between">
              <div class="header__left">
                <div class="logo">
                  <a class="light" href="index.html">
                    <img
                      id="site-logo"
                      src="assets/images/logo/logo.png"
                      alt=""
                      width="118"
                      height="32"
                      data-retina="assets/images/logo/logo@2x.png"
                      data-width="118"
                      data-height="32"
                    />
                  </a>
                  <a class="dark" href="index.html">
                    <img
                      src="assets/images/logo/logo-dark.png"
                      alt=""
                      width="118"
                      height="32"
                      data-retina="assets/images/logo/logo-dark@2x.png"
                      data-width="118"
                      data-height="32"
                    />
                  </a>
                </div>
                <div class="left__main">
                  <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                      <li class="menu-item-has-children">
                        <a href="#">Homepage </a>
                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="index.html">Home 01</a>
                          </li>
                          <li class="menu-item">
                            <a href="home-v2.html">Home 02</a>
                          </li>
                          <li class="menu-item">
                            <a href="home-v3.html">Home 03</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children current-menu-item">
                        <a href="#">Buy Crypto</a>

                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="buy-crypto-select.html"
                              >Buy Crypto Select</a
                            >
                          </li>
                          <li class="menu-item current-item">
                            <a href="buy-crypto-confirm.html"
                              >Buy Crypto Confirm</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="buy-crypto-details.html"
                              >Buy Crypto Details</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="markets.html">Markets </a>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">Sell Crypto</a>

                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="sell-crypto.html">Sell Select</a>
                          </li>
                          <li class="menu-item">
                            <a href="sell-crypto-amount.html"
                              >Sell Crypto Amount</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="sell-crypto-confirm.html"
                              >Sell Crypto Confirm</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="sell-crypto-details.html"
                              >Sell Crypto Details</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">Blog</a>

                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="blog-default.html">Blog Default</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-grid-v1.html">Blog Grid v1</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-grid-v2.html">Blog Grid v2</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-list.html">Blog List</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-details.html">Blog Details</a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item">
                        <a href="wallet.html"
                          >BITUSDT
                          <svg
                            class="s1"
                            width="8"
                            height="10"
                            viewBox="0 0 8 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M6.75979 3.20154C6.69318 3.13681 6.59973 3.10739 6.50828 3.12243C6.41666 3.13741 6.33754 3.19493 6.29504 3.27747C6.14887 3.56144 5.9632 3.82239 5.74477 4.05308C5.76654 3.88644 5.7775 3.7188 5.7775 3.55072C5.7775 3.2282 5.73428 2.8963 5.64898 2.56413C5.36855 1.4731 4.6332 0.550422 3.63154 0.0327073C3.54434 -0.0123512 3.44043 -0.0107692 3.35463 0.0369261C3.26883 0.0846409 3.21264 0.172121 3.20494 0.269973C3.12686 1.26146 2.61615 2.16349 1.80301 2.74536C1.79225 2.75312 1.78156 2.76097 1.77088 2.76878C1.74875 2.78497 1.72789 2.80029 1.7084 2.81314C1.70535 2.81517 1.70232 2.81724 1.69936 2.81937C1.18795 3.18552 0.765977 3.67361 0.479004 4.23101C0.187402 4.79798 0.0395508 5.4064 0.0395508 6.03931C0.0395508 6.36173 0.0827734 6.69362 0.168027 7.02585C0.61793 8.77697 2.19379 9.99997 4.00023 9.99997C6.18404 9.99997 7.96068 8.22322 7.96068 6.03931C7.96068 4.96236 7.5342 3.95454 6.75979 3.20154Z"
                              fill="#3772FF"
                            />
                          </svg>
                        </a>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#"> Pages </a>
                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="user-profile.html">User Profile</a>
                          </li>

                          <li class="menu-item">
                            <a href="login.html">Login</a>
                          </li>

                          <li class="menu-item">
                            <a href="register.html">Register</a>
                          </li>
                          <li class="menu-item">
                            <a href="contact.html">Contact</a>
                          </li>
                          <li class="menu-item"><a href="faq.html">FAQ</a></li>
                        </ul>
                      </li>
                    </ul>
                  </nav>
                  <!-- /#main-nav -->
                </div>
              </div>

              <div class="header__right">
                <div class="dropdown">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Assets
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <a class="dropdown-item" href="#">Binance Visa Card</a>
                    <a class="dropdown-item" href="#">Crypto Loans</a>
                    <a class="dropdown-item" href="#">Binance Pay</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton1"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Orders & Trades
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <a class="dropdown-item" href="#">Binance Convert</a>
                    <a class="dropdown-item" href="#">Spot</a>
                    <a class="dropdown-item" href="#">Margin</a>
                    <a class="dropdown-item" href="#">P2P</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton2"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    EN/USD
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton2"
                  >
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item language"
                      data-lang="en"
                    >
                      <img
                        src="assets/images/flags/us.jpg"
                        alt="user-image"
                        class="me-1"
                        height="12"
                      />
                      <span class="align-middle">English</span>
                    </a>

                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item language"
                      data-lang="sp"
                    >
                      <img
                        src="assets/images/flags/spain.jpg"
                        alt="user-image"
                        class="me-1"
                        height="12"
                      />
                      <span class="align-middle">Spanish</span>
                    </a>

                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item language"
                      data-lang="gr"
                    >
                      <img
                        src="assets/images/flags/germany.jpg"
                        alt="user-image"
                        class="me-1"
                        height="12"
                      />
                      <span class="align-middle">German</span>
                    </a>

                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item language"
                      data-lang="it"
                    >
                      <img
                        src="assets/images/flags/italy.jpg"
                        alt="user-image"
                        class="me-1"
                        height="12"
                      />
                      <span class="align-middle">Italian</span>
                    </a>

                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item language"
                      data-lang="ru"
                    >
                      <img
                        src="assets/images/flags/russia.jpg"
                        alt="user-image"
                        class="me-1"
                        height="12"
                      />
                      <span class="align-middle">Russian</span>
                    </a>
                  </div>
                </div>
                <div class="mode-switcher">
                  <a class="sun" href="#" onclick="switchTheme()">
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.99993 11.182C9.7572 11.182 11.1818 9.75745 11.1818 8.00018C11.1818 6.24291 9.7572 4.81836 7.99993 4.81836C6.24266 4.81836 4.81812 6.24291 4.81812 8.00018C4.81812 9.75745 6.24266 11.182 7.99993 11.182Z"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M8 1V2.27273"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M8 13.7271V14.9998"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M3.04956 3.04932L3.9532 3.95295"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M12.0469 12.0469L12.9505 12.9505"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M1 8H2.27273"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M13.7273 8H15"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M3.04956 12.9505L3.9532 12.0469"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M12.0469 3.95295L12.9505 3.04932"
                        stroke="#23262F"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>
                  <a href="#" class="moon" onclick="switchTheme()">
                    <svg
                      width="14"
                      height="14"
                      viewBox="0 0 14 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M13.0089 8.97241C12.7855 9.64616 12.4491 10.2807 12.0107 10.8477C11.277 11.7966 10.2883 12.5169 9.1602 12.9244C8.03209 13.3319 6.81126 13.4097 5.64056 13.1486C4.46987 12.8876 3.39772 12.2986 2.54959 11.4504C1.70145 10.6023 1.1124 9.53013 0.851363 8.35944C0.590325 7.18874 0.668097 5.96791 1.07558 4.8398C1.48306 3.71169 2.2034 2.72296 3.1523 1.9893C3.71928 1.55094 4.35384 1.21447 5.02759 0.991088C4.69163 1.84583 4.54862 2.77147 4.61793 3.7009C4.72758 5.17128 5.36134 6.55346 6.40394 7.59606C7.44654 8.63866 8.82873 9.27242 10.2991 9.38207C11.2285 9.45138 12.1542 9.30837 13.0089 8.97241Z"
                        stroke="white"
                        stroke-width="1.4"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>
                </div>
                <div class="dropdown notification">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton3"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <span class="icon-notification"></span>
                  </button>

                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton3"
                  >
                    <div class="dropdown-item">
                      <div class="media server-log">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-server"
                        >
                          <rect
                            x="2"
                            y="2"
                            width="20"
                            height="8"
                            rx="2"
                            ry="2"
                          ></rect>
                          <rect
                            x="2"
                            y="14"
                            width="20"
                            height="8"
                            rx="2"
                            ry="2"
                          ></rect>
                          <line x1="6" y1="6" x2="6" y2="6"></line>
                          <line x1="6" y1="18" x2="6" y2="18"></line>
                        </svg>
                        <div class="media-body">
                          <div class="data-info">
                            <h6 class="">Server Rebooted</h6>
                            <p class="">45 min ago</p>
                          </div>

                          <div class="icon-status">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-x"
                            >
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-item">
                      <div class="media">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-heart"
                        >
                          <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                          ></path>
                        </svg>
                        <div class="media-body">
                          <div class="data-info">
                            <h6 class="">Licence Expiring Soon</h6>
                            <p class="">8 hrs ago</p>
                          </div>

                          <div class="icon-status">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-x"
                            >
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-item">
                      <div class="media file-upload">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-file-text"
                        >
                          <path
                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                          ></path>
                          <polyline points="14 2 14 8 20 8"></polyline>
                          <line x1="16" y1="13" x2="8" y2="13"></line>
                          <line x1="16" y1="17" x2="8" y2="17"></line>
                          <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <div class="media-body">
                          <div class="data-info">
                            <h6 class="">Kelly Portfolio.pdf</h6>
                            <p class="">670 kb</p>
                          </div>

                          <div class="icon-status">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-check"
                            >
                              <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mobile-button"><span></span></div>
                <div class="wallet">
                  <a href="wallet.html"> Wallet </a>
                </div>
                <div class="dropdown user">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton4"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <img src="assets/images/avt/avt-01.jpg" alt="" />
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton4"
                  >
                    <a class="dropdown-item" href="#"
                      ><i class="bx bx-user font-size-16 align-middle me-1"></i>
                      <span>Profile</span></a
                    >
                    <a class="dropdown-item" href="#"
                      ><i
                        class="bx bx-wallet font-size-16 align-middle me-1"
                      ></i>
                      <span>My Wallet</span></a
                    >
                    <a class="dropdown-item d-block" href="#"
                      ><span class="badge bg-success float-end">11</span
                      ><i
                        class="bx bx-wrench font-size-16 align-middle me-1"
                      ></i>
                      <span>Settings</span></a
                    >
                    <a class="dropdown-item" href="#"
                      ><i
                        class="bx bx-lock-open font-size-16 align-middle me-1"
                      ></i>
                      <span>Lock screen</span></a
                    >
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="user-login.html"
                      ><i
                        class="bx bx-power-off font-size-16 align-middle me-1 text-danger"
                      ></i>
                      <span>Logout</span></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end Header -->

    <!-- PageTitle -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="heading">Buy Crypto</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Buy Crypto</p></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End PageTitle -->

    <section class="buy-crypto s1 flat-tabs">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <ul class="menu-tab">
              <li><h6 class="fs-16">Overview</h6></li>
              <li class="active"><h6 class="fs-16">Buy Crypto</h6></li>
              <li><h6 class="fs-16">Sell Crypto</h6></li>
            </ul>
          </div>
          <div class="col-md-9">
            <div class="content-tab">
              <div class="content-inner buy-crypto__main">
                <div class="top">
                  <ul class="top-list">
                    <li class="done">
                      <h6>
                        <span>
                          <svg
                            width="10"
                            height="8"
                            viewBox="0 0 10 8"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M1 3.99967L3.66667 6.66634L9 1.33301"
                              stroke="white"
                              stroke-width="2"
                              stroke-miterlimit="10"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg> </span
                        >Select currency
                      </h6>
                    </li>
                    <li class="active">
                      <h6><span></span>Confirm Payment</h6>
                    </li>
                    <li>
                      <h6><span></span>Complete Payment</h6>
                    </li>
                  </ul>
                </div>

                <div class="main info">
                  <h6>Confirm Information</h6>
                  <p class="desc">
                    You are about to Receive 1.356 BTC for Bitcloud bank
                  </p>

                  <ul class="list">
                    <li>
                      <div class="icon">
                        <svg
                          width="20"
                          height="20"
                          viewBox="0 0 20 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M15.8333 4.16667H4.16665C3.24617 4.16667 2.49998 4.91286 2.49998 5.83333V14.1667C2.49998 15.0871 3.24617 15.8333 4.16665 15.8333H15.8333C16.7538 15.8333 17.5 15.0871 17.5 14.1667V5.83333C17.5 4.91286 16.7538 4.16667 15.8333 4.16667ZM4.16665 2.5C2.3257 2.5 0.833313 3.99238 0.833313 5.83333V14.1667C0.833313 16.0076 2.3257 17.5 4.16665 17.5H15.8333C17.6743 17.5 19.1666 16.0076 19.1666 14.1667V5.83333C19.1666 3.99238 17.6743 2.5 15.8333 2.5H4.16665Z"
                            fill="white"
                          />
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M10.8333 9.99967C10.8333 7.69849 12.6988 5.83301 15 5.83301H18.3333C18.7935 5.83301 19.1666 6.2061 19.1666 6.66634C19.1666 7.12658 18.7935 7.49967 18.3333 7.49967H15C13.6193 7.49967 12.5 8.61896 12.5 9.99967C12.5 11.3804 13.6193 12.4997 15 12.4997H18.3333C18.7935 12.4997 19.1666 12.8728 19.1666 13.333C19.1666 13.7932 18.7935 14.1663 18.3333 14.1663H15C12.6988 14.1663 10.8333 12.3009 10.8333 9.99967Z"
                            fill="white"
                          />
                          <path
                            d="M15.8334 10.0003C15.8334 10.4606 15.4603 10.8337 15 10.8337C14.5398 10.8337 14.1667 10.4606 14.1667 10.0003C14.1667 9.54009 14.5398 9.16699 15 9.16699C15.4603 9.16699 15.8334 9.54009 15.8334 10.0003Z"
                            fill="white"
                          />
                        </svg>
                      </div>
                      <div class="content">
                        <p>Pay</p>
                        <h6 class="price">3.000.000 VND</h6>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <svg
                          width="20"
                          height="20"
                          viewBox="0 0 20 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M15.8333 4.16667H4.16665C3.24617 4.16667 2.49998 4.91286 2.49998 5.83333V14.1667C2.49998 15.0871 3.24617 15.8333 4.16665 15.8333H15.8333C16.7538 15.8333 17.5 15.0871 17.5 14.1667V5.83333C17.5 4.91286 16.7538 4.16667 15.8333 4.16667ZM4.16665 2.5C2.3257 2.5 0.833313 3.99238 0.833313 5.83333V14.1667C0.833313 16.0076 2.3257 17.5 4.16665 17.5H15.8333C17.6743 17.5 19.1666 16.0076 19.1666 14.1667V5.83333C19.1666 3.99238 17.6743 2.5 15.8333 2.5H4.16665Z"
                            fill="white"
                          />
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M10.8333 9.99967C10.8333 7.69849 12.6988 5.83301 15 5.83301H18.3333C18.7935 5.83301 19.1666 6.2061 19.1666 6.66634C19.1666 7.12658 18.7935 7.49967 18.3333 7.49967H15C13.6193 7.49967 12.5 8.61896 12.5 9.99967C12.5 11.3804 13.6193 12.4997 15 12.4997H18.3333C18.7935 12.4997 19.1666 12.8728 19.1666 13.333C19.1666 13.7932 18.7935 14.1663 18.3333 14.1663H15C12.6988 14.1663 10.8333 12.3009 10.8333 9.99967Z"
                            fill="white"
                          />
                          <path
                            d="M15.8334 10.0003C15.8334 10.4606 15.4603 10.8337 15 10.8337C14.5398 10.8337 14.1667 10.4606 14.1667 10.0003C14.1667 9.54009 14.5398 9.16699 15 9.16699C15.4603 9.16699 15.8334 9.54009 15.8334 10.0003Z"
                            fill="white"
                          />
                        </svg>
                      </div>
                      <div class="content">
                        <p>Get</p>
                        <h6 class="price">0.00207026 BTC</h6>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <svg
                          width="24"
                          height="18"
                          viewBox="0 0 24 18"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M15.5763 17.0837C20.1786 17.0837 23.9096 13.3527 23.9096 8.75032C23.9096 4.14795 20.1786 0.416992 15.5763 0.416992C12.0556 0.416992 9.04483 2.60027 7.82408 5.68678C7.23371 5.48653 6.60104 5.37793 5.943 5.37793C2.71059 5.37793 0.09021 7.99831 0.09021 11.2307C0.09021 14.4631 2.71059 17.0835 5.943 17.0835L5.94287 17.0837H14.7016C14.7958 17.0837 14.8892 17.0766 14.9811 17.0627C15.1777 17.0766 15.3761 17.0837 15.5763 17.0837ZM10.2874 15.1905C10.2808 15.1851 10.2743 15.1797 10.2677 15.1743C10.2551 15.1882 10.2424 15.202 10.2297 15.2157L10.2874 15.1905Z"
                            fill="white"
                          />
                        </svg>
                      </div>
                      <div class="content">
                        <p>For</p>
                        <h6 class="price">Rockie</h6>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="main details">
                  <h6>Payment Details</h6>
                  <form action="buy-crypto-details.html">
                    <p class="desc">Bank account</p>

                    <div class="form-group">
                      <label>Account name</label>
                      <input
                        class="form-control"
                        type="text"
                        value="Veum Cecilia"
                      />
                    </div>
                    <div class="form-group">
                      <label>Account number</label>
                      <input
                        class="form-control"
                        type="text"
                        value="V548422222221"
                      />
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input
                        class="form-control"
                        type="text"
                        value="079 Dariana Knoll, CA"
                      />
                    </div>
                    <div class="form-group">
                      <label>SWIFT Code</label>
                      <input class="form-control" type="text" value="UI8" />
                    </div>
                    <div class="form-group">
                      <label>Bank Address</label>
                      <input
                        class="form-control"
                        type="text"
                        value="55416 Powlowski Spring, CA"
                      />
                    </div>

                    <div class="code">
                      <h6>Reference code</h6>
                      <p class="mb-5">
                        You MUST include the Reference Code in your deposit in
                        order to credit your account!
                      </p>
                      <p>Reference Code:</p>
                      <div class="code-text">BLUTUKHY34PB</div>
                    </div>
                    <div class="group-button">
                      <button class="cancel btn-action-3">Cancel</button>
                      <button class="submit btn-action">Let’s move on!</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="content-inner buy-crypto__main">
                <div class="top">
                  <ul class="top-list">
                    <li class="active">
                      <h6><span></span>Select currency</h6>
                    </li>
                    <li>
                      <h6><span></span>Important Notes</h6>
                    </li>
                    <li>
                      <h6><span></span>Payment Details</h6>
                    </li>
                  </ul>
                </div>

                <div class="main">
                  <h6>Select Currency</h6>
                  <p>Reference Price: 1,450,939,280.43 VND/BTC</p>

                  <form action="buy-crypto-details.html" class="form">
                    <div class="form-field">
                      <label>Pay</label>
                      <input type="number" class="dollar" placeholder="US$" />
                    </div>
                    <button class="btn-convert" onclick="Convert()">
                      <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M17.6691 3.02447L15.4471 0.35791C15.3074 0.195998 15.1203 0.106407 14.9261 0.108432C14.7319 0.110457 14.5461 0.203937 14.4088 0.368737C14.2715 0.533538 14.1936 0.756473 14.1919 0.989527C14.1902 1.22258 14.2649 1.44711 14.3998 1.61475L15.3575 2.76403H2.3319C1.74258 2.76403 1.1774 3.04497 0.760683 3.54505C0.34397 4.04512 0.109863 4.72337 0.109863 5.43059L0.109863 8.09714C0.109863 8.33288 0.187899 8.55896 0.326803 8.72566C0.465707 8.89235 0.654102 8.986 0.850542 8.986C1.04698 8.986 1.23538 8.89235 1.37428 8.72566C1.51319 8.55896 1.59122 8.33288 1.59122 8.09714V5.43059C1.59122 5.19485 1.66926 4.96877 1.80816 4.80207C1.94707 4.63538 2.13546 4.54174 2.3319 4.54174H15.3575L14.3998 5.69102C14.329 5.77302 14.2726 5.8711 14.2338 5.97954C14.195 6.08798 14.1745 6.20462 14.1737 6.32264C14.1728 6.44066 14.1916 6.5577 14.2288 6.66694C14.2661 6.77618 14.3211 6.87542 14.3906 6.95888C14.4601 7.04233 14.5428 7.10833 14.6339 7.15302C14.7249 7.19772 14.8224 7.22021 14.9208 7.21918C15.0191 7.21816 15.1163 7.19363 15.2067 7.14705C15.297 7.10047 15.3788 7.03275 15.4471 6.94786L17.6691 4.2813C17.8052 4.11283 17.8812 3.88746 17.8812 3.65288C17.8812 3.41831 17.8052 3.19293 17.6691 3.02447Z"
                          fill="white"
                        />
                        <path
                          d="M17.1467 8.98828C16.9503 8.98828 16.7619 9.08193 16.623 9.24862C16.4841 9.41531 16.406 9.64139 16.406 9.87713V12.5437C16.406 12.7794 16.328 13.0055 16.1891 13.1722C16.0502 13.3389 15.8618 13.4325 15.6653 13.4325H2.63976L3.59746 12.2832C3.73238 12.1156 3.80704 11.8911 3.80535 11.658C3.80366 11.425 3.72576 11.202 3.58844 11.0372C3.45111 10.8724 3.26534 10.779 3.07113 10.7769C2.87693 10.7749 2.68983 10.8645 2.55014 11.0264L0.328098 13.693C0.191902 13.8613 0.115723 14.0867 0.115723 14.3214C0.115723 14.556 0.191902 14.7814 0.328098 14.9498L2.55014 17.6164C2.61846 17.7012 2.70019 17.769 2.79056 17.8155C2.88092 17.8621 2.97812 17.8866 3.07646 17.8877C3.17481 17.8887 3.27234 17.8662 3.36337 17.8215C3.4544 17.7768 3.53709 17.7108 3.60664 17.6274C3.67618 17.5439 3.73118 17.4447 3.76842 17.3354C3.80567 17.2262 3.82441 17.1092 3.82355 16.9911C3.8227 16.8731 3.80226 16.7565 3.76345 16.648C3.72463 16.5396 3.6682 16.4415 3.59746 16.3595L2.63976 15.2102H15.6653C16.2547 15.2102 16.8199 14.9293 17.2366 14.4292C17.6533 13.9291 17.8874 13.2509 17.8874 12.5437V9.87713C17.8874 9.64139 17.8094 9.41531 17.6704 9.24862C17.5315 9.08193 17.3431 8.98828 17.1467 8.98828Z"
                          fill="white"
                        />
                      </svg>
                    </button>
                    <div class="form-field">
                      <label>Receive</label>
                      <input type="number" class="bitcoin" placeholder="BTC" />
                    </div>

                    <button type="submit" class="btn-action">Continue</button>
                  </form>

                  <div class="button"></div>
                </div>
              </div>
              <div class="content-inner buy-crypto__main">
                <div class="top">
                  <ul class="top-list">
                    <li class="active">
                      <h6><span></span>Select currency</h6>
                    </li>
                    <li>
                      <h6><span></span>Important Notes</h6>
                    </li>
                    <li>
                      <h6><span></span>Payment Details</h6>
                    </li>
                  </ul>
                </div>

                <div class="main">
                  <h6>Select Currency</h6>
                  <p>Reference Price: 1,450,939,280.43 VND/BTC</p>

                  <form action="buy-crypto-details.html" class="form">
                    <div class="form-field">
                      <label>Pay</label>
                      <input type="number" class="dollar" placeholder="US$" />
                    </div>
                    <button class="btn-convert" onclick="Convert()">
                      <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M17.6691 3.02447L15.4471 0.35791C15.3074 0.195998 15.1203 0.106407 14.9261 0.108432C14.7319 0.110457 14.5461 0.203937 14.4088 0.368737C14.2715 0.533538 14.1936 0.756473 14.1919 0.989527C14.1902 1.22258 14.2649 1.44711 14.3998 1.61475L15.3575 2.76403H2.3319C1.74258 2.76403 1.1774 3.04497 0.760683 3.54505C0.34397 4.04512 0.109863 4.72337 0.109863 5.43059L0.109863 8.09714C0.109863 8.33288 0.187899 8.55896 0.326803 8.72566C0.465707 8.89235 0.654102 8.986 0.850542 8.986C1.04698 8.986 1.23538 8.89235 1.37428 8.72566C1.51319 8.55896 1.59122 8.33288 1.59122 8.09714V5.43059C1.59122 5.19485 1.66926 4.96877 1.80816 4.80207C1.94707 4.63538 2.13546 4.54174 2.3319 4.54174H15.3575L14.3998 5.69102C14.329 5.77302 14.2726 5.8711 14.2338 5.97954C14.195 6.08798 14.1745 6.20462 14.1737 6.32264C14.1728 6.44066 14.1916 6.5577 14.2288 6.66694C14.2661 6.77618 14.3211 6.87542 14.3906 6.95888C14.4601 7.04233 14.5428 7.10833 14.6339 7.15302C14.7249 7.19772 14.8224 7.22021 14.9208 7.21918C15.0191 7.21816 15.1163 7.19363 15.2067 7.14705C15.297 7.10047 15.3788 7.03275 15.4471 6.94786L17.6691 4.2813C17.8052 4.11283 17.8812 3.88746 17.8812 3.65288C17.8812 3.41831 17.8052 3.19293 17.6691 3.02447Z"
                          fill="white"
                        />
                        <path
                          d="M17.1467 8.98828C16.9503 8.98828 16.7619 9.08193 16.623 9.24862C16.4841 9.41531 16.406 9.64139 16.406 9.87713V12.5437C16.406 12.7794 16.328 13.0055 16.1891 13.1722C16.0502 13.3389 15.8618 13.4325 15.6653 13.4325H2.63976L3.59746 12.2832C3.73238 12.1156 3.80704 11.8911 3.80535 11.658C3.80366 11.425 3.72576 11.202 3.58844 11.0372C3.45111 10.8724 3.26534 10.779 3.07113 10.7769C2.87693 10.7749 2.68983 10.8645 2.55014 11.0264L0.328098 13.693C0.191902 13.8613 0.115723 14.0867 0.115723 14.3214C0.115723 14.556 0.191902 14.7814 0.328098 14.9498L2.55014 17.6164C2.61846 17.7012 2.70019 17.769 2.79056 17.8155C2.88092 17.8621 2.97812 17.8866 3.07646 17.8877C3.17481 17.8887 3.27234 17.8662 3.36337 17.8215C3.4544 17.7768 3.53709 17.7108 3.60664 17.6274C3.67618 17.5439 3.73118 17.4447 3.76842 17.3354C3.80567 17.2262 3.82441 17.1092 3.82355 16.9911C3.8227 16.8731 3.80226 16.7565 3.76345 16.648C3.72463 16.5396 3.6682 16.4415 3.59746 16.3595L2.63976 15.2102H15.6653C16.2547 15.2102 16.8199 14.9293 17.2366 14.4292C17.6533 13.9291 17.8874 13.2509 17.8874 12.5437V9.87713C17.8874 9.64139 17.8094 9.41531 17.6704 9.24862C17.5315 9.08193 17.3431 8.98828 17.1467 8.98828Z"
                          fill="white"
                        />
                      </svg>
                    </button>
                    <div class="form-field">
                      <label>Receive</label>
                      <input type="number" class="bitcoin" placeholder="BTC" />
                    </div>

                    <button type="submit" class="btn-action">Continue</button>
                  </form>

                  <div class="button"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-sale">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="block-text">
              <h4 class="heading">Earn up to $25 worth of crypto</h4>
              <p class="desc">
                Discover how specific cryptocurrencies work — and get a bit of
                each crypto to try out for yourself.
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="button">
              <a href="#">Create Account</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer style-2">
      <div class="container">
        <div class="footer__main">
          <div class="row">
            <div class="col-xl-4 col-md-6">
              <div class="info">
                <a href="index.html" class="logo">
                  <img src="assets/images/logo/log-footer.png" alt="" />
                </a>
                <h6>Let's talk! 🤙</h6>
                <ul class="list">
                  <li><p>+12 345 678 9101</p></li>
                  <li><p>Info.Avitex@Gmail.Com</p></li>
                  <li>
                    <p>
                      Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi
                      96522
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="widget">
                <div class="widget-link">
                  <h6 class="title">PRODUCTS</h6>
                  <ul>
                    <li><a href="spot.html">Spot</a></li>
                    <li><a href="#">Inverse Perpetual</a></li>
                    <li><a href="#">USDT Perpetual</a></li>
                    <li><a href="exchange.html">Exchange</a></li>
                    <li><a href="#">Launchpad</a></li>
                    <li><a href="#">Binance Pay</a></li>
                  </ul>
                </div>
                <div class="widget-link s2">
                  <h6 class="title">SERVICES</h6>
                  <ul>
                    <li><a href="buy-crypto-select.html">Buy Crypto</a></li>
                    <li><a href="markets.html">Markets</a></li>
                    <li><a href="#">Tranding Fee</a></li>
                    <li><a href="#">Affiliate Program</a></li>
                    <li><a href="#">Referral Program</a></li>
                    <li><a href="#">API</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-12">
              <div class="footer-contact">
                <h5>Newletters</h5>
                <p>
                  Subscribe our newsletter to get more free design course and
                  resource.
                </p>
                <form action="#">
                  <input
                    type="email"
                    placeholder="Enter your email"
                    required=""
                  />
                  <button type="submit" class="btn-action">Submit</button>
                </form>
                <ul class="list-social">
                  <li>
                    <a href="#"><span class="icon-facebook-f"></span></a>
                  </li>
                  <li>
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                  <li>
                    <a href="#"><span class="icon-youtube"></span></a>
                  </li>
                  <li>
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="footer__bottom">
          <p>
            ©2022 Rockie.com. All rights reserved. Terms of Service | Privacy
            Terms
          </p>
        </div>
      </div>
    </footer>

    <script src="app/js/aos.js"></script>
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/jquery.easing.js"></script>
    <script src="app/js/popper.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="app/js/app.js"></script>
    <script src="app/js/jquery.peity.min.js"></script>

    <script src="app/js/switchmode.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <script>
      function Convert() {
        let dollarInput = document.getElementByClass("dollar").value;
        let bitcoinInput = document.getElementByClass("bitcoin").value;

        if ((dollarInput != "") & (bitcoinInput == "")) {
          let parsedDollar = parseFloat(dollarInput);
          let fromDollarToBitcoin = parsedDollar * 0.000022;

          let output = document.getElementByClass("bitcoin");
          output.value = fromDollarToBitcoin;
          console.log("Bitcoin", fromDollarToBitcoin);

          clearMessage();
          clearAlert();
        }

        if ((bitcoinInput != "") & (dollarInput == "")) {
          let parsedBitcoin = parseFloat(bitcoinInput);
          let fromBitcoinToDollar = parsedBitcoin * 46403.5;

          let output = document.getElementByClass("dollar");
          output.value = fromBitcoinToDollar;
          console.log("US$", fromBitcoinToDollar);

          clearMessage();
          clearAlert();
        }

        if ((bitcoinInput == "") & (dollarInput == "")) {
          showMessage();
        }
      }
    </script>
  </body>
</html>
