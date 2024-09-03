<?php include "include/profileHeader.php";?>

  <body>
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="header-content">
                <div class="header-left">
                  <div class="brand-logo">
                    <a href="../index.php">
                      <img src="../assets/images/logo/favicon.png" alt="icon image" title="XTrade Security LTD" />
                      <span>XTrade Security&nbsp;<i class="icofont-price"></i>&nbsp;Prices</span><br>
                      <small>Prices as at today: <?= date('D-M d-Y'); ?></small>
                    </a>
                  </div>
                  <?php include './include/search-crypto.php';?>
                </div>
                <div><a href="exchange.php" class="btn btn-primary" title="Trade on Xtrade exchange">Xtrade Exchange <i class="icofont-price"></i></a></div>
               

                <?php include "include/profileHeadRight.php";?> 
                <?php include "include/sidebar.php";?>

      <div class="content-body">
        <div class="container">
          <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-btc" title="Bitcoin (BTC) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc BTC-alt"></i>
                      <span>Bitcoin</span>
                    </div>
                    <h5><?php if( $currentPrices['bitcoin']['usd'] !== null){echo '$'.$currentPrices['bitcoin']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-eth" title="Ethereum (ETH) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc ETH-alt"></i>
                      <span>Ethereum</span>
                    </div>
                    <h5><?php if($currentPrices['ethereum']['usd'] !== null){echo '$'.$currentPrices['ethereum']['usd'];}else{echo "Fetching prices...";}  ?></h5>
                  </div>
                  <div id="chart2"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-usdt" title="Tether (USDT) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc USDT-alt"></i>
                      <span>Tether</span>
                    </div>
                    <h5><?php if($currentPrices['tether']['usd'] !== null){echo '$'.$currentPrices['tether']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart3"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-xrp" title="Ripple (XRP) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc XRP-alt"></i>
                      <span>Ripple</span>
                    </div>
                    <h5><?php if($currentPrices['ripple']['usd'] !== null){echo '$'.$currentPrices['ripple']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart4"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-ltc" title="Litecoin (LTC) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc LTC-alt"></i>
                      <span>Litecoin</span>
                    </div>
                    <h5><?php if($currentPrices['litecoin']['usd'] !== null){echo '$'.$currentPrices['litecoin']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart5"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-ada" title="Cardano (ADA) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc ADA-alt"></i>
                      <span>Cardano</span>
                    </div>
                    <h5><?php if($currentPrices['cardano']['usd'] !== null){echo '$'.$currentPrices['cardano']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart6"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-eos" title="EOS price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc EOS-alt"></i>
                      <span>EOS</span>
                    </div>
                    <h5><?php if($currentPrices['eos']['usd'] !== null){echo '$'.$currentPrices['eos']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart7"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-xmr" title="Monero (XMR) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc Xme-alt"></i>
                      <span>Monero</span>
                    </div>
                    <h5><?php if($currentPrices['monero']['usd'] !== null){echo '$'.$currentPrices['monero']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart8"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-xtz" title="Tezos (XTZ) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc XTZ-alt"></i>
                      <span>Tezos</span>
                    </div>
                    <h5><?php if($currentPrices['tezos']['usd'] !== null){echo '$'.$currentPrices['tezos']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart9"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-xem" title="NEM (XEM) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc XEM-alt"></i>
                      <span>NEM</span>
                    </div>
                    <h5><?php if($currentPrices['nem']['usd'] !== null){echo '$'.$currentPrices['nem']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart10"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-neo" title="NEO price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc NEO-alt"></i>
                      <span>NEO</span>
                    </div>
                    <h5><?php if($currentPrices['neo']['usd'] !== null){echo '$'.$currentPrices['neo']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart11"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-dash" title="Dash price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc DASH-alt"></i>
                      <span>Dash</span>
                    </div>
                    <h5><?php if($currentPrices['dash']['usd'] !== null){echo '$'.$currentPrices['dash']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart12"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-etc" title="Ethereum Classic (ETC) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc ETC-alt"></i>
                      <span>Ethereum Classic</span>
                    </div>
                    <h5><?php if($currentPrices['ethereum-classic']['usd'] !== null){echo '$'.$currentPrices['ethereum-classic']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart13"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-dgb" title="DigiByte (DGB) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc DGB-alt"></i>
                      <span>DigiByte</span>
                    </div>
                    <h5><?php if($currentPrices['digibyte']['usd'] !== null){echo '$'.$currentPrices['digibyte']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart14"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-dcr" title="Decred (DCR) price today">
                <a href="wallet.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc DCR-alt"></i>
                      <span>Decred</span>
                    </div>
                    <h5><?php if($currentPrices['decred']['usd'] !== null){echo '$'.$currentPrices['decred']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart15"></div>
                </a>
              </div>
            </div>
            <div>
              <span>The Xtrade Forex and cryptocurrency exchange markets offer platforms for trading a wide array of currencies, including traditional fiat money and digital assets like Bitcoin, enabling participants to speculate on price movements and manage financial risks.</span>
            <center><a href="exchange.php" class="btn btn-primary" title="Trade on Xtrade exchange">Trade on Xtrade Exchange</a>&nbsp;<a href="../contact.php" class="btn btn-primary" title="Trade on Xtrade exchange">Contact Help</a></center>
            <br>
            </div>
        </div>
      </div>
    </div>

    <?php include "include/footer.php"; ?>
