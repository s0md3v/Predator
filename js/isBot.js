function isBot() {
    if ((navigator.mimeTypes.length + navigator.plugins.length) == 0){
        return true
    }
    if (navigator.webdriver == true) {
        return true;
    }
   
    if (window.document.documentElement.getAttribute('webdriver')) {
        return true;
    }
    
    if (window.callPhantom || window._phantom) {
        return true;
    }

    return false;
};