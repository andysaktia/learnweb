<?php
// i wanna make this code more simple

//Code fo Next and Prev Videos
  $all = 19;
  $next = $eps + 1;
  $prev = $eps - 1;
  $statusPrev = '';
  $statusNext = '';
    if ($eps > 1 && $eps < $all){ 
          if ($next < 10){
          $next = '0'. $next;
           }
          if ($prev < 10){
          $prev = '0' . $prev;
          } 
      } elseif ($eps == 1 ){
         $prev = '#';
         $next = '0'. $next;
         $statusPrev ='disabled'; 
      } elseif ($eps == $all ){
         $next = '#'; 
         $statusNext ='disabled'; 
      } else{
         $next ='#';
         $prev ='#';
         $$statusPrev = 'disabled';
         $$statusNext = 'disabled';
      }
;?>

<div class="mt-3 fsmall">
    <ul class="pagination justify-content-center"> 
        <li class="page-item <?= $statusPrev;?>">
            <a class="page-link" href="<?= BASE_URL .'video.php?id='. $prev ;?>" tabindex="-1">Previous</a>
        </li>
        <li class="page-item <?= $statusNext;?>">
            <a class="page-link" href="<?= BASE_URL .'video.php?id='. $next ;?>">Next</a>
        </li> 
    </ul>
</div> 



<?php 
// pagination modif with array coleration
// dalam kasus ini array kosong akan mengambil key baru yang merupakan key prev/next nya dan mengambil content end/currentnya


   function get_next($array, $key) {
   $currentKey = current($array);
   while ($currentKey !== null && $currentKey != $key) {
       next($array);
       $currentKey = current($array);
   }
   return next($array);
   }

   function get_prev($array, $key) {
   $currentKey = current($array);
   while ($currentKey !== null && $currentKey != $key) {
       next($array);
       $currentKey = current($array);
   }
   return prev($array);
   }

   $arr = $arr_cor; // all array
   $arr_keps = array_keys($arr);  //array that only include array key episode

   $current_eps = $eps; // value episode
   $arr_eps = $arr_cor[$current_eps]; // array current episode that include scene
   $next = get_next($arr_eps, $scenenow);
   $prev = get_prev($arr_eps, $scenenow);

   $classprev = '';
   $classnext = '';


   if ($prev == null) {
     $next_eps = $current_eps;
     $prev_eps = get_prev($arr_keps, $current_eps);
     if($prev_eps == null) {
       $classprev = 'disabled';
     }else{
       $prev = end($arr_cor[$prev_eps]);
     }
   }  elseif ($next == null) {
     $prev_eps = $current_eps;
     $next_eps = get_next($arr_keps, $current_eps);
     if($next_eps == null) {
       $classnext = 'disabled';
     }else{
       $next = current($arr_cor[$next_eps]);
     }
   } else {
     $prev_eps = $current_eps;
     $next_eps = $current_eps;
   }
;?>
  <nav aria-label="Page navigation example" class="float-right">
      <ul class="pagination justify-content-end mt-3">
          <li class="page-item ">
              <a class="page-link <?= $classprev;?>" href="<?= BASE_URL . 'video.php?episode=' . $prev_eps .  '&scene=' . $prev;?>" tabindex="-1">Previous</a>
          </li>
          <li class="page-item ">
              <a class="page-link <?= $classnext;?>" href="<?= BASE_URL . 'video.php?episode=' . $next_eps .  '&scene=' . $next;?>">Next</a>
          </li>
      </ul>
  </nav>