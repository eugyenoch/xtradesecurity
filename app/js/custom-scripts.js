/*For copying to clipboard*/
// document.getElementById("copyButton").addEventListener("click", function() {
//     // Get the text field
//     var copyText = document.getElementById("inputText").value;

//     // Copy the text to the clipboard using the Clipboard API
//     navigator.clipboard.writeText(copyText).then(function() {
//         // Display an alert box
//         alert("Copied to clipboard: " + copyText);

//          // Update the paragraph with the ID 'copiedText'
//          document.getElementById("copiedText").innerText = "Copied: " + copyText;
//     }).catch(function(error) {
//         // Display an alert box for the error
//         alert("Failed to copy text: " + error);
//     });
// });