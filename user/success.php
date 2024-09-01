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
                  <!-- <a href="../index.php">
                    <img src="../assets/images/logo/favicon.png" alt="icon image" title="XTrade Security LTD" />
                    <span>XTrade Security</span>
                    </a> -->
                  </div>
                </div>
      <div class="content-body">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Trigger the success modal automatically when the page loads -->
              <script>
                      window.onload = function() {
                        $('#successIdCardModal').modal('show');
                      };
                    </script>

                    <!-- Include the success modal HTML here -->
                    <div class="modal fade" id="successIdCardModal" tabindex="-1" aria-labelledby="successIdCardModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                          <div class="modal-title brand-logo"  id="successIdCardModalLabel">
                                <img src="../assets/images/logo/favicon.png" alt="icon image" title="XTrade Security LTD" />
                                <span>XTrade Security</span>
                          </div>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                          </div>
                          
                          <div class="modal-body">
                          <h4><center>Success</center></h4>
                            <div class="auth-form">
                              <div class="card-body">
                                <div class="identity-content">
                                  <span class="icon"><i class="icofont-email"></i></span>
                                  <h5>Identity Verification Status</h5>
                                  <p>Your identity was successfully submitted. If verified successfully, your investment limit will be increased.</p>
                                </div>
                              </div>
                              <div class="card-footer">
                                <center><a href="user-profile.php" class="btn btn-primary">Return to Dashboard</a></center>
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
    </div>

    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./js/scripts.js"></script>
    <script></script>
  </body>
</html>