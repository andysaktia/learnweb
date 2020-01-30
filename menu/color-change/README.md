## include css
```css
.header.header-scrolled {
    background: rgba(6, 12, 34, 0.98);
    height: 70px;
    padding: 15px 0;
    transition: all 0.5s;
}
```

## include js
```js
jQuery(document).ready(function( $ ) {
   
  // Header fixed on scroll
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.header').addClass('header-scrolled');
    } else {
      $('.header').removeClass('header-scrolled');
    } 
  });
  //make scroll up smart in any position
    if ($(window).scrollTop() > 100) {
    $('.header').addClass('header-scrolled');
    }
  
});
```
