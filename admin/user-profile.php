<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rockie | Crypto Exchange HTML Template</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="app/dist/datepicker.css" />
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
                      <li class="menu-item-has-children">
                        <a href="#">Buy Crypto</a>

                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="buy-crypto-select.html"
                              >Buy Crypto Select</a
                            >
                          </li>
                          <li class="menu-item">
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
                      <li class="menu-item-has-children current-menu-item">
                        <a href="#"> Pages </a>
                        <ul class="sub-menu">
                          <li class="menu-item current-item">
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
            <h3 class="heading">User Profile</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">User</p></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End PageTitle -->

    <section class="user-profile flat-tabs">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-md-12">
            <div class="user-info center">
              <div class="avt">
                <input
                  type="file"
                  class="custom-file-input"
                  id="imgInp"
                  required
                />
                <img id="blah" src="assets/images/avt/avt.png" alt="no file" />
              </div>
              <h6 class="name">Peterson kennady</h6>
              <p>petersonkenn@demo.com</p>
            </div>
            <ul class="menu-tab">
              <li class="active">
                <h6 class="fs-16">
                  <svg
                    width="20"
                    height="24"
                    viewBox="0 0 20 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.2766 12.854C10.2994 12.854 10.3221 12.854 10.3495 12.854C10.3586 12.854 10.3677 12.854 10.3768 12.854C10.3905 12.854 10.4087 12.854 10.4224 12.854C11.7572 12.8312 12.8369 12.362 13.6342 11.4645C15.3881 9.48733 15.0966 6.09787 15.0647 5.77441C14.9508 3.3462 13.8027 2.18449 12.8551 1.64236C12.149 1.2369 11.3244 1.01822 10.4041 1H10.3723C10.3677 1 10.3586 1 10.354 1H10.3267C9.82101 1 8.82786 1.082 7.87571 1.62414C6.91901 2.16627 5.75274 3.32798 5.63885 5.77441C5.60696 6.09787 5.31539 9.48733 7.06935 11.4645C7.86205 12.362 8.94176 12.8312 10.2766 12.854ZM6.85523 5.8883C6.85523 5.87464 6.85978 5.86097 6.85978 5.85186C7.01012 2.5854 9.32899 2.2346 10.3221 2.2346H10.3404C10.3495 2.2346 10.3631 2.2346 10.3768 2.2346C11.6069 2.26194 13.6979 2.76307 13.8392 5.85186C13.8392 5.86552 13.8392 5.87919 13.8437 5.8883C13.8483 5.92019 14.1672 9.01809 12.7185 10.649C12.1444 11.296 11.3791 11.6149 10.3723 11.624C10.3631 11.624 10.3586 11.624 10.3495 11.624C10.3404 11.624 10.3358 11.624 10.3267 11.624C9.32444 11.6149 8.55452 11.296 7.98505 10.649C6.54088 9.02721 6.85067 5.91564 6.85523 5.8883Z"
                      fill="white"
                      stroke="white"
                      stroke-width="0.4"
                    />
                    <path
                      d="M19.7116 18.4778C19.7116 18.4733 19.7116 18.4687 19.7116 18.4642C19.7116 18.4277 19.7071 18.3913 19.7071 18.3503C19.6797 17.4482 19.6205 15.3389 17.6433 14.6647C17.6297 14.6601 17.6114 14.6556 17.5978 14.651C15.5431 14.1271 13.8347 12.9426 13.8165 12.9289C13.5386 12.733 13.1559 12.8014 12.96 13.0793C12.7641 13.3572 12.8325 13.7399 13.1104 13.9358C13.1878 13.9904 15.001 15.2524 17.2697 15.8355C18.3312 16.2136 18.4497 17.348 18.4816 18.3867C18.4816 18.4277 18.4816 18.4642 18.4861 18.5006C18.4907 18.9106 18.4633 19.5439 18.3905 19.9083C17.6524 20.3274 14.7595 21.7762 10.3587 21.7762C5.9761 21.7762 3.06499 20.3229 2.3224 19.9038C2.24951 19.5393 2.21762 18.9061 2.22673 18.496C2.22673 18.4596 2.23129 18.4232 2.23129 18.3822C2.26318 17.3434 2.38163 16.2091 3.44311 15.8309C5.71186 15.2478 7.52504 13.9813 7.60249 13.9312C7.88039 13.7353 7.94873 13.3526 7.75283 13.0747C7.55693 12.7968 7.17425 12.7285 6.89635 12.9244C6.87813 12.9381 5.17884 14.1225 3.1151 14.6464C3.09688 14.651 3.08321 14.6556 3.06954 14.6601C1.09235 15.3389 1.03313 17.4482 1.0058 18.3457C1.0058 18.3867 1.0058 18.4232 1.00124 18.4596C1.00124 18.4642 1.00124 18.4687 1.00124 18.4733C0.996684 18.7102 0.992129 19.9265 1.23358 20.537C1.27914 20.6555 1.36114 20.7557 1.47048 20.824C1.60715 20.9151 4.88272 23.0017 10.3633 23.0017C15.8438 23.0017 19.1194 20.9106 19.256 20.824C19.3608 20.7557 19.4474 20.6555 19.4929 20.537C19.7207 19.9311 19.7162 18.7147 19.7116 18.4778Z"
                      fill="white"
                      stroke="white"
                      stroke-width="0.4"
                    />
                  </svg>
                  User Profile
                </h6>
              </li>
              <li>
                <h6 class="fs-16">
                  <svg
                    width="21"
                    height="22"
                    viewBox="0 0 21 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M16.9999 14.0005C16.3708 14.002 15.7509 14.1522 15.191 14.439C14.631 14.7257 14.1468 15.1409 13.7779 15.6505L8.76289 12.3075C9.07893 11.4648 9.07893 10.5362 8.76289 9.6935L13.7779 6.3505C14.3408 7.11364 15.1574 7.65103 16.0809 7.86613C17.0045 8.08123 17.9745 7.95995 18.8166 7.52406C19.6588 7.08817 20.3179 6.36626 20.6756 5.48802C21.0332 4.60979 21.066 3.63279 20.7679 2.73257C20.4699 1.83235 19.8606 1.06791 19.0496 0.576596C18.2385 0.0852811 17.2788 -0.100704 16.3429 0.0520557C15.407 0.204815 14.5563 0.686306 13.9435 1.41002C13.3308 2.13374 12.9962 3.05224 12.9999 4.0005C13.0064 4.14622 13.0211 4.29145 13.0439 4.4355L7.65289 8.0295C7.07837 7.51159 6.36602 7.17137 5.6021 7.05003C4.83818 6.92869 4.05546 7.03144 3.34874 7.34584C2.64202 7.66024 2.04162 8.17281 1.62025 8.82145C1.19888 9.4701 0.974609 10.227 0.974609 11.0005C0.974609 11.774 1.19888 12.5309 1.62025 13.1796C2.04162 13.8282 2.64202 14.3408 3.34874 14.6552C4.05546 14.9696 4.83818 15.0723 5.6021 14.951C6.36602 14.8296 7.07837 14.4894 7.65289 13.9715L13.0439 17.5655C13.0211 17.7096 13.0064 17.8548 12.9999 18.0005C12.9999 18.7916 13.2345 19.565 13.674 20.2228C14.1135 20.8806 14.7383 21.3933 15.4692 21.696C16.2001 21.9988 17.0043 22.078 17.7803 21.9236C18.5562 21.7693 19.2689 21.3883 19.8283 20.8289C20.3877 20.2695 20.7687 19.5568 20.923 18.7809C21.0774 18.0049 20.9982 17.2007 20.6954 16.4698C20.3927 15.7389 19.88 15.1142 19.2222 14.6746C18.5644 14.2351 17.791 14.0005 16.9999 14.0005ZM16.9999 2.0005C17.3955 2.0005 17.7821 2.1178 18.111 2.33756C18.4399 2.55733 18.6963 2.86969 18.8477 3.23514C18.999 3.60059 19.0386 4.00272 18.9615 4.39068C18.8843 4.77865 18.6938 5.13501 18.4141 5.41472C18.1344 5.69442 17.778 5.8849 17.3901 5.96207C17.0021 6.03925 16.6 5.99964 16.2345 5.84826C15.8691 5.69689 15.5567 5.44054 15.337 5.11164C15.1172 4.78275 14.9999 4.39607 14.9999 4.0005C14.9999 3.47007 15.2106 2.96136 15.5857 2.58629C15.9608 2.21122 16.4695 2.0005 16.9999 2.0005ZM4.99989 13.0005C4.60432 13.0005 4.21764 12.8832 3.88875 12.6634C3.55985 12.4437 3.3035 12.1313 3.15213 11.7659C3.00075 11.4004 2.96114 10.9983 3.03832 10.6103C3.11549 10.2224 3.30597 9.866 3.58567 9.58629C3.86538 9.30659 4.22174 9.1161 4.60971 9.03893C4.99767 8.96176 5.3998 9.00137 5.76525 9.15274C6.13071 9.30412 6.44306 9.56047 6.66283 9.88936C6.88259 10.2183 6.99989 10.6049 6.99989 11.0005C6.99989 11.5309 6.78917 12.0396 6.4141 12.4147C6.03903 12.7898 5.53032 13.0005 4.99989 13.0005ZM16.9999 20.0005C16.6043 20.0005 16.2177 19.8832 15.8888 19.6634C15.5599 19.4437 15.3035 19.1313 15.1521 18.7659C15.0008 18.4004 14.9612 17.9983 15.0383 17.6103C15.1155 17.2224 15.306 16.866 15.5857 16.5863C15.8654 16.3066 16.2218 16.1161 16.6097 16.0389C16.9977 15.9618 17.3998 16.0014 17.7653 16.1527C18.1307 16.3041 18.4431 16.5605 18.6628 16.8894C18.8826 17.2183 18.9999 17.6049 18.9999 18.0005C18.9999 18.5309 18.7892 19.0396 18.4141 19.4147C18.039 19.7898 17.5303 20.0005 16.9999 20.0005Z"
                      fill="#3772FF"
                    />
                  </svg>
                  Referrals
                </h6>
              </li>
              <li>
                <h6 class="fs-16">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M22.7031 12C22.7031 11.0752 22.5852 10.1602 22.3522 9.27366L23.7069 8.27705L21.0776 3.72291L19.5348 4.39884C18.2158 3.08925 16.6007 2.15602 14.815 1.67166L14.6293 0H9.37059L9.18487 1.67166C7.39912 2.15602 5.78404 3.08925 4.46508 4.39884L2.92233 3.72291L0.292969 8.27705L1.64766 9.27366C1.41469 10.1602 1.29684 11.0752 1.29684 12C1.29684 12.9248 1.41473 13.8397 1.64766 14.7263L0.292969 15.7229L2.92233 20.277L4.46508 19.6011C5.78409 20.9108 7.39917 21.844 9.18487 22.3283L9.37059 24H14.6293L14.815 22.3283C16.6008 21.844 18.2159 20.9107 19.5348 19.6011L21.0776 20.277L23.7069 15.7229L22.3522 14.7263C22.5852 13.8397 22.7031 12.9248 22.7031 12ZM14.0184 21.0765L13.5271 21.1853L13.3706 22.5938H10.6293L10.4728 21.1853L9.98146 21.0765C8.1187 20.6643 6.44794 19.6989 5.14987 18.2849L4.81003 17.9147L3.51084 18.4839L2.14017 16.1098L3.28041 15.271L3.12966 14.7916C2.84662 13.8913 2.70309 12.952 2.70309 12C2.70309 11.0479 2.84662 10.1087 3.12966 9.20841L3.28041 8.72897L2.14017 7.89019L3.51084 5.51611L4.81003 6.08531L5.14987 5.71509C6.44794 4.30106 8.1187 3.33572 9.98146 2.92345L10.4728 2.8147L10.6293 1.40625H13.3706L13.5271 2.8147L14.0184 2.92345C15.8812 3.33577 17.552 4.30111 18.85 5.71509L19.1899 6.08531L20.4891 5.51611L21.8597 7.89019L20.7195 8.72897L20.8702 9.20841C21.1533 10.1087 21.2968 11.048 21.2968 12C21.2968 12.952 21.1533 13.8913 20.8702 14.7916L20.7195 15.271L21.8597 16.1098L20.4891 18.4839L19.1899 17.9147L18.85 18.2849C17.552 19.6989 15.8812 20.6643 14.0184 21.0765Z"
                      fill="#3772FF"
                      stroke="#3772FF"
                      stroke-width="0.5"
                    />
                    <path
                      d="M9.20821 10.3902L8.20354 9.40625L5.63184 12.0321L8.25777 14.6038L9.24168 13.5991L7.62046 12.0114L9.20821 10.3902Z"
                      fill="#3772FF"
                      stroke="#3772FF"
                      stroke-width="0.5"
                    />
                    <path
                      d="M14.7913 10.3902L16.379 12.0114L14.7578 13.5991L15.7417 14.6038L18.3677 12.0321L15.796 9.40625L14.7913 10.3902Z"
                      fill="#3772FF"
                      stroke="#3772FF"
                      stroke-width="0.5"
                    />
                    <path
                      d="M10.3169 16.6016L12.3168 7.09721L13.6936 7.3869L11.6937 16.8913L10.3169 16.6016Z"
                      fill="#3772FF"
                      stroke="#3772FF"
                      stroke-width="0.5"
                    />
                  </svg>

                  API keys
                </h6>
              </li>

              <li>
                <h6 class="fs-16">
                  <svg
                    width="24"
                    height="20"
                    viewBox="0 0 24 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M4.20008 0H0.600074C0.268726 0 0 0.268726 0 0.600074V4.20008C0 4.53142 0.268726 4.80015 0.600074 4.80015C0.931421 4.80015 1.19993 4.53142 1.19993 4.20008V1.20015H4.20008C4.53142 1.20015 4.79993 0.931422 4.79993 0.600074C4.79993 0.268726 4.53142 0 4.20008 0Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M4.20008 17.9984H1.19993V14.9985C1.19993 14.6672 0.931421 14.3984 0.600074 14.3984C0.268726 14.3984 0 14.6672 0 14.9985V18.5985C0 18.9299 0.268726 19.1986 0.600074 19.1986H4.20008C4.53142 19.1986 4.79993 18.9299 4.79993 18.5985C4.79993 18.2672 4.53142 17.9984 4.20008 17.9984Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M23.3998 0H19.7998C19.4684 0 19.1997 0.268726 19.1997 0.600074C19.1997 0.931422 19.4684 1.20015 19.7998 1.20015H22.7997V4.20008C22.7997 4.53142 23.0684 4.80015 23.3998 4.80015C23.7311 4.80015 23.9998 4.53142 23.9998 4.20008V0.600074C23.9998 0.268726 23.7311 0 23.3998 0Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M23.3998 14.3984C23.0684 14.3984 22.7997 14.6672 22.7997 14.9985V17.9984H19.7998C19.4684 17.9984 19.1997 18.2672 19.1997 18.5985C19.1997 18.9299 19.4684 19.1986 19.7998 19.1986H23.3998C23.7311 19.1986 23.9998 18.9299 23.9998 18.5985V14.9985C23.9998 14.6672 23.7311 14.3984 23.3998 14.3984Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M3.64988 3.60156H4.95012C5.3091 3.60156 5.6 3.87029 5.6 4.20164V15.0016C5.6 15.333 5.3091 15.6017 4.95012 15.6017H3.64988C3.2909 15.6017 3 15.333 3 15.0016V4.20164C3 3.87029 3.2909 3.60156 3.64988 3.60156Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M7.90007 3.60156C7.51347 3.60156 7.2002 3.87029 7.2002 4.20164V15.0016C7.2002 15.333 7.51347 15.6017 7.90007 15.6017C8.28666 15.6017 8.6002 15.333 8.6002 15.0016V4.20164C8.6002 3.87029 8.28666 3.60156 7.90007 3.60156Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M11.1501 3.60156H12.4499C12.8089 3.60156 13.1 3.87029 13.1 4.20164V15.0016C13.1 15.333 12.8089 15.6017 12.4499 15.6017H11.1501C10.7911 15.6017 10.5 15.333 10.5 15.0016V4.20164C10.5 3.87029 10.7911 3.60156 11.1501 3.60156Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M15.4998 3.60156C15.1133 3.60156 14.7998 3.87029 14.7998 4.20164V15.0016C14.7998 15.333 15.1133 15.6017 15.4998 15.6017C15.8863 15.6017 16.1998 15.333 16.1998 15.0016V4.20164C16.1998 3.87029 15.8863 3.60156 15.4998 3.60156Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M18.6501 3.60156H19.9499C20.3089 3.60156 20.6 3.87029 20.6 4.20164V15.0016C20.6 15.333 20.3089 15.6017 19.9499 15.6017H18.6501C18.2911 15.6017 18 15.333 18 15.0016V4.20164C18 3.87029 18.2911 3.60156 18.6501 3.60156Z"
                      fill="#3772FF"
                    />
                  </svg>

                  2FA
                </h6>
              </li>
              <li>
                <h6 class="fs-16">
                  <svg
                    width="20"
                    height="24"
                    viewBox="0 0 20 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M17 8.00002V7.00003C17 3.141 13.86 0 9.99999 0C6.13997 0 3 3.141 3 6.99998V7.99997C1.34602 7.99997 0 9.34598 0 11V21C0 22.654 1.34602 24 3 24H17C18.654 24 20 22.654 20 21V11C20 9.34598 18.654 8.00002 17 8.00002ZM4.99997 6.99998C4.99997 4.24298 7.24299 1.99997 9.99999 1.99997C12.757 1.99997 15 4.24298 15 6.99998V7.99997H4.99997V6.99998ZM18 21C18 21.552 17.551 22 17 22H3C2.44899 22 2.00002 21.552 2.00002 21V11C2.00002 10.448 2.44903 10 3 10H17C17.551 10 18 10.448 18 11V21Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M10 11.5C8.34602 11.5 7 12.846 7 14.5C7 15.802 7.83902 16.902 9.00002 17.316V19C9.00002 19.553 9.448 20 10 20C10.552 20 11 19.553 11 19V17.316C12.161 16.902 13 15.802 13 14.5C13 12.846 11.654 11.5 10 11.5ZM10 15.5C9.44898 15.5 9.00002 15.052 9.00002 14.5C9.00002 13.948 9.44898 13.5 10 13.5C10.551 13.5 11 13.948 11 14.5C11 15.052 10.551 15.5 10 15.5Z"
                      fill="#3772FF"
                    />
                  </svg>

                  Change password
                </h6>
              </li>
            </ul>
          </div>
          <div class="col-xl-9 col-md-12">
            <div class="content-tab">
              <div class="content-inner profile">
                <form action="#">
                  <h4>User Profile</h4>
                  <h6>Infomation</h6>

                  <div class="form-group d-flex s1">
                    <input type="text" class="form-control" value="John" />
                    <input type="text" class="form-control" value="Smith" />
                  </div>
                  <div class="form-group d-flex">
                    <input
                      type="email"
                      class="form-control"
                      id="exampleInputEmail1"
                      value="Tonynguyen@demo.com"
                    />
                    <div class="sl">
                      <select
                        class="form-control"
                        id="exampleFormControlSelect1"
                      >
                        <option>+1</option>
                        <option>+84</option>
                        <option>+82</option>
                        <option>+32</option>
                      </select>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Your Phone number"
                      />
                    </div>
                  </div>

                  <div class="form-group d-flex">
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>South Korean</option>
                      <option>Vietnamese</option>
                      <option>South Korean</option>
                      <option>South Korean</option>
                    </select>
                    <div class="sl">
                      <select
                        class="form-control gt"
                        id="exampleFormControlSelect3"
                      >
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                      <input
                        class="form-control fc-datepicker"
                        placeholder="dD/MM/YY"
                        type="text"
                      />
                    </div>
                  </div>

                  <h6 class="two">Features</h6>
                  <div class="bt d-flex">
                    <div class="left">
                      <h6>level 1</h6>
                      <ul>
                        <li>
                          <p>Deposit assets</p>
                          <input
                            type="checkbox"
                            class="check-box__switcher"
                            checked
                          />
                        </li>
                        <li>
                          <p>Withdraw assets</p>
                          <p class="text">Enabled $1,000,000/day</p>
                        </li>
                        <li>
                          <p>Card purchases</p>
                          <input type="checkbox" class="check-box__switcher" />
                        </li>
                        <li>
                          <p>Bank deposit</p>
                          <input type="checkbox" class="check-box__switcher" />
                        </li>
                      </ul>
                    </div>
                    <div class="right">
                      <h6>level 2</h6>
                      <ul>
                        <li>
                          <p>Fiat and Spot wallet</p>
                          <input
                            type="checkbox"
                            class="check-box__switcher"
                            checked
                          />
                        </li>
                        <li>
                          <p>Margin wallet</p>
                          <p class="text">Enabled 100x Leverage</p>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <button type="submit" class="btn-action">
                    Update Profile
                  </button>
                </form>
              </div>
              <div class="content-inner referrals">
                <h6>Total rewards</h6>
                <h4>$1,056.00 <span>USD</span></h4>
                <p>
                  You're earning 20% of the trading fees your referrals pay.
                  Learn more
                </p>
                <div class="main">
                  <h6>Invite friends to earn 20%</h6>

                  <div class="refe">
                    <div>
                      <p>Referral link</p>
                      <input
                        class="form-control"
                        type="text"
                        value="https://accounts.rockie.com/login"
                      />
                    </div>
                    <div>
                      <p>Referral code</p>
                      <input
                        class="form-control"
                        type="text"
                        value="N84CRDKK"
                      />
                      <span class="btn-action">Copied</span>
                    </div>
                  </div>
                </div>

                <a href="wallet.html" class="btn-action">My Wallet</a>
              </div>
              <div class="content-inner api">
                <h6>Enable API access on your account to generate keys.</h6>
                <h4>API Access is <span>Disabled</span></h4>
                <p class="mail">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M20 5H4C3.44772 5 3 5.44772 3 6V18C3 18.5523 3.44772 19 4 19H20C20.5523 19 21 18.5523 21 18V6C21 5.44772 20.5523 5 20 5ZM4 3C2.34315 3 1 4.34315 1 6V18C1 19.6569 2.34315 21 4 21H20C21.6569 21 23 19.6569 23 18V6C23 4.34315 21.6569 3 20 3H4Z"
                      fill="#23262F"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M5.2318 7.35984C5.58537 6.93556 6.21593 6.87824 6.64021 7.2318L11.3598 11.1648C11.7307 11.4739 12.2694 11.4739 12.6402 11.1648L17.3598 7.2318C17.7841 6.87824 18.4147 6.93556 18.7682 7.35984C19.1218 7.78412 19.0645 8.41468 18.6402 8.76825L13.9206 12.7013C12.808 13.6284 11.192 13.6284 10.0795 12.7013L5.35984 8.76825C4.93556 8.41468 4.87824 7.78412 5.2318 7.35984Z"
                      fill="#23262F"
                    />
                  </svg>
                  petersonkenn@demo.com
                </p>
                <div class="main">
                  <h6>Enable API keys</h6>
                  <p>Enter your password and 2FA code to Enable the API keys</p>

                  <div class="refe">
                    <div class="form-group">
                      <p>Your Password</p>
                      <input
                        class="form-control"
                        type="password"
                        placeholder="Passworld"
                      />
                    </div>
                    <div class="form-group">
                      <p>2FA Code</p>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="2FA code"
                      />
                    </div>
                  </div>
                  <a href="#" class="btn-action">Enable API keys</a>
                </div>
              </div>

              <div class="content-inner api">
                <h4>2FA <span class="color-success">Enabled</span></h4>
                <p>
                  If you want to turn off 2FA, input your account password and
                  the six-digit code provided by the Google Authenticator app
                  below, then click <strong>"Disable 2FA"</strong>.
                </p>

                <div class="main">
                  <h6>Disable 2FA</h6>
                  <p>
                    Enter your password and 2FA code to Disable the 2FA
                    verification
                  </p>

                  <div class="refe">
                    <div class="form-group">
                      <p>Your Password</p>
                      <input
                        class="form-control"
                        type="password"
                        placeholder="Passworld"
                      />
                    </div>
                    <div class="form-group">
                      <p>2FA Code</p>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="2FA code"
                      />
                    </div>
                  </div>
                  <a href="#" class="btn-action">Disable 2FA verification</a>
                </div>
              </div>
              <div class="content-inner profile change-pass">
                <h4>Change Password</h4>
                <h6>New Passworld</h6>
                <form action="#">
                  <div class="form-group">
                    <div>
                      <label>Old Passworld<span>*</span>:</label>
                      <input
                        type="text"
                        class="form-control"
                        value="123456789"
                      />
                    </div>
                    <div>
                      <label>2FA Code<span>*</span>:</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div>
                      <label>New Passworld<span>*</span>:</label>
                      <input
                        type="password"
                        class="form-control"
                        placeholder="New Passworld"
                      />
                    </div>
                    <div>
                      <label>Confirm Passworld<span>*</span>:</label>
                      <input
                        type="password"
                        class="form-control"
                        placeholder="Confirm Passworld"
                      />
                    </div>
                  </div>
                </form>
                <button type="submit" class="btn-action">
                  Change Passworld
                </button>
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

    <script src="app/js/datepickerpluigin.js"></script>
    <script src="app/js/datepicker.js"></script>

    <script>
      imgInp.onchange = (evt) => {
        const [file] = imgInp.files;
        if (file) {
          blah.src = URL.createObjectURL(file);
        }
      };
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
