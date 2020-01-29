/*---------------------------------------------------------------------
    File Name: custom.menu.js
---------------------------------------------------------------------*/
 
jQuery(document).ready(function( $ ) {
   
  // Header fixed on scroll
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.header').addClass('header-scrolled');
    } else {
      $('.header').removeClass('header-scrolled');
    }
  });
  
  
});
