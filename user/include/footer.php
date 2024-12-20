<div class="container">
        <div class="footer__bottom mt-4">
          <hr>
          <p> 
            xtradesecurity.com/Xtrade Security is a trademark of Xtrade Security LTD, registered in England and certified by the registrar of companies for England and Wales. Xtrade security does not provide recommendations regarding the merits of any digital asset or financial product mentioned on our platform, including in advertisements, emails, or related websites. The information provided does not consider your individual objectives, financial situation, or needs. You should assess whether these products align with your personal goals and financial circumstances, and carefully consider the risks involved. We recommend reviewing our Client Agreement before making any decisions related to Xtrade security’s products. Trading digital assets involves significant risk of loss. Only invest money that you can afford to lose. 
            <center>&copy; <?php echo date('Y');?>&nbsp;Xtrade Security LTD. All rights reserved. </center><hr>
            <center><a href="../terms-of-use.php" title="Read the terms of use">Terms of Service</a> | <a href="../privacy-policy.php" title="Read the terms of use">Privacy policy</a></center>
            <hr>
          </p>   
          <p>
            <center><span><a href="https://xtradesecurity.com/mobile-app/app-release.apk" rel="download">
                                <img src="../assets/images/icon/googleplay.png" title="Android app for Xtrade Security (in Beta)" alt="Google Play Store image" />
                            </a></span>&nbsp;
            <span><img src="../assets/images/icon/appstore.png" title="iOS app for Xtrade security (in Beta)" alt="Apple iStore image" /></span></center>
          </p>
        </div>
      </div>
    <div id="google_translate_element"></div>
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./vendor/basic-table/jquery.basictable.min.js"></script>
    <script src="./js/plugins/basic-table-init.js"></script>

    <script src="./vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="./js/plugins/perfect-scrollbar-init.js"></script>

    <script src="./vendor/apexchart/apexcharts.min.js"></script>
    <script src="./js/dashboard.js"></script>
    <script src="./js/plugins/apex-price.js"></script>

    <script src="./vendor/slick/slick.min.js"></script>
    <script src="./js/plugins/slick-init.js"></script>
    <script src="./js/scripts.js"></script> 
    <!-- <script src="https://unpkg.com/@popperjs/core@2"></script> -->

    <script src="../app/js/coindata.js"></script>
    <!--ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <!-- Datatable JS -->
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
      
      <!-- DataTables Buttons extension JS -->
      <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>

      <!-- JSZip (for exporting to Excel, needed by Buttons) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>

      <!-- PDFMake (for exporting to PDF, needed by Buttons) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

      <!-- DataTables Buttons for Excel, PDF, and Print -->
      <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
      
      <!--Custom JS for custom JS -->
    <!-- <script type="text/javascript" src="../app/js/custom-scripts.js"></script> -->

     <!--Toastr-->
     <script type="text/javascript" src="../app/js/toastr.min.js"></script>

<script>
      imgInp.onchange = (evt) => {
        const [file] = imgInp.files;
        if (file) {
          blah.src = URL.createObjectURL(file);
        }
      };

    //DataTables
    $(document).ready(function() {
    $('#refTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#fundTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#withdrawTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#userInvestmentTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#userWalletTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#userTransferTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#userExchangeTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#userBankTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
});

// Upload Proof Script
document.addEventListener('DOMContentLoaded', function() {
    var uploadProofModal = document.getElementById('upload-proof');
    if (uploadProofModal) {
        uploadProofModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var ftxn = button.getAttribute('data-ftxn'); // Extract info from data-* attributes

            // Set the value of the hidden input
            var inputElement = this.querySelector('.modal-body input[name="utxn"]');
            if (inputElement) {
                inputElement.value = ftxn;
            }

            // Set the content of the span
            var spanElement = this.querySelector('.modal-body span[name="utxn"]');
            if (spanElement) {
                spanElement.textContent = ftxn;
            }
        });
    }
});

//Display QR code section and Wallet address
$(document).ready(function() {
    $('#fcurrency_id').change(function() {
        var selectedOption = $(this).find('option:selected');
        var walletAddress = selectedOption.data('address');
        var qrcodeImage = selectedOption.data('qrcode');

        if (walletAddress || qrcodeImage) {
            $('#wallet_address').val(walletAddress);
            $('#qrcode_image').attr('src', '../assets/user-uploads/'+ qrcodeImage);
            $('#walletDetails').show();
        } else {
            $('#walletDetails').hide();
        }
    });

    // Hide the wallet details section initially
    $('#walletDetails').hide();

});

