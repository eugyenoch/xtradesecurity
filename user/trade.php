<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Qash - Crypto Exchange Dashboard UI Kit</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./images/favicon.png"
    />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="./css/style.css" />
  </head>

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
                    <a href="index.html">
                      <img src="./images/logo.png" alt="" />
                      <span>Qash</span>
                    </a>
                  </div>
                  <div class="search">
                    <form action="#">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search Here"
                        />
                        <span class="input-group-text"
                          ><i class="icofont-search"></i
                        ></span>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="header-right">
                  <div class="dark-light-toggle" onclick="themeToggle()">
                    <span class="dark"><i class="icofont-moon"></i></span>
                    <span class="light"><i class="icofont-sun-alt"></i></span>
                  </div>
                  <div class="notification dropdown">
                    <div class="notify-bell" data-toggle="dropdown">
                      <span><i class="icofont-alarm"></i></span>
                    </div>
                    <div
                      class="
                        dropdown-menu dropdown-menu-right
                        notification-list
                      "
                    >
                      <h4>Announcements</h4>
                      <div class="lists">
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon success"
                              ><i class="icofont-check"></i
                            ></span>
                            <div>
                              <p>Account created successfully</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon fail"
                              ><i class="icofont-close"></i
                            ></span>
                            <div>
                              <p>2FA verification failed</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon success"
                              ><i class="icofont-check"></i
                            ></span>
                            <div>
                              <p>Device confirmation completed</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon pending"
                              ><i class="icofont-warning"></i
                            ></span>
                            <div>
                              <p>Phone verification pending</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>

                        <a href="./settings-activity.html"
                          >More <i class="icofont-simple-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>

                  <div class="profile_log dropdown">
                    <div class="user" data-toggle="dropdown">
                      <span class="thumb"
                        ><img src="./images/profile/2.png" alt=""
                      /></span>
                      <span class="arrow"
                        ><i class="icofont-angle-down"></i
                      ></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <div class="user-email">
                        <div class="user">
                          <span class="thumb"
                            ><img src="./images/profile/2.png" alt=""
                          /></span>
                          <div class="user-info">
                            <h5>Jannatul Maowa</h5>
                            <span>Qash.inc@gmail.com</span>
                          </div>
                        </div>
                      </div>

                      <div class="user-balance">
                        <div class="available">
                          <p>Available</p>
                          <span>0.00 BTC</span>
                        </div>
                        <div class="total">
                          <p>Total</p>
                          <span>0.00 USD</span>
                        </div>
                      </div>
                      <a href="profile.html" class="dropdown-item">
                        <i class="icofont-ui-user"></i>Profile
                      </a>
                      <a href="wallet.html" class="dropdown-item">
                        <i class="icofont-wallet"></i>Wallet
                      </a>
                      <a href="settings-profile.html" class="dropdown-item">
                        <i class="icofont-ui-settings"></i> Setting
                      </a>
                      <a href="settings-activity.html" class="dropdown-item">
                        <i class="icofont-history"></i> Activity
                      </a>
                      <a href="lock.html" class="dropdown-item">
                        <i class="icofont-lock"></i>Lock
                      </a>
                      <a href="signin.html" class="dropdown-item logout">
                        <i class="icofont-logout"></i> Logout
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <div class="brand-logo">
          <a href="index.html"><img src="./images/logo.png" alt="" /> </a>
        </div>
        <div class="menu">
          <ul>
            <li>
              <a
                href="index.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Home"
              >
                <span><i class="icofont-ui-home"></i></span>
              </a>
            </li>
            <li>
              <a
                href="trade.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Trade"
              >
                <span><i class="icofont-stack-exchange"></i></span>
              </a>
            </li>
            <li>
              <a
                href="wallet.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Wallet"
              >
                <span><i class="icofont-wallet"></i></span>
              </a>
            </li>
            <li>
              <a
                href="price.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Price"
              >
                <span><i class="icofont-price"></i></span>
              </a>
            </li>
            <li class="logout">
              <a
                href="signin.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Signout"
              >
                <span><i class="icofont-power"></i></span>
              </a>
            </li>
          </ul>

          <p class="copyright">&#169; <a href="#">codeefly</a></p>
        </div>
      </div>

      <div class="content-body">
        <div class="container">
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
                  <h4 class="card-title">Convert</h4>
                </div>
                <div class="card-body">
                  <form
                    method="post"
                    name="myform"
                    class="currency_validate trade-form row g-3"
                  >
                    <div class="col-12">
                      <label class="form-label">From</label>
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
                      <label class="form-label">To</label>
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
                      data-target="#convertModal"
                    >
                      Convert Now
                    </button>
                  </form>
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
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Convert Transaction</h4>
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

    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./vendor/basic-table/jquery.basictable.min.js"></script>
    <script src="./js/plugins/basic-table-init.js"></script>

    <script src="./js/scripts.js"></script>
    <script></script>
  </body>
</html>
