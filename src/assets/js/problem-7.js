videojs.registerPlugin('simpleLightbox', function() {
    var myPlayer = this,
    eContainer = document.getElementById("container"),
    eLightbox = document.getElementById("playerLightbox");

    myPlayer.on('loadstart',function(){
      var str = "";

      str += '<img src="' +
        myPlayer.mediainfo.posterSources[0].src + '" alt="' +
        myPlayer.mediainfo.name + '" width="100%" height="100%"/>';
      eContainer.innerHTML = str;

      eContainer.onclick = function(e) {
        eLightbox.className = "playerShow";

        myPlayer.play();
      }

      playerClose.onclick = function(e) {
        myPlayer.pause();

        eLightbox.className = "playerHide";
      }
    })

});

const videoPlayer = videojs.getPlayer('brightcove-player');
videoPlayer.simpleLightbox();