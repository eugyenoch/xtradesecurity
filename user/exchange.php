<?php include "include/profileHeader.php";?>

  <body>
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xxl-12">
              <div class="header-content">
                <div class="header-left">
                  <div class="brand-logo">
                  <a href="../index.php">
                    <img src="../assets/images/logo/favicon.png" alt="icon image" title="XTrade Security LTD" />
                      <span>XTrade Security&nbsp;<i class="icofont-stack-exchange"></i>&nbsp; Exchange and Trading</span>
                    </a>
                  </div>
                  <?php include './include/search-crypto.php';?>
                </div>

                <?php include "include/profileHeadRight.php";?>
      <?php include "include/sidebar.php";?>

      <div class="content-body">
        <div class="container">
        <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Convert Transaction</h4>
                </div>
                <div class="card-body">
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
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
                </div>
                <div class="card-body">
                <iframe id='iframe-widget' src='https://changenow.io/embeds/exchange-widget/v2/widget.html?FAQ=true&amount=0.1&amountFiat=1500&backgroundColor=FFFFFF&darkMode=false&from=btc&fromFiat=eur&horizontal=true&isFiat&lang=en-US&link_id=3969d24d1a8606&locales=true&logo=false&primaryColor=00C26F&to=eth&toFiat=eth&toTheMoon=true' style="height: 205px; width: 100%; border: none"></iframe>
                  <script defer type='text/javascript' src='https://changenow.io/embeds/exchange-widget/v2/stepper-connector.js'></script>
                 </div>
          <div class="row">
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Buy</h4>
                </div>
                <div class="card-body">
                  <form
                    method="post"
                    name="myform"
                    class="currency_validate trade-form row g-3"
                  >
                    <div class="col-12">
                      <label class="form-label">Send</label>
                      <div class="input-group">
                        <select class="form-control" name="method">
                          <option value="bank">USD</option>
                          <option value="master">Euro</option>
                        </select>
                        <input
                          type="text"
                          name="currency_amount"
                          class="form-control"
                          placeholder="0.0214 BTC"
                        />
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Receive</label>
                      <div class="input-group">
                        <select class="form-control" name="method">
                          <option value="bank">BTC</option>
                          <option value="master">ETH</option>
                        </select>
                        <input
                          type="text"
                          name="currency_amount"
                          class="form-control"
                          placeholder="0.0214 BTC"
                        />
                      </div>
                    </div>

                    <p class="mb-0">
                      1 USD ~ 0.000088 BTC
                      <a href="#">Expected rate <br />No extra fees</a>
                    </p>

                    <!-- <button type="submit" name="submit" class="btn btn-success btn-block">Exchange
                                        Now</button> -->
                    <button
                      type="button"
                      class="btn btn-primary btn-block"
                      data-toggle="modal"
                      data-target="#BuyModal"
                    >
                      Buy Now
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Sell</h4>
                </div>
                <div class="card-body">
                  <form
                    method="post"
                    name="myform"
                    class="currency_validate trade-form row g-3"
                  >
                    <div class="col-12">
                      <label class="form-label">Send</label>
                      <div class="input-group">
                        <select class="form-control" name="method">
                          <option value="bank">USD</option>
                          <option value="master">Euro</option>
                        </select>
                        <input
                          type="text"
                          name="currency_amount"
                          class="form-control"
                          placeholder="0.0214 BTC"
                        />
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Receive</label>
                      <div class="input-group">
                        <select class="form-control" name="method">
                          <option value="bank">BTC</option>
                          <option value="master">ETH</option>
                        </select>
                        <input
                          type="text"
                          name="currency_amount"
                          class="form-control"
                          placeholder="0.0214 BTC"
                        />
                      </div>
                    </div>

                    <p class="mb-0">
                      1 USD ~ 0.000088 BTC
                      <a href="#">Expected rate <br />No extra fees</a>
                    </p>

                    <button
                      type="button"
                      class="btn btn-primary btn-block"
                      data-toggle="modal"
                      data-target="#SellModal"
                    >
                      Sell Now
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Transfer</h4>
                </div>
                <div class="card-body">
                  <form
                    name="myform"
                    class="currency_validate trade-form row g-3"
                  >
                    <div class="col-12">
                      <label class="form-label">Send</label>
                      <div class="input-group">
                        <select class="form-control" name="method">
                          <option value="bank">USD</option>
                          <option value="master">Euro</option>
                        </select>
                        <input
                          type="text"
                          name="currency_amount"
                          class="form-control"
                          placeholder="0.0214 BTC"
                        />
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Receive</label>
                      <div class="input-group">
                        <select class="form-control" name="method">
                          <option value="bank">BTC</option>
                          <option value="master">ETH</option>
                        </select>
                        <input
                          type="text"
                          name="currency_amount"
                          class="form-control"
                          placeholder="0.0214 BTC"
                        />
                      </div>
                    </div>

                    <p class="mb-0">
                      1 USD ~ 0.000088 BTC
                      <a href="#">Expected rate <br />No extra fees</a>
                    </p>

                    <button
                      type="button"
                      class="btn btn-success btn-block"
                      data-toggle="modal"
                      data-target="#transferModal"
                    >
                      Transfer Now
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Trade with convinience</h4>
                </div>
                <div class="card-body">
                <div id="currency-converter-892836"><script type="text/javascript" src="https://www.cashbackforex.com/Content/remote/remote-widgets.js"></script><script type="text/javascript"> RemoteCalc({"Url":"https://www.cashbackforex.com", "TopPaneStyle":"YmFja2dyb3VuZDogdHJhbnNwYXJlbnQgIWltcG9ydGFudDsgY29sb3I6IGJsYWNrOyBib3JkZXI6IG5vbmU7IGJvcmRlci1ib3R0b206IG5vbmU7IA==","BottomPaneStyle":"YmFja2dyb3VuZDogdHJhbnNwYXJlbnQgIWltcG9ydGFudDsgYm9yZGVyOiBzb2xpZCAxcHggZ3JleTsgY29sb3I6IGJsYWNrOw==","ButtonStyle":"YmFja2dyb3VuZDogYmxhY2s7IGNvbG9yOiB3aGl0ZTsgYm9yZGVyLXJhZGl1czogMjBweDs=","TitleStyle":"dGV4dC1hbGlnbjogbGVmdDsgZm9udC1zaXplOiAxNnB4OyBmb250LXdlaWdodDogNTAwOw==","TextboxStyle":"YmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQgIWltcG9ydGFudCAhaW1wb3J0YW50OyBjb2xvcjogYmxhY2s7IGJvcmRlcjogMXB4IHNvbGlkIGdyZXk7","ContainerWidth":"250","HighlightColor":"#ffff00","IsDisplayTitle":false,"IsShowEmbedButton":false,"CompactType":"small","DefaultCurrencyFrom":"USD","DefaultCurrencyTo":"USD","Calculator":"currency-converter","ContainerId":"currency-converter-892836"});</script></div>
                   </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Buy Transaction</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>Type</th>
                          <th>Coin Name</th>
                          <th>Wallet</th>
                          <th>Amount</th>
                          <th>Balance</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span class="danger-arrow"
                              ><i class="icofont-arrow-down"></i> Sold</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc BTC"></i> Bitcoin
                          </td>
                          <td>Using - Bank *******5264</td>
                          <td class="text-danger">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="success-arrow"
                              ><i class="icofont-arrow-up"></i> Buy</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc LTC"></i> Litecoin
                          </td>
                          <td>Using - Card *******8475</td>
                          <td class="text-success">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="danger-arrow"
                              ><i class="icofont-arrow-down"></i> Sold</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc XRP"></i> Ripple
                          </td>
                          <td>Using - Card *******8475</td>
                          <td class="text-danger">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="success-arrow"
                              ><i class="icofont-arrow-up"></i> Buy</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc DASH"></i> Dash
                          </td>
                          <td>Using - Card *******2321</td>
                          <td class="text-success">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="danger-arrow"
                              ><i class="icofont-arrow-down"></i> Sold</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc BTC"></i> Bitcoin
                          </td>
                          <td>Using - Card *******2321</td>
                          <td class="text-danger">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Sell Transaction</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>Type</th>
                          <th>Coin Name</th>
                          <th>Wallet</th>
                          <th>Amount</th>
                          <th>Balance</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span class="danger-arrow"
                              ><i class="icofont-arrow-down"></i> Sold</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc BTC"></i> Bitcoin
                          </td>
                          <td>Using - Bank *******5264</td>
                          <td class="text-danger">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="success-arrow"
                              ><i class="icofont-arrow-up"></i> Buy</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc LTC"></i> Litecoin
                          </td>
                          <td>Using - Card *******8475</td>
                          <td class="text-success">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="danger-arrow"
                              ><i class="icofont-arrow-down"></i> Sold</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc XRP"></i> Ripple
                          </td>
                          <td>Using - Card *******8475</td>
                          <td class="text-danger">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="success-arrow"
                              ><i class="icofont-arrow-up"></i> Buy</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc DASH"></i> Dash
                          </td>
                          <td>Using - Card *******2321</td>
                          <td class="text-success">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="danger-arrow"
                              ><i class="icofont-arrow-down"></i> Sold</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc BTC"></i> Bitcoin
                          </td>
                          <td>Using - Card *******2321</td>
                          <td class="text-danger">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Transfer Transaction</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>Type</th>
                          <th>Coin Name</th>
                          <th>Wallet</th>
                          <th>Amount</th>
                          <th>Balance</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span class="danger-arrow"
                              ><i class="icofont-arrow-down"></i> Sold</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc BTC"></i> Bitcoin
                          </td>
                          <td>Using - Bank *******5264</td>
                          <td class="text-danger">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="success-arrow"
                              ><i class="icofont-arrow-up"></i> Buy</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc LTC"></i> Litecoin
                          </td>
                          <td>Using - Card *******8475</td>
                          <td class="text-success">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="danger-arrow"
                              ><i class="icofont-arrow-down"></i> Sold</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc XRP"></i> Ripple
                          </td>
                          <td>Using - Card *******8475</td>
                          <td class="text-danger">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="success-arrow"
                              ><i class="icofont-arrow-up"></i> Buy</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc DASH"></i> Dash
                          </td>
                          <td>Using - Card *******2321</td>
                          <td class="text-success">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="danger-arrow"
                              ><i class="icofont-arrow-down"></i> Sold</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc BTC"></i> Bitcoin
                          </td>
                          <td>Using - Card *******2321</td>
                          <td class="text-danger">-0.000242 BTC</td>
                          <td>-0.125 USD</td>
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
        </div>
      </div>
    </div>

    <!-- Buy Modal -->
    <div class="modal fade" id="BuyModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td><span class="text-primary">Buyer Email</span></td>
                    <td><span class="text-primary">buyer@example.com</span></td>
                  </tr>
                  <tr>
                    <td><span class="text-primary">Seller Email</span></td>
                    <td>
                      <span class="text-primary">seller@example.com</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Exchange Rate</td>
                    <td>0.00212455 BTC</td>
                  </tr>
                  <tr>
                    <td>Fee</td>
                    <td>$28.00 USD</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>$854.00 USD</td>
                  </tr>
                  <tr>
                    <td>Vat</td>
                    <td>
                      <div class="text-danger">$25.00 USD</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sub Total</td>
                    <td>$1232.00 USD</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-end">
              <button
                type="button"
                class="btn btn-primary"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#buySuccessleModal"
              >
                Confirm
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="buySuccessleModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <form action="verify-step-2.html" class="identity-upload">
                <div class="identity-content">
                  <span class="icon"><i class="icofont-check"></i></span>
                  <p>Congratulation. Your transaction is successful</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a href="signup.html">Go to Transaction</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Buy Modal -->
    <div class="modal fade" id="SellModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td><span class="text-primary">Buyer Email</span></td>
                    <td><span class="text-primary">buyer@example.com</span></td>
                  </tr>
                  <tr>
                    <td><span class="text-primary">Seller Email</span></td>
                    <td>
                      <span class="text-primary">seller@example.com</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Exchange Rate</td>
                    <td>0.00212455 BTC</td>
                  </tr>
                  <tr>
                    <td>Fee</td>
                    <td>$28.00 USD</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>$854.00 USD</td>
                  </tr>
                  <tr>
                    <td>Vat</td>
                    <td>
                      <div class="text-danger">$25.00 USD</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sub Total</td>
                    <td>$1232.00 USD</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-end">
              <button
                type="button"
                class="btn btn-primary"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#buySuccessleModal"
              >
                Confirm
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="SellSuccessleModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <form action="verify-step-2.html" class="identity-upload">
                <div class="identity-content">
                  <span class="icon"><i class="icofont-check"></i></span>
                  <p>Congratulation. Your transaction is successful</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a href="signup.html">Go to Transaction</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Transfer Modal -->
    <div class="modal fade" id="transferModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td><span class="text-primary">Buyer Email</span></td>
                    <td><span class="text-primary">buyer@example.com</span></td>
                  </tr>
                  <tr>
                    <td><span class="text-primary">Seller Email</span></td>
                    <td>
                      <span class="text-primary">seller@example.com</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Exchange Rate</td>
                    <td>0.00212455 BTC</td>
                  </tr>
                  <tr>
                    <td>Fee</td>
                    <td>$28.00 USD</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>$854.00 USD</td>
                  </tr>
                  <tr>
                    <td>Vat</td>
                    <td>
                      <div class="text-danger">$25.00 USD</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sub Total</td>
                    <td>$1232.00 USD</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-end">
              <button
                type="button"
                class="btn btn-primary"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#transferSuccessModal"
              >
                Confirm
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="transferSuccessModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <form action="verify-step-2.html" class="identity-upload">
                <div class="identity-content">
                  <span class="icon"><i class="icofont-check"></i></span>
                  <p>Congratulation. Your transaction is successful</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a href="signup.html">Go to Transaction</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Convert Modal -->
    <div class="modal fade" id="convertModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td><span class="text-primary">Buyer Email</span></td>
                    <td><span class="text-primary">buyer@example.com</span></td>
                  </tr>
                  <tr>
                    <td><span class="text-primary">Seller Email</span></td>
                    <td>
                      <span class="text-primary">seller@example.com</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Exchange Rate</td>
                    <td>0.00212455 BTC</td>
                  </tr>
                  <tr>
                    <td>Fee</td>
                    <td>$28.00 USD</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>$854.00 USD</td>
                  </tr>
                  <tr>
                    <td>Vat</td>
                    <td>
                      <div class="text-danger">$25.00 USD</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sub Total</td>
                    <td>$1232.00 USD</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-end">
              <button
                type="button"
                class="btn btn-primary"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#convertSuccessModal"
              >
                Confirm
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="convertSuccessModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <form action="verify-step-2.html" class="identity-upload">
                <div class="identity-content">
                  <span class="icon"><i class="icofont-check"></i></span>
                  <p>Congratulation. Your transaction is successful</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a href="signup.html">Go to Transaction</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "modalForms.php"; ?>
    <?php include "include/footer.php"; ?>
