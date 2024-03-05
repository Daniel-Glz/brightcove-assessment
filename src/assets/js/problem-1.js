const videoPlayer = videojs.getPlayer('brightcove-player');

videoPlayer.ready(() => {
    handleReady(videoPlayer);
});

function handleReady (player) {
    player.on('loadedmetadata', handleLoadedMetadata);

    function handleLoadedMetadata () {
        console.info('Video metadata has been loaded');
        player.muted(true);
        console.info('Video player has been muted');

        console.log('countdown started...');
        player.setTimeout(() => {
            const currentTime = player.currentTime();
            const newTime = currentTime + 20;
            player.currentTime(newTime);
            console.log('Video has been skipped to', newTime);
        }, 10 * 1000);
    };
};