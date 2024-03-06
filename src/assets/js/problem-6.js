const videoPlayer = videojs.getPlayer('brightcove-player');

videoPlayer.ready(function() {
    var options = {"showMessageAfter": 1000,"pausePlayerAfter": 1000};
    
    videoPlayer.AFKMonitor(options);
});

const toggleControlbar = () => {
    videoPlayer.toggleClass('show-controlbar');
}

const controlbarButton = document.getElementById('toggle-controlbar-btn');
controlbarButton.addEventListener('click', toggleControlbar);