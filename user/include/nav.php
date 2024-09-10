<nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                      <li class="menu-item-has-children">
                        <a href="../index.php">Home<svg
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
                          </svg> </a>
                        </li>
                      <li class="menu-item">
                        <a href="transfer.php">Transfer</a>
                      </li>

                      <li class="menu-item-has-children">
                        <a href="#">Trade <i class="fas fa-sort-desc" aria-hidden="true"></i></a><ul class="sub-menu">
                          <li class="menu-item">
                            <a href="user-profile.php">Buy Assets</a>
                          </li>
                          <li class="menu-item">
                            <a href="user-profile.php">Transfer Assets</a>
                          </li>
                          <li class="menu-item">
                            <a href="wallet.php">Withdraw Assets</a>
                          </li>
                          <li class="menu-item">
                            <a href="../index.php#platforms">Platform</a>
                          </li></ul>

                      </li>

                      <li class="menu-item-has-children">
                        <a href="#">Company <i class="fas fa-sort-desc" aria-hidden="true"></i></a>

                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="../about.php">About us</a>
                          </li>
                          <li class="menu-item">
                            <a href="../affiliate-policy.php">Affiliate policy</a>
                          </li>
                          <li class="menu-item">
                            <a href="../cookie-policy.php">Cookie policy</a>
                          </li>
                          <li class="menu-item">
                            <a href="../faq.php">FAQs</a>
                          </li>
                          <li class="menu-item">
                            <a href="../privacy-policy.php">Privacy policy</a>
                          </li>
                          <li class="menu-item">
                            <a href="../terms-of-use.php">Terms of use</a>
                          </li>
                          <li class="menu-item">
                            <a href="../contact.php">Contact</a>
                          </li>
                          
                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a href="#"> Account Pages <i class="fas fa-sort-desc" aria-hidden="true"></i></a>
                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="user-profile.php">Dashboard</a>
                          </li>
                          <?php if(isset($_SESSION['user_session']) && $_SESSION['user_session']!=null): ?>
                            <li class="menu-item">
                            <a href="include/logout.php">Logout</a>
                          </li>
                            <?php endif; ?>

                          <?php if(!isset($_SESSION['user_session'])): ?>
                          <li class="menu-item">
                            <a href="login.php">Login</a>
                          </li>
                          <?php endif; ?>
                        </ul>
                      </li>
                    </ul>
                  </nav>





