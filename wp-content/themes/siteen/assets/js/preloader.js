jQuery(document).ready(function() {
 
  // Fakes the loading setting a timeout
    setTimeout(function() {
        jQuery('body').addClass('loaded');
        jQuery('body').bind('touchmove', function(e){e.preventDefault()})
        // window.onscroll = function () { window.scrollTo(0, 0); };
    }, 1500);
 
});

