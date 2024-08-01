<!DOCTYPE html>
<html lang="en">
<?php 
include "header.php"; 
// Fetch current prices
$currentPrices = fetchCryptoData('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,tether,binancecoin&vs_currencies=usd');
// Fetch historical price data for the past 30 days
$historicalData = fetchCryptoData('https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=usd&days=30');

// Fetch data for multiple cryptocurrencies
// $cryptos = ['bitcoin', 'ethereum', 'ripple']; // Add more cryptocurrencies as needed
// $vs_currency = 'usd';
// $cryptoData = fetchCryptoData('https://api.coingecko.com/api/v3/coins/markets?vs_currency=' . $vs_currency . '&ids=' . implode(',', $cryptos) . '&order=market_cap_desc&per_page=100&page=1&sparkline=true');

// Check if the data was fetched successfully
// if ($cryptoData === null) {
//     echo "Failed to fetch cryptocurrency data.";
//     exit;
//}
?>
  <body class="body header-fixed home-2">
    <!-- Header -->
    <header id="header_main" class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between">
              <div class="header__left">

               <!-- insert the logo --> 
               <?php include "include/logo.php"; ?>

                <!-- Main Navbar -->
                <div class="left__main">
                  <?php include "nav.php"; ?>
                  
                  <!-- /#main-nav -->
                </div>
              </div>
             <?php include "headerRight.php"; ?>
            </div>
          </div>
        </div>
      </div> 
    </header>
    <!-- end Header -->
    <script src="https://widget.coincodex.com/include.js?type=4&ticker=top50&period=1D&textColor=000000&borderColor=000000&backgroundColor=ffffff&hoverColor=transparent&currency=USD&range=1D"></script>
    
    <!-- Banner Top -->
    <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div class="banner__content">
              <h2 class="title">
                We are a trusted and secure digital assets exchange.
              </h2>
              <p class="fs-20 desc">
                At XTradeSecurity, we make it easy to buy, sell, swap, convert, and trade your digital assets and currencies. Profits are guaranteed on our platform, using our strategies. <br>Buy now and get up to +10% extra bonus minimum sale amount on major assets. We accept BTC and other leading currencies.
              </p>
              <a href="#" class="btn-action"><span>Get Started Here</span></a>
            </div>
            <p>
            <center><span><img src="assets/images/icon/googleplay.png" title="Android app for xTradeSecurity (in Beta)" alt="Google playstore image" /></span>&nbsp;
            <span><img src="assets/images/icon/appstore.png" title="iOS app for xTradeSecurity (in Beta)" alt="Apple iStore image" /></span></center>
          </p>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="banner__image">
              <img src="assets/images/layout/phone-display.png" alt="xTradeSecurity Exchange Image" title="xTrade Securities and Exchange" />
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
                  <h6>Bitcoin price</h6>
                  <!-- cryptoprice BEGIN -->
                  <h6 class="price"> $&nbsp;<?php if ($currentPrices !== null){echo $currentPrices['bitcoin']['usd'];} ?> </h6>
                  <!-- cryptoprice END -->
                </div>
                <div class="right">
                <!-- <div id="total-revenue-chart-1"></div> -->
                  <p class="unit">BTC &#8646; USD</p>
                </div>
              </div>

              <div class="crypto-box">
                <div class="left">
                  <span class="icon-eth"
                    ><span class="path1"></span><span class="path2"></span
                    ><span class="path3"></span><span class="path4"></span
                  ></span>
                  <h6>Ethereum price</h6>
                    <!-- cryptoprice BEGIN -->
                    <h6 class="price"> $&nbsp;<?php if ($currentPrices !== null){echo $currentPrices['ethereum']['usd'];} ?> </h6>
                  <!-- cryptoprice END -->
                </div>

                <div class="right">
            
                  <p class="unit">ETH &#8646; USD</p>
                </div>
              </div>
              <div class="crypto-box">
                <div class="left">
                  <span class="icon-tether"
                    ><span class="path1"></span><span class="path2"></span
                  ></span>
                  <h6>Tether Price</h6>
                    <!-- cryptoprice BEGIN -->
                    <h6 class="price"> $&nbsp;<?php if ($currentPrices !== null){echo $currentPrices['tether']['usd'];} ?> </h6>
                  <!-- cryptoprice END -->
                </div>

                <div class="right">
                 
                  <p class="unit">USDT &#8646; USD</p>
                </div>
              </div>
              <div class="crypto-box">
                <div class="left">
                  <span class="icon-bnb"
                    ><span class="path1"></span><span class="path2"></span
                    ><span class="path3"></span><span class="path4"></span
                    ><span class="path5"></span><span class="path6"></span
                  ></span>
                  <h6>BNB price</h6>
                    <!-- cryptoprice BEGIN -->
                    <h6 class="price"> $&nbsp;<?php if ($currentPrices !== null){echo $currentPrices['binancecoin']['usd'];} ?> </h6>
                  <!-- cryptoprice END -->
                </div>

                <div class="right">
                  <p class="unit">BNB &#8646; USD</p>
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
                <a href="" class="h6 title">Diverse platforms</a>
                <p>
                  Stay on top of the markets with the XTradeSecurity app for Android
                  or iOS, on your tab and desktop devices.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="block-text" data-aos="fade-up" data-aos-duration="1000">
              <h3 class="heading">The most trusted digital assets platform.</h3>
              <p class="desc">
                XTradeSecurity has a variety of features that make it the best place to start trading. The steps are as clear-cut as anything. Turn your fiat money into digital money in seconds. <br> Trade digital assets with up to 1:5 leverage. You can start with as little as $100 to gain the effect of $500 capital!
              </p>
              <a href="#" class="btn-action">Let’s Trade Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services-2 bg">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div
              class="services__content"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <h3 class="heading">Why choose XTradeSecurity</h3>
              <p class="fs-20 desc">
                XTradeSecurity has a variety of features that make it the best place to
                start trading
              </p>
              <ul class="list">
                <li class="active">
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
                  <div class="content">
                    <h6 class="title">Manage your portfolio</h6>
                    <p>
                      Buy and sell popular digital currencies, keep track of
                      them in the one place.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="icon green">
                    <svg
                      width="44"
                      height="44"
                      viewBox="0 0 44 44"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M14.6667 3.66699V9.16699"
                        stroke="#58BD7D"
                        stroke-width="2"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M29.3333 3.66699V9.16699"
                        stroke="#58BD7D"
                        stroke-width="2"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M6.41675 16.665H37.5834"
                        stroke="#58BD7D"
                        stroke-width="2"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M40.3334 34.8333C40.3334 36.2083 39.9484 37.51 39.2701 38.61C38.0051 40.7367 35.6768 42.1667 33.0001 42.1667C31.1484 42.1667 29.4618 41.4883 28.1784 40.3333C27.6101 39.8567 27.1151 39.27 26.7301 38.61C26.0518 37.51 25.6667 36.2083 25.6667 34.8333C25.6667 30.7817 28.9484 27.5 33.0001 27.5C35.2001 27.5 37.1618 28.4716 38.5001 29.9933C39.6368 31.295 40.3334 32.9817 40.3334 34.8333Z"
                        stroke="#58BD7D"
                        stroke-width="2"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M30.1401 34.8338L31.9551 36.6488L35.8601 33.0371"
                        stroke="#58BD7D"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M38.5 15.5837V29.9936C37.1617 28.472 35.2 27.5003 33 27.5003C28.9483 27.5003 25.6667 30.782 25.6667 34.8337C25.6667 36.2087 26.0517 37.5103 26.73 38.6103C27.115 39.2703 27.61 39.857 28.1783 40.3337H14.6667C8.25 40.3337 5.5 36.667 5.5 31.167V15.5837C5.5 10.0837 8.25 6.41699 14.6667 6.41699H29.3333C35.75 6.41699 38.5 10.0837 38.5 15.5837Z"
                        stroke="#58BD7D"
                        stroke-width="2"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M21.9918 25.1169H22.0083"
                        stroke="#58BD7D"
                        stroke-width="3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M15.2062 25.1169H15.2226"
                        stroke="#58BD7D"
                        stroke-width="3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M15.2062 30.6169H15.2226"
                        stroke="#58BD7D"
                        stroke-width="3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="content">
                    <h6 class="title">Recurring buys</h6>
                    <p>
                      Invest in digital assets slowly over time by scheduling
                      buys daily, weekly, or monthly.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="icon blue">
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
                  <div class="content">
                    <h6 class="title">Get Support</h6>
                    <p>
                      Get support in your journey with us irrespective of preferred platform used.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="services_image">
              <div class="experience">
                <h6 class="fs-18">Continue with your experience here</h6>

                <ul class="list-felling">
                  <li class="icon">
                    <a href="#"
                      ><img src="assets/images/icon/icon-1.png" alt=""
                    /></a>
                  </li>
                  <li class="icon">
                    <a href="#"
                      ><img src="assets/images/icon/icon-2.png" alt=""
                    /></a>
                  </li>
                  <li class="icon">
                    <a href="#"
                      ><img src="assets/images/icon/icon-3.png" alt=""
                    /></a>
                  </li>
                  <li class="icon">
                    <a href="#"
                      ><img src="assets/images/icon/icon-4.png" alt=""
                    /></a>
                  </li>
                  <li class="icon">
                    <a href="#"
                      ><img src="assets/images/icon/icon-5.png" alt=""
                    /></a>
                  </li>
                </ul>
              </div>
              <div class="crypto-box">
                <img class="arrow" src="assets/images/icon/Arrow.png" alt="" />
                <div class="left">
                  <img src="assets/images/logo/favicon.png" alt="" title="Bitcoin currency logo" />
                  <span class="icon-btc"></span>
                  <div>
                    <h6>BTC</h6>
                    <p>XTradeSecurity</p>
                  </div>
                </div>

                <div class="right">
                  <h6 class="price">$&nbsp;<?php echo $currentPrices['bitcoin']['usd']; ?></h6>
                  <div id="total-revenue-chart-1"></div>
                </div>
              </div>
              <div class="shape"></div>
              <div class="user-card">
                <div class="info">
                  <img src="assets/images/avt/user.jpg" alt="" />
                  <h6>Esther Howard</h6>
                  <p>estherhoward01@gmail.com</p>
                </div>

                <div class="content">
                  <h6 class="title">Portfolio</h6>
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0.556641 12.6349L0.556641 12.6351C0.555778 18.596 5.38811 23.4291 11.3462 23.4291L0.556641 12.6349ZM0.556641 12.6349C0.554914 6.67409 5.3871 1.8418 11.348 1.8418C17.3089 1.8418 22.1413 6.67494 22.1413 12.6359C22.1413 18.5958 17.3091 23.4282 11.3462 23.4291L0.556641 12.6349Z"
                      stroke="#B1B5C3"
                    />
                    <path
                      d="M15.7919 9.86931C15.6464 8.3568 14.3408 7.84992 12.691 7.70535V5.60645H11.4143V7.64933C11.0791 7.64933 10.7358 7.65566 10.3951 7.66288V5.60645H9.11844L9.11754 7.70354C8.84106 7.70896 8.5691 7.71439 8.30436 7.71439V7.70806L6.54338 7.70716V9.07149C6.54338 9.07149 7.48667 9.05342 7.47041 9.07059C7.98813 9.07059 8.15618 9.37056 8.20497 9.62987V12.0206C8.24112 12.0206 8.2872 12.0224 8.3396 12.0297H8.20497L8.20407 15.3791C8.18148 15.5417 8.08571 15.801 7.7243 15.8019C7.74056 15.8164 6.79637 15.8019 6.79637 15.8019L6.54248 17.3271H8.20497C8.51398 17.3271 8.81847 17.3325 9.11664 17.3343L9.11754 19.4567H10.3933V17.3569C10.743 17.3641 11.0818 17.3668 11.4134 17.3668L11.4125 19.4567H12.6892V17.3388C14.836 17.2159 16.3404 16.6747 16.5265 14.658C16.6774 13.0344 15.9139 12.3088 14.695 12.0161C15.4368 11.6402 15.9003 10.9761 15.7919 9.86931ZM14.0047 14.4068C14.0047 15.9925 11.2896 15.8127 10.4231 15.8127V13.0001C11.2896 13.0019 14.0047 12.7534 14.0047 14.4068ZM13.4102 10.4394C13.4102 11.8824 11.1442 11.7134 10.4231 11.7143V9.16456C11.1451 9.16456 13.4111 8.93506 13.4102 10.4394Z"
                      fill="#B1B5C3"
                    />
                    <path
                      d="M8.20801 11.9639H8.39775V12.1039H8.20801V11.9639Z"
                      fill="#B1B5C3"
                    />
                  </svg>
                  <p>Balance</p>
                  <h6 class="price">$2,509.75 <span>+9.77%</span></h6>

                  <div class="button">
                    <a href="#">Deposit</a>
                    <a href="#">Withdraw</a>
                  </div>
                </div>
              </div>
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
                  <div class="content-inner" style="height:512px !important;">
              <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                  <div class="tradingview-widget-container__widget"></div>
                  <!-- <div class="tradingview-widget-copyright"><a href="" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div> -->
                  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                  {
                  "width": "100%",
                  "height": "100%",
                  "defaultColumn": "oscillators",
                  "screener_type": "crypto_mkt",
                  "displayCurrency": "USD",
                  "colorTheme": "dark",
                  "locale": "en",
                  "isTransparent": true
                }
                  </script>
                </div>
                <!-- TradingView Widget END -->
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
                src="assets/images/layout/testimonials.png"
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
                We believe XTradeSecurity is here to stay — and that a future worth
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
                      We supports the crypto community, putting data in the hands which need it most.
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
              <h3 class="heading">How It Works</h3>
              <p class="fs-20 desc">
                Trade the world’s most popular markets. Start trading with one-click trading (demo and live), fast trade executions, real-time market data, in-depth market analysis, trader support, and advanced trading tools.
              </p>
            </div>

            <div class="work__main" data-aos="fade-up" data-aos-duration="1000">
              <div class="work-box">
                <div class="image">
                  <img src="assets/images/icon/feat1.png" alt="" />
                </div>
                <div class="content">
                  <p class="step">Step 1</p>
                  <a href="#" class="title">Register Account</a>
                  <p class="text">
                    Create your xTradeSecurity account to unlock all the features and start managing your digital assets.
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
                  <img src="assets/images/icon/feat3.png" alt="" />
                </div>
                <div class="content">
                  <p class="step">Step 2</p>
                  <a href="#" class="title">Connect wallet</a>
                  <p class="text">
                    Seamlessly connect your digital wallet to xTradeSecurity for easy access to trading and wallet services.
                </div>
                <img
                  class="line"
                  src="assets/images/icon/connect-line.png"
                  alt=""
                />
              </div>
              <div class="work-box">
                <div class="image">
                  <img src="assets/images/icon/feat6.png" alt="" />
                </div>
                <div class="content">
                  <p class="step">Step 3</p>
                  <a href="#" class="title">Start trading</a>
                  <p class="text">
                    Begin trading, anytime, on the wide variety of digital assets on xTradeSecurity's secure and user-friendly platform.
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
                  <img src="assets/images/icon/feat4.png" alt="" />
                </div>
                <div class="content">
                  <p class="step">Step 4</p>
                  <a href="#" class="title">Earn money</a>
                  <p class="text">
                    Utilize xTradeSecurity's earning programs to generate income through staking, lending, and bonuses.
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
              <h3 class="heading" id="platforms">Learn, Buy,and Sell Assets on all Platforms</h3>
              <p class="desc">
                XTradeSecurity is available to be enjoyed on most platforms and is the easiest place to buy and sell cryptocurrency. Sign up and get started today.
              </p>
               <div class="blog-box">
                <img class="img-fluid" style="max-width: 100%; height: auto;" src="assets/images/layout/laptop-copy.png" alt="web trader image" title="A Web trader is available on xTradeSecurity" />
            </div>      
            </div>
          </div>

          <div class="col-md-4">
            <div class="blog-box">
             <!-- <div class="box-image">
                <img width="" height="" src="assets/images/layout/web-trader.png" alt="web trader image" title="A Web trader is available on xTradeSecurity" />
              </div>  -->

              <div class="box-content">
                <p href="#" class="category btn-action">Web Trader</p>
                <p href=""
                  >Our browser-based web platform offers a rich set of features and trading tools to ensure an optimized trading experience. Easily access the best market analyses available and speedily execute trades and orders. No download required.</p
                >

                <div class="meta">
                  <a href="#" class="name"><span></span>24/7 Availability</a>
                  <a href="#" class="time">XTradeSecurity</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-box">
           <!--    <div class="box-image">
                <img width="100.33px" height="400.15px" src="assets/images/layout/mobile-phone-trader.png" alt="mobile trader image" title="A Mobile trader is available on xTradeSecurity" />

              </div> -->

              <div class="box-content">
                <p href="#" class="category btn-action">Mobile Trader</p>
                <p href="">Our intuitive multi-asset trading app includes full-featured functionality, real-time charting with all the leading technical indicators and extensive trading tools.
                Enjoy alerts, notifications, friendly one-click navigation and professional charting tools at your fingertips.</p>

                 <div class="meta">
                  <a href="#" class="name"><span></span>24/7 Availability</a>
                  <a href="#" class="time">XTradeSecurity</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog-box">
             <!--  <div class="box-image">
                <img width="100.33px" height="400.15px" src="assets/images/layout/tablet-mobile-view.png" alt="" title="A trader for tablets is available on xTradeSecurity" />
              </div> -->

              <div class="box-content">
                <p href="#" class="category btn-action">Tab Trader</p>
                <p href="">Experience our ultimate portable trading platform on your tablet: advanced graphical interface, quick transactions and deposit, full activity report, intuitive navigation and alerts setting. Our user-friendly platform offers all the leading functionality to suit your needs.</p>

                 <div class="meta">
                  <a href="#" class="name"><span></span>24/7 Availability</a>
                  <a href="#" class="time">XTradeSecurity</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="button-loadmore">
              <a href="user-profile.php">
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
                Get Started</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer section -->
    <?php include "include/footer.php"; ?>

    <!-- Cookie Policy Banner -->
    <div id="cookie-banner" class="cookie-banner">
        <p>We use cookies to ensure you get the best experience on our website. <a href="cookie-policy.php" style="color: #00f;">Learn more</a></p>
        <button onclick="closeCookieBanner()">Got it!</button>
    </div>

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

    <!-- Custom JS -->
    <script src="app/js/cookie.js"></script>
    <script src="app/js/coindata.js"></script>

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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