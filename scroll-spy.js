(function() {
  'use strict';

  var section = document.querySelectorAll(".section");
  var sections = {};
  var i = 0;

  Array.prototype.forEach.call(section, function(e) {
    sections[e.id] = e.offsetTop;
  });

  window.onscroll = function() {
    var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

    for (i in sections) {
      if (sections[i] <= scrollPosition) {
        document.querySelector('.active').setAttribute('class', ' ');
        document.querySelector('a[href*=' + i + ']').setAttribute('class', 'active');
      }
    }
  };
})();


https://codepen.io/zchee/pen/ogzvZZ


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
      var scroll = sections[i] + -200; // mengurangi nilai scroll pada id yang ditangkap
      if (scroll <= scrollPosition) {
        $('li.active').removeClass('active');
        $('li.' + i).addClass('active');
      }
     console.log(scroll);
    }
  };
})();
/*
item link berisi name id

<li class="<?= $item['link'];?> <?= $item['class'];?>">
  <a  href="<?= BASE_URL ;?>#<?= $item['link'];?>"><?= $item['name'];?></a>
</li>

<section class="section" id="<?= $menus['1']['link'];?>">
<section class="section" id="<?= $menus['2']['link'];?>">
<section class="section" id="<?= $menus['3']['link'];?>">
<section class="section" id="<?= $menus['4']['link'];?>">

*/