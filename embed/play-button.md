## Embed Youtube with play button

### Setting html
add `id` name for js can catch, add `?enablejsapi=1` in src YouTube embed.
```html
  <iframe id="video_live"
     src="https://www.youtube.com/embed/videoseries?list=PL5knwTVjY1-rWDiFsuuitFAD_qvWwQCTX&rel=0&enablejsapi=1&rel=0" allowfullscreen>
  </iframe>
  <button id="play-button">Play</button>
  <button id="pause-button">Pause</button>
```


### Setting js
```js
// global variable for the player
var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player('video_live', {
    events: {
      // call this function when player is ready to use
      'onReady': onPlayerReady
    }
  });
}

function onPlayerReady(event) {

  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });
  
  var pauseButton = document.getElementById("pause-button");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
  });


}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
```


