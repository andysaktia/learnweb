# scroll-spy 
make manual scroll-spy menu that with class marker

## include js
```js
(function() {
  'use strict';

  var section = document.querySelectorAll(".section");
  var sections = {};
  var i = 0;

  Array.prototype.forEach.call(section, function(e) {
    sections[e.id] = e.offsetTop; // menagkap nilai scrolltop untuk id
  });
  //console.log(sections); //bisa dicek dengan ini untuk nilai setiap id
  window.onscroll = function() { 
    var scrollPosition = $("body,html").scrollTop(); 
    for (i in sections) {
      var scroll = sections[i] + -200; // decrase value scroll position on id that to be reach
      if (scroll <= scrollPosition) {
        $('li.active').removeClass('active');
        $('li.' + i).addClass('active');
      }
     console.log(scroll);
    }
  };
})();
```
