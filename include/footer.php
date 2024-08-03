<script src="https://widget.coincodex.com/include.js?type=4&ticker=top50&period=1D&textColor=000000&borderColor=dddddd&backgroundColor=ffffff&hoverColor=transparent&currency=USD&range=1D"></script>
<footer class="footer style-2">
      <div class="container">
        <div class="footer__main">
          <div class="row">
            <div class="col-xl-4 col-md-6">
              <div class="info">
                <a href="index.html" class="logo">
                  <img src="assets/images/logo/log-footer.png" alt="" />
                </a>
                <h6>Let's connect! 🤙</h6>
                <ul class="list">
                  <li><p<a href="tel:+123456789101" title="send an email">+12 345 678 9101</a></p></li>
                  <li><p><a href="mailto:support@xtradesecurity.com" title="send an email">support@xtradesecurity.com</a></p></li>
                  <li>
                    <p>
                     Telegr<i class="fab fa-telegram" aria-hidden="true" title="join our telegram channel"></i>m: @xtradesecurity
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="widget">
                <div class="widget-link">
                  <h6 class="title">HELP PAGES</h6>
                  <ul>
                    <li><a href="../about.php">About us</a></li>
                    <li><a href="../faq.php">FAQs</a></li>
                    <li><a href="../privacy-policy.php">Privacy policy</a></li>
                    <li><a href="../terms-of-use.php">Terms of use</a></li>
                    <li><a href="../cookie-policy.php.php">Cookie policy</a></li>
                    <li><a href="../affiliate-policy.php">Affiliate policy</a></li>
                    <li><a href="../contact.php">Support</a></li>
                  </ul>
                </div>
                <div class="widget-link s2">
                  <h6 class="title">SERVICES</h6>
                  <ul>
                    <li><a href="">Buy</a></li>
                    <li><a href="#">Sell</a></li>
                    <li><a href="#">Transfer</a></li>
                    <li><a href="../market.php">Markets</a></li>
                    <li><a href="#">Trading Fees</a></li>
                    <li><a href="#">Wallet</a></li>
                    <li><a href="#">API</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-12">
              <div class="footer-contact">
                <h5>Newletter</h5>
                <p>
                  Subscribe our newsletter to get more free tips and
                  resources.
                </p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="newsletterForm">
                <input type="text" class="form-control" name="fullname" placeholder="Enter your fullname" required /><br>
                  <input type="email" class="form-control" name="email" placeholder="Enter your email" required /><br>
                  <button type="submit" class="btn-action" name="newsletter">Subscribe</button>
                </form>
               
                <ul class="list-social">
                  <!-- <li>
                    <a href="#"><span class="icon-facebook-f"></span></a>
                  </li> -->
                  <li>
                    <a href="#"><span class="fab fa-telegram"></span></a>
                  </li>
                  <li>
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                 <!--  <li>
                    <a href="#"><span class="icon-youtube"></span></a>
                  </li> -->
                  <!-- <li>
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li> -->  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="footer__bottom">
          <p>
           <small>xTradeSecurity does not provide recommendations regarding the merits of any digital asset or financial product mentioned on our platform, including in advertisements, emails, or related websites. The information provided does not consider your individual objectives, financial situation, or needs. You should assess whether these products align with your personal goals and financial circumstances, and carefully consider the risks involved. We recommend reviewing our Client Agreement before making any decisions related to xTradeSecurity’s products. Trading digital assets involves significant risk of loss. Only invest money that you can afford to lose. 
            <br>
            <hr>
            <center><a href="terms-of-use.php" title="Read the terms of use">Terms of Service</a> | <a href="privacy-policy.php" title="Read the terms of use">Privacy policy</a></center></small>
            <hr>
            &copy; <?php echo date('Y');?>&nbsp;xTradeSecurity.com. All rights reserved. <br><br></p>
            <p>
            <center><span><img src="../assets/images/icon/googleplay.png" title="Android app for xTradeSecurity (in Beta)" alt="Google playstore image" /></span>&nbsp;
            <span><img src="../assets/images/icon/appstore.png" title="iOS app for xTradeSecurity (in Beta)" alt="Apple iStore image" /></span></center>
          </p>
        </div>
      </div>
    </footer>


<?php
// Check if the form is submitted
if (isset($_POST['newsletter'])) {
  // Sanitize the email input
  $fullname = sanitize($_POST['fullname']);
  $email = sanitize($_POST['email']);

  // Prepare SQL and bind parameters
  $stmt = $con->prepare("INSERT INTO newsletter (fullname, email_address) VALUES (?, ?)");
  $stmt->bind_param('ss', $fullname, $email);

  // Execute the prepared statement
  if ($stmt->execute()) {
     $toast = 'Subsuccess';
     
  } else {
     $toast==='Subfail';
  }

  // Close the statement
  $stmt->close();
}
?>