// Copy to clipboard functionality
document.getElementById("copyButton").addEventListener("click", function() {
    var copyText = document.getElementById("wallet_address").value.trim();

    if (copyText === "") {
        alert("No wallet address to copy.");
        return;
    }

    navigator.clipboard.writeText(copyText).then(function() {
        alert("Copied to clipboard: " + copyText);
        document.getElementById("copiedText").innerText = "Copied: " + copyText;
    }).catch(function(error) {
        alert("Failed to copy text: " + error.message);
    });
});

function featureNotAvailable(){
    toastr.info('This feature will be available soon', 'Info');
}
</script>

<script>
// Ensure variables are defined and convert to float
var totalFunded = <?php echo isset($totalFunded) ? floatval(preg_replace('/[^\d.]/', '', $totalFunded)) : 0; ?>;
var totalInvestmentProfit = <?php echo isset($totalInvestmentProfit) ? floatval(preg_replace('/[^\d.]/', '', $totalInvestmentProfit)) : 0; ?>;
var totalExchangeProfit = <?php echo isset($totalExchangeProfit) ? floatval(preg_replace('/[^\d.]/', '', $totalExchangeProfit)) : 0; ?>;
var totalInvestment = <?php echo isset($totalInvestment) ? floatval(preg_replace('/[^\d.]/', '', $totalInvestment)) : 0; ?>;
var totalWithdrawn = <?php echo isset($totalWithdrawn) ? floatval(preg_replace('/[^\d.]/', '', $totalWithdrawn)) : 0; ?>;
var userBalance = <?php echo isset($userBalance) ? floatval(preg_replace('/[^\d.]/', '', $userBalance)) : 0; ?>;

