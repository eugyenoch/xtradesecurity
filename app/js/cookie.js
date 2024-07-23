/*
* Use for cookies pop-up
 */
function closeCookieBanner() {
    document.getElementById('cookie-banner').style.display = 'none';
    document.cookie = "cookieConsent=true; path=/; max-age=" + (60*60*24*7); // Set cookie for 7 days
}

function checkCookieConsent() {
    const cookies = document.cookie.split(';');
    for(let cookie of cookies) {
        if(cookie.trim().startsWith("cookieConsent=")) {
            return true;
        }
    }
    return false;
}

window.onload = function() {
    if (!checkCookieConsent()) {
        document.getElementById('cookie-banner').style.display = 'flex';
        setTimeout(() => {
            document.getElementById('cookie-banner').style.display = 'none';
        }, 300000); // 5 minutes
    } else {
        document.getElementById('cookie-banner').style.display = 'none';
    }
};