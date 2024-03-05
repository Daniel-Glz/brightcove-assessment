const videoPlayer = videojs.getPlayer('brightcove-player');

videoPlayer.ready(() => {
    handleReady(videoPlayer);
});

function handleReady (player) {
    player.on('loadedmetadata', handleLoadedMetadata);

    function handleLoadedMetadata () {
        player.muted(true);


        // Following the recommendations of the documentation I used player's setTimeout method
        player.setTimeout(() => {
            const currentTime = player.currentTime();
            const newTime = currentTime + 20;
            player.currentTime(newTime);
        }, 10 * 1000);
    };
};