// Chart.js setup
var ctx2 = document.getElementById('moneyChart').getContext('2d');
var moneyChart = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Funded', 'Profit', 'Investments', 'Exchange', 'Withdrawal', 'Balance'],
        datasets: [{
            label: 'Finance ($)',
            data: [totalFunded, totalInvestment, totalInvestmentProfit, totalExchangeProfit, totalWithdrawn, userBalance],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


var ctx3 = document.getElementById('moneyPie').getContext('2d');
var moneyChart = new Chart(ctx3, {
    type: 'doughnut',
    data: {
        labels: ['Funded','Profit','Investments','Exchange','Withdrawal','Balance'],
        datasets: [{
            label: 'Finance ($)',
            data: [totalFunded, totalInvestment, totalInvestmentProfit, totalExchangeProfit, totalWithdrawn, userBalance],
            // backgroundColor: [
            //     'rgba(255,165,0,0.4)',
            // ],
            // borderColor: [
            //     'rgba(255,165,0,1)',
            // ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
  </script>

<!-- Web3 Wallet -->
<script src="https://cdn.jsdelivr.net/npm/ethers@5.7.2/dist/ethers.umd.min.js"></script>

<!-- import Web3.js -->
<!-- <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script> -->
<script>
    const connectWalletButton = document.getElementById('connectWalletButton');
    const walletDetails = document.getElementById('walletDetails');
    const walletAddress = document.getElementById('walletAddress');
    const walletBalance = document.getElementById('walletBalance');

    // Check if wallet details are already stored
    const storedAddress = localStorage.getItem('walletAddress');
    const storedBalance = localStorage.getItem('walletBalance');

    if (storedAddress && storedBalance) {
        walletAddress.innerText = storedAddress;
        walletBalance.innerText = storedBalance;
        walletDetails.style.display = 'block';
        console.log("Wallet details retrieved from localStorage:", storedAddress, storedBalance);
    }

    connectWalletButton.addEventListener('click', async () => {
        // Check if MetaMask is installed
        if (typeof window.ethereum !== 'undefined') {
            try {
                // Request account access if needed
                await window.ethereum.request({ method: 'eth_requestAccounts' });
                
                // Initialize ethers.js provider
                const provider = new ethers.providers.Web3Provider(window.ethereum);
                const signer = provider.getSigner();
                
                // Get user wallet address
                const address = await signer.getAddress();
                
                // Get wallet balance in Ether
                const balance = await provider.getBalance(address);
                const balanceInEth = ethers.utils.formatEther(balance);
                
                // Display wallet details
                walletAddress.innerText = address;
                walletBalance.innerText = balanceInEth;
                walletDetails.style.display = 'block';
                
                // Persist wallet details in localStorage
                localStorage.setItem('walletAddress', address);
                localStorage.setItem('walletBalance', balanceInEth);
                console.log("Wallet details saved to localStorage:", address, balanceInEth);

            } catch (error) {
                console.error("User rejected the request or there was an error:", error);
            }
        } else {
            alert('MetaMask or another Web3 provider is not installed. Please install MetaMask or use Trust Wallet.');
        }
    });

    // Optionally, you can clear the localStorage when the user logs out
    function logout() {
        localStorage.removeItem('walletAddress');
        localStorage.removeItem('walletBalance');
        walletDetails.style.display = 'none';
        console.log("Wallet details removed from localStorage");
    }
</script>

<!-- Google Translate -->
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
document.getElementById("copyBtn").addEventListener("click", function() {
    // Get the wallet address from the output element
    var walletAddress = document.getElementById("walletOutput").innerText;

    // Check if the wallet address is valid
    if (walletAddress.trim() === "" || walletAddress === "Not available; please use your email address instead") {
        alert("No valid wallet address to copy.");
        return;
    }

    // Copy the wallet address to the clipboard using the Clipboard API
    navigator.clipboard.writeText(walletAddress).then(function() {
        // Update the paragraph with a confirmation message
        document.getElementById("copyText").innerText = "Wallet copied: " + walletAddress;
    }).catch(function(error) {
        // Handle any errors during the copying process
        alert("Failed to copy text: " + error);
    });
});
</script>


<script>
    //FOR EXHCNAGE DETAILS
    $(document).ready(function() {
    $('#Ecurrency_id').change(function() {
        var selectedOption = $(this).find('option:selected');
        var exchangeAddress = selectedOption.data('address');
        var qrcodeImage = selectedOption.data('qrcode');
        
        // Log the values for debugging
        console.log("Wallet Address: ", exchangeAddress);
        console.log("QR Code Image: ", qrcodeImage);

        if (exchangeAddress || qrcodeImage) {
            $('#exchange_address').val(exchangeAddress);
            $('#exchange_qrcode_image').attr('src', '../assets/user-uploads/' + qrcodeImage);
            $('#exchangeDetails').show();
        } else {
            $('#exchangeDetails').hide();
        }
    });

    // Hide the wallet details section initially
    $('#exchangeDetails').hide();
    

    // Copy to clipboard functionality
    $('#copyAddressButton').click(function() {
        var copyText = $('#exchange_address').val().trim();

        if (copyText === "") {
            alert("No wallet address to copy.");
            return;
        }

        navigator.clipboard.writeText(copyText).then(function() {
            alert("Copied to clipboard: " + copyText);
            $('#copiedAddressText').text("Copied: " + copyText);
        }).catch(function(error) {
            alert("Failed to copy text: " + error.message);
        });
    });
});

//FOR LOCK FUNDS
$(document).ready(function() {
    $('#Lcurrency_id').change(function() {
        var selectedOption = $(this).find('option:selected');
        var lockAddress = selectedOption.data('address');
        var qrcodeImage = selectedOption.data('qrcode');

        // Log the values for debugging
        console.log("Wallet Address: ", lockAddress);
        console.log("QR Code Image: ", qrcodeImage);

        if (lockAddress || qrcodeImage) {
            $('#lock_address').val(lockAddress);
            $('#lock_qrcode_image').attr('src', '../assets/user-uploads/' + qrcodeImage);
            $('#lockDetails').show();
        } else {
            $('#lockDetails').hide();
        }
    });

    // Hide the wallet details section initially
    $('#lockDetails').hide();

    // Copy to clipboard functionality for the lock address
    $('#copyLockButton').click(function() {
        var copyText = $('#lock_address').val().trim();

        if (copyText === "") {
            alert("No wallet address to copy.");
            return;
        }

        navigator.clipboard.writeText(copyText).then(function() {
            alert("Copied to clipboard: " + copyText);
            $('#copiedLockText').text("Copied: " + copyText);
        }).catch(function(error) {
            alert("Failed to copy text: " + error.message);
        });
    });
});

</script>

 </body>
</html>

<?php
if(isset($toast)){
    if($toast==='success'){
      echo "<script>toastr.success('Your operation was successful', 'Success');</script>";
    }

    if($toast==='Subsuccess'){
     echo "<script>toastr.success('You were subscribed successfully', 'Success');</script>";
    }

    if($toast==='Subfail'){
      echo "<script>toastr.error('A problem was encountered while performing that operation. Contact support', 'Error');</script>";
    }

    if($toast==='fail'){
      echo "<script>toastr.error('We cannot log you in', 'Error')</script>";
    }

    if($toast==='balanceError'){
        echo "<script>toastr.error('You cannot place an order higher than your available balance','Insufficient balance');</script>";
      }
  }
  $con->close();
?>