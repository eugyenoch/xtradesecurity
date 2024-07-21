<!DOCTYPE html>
<html lang="en">

  <?php include "header.php"; ?>

  <body class="body header-fixed">
    <!-- Header -->
    <header id="header_main" class="header ex">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between">
              <div class="header__left">
               <!-- insert the logo -->
               
               <?php include "logo.php"; ?>

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

    <section class="exchange">
      <div class="exchange__top">
        <div class="price">
          <div class="dropdown">
            <button
              class="btn dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span class="icon-btc"
                ><span class="path1"></span><span class="path2"></span
              ></span>
              <div>
                <h6>BTC/USDT</h6>
                <p>Bitcoin</p>
              </div>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Binance Visa Card</a>
              <a class="dropdown-item" href="#">Crypto Loans</a>
              <a class="dropdown-item" href="#">Binance Pay</a>
            </div>
          </div>

          <div class="price-t">
            <h6>61,075.53</h6>
            <p>≈ 61,075.53 USD</p>
          </div>
        </div>

        <ul class="list">
          <li>
            <p class="unit">24H Change</p>
            <p class="color-success">+1.45%</p>
          </li>
          <li>
            <p class="unit">24H High</p>
            <p class="color-white">62,378.38</p>
          </li>
          <li>
            <p class="unit">24H Low</p>
            <p class="color-white">59,378.38</p>
          </li>
          <li>
            <p class="unit">24H Turnover(USDT)</p>
            <p class="color-white">16,730,064.72</p>
          </li>
          <li>
            <p class="unit">24H Volume(BTC)</p>
            <p class="color-white">273.37</p>
          </li>
        </ul>
      </div>

      <div class="exchange__content">
        <div class="content-left">
          <div class="thirds-row"></div>
        </div>

        <div class="content-right"></div>
      </div>
    </section>

    <script src="app/js/aos.js"></script>
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/jquery.easing.js"></script>
    <script src="app/js/popper.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="app/js/jquery.peity.min.js"></script>
    <script src="app/js/Chart.bundle.min.js"></script>
    <script src="app/js/apexcharts.js"></script>
    <script src="app/js/switchmode.js"></script>

    <script src="app/js/chart.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <!-- Swiper JS -->
    <script src="app/js/swiper-bundle.min.js"></script>

    <script src="app/js/swiper.js"></script>

    <script src="app/js/app.js"></script>

    <script
      type="text/javascript"
      src="https://s3.tradingview.com/tv.js"
    ></script>
    <script type="text/javascript">
      new TradingView.widget({
        container_id: "technical-analysis",
        width: "100%",
        height: 600,
        symbol: "BITSTAMP:BTCUSD",
        interval: "D",
        timezone: "exchange",
        theme: "red",
        style: "1",
        toolbar_bg: "#23262F",
        withdateranges: true,
        hide_side_toolbar: false,
        allow_symbol_change: true,
        save_image: false,
        hideideas: true,
        studies: [
          "ROC@tv-basicstudies",
          "StochasticRSI@tv-basicstudies",
          "MASimple@tv-basicstudies",
        ],
        show_popup_button: true,
        popup_width: "1000",
        popup_height: "650",
      });
    </script>

     <!-- Footer section -->
    <?php include "footer.php"; ?>
  </body>
</html>
