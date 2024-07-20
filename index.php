<!DOCTYPE html>
<html lang="en">

<?php include "header.php"; ?>
  
  <body class="body header-fixed home-2">
    <!-- Header -->
    <header id="header_main" class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between">
              <div class="header__left">
                <div class="logo">
                  <a class="light" href="#"><big><strong>xTradeSecurity</strong></big>
                  <!--   <img
                      id="site-logo"
                      src="assets/images/logo/logo.png"
                      alt=""
                      width="118"
                      height="32"
                      data-retina="assets/images/logo/logo@2x.png"
                      data-width="118"
                      data-height="32"
                    /> -->
                  </a>
                  <a class="dark" href="#"> <big><strong>xTradeSecurity</strong></big>
                <!--     <img
                      src="assets/images/logo/logo-dark.png"
                      alt=""
                      width="118"
                      height="32"
                      data-retina="assets/images/logo/logo-dark@2x.png"
                      data-width="118"
                      data-height="32"
                    /> -->
                  </a>
                </div>
                <!-- Main Navbar -->
                <div class="left__main">
                  <?php include "nav.php"; ?>
                  
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
                    id="dropdownMenuButton2"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Orders & Trades
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton2"
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
                    id="dropdownMenuButton3"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    EN/USD
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton3"
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
                    id="dropdownMenuButton4"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <span class="icon-notification"></span>
                  </button>

                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton4"
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
                    id="dropdownMenuButton5"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <img src="assets/images/avt/avt-01.jpg" alt="" />
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton5"
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

    <!-- Banner Top -->
    <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div class="banner__content">
              <h2 class="title">
                A trusted and secure cryptocurrency exchange.
              </h2>
              <p class="fs-20 desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <a href="#" class="btn-action"><span>Trading Now</span></a>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="banner__image">
              <img src="assets/images/layout/banner-02.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Top -->

    <section class="crypto" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="crypto__main">
              <div class="crypto-box">
                <div class="left">
                  <span class="icon-btc"
                    ><span class="path1"></span><span class="path2"></span
                  ></span>
                  <h6>Bitcoin</h6>
                  <h6 class="price">USD 53,260.20</h6>
                </div>

                <div class="right">
                  <div id="total-revenue-chart-1"></div>
                  <p class="sale success">
                    <svg
                      width="8"
                      height="12"
                      viewBox="0 0 8 12"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M0.393244 5.90568C0.477403 6.06168 0.637433 6.15893 0.811488 6.15893H3.52179V11.5105C3.52179 11.7807 3.73601 12 3.99996 12C4.26392 12 4.47814 11.7807 4.47814 11.5105V6.15893H7.18844C7.36313 6.15893 7.52316 6.06168 7.60668 5.90568C7.69148 5.74969 7.68574 5.5591 7.59329 5.40832L4.40482 0.228447C4.31683 0.0861572 4.16445 0 3.99996 0C3.83547 0 3.68309 0.0861572 3.59511 0.228447L0.406633 5.40832C0.358178 5.48795 0.333313 5.57868 0.333313 5.6694C0.333313 5.75034 0.353715 5.83193 0.393244 5.90568Z"
                        fill="white"
                      />
                    </svg>
                    7.2%
                  </p>
                  <p class="unit">BTC</p>
                </div>
              </div>
              <div class="crypto-box">
                <div class="left">
                  <span class="icon-eth"
                    ><span class="path1"></span><span class="path2"></span
                    ><span class="path3"></span><span class="path4"></span
                  ></span>
                  <h6>Bitcoin</h6>
                  <h6 class="price">USD 53,260.20</h6>
                </div>

                <div class="right">
                  <div id="total-revenue-chart-2"></div>
                  <p class="sale critical">
                    <svg
                      width="8"
                      height="12"
                      viewBox="0 0 8 12"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7.60673 6.09432C7.52257 5.93832 7.36254 5.84107 7.18848 5.84107H4.47818L4.47818 0.48953C4.47818 0.219309 4.26396 0 4.00001 0C3.73605 0 3.52183 0.219309 3.52183 0.48953L3.52183 5.84107H0.811533C0.636839 5.84107 0.47681 5.93832 0.393288 6.09432C0.308492 6.25031 0.31423 6.4409 0.406677 6.59168L3.59515 11.7716C3.68314 11.9138 3.83551 12 4.00001 12C4.1645 12 4.31688 11.9138 4.40486 11.7716L7.59334 6.59168C7.64179 6.51205 7.66666 6.42132 7.66666 6.3306C7.66666 6.24966 7.64625 6.16807 7.60673 6.09432Z"
                        fill="white"
                      />
                    </svg>

                    1.8%
                  </p>
                  <p class="unit">ETH</p>
                </div>
              </div>
              <div class="crypto-box">
                <div class="left">
                  <span class="icon-tether"
                    ><span class="path1"></span><span class="path2"></span
                  ></span>
                  <h6>Bitcoin</h6>
                  <h6 class="price">USD 53,260.20</h6>
                </div>

                <div class="right">
                  <div id="total-revenue-chart-5"></div>
                  <p class="sale success">
                    <svg
                      width="8"
                      height="12"
                      viewBox="0 0 8 12"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M0.393244 5.90568C0.477403 6.06168 0.637433 6.15893 0.811488 6.15893H3.52179V11.5105C3.52179 11.7807 3.73601 12 3.99996 12C4.26392 12 4.47814 11.7807 4.47814 11.5105V6.15893H7.18844C7.36313 6.15893 7.52316 6.06168 7.60668 5.90568C7.69148 5.74969 7.68574 5.5591 7.59329 5.40832L4.40482 0.228447C4.31683 0.0861572 4.16445 0 3.99996 0C3.83547 0 3.68309 0.0861572 3.59511 0.228447L0.406633 5.40832C0.358178 5.48795 0.333313 5.57868 0.333313 5.6694C0.333313 5.75034 0.353715 5.83193 0.393244 5.90568Z"
                        fill="white"
                      />
                    </svg>
                    3.54%
                  </p>
                  <p class="unit">USDT</p>
                </div>
              </div>
              <div class="crypto-box">
                <div class="left">
                  <span class="icon-bnb"
                    ><span class="path1"></span><span class="path2"></span
                    ><span class="path3"></span><span class="path4"></span
                    ><span class="path5"></span><span class="path6"></span
                  ></span>
                  <h6>Bitcoin</h6>
                  <h6 class="price">USD 53,260.20</h6>
                </div>

                <div class="right">
                  <div id="total-revenue-chart-4"></div>
                  <p class="sale success">
                    <svg
                      width="8"
                      height="12"
                      viewBox="0 0 8 12"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M0.393244 5.90568C0.477403 6.06168 0.637433 6.15893 0.811488 6.15893H3.52179V11.5105C3.52179 11.7807 3.73601 12 3.99996 12C4.26392 12 4.47814 11.7807 4.47814 11.5105V6.15893H7.18844C7.36313 6.15893 7.52316 6.06168 7.60668 5.90568C7.69148 5.74969 7.68574 5.5591 7.59329 5.40832L4.40482 0.228447C4.31683 0.0861572 4.16445 0 3.99996 0C3.83547 0 3.68309 0.0861572 3.59511 0.228447L0.406633 5.40832C0.358178 5.48795 0.333313 5.57868 0.333313 5.6694C0.333313 5.75034 0.353715 5.83193 0.393244 5.90568Z"
                        fill="white"
                      />
                    </svg>
                    3.24%
                  </p>
                  <p class="unit">BNB</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div class="services__main">
              <div class="services-box">
                <div class="icon">
                  <svg
                    width="37"
                    height="38"
                    viewBox="0 0 37 38"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M35.9606 13.88C34.7889 6.66876 28.6638 1.30399 21.361 1.0928C21.0138 1.07919 20.6754 1.2042 20.4205 1.44029C20.1655 1.67637 20.0149 2.00415 20.0018 2.35138V2.35138V2.46885L20.824 14.7694C20.878 15.5974 21.5898 16.2269 22.4182 16.179L34.7523 15.3567C35.0999 15.331 35.4228 15.1678 35.6496 14.9032C35.8764 14.6386 35.9883 14.2945 35.9606 13.9471V13.88Z"
                      stroke="#D33535"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M12.8195 8.40957C13.6041 8.22809 14.407 8.62953 14.7325 9.36609C14.8178 9.53933 14.8691 9.72732 14.8835 9.91987C15.0514 12.3028 15.4038 17.5217 15.6051 20.3409C15.6395 20.8488 15.8749 21.322 16.2591 21.6558C16.6433 21.9896 17.1448 22.1566 17.6524 22.1197V22.1197L28.0064 21.482C28.4686 21.4542 28.9218 21.6187 29.2586 21.9365C29.5954 22.2542 29.786 22.6971 29.7851 23.1601V23.1601C29.3656 29.4125 24.8735 34.6394 18.7553 35.9942C12.6371 37.3491 6.3582 34.5074 3.33816 29.0167C2.43662 27.4365 1.86569 25.6894 1.66005 23.8817C1.57214 23.3269 1.53842 22.7649 1.55937 22.2036C1.57718 15.5266 6.26646 9.7735 12.8027 8.40957"
                      stroke="#D33535"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
                <a href="" class="h6 title">Portfolio Manager</a>
                <p>
                  Buy and sell popular digital currencies, keep track of them in
                  the one place.
                </p>
              </div>
              <div class="services-box">
                <div class="icon">
                  <svg
                    width="31"
                    height="36"
                    viewBox="0 0 31 36"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M23.6095 13.3208V9.3846C23.6095 4.77743 19.8732 1.0411 15.266 1.0411C10.6589 1.02093 6.90786 4.73893 6.8877 9.34793V9.3846V13.3208"
                      stroke="#58BD7D"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.2525 34.9576H8.24399C4.40499 34.9576 1.29199 31.8464 1.29199 28.0056V20.1424C1.29199 16.3016 4.40499 13.1904 8.24399 13.1904H22.2525C26.0915 13.1904 29.2045 16.3016 29.2045 20.1424V28.0056C29.2045 31.8464 26.0915 34.9576 22.2525 34.9576Z"
                      stroke="#58BD7D"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M15.2486 22.0381V26.1099"
                      stroke="#58BD7D"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
                <a href="" class="h6 title">Vault protection</a>
                <p>
                  For added security, store your funds in a vault with time
                  delayed withdrawals.
                </p>
              </div>
              <div class="services-box">
                <div class="icon">
                  <svg
                    width="45"
                    height="44"
                    viewBox="0 0 45 44"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M26.5332 3.66699H22.1332C21.5253 3.66699 21.0332 4.15907 21.0332 4.76699C21.0332 5.37491 21.5253 5.86699 22.1332 5.86699H26.5332C27.1411 5.86699 27.6332 5.37491 27.6332 4.76699C27.6332 4.15907 27.1411 3.66699 26.5332 3.66699Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M31.3001 0H13.7001C11.2743 0 9.30011 1.97416 9.30011 4.4V39.6C9.30011 42.0258 11.2743 44 13.7001 44H31.3001C33.726 44 35.7001 42.0258 35.7001 39.6V4.4C35.7001 1.97416 33.726 0 31.3001 0ZM33.5001 39.6C33.5001 40.8152 32.5153 41.8 31.3001 41.8H13.7001C12.485 41.8 11.5001 40.8152 11.5001 39.6V4.4C11.5001 3.18484 12.485 2.2 13.7001 2.2H31.3001C32.5153 2.2 33.5001 3.18484 33.5001 4.4V39.6Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M22.5002 40.3336C23.7152 40.3336 24.7002 39.3486 24.7002 38.1336C24.7002 36.9186 23.7152 35.9336 22.5002 35.9336C21.2851 35.9336 20.3002 36.9186 20.3002 38.1336C20.3002 39.3486 21.2851 40.3336 22.5002 40.3336Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M18.4666 5.86699C19.0741 5.86699 19.5666 5.3745 19.5666 4.76699C19.5666 4.15948 19.0741 3.66699 18.4666 3.66699C17.8591 3.66699 17.3666 4.15948 17.3666 4.76699C17.3666 5.3745 17.8591 5.86699 18.4666 5.86699Z"
                      fill="#3772FF"
                    />
                  </svg>
                </div>
                <a href="" class="h6 title">Mobile Apps</a>
                <p>
                  Stay on top of the markets with the Cryptolly app for Android
                  or iOS.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="block-text" data-aos="fade-up" data-aos-duration="1000">
              <h3 class="heading">The most trusted cryptocurrency platform.</h3>
              <p class="desc">
                Cryptolly has a variety of features that make it the best place
                to start trading
              </p>
              <a href="#" class="btn-action">Let’s Trade Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="coin-list">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block-text">
              <h3 class="heading">Market Update</h3>
              <a class="btn-action" href="#">See All Coins</a>
            </div>

            <div class="coin-list__main">
              <div class="flat-tabs">
                <ul class="menu-tab">
                  <li class="active"><h6 class="fs-16">View All</h6></li>
                  <li><h6 class="fs-16">Metaverse</h6></li>
                  <li><h6 class="fs-16">Entertainment</h6></li>
                  <li><h6 class="fs-16">Energy</h6></li>
                  <li><h6 class="fs-16">NFT</h6></li>
                  <li><h6 class="fs-16">Gaming</h6></li>
                  <li><h6 class="fs-16">Music</h6></li>
                </ul>
                <div class="content-tab">
                  <div class="content-inner">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Last Price</th>
                          <th scope="col">24h %</th>
                          <th scope="col">Market Cap</th>
                          <th scope="col">Last 7 Days</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><span class="icon-star"></span></th>
                          <td>1</td>
                          <td>
                            <a href="#"
                              ><span class="icon-btc"
                                ><span class="path1"></span
                                ><span class="path2"></span
                              ></span>
                              <span>Bitcoin</span>
                              <span class="unit">BTC</span></a
                            >
                          </td>
                          <td class="boild">$56,623.54</td>
                          <td class="up">+1.45%</td>
                          <td class="boild">$880,423,640,582</td>
                          <td><div id="total-revenue-chart-45"></div></td>
                          <td><a href="#" class="btn">Trade</a></td>
                        </tr>
                        <tr>
                          <th scope="row"><span class="icon-star"></span></th>
                          <td>2</td>
                          <td>
                            <a href="#"
                              ><span class="icon-eth"
                                ><span class="path1"></span
                                ><span class="path2"></span
                                ><span class="path3"></span
                                ><span class="path4"></span></span
                              ><span>Ethereum</span>
                              <span class="unit">ETH</span></a
                            >
                          </td>
                          <td class="boild">$56,623.54</td>
                          <td class="down">-5.12%</td>
                          <td class="boild">$880,423,640,582</td>
                          <td><div id="total-revenue-chart-6"></div></td>
                          <td><a href="#" class="btn">Trade</a></td>
                        </tr>
                        <tr>
                          <th scope="row"><span class="icon-star"></span></th>
                          <td>3</td>
                          <td>
                            <a href="#"
                              ><span class="icon-bnb"
                                ><span class="path1"></span
                                ><span class="path2"></span
                                ><span class="path3"></span
                                ><span class="path4"></span
                                ><span class="path5"></span
                                ><span class="path6"></span></span
                              ><span>BNB</span>
                              <span class="unit">BNB/USD</span></a
                            >
                          </td>
                          <td class="boild">$56,623.54</td>
                          <td class="down">-3.75%</td>
                          <td class="boild">$880,423,640,582</td>
                          <td><div id="total-revenue-chart-7"></div></td>
                          <td><a href="#" class="btn">Trade</a></td>
                        </tr>
                        <tr>
                          <th scope="row"><span class="icon-star"></span></th>
                          <td>4</td>
                          <td>
                            <a href="#"
                              ><span class="icon-tether"
                                ><span class="path1"></span
                                ><span class="path2"></span></span
                              ><span>Tether</span>
                              <span class="unit">USDT/USD</span></a
                            >
                          </td>
                          <td class="boild">$56,623.54</td>
                          <td class="up">+1.45%</td>
                          <td class="boild">$880,423,640,582</td>
                          <td><div id="total-revenue-chart-8"></div></td>
                          <td><a href="#" class="btn">Trade</a></td>
                        </tr>
                        <tr>
                          <th scope="row"><span class="icon-star"></span></th>
                          <td>5</td>
                          <td>
                            <a href="#"
                              ><span class="icon-sol"
                                ><span class="path1"></span
                                ><span class="path2"></span
                                ><span class="path3"></span
                                ><span class="path4"></span
                                ><span class="path5"></span></span
                              ><span>Solana</span>
                              <span class="unit">SOL</span></a
                            >
                          </td>
                          <td class="boild">$56,623.54</td>
                          <td class="up">+1.45%</td>
                          <td class="boild">$880,423,640,582</td>
                          <td><div id="total-revenue-chart-9"></div></td>
                          <td><a href="#" class="btn">Trade</a></td>
                        </tr>
                        <tr>
                          <th scope="row"><span class="icon-star"></span></th>
                          <td>6</td>
                          <td>
                            <a href="#"
                              ><span class="icon-btc"
                                ><span class="path1"></span
                                ><span class="path2"></span></span
                              ><span>XRP</span> <span class="unit">XRP</span></a
                            >
                          </td>
                          <td class="boild">$56,623.54</td>
                          <td class="down">-2.22%</td>
                          <td class="boild">$880,423,640,582</td>
                          <td><div id="total-revenue-chart-10"></div></td>
                          <td><a href="#" class="btn">Trade</a></td>
                        </tr>
                        <tr>
                          <th scope="row"><span class="icon-star"></span></th>
                          <td>7</td>
                          <td>
                            <a href="#"
                              ><span class="icon-ada"
                                ><span class="path1"></span
                                ><span class="path2"></span
                                ><span class="path3"></span
                                ><span class="path4"></span
                                ><span class="path5"></span
                                ><span class="path6"></span
                                ><span class="path7"></span
                                ><span class="path8"></span
                                ><span class="path9"></span></span
                              ><span>Cardano</span>
                              <span class="unit">ADA</span></a
                            >
                          </td>
                          <td class="boild">$56,623.54</td>
                          <td class="up">+0.8%</td>
                          <td class="boild">$880,423,640,582</td>
                          <td><div id="total-revenue-chart-11"></div></td>
                          <td><a href="#" class="btn">Trade</a></td>
                        </tr>
                        <tr>
                          <th scope="row"><span class="icon-star"></span></th>
                          <td>8</td>
                          <td>
                            <a href="#"
                              ><span class="icon-avax"
                                ><span class="path1"></span
                                ><span class="path2"></span
                                ><span class="path3"></span
                                ><span class="path4"></span></span
                              ><span>Avalanche</span>
                              <span class="unit">AVAX</span></a
                            >
                          </td>
                          <td class="boild">$56,623.54</td>
                          <td class="up">+1.41%</td>
                          <td class="boild">$880,423,640,582</td>
                          <td><div id="total-revenue-chart-12"></div></td>
                          <td><a href="#" class="btn">Trade</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about-2">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div class="about_image">
              <img
                class="img-main"
                src="assets/images/layout/Illustration.png"
                alt=""
              />
              <div class="traders-box">
                <div class="icon">
                  <svg
                    width="26"
                    height="26"
                    viewBox="0 0 26 26"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.82861 17.172L10.8172 10.8177L17.1715 8.8291L15.1829 15.1834L8.82861 17.172Z"
                      stroke="#3772FF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <circle
                      cx="13"
                      cy="13"
                      r="12"
                      stroke="#3772FF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
                <div class="content">
                  <h6 class="numb">198+</h6>
                  <p>Countries</p>
                </div>
              </div>
              <div class="traders-box">
                <div class="icon">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M22.6666 10.6669C22.3406 8.32055 21.2521 6.14647 19.5688 4.47959C17.8856 2.8127 15.701 1.74548 13.3515 1.44233C11.0021 1.13918 8.61814 1.6169 6.56691 2.80192M1.33331 2.66693V8.00026H6.66665"
                      stroke="#D33535"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M1.33331 13.334C1.65939 15.6804 2.74789 17.8544 4.43113 19.5213C6.11437 21.1882 8.29897 22.2554 10.6484 22.5586C12.9979 22.8617 15.3818 22.384 17.433 21.199M22.6666 21.334V16.0007H17.3333"
                      stroke="#D33535"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
                <div class="content">
                  <h6 class="numb">350+</h6>
                  <p>Trading Pairs</p>
                </div>
              </div>
              <div class="traders-box">
                <div class="icon">
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
                      d="M9.52364 15.7402C5.03897 15.7402 1.2088 16.4181 1.2088 19.1341C1.2088 21.8489 5.01447 22.5524 9.52364 22.5524C14.0083 22.5524 17.8385 21.8734 17.8385 19.1586C17.8385 16.4437 14.0328 15.7402 9.52364 15.7402Z"
                      stroke="#3772FF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M9.52361 11.8667C12.4823 11.8667 14.8529 9.49484 14.8529 6.53734C14.8529 3.57867 12.4823 1.20801 9.52361 1.20801C6.56611 1.20801 4.19427 3.57867 4.19427 6.53734C4.19427 9.49484 6.56611 11.8667 9.52361 11.8667Z"
                      stroke="#3772FF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M20.4048 8.11328V12.7916"
                      stroke="#3772FF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M22.7917 10.4525H18.02"
                      stroke="#3772FF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
                <div class="content">
                  <h6 class="numb">20 million+</h6>
                  <p>Trades</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div
              class="about__content"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <h3 class="heading">
                We are the most trusted cryptocurrency platform.
              </h3>
              <p class="fs-20 desc">
                We believe Cryptolly is here to stay — and that a future worth
                building is one which opens its doors and invites everyone in.
              </p>
              <ul class="list">
                <li>
                  <div class="icon">
                    <svg
                      width="29"
                      height="23"
                      viewBox="0 0 29 23"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M19.1987 11.4737C19.1987 14.0115 17.1406 16.0681 14.6029 16.0681C12.0651 16.0681 10.0085 14.0115 10.0085 11.4737C10.0085 8.93457 12.0651 6.87793 14.6029 6.87793C17.1406 6.87793 19.1987 8.93457 19.1987 11.4737Z"
                        stroke="#D33535"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M14.6007 22.0866C20.1354 22.0866 25.1978 18.107 28.048 11.4735C25.1978 4.83991 20.1354 0.860352 14.6007 0.860352H14.6065C9.07172 0.860352 4.00934 4.83991 1.15912 11.4735C4.00934 18.107 9.07172 22.0866 14.6065 22.0866H14.6007Z"
                        stroke="#D33535"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="content">
                    <h6 class="title">Clarity</h6>
                    <p>
                      We help you make sense of the coins, the terms, the dense
                      charts and market changes.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="icon green">
                    <svg
                      width="25"
                      height="30"
                      viewBox="0 0 25 30"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M22.5815 4.4024C23.2167 4.62478 23.6411 5.2236 23.6411 5.89655V15.7408C23.6411 18.4922 22.6411 21.1186 20.8752 23.1534C19.9871 24.1781 18.8636 24.976 17.6703 25.6214L12.4989 28.4149L7.3188 25.6199C6.12406 24.9746 4.99909 24.1781 4.10958 23.1519C2.34218 21.1171 1.33929 18.4893 1.33929 15.735V5.89655C1.33929 5.2236 1.7637 4.62478 2.39886 4.4024L11.9655 1.04056C12.3056 0.921376 12.6762 0.921376 13.0149 1.04056L22.5815 4.4024Z"
                        stroke="#58BD7D"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M8.71194 14.2775L11.4619 17.0288L17.1274 11.3633"
                        stroke="#58BD7D"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="content">
                    <h6 class="title">Confidence</h6>
                    <p>
                      Our markets are always up to date, sparking curiosity with
                      real-world relevance.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="icon blue">
                    <svg
                      width="33"
                      height="25"
                      viewBox="0 0 33 25"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M24.7354 10.8438C27.0644 10.8438 28.9536 8.9559 28.9536 6.62699C28.9536 4.29807 27.0644 2.41016 24.7354 2.41016"
                        stroke="#3772FF"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M26.6747 15.4258C27.3701 15.4737 28.0616 15.5723 28.7424 15.7256C29.6884 15.9108 30.8262 16.2985 31.2312 17.1472C31.4897 17.6907 31.4897 18.3236 31.2312 18.8685C30.8275 19.7172 29.6884 20.1036 28.7424 20.2981"
                        stroke="#3772FF"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M8.30432 10.8438C5.9754 10.8438 4.08615 8.9559 4.08615 6.62699C4.08615 4.29807 5.9754 2.41016 8.30432 2.41016"
                        stroke="#3772FF"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M6.36512 15.4258C5.66964 15.4737 4.97816 15.5723 4.29734 15.7256C3.35138 15.9108 2.21357 16.2985 1.80987 17.1472C1.55007 17.6907 1.55007 18.3236 1.80987 18.8685C2.21224 19.7172 3.35138 20.1036 4.29734 20.2981"
                        stroke="#3772FF"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M16.5131 16.334C21.2322 16.334 25.2638 17.0481 25.2638 19.906C25.2638 22.7625 21.2589 23.5033 16.5131 23.5033C11.7926 23.5033 7.76233 22.7891 7.76233 19.9313C7.76233 17.0734 11.7673 16.334 16.5131 16.334Z"
                        stroke="#3772FF"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M16.5131 12.2579C13.4008 12.2579 10.9053 9.76246 10.9053 6.6488C10.9053 3.53647 13.4008 1.04102 16.5131 1.04102C19.6254 1.04102 22.1209 3.53647 22.1209 6.6488C22.1209 9.76246 19.6254 12.2579 16.5131 12.2579Z"
                        stroke="#3772FF"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="content">
                    <h6 class="title">Community</h6>
                    <p>
                      We supports the crypto community, putting data in the
                      hands which need it most.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="work">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block-text center">
              <h3 class="heading">How It Work</h3>
              <p class="fs-20 desc">
                Stacks is a production-ready library of stackable content blocks
                built in React Native.
              </p>
            </div>

            <div class="work__main" data-aos="fade-up" data-aos-duration="1000">
              <div class="work-box">
                <div class="image">
                  <img src="assets/images/icon/Cloud.png" alt="" />
                </div>
                <div class="content">
                  <p class="step">Step 1</p>
                  <a href="#" class="title">Download</a>
                  <p class="text">
                    Stacks is a production-ready library of stackable content
                    blocks built in React Native.
                  </p>
                </div>
                <img
                  class="line"
                  src="assets/images/icon/connect-line.png"
                  alt=""
                />
              </div>
              <div class="work-box">
                <div class="image">
                  <img src="assets/images/icon/Wallet.png" alt="" />
                </div>
                <div class="content">
                  <p class="step">Step 2</p>
                  <a href="#" class="title">Connect wallet</a>
                  <p class="text">
                    Stacks is a production-ready library of stackable content
                    blocks built in React Native.
                  </p>
                </div>
                <img
                  class="line"
                  src="assets/images/icon/connect-line.png"
                  alt=""
                />
              </div>
              <div class="work-box">
                <div class="image">
                  <img src="assets/images/icon/Mining.png" alt="" />
                </div>
                <div class="content">
                  <p class="step">Step 3</p>
                  <a href="#" class="title">Start trading</a>
                  <p class="text">
                    Stacks is a production-ready library of stackable content
                    blocks built in React Native.
                  </p>
                </div>
                <img
                  class="line"
                  src="assets/images/icon/connect-line.png"
                  alt=""
                />
              </div>
              <div class="work-box">
                <div class="image">
                  <img src="assets/images/icon/Comparison.png" alt="" />
                </div>
                <div class="content">
                  <p class="step">Step 4</p>
                  <a href="#" class="title">Earn money</a>
                  <p class="text">
                    Stacks is a production-ready library of stackable content
                    blocks built in React Native.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block-text center">
              <h3 class="heading">Learn And Earn</h3>
              <p class="desc">
                Stacks is a production-ready library of stackable content blocks
                built in React Native.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="blog-box">
              <div class="box-image">
                <img src="assets/images/blog/blog-01.jpg" alt="" />
                <div class="wrap-video">
                  <a
                    href="https://www.youtube.com/watch?v=i7EMACWuErA"
                    class="popup-youtube"
                  >
                    <svg
                      width="13"
                      height="16"
                      viewBox="0 0 13 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M0.466675 2.92407C0.466675 1.35705 2.187 0.398733 3.51938 1.22354L11.7197 6.2999C12.9827 7.0818 12.9827 8.91907 11.7197 9.70096L3.51938 14.7773C2.187 15.6021 0.466675 14.6438 0.466675 13.0768V2.92407Z"
                        fill="#777E90"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="box-content">
                <a href="#" class="category btn-action">learn & earn</a>
                <a href="" class="title"
                  >Learn about UI8 coin and earn an All-Access Pass</a
                >

                <div class="meta">
                  <a href="#" class="name"><span></span>Floyd Buckridge</a>
                  <a href="#" class="time">Feb 03, 2021</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-box">
              <div class="box-image">
                <img src="assets/images/blog/blog-02.jpg" alt="" />
                <div class="wrap-video">
                  <a
                    href="https://www.youtube.com/watch?v=i7EMACWuErA"
                    class="popup-youtube"
                  >
                    <svg
                      width="13"
                      height="16"
                      viewBox="0 0 13 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M0.466675 2.92407C0.466675 1.35705 2.187 0.398733 3.51938 1.22354L11.7197 6.2999C12.9827 7.0818 12.9827 8.91907 11.7197 9.70096L3.51938 14.7773C2.187 15.6021 0.466675 14.6438 0.466675 13.0768V2.92407Z"
                        fill="#777E90"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="box-content">
                <a href="#" class="category btn-action">learn & earn</a>
                <a href="" class="title"
                  >Learn about UI8 coin and earn an All-Access Pass</a
                >

                <div class="meta">
                  <a href="#" class="name"><span></span>Floyd Buckridge</a>
                  <a href="#" class="time">Feb 03, 2021</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-box">
              <div class="box-image">
                <img src="assets/images/blog/blog-02.jpg" alt="" />
                <div class="wrap-video">
                  <a
                    href="https://www.youtube.com/watch?v=i7EMACWuErA"
                    class="popup-youtube"
                  >
                    <svg
                      width="13"
                      height="16"
                      viewBox="0 0 13 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M0.466675 2.92407C0.466675 1.35705 2.187 0.398733 3.51938 1.22354L11.7197 6.2999C12.9827 7.0818 12.9827 8.91907 11.7197 9.70096L3.51938 14.7773C2.187 15.6021 0.466675 14.6438 0.466675 13.0768V2.92407Z"
                        fill="#777E90"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="box-content">
                <a href="#" class="category btn-action">learn & earn</a>
                <a href="" class="title"
                  >Learn about UI8 coin and earn an All-Access Pass</a
                >

                <div class="meta">
                  <a href="#" class="name"><span></span>Floyd Buckridge</a>
                  <a href="#" class="time">Feb 03, 2021</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="button-loadmore">
              <a href="#">
                <svg
                  width="14"
                  height="14"
                  viewBox="0 0 14 14"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M7.00001 0.333008C6.63182 0.333008 6.33334 0.631485 6.33334 0.999674V2.99967C6.33334 3.36786 6.63182 3.66634 7.00001 3.66634C7.3682 3.66634 7.66668 3.36786 7.66668 2.99967V0.999674C7.66668 0.631485 7.3682 0.333008 7.00001 0.333008Z"
                    fill="#23262F"
                  />
                  <path
                    d="M7.00001 10.333C6.63182 10.333 6.33334 10.6315 6.33334 10.9997V12.9997C6.33334 13.3679 6.63182 13.6663 7.00001 13.6663C7.3682 13.6663 7.66668 13.3679 7.66668 12.9997V10.9997C7.66668 10.6315 7.3682 10.333 7.00001 10.333Z"
                    fill="#23262F"
                  />
                  <path
                    d="M13 6.33301C13.3682 6.33301 13.6667 6.63148 13.6667 6.99967C13.6667 7.36786 13.3682 7.66634 13 7.66634H11C10.6318 7.66634 10.3333 7.36786 10.3333 6.99967C10.3333 6.63148 10.6318 6.33301 11 6.33301H13Z"
                    fill="#23262F"
                  />
                  <path
                    d="M3.66668 6.99967C3.66668 6.63148 3.3682 6.33301 3.00001 6.33301H1.00001C0.63182 6.33301 0.333344 6.63148 0.333344 6.99967C0.333343 7.36786 0.63182 7.66634 1.00001 7.66634H3.00001C3.3682 7.66634 3.66668 7.36786 3.66668 6.99967Z"
                    fill="#23262F"
                  />
                  <path
                    d="M10.7713 2.28569C11.0316 2.02535 11.4537 2.02535 11.7141 2.28569C11.9744 2.54604 11.9744 2.96815 11.7141 3.2285L10.2999 4.64272C10.0395 4.90307 9.61742 4.90307 9.35707 4.64272C9.09672 4.38237 9.09672 3.96026 9.35707 3.69991L10.7713 2.28569Z"
                    fill="#23262F"
                  />
                  <path
                    d="M4.64296 9.35666C4.38262 9.09631 3.9605 9.09631 3.70016 9.35666L2.28594 10.7709C2.02559 11.0312 2.02559 11.4533 2.28594 11.7137C2.54629 11.974 2.9684 11.974 3.22875 11.7137L4.64296 10.2995C4.90331 10.0391 4.90331 9.61701 4.64296 9.35666Z"
                    fill="#23262F"
                  />
                  <path
                    d="M11.7141 10.7709C11.9744 11.0313 11.9744 11.4534 11.7141 11.7138C11.4537 11.9741 11.0316 11.9741 10.7713 11.7138L9.35705 10.2995C9.0967 10.0392 9.0967 9.61708 9.35705 9.35673C9.6174 9.09638 10.0395 9.09638 10.2999 9.35673L11.7141 10.7709Z"
                    fill="#23262F"
                  />
                  <path
                    d="M4.64303 4.64263C4.90338 4.38228 4.90338 3.96017 4.64303 3.69982L3.22881 2.28561C2.96846 2.02526 2.54635 2.02526 2.286 2.28561C2.02565 2.54596 2.02565 2.96807 2.286 3.22841L3.70022 4.64263C3.96057 4.90298 4.38268 4.90298 4.64303 4.64263Z"
                    fill="#23262F"
                  />
                </svg>
                Load more</a
              >
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
            ©2022 xTradeSecurity.com. All rights reserved. Terms of Service | Privacy
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
    <script src="app/js/Chart.bundle.min.js"></script>
    <script src="app/js/apexcharts.js"></script>
    <script src="app/js/switchmode.js"></script>
    <script src="app/js/jquery.magnific-popup.min.js"></script>

    <script src="app/js/chart.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,

        thumbs: {
          swiper: swiper,
        },
      });

      var swiper3 = new Swiper(".swiper-partner", {
        breakpoints: {
          0: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 60,
          },
        },
        slidesPerView: 4,
      });
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>
