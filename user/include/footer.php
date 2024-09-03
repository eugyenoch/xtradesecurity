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
            <center><span><img src="../assets/images/icon/googleplay.png" title="Android app for Xtrade security (in Beta)" alt="Google playstore image" /></span>&nbsp;
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
    <script src="https://unpkg.com/@popperjs/core@2"></script>

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
    <script type="text/javascript" src="../app/js/custom-scripts.js"></script>

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
    $('#investmentTable').DataTable({
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
    $('#userBankTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
});

//Upload Proof Script
$(document).ready(function() {
    $('#upload-proof').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var ftxn = button.data('ftxn'); // Extract info from data-* attributes
        var modal = $(this);

        // Set the value of the hidden input
        modal.find('.modal-body input[name="utxn"]').val(ftxn);

        // Set the content of the span
        modal.find('.modal-body span[name="utxn"]').text(ftxn);
    });
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

function featureNotAvailable(){
    toastr.info('This feature will be available soon', 'Info');
}
</script>

<script>
// Ensure variables are defined and convert to float
var totalFunded = <?php echo isset($totalFunded) ? floatval(preg_replace('/[^\d.]/', '', $totalFunded)) : 0; ?>;
var totalInvestmentProfit = <?php echo isset($totalInvestmentProfit) ? floatval(str_replace('$', '', $totalInvestmentProfit)) : 0; ?>;
var totalInvestment = <?php echo isset($totalInvestment) ? floatval(str_replace('$', '', $totalInvestment)) : 0; ?>;
var totalWithdrawn = <?php echo isset($totalWithdrawn) ? floatval(str_replace('$', '', $totalWithdrawn)) : 0; ?>;
var userBalance = <?php echo isset($userBalance) ? floatval(preg_replace('/[^\d.]/', '', $userBalance)) : 0; ?>;

var ctx2 = document.getElementById('moneyChart').getContext('2d');
var moneyChart = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['Funded','Profit','Investments','Withdrawal','Balance'],
        datasets: [{
            label: 'Finance ($)',
            data: [totalFunded, totalInvestmentProfit, totalInvestment, totalWithdrawn, userBalance],
            backgroundColor: [
                'rgba(255,165,0,0.4)',
            ],
            borderColor: [
                'rgba(255,165,0,1)',
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

 </body>
</html>

<?php
if(isset($toast)){
    if($toast==='success'){
      echo "<script>toastr.success('You will be redirected shortly', 'Success');</script>";
    }

    if($toast==='Subsuccess'){
     echo "<script>toastr.success('You were subscribed successfully', 'Success');</script>";
    }

    if($toast==='Subfail'){
      echo "<script>toastr.error('A problem was encountered while performing that operation', 'Error');</script>";
    }

    if($toast==='fail'){
      echo "<script>toastr.error('We cannot log you in', 'Error')</script>";
    }
  }
  $con->close();
?>